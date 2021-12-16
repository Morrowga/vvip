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
        
		<link rel="stylesheet" href="../js/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="../js/animations/css/animate.min.css">
		<link rel="stylesheet" href="../js/owl-carousel/css/owl.carousel.css">
		<link rel="stylesheet" href="../js/owl-carousel/css/owl.theme.css">
        <link rel="stylesheet" href="https://rvera.github.io/image-picker/image-picker/image-picker.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
        <link rel="stylesheet" href="../font/stylesheet.css">
    
        <link rel="stylesheet" href="../css/reset.css">
        <link rel="stylesheet" href="../css/custom.css">
		<link rel="stylesheet" href="../css/style.css">
		<link rel="stylesheet" href="../css/mobile.css">
		<link rel="stylesheet" href="../css/skin/cool-gray.css">
	</head>
    <body data-spy="scroll" data-target="#main-navbar">
    	<div class="body" id="main-body" style="display:none;">
            <!-- ========= Start HEADER =========-->
            <header id="header" class="header-main">

                <nav id="main-navbar" class="navbar navbar-default navbar-fixed-top" role="navigation" style="background-color: rgb(0,0,0) !important;"> <!-- Classes: navbar-default, navbar-inverse, navbar-fixed-top, navbar-fixed-bottom, navbar-transparent. Note: If you use non-transparent navbar, set "height: 98px;" to #header -->

                  <div class="container">

                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar" style="margin-top: 13px !important;"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand page-scroll" href="{{ route('main', app()->getLocale()) }}">VVIP</a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a class="page-scroll navli" href="/">{{ __('website.Home') }}</a></li>
                            <li><a class="page-scroll navli" href="{{ route('about') }}">{{ __('website.About') }}</a></li>
                            <li><a class="page-scroll navli" href="{{ route('view_packages') }}">{{__('website.Packages')}}</a></li>
                            <li><a class="page-scroll navli" href="{{ route('view_product') }}">{{__('website.Features')}}</a></li>
                            <li><a class="page-scroll navli" href="{{ route('contact') }}">{{__('website.Contact')}}</a></li>
                            <li><a class="page-scroll navli" href="{{ route('login') }}">{{__('website.login')}}</a></li>
                            <li class="dropdown">
                                <a class="nav-link dropdown-toggle navli" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="flag-icon flag-icon-{{Config::get('languages')[App::getLocale()]['flag-icon']}}"></span> {{ Config::get('languages')[App::getLocale()]['display'] }}
                                </a>
                                <div class="dropdown-menu text-center lang_drop" aria-labelledby="navbarDropdownMenuLink">
                                @foreach (Config::get('languages') as $lang => $language)
                                    @if ($lang != App::getLocale())
                                        <a class="dropdown-item drop_link" id="droplang" data-lang="{{$language['display']}}" href="{{ route('lang.switch', $lang) }}">{{$language['display']}}</a>
                                        <!-- <span class="flag-icon flag-icon-{{$language['flag-icon']}}"></span> -->
                                    @endif
                                @endforeach
                                </div>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                  </div><!-- /.container -->
                </nav>
                <!-- End Navbar -->

            </header>
            <!-- ========= END HEADER =========-->
            
            @yield('content')                             
        </div>
        <div id="loading" style="display:block;">
            <input type="text" id="text_color" hidden>
            <div class="container justify-content-center d-flex">
                <img src="../images/logo.jpeg" alt="" width="350" height="350" class="main_logo mt-4">
                <svg class="load" version="1.1" id="L4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
                <circle fill="rgb(217,181,81)" stroke="none" cx="6" cy="50" r="6">
                    <animate
                    attributeName="opacity"
                    dur="1s"
                    values="0;1;0"
                    repeatCount="indefinite"
                    begin="0.1"/>    
                </circle>
                <circle fill="rgb(217,181,81)" stroke="none" cx="26" cy="50" r="6">
                    <animate
                    attributeName="opacity"
                    dur="1s"
                    values="0;1;0"
                    repeatCount="indefinite" 
                    begin="0.2"/>       
                </circle>
                <circle fill="rgb(217,181,81)" stroke="none" cx="46" cy="50" r="6">
                    <animate
                    attributeName="opacity"
                    dur="1s"
                    values="0;1;0"
                    repeatCount="indefinite" 
                    begin="0.3"/>     
                </circle>
                </svg>
            </div>
        </div>
        <!-- body ends -->
        
        <!-- Plugins JS -->
		<script src="../js/jquery/jquery-1.11.1.min.js"></script>
        <script src="../js/bootstrap/js/bootstrap.min.js"></script>
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.min.js"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.0-beta4/html2canvas.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.3/jspdf.min.js"></script>
		<script src="../js/owl-carousel/js/owl.carousel.min.js"></script>
		<script src="../js/stellar/js/jquery.stellar.min.js"></script>
		<script src="../js/animations/js/wow.min.js"></script>
        <script src="../js/waypoints.min.js"></script>
		<script src="../js/isotope.pkgd.min.js"></script>
		<script src="../js/classie.js"></script>
		<script src="../js/jquery.easing.min.js"></script>
		<script src="../js/jquery.counterup.min.js"></script>
		<script src="../js/theme.js"></script>
        @yield('script')
        <script>

        let setT = setTimeout(function(){ 
            document.getElementById("loading").style.display = "none";
            document.getElementById("main-body").style.display = "block";
        }, 2000);

        $(function(){
           $(window).on('load', function(){
                var drop =  $('#droplang').text();
                if(drop == 'MYANMAR'){
                    $('.navli').attr('style', 'letter-spacing: 4px !important;');
                    $('.btn-blank').addClass('btn');
                    $('.about-text').attr('style', 'letter-spacing: 2px !important;');
                    $('.con_li').attr('style', 'letter-spacing: 2px !important;');
                    $('.contact_address').attr('style', 'letter-spacing: 2px !important;');
                    $('.head_about_text').attr('style', 'letter-spacing: 2px !important;');
                    $('.input-lg').attr('style', 'letter-spacing: 3px !important;');
                    $('.url_text').attr('style', 'letter-spacing: 3px !important;');
                    $('.url').attr('style', 'letter-spacing: 3px !important;');
                    $('.select-card').attr('style', 'letter-spacing: 2px !important;');
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
        })
        </script>
    </body> 
    <div class="modal fade bd-example-modal-lg" id="saveuser_check" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="background-color: #fff !important;">
                <div class="modal-header" style="border-bottom: none !important; border-top: none !important;">
                 <h5 class="modal-title text-center" id="exampleModalLabel">WARNING</h5>
                </div>
                <div class="modal-body  text-center" style="background-color: rgb(255,255,255,0.5) !important;">
                    <i class="fas fa-exclamation-triangle fa-7x"></i>
                    <p class="user_warning_text" style="font-size: 20px !important; margin-top: 60px !important;">
                    </p>
                </div>
                <div class="modal-footer" id="btn_saveuser">
                    <button type="button" class="btn btn-secondary mt-2" id="cancel_confirm" data-dismiss="modal">{{ __('website.close')  }}</button>
                    <a id="useractive" href="/login" class="btn btn-dark u_act" hidden>{{ __('website.sure')  }}</a>
                    <button type="button"  id="userexpired" class="btn btn-dark u_exp" hidden>{{ __('website.sure')  }}</a>
                </div>
            </div>
        </div>
    </div>
</html>
