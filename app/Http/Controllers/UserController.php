<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function admIndex(){
        return view('admin-index',[
        'blogs'=>Blog::with('author')->latest()->filter(request(['searchValue','author']))->paginate(6)->withQueryString()
        ]);
    }
    public function update(User $user){
        $img = request()->file('profileImg');
        $userData = request()->validate([
           'name'=>['required','min:4','max:20'],
            'username'=>['required','min:4','max:20',Rule::unique('users','username')->ignore($user->id)],
        ]);
        $userData['profileImg']=request('profileImg')?$img->store('image'):$user->profileImg;
        $user->update($userData);
        return redirect('/')->with('success','Your Profile is successfully updated');
    }
    public function destroy(User $user){
        $user->delete();
        return redirect()->back();
    }
    public function register(){
        return view('authentication.register');
    }
    public function store(){
        $registerData = request()->validate([
            'name'=>['required','min:4','max:16'],
            'username'=>['required','min:4','max:16',Rule::unique('users','username')],
            'email'=>['required','email',Rule::unique('users','email')],
            'password'=>['required','min:8'],
            
            ]);
            $registerData['profileImg']='/image/logo.jpg';
        $userData=User::create($registerData);
        Auth::login($userData);
        return redirect('/')->with('success','Welcome From GTI(NPT)');
    }

    public function logout(){
        Auth::logout();
        return redirect('/')->with('success','bye seeyou again!!!');
    }

    public function loginForm(){
        return view('authentication.login');
    }

    public function login(){
        $loginData = request()->validate([
            'email'=>['required',Rule::exists('users','email')],
            'password'=>['required']
        ]);
        $username = $loginData;
        if(Auth::attempt($loginData)){
            return redirect('/')->with('success','welcome back '.ucwords($username['email']));
        }else{
            return redirect()->back()->withErrors([
                 'email'=>'email is invalid',
                 'password'=>'password id invalid'
            ]);
        }
    }

}
