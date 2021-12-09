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

<div class="container" id="menu_container">
    <div class="d-flex justify-content-center">
        <div class="col-md-6 col-md-offset-3">
            <h3 class="text">{{ __('website.menu') }}</h3>
        </div>
    </div>
    <div class="col-12">
        <div class="d-flex justify-content-center">
            <div class="col-md-6 col-md-offset-3">
                <div class="card" id="menu_list_card">
                    <div class="card-body">
                        <a href="/profile" class="btn btn-light btn-block menu_button"><i class="menu-icon fas fa-user-circle mr-2"></i>{{ __('website.profile') }}<i class="fas fa-caret-right menu_arrow"></i></a>
                        <a href="/create_data" class="btn btn-light btn-block menu_button"><i class="far fa-plus-square mr-2 menu-icon"></i>{{ __('website.create_content') }}<i class="fas fa-caret-right menu_arrow"></i></a>
                        <a href="/action" class="btn btn-light btn-block menu_button"><i class="fas fa-exchange-alt mr-2 menu-icon"></i>{{ __('website.change_action') }}<i class="fas fa-caret-right menu_arrow"></i></a>
                        <button class="btn btn-light btn-block menu_button"><i class="fas fa-power-off mr-2 menu-icon"></i>{{ __('website.active_my_card') }}<i class="fas fa-caret-right menu_arrow"></i></button>
                        <button class="btn btn-light btn-block menu_button"><i class="fas fa-ticket-alt mr-2 menu-icon"></i>{{ __('website.lucky_draw') }}<i class="fas fa-caret-right menu_arrow"></i></button>
                        <button class="btn btn-light btn-block menu_button"><i class="fas fa-chart-pie mr-2 menu-icon"></i>{{ __('website.statistic') }}<i class="fas fa-caret-right menu_arrow"></i></button>
                        <button class="btn btn-light btn-block menu_button"><i class="fas fa-share-alt-square mr-2 menu-icon"></i>{{ __('website.share') }}<i class="fas fa-caret-right menu_arrow"></i></button>
                        <a href="/setting" class="btn btn-light btn-block menu_button"><i class="fas fa-cog mr-2 menu-icon"></i>{{ __('website.setting') }}<i class="fas fa-caret-right menu_arrow"></i></a>
                        <button class="btn btn-light btn-block menu_button"><i class="fas fa-headset mr-2 menu-icon"></i>{{ __('website.support') }}<i class="fas fa-caret-right menu_arrow"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection