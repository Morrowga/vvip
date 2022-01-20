<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>VVIP NINE</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Styles -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/css/bootstrap-timepicker.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link
    rel="stylesheet"
    href="../css/animate.min.css"
  />
  
</head>
<body>
    <div id="app" style="display:none; width:100%; height: auto; flex-direction: column;">
        <!-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <ul class="navbar-nav ml-auto">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

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
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> -->

        <main class="py-4" style="flex: 1 !important; overflow-y:scroll !important;">
            @yield('content')
        </main>

        @if(url()->current() == route('login'))

        @else
        <div class="navbar-footer">
            <div class="d-flex justify-content-center text-center">
                <div class="col-md-4">
                    <a href="/action" class="text-center"><i class="fas fa-bolt fa-2x create_content_icon"></i></a>
                </div>
                <div class="col-md-4">
                    <a href="/home" class="text-center"><img src="../images/logo.jpeg"  class="home_route" alt=""></a>
                </div>
                <div class="col-md-4"> 
                    <a href="/list" class="text-center"><img src="../images/menuu.png" style="background-color: #fff;" alt="" width="90" height="90"></a>
                </div>
            </div>
        </div>
        @endif
        
    </div>
    <div id="load_user" style="display:block;">
        <input type="text" id="text_color" hidden>
        <div class="container justify-content-center d-flex">
            <div class="loader">
                <div class="face">
                    <div class="circle"></div>
                </div>
                <img src="../images/logo.jpeg" alt="" width="130" height="130" class="main_logo mt-4">
            </div>
            <!-- <p class="smart">EVERYTHING IS SMART</p> -->
        </div>
    </div>
        
    <script src="../js/jquery/jquery-1.11.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="../js/browser-deeplink.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/js/bootstrap-timepicker.min.js"></script>
    <script src="../js/Winwheel.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    @yield('script')
    <script>
        let setT = setTimeout(function(){ 
            document.getElementById("load_user").style.display = "none";
            document.getElementById("app").style.display = "block";
        }, 1000);
    
        // $(function(){
        //     $(".spin").on("click", function(){
        //         $('#wheel_modal').modal('show');
        //     });
        // });
         
        if(window.location.pathname != '/login'){
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
        }
    </script>
</body>
</html>
