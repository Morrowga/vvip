<!doctype html>
<!--
	Template:	 Unika - Responsive One Page HTML5 Template
	Author:		 imransdesign.com
	URL:		 http://imransdesign.com/
    Designed By: https://www.behance.net/poljakova
	Version:	1.0	
-->
<html lang="en-US">
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>VVIP 9</title>
		<meta name="description" content="Unika - Responsive One Page HTML5 Template">
		<meta name="keywords" content="HTML5, Bootsrtrap, One Page, Responsive, Template, Portfolio" />
		<meta name="author" content="imransdesign.com">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Google Fonts  -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet' type='text/css'> <!-- Body font -->
		<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'> <!-- Navbar font -->

		<!-- Libs and Plugins CSS -->
		<link rel="stylesheet" href="../js/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="../js/animations/css/animate.min.css">
		<link rel="stylesheet" href="../js/owl-carousel/css/owl.carousel.css">
		<link rel="stylesheet" href="../js/owl-carousel/css/owl.theme.css">
        <link rel="stylesheet" href="https://rvera.github.io/image-picker/image-picker/image-picker.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    
		<!-- Theme CSS -->
        <link rel="stylesheet" href="../css/reset.css">
        <link rel="stylesheet" href="../css/custom.css">
		<link rel="stylesheet" href="../css/style.css">
		<link rel="stylesheet" href="../css/mobile.css">
        <link href="//db.onlinewebfonts.com/c/8be4a2f403c2dc27187d892cca388e24?family=Britannic+Bold" rel="stylesheet" type="text/css"/>

		<!-- Skin CSS -->
		<link rel="stylesheet" href="../css/skin/cool-gray.css">
        <!-- <link rel="stylesheet" href="css/skin/ice-blue.css"> -->
        <!-- <link rel="stylesheet" href="css/skin/summer-orange.css"> -->
        <!-- <link rel="stylesheet" href="css/skin/fresh-lime.css"> -->
        <!-- <link rel="stylesheet" href="css/skin/night-purple.css"> -->

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>

    <body data-spy="scroll" data-target="#main-navbar">
        <!-- <div class="page-loader"></div>   -->
        <!-- Display loading image while page loads -->
    	<div class="body" id="main-body" style="display:none;">
        
            <!--========== BEGIN HEADER ==========-->
            <header id="header" class="header-main">

                <!-- Begin Navbar -->
                <nav id="main-navbar" class="navbar navbar-default navbar-fixed-top" role="navigation" style="background-color: rgb(0,0,0) !important;"> <!-- Classes: navbar-default, navbar-inverse, navbar-fixed-top, navbar-fixed-bottom, navbar-transparent. Note: If you use non-transparent navbar, set "height: 98px;" to #header -->

                  <div class="container">

                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar" style="margin-top: 13px !important;"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand page-scroll" href="/">VVIP</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a class="page-scroll navli" href="/">Home</a></li>
                            <li><a class="page-scroll navli" href="#services-section">Products</a></li>
                            <!-- <li><a class="page-scroll" href="#portfolio-section">Works</a></li> -->
                            <!-- <li><a class="page-scroll" href="#team-section">Team</a></li> -->
                            <li><a class="page-scroll navli" href="{{ route('view_packages') }}">Packages</a></li>
                            <li><a class="page-scroll navli" href="#about-section">About</a></li>
                            <li><a class="page-scroll navli" href="#contact-section">Contact</a></li>
                            <li><a class="page-scroll navli" href="{{ route('login') }}">Login</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                  </div><!-- /.container -->
                </nav>
                <!-- End Navbar -->

            </header>
            <!-- ========= END HEADER =========-->
            
            @yield('content')
            <!-- Begin footer -->
            <!-- <footer class="text-off-white">
                <footer class="footer">
                    <div class="container text-center wow fadeIn" data-wow-delay="0.4s">
                        <p class="copyright">Copyright &copy; 2021 <a href="https://www.behance.net/poljakova" class="theme-author">Htut Media</a></p>
                    </div>
                </footer>
            </footer> -->
            <!-- End footer -->

            <a href="#" class="scrolltotop"><i class="fa fa-arrow-up"></i></a> <!-- Scroll to top button -->
                                              
        </div>
        <div id="loading" style="display:block;">
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
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.1/parsley.min.js"></script> -->
		<!-- <script src="../js/smoothscroll.js"></script> -->

		<!-- Theme JS -->
		<script src="../js/theme.js"></script>
        @yield('script')
        <script>

        let setT = setTimeout(function(){ 
            document.getElementById("loading").style.display = "none";
            document.getElementById("main-body").style.display = "block";
        }, 2000);

        $(function(){
            var $sections = $('.form-section');

            function navigateTo(index){
                $sections.removeClass('current').eq(index).addClass('current');
                $('.form-navigation .previous').toggle(index>0);
                var atTheEnd = index >= $sections.length - 1;
                $('.form-navigation .next').toggle(!atTheEnd);
                $('.form-navigation .sub-btn').toggle(atTheEnd);
            }

            function curIndex() {
                return $sections.index($sections.filter('.current'));
            }

            $('.form-navigation .previous').click(function(){
                navigateTo(curIndex()-1);
            });

            $('.form-navigation .next').click(function(){
                    navigateTo(curIndex()+1);
            });
            
            // $sections.each(function(index,section){
            //     $(section).find(':input').attr('data-parsley-group', 'block'+index);
            // });

            navigateTo(0);
        });

            function focusText(){
                var textbox = document.getElementById("url");
                textbox.focus();    
            }

            function getCheckedSystem() {
            const checkBox = document.getElementById('url_system').checked;   
            if (checkBox === true) {
                    console.log(document.getElementById("url").value = document.getElementById('url_system').value);
                } else {
                console.log(false);
            }
            }
                
            function getCheckedName(){
                const checkBoxName = document.getElementById('url_name').checked;
                if(checkBoxName === true){
                    console.log(document.getElementById("url").value = document.getElementById('url_name').value);
                    document.getElementById("url").disabled = false;
                    var textbox = document.getElementById("url");
                    textbox.focus();    
                } else {
                    console.log(false);
                }
            }

            $('#card_front').attr('src', '../images/../images/[removal.ai]_tmp-61704c07bf95b.png');
            $('#card_back').attr('src', '../images/../images/[removal.ai]_tmp-61704c07bf95b.png');
            $('#qr_scan').attr('src','https://mpng.subpng.com/20180709/eto/kisspng-information-qr-code-android-download-qrcode-5b43f98e89ab13.1130560915311814545639.jpg');

            $('#move_left').on('click', function(){
                $('#qr_scan').attr('style', 'left: 10% !important');
            });

            $('#move_center').on('click', function(){
                $('#qr_scan').attr('style', 'left: 41% !important');
            });

            $('#move_right').on('click', function(){
                $('#qr_scan').attr('style', 'left: 70% !important');
            });

            $('#red').on('click', function(){
                $('#card_front').attr('style', '-webkit-filter: opacity(.9) drop-shadow(0 0 0 red);filter: opacity(.9) drop-shadow(0 0 0 red);');
                $('#card_back').attr('style', '-webkit-filter: opacity(.9) drop-shadow(0 0 0 red);filter: opacity(.9) drop-shadow(0 0 0 red);');
            });

            $('#green').on('click', function(){
                $('#card_front').attr('style', '-webkit-filter: opacity(.9) drop-shadow(0 0 0 #50c20e);filter: opacity(.9) drop-shadow(0 0 0 #50c20e);');
                $('#card_back').attr('style', '-webkit-filter: opacity(.9) drop-shadow(0 0 0 #50c20e);filter: opacity(.9) drop-shadow(0 0 0 #50c20e);');
            });

            $('#blue').on('click', function(){
                $('#card_front').attr('style', '-webkit-filter: opacity(.9) drop-shadow(0 0 0 #1063e0);filter: opacity(.9) drop-shadow(0 0 0 #1063e0);');
                $('#card_back').attr('style', '-webkit-filter: opacity(.9) drop-shadow(0 0 0 #1063e0);filter: opacity(.9) drop-shadow(0 0 0 #1063e0);');
            });

            $('#grey').on('click', function(){
                $('#card_front').attr('style', '-webkit-filter: opacity(.9) drop-shadow(0 0 0 grey);filter: opacity(.9) drop-shadow(0 0 0 grey);');
                $('#card_back').attr('style', '-webkit-filter: opacity(.9) drop-shadow(0 0 0 grey);filter: opacity(.9) drop-shadow(0 0 0 grey);');
            });

            $('#brown').on('click', function(){
                $('#card_front').attr('style', '-webkit-filter: opacity(.9) drop-shadow(0 0 0 brown);filter: opacity(.9) drop-shadow(0 0 0 brown);');
                $('#card_back').attr('style', '-webkit-filter: opacity(.9) drop-shadow(0 0 0 brown);filter: opacity(.9) drop-shadow(0 0 0 brown);');
            });

            $('#black').on('click', function(){
                $('#card_front').attr('style', '-webkit-filter: opacity(.9) drop-shadow(0 0 0 black);filter: opacity(.9) drop-shadow(0 0 0 black);');
                $('#card_back').attr('style', '-webkit-filter: opacity(.9) drop-shadow(0 0 0 black);filter: opacity(.9) drop-shadow(0 0 0 black);');
            });

            $('#yellow').on('click', function(){
                $('#card_front').attr('style', '-webkit-filter: opacity(.9) drop-shadow(0 0 0 yellow);filter: opacity(.9) drop-shadow(0 0 0 yellow);');
                $('#card_back').attr('style', '-webkit-filter: opacity(.9) drop-shadow(0 0 0 yellow);filter: opacity(.9) drop-shadow(0 0 0 yellow);');
            });

            let colorInput = document.getElementById('background_color');
            colorInput.addEventListener('input', () =>{
                $('#card_blank_front').attr('style', 'background-color:' + colorInput.value + ';');
                $('#card_blank_back').attr('style', 'background-color:' + colorInput.value + ';');
            });


            $('#theme_one').on('click', function(){
               $('#card_front').attr('style', 'transform: scaleX(-1);');
               $('#card_back').attr('style', 'transform: scaleX(-1);');
            });

            $('#theme_two').on('click', function(){
                $('#card_front').attr('style', 'transform: scaleY(-1);');
                $('#card_back').attr('style', 'transform: scaleY(-1);');
            });

            $('#theme_three').on('click', function(){
                $('#card_front').attr('style', 'transform: scaleX(1);');
                $('#card_back').attr('style', 'transform: scaleX(1);');
            });

            function packageClick(e){
                document.getElementById('prices-section').style.display = "none";
                document.getElementById('prices-section-save').style.display = "none";
                document.getElementById('prices-section-two').style.display = "block";
                var targetValue = e.target.value;
                document.getElementById('package_name').value = targetValue;

                $.ajax({
                url: '/api/get_cards',
                type: 'get',
                success: function(response){
                    console.log(response);
                    data = response.card_design;
                    $.each(data, function(i, value) {
                        if(value['package_token'] == targetValue){
                        $('#column-image').append('<div class="col-md-3"><img src="' + value['front_image'] + '" id="image_data" alt="" width="200" height="200"><div class="col-md-6 col-md-offset-3"><button type="button" class="btn btn-success zoom" id="' + value['id']  + '" data-id="' + value['id'] + '">Zoom Card</button><p id="success_p"  class="success_text'+ value['id'] +'"></p>');
                        } 
                        $('.zoom').on('click', function(e) {
                            let id = e.target.id;
                            if(id == value['id']){
                                $('#front_img').attr('src', value['front_image']);
                                $('#back_img').attr('src', value['back_image']);
                                $('#exampleModal').modal('show');
                            }
                            $('#select_card').on('click', function(e) {
                               var target = e.target.id;
                               target = id;
                                $('#card_design_id').val(target);
                                $('#card_front').attr('src', )
                                $('#exampleModal').modal('hide');
                                $('.success_text' + target).text('Select Successful').delay(5000).fadeOut();
                            });   
                        });
                    });
                },
                error:function(){
                    alert("failure");
                }
            });
            }  

            

        </script>
    </body> 
</html>


