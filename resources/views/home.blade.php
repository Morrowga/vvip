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
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                   <i class="fas fa-power-off"></i>  {{ __('Logout') }} 
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
<div class="container" id="home_height" style="height: 850px;">
.   <div class="col-md-12">
        <h1 class="text">Welcome</h1>
        <div class="d-flex justify-content-center">
            <p class="text" id="welcome_text"></p>
        </div>
    </div>
    <div class="col-md-12 menu mt-3">
        <div class="d-flex justify-content-center">
            <div class="col text-right home-col">
                <img src="https://64.media.tumblr.com/55ff79d7b43c772f3bfcb11eb5d0b2a4/tumblr_mu4m21JyhJ1stn28do1_1280.png" alt="" id="action" width="350" height="280">
                <a href="/action" class="btn btn-dark action"><i class="fas fa-exchange-alt"></i> ACTION</a>
            </div>
            <div class="col text-left home-col">
                <img src="https://i.pinimg.com/originals/98/85/79/988579fea8473f5dd48741d6321c2571.jpg" alt="" id="create" width="350" height="280">
                <a href="/create_data" class="btn btn-dark create"><i class="fas fa-plus-square"></i> CREATE</a>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="col text-right home-col" style="margin-top: 25px !important;">
                <img src="https://miro.medium.com/max/1400/1*PzTm5I3QY4WDupWDTpEKOw.png" alt="" id="profile" width="350" height="280">
                <a href="/profile" class="btn btn-dark profile"><i class="fas fa-user-circle"></i> PROFILE</a>
            </div>
            <div class="col text-left home-col" style="margin-top: 25px !important;">
                <img src="https://miro.medium.com/max/1400/1*wRSmvIpXLsNYT2NaDFl6_A.png" alt="" id="setting" width="350" height="280">
                <a href="/setting" class="btn btn-dark setting"><i class="fas fa-cog"></i> SETTING</a>
            </div>
        </div>
    </div>
</div>

@section('script')
    <script>
        var text_url = '{{ url('api/get_datas') }}';
        var userid = $('#userid').val();
        console.log(userid);
         $.ajax({
           url:text_url,
           method:'POST',
           data:{
                  user_id: userid, 
                  request_name:"get_welcome"
                },
           success:function(response){
               console.log(response);
               $('#welcome_text').text(response.data['text']);
               $('#profile_img').attr('src', response.data['profile_img']);
           }
         });
    </script>
@endsection
@endsection
