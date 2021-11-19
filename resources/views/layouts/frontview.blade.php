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
        <link rel="stylesheet" href="../font/stylesheet.css">
    
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
                            <li><a class="page-scroll navli" href="{{ route('view_product') }}">Products</a></li>
                            <!-- <li><a class="page-scroll" href="#portfolio-section">Works</a></li> -->
                            <!-- <li><a class="page-scroll" href="#team-section">Team</a></li> -->
                            <li><a class="page-scroll navli" href="{{ route('view_packages') }}">Packages</a></li>
                            <li><a class="page-scroll navli" href="{{ route('about') }}">About</a></li>
                            <li><a class="page-scroll navli" href="{{ route('contact') }}">Contact</a></li>
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
        <script src="https://cdn.jsdelivr.net/gh/thelevicole/youtube-to-html5-loader@2.0.0/dist/YouTubeToHtml5.js"></script>
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


            // $('#card_front').attr('src', 'https://i.ibb.co/1mkpzzm/Untitled-1.png');
            // $('#card_back').attr('src', 'https://i.ibb.co/1mkpzzm/Untitled-1.png');
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


            $('#front_move_left').on('click', function(){
                $('.card_description').attr('style', 'right: 30% !important; color:' + $('#text_color').val() + '!important;');
                $('.front_card_name').attr('style', 'right: 30% !important; color:' + $('#text_color').val() + '!important;');
                $('#logo_view').attr('style', 'left: 13% !important');
                $('#catch_click').text('left');
                console.log($('#catch_click').text());
            });

            $('#front_move_center').on('click', function(){
                $('.card_description').attr('style', 'text-align:center !important; color:' + $('#text_color').val() + '!important;');
                $('.front_card_name').attr('style', 'text-align:center !important; color:' + $('#text_color').val() + '!important;');
                $('#logo_view').attr('style', 'left: 42% !important');
                $('#catch_click').text('center');
                console.log($('#catch_click').text());
            });

            $('#front_move_right').on('click', function(){
                $('.card_description').attr('style', 'left: 25% !important; color:' + $('#text_color').val() + '!important;');
                $('.front_card_name').attr('style', 'left: 25% !important;color:' + $('#text_color').val() + '!important;');
                $('#logo_view').attr('style', 'left: 67% !important;');
                $('#catch_click').text('right');
                console.log($('#catch_click').text());
            });

            let TextcolorInput = document.getElementById('text_color');
                TextcolorInput.addEventListener('input', () =>{
                    // alert('left');
                if($('#catch_click').text() == 'left'){
                    $('.front_card_name').attr('style', 'color:' + TextcolorInput.value + '!important; right: 30% !important;');
                    $('.card_description').attr('style', 'color:' + TextcolorInput.value + '!important; right: 30% !important;');
                } else if($('#catch_click').text() == 'right'){
                    $('.front_card_name').attr('style', 'color:' + TextcolorInput.value + '!important; left: 25% !important;');
                    $('.card_description').attr('style', 'color:' + TextcolorInput.value + '!important; left: 25% !important;');
                } else {
                    $('.front_card_name').attr('style', 'color:' + TextcolorInput.value + '!important; text-align:center !important;');
                    $('.card_description').attr('style', 'color:' + TextcolorInput.value + '!important; text-align:center !important;');
                }
                // else if($('.front_card_name').css('marginRight') == '30%'){
                //     alert('right');
                //     $('.front_card_name').attr('style', 'color:' + TextcolorInput.value + '!important; right: 30% important;');
                //     $('.card_description').attr('style', 'color:' + TextcolorInput.value + '!important; right: 30% important;');
                // } else {
                //     alert('center');
                //     $('.front_card_name').attr('style', 'color:' + TextcolorInput.value + '!important;');
                //     $('.card_description').attr('style', 'color:' + TextcolorInput.value + '!important;');
                // }
            });
        
            $("#name").keyup(function(event) {
                var name_value = $(this).val();
                $('.front_card_name').text(name_value);
            });

            function packageClick(e){
                document.getElementById('prices-section').style.display = "none";
                document.getElementById('prices-section-save').style.display = "none";
                document.getElementById('prices-section-two').style.display = "block";
                var targetValue = e.target.value;
                document.getElementById('package_name').value = targetValue;

                $.ajax({
                url: '/api/get_cards',
                type: 'post',
                data:{
                  take_request:"all"
                },
                success: function(response){
                    data = response.card_design;
                    console.log(response);
                    $.each(data, function(i, value) {
                        if(value['package_token'] == targetValue){
                            console.log(value['package_token']);
                            $('#column-image').append(`<div class="col-md-4">
                            <img src="../images/` + value['front_image'] + `" id="image_data" alt="" width="310" height="200">
                            <div class="col-md-6 col-md-offset-3" style="display: flex; justify-content: center;">
                                <button type="button" class="btn btn-success zoom" id="` + value['id']  + `" data-id="` + value['id'] + `">Zoom Card</button>
                                <button type="button" class="btn btn-success select-card" id="` + value['id']  + `" data-id="` + value['id'] + `">Select Card</button>
                            </div>
                            <div class="col-md-6 col-md-offset-3">
                                <p id="success_p"  class="success_text`+ value['id'] +`"></p>
                            </div>`);
                        }

                        // $('#text_color').val('#FFFFFF');
                        
                        $('.front_card_name').attr('style', 'color:' + $('#text_color').val() + ';');
                        $('.card_description').attr('style', 'color:' + $('#text_color').val() + ';');

                        if(targetValue == "12345"){
                            $('#bg_div').hide();
                            $('#qr_div').hide();
                            $('#card_blank_back').attr('style', 'margin-top: 171px !important;');
                        } 


                        let colorInput = document.getElementById('background_color');
                        colorInput.addEventListener('input', () =>{
                            if(targetValue == "12345"){
                                $('#card_blank_front').attr('style', 'background-color:' + colorInput.value + ';');
                            } else {
                                $('#card_blank_front').attr('style', 'background-color:' + colorInput.value + ';');
                                $('#card_blank_back').attr('style', 'background-color:' + colorInput.value + ';');
                            }
                        });


                        $('.zoom').on('click', function(e) {
                            let id = e.target.id;
                            if(id == value['id']){
                                console.log(value['back_image']);
                                    $('#front_img').attr('src', "../images/" + value['front_image']);
                                if(targetValue == "12345"){
                                    $('#back_img').attr('src', "../images/Back.png");
                                } else {
                                    console.log(value['default_back_transparent']);
                                    $('#back_img').attr('src', "../images/" + value['back_image']);
                                }
                                $('#exampleModal').modal('show');
                            }
                        });

                        $('.select-card').on('click', function(e) {
                            var target = e.target.id;
                            console.log(target);
                            $('#card_design_id').val(target);
                            if(target == value['id']){
                                console.log(value['text_color']);
                                var txt_color = value['text_color'];
                                $('#card_blank_front').attr('style', 'background-color:'+ value['bg_color'] +'!important;');
                                $('#card_front').attr('src', "../images/" + value['default_front_transparent']);
                                if(targetValue != '12345'){
                                    $('#card_back').attr('src', "../images/" + value['default_back_transparent']);
                                }
                                $('#exampleModal').modal('hide');
                                $('.success_text' + target).text('Select Successful').delay(5000).fadeOut();
                            }
                        });  
                    });
                },
                error:function(){
                    alert("failure");
                }
            });
            }  

            $('.uploadLogo').change(function(){
                var logo = window.URL.createObjectURL(this.files[0]);
                $('#logo_view').attr('src',logo);
                $('#logoModal').modal('hide');
            });

            $('#editName').on("click", function(){
                $('#nameTextModal').modal('show');
            });

            $('.edit_name').keyup(function(event){
                var text_value = $(this).val();
                var text_length = $(this).val().length;
                var text_limit = 18;

                if(text_length > text_limit){
                    $(this).val($(this).val().substring(0, text_limit));
                }

                $('.front_card_name').text(text_value);
            });

            $('#editDescription').on("click", function(){
                $('#descriptionTextModal').modal('show');
            });


            $('.edit_description').keyup(function(event){ 

                var char_length = $(this).val().length;
                // console.log(char_length);
                $('.card_description').text($(this).val());
                
                var limit = 30;
                if(char_length > limit){
                    $(this).val($(this).val().substring(0, limit));
                }
               
            });

            $('#upload_logo').on("click", function(){
                $('#logoModal').modal('show');
            });
        </script>
    </body> 
</html>
