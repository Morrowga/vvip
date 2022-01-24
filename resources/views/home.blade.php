@extends('layouts.app')

@section('content')

<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm" style="background-color: #000 !important;">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/home') }}">
            <img src="../images/logo.jpeg" alt="" width="80" height="80">
        </a>
        <!-- <a href="/spin_wheel" id="spinwheel" class="lucky">LUCKY DRAW DAILY <img src="https://www.pngall.com/wp-content/uploads/10/Spinning-Wheel-Vector-PNG-Photos.png" class="pl-2" alt="" width="50" height="50"></a> -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            @if(Auth::user()->name)
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                <img width="50" height="50" id="profile_img" alt=""> {{ Auth::user()->name }}
            </a>
            <input type="text" id="userid" value="{{ Auth::user()->id }}" hidden>
            @else
            <a href="" hidden></a>
            @endif
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item dropdown_logout" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                  {{ __('Logout') }} <i class="fas fa-power-off"></i>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
    </ul>
    </div>
</nav>
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div id="countdown">
                <div id="days"></div>
                <div id="hours"></div>
                <div id="minutes"></div>
                <div id="seconds"></div>
            </div>
            <div class="d-flex justify-content-center">
                <img src="../images/logo.jpeg" alt="" class="register_image">
            </div>
            <p class="panel-text">You need to wait until 2days cause this panel can use only with smart card.</p>
        </div>
    </div>
</div> -->
<div class="container" id="home_height">
    <div class="col-md-12">
        <div class="d-flex justify-content-between">
            <h1 class="text">{{ __('website.welcome') }}</h1>
        </div>
        <div class="d-flex justify-content-center">
            <p class="text" id="welcome_text"></p>
        </div>
    </div>
    <div class="col-md-12 menu mt-3">
        <div class="d-flex justify-content-center">
            <div class="col-md-6 col-md-offset-3">
                <div class="row">
                    <div class="col home-col text-center">
                        <a class="homelink" href="/action"><img src="https://i.ibb.co/4gBD13g/create.jpg" alt="" class="img-fluid"></a>
                        <p class="home_text">Action</p>
                    </div>
                    <div class="col home-col text-center">
                        <a class="homelink" href="/create_data"><img src="https://i.ibb.co/4gBD13g/create.jpg" alt="" class="img-fluid"></a>
                        <p class="home_text">Create</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="col-md-6 col-md-offset-3 mt-3">
                <div class="row">
                    <div class="col home-col text-center">
                        <a class="homelink" href="/profile"><img src="https://i.ibb.co/4gBD13g/create.jpg" alt="" class="img-fluid"></a>
                        <p class="home_text">Profile</p>
                    </div>
                    <div class="col home-col text-center">
                        <a class="homelink" href="/list"><img src="https://i.ibb.co/4gBD13g/create.jpg" alt="" class="img-fluid"></a>
                        <p class="home_text">Settings</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="space-lift-home"></div>

@endsection


