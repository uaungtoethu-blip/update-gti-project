<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Heading;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Blog::truncate();
        User::truncate();
        Heading::truncate();
       
         
        Heading::factory()->create();
        $mgmg = User::factory()->create([
            'name'=>'mgmg',
            'username'=>"mg-mg"
        ]);
        $soesoe = User::factory()->create(['name'=>'soesoe','username'=>'soe-soe']);
        Heading::factory()->create();
        Blog::factory(5)->create(['user_id'=>$mgmg]);
        Blog::factory(5)->create(['user_id'=>$soesoe]);
    }
}
