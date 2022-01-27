<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>VVIP NINE</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

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
                    <a href="/list" class="text-center"><i class="fas fa-th-large fa-2x create_content_icon"></i></a>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/js/bootstrap-timepicker.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    @yield('script')
    <script>
        var invalid_error = '{{ __('website.phone_invalid') }}';
        var exist_active = '{{ __('website.exist_active') }}';
        var exist_expired = '{{ __('website.exist_expired') }}';
        var enter_phone = '{{ __('website.enter_phone') }}';
        var phone_exist = '{{ __('website.phonenumber_exist') }}';
        var phone_no_need_digit = '{{ __('website.phone_need_digit') }}';
        var enter_email = '{{ __('website.email') }}';
        var enter_url = '{{ __('website.enter_url') }}';
        var special_char = '{{ __('website.special_char') }}';
        var url_need_char = '{{ __('website.url_need_char') }}';
        var email_invalid = '{{ __('website.email_invalid') }}';
        var email_exist = '{{ __('website.email_exist')  }}';
        var zoom_card = '{{ __('website.zoom')  }}';
        var select_card = '{{ __('website.select_card')  }}';
        var select_success = '{{ __('website.select_success')  }}';
        var packagetextforuser_one = '{{ __('website.packtext_first') }}';
        var packagetextforuser_two = '{{ __('website.packtext_second') }}';
        var normaltext = '{{ __('website.normal_text') }}';
        var standardtext = '{{ __('website.standard_text') }}';
        var luxurytext = '{{ __('website.luxury_text') }}';

        let setT = setTimeout(function(){ 
            document.getElementById("load_user").style.display = "none";
            document.getElementById("app").style.display = "block";
        }, 1500);
    
        if(window.location.pathname != '/login'){
            var text_url = 'api/get_datas';
            var userid = $('#userid').val();
            $.ajax({
            url:text_url,
            method:'POST',
            data:{
                    user_id: userid, 
                    request_name:"get_welcome"
                    },
            success:function(response){
                console.log(response);
                if(response.message == 'success'){
                    $('#welcome_text').text(response.data['text']);
                    $('#profile_img').attr('src', response.data['profile_img']);
                }
            }
            });   
        }
    </script>
</body>
</html>
