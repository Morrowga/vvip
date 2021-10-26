@extends('layouts.app')

@section('content')

<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm" style="background-color: #000 !important;">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
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

<div class="container">
    <div class="col-md-12">
        <h3 class="text mt-5">Change Action</h3>
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-center">
                    <p>Menu Categories</p>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="col-md-4 col-md-offset-4">
                    <button class="btn btn-dark btn-block">Contact</button>
                    <button class="btn btn-dark btn-block">Link Tree</button>
                    <button class="btn btn-dark btn-block">Deep Link</button>
                    <button class="btn btn-dark btn-block">URL</button>
                    <button class="btn btn-dark btn-block">Email</button>
                    <button class="btn btn-dark btn-block">Contact Social</button>
                    <button class="btn btn-dark btn-block">SMS</button>
                    <button class="btn btn-dark btn-block">Call</button>
                    <button class="btn btn-dark btn-block">Event</button>
                    <button class="btn btn-dark btn-block">Personal</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <footer>
        <div class="d-flex justify-content-center text-center">
            <div class="col-md-6 col-md-offset-3">
                <div class="d-flex justfiy-content-center">
                <div class="col">
                    <a href="#home" class="text-center">Home</a> 
                </div>
                <div class="col">
                    <a href="#home" class="text-center">Home</a> 
                </div>
                <div class="col">
                    <a href="#home" class="text-center">Home</a> 
                </div>
                </div>
            </div>
        </div>  
</footer> -->

@endsection