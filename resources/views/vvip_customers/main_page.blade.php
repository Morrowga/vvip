@extends('layouts.frontview')

@section('content')
    <section id="text-carousel-intro-section" class="parallax intro-parallax">
        <div class="container">
            <div class="caption text-center text-white">
                <div id="owl-intro-text" class="owl-carousel">
                    <div class="item">
                    <!-- <h1 class="logo-text">VVIP NINE</h1> -->
                        <video loop autoplay muted height="250" class="text-center" id="video_one"  src="../images/VVIP 9 Second video (7 sec).mp4"  type="video/mp4" playsinline></video>
                        <!-- <p class="main_text" id="every">{{__('website.Everything')}}</p> -->
                        <!-- <div class="extra-space-l" id="bgblack"></div> -->
                        <a class="btn-blank page-scroll navbarbtn" id="register_main_page" href="#services-section" role="button"><i class="fas fa-shopping-cart" style="padding-right: 4px;"></i>{{__('website.Register')}}</a>
                    </div>
                    <div class="item">
                        <video loop autoplay muted height="250" class="text-center" id="video_one"  src="../images/VVIP 9 Second video (7 sec).mp4"  type="video/mp4" playsinline></video>
                        <!-- <p id="bgblack">{{__('website.Everything')}}</p> -->
                        <!-- <div class="extra-space-l" id="bgblack"></div> -->
                        <a class="btn-blank page-scroll navbarbtn" id="register_main_page" href="#services-section" role="button"><i class="fas fa-shopping-cart" style="padding-right: 4px;"></i>{{__('website.Register')}}</a>
                    </div>
                    <div class="item">
                        <video loop autoplay muted height="250" class="text-center" id="video_one"  src="../images/VVIP 9 Second video (7 sec).mp4"  type="video/mp4" playsinline></video>
                        <!-- <p id="bgblack">{{__('website.Everything')}}</p> -->
                        <div class="extra-space-l" id="bgblack"></div>
                        <a class="btn-blank page-scroll navbarbtn" id="register_main_page" href="#services-section" role="button"><i class="fas fa-shopping-cart" style="padding-right: 4px;"></i>{{__('website.Register')}}</a>
                    </div>
                </div>
            </div> 
        </div>
        <!--===========================================Video-Slider========================================================-->
    </section>
        <!--===========================================Intro_section========================================================-->

    <section id="about-section" class="page bg-style1 about_ios">
        <div class="page-header-wrapper">
            <div class="container">
                <div class="page-header text-center wow fadeInUp" data-wow-delay="0.3s">
                    <h2 class="about">{{__('website.About')}}</h2>
                    <div class="devider"></div>
                </div>
            </div>
        </div>

        <div class="rotate-box-1-wrapper">
            <div class="container about_container">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <a href="#" class="rotate-box-1 square-icon wow zoomIn" data-wow-delay="0">
                            <span class="rotate-box-icon"><i class="fas fa-question about-icon"></i></span>
                            <div class="rotate-box-info">
                                <h4 class="about-text" id="head_about_text">{{__('website.whatisvvip')}}</h4>
                                <img src="../images/What-VVIP.png" class="aboutimg" alt="" width="300" height="400">
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
                                <img src="../images/What-Smart-Card.png" class="aboutimg" alt="" width="300" height="400">
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
                                <img src="../images/Useful-VVIP9.png" class="aboutimg" alt="" width="300" height="400">
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
                </div>
            </div> <!-- /.container -->

        </div>
        <div class="extra-space-l"></div>
    </section>
    <!--===========================================about-section========================================================-->

    <section id="social-section">
        <div class="page-header-wrapper">
            <div class="container">
                <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                    <h2 class="social">{{__('website.join_us')}}</h2>
                    <div class="devider"></div>
                    <p class="subtitle">{{ __('website.follow') }}</p>
                </div>
            </div>
        </div>

        <div class="container">
            <ul class="social-list">
                <li class="fb join-social"><a href="#" class="text-center wow zoomIn" data-wow-delay="0.3s"><i class="fab fa-facebook"></i></a></li>
                <li class="linkedin join-social"><a href="#" class="text-center wow zoomIn " data-wow-delay="0.4s"><i class="fab fa-linkedin"></i></li>
                <li class="instagram join-social"><a href="#" class="text-center wow zoomIn" data-wow-delay="0.5s"><i class="fab fa-instagram"></i></a></li>
                <li class="youtube join-social"><a href="#" class="text-center wow zoomIn" data-wow-delay="0.4s"><i class="fab fa-youtube"></i></a></li>
            </ul>
        </div>

    </section>
    <!--===========================================social-section========================================================-->
    <section id="share-section">

        <div class="page-header-wrapper">
            <div class="container">
                <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                    <h2 class="social">{{__('website.share_us')}}</h2>
                    <div class="devider"></div>
                </div>
            </div>
        </div>

        <div class="container">
            <ul class="social-list">
                <li class="fb join-social"><a href="#" class="text-center wow zoomIn" data-wow-delay="0.3s"><i class="fab fa-facebook"></i></a></li>
                <li class="linkedin join-social"><a href="#" class="text-center wow zoomIn " data-wow-delay="0.4s"><i class="fab fa-linkedin"></i></li>
                <li class="instagram join-social"><a href="#" class="text-center wow zoomIn" data-wow-delay="0.5s"><i class="fab fa-instagram"></i></a></li>
                <li class="youtube join-social"><a href="#" class="text-center wow zoomIn" data-wow-delay="0.4s"><i class="fab fa-youtube"></i></a></li>
            </ul>
        </div>

    </section>
    <!--===========================================share-section========================================================-->

    <section id="contact-section" class="page text-white parallax contact-parallax" data-stellar-background-ratio="0.5" style="background-image: url(../images/map-bg.jpg); margin-top: 30px;">
        <div class="cover"></div>

        <div class="page-header-wrapper">
            <div class="container">
                <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                    <h2 class="contact">{{__('website.Contact')}}</h2>
                    <div class="devider"></div>
                    <p class="subtitle">All to contact us</p>
                </div>
            </div>
        </div>

        <div class="contact wow bounceInRight" data-wow-delay="0.4s">
            <div class="container">
                <div class="row">

                    <div class="col-sm-6">
                        <div class="contact-info">
                            <h4 class="contact">{{__('website.our_address')}}</h4>
                            <ul class="contact-address">
                                <li class="con_li"><i class="fa fa-map-marker fa-lg"></i>&nbsp; {{__('website.address_no')}}<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{__('website.address_ward')}}<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{__('website.address_cc')}}</li>
                                <li class="con_li"><i class="fa fa-phone"></i>&nbsp; +959 898876787</li>
                                <li class="con_li"><i class="fa fa-envelope"></i> info@htut.com</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="contact-form">
                            <h4 class="contact">{{__('website.write_to_us')}}</h4>
                                <div class="form-group">
                                    <input type="text" name="name" id="c_name" class="form-control input-lg" placeholder="{{__('website.contact_name') }}" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" id="e_name" class="form-control input-lg" placeholder="{{__('website.contact_email') }}" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="subject" id="s_name" class="form-control input-lg" placeholder="{{__('website.contact_subject') }}" required>
                                </div>
                                <div class="form-group">
                                    <textarea name="message" id="m_name" class="form-control input-lg" rows="5" placeholder="{{__('website.contact_message') }}" required></textarea>
                                </div>
                                <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}">
                                <button class="btn wow bounceInRight contact-btn" id="contact_btn" data-wow-delay="0.8s">{{__('website.contact_send') }}</button>
                        </div>
                    </div>

                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div>
    </section>

    <!--===========================================cotnact-form========================================================-->
    <div class="col-md-12" style="height: 80px;">
        <p class="copyright text-center" style="padding-top: 35px !important;">Copyright &copy; 2021 <a href="https://www.behance.net/poljakova" class="theme-author">Htut Media</a></p>
    </div>
    <!--===========================================Copyright========================================================-->
    <div class="modal fade deep" id="submit_contact" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <!-- <div class="modal-header" style="border-bottom: none !important;">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div> -->
            <div class="modal-body text-center" style="border-top: none !important;">
                <div class="d-flex justify-content-center text-center">
                    <img class="text-center" src="../images/logo.jpeg" alt="" width="100" height="100">
                </div>
                <h3 class="text text-center mt-2" id="sub_contact"></h3>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button type="button" class="btn btn-secondary btn-block" id="ok" data-bs-dismiss="modal">Ok</button>
            </div>
            </div>
        </div>
    </div>
    <!--===========================================Contactform_message==================================================-->
@section('script')
<script type="text/javascript">
    vid = document.getElementById("video_one");
      vid.addEventListener("canplay", function() {
       setTimeout(function() {
        vid.play();
       }, 500);
    }); //video_delay

    $('#contact_btn').on('click', function(e){ 
        e.preventDefault();
        var token =  $('#token').val();
        var name = $('#c_name').val();
        var email = $('#e_name').val();
        var subject = $('#s_name').val();
        var message = $('#m_name').val();

            $.ajax({
            url: "http://admin.vvip9.co/api/contact_info",
            method:'POST',
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                name: name,
                email: email,
                subject: subject,
                message: message
            },  
            success:function(response){
                console.log(response);
                $('#sub_contact').html(`Hello <strong id="user_contact">` + response.data['name'] + `</strong>. We recieved your information. We will contact to ` + response.data['email'] + ` soon. Thanks in advanced.`);
                $('#submit_contact').modal('show');
                $('#ok').on('click', function(){
                    $('#submit_contact').modal('hide');
                });
                e.preventDefault();

                $('#ok').on('click', function(){
                    location.reload(true);
                });
            },
            // error:function(response){
            //     console.log(response);
            // } 
            });  
    }); //contact_form_ajax
</script>
@endsection
@endsection
