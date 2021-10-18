@extends('layouts.app')

@section('content')
<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm" style="background-color: #000 !important;">
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
</nav> 
<div class="container">
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
</div>
@section('script')
    <script>
        var user_id = $('#userid').val();
        setInterval(function() {
            $.ajax({
                url: '/api/create_time',
                method:'POST',
                data: {
                    user_id : user_id
                },
                success: function(response){
                        var days = Math.floor(response.total_seconds / 86400);
                        var hours = Math.floor((response.total_seconds - (days * 86400)) / 3600);
                        var minutes = Math.floor((response.total_seconds - (days * 86400) - (hours * 3600 )) / 60);
                        var seconds = Math.floor((response.total_seconds - (days * 86400) - (hours * 3600) - (minutes * 60)));
                        if (hours < "10") { hours = "0" + hours; }
                        if (minutes < "10") { minutes = "0" + minutes; }
                        if (seconds < "10") { seconds = "0" + seconds; }                        
                        $("#days").html(days + "<span>Days</span>");
                        $("#hours").html(hours + "<span>Hours</span>");
                        $("#minutes").html(minutes + "<span>Minutes</span>");
                        $("#seconds").html(seconds + "<span>Seconds</span>");
                },
                error:function(error){
                    console.log(error)
                }
            });
        },1000);
    </script>
@endsection
@endsection