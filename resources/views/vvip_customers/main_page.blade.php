@extends('layouts.frontview')

@section('content')
<!-- Begin text carousel intro section -->
        <section id="text-carousel-intro-section" class="parallax intro-parallax">
                <div class="container">
                    <div class="caption text-center text-white">
                        <div id="owl-intro-text" class="owl-carousel">
                            <div class="item">
                                <h1 class="logo-text">VVIP NINE</h1>
                                <video width="500" height="250" id="video_one" loop autoplay muted>
                                    <source src="../images/VVIP 9 Still 6 sec.mp4" type="video/mp4" id="video_one">
                                    <source src="../images/VVIP 9 Still 6 sec.mp4" type="video/ogg" id="video_one">
                                </video>
                                <p>{{__('website.Everything')}}</p>
                                <div class="extra-space-l"></div>
                                <a class="btn btn-blank page-scroll navbarbtn" href="#services-section" role="button">{{__('website.Service')}}</a>
                                <a class="btn btn-blank page-scroll navbarbtn" href="#prices-section" role="button">{{__('website.Buy')}}</a>
                            </div>
                            <div class="item">
                                <h1 class="logo-text">VVIP NINE</h1>
                                <video width="500" height="250" id="video_one" loop autoplay muted>
                                    <source src="../images/VVIP 9 Still 6 sec.mp4" type="video/mp4" id="video_one">
                                    <source src="../images/VVIP 9 Still 6 sec.mp4" type="video/ogg" id="video_one">
                                </video>
                                <p>To the greatest Journey</p>
                            </div>
                            <div class="item">
                                <h1 class="logo-text">VVIP NINE</h1>
                                <video width="500" height="250" id="video_one" loop autoplay muted>
                                    <source src="../images/VVIP 9 Still 6 sec.mp4" type="video/mp4" id="video_one">
                                    <source src="../images/VVIP 9 Still 6 sec.mp4" type="video/ogg" id="video_one">
                                </video>
                                <p>To the greatest Journey</p>
                            </div>
                        </div>
                    </div> <!-- /.caption -->
                </div>
        </section>
        <!-- End text carousel intro section -->
            

        <!-- Begin Services -->
        <section id="services-section" class="page text-center">
            <div class="d-flex justify-content-center">
                <!-- <div class="col-md-6">
                    <div class="video_contain">
                    <video loop autoplay muted id="vid_pro">
                        <source src="../images/JOKER - Final Trailer - Now Playing In Theaters.mp4" type="video/mp4">
                        <source src="../images/JOKER - Final Trailer - Now Playing In Theaters.mp4" type="video/ogg">
                    </video>
                    </div>
                </div> -->
                <div class="col-md-6">
                    <img src="https://www.pngkey.com/png/full/390-3907448_free-download-emv-card-png-clipart-emv-smart.png" alt="" width="300" height="350">
                </div>
                <div class="col-md-6" id="text_section_product">
                    <h2 class="service">{{__('website.Products')}}</h2>
                    <div class="devider"></div>
                    <p class="subtitle" style="margin-top: 20px !important;">Something Here</p>
                     <a class="btn btn-default btn-lg-xl page-scroll"  style="margin-top: 20px;" href="/product" role="button">{{__('website.more')}}</a>
                <!-- End rotate-box-2 -->
                </div>
            </div>
            <!-- Begin page header-->
        </section>
                
        <!-- Begin counter up -->
        <!-- <section id="counter-section" style="margin-top: 10px !important;">                					
            <div id="counter-up-trigger" class="counter-up text-white parallax counter-parallax" data-stellar-background-ratio="0.5" style="background-image: url(../images/counter-bg.jpg);">
                <div class="cover"></div>
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                            <h2>Some Fun Facts</h2>
                            <div class="devider"></div>
                            <p class="subtitle">Before anyone is not told</p>
                        </div>
                    </div>
                </div>
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
                    </div> 
                </div> 
            </div>
        </section> -->
        <!-- End counter up -->

         <!-- Begin about section -->
        <section id="about-section" class="page bg-style1">
            <!-- Begin page header-->
            <div class="page-header-wrapper">
                <div class="container">
                    <div class="page-header text-center wow fadeInUp" data-wow-delay="0.3s">
                        <h2 class="about">{{__('website.About')}}</h2>
                        <div class="devider"></div>
                        <p class="subtitle">little information</p>
                    </div>
                </div>
            </div>
            <!-- End page header-->

            <!-- Begin rotate box-1 -->
            <div class="rotate-box-1-wrapper">
                <div class="container about_container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <a href="#" class="rotate-box-1 square-icon wow zoomIn" data-wow-delay="0">
                                <span class="rotate-box-icon"><i class="fas fa-question about-icon"></i></span>
                                <div class="rotate-box-info">
                                    <h4 class="about-text" id="head_about_text">{{__('website.whatisvvip')}}</h4>
                                    <p class="about-text">{{ \Illuminate\Support\Str::limit(__('website.whatvvip_para'), 100, '...') }}
                                    </p>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <a href="#" class="rotate-box-1 square-icon wow zoomIn" data-wow-delay="0.2s">
                                <span class="rotate-box-icon"><i class="fas fa-credit-card about-icon"></i></span>
                                <div class="rotate-box-info">
                                    <h4 class="about-text" id="head_about_text">{{__('website.whatissmartcard')}}</h4>
                                    <p class="about-text">{{ \Illuminate\Support\Str::limit(__('website.whatsmartcard_para'), 100, '...') }}
                                    </p>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <a href="#" class="rotate-box-1 square-icon wow zoomIn" data-wow-delay="0.4s">
                                <span class="rotate-box-icon"><i class="fa fa-heart about-icon"></i></span>
                                <div class="rotate-box-info">
                                    <h4 class="about-text" id="head_about_text">{{__('website.useful')}}</h4>
                                    <p class="about-text">{{ \Illuminate\Support\Str::limit(__('website.useful_para'), 130, '...') }}
                                    </p>                                
                                </div>
                            </a>
                        </div>
                    </div> <!-- /.row -->
                    <div class="col-md-12 text-center">
                        <a class="btn btn-default btn-lg-xl page-scroll"  style="margin-top: 20px;" href="/about" role="button">{{__('website.more')}}</a>
                    </div>
                </div> <!-- /.container -->
                <div class="container">
                    <!-- Cta Button -->
                    <div class="extra-space-l"></div>
                    <div class="text-center">
                        <!-- <a class="btn btn-default btn-lg-xl page-scroll" href="#about-section" role="button">More Info About Us</a> -->
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
                        <h2 class="social">{{__('website.join_us')}}</h2>
                        <div class="devider"></div>
                        <p class="subtitle">Follow us on social networks</p>
                    </div>
                </div>
            </div>
            <!-- End page header-->
            
            <div class="container">
                <ul class="social-list">
                    <li> <a href="#" class="rotate-box-1 square-icon text-center wow zoomIn" style="border-radius: 50% !important;" data-wow-delay="0.3s"><span class="fb" style="border-radius: 50% !important;"><i class="fab fa-facebook" style="border-radius: 50% !important;"></i></span></a></li>
                    <li> <a href="#" class="rotate-box-1 square-icon text-center wow zoomIn" data-wow-delay="0.4s"><span class="linkedin" style="border-radius: 50% !important;"><i class="fab fa-linkedin"></i></span></a></li>
                    <li> <a href="#" class="rotate-box-1 square-icon text-center wow zoomIn" data-wow-delay="0.5s"><span class="instagram" style="border-radius: 65% !important;"><i class="fab fa-instagram"></i></span></a></li>
                    <li> <a href="#" class="rotate-box-1 square-icon text-center wow zoomIn" data-wow-delay="0.4s"><span class="youtube" style="border-radius: 50% !important;"><i class="fab fa-youtube"></i></span></a></li>
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
                        <h2 class="contact">{{__('website.Contact')}}</h2>
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
                                <h4 class="contact">{{__('website.our_address')}}</h4>
                                <ul class="contact-address">
                                    <li><i class="fa fa-map-marker fa-lg"></i>&nbsp; {{__('website.address_no')}}<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{__('website.address_ward')}}<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{__('website.address_cc')}}</li>
                                    <li><i class="fa fa-phone"></i>&nbsp; +959 898876787</li>
                                    <li><i class="fa fa-envelope"></i> info@htut.com</li>
                                </ul>
                            </div>
                        </div>
                    
                        <div class="col-sm-6">
                            <div class="contact-form">
                                <h4 class="contact">{{__('website.write_to_us')}}</h4>
                                <form role="form">
                                    <div class="form-group">
                                        <input type="text" class="form-control input-lg" placeholder="{{__('website.contact_name') }}" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control input-lg" placeholder="{{__('website.contact_email') }}" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control input-lg" placeholder="{{__('website.contact_subject') }}" required>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control input-lg" rows="5" placeholder="{{__('website.contact_message') }}" required></textarea>
                                    </div>
                                    <button type="submit" class="btn wow bounceInRight contact-btn" data-wow-delay="0.8s">{{__('website.contact_send') }}</button>
                                </form>
                            </div>	
                        </div>
                                                                            
                    </div> <!-- /.row -->
                    <!-- <div class="col-md-12">
                        <p class="copyright text-center" style="padding-top: 15px !important;">Copyright &copy; 2021 <a href="https://www.behance.net/poljakova" class="theme-author">Htut Media</a></p>
                    </div> -->
                </div> <!-- /.container -->
            </div>
        </section>
        <div class="col-md-12" style="height: 80px;">
            <p class="copyright text-center" style="padding-top: 35px !important;">Copyright &copy; 2021 <a href="https://www.behance.net/poljakova" class="theme-author">Htut Media</a></p>
        </div>
        <!-- End contact section -->
@section('script')
<script>
  
</script>
@endsection
@endsection