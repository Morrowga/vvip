@extends('layouts.app')

@section('content')
<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm" style="background-color: #000 !important;">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/home') }}">
            <img src="../images/logo.jpeg" alt="" width="100" height="100">
        </a>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            @if(Auth::user()->name)
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>
            <input type="text" id="userid" value="{{ Auth::user()->id }}" hidden>
            @else
            <a href="" hidden></a>
            @endif
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
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
<div class="container" id="home_height" style="height: 800px;">
    <div class="col-md-12 menu mt-3">
        <div class="d-flex justify-content-center">
            <div class="col text-right home-col">
                <img src="https://i.ibb.co/Z6f6Dfq/action.jpg" alt="" id="action" width="350" height="280">
                <a href="/action" class="btn btn-dark action">ACTION</a>
            </div>
            <div class="col text-left home-col">
                <img src="https://i.ibb.co/4gBD13g/create.jpg" alt="" id="create" width="350" height="280">
                <a href="/create_data" class="btn btn-dark create">CREATE</a>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="col text-right home-col" style="margin-top: 25px !important;">
                <img src="https://i.ibb.co/fG0HJ4N/profile.jpg" alt="" id="profile" width="350" height="280">
                <a href="/profile" class="btn btn-dark profile">PROFILE</a>
            </div>
            <div class="col text-left home-col" style="margin-top: 25px !important;">
                <img src="https://i.ibb.co/0nFM29f/setting.jpg" alt="" id="setting" width="350" height="280">
                <a href="/setting" class="btn btn-dark setting">SETTING</a>
            </div>
        </div>
    </div>
</div>
@endsection