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

<div class="container" id="menu_container">
    <div class="d-flex justify-content-center">
        <div class="col-md-6 col-md-offset-3">
            <h3 class="text">Menu</h3>
        </div>
    </div>
    <div class="col-12">
        <div class="d-flex justify-content-center">
            <div class="col-md-6 col-md-offset-3">
                <div class="card">
                    <div class="card-body">
                        <a href="/profile" class="btn btn-light btn-block menu_button">Profile <i class="fas fa-caret-right menu_arrow"></i></a>
                        <a href="/create_data" class="btn btn-light btn-block menu_button">Create Content <i class="fas fa-caret-right menu_arrow"></i></a>
                        <a href="/action" class="btn btn-light btn-block menu_button">Change Action <i class="fas fa-caret-right menu_arrow"></i></a>
                        <button class="btn btn-light btn-block menu_button">Active My Card <i class="fas fa-caret-right menu_arrow"></i></button>
                        <button class="btn btn-light btn-block menu_button">Lucky Draw <i class="fas fa-caret-right menu_arrow"></i></button>
                        <button class="btn btn-light btn-block menu_button">Statistic <i class="fas fa-caret-right menu_arrow"></i></button>
                        <button class="btn btn-light btn-block menu_button">Share<i class="fas fa-caret-right menu_arrow"></i></button>
                        <button class="btn btn-light btn-block menu_button">Setting<i class="fas fa-caret-right menu_arrow"></i></button>
                        <button class="btn btn-light btn-block menu_button">Support<i class="fas fa-caret-right menu_arrow"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection