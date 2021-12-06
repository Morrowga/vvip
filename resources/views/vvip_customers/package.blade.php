@extends('layouts.frontview')

@section('content')
    <section id="prices-section" class="page"  style="margin-top: 65px !important;">
        <!-- Begin page header-->
        <div class="page-header-wrapper">
            <div class="container">
                <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                    <h2 class="package package_margin">{{ __('website.pricing') }}</h2>
                    <div class="devider"></div>
                    @foreach(['danger', 'warning', 'success', 'info'] as $msg)
                        @if(Session::has('alert-' . $msg))
                        <div class="col-md-12 text-center" style="background-color: #fff !important;">
                            <p class="alert alert-{{ $msg }}" id="alert_message" style="margin-top: 20px !important;">{{ Session::get('alert-' . $msg ) }} <a href="https://mail.google.com/">Mail</a> <a href="#" class="close" data-dismiss="alert" aria-label="close" >&times;</a></p>
                        </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        <!-- End page header-->

        <div class="extra-space-l"></div>

            <!-- Begin prices -->
            <div class="prices">
                <div class="container">
                    <div class="row">
                        <div class="price-box col-sm-6 col-md-4 wow" data-wow-delay="0.3s">
                            <div class="panel panel-default first-price-box">
                                <div class="panel-heading text-center">
                                    <h3 class="package">{{ $normal->package_name }}</h3>
                                    <img src="../images/Normal_001.png" id="normal_img" alt="" width="340" height="250">
                                    <h4 class="package">GOLD</h4>
                                    <h5 class="package" style="font-size: 14px !important;">{{ $normal->plan_name }}</h5>
                                </div>
                                <div class="col-md-12" style="margin-top: 10px; display:flex; justify-content: center;">
                                    <ul class="d-flex justify-content-center">
                                        <li class="package_text"><i class="fas fa-check" style="padding-right: 5px; color: rgb(217,181,81) !important;"></i>Contact</li>
                                        <li class="package_text"><i class="fas fa-check" style="padding-right: 5px; color: rgb(217,181,81) !important;"></i>Link Tree</li>
                                        <li class="package_text"><i class="fas fa-check" style="padding-right: 5px; color: rgb(217,181,81) !important;"></i>Deep Link</li>
                                        <li class="package_text"><i class="fas fa-check" style="padding-right: 5px; color: rgb(217,181,81) !important;"></i>URL</li>
                                        <li class="package_text"><i class="fas fa-check" style="padding-right: 5px; color: rgb(217,181,81) !important;"></i>Call</li>
                                        <li class="package_text"><i class="fas fa-check" style="padding-right: 5px; color: rgb(217,181,81) !important;"></i>10 Card Template</li>
                                    </ul>                                    
                                </div>
                                <!-- <div class="panel-body text-center">
                                    <p class="lead"><strong>{{ $normal->price }}</strong></p>
                                </div> -->
                                <div class="panel-footer text-center">
                                    <a href="/feature" class="btn btn-dark moreinfo_package">{{ __('website.more_info') }}</a>
                                    <button type="button" id="{{ $normal->id }}" class="btn btn-default price-btn-one" onclick="packageClick(event)" value="{{ $normal->token }}">{{ $normal->price }}, {{ __('website.order_now') }}</button>
                                </div>
                            </div>										
                        </div>
                        
                        <div class="price-box col-sm-6 col-md-4 wow ml-3" data-wow-delay="0.7s">
                            <div class="panel panel-default">
                                <div class="panel-heading text-center">
                                    <h3 class="package">{{ $standard->package_name }}</h3>
                                    <img src="../images/Standard_001.png" id="standard_img" alt="" width="300" height="250">
                                    <h4 class="package">DIAMOND</h4>
                                    <h5 class="package" style="font-size: 14px !important;">{{ $standard->plan_name }}</h5>
                                </div>
                                <div class="col-md-12" style="margin-top: 10px; display:flex; justify-content: center;">
                                    <ul class="d-flex justify-content-center">
                                        <li class="package_text"><i class="fas fa-check" style="padding-right: 5px; color: rgb(217,181,81) !important;"></i>Contact</li>
                                        <li class="package_text"><i class="fas fa-check" style="padding-right: 5px; color: rgb(217,181,81) !important;"></i>Link Tree</li>
                                        <li class="package_text"><i class="fas fa-check" style="padding-right: 5px; color: rgb(217,181,81) !important;"></i>Deep Link</li>
                                        <li class="package_text"><i class="fas fa-check" style="padding-right: 5px; color: rgb(217,181,81) !important;"></i>Email</li>
                                        <li class="package_text"><i class="fas fa-check" style="padding-right: 5px; color: rgb(217,181,81) !important;"></i>Contact &  Social</li>
                                        <li class="package_text"><i class="fas fa-check" style="padding-right: 5px; color: rgb(217,181,81) !important;"></i>SMS</li>
                                        <li class="package_text"><i class="fas fa-check" style="padding-right: 5px; color: rgb(217,181,81) !important;"></i>Event</li>
                                        <li class="package_text"><i class="fas fa-check" style="padding-right: 5px; color: rgb(217,181,81) !important;"></i>Bank/ Pay Info</li>
                                        <li class="package_text"><i class="fas fa-check" style="padding-right: 5px; color: rgb(217,181,81) !important;"></i>URL</li>
                                        <li class="package_text"><i class="fas fa-check" style="padding-right: 5px; color: rgb(217,181,81) !important;"></i>Call</li>
                                        <li class="package_text"><i class="fas fa-check" style="padding-right: 5px; color: rgb(217,181,81) !important;"></i>30 Card Template</li>
                                    </ul>                                    
                                </div>
                                <div class="panel-footer text-center">
                                    <a href="/feature" class="btn btn-dark moreinfo_package">{{ __('website.more_info') }}</a>
                                    <button type="button" id="{{ $standard->id }}" class="btn btn-default price-btn-one" onclick="packageClick(event)" value="{{ $standard->token }}">{{ $standard->price }}, {{ __('website.order_now') }}</button>
                                </div>
                            </div>										
                        </div>
                        
                        <div class="price-box col-sm-6 col-md-4 wow ml-3" data-wow-delay="0.9s">
                            <div class="panel panel-default">
                                <div class="panel-heading text-center">
                                    <h3 class="package">{{ $luxury->package_name }}</h3>
                                    <img src="../images/Luxury_001.png" alt="" id="luxury_img" width="300" height="250">
                                    <h3 class="package">RUBY</h3>
                                    <h5 class="package" style="font-size: 14px !important;">{{ $luxury->plan_name }}</h5>
                                </div>         
                                <div class="col-md-12" style="margin-top: 10px; display:flex; justify-content: center;">
                                    <ul class="d-flex justify-content-center">
                                        <li class="package_text"><i class="fas fa-check" style="padding-right: 5px; color: rgb(217,181,81) !important;"></i>Contact</li>
                                        <li class="package_text"><i class="fas fa-check" style="padding-right: 5px; color: rgb(217,181,81) !important;"></i>Link Tree</li>
                                        <li class="package_text"><i class="fas fa-check" style="padding-right: 5px; color: rgb(217,181,81) !important;"></i>Deep Link</li>
                                        <li class="package_text"><i class="fas fa-check" style="padding-right: 5px; color: rgb(217,181,81) !important;"></i>Email</li>
                                        <li class="package_text"><i class="fas fa-check" style="padding-right: 5px; color: rgb(217,181,81) !important;"></i>Contact &  Social</li>
                                        <li class="package_text"><i class="fas fa-check" style="padding-right: 5px; color: rgb(217,181,81) !important;"></i>SMS</li>
                                        <li class="package_text"><i class="fas fa-check" style="padding-right: 5px; color: rgb(217,181,81) !important;"></i>Event</li>
                                        <li class="package_text"><i class="fas fa-check" style="padding-right: 5px; color: rgb(217,181,81) !important;"></i>Personal Assistance</li>
                                        <li class="package_text"><i class="fas fa-check" style="padding-right: 5px; color: rgb(217,181,81) !important;"></i>Metal Card</li>
                                        <li class="package_text"><i class="fas fa-check" style="padding-right: 5px; color: rgb(217,181,81) !important;"></i>Bank/ Pay Info</li>
                                        <li class="package_text"><i class="fas fa-check" style="padding-right: 5px; color: rgb(217,181,81) !important;"></i>URL</li>
                                        <li class="package_text"><i class="fas fa-check" style="padding-right: 5px; color: rgb(217,181,81) !important;"></i>Call</li>
                                        <li class="package_text"><i class="fas fa-check" style="padding-right: 5px; color: rgb(217,181,81) !important;"></i>30 Card Template</li>
                                    </ul>                                    
                                </div>                    
                                <div class="panel-footer text-center">
                                    <a href="/feature" class="btn btn-dark moreinfo_package">{{ __('website.more_info') }}</a>
                                    <button type="button" id="{{ $luxury->id }}" class="btn btn-default price-btn-one" onclick="packageClick(event)" value="{{ $luxury->token }}">{{ $luxury->price }}, {{ __('website.order_now') }}</button>
                                </div>
                            </div>										
                        </div>
                    </div> <!-- /.row -->
                </div> <!-- /.container -->
            </div>
            <!-- End prices -->
            <div class="extra-space-l"></div>
    </section>


    <section id="prices-section-save" class="page"  style="margin-top: 90px !important; display:none;">
        <div class="extra-space-l"></div>

        <div class="prices">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-md-12">
                        <div class="d-flex justify-content-center">
                            <img src="../images/logo.jpeg" alt="" class="register_image">
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4 col-md-offset-4">
                                <input id="save-name" type="text" placeholder="{{ __('website.enter_name') }}"
                                    class="form-control register-input" name="name" style="font-size: 17px;"
                                    value="{{ old('name') }}" required autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-4 col-md-offset-4">
                                <p id="error_text" style="padding: 5px; color: rgb(184, 28, 41);"></p>
                                <input id="save-phone" type="number"
                                    class="form-control register-input" placeholder="{{ __('website.enter_phone') }}" name="phone_number" style="font-size: 17px; margin-top: 5px !important;"
                                    value="{{ old('phone_number') }}" required autocomplete="phone_number">
                            </div>
                        </div>
                        <div class="form-group mt-5">
                            <div class="col-md-4 col-md-offset-4">
                                <button class="btn btn-dark save-user">{{ __('website.next') }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="prices-section-two" class="page"  style="margin-top: 50px !important; display: none;">
        <div class="extra-space-l"></div>

        <div class="prices">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                        <!-- <div class="col-md-4"></div> -->
                        <div class="col-md-12">
                            <form action="{{ route('register') }}"  id="register-form" method="POST" class="contact-form text-center">
                                @csrf   
                                <div class="form-section">
                                    <div class="d-flex justify-content-center">
                                        <img src="../images/logo.jpeg" alt="" class="register_image">
                                    </div> 
                                    <div class="col-md-8 col-md-offset-2">
                                        <h3 class="payment-text">{{ __('website.payment') }}</h3>
                                        <div class="devider"></div>
                                        <div class="form-group row pay-border">
                                            <div class="col-md-3" style="margin-top: 10px !important;">
                                                <img src="https://is4-ssl.mzstatic.com/image/thumb/Purple114/v4/7e/a2/79/7ea2799e-feae-79ec-1fd6-b9f20cb1ed34/source/512x512bb.jpg" style="margin-left: 15px !important;" class="payment" alt="" width="170" height="150">
                                            </div>
                                            <div class="col-md-3"  style="margin-top: 10px !important;">
                                                <img src="https://pbs.twimg.com/profile_images/1041604335543627776/REZJdo09_400x400.jpg"  style="margin-left: 15px !important;" class="payment" width="170" height="150" alt="">
                                            </div>
                                            <div class="col-md-3"  style="margin-top: 10px !important;">
                                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJIGpWUpbBiv0ms_OSlbsr0PWx1Ep6RCJmYfVvjq_R1hjG0n7hLd3P4WdBytwD16gSSmE&usqp=CAU"  style="margin-left: 15px !important;" class="payment" width="170" height="150" alt="">
                                            </div>
                                            <div class="col-md-3"  style="margin-top: 10px !important;">
                                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQtWYCKM4fAMo9zl4kFRNcRE_aW5Mw79xJZoTZbSaPxdJruHcR28dKo_4HwxrS_gPlRFcg&usqp=CAU"  style="margin-left: 15px !important;" class="payment" width="160" height="150" alt="">
                                            </div>
                                            <input type="text" name="package" id="package_name" hidden>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-section">
                                    <div class="d-flex justify-content-center">
                                        <img src="../images/logo.jpeg" alt="" class="register_image">
                                    </div> 
                                    <div class="form-group row">
                                        <div class="col-md-4 col-md-offset-4">
                                            <span id="error_name" class="error_texts" role="alert">{{ __('website.enter_name') }}</span>
                                            <input id="name" type="text" placeholder="{{ __('website.enter_name') }}"
                                                class="form-control register-input" name="name" style="font-size: 17px; margin-top: 5px !important;" required autocomplete="name" autofocus>
                                        </div>
                                    </div>

                                    <div class="form-group row mt-5">
                                        <div class="col-md-4 col-md-offset-4">
                                            <span id="error_phone" class="error_texts" role="alert"></span>
                                            <input id="phone" type="tel"
                                                class="form-control register-input"  placeholder="{{ __('website.enter_phone') }}" name="phone_number" style="font-size: 17px; margin-top: 5px !important;"
                                                 required autocomplete="phone_number">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-4 col-md-offset-4">
                                            <span id="error_email" class="error_texts" role="alert"></span>
                                            <input id="email" type="email" placeholder="{{ __('website.email') }}"
                                                class="form-control register-input" name="email" style="font-size: 17px; margin-top: 5px !important;"
                                                required autocomplete="email">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-md-offset-4 hr" style="margin-top: 15px !important;">
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-4 col-md-offset-4" style="margin-top: 5px !important;">
                                        <div class="d-flex justify-content-center" style="display:flex; text-align:left !important;">
                                             <p class="url_text text-left">{{ __('website.url') }}</p>
                                            <button style="margin-left: 5px !important;" type="button" class="btn btn-light span_question" data-toggle="popover" title="{{ __('website.url_popover_title') }}" data-content="{{ __('website.url_popover_body') }}"><i class="fas fa-question"></i></button>
                                        </div>
                                            <div class="row" style="margin-top: 15px !important;">
                                                <div class="col-md-6 url">
                                                    <input type="radio" name="url_radio" onchange="getCheckedName()" value="" id="url_name" checked>
                                                    <label for="html" class="own_url">{{ __('website.name_url') }}</label><br>
                                                </div>
                                                <div class="col-md-6 url">
                                                    <input type="radio" name="url_radio" onchange="getCheckedSystem()" value="" id="url_system">
                                                    <label for="css">{{ __('website.system_url') }}</label><br>
                                                </div>
                                            </div>  
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-4 col-md-offset-4" style="margin-top: 20px !important;">
                                            <span id="error_url" class="error_texts" role="alert"></span>
                                            <input type="text" value="1" id="total_input" hidden>
                                            <div class="row" style="display: flex; justify-content: center;">
                                                <div class="col url vvip_link">
                                                    <p class="vvip_text">https://vvip9.co/</p>
                                                </div>
                                                <div class="col">
                                                    <input type="text" id="url" class="form-control url_input" name="url" placeholder="{{ __('website.enter_url') }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-md-offset-4 hr_bottom mt-2" style="margin-top: 30px !important;">
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-4 col-md-offset-4" style="margin-top: 5px !important;">
                                            <div class="d-flex justify-content-center" style="display:flex; text-align:left !important;">
                                                <p class="pt-2 url_text">{{ __('website.secure') }}</p>
                                                <button style="margin-left: 5px !important;" type="button" class="btn btn-light span_question" data-toggle="popover" title="{{ __('website.secure_popover_title') }}" data-content="{{ __('website.secure_popover_body') }}"><i class="fas fa-question"></i></button>
                                            </div>
                                            <div class="row" style="margin-top: 15px !important;">
                                                <div class="col-md-6 url">
                                                    <input type="radio" name="secure_status" value="private">
                                                    <label for="html">Private</label><br>
                                                </div>
                                                <div class="col-md-6 url">
                                                    <input type="radio" name="secure_status" value="public" checked>
                                                    <label for="css">Public</label><br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-section">
                                    <div class="d-flex justify-content-center">
                                        <img src="../images/logo.jpeg" alt="" class="register_image">
                                    </div> 
                                    <div class="form-group">
                                        <div class="row d-flex justify-content-center" id="column-image">
                                        </div>
                                    </div>
                                </div>       
                                <div class="form-section">
                                    <div class="form-group">
                                        <div class="col-md-10 col-md-offset-1"  style="margin-top: 15px !important;">
                                            <div class="row">
                                                <div class="col-md-6 text-center">
                                                    <div id="bg_div">
                                                    <h3 class="text">{{ __('website.background_color') }}</h3>
                                                        <input type="color" class="form-control text-center" id="background_color">
                                                    </div>
                                                    <div id="text_div">
                                                        <h3 class="text text-margin">{{ __('website.text_color') }}</h3>
                                                        <input type="color" class="form-control" id="text_color">
                                                        <p id="catch_click" hidden></p>
                                                    </div>
                                                    <div class="col-md-12" style="margin-top: 20px;">
                                                        <p class="text" style="font-size: 20px !important;">{{ __('website.icon_up') }}</p>
                                                        <button type="button" id="upload_logo" class="btn btn-dark btn-place btn-block"><i class="fas fa-camera-retro custom-case"></i>{{ __('website.upload_logo') }}</button>
                                                    </div>
                                                    <div class="col-md-12 mt-2">
                                                        <p class="text"  style="font-size: 20px !important; margin-top: 15px;">{{ __('website.editname') }}</p>
                                                        <button type="button" id="editName" class="btn btn-dark btn-place btn-block"><i class="fas fa-pen-nib custom-case"></i>{{ __('website.edit_name') }}</button>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <p class="text"  style="font-size: 21px !important; margin-top: 15px">{{ __('website.description') }}</p>
                                                        <button type="button"  id="editDescription" class="btn btn-dark btn-place btn-block"><i class="fas fa-font custo"></i>{{ __('website.edit_descript') }}</button>                    
                                                    </div>
                                                    <div class="col-md-12 mt-2">
                                                        <p class="text"  style="font-size: 20px !important; margin-top: 15px;">{{ __('website.position') }}</p>
                                                        <button type="button" id="front_move_left" class="btn btn-dark btn-place position_place"><i class="fas fa-caret-left position-icon"></i>{{ __('website.left') }}</button>
                                                        <button type="button" id="front_move_center" class="btn btn-dark btn-place position_place"><i class="fas fa-arrows-alt"></i>{{ __('website.center') }}</button>
                                                        <button type="button" id="front_move_right" class="btn btn-dark btn-place position_place">{{ __('website.right') }}<i class="fas fa-caret-right position-icon"></i></button>   
                                                    </div>
                                                    <div class="col-md-12 mt-3" id="qr_div">
                                                        <p class="text" style="font-size: 20px !important; margin-top:15px;">{{ __('website.qr_scan') }}</p>
                                                        <button type="button" id="move_left" class="btn btn-dark btn-place position_place"><i class="fas fa-caret-left position-icon"></i>{{ __('website.left') }}</button>
                                                        <button type="button" id="move_center" class="btn btn-dark btn-place position_place"><i class="fas fa-arrows-alt"></i>{{ __('website.center') }}</button>
                                                        <button type="button" id="move_right" class="btn btn-dark btn-place position_place">{{ __('website.right') }}<i class="fas fa-caret-right position-icon"></i></button>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 text-center custom_card" id="bl_front">
                                                    <div id="card_blank_front" style="text-align:center;">
                                                        <img  alt="" id="card_front">
                                                        <img src="../images/logo.jpeg" id="logo_view" alt="" width="70" height="70">
                                                        <p class="front_card_name text-center"></p>
                                                        <p class="card_description text-center">{{ __('website.your_de') }}</p>
                                                    </div>
                                                    <div id="card_blank_back">
                                                        <img  id="card_back" alt="" height="250">
                                                        <img  id="qr_scan" alt="" width="70" height="70">
                                                    </div>
                                                    <input type="text" id="card_design_id" name="smart_card_design_id" hidden>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>      
                                <div class="form-section" id="pin_section">
                                    <div class="d-flex justify-content-center">
                                        <img src="../images/logo.jpeg" alt="" class="register_image">
                                        <h3 class="text"  style="margin-top: 20px !important;">{{ __('website.create_login_pin') }}</h3>
                                    </div> 
                                    <div class="form-group row" style="margin-top: 10px;">
                                        <div class="col-md-4 col-md-offset-4">
                                            <input id="password" type="password" placeholder="{{ __('website.new_pin') }}" pattern="[0-9]+" class="form-control @error('password') is-invalid @enderror web_pin" name="pin" required autocomplete="new-password">
                                            <p class="text pass_allow" style="margin-top: 10px !important;">{{ __('website.pass_allow') }}</p>
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-4 col-md-offset-4">
                                            <input id="password-confirm" pattern="[0-9]+" type="password" placeholder="{{ __('website.confirm_pin') }}" class="form-control web_pin" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-navigation col-md-6 col-md-offset-3" style="margin-top: 25px !important;">
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <button type="button" class="next btn btn-info">{{ __('website.next') }}</button>
                                            <button type="button" class="previous btn btn-info">{{ __('website.pre') }}</button>
                                            <button type="submit" class="btn btn-info float-right sub-btn" disabled>{{ __('website.submit_register') }}</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    <div class="col-md-12" style="height: 80px;">
        <p class="copyright text-center" style="padding-top: 15px !important;">Copyright &copy; 2021 <a href="https://htut.com" class="theme-author">Htut Media</a></p>
    </div>
    

    <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-vertical-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row" style="margin-top: 60px !important;">
                        <div class="col-md-6 text-center">
                            <img src="" id="front_img" alt="" with="400" height="400">
                        </div>
                        <div class="col-md-6 text-center">
                            <img src="" id="back_img" alt="" with="400" height="400">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="cancel" data-dismiss="modal">{{ __('website.close') }}</button>
                    <!-- <button type="button" class="btn btn-primary" id="select_card">Select Card</button> -->
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade bd-example-modal-lg" id="logoModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-vertical-centered">
            <div class="modal-content" style="background-color: #fff !important;">
                <div class="modal-body" style="background-color: #fff !important;">
                    <div class="col-md-12" style="margin-top: 60px !important;">
                        <h4 class="upload_logo_text text-center mt-3">{{ __('website.icon_up') }}</h4>
                        <label class="btn btn-dark btn-block" id="up_load_btn"> 
                            <input type="file" class="uploadLogo" accept="image/*">
                            {{ __('website.select_logo') }}
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-secondary" id="cancel" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Select Card</button> -->
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bd-example-modal-lg" id="nameTextModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-vertical-centered">
            <div class="modal-content" style="background-color: #fff !important;">
                <div class="modal-body" style="background-color: #fff !important;">
                    <div class="col-md-12" style="margin-top: 60px !important;">
                        <h4 class="upload_logo_text text-center mt-3">{{ __('website.editname') }}</h4>
                        <input type="text" class="form-control btn-block edit_name" placeholder="{{ __('website.enter_card_name') }}">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary mt-2" id="cancel" data-dismiss="modal">Close</button>
                    <!-- <button type="button" class="btn btn-primary">Select Card</button> -->
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bd-example-modal-lg" id="descriptionTextModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-vertical-centered">
            <div class="modal-content" style="background-color: #fff !important;">
                <div class="modal-body" style="background-color: #fff !important;">
                    <div class="col-md-12" style="margin-top: 60px !important;">
                        <h4 class="upload_logo_text text-center mt-3">{{ __('website.description') }}</h4>
                        <textarea type="text" rows="3" class="form-control btn-block edit_description" placeholder="{{ __('website.enter_card_description') }}"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary mt-2" id="cancel" data-dismiss="modal">Close</button>
                    <!-- <button type="button" class="btn btn-primary">Select Card</button> -->
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade bd-example-modal-lg" id="confirm_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-vertical-centered">
            <div class="modal-content" style="background-color: #fff !important;">
                <div class="modal-body  text-center" style="background-color: rgb(255,255,255,0.5) !important;">
                    <i class="fas fa-exclamation-triangle fa-7x" style="margin-top: 65px !important;"></i>
                    <p class="sure" style="font-size: 20px !important; margin-top: 10px !important;">
                        {{ __('website.areusure') }}
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary mt-2" id="cancel_confirm" data-dismiss="modal">{{ __('website.close') }}</button>
                    <button type="button" id="check_confirm" class="btn btn-primary">{{ __('website.confirm') }}</button>
                </div>
            </div>
        </div>
    </div>
    <!--template-modal-->
@section('script')
<script src="../js/package.js"></script>

<script>
var invalid_error = '{{ __('website.phone_invalid') }}';
var exist_active = '{{ __('website.exist_active') }}';
var exist_expired = '{{ __('website.exist_expired') }}';
var enter_phone = '{{ __('website.enter_phone') }}';
var phone_exist = '{{ __('website.phonenumber_exist') }}';
var phone_no_need_digit = '{{ __('website.phone_need_digit') }}';
var enter_email = '{{ __('website.email') }}';
var enter_url = '{{ __('website.enter_url') }}';
var special_char = '{{ __('website.special_char') }}';
var url_need_char = '{{ __('website.url_need_char') }}';
var email_invalid = '{{ __('website.email_invalid') }}';
var email_exist = '{{ __('website.email_exist')  }}';
var zoom_card = '{{ __('website.zoom')  }}';
var select_card = '{{ __('website.select_card')  }}';
var select_success = '{{ __('website.select_success')  }}';
</script>
@endsection
@endsection
   

  
