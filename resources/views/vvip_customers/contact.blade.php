@extends('layouts.frontview')

@section('content')

<section id="contact-section" class="page text-white parallax contact-parallax" data-stellar-background-ratio="0.5" style="background-image: url(../images/map-bg.jpg); margin-top: 60px;">
            <div class="cover"></div>
        
             <!-- Begin page header-->
            <div class="page-header-wrapper">
                <div class="container">
                    <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                        <h2 class="contact contact_margin">Contacts</h2>
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
                                    <li><i class="fa fa-map-marker fa-lg"></i>&nbsp; No.8 Moe Ma Kha (1) Street,<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ma Li Kha Housing,Thingangyun Tsp,<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Yangon ,Myanmar</li>
                                    <li><i class="fa fa-phone"></i>&nbsp; +959 898876787</li>
                                    <li><i class="fa fa-envelope"></i> info@htut.com</li>
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
        <div class="mapouter">
            <div class="gmap_canvas">
                <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Htut%20Media&t=k&z=19&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                <a href="https://www.embedgooglemap.net">how to copy google map</a>
            </div>
        </div>   

        <div class="col-md-12" style="height: 80px;">
            <p class="copyright text-center" style="padding-top: 35px !important;">Copyright &copy; 2021 <a href="https://www.behance.net/poljakova" class="theme-author">Htut Media</a></p>
        </div>
@endsection