<!doctype html>
<html lang="app()->getLocale()">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>VVIP 9</title>
        <link rel="shortcut icon" type="image/jpg" href="../images/Favicon-Size.png"/>
		<meta name="description" content="VVIP9">
		<meta name="keywords" content="VVIP9, VVIP, Vvip9, vvip9.co, smartcard, nfc, deeplink" />
		<meta name="author" content="htut.com">

		<meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="../js/animations/css/animate.min.css">
		<link rel="stylesheet" href="../js/owl-carousel/css/owl.carousel.css">
		<link rel="stylesheet" href="../js/owl-carousel/css/owl.theme.css">
        <link rel="stylesheet" href="https://rvera.github.io/image-picker/image-picker/image-picker.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
        <link rel="stylesheet" href="../font/stylesheet.css">
        <link href="https://fonts.googleapis.com/css2?family=Pushster&display=swap" rel="stylesheet">
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css"
        />
        <link rel="stylesheet" href="../css/reset.css">
        <link rel="stylesheet" href="../css/custom.css">
		<link rel="stylesheet" href="../css/style.css">
		<link rel="stylesheet" href="../css/mobile.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick-theme.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Cinzel&display=swap" rel="stylesheet">
        <link href="https://www.dafontfree.net/embed/YnJpdGFubmljLWJvbGQtcmVndWxhciZkYXRhLzEzL2IvNjQ1MzAvQlJJVEFOSUMuVFRG" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="../css/skin/cool-gray.css">
	</head>
    <body data-spy="scroll" data-target="#main-navbar">
    	<div class="body" id="main-body" style="display:none;">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <a class="navbar-brand" href="/"><img src="../images/logo.jpeg" width="100" width="100" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item active"><a class="nav-link page-scroll navli" href="/">{{ __('website.Home') }}</a></li>
                            <li class="nav-item active"><a class="nav-link page-scroll navli" href="{{ route('about') }}">{{ __('website.About') }}</a></li>
                            <li class="nav-item active"><a class="nav-link page-scroll navli" href="{{ route('view_packages') }}">{{__('website.Packages')}}</a></li>
                            <li class="nav-item active"><a class="nav-link page-scroll navli" href="{{ route('view_product') }}">{{__('website.Features')}}</a></li>
                            <li class="nav-item active"><a class="nav-link page-scroll navli" href="{{ route('contact') }}">{{__('website.Contact')}}</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle navli" href="#" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="flag-icon flag-icon-{{Config::get('languages')[App::getLocale()]['flag-icon']}}"></span> {{ Config::get('languages')[App::getLocale()]['display'] }}
                                </a>
                                <div class="dropdown-menu text-center lang_drop" aria-labelledby="navbarDropdownMenuLink">
                                @foreach (Config::get('languages') as $lang => $language)
                                    @if ($lang != App::getLocale())
                                        <a class="dropdown-item drop_link" id="droplang" data-lang="{{$language['display']}}" href="{{ route('lang.switch', $lang) }}">{{$language['display']}}</a>
                                    @endif
                                @endforeach
                                </div>
                            </li>
                            @if(Auth::user())
                            <li class="nav-item dropdown"><a class="page-scroll navli nav-link" href="/home">{{ Auth::user()->name }}</a></li>
                            @else
                            <li class="nav-item dropdown"><a class="page-scroll navli nav-link" href="{{ route('login') }}">{{__('website.login')}}</a></li>
                            @endif
                        </ul>
                    </div>
                </nav>
            </div>
            <!-- </header> -->
            <!--===========================================Header========================================================-->
            
            @yield('content') 
            <!--===========================================ParsleyPlace==================================================-->
            </div>
            <div id="loading" style="display:block;">
                <input type="text" id="text_color" hidden>
                <div class="container justify-content-center d-flex">
                    <div class="loader">
                        <div class="face">
                            <div class="circle"></div>
                        </div>
                        <!-- <div class="face">
                            <div class="circle"></div>
                        </div> -->
                        <img src="../images/logo.jpeg" alt="" width="130" height="130" class="main_logo mt-4">
                    </div>
                    <p class="smart">{{__('website.Everything') }}</p>
                </div>
            </div>
            <!--===========================================Loading========================================================-->
        
            <script src="../js/jquery/jquery-1.11.1.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.3/jspdf.min.js"></script>
            <script src="../js/owl-carousel/js/owl.carousel.min.js"></script>
            <script src="../js/stellar/js/jquery.stellar.min.js"></script>
            <script src="../js/animations/js/wow.min.js"></script>
            <script src="../js/waypoints.min.js"></script>
            <script src="../js/isotope.pkgd.min.js"></script>
            <!-- <script src="../js/classie.js"></script> -->
            <script src="../js/jquery.easing.min.js"></script>
            <script src="../js/jquery.counterup.min.js"></script>
            <!-- <script src="../js/theme.js"></script> -->
            <!--===========================================script========================================================-->
            @yield('script')
            <script>
                let setT = setTimeout(function(){ 
                    document.getElementById("loading").style.display = "none";
                    document.getElementById("main-body").style.display = "block";
                }, 2500);

                $(function(){
                    $(window).on('load', function(){
                        var drop =  $('#droplang').text();
                        if(drop == 'MYANMAR'){
                            $('.navli').attr('style', 'letter-spacing: 4px !important;');
                            $('.btn-blank').addClass('btn');
                            $('.about-text').attr('style', 'letter-spacing: 2px !important;');
                            $('.navbarbtn').attr('style', 'letter-spacing: 2px !important;');
                            $('.contact').attr('style', 'letter-spacing: 2px !important;');
                            $('.con_li').attr('style', 'letter-spacing: 2px !important;');
                            $('.contact_address').attr('style', 'letter-spacing: 2px !important;');
                            $('.head_about_text').attr('style', 'letter-spacing: 2px !important;');
                            $('.input-lg').attr('style', 'letter-spacing: 3px !important;');
                            $('.url_text').attr('style', 'letter-spacing: 3px !important;');
                            $('.url').attr('style', 'letter-spacing: 3px !important;');
                            $('.screenshot_warn').attr('style', 'letter-spacing: 2px !important;');
                            $('.select-card').attr('style', 'letter-spacing: 2px !important;');
                            $('.save-user-back').attr('style', 'letter-spacing: 2px !important;');
                            $('.paymentbtn').attr('style', 'letter-spacing: 2px !important;');
                            $('.zoom').attr('style', 'letter-spacing: 2px !important;');
                            $('.text').attr('style', 'letter-spacing: 2px !important; font-size: 18px !important;');
                            $('.btn-place').attr('style', 'letter-spacing: 2px !important;');
                            $('.pass_allow').attr('style', 'margin-top: 10px !important;');
                        } else {
                            $('.own_url').attr('style', 'font-size: 17px !important');
                            $('.position_place').removeClass('__zg').addClass('__mm').attr('style', 'padding: 10px 12px !important;');
                            $('.position-icon').attr('style', 'padding-top: -5px !important;');
                            $('.url_text').attr('style', 'font-size: 18px !important');
                            $('.select-card').attr('style', 'font-size: 17px !important;');
                            $('.zoom').attr('style', 'font-size: 17px !important;');       
                        }
                    })

                    if($('.drop_link').text() == 'MYANMAR'){
                        $('.lang_drop').addClass('mm_bg');
                    } else {
                        $('.lang_drop').addClass('us_bg');
                    }
                })
            </script>
    </body> 
    <!--===========================================Body========================================================-->
    <div class="modal fade bd-example-modal-lg" id="saveuser_check" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="background-color: #000 !important; border: 2px solid #fff;">
                <div class="modal-header" style="border: none !important; margin-top: 10%;">
                 <h5 class="modal-title text-center text" id="exampleModalLabel">WARNING</h5>
                </div>
                <div class="modal-body  text-center">
                    <i class="fas fa-exclamation-triangle fa-7x"></i>
                    <p class="user_warning_text" style="font-size: 20px !important; margin-top: 60px !important;">
                    </p>
                </div>
                <div class="modal-footer" id="btn_saveuser" style="border-bottom: 2px solid #fff;">
                    <button type="button" class="btn btn-secondary mt-2" id="cancel_confirm" data-dismiss="modal">{{ __('website.close')  }}</button>
                    <a id="useractive" href="/login" class="btn btn-dark u_act" hidden>{{ __('website.sure')  }}</a>
                    <button type="button"  id="userexpired" class="btn btn-dark u_exp" hidden>{{ __('website.sure')  }}</a>
                </div>
            </div>
        </div>
    </div>
    <!--===========================================SaveUserModal========================================================-->
</html>
