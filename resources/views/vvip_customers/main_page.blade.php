@extends('layouts.frontview')

@section('content')
<!-- Begin text carousel intro section -->
        <section id="text-carousel-intro-section" class="parallax intro-parallax">
                <div class="container">
                    <div class="caption text-center text-white">
                        <div id="owl-intro-text" class="owl-carousel">
                            <div class="item">
                                <h1 class="logo-text">VVIP NINE</h1>
                                <video height="250" class="text-center d-flex justify-content-center" id="video_one" loop autoplay muted>
                                    <source src="../images/$NOT - Whipski ft. Lil Skies (Directed by Cole Bennett).mp4" type="video/mp4" id="video_one">
                                    <source src="../images/$NOT - Whipski ft. Lil Skies (Directed by Cole Bennett).mp4" type="video/ogg" id="video_one">
                                </video>
                                <p>{{__('website.Everything')}}</p>
                                <div class="extra-space-l"></div>
                                <a class="btn btn-blank page-scroll navbarbtn" href="#services-section" role="button">{{__('website.Register')}}</a>
                                <!-- <a class="btn btn-blank page-scroll navbarbtn" href="#prices-section" role="button">{{__('website.Buy')}}</a> -->
                            </div>
                            <div class="item">
                                <h1 class="logo-text">VVIP NINE</h1>
                                <video height="250" class="text-center d-flex justify-content-center" id="video_one" loop autoplay muted>
                                    <source src="../images/$NOT - Whipski ft. Lil Skies (Directed by Cole Bennett).mp4" type="video/mp4" id="video_one">
                                    <source src="../images/$NOT - Whipski ft. Lil Skies (Directed by Cole Bennett).mp4" type="video/ogg" id="video_one">
                                </video>
                                <!-- <video width="500" height="250" id="video_one" loop autoplay muted>
                                    <source src="../images/VVIP 9 Still 6 sec.mp4" type="video/mp4" id="video_one">
                                    <source src="../images/VVIP 9 Still 6 sec.mp4" type="video/ogg" id="video_one">
                                </video> -->
                                <p>To the greatest Journey</p>
                            </div>
                            <div class="item">
                                <h1 class="logo-text">VVIP NINE</h1>
                                <video height="250" class="text-center d-flex justify-content-center" id="video_one" loop autoplay muted>
                                    <source src="../images/$NOT - Whipski ft. Lil Skies (Directed by Cole Bennett).mp4" type="video/mp4" id="video_one">
                                    <source src="../images/$NOT - Whipski ft. Lil Skies (Directed by Cole Bennett).mp4" type="video/ogg" id="video_one">
                                </video>
                                <!-- <video width="500" height="250" id="video_one" loop autoplay muted>
                                    <source src="../images/VVIP 9 Still 6 sec.mp4" type="video/mp4" id="video_one">
                                    <source src="../images/VVIP 9 Still 6 sec.mp4" type="video/ogg" id="video_one">
                                </video> -->
                                <p>To the greatest Journey</p>
                            </div>
                        </div>
                    </div> <!-- /.caption -->
                </div>
        </section>
        <!-- End text carousel intro section -->


        <!-- Begin Services -->
        <!-- <section id="services-section" class="page text-center">
            <div class="d-flex justify-content-center">
                <div class="col-md-6">
                    <img src="https://www.pngkey.com/png/full/390-3907448_free-download-emv-card-png-clipart-emv-smart.png" alt="" width="300" height="350">
                </div>
                <div class="col-md-6" id="text_section_product">
                    <h2 class="service">{{__('website.Products')}}</h2>
                    <div class="devider"></div>
                    <p class="subtitle" style="margin-top: 20px !important;">Something Here</p>
                     <a class="btn btn-default btn-lg-xl page-scroll"  style="margin-top: 20px;" href="/product" role="button">{{__('website.more')}}</a>
                </div>
            </div>
        </section> -->

        <!-- Begin counter up -->
        <!-- <section id="counter-section" style="margin-top: 10px !important; height: 900px;"> -->
            <div id="background-wrap" style="height: 1000px;">
                <div class="bubble x1"></div>
                <div class="bubble x2"></div>
                <div class="bubble x3"></div>
                <div class="bubble x4"></div>
                <div class="bubble x5"></div>
                <div class="bubble x6"></div>
                <div class="bubble x7"></div>
                <div class="bubble x8"></div>
                <div class="bubble x9"></div>
                <div class="bubble x10"></div>
            </div>
        <!-- </section> -->
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
                                    <img src="../images/What-VVIP.png" alt="" width="300" height="350">
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
                                    <img src="../images/What-Smart-Card.png" alt="" width="300" height="350">
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
                                    <img src="../images/Useful-VVIP9.png" alt="" width="300" height="350">
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
                                <!-- <form role="form" id="submit-contact-form" method="POST"> -->
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
                                <!-- </form> -->
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

        <div class="modal fade deep" id="submit_contact" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <div class="modal-header" style="border-bottom: none !important;">
                    <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
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
        <!-- End contact section -->
@section('script')
<script type="text/javascript">
    // $(document).ready(function(){
    //     function getCookie(c_name) {
    //     if(document.cookie.length > 0) {
    //         c_start = document.cookie.indexOf(c_name + "=");
    //         if(c_start != -1) {
    //             c_start = c_start + c_name.length + 1;
    //             c_end = document.cookie.indexOf(";", c_start);
    //             if(c_end == -1) c_end = document.cookie.length;
    //             return unescape(document.cookie.substring(c_start,c_end));
    //         }
    //     }
    //     return "";
    // }

    $('#contact_btn').on('click', function(e){ 
        e.preventDefault();
        // var contact_url =  `{{ url('http://admin.vvip9.co/api/contact_info') }}`;
        var token =  $('#token').val();
        // let formData = new FormData(this);
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
            },
            // error:function(response){
            //     console.log(response);
            // } 
            });  
        });
    // });
</script>
@endsection
@endsection
