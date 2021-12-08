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
<div class="container" id="home_height" style="height: 1000px;">
    <div class="col-md-12">
        <div class="d-flex justify-content-between">
            <h1 class="text">{{ __('website.welcome') }}</h1>
            @if(Auth::user()->secure_status == 'private')
            <button class="btn btn-dark bell text-right">Notification<i class="far fa-bell pl-2"></i></button>
            @endif
        </div>
        <div class="d-flex justify-content-center">
            <p class="text" id="welcome_text"></p>
        </div>
    </div>
    <div class="col-md-12 menu mt-3">
        <div class="d-flex justify-content-center">
            <div class="col text-right home-col">
                <div class="col-md-12 text-center">
                    <a href="/action" class="btn btn-dark action"><i class="fas fa-exchange-alt pr-2"></i>{{ __('website.action') }}</a>
                </div>
                <div class="col-md-12 mt-4 text-center">
                    <img src="https://i.pinimg.com/originals/98/85/79/988579fea8473f5dd48741d6321c2571.jpg" alt="" id="action" width="350" height="280">
                </div>
            </div>
            <div class="col text-left home-col">
                <div class="col-md-12 text-center">
                    <a href="/create_data" class="btn btn-dark create"><i class="fas fa-plus-square pr-2"></i>{{ __('website.create') }}</a>
                </div>
                <div class="col-md-12 mt-4 text-center">
                    <img src="https://i.pinimg.com/originals/98/85/79/988579fea8473f5dd48741d6321c2571.jpg" alt="" id="create" width="350" height="280">
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="col text-right home-col" style="margin-top: 25px !important;">
                <div class="col-md-12 text-center">
                    <a href="/profile" class="btn btn-dark profile"><i class="fas fa-user-circle pr-2"></i>{{ __('website.profile') }}</a>
                </div>  
                <div class="col-md-12 mt-4 text-center">
                    <img src="https://i.pinimg.com/originals/98/85/79/988579fea8473f5dd48741d6321c2571.jpg" alt="" id="profile" width="350" height="280">
                </div>
            </div>
            <div class="col text-left home-col" style="margin-top: 25px !important;">
                <div class="col-md-12 text-center">
                    <a href="/setting" class="btn btn-dark setting"><i class="fas fa-cog pr-1"></i>{{ __('website.setting') }}</a>
                </div>
                <div class="col-md-12 mt-4 text-center">
                    <img src="https://i.pinimg.com/originals/98/85/79/988579fea8473f5dd48741d6321c2571.jpg" alt="" id="setting" width="350" height="280">
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade deep" id="wheel_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header" style="border-bottom: none !important;">
            <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" style="border-top: none !important;">
            
        <div class="modal-footer d-flex justify-content-center">
            <button type="button" class="btn btn-secondary btn-block" id="ok" data-bs-dismiss="modal">Ok</button>
        </div>
        </div>
    </div>
</div>
@endsection
