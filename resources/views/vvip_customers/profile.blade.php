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
    <div class="col-md-12 mt-5">
        <h3 class="text">Profile</h3>
        <div class="card profile_card">
            <div class="card-body">
                <div class="d-flex justify-content-center">
                    <img src="https://i.pinimg.com/236x/4c/bd/43/4cbd43a2e345adda7dd7f75848c95db7.jpg" class="profile_img" alt="" width="200" height="200">
                </div>
                <div class="d-flex justify-content-center mt-4">
                    <div class="col">
                        <p class="text-right profile_text">Name </p>
                    </div>
                    
                    <div class="col">
                        <p>Mg Mg</p>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="col">
                        <p class="text-right profile_text">Mobile </p>
                    </div>
                    
                    <div class="col">
                        <p>09795864194</p>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="col">
                        <p class="text-right profile_text">Email </p>
                    </div>
                    
                    <div class="col">
                        <p>thiha@gmail.com</p>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="col">
                        <p class="text-right profile_text">BOD </p>
                    </div>
                    
                    <div class="col">
                        <p>18.5.1998</p>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="col">
                        <p class="text-right profile_text">Work </p>
                    </div>
                    
                    <div class="col">
                        <p>Htut</p>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="col">
                        <p class="text-right profile_text">Address </p>
                    </div>
                    
                    <div class="col">
                        <p>Yangon</p>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-center">
                    <h5>Package</h5>
                </div>
                <div class="d-flex justify-content-center">
                    <p>Premium Package</p>
                </div>
                <div class="d-flex justify-content-center">
                    <p>Expired Date: 20.10.2022</p>
                </div>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-center">
                    <h5>Card Warranty</h5>  
                </div>
                <div class="d-flex justify-content-center">
                    <p>One Year Warranty</p>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="col-md-4 col-md-offset-4">
                    <button class="btn btn-dark btn-block">EDIT</button>
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
                <a href="" class="text-center mb-2 pb-2"><i class="fa fa-heart fa-3x pb-2"></i></a> 
            </div>
            <div class="col">
                <a href="#home" class="text-center"><img src="../images/logo.jpeg" alt="" width="50" height="50"></a> 
            </div>
            <div class="col">
                <a href="#home" class="text-center">Home</a> 
            </div>
            </div>
        </div>
    </div>  
</footer> -->
@endsection