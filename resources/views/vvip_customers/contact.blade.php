@extends('layouts.frontview')

@section('content')

<section id="contact-section" class="page text-white parallax contact-parallax" data-stellar-background-ratio="0.5" style="background-image: url(../images/map-bg.jpg); margin-top: 60px;">
            <div class="cover"></div>
        
             <!-- Begin page header-->
            <div class="page-header-wrapper">
                <div class="container">
                    <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                        <h2 class="contact contact_margin">{{ __('website.Contact') }}</h2>
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
                                <h4 class="contact">{{ __('website.our_address') }}</h4>
                                <ul class="contact-address">
                                    <li><i class="fa fa-map-marker fa-lg"></i>&nbsp; {{ __('website.address_no') }} <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{__('website.address_ward') }},<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{__('website.address_cc')}}</li>
                                    <li><i class="fa fa-phone"></i>&nbsp; +959 898876787</li>
                                    <li><i class="fa fa-envelope"></i> info@htut.com</li>
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
                                        <textarea  name="message" id="m_name" class="form-control input-lg" rows="5" placeholder="{{__('website.contact_message') }}" required></textarea>
                                    </div>
                                    <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}">
                                    <button type="button" id="contact_btn" class="btn wow bounceInRight contact-btn" data-wow-delay="0.8s">{{__('website.contact_send') }}</button>
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

        <div class="modal fade deep" id="submit_contact" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <div class="modal-header" style="border-bottom: none !important;">
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

@section('script')
<script>
    $('#contact_button').on('click', function(e){ 
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
            },
            // error:function(response){
            //     console.log(response);
            // } 
            });  
        });
</script>
@endsection
@endsection