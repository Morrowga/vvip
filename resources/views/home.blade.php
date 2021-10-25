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
<div class="container">
    <div class="col-md-12" style="margin-top: 50px !important;">
        <div class="d-flex justify-content-center">
            <div class="col text-right home-col">
                <img src="" alt="" id="action" width="350" height="280">
                <a href="/action" class="btn btn-dark action">Action</a>
            </div>
            <div class="col text-left home-col">
            <img src="" alt="" id="create" width="350" height="280">
            <a href="" class="btn btn-dark create">Create</a>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div class="col text-right home-col" style="margin-top: 25px !important;">
            <img src="" alt="" id="profile" width="350" height="280">
            <a href="/profile" class="btn btn-dark profile">Profile</a>
        </div>
        <div class="col text-left home-col" style="margin-top: 25px !important;">
            <img src="" alt="" id="setting" width="350" height="280">
            <a href="" class="btn btn-dark setting">Setting</a>
        </div>
    </div>
</div>
@section('script')
    <script>
        var user_id = $('#userid').val();
            $.ajax({
                url: '/api/get_home',
                method:'POST',
                data: {
                    user_id : user_id
                },
                success: function(response){
                        // var days = Math.floor(response.total_seconds / 86400);
                        // var hours = Math.floor((response.total_seconds - (days * 86400)) / 3600);
                        // var minutes = Math.floor((response.total_seconds - (days * 86400) - (hours * 3600 )) / 60);
                        // var seconds = Math.floor((response.total_seconds - (days * 86400) - (hours * 3600) - (minutes * 60)));
                        // if (hours < "10") { hours = "0" + hours; }
                        // if (minutes < "10") { minutes = "0" + minutes; }
                        // if (seconds < "10") { seconds = "0" + seconds; }                        
                        // $("#days").html(days + "<span>Days</span>");
                        // $("#hours").html(hours + "<span>Hours</span>");
                        // $("#minutes").html(minutes + "<span>Minutes</span>");
                        // $("#seconds").html(seconds + "<span>Seconds</span>");
                        console.log(response.home_page);
                        $('#action').attr('src', response.home_page[0]['image']);
                        $('#create').attr('src', response.home_page[1]['image']);
                        $('#profile').attr('src', response.home_page[2]['image']);
                        $('#setting').attr('src', response.home_page[3]['image']);
                },
                error:function(error){
                    console.log(error)
                }
            });
    </script>
@endsection
@endsection