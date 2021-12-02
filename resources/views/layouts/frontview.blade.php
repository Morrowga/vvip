<!doctype html>
<html lang="app()->getLocale()">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>VVIP 9</title>
		<meta name="description" content="Unika - Responsive One Page HTML5 Template">
		<meta name="keywords" content="HTML5, Bootsrtrap, One Page, Responsive, Template, Portfolio" />
		<meta name="author" content="imransdesign.com">

		<meta name="viewport" content="width=device-width, initial-scale=1">
        
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet' type='text/css'> <!-- Body font -->
		<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'> <!-- Navbar font -->

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
        <link href="//db.onlinewebfonts.com/c/8be4a2f403c2dc27187d892cca388e24?family=Britannic+Bold" rel="stylesheet" type="text/css"/>
		<link rel="stylesheet" href="../css/skin/cool-gray.css">
	</head>
    {!! Zawuni::includeFiles() !!}
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
                            <li><a class="page-scroll navli" href="/">{{__('website.Home') }}</a></li>
                            <li><a class="page-scroll navli" href="{{ route('about') }}">{{ __('website.About') }}</a></li>
                            <li><a class="page-scroll navli" href="{{ route('view_packages') }}">{{__('website.Packages')}}</a></li>
                            <li><a class="page-scroll navli" href="{{ route('view_product') }}">{{__('website.Features')}}</a></li>
                            <li><a class="page-scroll navli" href="{{ route('contact') }}">{{__('website.Contact')}}</a></li>
                            <li><a class="page-scroll navli" href="{{ route('login') }}">{{__('website.login')}}</a></li>
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
		<script src="../js/owl-carousel/js/owl.carousel.min.js"></script>
		<script src="../js/stellar/js/jquery.stellar.min.js"></script>
		<script src="../js/animations/js/wow.min.js"></script>
        <script src="../js/waypoints.min.js"></script>
		<script src="../js/isotope.pkgd.min.js"></script>
		<script src="../js/classie.js"></script>
		<script src="../js/jquery.easing.min.js"></script>
		<script src="../js/jquery.counterup.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.0-beta4/html2canvas.min.js"></script>
		<script src="../js/theme.js"></script>
        @yield('script')
        <script>
        let setT = setTimeout(function(){ 
            document.getElementById("loading").style.display = "none";
            document.getElementById("main-body").style.display = "block";
        }, 2000);
        </script>
    </body> 
</html>
