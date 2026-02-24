<nav class="navbar navbar-expand-sm navbar-light bg-secondary fixed-top bg-opacity-75 position-fixed py-0" style="top: 5px">

    <div class="container-fluid">
      <a class="navbar-brand d-flex align-items-center" href="/">
        <img src="" alt="">
        <span class="text-info">GTI(NayPyiTaw)</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse ms-5" id="mainNavbar">
        <ul class="navbar-nav mx-auto text-center">
        <li class="nav-item mx-2">
          <a href="/" class="nav-link active text-info">Home</a>
        </li>
        

        @canany(['admin','it_teacher','cv_teacher','ec_teacher','mp_teacher','fm_teacher','ep_teacher'])

        <li class="nav-item dropdown mx-2">
          <a href="#" class="nav-link dropdown-toggle text-info" role="button" data-bs-toggle="dropdown" aria-expanded="false">Roll-Call</a>
          <ul class="dropdown-menu dropdown-menu-dark">
            
            @canany(['it_teacher','admin'])
            <li><a href="{{ route('rollcall.index', 'IT') }}" class="dropdown-item text-info">IT</a></li>
            @endcanany
            @canany(['cv_teacher','admin'])
            <li><a href="{{ route('rollcall.index', 'CIVIL') }}" class="dropdown-item text-info">Civil</a></li>
            @endcanany
            @canany(['mp_teacher','admin'])
            <li><a href="{{ route('rollcall.index', 'MP') }}" class="dropdown-item text-info">Mp</a></li>
            @endcanany
            @canany(['ec_teacher','admin'])
            <li><a href="{{ route('rollcall.index', 'EC') }}" class="dropdown-item text-info">Ec</a></li>
            @endcanany
            @canany(['fm_teacher','admin'])
            <li><a href="{{ route('rollcall.index', 'FM') }}" class="dropdown-item text-info">Fm</a></li>
            @endcanany
            @canany(['ep_teacher','admin'])
            <li><a href="{{ route('rollcall.index', 'EP') }}" class="dropdown-item text-info">Ep</a></li>
            @endcanany
          </ul>
        </li>
        @endcanany
        @can('admin')
          
        <li class="nav-item">
          <a href="/admin/hostel/list" class="nav-link active text-info">Dashbord</a>
        </li>
        @endcan
        

        <li class="nav-item mx-2">
          <x-nav.nav-search-form />
        </li>
      </ul>

      {{-- this is auth user premission --}}
      @auth

      <ul class="navbar-nav">
       
        <li class="nav-item">
          <div class="d-flex">

            <img src="/storage/{{auth()->user()->profileImg}}" class="rounded-circle mt-1 border border-2 border-info" width="30px" height="30px" alt="">
            <small class="text-info fs-6 btn ">{{auth()->user()->name}}</small>
          </div>
        </li>
        <li class="nav-item mt-2">
          <x-setting></x-setting>
        {{--  --}}
          {{--  --}}
        </li>
      </ul>
      @endauth

      {{-- this is guest premission --}}

      @guest
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="/login" class="btn btn-primary btn-sm ms-3">Login</a>
        </li>
      </ul>
      @endguest
    </div>
  </nav>