@extends('layouts.frontview')

@section('content')
<!-- Begin text carousel intro section -->
        <section id="text-carousel-intro-section" class="parallax intro-parallax">
                <div class="container">
                    <div class="caption text-center text-white">
                        <div id="owl-intro-text" class="owl-carousel">
                            <div class="item">
                                <h1 class="logo-text">VVIP NINE</h1>
                                <img src="https://media3.giphy.com/media/bk0yb1TrFsOnVz3ucq/200.webp?cid=ecf05e476h8pntc8h5pslcs1oylwt961sc3hvqgrmcdz4zmq&rid=200.webp&ct=g" alt="" width="260" height="200">
                                <p>Let's make the web beautiful together</p>
                                <div class="extra-space-l"></div>
                                <a class="btn btn-blank page-scroll navbarbtn" href="#services-section" role="button">Our Service</a>
                                <a class="btn btn-blank page-scroll navbarbtn" href="#prices-section" role="button">BUY NOW</a>
                            </div>
                            <div class="item">
                                <h1 class="logo-text">VVIP NINE</h1>
                                <img src="https://media3.giphy.com/media/bk0yb1TrFsOnVz3ucq/200.webp?cid=ecf05e476h8pntc8h5pslcs1oylwt961sc3hvqgrmcdz4zmq&rid=200.webp&ct=g" alt="" width="260" height="200">
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
                        <h2 class="service">Products</h2>
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
            </div>
            <!-- End rotate-box-2 -->
        </section>
                
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
                                <p class="lead">Total Users</p>
                            </div>
                        </div>

                        <div class="fact text-center col-md-6 col-sm-6">
                            <div class="fact-inner">
                                <i class="fa fa-heart fa-3x counter-icon"></i>
                                <div class="extra-space-l"></div>
                                <span class="counter">6666</span>
                                <p class="lead">Satisfied Users</p>
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
                <div class="container">
                    <!-- Cta Button -->
                    <div class="extra-space-l"></div>
                    <div class="text-center">
                        <a class="btn btn-default btn-lg-xl page-scroll" href="#about-section" role="button">More Info About Us</a>
                    </div>
                </div> <!-- /.container -->  
            </div>
            <!-- End rotate box-1 -->
            <div class="extra-space-l"></div>
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
                    <li> <a href="#" class="rotate-box-1 square-icon text-center wow zoomIn" data-wow-delay="0.4s"><span class="rotate-box-icon linkedin"><i class="fab fa-linkedin"></i></span></a></li>
                    <li> <a href="#" class="rotate-box-1 square-icon text-center wow zoomIn" data-wow-delay="0.5s"><span class="rotate-box-icon instagram"><i class="fab fa-instagram"></i></span></a></li>
                    <li> <a href="#" class="rotate-box-1 square-icon text-center wow zoomIn" data-wow-delay="0.4s"><span class="rotate-box-icon youtube"><i class="fab fa-youtube"></i></span></a></li>
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
                    <div class="col-md-12">
                        <p class="copyright text-center" style="padding-top: 15px !important;">Copyright &copy; 2021 <a href="https://www.behance.net/poljakova" class="theme-author">Htut Media</a></p>
                    </div>
                </div> <!-- /.container -->
            </div>
        </section>
        <!-- End contact section -->
@endsection