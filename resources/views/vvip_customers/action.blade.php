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

<div class="container" style="height: 700px;">
    <div class="col-md-12">
        <div class="d-flex justify-content-center">
            <div class="col-md-4 col-md-offset-4">
                <h3 class="text mt-5">{{ __('website.change_action') }} <a href="/feature" class="question_link"><i class="far fa-question-circle"></i></a></h3>
            </div>
        </div>
        <div class="card" id="ca">
            <div class="card-body">
                <!-- <div class="d-flex justify-content-center">
                    <p>Menu Categories</p>
                </div> -->
                <div class="d-flex justify-content-center">
                    <div class="col-md-4 col-md-offset-4" id="action_body">
                    <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}">
                    <button class="btn btn-dark btn-block action-btn" id="contact_active" value="get_contacts" data-id="contact_active">Contact</button>
                    <button class="btn btn-dark btn-block action-btn" id="link_tree_active" value="get_link_trees" data-id="link_tree_active">Link Tree</button>
                    <button class="btn btn-dark btn-block action-btn" id="deep_link_active" value="get_deep_links" data-id="deep_link_active">Deep Link</button>
                    <button class="btn btn-dark btn-block action-btn" id="url_active" value="get_eusp" data-id="url_active">URL</button>
                    <button class="btn btn-dark btn-block action-btn" id="email_active" value="get_eusp" data-id="email_active">Email</button>
                    <button class="btn btn-dark btn-block action-btn" id="contact_social_active">Contact Social</button>
                    <button class="btn btn-dark btn-block action-btn" id="sms_active" value="get_eusp" data-id="sms_active">SMS</button>
                    <button class="btn btn-dark btn-block action-btn" id="call_active" value="get_eusp" data-id="call_active">Call</button>
                    <button class="btn btn-dark btn-block action-btn" id="event">Event</button>
                    <button class="btn btn-dark btn-block action-btn" id="personal">Personal</button>
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


@section('script')
<script src="../js/action.js"></script>
@endsection

@endsection