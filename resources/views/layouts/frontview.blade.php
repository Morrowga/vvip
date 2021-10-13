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
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<!-- Theme CSS -->
        <link rel="stylesheet" href="../css/reset.css">
        <link rel="stylesheet" href="../css/custom.css">
		<link rel="stylesheet" href="../css/style.css">
		<link rel="stylesheet" href="../css/mobile.css">
        <link href="//db.onlinewebfonts.com/c/8be4a2f403c2dc27187d892cca388e24?family=Britannic+Bold" rel="stylesheet" type="text/css"/>

		<!-- Skin CSS -->
		<link rel="stylesheet" href="css/skin/cool-gray.css">
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
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand page-scroll" href="/">VVIP</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a class="page-scroll navli" href="body">Home</a></li>
                            <li><a class="page-scroll navli" href="#services-section">Services</a></li>
                            <!-- <li><a class="page-scroll" href="#portfolio-section">Works</a></li> -->
                            <!-- <li><a class="page-scroll" href="#team-section">Team</a></li> -->
                            <li><a class="page-scroll navli" href="#prices-section">Prices</a></li>
                            <li><a class="page-scroll navli" href="#about-section">About</a></li>
                            <li><a class="page-scroll navli" href="#contact-section">Contact</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                  </div><!-- /.container -->
                </nav>
                <!-- End Navbar -->

            </header>
            <!-- ========= END HEADER =========-->
            
            
            
            
        	<!-- Begin text carousel intro section -->
			<section id="text-carousel-intro-section" class="parallax intro-parallax">
				
                    <div class="container">
                        <div class="caption text-center text-white">
                            <div id="owl-intro-text" class="owl-carousel">
                                <div class="item">
                                    <h1 class="logo-text">VVIP NINE</h1>
                                    <p>Let's make the web beautiful together</p>
                                    <div class="extra-space-l"></div>
                                    <a class="btn btn-blank page-scroll" href="#services-section" role="button">Our Service</a>
                                    <a class="btn btn-blank page-scroll" href="#prices-section" role="button">Register Now</a>
                                </div>
                                <div class="item">
                                    <h1 class="logo-text">VVIP NINE</h1>
                                    <p>To the greatest Journey</p>
                                    <div class="extra-space-l"></div>
                                    <a class="btn btn-blank" href="{{ route('login') }}" role="button">ACCOUNT LOGIN</a>
                                </div>
                                <!-- <div class="item">
                                    <h1>I'm Unika</h1>
                                    <p>VVIP NINE</p>
                                    <div class="extra-space-l"></div>
                                    <a class="btn btn-blank" href="https://creativemarket.com/Themetorium" target="_blank" role="button">View More!</a>
                                </div> -->
                            </div>
                        </div> <!-- /.caption -->
                    </div>
			</section>
			<!-- End text carousel intro section -->
                

            <!-- Begin Services -->
            <section id="services-section" class="page text-center">
                <!-- Begin page header-->
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                            <h2 class="service">Services</h2>
                            <div class="devider"></div>
                            <p class="subtitle">what we really know how</p>
                        </div>
                    </div>
                </div>
                <!-- End page header-->
            
                <!-- Begin roatet box-2 -->
                <div class="rotate-box-2-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <a href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0">
                                    <span class="rotate-box-icon"><i class="fa fa-mobile service-icon"></i></span>
                                    <div class="rotate-box-info">
                                        <h4 class="service-text">App Development</h4>
                                        <p class="service-text">Lorem ipsum dolor sit amet set, consectetur utes anet adipisicing elit, sed do eiusmod tempor incidist.</p>
                                    </div>
                                </a>
                            </div>
            
                            <div class="col-md-3 col-sm-6">
                                <a href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.2s">
                                    <span class="rotate-box-icon"><i class="far fa-chart-bar service-icon"></i></span>
                                    <div class="rotate-box-info">
                                        <h4 class="service-text">Ui Design</h4>
                                        <p class="service-text">Lorem ipsum dolor sit amet set, consectetur utes anet adipisicing elit, sed do eiusmod tempor incidist.</p>
                                    </div>
                                </a>
                            </div>
            
                            <div class="col-md-3 col-sm-6">
                                <a href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.4s">
                                    <span class="rotate-box-icon"><i class="fas fa-cloud service-icon"></i></span>
                                    <div class="rotate-box-info">
                                        <h4 class="service-text">Cloud Hosting</h4>
                                        <p class="service-text">Lorem ipsum dolor sit amet set, consectetur utes anet adipisicing elit, sed do eiusmod tempor incidist.</p>
                                    </div>
                                </a>
                            </div>
                            
                            <div class="col-md-3 col-sm-6">
                                <a href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.6s">
                                    <span class="rotate-box-icon"><i class="fas fa-pencil-alt service-icon"></i></span>
                                    <div class="rotate-box-info">
                                        <h4 class="service-text">Coding Pen</h4>
                                        <p class="service-text">Lorem ipsum dolor sit amet set, consectetur utes anet adipisicing elit, sed do eiusmod tempor incidist.</p>
                                    </div>
                                </a>
                            </div>
                            
                        </div> <!-- /.row -->
                    </div> <!-- /.container -->
                    
                    <div class="container">
                        <!-- Cta Button -->
                        <div class="extra-space-l"></div>
                        <div class="text-center">
                    		<a class="btn btn-default btn-lg-xl page-scroll" href="#about-section" role="button">More Info About</a>
                        </div>
                    </div> <!-- /.container -->                       
                </div>
                <!-- End rotate-box-2 -->
            </section>
            <!-- End Services -->
                
                
             <!-- Begin prices section -->
			<section id="prices-section" class="page">
                <!-- Begin page header-->
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                            <h2 class="package">Prices</h2>
                            <div class="devider"></div>
                            <p class="subtitle">That how much</p>
                        </div>
                    </div>
                </div>
                <!-- End page header-->

                <div class="extra-space-l"></div>

                    <!-- Begin prices -->
                    <div class="prices">
                        <div class="container">
                            <div class="row">
                                
                                <div class="price-box col-sm-6 col-md-4 wow flipInY" data-wow-delay="0.3s">
                                    <div class="panel panel-default first-price-box">
                                        <div class="panel-heading text-center">
                                            <h3 class="package">NORMAL</h3>
                                            <img src="../images/gold.png" alt="" width="100" height="110">
                                            <h4 class="package">GOLD</h4>
                                        </div>
                                        <div class="panel-body text-center">
                                            <p class="lead"><strong>$49</strong></p>
                                        </div>
                                        <ul class="list-group text-center"> 
                                            <li class="list-group-item one"><i class="fas fa-check" style="margin-right: 5px !important; font-size: 8px !important; color: rgb(253,235,162) !important;" ></i>Personal Use</li>
                                            <li class="list-group-item one"><i class="fas fa-check" style="margin-right: 5px !important; font-size: 8px !important; color: rgb(253,235,162) !important;" ></i>Contact System</li>
                                            <li class="list-group-item one"><i class="fas fa-check" style="margin-right: 5px !important; font-size: 8px !important; color: rgb(253,235,162) !important;" ></i>Personal Social Platform Links</li>
                                            <li class="list-group-item one"><i class="fas fa-check" style="margin-right: 5px !important; font-size: 8px !important; color: rgb(253,235,162) !important;" ></i>Personnal Deep Link</li>
                                            <li class="list-group-item one"><i class="fas fa-check" style="margin-right: 5px !important; font-size: 8px !important; color: rgb(253,235,162) !important;" ></i>Business URL</li>
                                            <li class="list-group-item one"><i class="fas fa-check" style="margin-right: 5px !important; font-size: 8px !important; color: rgb(253,235,162) !important;" ></i>Telephone Call System</li>
                                        </ul>
                                        <div class="panel-footer text-center">
                                            <a class="btn btn-default price-btn-one" href="#">Order Now!</a>
                                        </div>
                                    </div>										
                                </div>
                                
                                <div class="price-box col-sm-6 price-box-featured col-md-4 wow flipInY ml-3" data-wow-delay="0.7s">
                                    <div class="panel panel-default">
                                        <div class="panel-heading text-center">
                                            <h3 class="package">STANDARD</h3>
                                            <img src="../images/diamond.png" alt="" width="100" height="110">
                                            <h4 class="package">DIAMOND</h4>
                                        </div>
                                        <div class="panel-body text-center">
                                            <p class="lead"><strong>$149</strong></p>
                                        </div>
                                        <ul class="list-group text-center">
                                            <li class="list-group-item"><i class="fas fa-check" style="margin-right: 5px !important; font-size: 8px !important; color: rgb(253,235,162) !important;" ></i>Personal Use</li>
                                            <li class="list-group-item"><i class="fas fa-check" style="margin-right: 5px !important; font-size: 8px !important; color: rgb(253,235,162) !important;"></i>Contact & Social System</li>
                                            <li class="list-group-item"><i class="fas fa-check" style="margin-right: 5px !important; font-size: 8px !important; color: rgb(253,235,162) !important;"></i>SMS</li>
                                            <li class="list-group-item"><i class="fas fa-check" style="margin-right: 5px !important; font-size: 8px !important; color: rgb(253,235,162) !important;"></i>Event</li>
                                            <li class="list-group-item"><i class="fas fa-check" style="margin-right: 5px !important; font-size: 8px !important; color: rgb(253,235,162) !important;"></i>Bank / Pay Info</li>
                                            <li class="list-group-item"><i class="fas fa-check" style="margin-right: 5px !important; font-size: 8px !important; color: rgb(253,235,162) !important;"></i>Personal Social Platform Links</li>
                                            <li class="list-group-item"><i class="fas fa-check" style="margin-right: 5px !important; font-size: 8px !important; color: rgb(253,235,162) !important;"></i>Personnal Deep Link</li>
                                            <li class="list-group-item"><i class="fas fa-check" style="margin-right: 5px !important; font-size: 8px !important; color: rgb(253,235,162) !important;"></i>Business URL</li>
                                            <li class="list-group-item"><i class="fas fa-check" style="margin-right: 5px !important; font-size: 8px !important; color: rgb(253,235,162) !important;"></i>Telephone Call System</li>
                                        </ul>
                                        <div class="panel-footer text-center">
                                            <a class="btn btn-default" href="#">Order Now!</a>
                                        </div>
                                        <div class="price-box-ribbon"><strong>Popular</strong></div>
                                    </div>										
                                </div>
                                
                                <div class="price-box col-sm-6 col-md-4 wow flipInY ml-3" data-wow-delay="0.9s">
                                    <div class="panel panel-default">
                                        <div class="panel-heading text-center">
                                            <h3 class="package">LUXURY</h3>
                                            <img src="../images/ruby.png" alt="" width="100" height="110">
                                            <h3 class="package">RUBY</h3>
                                        </div>
                                        <div class="panel-body text-center">
                                            <p class="lead"><strong>$199</strong></p>
                                        </div>
                                        <ul class="list-group text-center">
                                            <li class="list-group-item"><i class="fas fa-check" style="margin-right: 5px !important; font-size: 8px !important; color: rgb(253,235,162) !important;" ></i>Personal Use</li>
                                            <li class="list-group-item"><i class="fas fa-check" style="margin-right: 5px !important; font-size: 8px !important; color: rgb(253,235,162) !important;" ></i>Contact & Social System</li>
                                            <li class="list-group-item"><i class="fas fa-check" style="margin-right: 5px !important; font-size: 8px !important; color: rgb(253,235,162) !important;" ></i>SMS</li>
                                            <li class="list-group-item"><i class="fas fa-check" style="margin-right: 5px !important; font-size: 8px !important; color: rgb(253,235,162) !important;" ></i>Event</li>
                                            <li class="list-group-item"><i class="fas fa-check" style="margin-right: 5px !important; font-size: 8px !important; color: rgb(253,235,162) !important;" ></i>Bank / Pay Info</li>
                                            <li class="list-group-item"><i class="fas fa-check" style="margin-right: 5px !important; font-size: 8px !important; color: rgb(253,235,162) !important;" ></i>Personal Social Platform Links</li>
                                            <li class="list-group-item"><i class="fas fa-check" style="margin-right: 5px !important; font-size: 8px !important; color: rgb(253,235,162) !important;" ></i>Personnal Deep Link</li>
                                            <li class="list-group-item"><i class="fas fa-check" style="margin-right: 5px !important; font-size: 8px !important; color: rgb(253,235,162) !important;" ></i>Business URL</li>
                                            <li class="list-group-item"><i class="fas fa-check" style="margin-right: 5px !important; font-size: 8px !important; color: rgb(253,235,162) !important;" ></i>Personal Assistant</li>
                                            <li class="list-group-item"><i class="fas fa-check" style="margin-right: 5px !important; font-size: 8px !important; color: rgb(253,235,162) !important;" ></i>Telephone Call System</li>
                                        </ul>
                                        <div class="panel-footer text-center">
                                            <a class="btn btn-default" href="#">Order Now!</a>
                                        </div>
                                    </div>										
                                </div>
                                
                            </div> <!-- /.row -->
                        </div> <!-- /.container -->
                    </div>
                    <!-- End prices -->
                    <div class="extra-space-l"></div>
            </section>
            <!-- End prices section -->

              
           
                
                
            <!-- Begin counter up -->
            <section id="counter-section">                					
				<div id="counter-up-trigger" class="counter-up text-white parallax counter-parallax" data-stellar-background-ratio="0.5" style="background-image: url(../images/counter-bg.jpg);">
					<div class="cover"></div>
                    <!-- Begin page header-->
                    <div class="page-header-wrapper">
                        <div class="container">
                            <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                                <h2>Some Fun Facts</h2>
                                <div class="devider"></div>
                                <p class="subtitle">Before anyone is not told</p>
                            </div>
                        </div>
                    </div>
                    <!-- End page header-->
					<div class="container">

						<div class="row">

							<div class="fact text-center col-md-6 col-sm-6">
								<div class="fact-inner">
									<i class="fa fa-users fa-3x counter-icon"></i>
                                    <div class="extra-space-l"></div>
									<span class="counter">6666</span>
									<p class="lead">Total User</p>
								</div>
							</div>

							<div class="fact text-center col-md-6 col-sm-6">
								<div class="fact-inner">
									<i class="fa fa-heart fa-3x counter-icon"></i>
                                    <div class="extra-space-l"></div>
									<span class="counter">800</span>
									<p class="lead">Satisfied User</p>
								</div>
							</div>

							<!-- <div class="fact text-center col-md-3 col-sm-6">
								<div class="fact-inner">
									<i class="fa fa-trophy fa-3x"></i>
                                    <div class="extra-space-l"></div>
									<span class="counter">55</span>
									<p class="lead">Winning Awards</p>
								</div>
							</div>

							<div class="fact last text-center col-md-3 col-sm-6">
								<div class="fact-inner">
									<i class="fa fa-coffee fa-3x"></i>
                                    <div class="extra-space-l"></div>
									<span class="counter">1100</span>
									<p class="lead">Cups of coffee drinking</p>
								</div>
							</div> -->

						</div> <!-- /.row -->
					</div> <!-- /.container -->
				</div>
            </section>
			<!-- End counter up -->
                
                
                
                
            <!-- Begin partners -->
            <!-- <section id="partners-section"> -->
                <!-- Begin page header-->
                <!-- <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                            <h2>Our Partners</h2>
                            <div class="devider"></div>
                            <p class="subtitle">Those who trust us</p>
                        </div>
                    </div>
                </div> -->
                <!-- End page header-->
                <!-- <div class="container">
                    <div id="owl-partners" class="owl-carousel">
                        <img src="../images/partners/1.png" alt="img">
                        <img src="../images/partners/2.png" alt="img">
                        <img src="../images/partners/3.png" alt="img">
                        <img src="../images/partners/4.png" alt="img">
                        <img src="../images/partners/5.png" alt="img">
                        <img src="../images/partners/6.png" alt="img">
                        <img src="../images/partners/7.png" alt="img">
                    </div>
                </div> -->
            <!-- </section> -->
            <!-- End partners -->
                
                
                
                
             <!-- Begin about section -->
			<section id="about-section" class="page bg-style1">
                <!-- Begin page header-->
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInUp" data-wow-delay="0.3s">
                            <h2 class="about">About</h2>
                            <div class="devider"></div>
                            <p class="subtitle">little information</p>
                        </div>
                    </div>
                </div>
                <!-- End page header-->

                <!-- Begin rotate box-1 -->
                <div class="rotate-box-1-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <a href="#" class="rotate-box-1 square-icon wow zoomIn" data-wow-delay="0">
                                    <span class="rotate-box-icon"><i class="fa fa-users about-icon"></i></span>
                                    <div class="rotate-box-info">
                                        <h4 class="about-text">Who We Are?</h4>
                                        <p class="about-text">Lorem ipsum dolor sit amet set, consectetur utes anet adipisicing elit, sed do eiusmod tempor incidist.</p>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <a href="#" class="rotate-box-1 square-icon wow zoomIn" data-wow-delay="0.2s">
                                    <span class="rotate-box-icon"><i class="fas fa-gem about-icon"></i></span>
                                    <div class="rotate-box-info">
                                        <h4 class="about-text">What We Do?</h4>
                                        <p class="about-text">Lorem ipsum dolor sit amet set, consectetur utes anet adipisicing elit, sed do eiusmod tempor incidist.</p>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <a href="#" class="rotate-box-1 square-icon wow zoomIn" data-wow-delay="0.4s">
                                    <span class="rotate-box-icon"><i class="fa fa-heart about-icon"></i></span>
                                    <div class="rotate-box-info">
                                        <h4 class="about-text">Why We Do It?</h4>
                                        <p class="about-text">Lorem ipsum dolor sit amet set, consectetur utes anet adipisicing elit, sed do eiusmod tempor incidist.</p>
                                    </div>
                                </a>
                            </div>
                            
                            <div class="col-md-3 col-sm-6">
                                <a href="#" class="rotate-box-1 square-icon wow zoomIn" data-wow-delay="0.6s">
                                    <span class="rotate-box-icon"><i class="far fa-clock about-icon"></i></span>
                                    <div class="rotate-box-info">
                                        <h4 class="about-text">Since When?</h4>
                                        <p class="about-text">Lorem ipsum dolor sit amet set, consectetur utes anet adipisicing elit, sed do eiusmod tempor incidist.</p>
                                    </div>
                                </a>
                            </div>
                            
                        </div> <!-- /.row -->
                    </div> <!-- /.container -->
                </div>
                <!-- End rotate box-1 -->
                
                <div class="extra-space-l"></div>
                
                <!-- Begin page header--> 
                <!-- <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInUp" data-wow-delay="0.3s">
                            <h4>Our Skills</h4>
                        </div>
                    </div>
                </div> -->
                <!-- End page header-->
                
                <!-- Begin Our Skills -->
                <!-- <div class="our-skills">
                	<div class="container">
                    	<div class="row">
                        
                        	<div class="col-sm-6">
                                <div class="skill-bar wow slideInLeft" data-wow-delay="0.2s">
                                    <div class="progress-lebel">
                                        <h6>Photoshop & Illustrator</h6>
                                    </div>
                                    <div class="progress">
                                      <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                                      </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="skill-bar wow slideInRight" data-wow-delay="0.2s">
                                    <div class="progress-lebel">
                                        <h6>WordPress</h6>
                                    </div>
                                    <div class="progress">
                                      <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
                                      </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="skill-bar wow slideInLeft" data-wow-delay="0.4s">
                                    <div class="progress-lebel">
                                        <h6>Html & Css</h6>
                                    </div>
                                    <div class="progress">
                                      <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">
                                      </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="skill-bar wow slideInRight" data-wow-delay="0.4s">
                                    <div class="progress-lebel">
                                        <h6>Javascript</h6>
                                    </div>
                                    <div class="progress">
                                      <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                      </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div> -->
                        <!-- /.row -->
                    <!-- </div> -->
                     <!-- /.container -->
                <!-- </div> -->
                <!-- End Our Skill -->
          </section>
          <!-- End about section -->
                
                
                
                
            <!-- Begin social section -->
			<section id="social-section">
            
                 <!-- Begin page header-->
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                            <h2 class="social">Join Us</h2>
                            <div class="devider"></div>
                            <p class="subtitle">Follow us on social networks</p>
                        </div>
                    </div>
                </div>
                <!-- End page header-->
                
                <div class="container">
                	<ul class="social-list">
                		<li> <a href="#" class="rotate-box-1 square-icon text-center wow zoomIn" data-wow-delay="0.3s"><span class="rotate-box-icon fb"><i class="fab fa-facebook"></i></span></a></li>
                		<li> <a href="#" class="rotate-box-1 square-icon text-center wow zoomIn" data-wow-delay="0.4s"><span class="rotate-box-icon twitter"><i class="fab fa-twitter"></i></span></a></li>
                		<li> <a href="#" class="rotate-box-1 square-icon text-center wow zoomIn" data-wow-delay="0.5s"><span class="rotate-box-icon instagram"><i class="fab fa-instagram"></i></span></a></li>
                        <li> <a href="#" class="rotate-box-1 square-icon text-center wow zoomIn" data-wow-delay="0.4s"><span class="rotate-box-icon telegram"><i class="fab fa-telegram"></i></span></a></li>
                    </ul>
                </div>
                
            </section>
            <!-- End social section -->
                
                
                
                
            <!-- Begin contact section -->
			<section id="contact-section" class="page text-white parallax contact-parallax" data-stellar-background-ratio="0.5" style="background-image: url(../images/map-bg.jpg);">
            <div class="cover"></div>
            
                 <!-- Begin page header-->
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                            <h2 class="contact">Contacts</h2>
                            <div class="devider"></div>
                            <p class="subtitle">All to contact us</p>
                        </div>
                    </div>
                </div>
                <!-- End page header-->
                
                <div class="contact wow bounceInRight" data-wow-delay="0.4s">
                    <div class="container">
                    	<div class="row">
                        
                            <div class="col-sm-6">
                                <div class="contact-info">
                                    <h4 class="contact">Our Address</h4>
                                    <ul class="contact-address">
			                            <li><i class="fa fa-map-marker fa-lg"></i>&nbsp; 100 Limpbiscayne Blvd. (North) 17st Floor ,<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; New World Tower New York ,<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; New York, USA, 33148</li>
			                            <li><i class="fa fa-phone"></i>&nbsp; 1 -234 -456 -7890</li>
			                            <li><i class="fa fa-print"></i>&nbsp; 1 -234 -456 -7890</li>
			                            <li><i class="fa fa-envelope"></i> info@yourdomain.com</li>
			                        </ul>
                                </div>
                            </div>
                        
                        	<div class="col-sm-6">
                                <div class="contact-form">
                                	<h4 class="contact">Write to us</h4>
                                    <form role="form">
                                        <div class="form-group">
                                            <input type="text" class="form-control input-lg" placeholder="Your Name" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control input-lg" placeholder="E-mail" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control input-lg" placeholder="Subject" required>
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control input-lg" rows="5" placeholder="Message" required></textarea>
                                        </div>
                                        <button type="submit" class="btn wow bounceInRight contact-btn" data-wow-delay="0.8s">Send</button>
                                    </form>
                                </div>	
                            </div>
                                                                                
                        </div> <!-- /.row -->
                    </div> <!-- /.container -->
                </div>
            </section>
            <!-- End contact section -->
                
                

                
            <!-- Begin footer -->
            <footer class="text-off-white">
            
                <div class="footer-top" hidden>
                	<div class="container">
                    	<div class="row wow bounceInLeft" data-wow-delay="0.4s">

                            <div class="col-sm-6 col-md-4">
                            	<h4>Useful Links</h4>
                                <ul class="imp-links">
                                	<li><a href="">About</a></li>
                                	<li><a href="">Services</a></li>
                                	<li><a href="">Press</a></li>
                                	<li><a href="">Copyright</a></li>
                                	<li><a href="">Advertise</a></li>
                                	<li><a href="">Legal</a></li>
                                </ul>
                            </div>
                        
                        	<div class="col-sm-6 col-md-4">
                                <h4>Subscribe</h4>
                            	<div id="footer_signup">
                                    <div id="email">
                                        <form id="subscribe" method="POST">
                                            <input type="text" placeholder="Enter email address" name="email" id="address" data-validate="validate(required, email)"/>
                                            <button type="submit">Submit</button>
                                            <span id="result" class="section-description"></span>
                                        </form> 
                                    </div>
                                </div> 
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> 
                            </div>

                            <div class="col-sm-12 col-md-4">
                                <h4>Recent Tweets</h4>
                                <div class="single-tweet">
                                    <div class="tweet-content"><span>@Unika</span> Excepteur sint occaecat cupidatat non proident</div>
                                    <div class="tweet-date">1 Hour ago</div>
                                </div>
                                <div class="single-tweet">
                                    <div class="tweet-content"><span>@Unika</span> Excepteur sint occaecat cupidatat non proident uku shumaru</div>
                                    <div class="tweet-date">1 Hour ago</div>
                                </div>
                            </div>
                            
                        </div>
                         <!-- /.row -->
                    </div> 
                    <!-- /.container -->
                </div>
                
                <div class="footer">
                    <div class="container text-center wow fadeIn" data-wow-delay="0.4s">
                        <p class="copyright">Copyright &copy; 2021 <a href="https://www.behance.net/poljakova" class="theme-author">Htut Media</a></p>
                    </div>
                </div>

            </footer>
            <!-- End footer -->

            <a href="#" class="scrolltotop"><i class="fa fa-arrow-up"></i></a> <!-- Scroll to top button -->
                                              
        </div>
        <div id="loading" style="display:block;">
            <div class="container justify-content-center d-flex">
            <img src="../images/logo.jpeg" alt="" width="350" height="350" class="main_logo mt-4">
            <svg class="load" version="1.1" id="L4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preservefas fa-check fill="rgb(217,181,81)" stroke="none" cx="6" cy="50" r="6">
                <animate
                attributeName="opacity"
                dur="1s"
                values="0;1;0"
                repeatCount="indefinite"
                begin="0.1"/>   fas fa-check fill="rgb(217,181,81)" stroke="none" cx="26" cy="50" r="6">
                <animate
                attributeName="opacity"
                dur="1s"
                values="0;1;0"
                repeatCount="indefinite" 
                begin="0.2"/>      fas fa-check fill="rgb(217,181,81)" stroke="none" cx="46" cy="50" r="6">
                <animate
                attributeName="opacity"
                dur="1s"
                values="0;1;0"
                repeatCount="indefinite" 
                begin="0.3"/>    fas fa-check>
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
		<!-- <script src="../js/smoothscroll.js"></script> -->

		<!-- Theme JS -->
		<script src="../js/theme.js"></script>
        <script>
        let setT = setTimeout(function(){ 
            document.getElementById("loading").style.display = "none";
            document.getElementById("main-body").style.display = "block";
        }, 2000);
        </script>
    </body> 
</html>
