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
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div id="app" style="display:none; width:100%; height: auto; flex-direction: column;">

        <main class="py-4" style="flex: 1 !important; overflow-y:scroll !important;">
            @yield('content')
        </main>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    @yield('script')
    <script>
        let setT = setTimeout(function(){ 
            document.getElementById("load_user").style.display = "none";
            document.getElementById("app").style.display = "block";
        }, 2500);
    </script>
</body>
</html>
