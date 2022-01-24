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
                        <div class="col-md-12 text-center">
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
                                    <h1 class="package">GOLD</h1>
                                    <h5 class="package">{{ $normal->package_name }}</h5>
                                    <img src="../images/Normal_001.png" id="normal_img" alt="" width="270" height="250">
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
                                <div class="panel-footer text-center nor_stand">
                                    <button class="btn btn-dark moreinfo_package" id="{{ $normal->package_name }}">{{ __('website.more_info') }}</button>
                                    <button type="button" id="{{ $normal->id }}" class="btn btn-default price-btn-one" onclick="packageClick(event)" value="{{ $normal->token }}">{{ $normal->price }}, {{ __('website.order_now') }}</button>
                                </div>
                            </div>										
                        </div>
                        
                        <div class="price-box col-sm-6 col-md-4 wow ml-3" data-wow-delay="0.7s">
                            <div class="panel panel-default">
                                <div class="panel-heading text-center">
                                    <h1 class="package">DIAMOND</h1>
                                    <h5 class="package">{{ $standard->package_name }}</h5>
                                    <img src="../images/Standard_001.png" id="standard_img" alt="" width="270" height="250">
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
                                <div class="panel-footer text-center nor_stand">
                                    <button class="btn btn-dark moreinfo_package" id="{{ $standard->package_name }}">{{ __('website.more_info') }}</button>
                                    <button type="button" id="{{ $standard->id }}" class="btn btn-default price-btn-one" onclick="packageClick(event)" value="{{ $standard->token }}">{{ $standard->price }}, {{ __('website.order_now') }}</button>
                                </div>
                            </div>										
                        </div>
                        
                        <div class="price-box col-sm-6 col-md-4 wow ml-3" data-wow-delay="0.9s">
                            <div class="panel panel-default">
                                <div class="panel-heading text-center">
                                    <h1 class="package">RUBY</h1>
                                    <h5 class="package">{{ $luxury->package_name }}</h5>
                                    <img src="../images/Luxury_001.png" alt="" id="luxury_img" width="270" height="250">
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
                                    <button class="btn btn-dark moreinfo_package" id="{{ $luxury->package_name }}">{{ __('website.more_info') }}</button>
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

    <section id="info_section" class="page" style="margin-top: 65px !important;" hidden>
        <div class="col-md-6 col-md-offset-3">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 text-center" id="info_contact" hidden>
                            <h4 class="text">Contact</h4>
                            <img src="https://media4.giphy.com/media/MXA8QkWdYxgE2dWZ1I/200.webp?cid=ecf05e47jx4cmhnnorp8h4qt3yjb5z5drjnos7ap6r53g2gy&rid=200.webp&ct=g" alt="" width="300" height="250">
                            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem porro facere placeat.</p>
                        </div>
                        <div class="col-md-4 text-center" id="info_linktree" hidden>
                            <h4 class="text">Link Tree</h4>
                            <img src="https://media4.giphy.com/media/72hH8nyYwRG7iy8JPQ/200w.webp?cid=ecf05e47uvm01rtjwe251xwf7kbd71cqdgzo00xt0kcwi92w&rid=200w.webp&ct=g" alt="" width="300" height="250">
                            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem porro facere placeat.</p>
                        </div>
                        <div class="col-md-4 text-center" id="info_deeplink" hidden>
                            <h4 class="text">Deep Link</h4>
                            <img src="https://media0.giphy.com/media/fq7knICEV08fh1iuO2/200.webp?cid=ecf05e47rty1syihn7imholrxwgrv8t92ult62wetx5xy7rp&rid=200.webp&ct=g" alt="" width="300" height="250">
                            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem porro facere placeat.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 text-center" id="info_url" hidden>
                            <h4 class="text">URL</h4>
                            <img src="https://media2.giphy.com/media/rERg78R6dLB7rwDc7u/200w.webp?cid=ecf05e476uzmwv49qv9h970figgzkoblny2ajx7swtte3rk3&rid=200w.webp&ct=g" alt="" width="300" height="250">
                            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem porro facere placeat.</p>
                        </div>
                        <div class="col-md-4 text-center" id="info_call" hidden>
                            <h4 class="text">Call</h4>
                            <img src="https://media3.giphy.com/media/MEjG5NXKKS68LvGIP2/giphy.webp?cid=ecf05e47hwdenb9vtbs1k8ao82mtvr9k8tnmher5f31ykh0d&rid=giphy.webp&ct=g" alt="" width="300" height="250">
                            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem porro facere placeat.</p>
                        </div>
                        <div class="col-md-4 text-center" id="info_email" hidden>
                            <h4 class="text">Email</h4>
                            <img src="https://media2.giphy.com/media/aOften89vRbG/200w.webp?cid=ecf05e47a2oq6grxwd7b4ccaouc5ed8fif8hogha8vh982dx&rid=200w.webp&ct=g" alt="" width="300" height="250">
                            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem porro facere placeat.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 text-center" id="info_cns" hidden>
                            <h4 class="text">Contact & Social</h4>
                            <img src="https://media0.giphy.com/media/3ohzdZ44Q62CJ2ekla/200.webp?cid=ecf05e47k7aj4ihplc7gv5mziuj21ir2dzj7r1fximv6ubt7&rid=200.webp&ct=g" alt="" width="300" height="250">
                            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem porro facere placeat.</p>
                        </div>
                        <div class="col-md-4 text-center" id="info_sms" hidden>
                            <h4 class="text">SMS</h4>
                            <img src="https://media2.giphy.com/media/65AYg17GQmvTVtIwBO/200w.webp?cid=ecf05e47dpknvkbbe7nvzz2h8nj0zv7xlx717d1vvgj5cx42&rid=200w.webp&ct=g" alt="" width="300" height="250">
                            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem porro facere placeat.</p>
                        </div>
                        <div class="col-md-4 text-center" id="info_events" hidden>
                            <h4 class="text">Events</h4>
                            <img src="https://media1.giphy.com/media/mDMOkkXWQZvEJMnvTW/200.webp?cid=ecf05e474a9xuo4so2pxxnz7zjo3adeb2h6diqqsgh8qeqnh&rid=200.webp&ct=g" alt="" width="300" height="250">
                            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem porro facere placeat.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 text-center" id="info_bank" hidden>
                            <h4 class="text">Bank/Pay Info</h4>
                            <img src="https://media2.giphy.com/media/TDyxBGZcViZnoye8iN/200w.webp?cid=ecf05e47liu4m03qmor1wpibuu2dpvf9phhrxh8umw2janfs&rid=200w.webp&ct=g" alt="" width="300" height="250">
                            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem porro facere placeat.</p>
                        </div>
                        <div class="col-md-4 text-center" id="info_assistant" hidden>
                            <h4 class="text">Personal Assistant</h4>
                            <img src="https://media1.giphy.com/media/l2SqbeXi79su4V9ni/200w.webp?cid=ecf05e47zpeml1eeaz46opor8pk3j7ufyxtkfnlotdc1eqgg&rid=200w.webp&ct=g" alt="" width="300" height="250">
                            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem porro facere placeat.</p>
                        </div>
                        <div class="col-md-4 text-center" id="info_metal" hidden>
                            <h4 class="text">Metal Card</h4>
                            <img src="https://media0.giphy.com/media/dLHdCsnjf1xtK/200w.webp?cid=ecf05e476ye818gxj1abtdwaeyxufipn7i0aaxafwykgrorg&rid=200w.webp&ct=g" alt="" width="300" height="250">
                            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem porro facere placeat.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-md-offset-3">
                        <button class="btn btn-outlint-light packinfo_btn btn-block">Close Tab</button>
                    </div>
                </div>
            </div>
        </div>
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
                        <!-- <div class="form-group row">
                            <div class="col-md-4 col-md-offset-4">
                                <input id="save-name" type="text" placeholder="{{ __('website.enter_name') }}"
                                    class="form-control register-input" name="name" style="font-size: 17px;"
                                    value="{{ old('name') }}" required autocomplete="name" autofocus>
                            </div>
                        </div> -->

                        <div class="form-group row">
                            <div class="col-md-4 col-md-offset-4">
                                <p id="error_text" style="padding: 5px; color: rgb(184, 28, 41);"></p>
                                <input id="save-phone" type="number"
                                    class="form-control register-input" placeholder="{{ __('website.enter_phone') }}" name="phone_number" style="font-size: 17px; margin-top: 5px !important;"
                                    value="{{ old('phone_number') }}" required onkeypress="return event.keyCode === 8 || event.charCode >= 48 && event.charCode <= 57">
                            </div>
                        </div>
                        <div class="form-group mt-5">
                            <div class="col-md-4 col-md-offset-4">
                                <button class="btn btn-dark save-user">{{ __('website.next') }}</button>
                            </div>
                        </div>
                        <div class="col-md-8 col-md-offset-2">
                            <p class="packagetxtforuser"></p>
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
                                    <!-- <div class="d-flex justify-content-center">
                                        <img src="../images/logo.jpeg" alt="" class="register_image">
                                    </div>  -->
                                    <div class="col-md-8 col-md-offset-2">
                                        <h3 class="payment-text">{{ __('website.payment') }}</h3>
                                        <div class="devider"></div>
                                        <div class="form-group row pay-border">
                                            <div class="col-md-3" style="margin-top: 10px !important;">
                                                <a class="payment_link" id="kpay" data-value="kpay"><img src="https://is4-ssl.mzstatic.com/image/thumb/Purple114/v4/7e/a2/79/7ea2799e-feae-79ec-1fd6-b9f20cb1ed34/source/512x512bb.jpg" style="margin-left: 15px !important;" class="payment" alt="" width="170" height="150"></a>
                                            </div>
                                            <div class="col-md-3"  style="margin-top: 10px !important;">
                                                <a class="payment_link" id="wavemoney" data-value="wavemoney"><img src="https://pbs.twimg.com/profile_images/1041604335543627776/REZJdo09_400x400.jpg"  style="margin-left: 15px !important;" class="payment" width="170" height="150" alt=""></a>
                                            </div>
                                            <div class="col-md-3"  style="margin-top: 10px !important;">
                                                <a class="payment_link" id="kbzbanking" data-value="kbzbanking"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJIGpWUpbBiv0ms_OSlbsr0PWx1Ep6RCJmYfVvjq_R1hjG0n7hLd3P4WdBytwD16gSSmE&usqp=CAU"  style="margin-left: 15px !important;" class="payment" width="170" height="150" alt=""></a>
                                            </div>
                                            <div class="col-md-3"  style="margin-top: 10px !important;">
                                                <a class="payment_link" id="ayabanking" data-value="ayabanking"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQtWYCKM4fAMo9zl4kFRNcRE_aW5Mw79xJZoTZbSaPxdJruHcR28dKo_4HwxrS_gPlRFcg&usqp=CAU"  style="margin-left: 15px !important;" class="payment" width="160" height="150" alt=""></a>
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
                                                    <input type="text" id="encrypt_url" name="encryption" hidden>
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
                                                    <div class="front_theme">
                                                        <h3 class="text text-margin">{{ __('website.Front Theme') }}</h3>
                                                        <div class="front_theme_div" style="display:flex; justify-content: center !important;">

                                                        </div>
                                                    </div>
                                                    <div class="back_theme">
                                                        <h3 class="text text-margin">{{ __('website.Back Theme') }}</h3>
                                                        <div class="back_theme_div" style="display:flex; justify-content: center !important;">

                                                        </div>
                                                    </div>
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
                                                    <div class="col-md-12 mt-2" id="positioning">
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
                                                        <input type="text" id="qrposition" hidden>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 text-center custom_card" id="bl_front">
                                                    <div id="card_blank_front" style="text-align:center;">
                                                        <img  alt="" id="card_front">
                                                        <img src="../images/logo.jpeg" class="customlogo" id="logo_view" alt="" width="70" height="70">
                                                        <p class="front_card_name text-center">Your Name</p>
                                                        <p class="card_description text-center" style="margin-top: 20px !important;" >Your Description</p>
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
                                    <div class="col-md-12" id="uu">
                                        <p class="text"></p>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <img src="../images/logo.jpeg" alt="" class="register_image">
                                        <h3 class="text"  style="margin-top: 20px !important;">{{ __('website.create_login_pin') }}</h3>
                                    </div> 
                                    <div class="form-group row" style="margin-top: 10px;">
                                        <div class="col-md-4 col-md-offset-4">
                                            <input id="password" type="number" placeholder="{{ __('website.new_pin') }}" class="form-control @error('password') is-invalid @enderror web_pin" name="pin" required onkeypress="return event.keyCode === 8 || event.charCode >= 48 && event.charCode <= 57">
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
                                            <input id="password-confirm" type="number" placeholder="{{ __('website.confirm_pin') }}" onkeypress="return event.keyCode === 8 || event.charCode >= 48 && event.charCode <= 57" class="form-control web_pin" name="password_confirmation">
                                            <input type="text" id="verify-type"  name="verifytype" hidden>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-navigation col-md-6 col-md-offset-3" style="margin-top: 25px !important;">
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <button type="button" class="next btn btn-info" style="margin-top: 10px !important;" disabled>{{ __('website.next') }}</button>
                                            <button type="button" class="previous btn btn-info" style="margin-top: 10px !important;">{{ __('website.pre') }}</button>
                                            <button type="submit" id="submit-register" class="btn btn-info float-right sub-btn" style="margin-top: 10px !important;" disabled>{{ __('website.submit_register') }}</button>
                                            <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}">
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="modal fade" id="submit-verify" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-header" style="border: none !important; margin-top: 10%;">
                                        </div>
                                        <div class="modal-content" style="background-color: #000 !important; border: 2px solid #fff;">
                                            <div class="modal-body">
                                               <div class="col-md-12">
                                                   <h3 class="text text-center">Choose Options</h3>
                                                   <div class="row">
                                                        <div class="col-md-6 btn btn-dark verifybtn phone-verify" id="smsverify">
                                                            
                                                        </div>
                                                        <div class="col-md-6 btn btn-dark verifybtn email-verify" id="emailverify">

                                                        </div>
                                                    </div>
                                               </div>
                                            </div>
                                            <div class="modal-footer" style="border-bottom: 2px solid #fff;"> 
                                                <button type="button" class="btn btn-secondary sub-regi-cancel" data-dismiss="modal">{{ __('website.close') }}</button>
                                                <button type="submit" class="btn btn-dark paymentbtn sub-regi" hidden>{{ __('website.confirm') }}</button>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    <div class="col-md-12" style="height: 80px;">
        <p class="copyright text-center" style="padding-top: 15px !important;">Copyright &copy; 2021 <a href="https://htut.com" class="theme-author">MHH</a></p>
    </div>

    <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="border: none !important; margin-top: 10%;">
                    <!-- <h4 class="text">Smart Card</h4> -->
                </div>
                <div class="modal-body" style="margin-top: 60px !important;">
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

    <div class="modal fade" id="payment_modal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-header" style="border: none !important; margin-top: 10%;">
                <!-- <h4 class="text">Card Logo</h4> -->
            </div>
            <div class="modal-content" style="background-color: #000 !important; border: 2px solid #fff;">
                <div class="modal-body">
                    <img id="payment-title" src="" width="50" height="50">
                    <p class="text" id="amount_text"></p>
                    <p class="text" id="payment-account"></p>
                    <p class="helpcenter"> <i class="fas fa-headset"></i> Call Center - 09791642548, 09767834959</p>
                    <form action="" id="payment_form">
                        <label class="btn btn-dark btn-block" id="up_load_btn" style="margin-top: 20px;"> 
                            <input type="file" name="screenshot_image" class="paymentload" accept="image/*">
                            {{ __('website.upload_screenshot') }}
                        </label>
                        <p class="screenshot_warn">{{ __('website.screenshot_warn') }}</p>
                        <button type="button" class="btn btn-primary paymentbtn" id="kpop" data-rel="popover" data-content="<img src='../images/kpay.jpg' width=100% height=100%><img src='../images/kpay.jpg' width=100% height=100%>">{{ __('website.needhelp') }}<i class="far fa-question-circle"></i></button>
                        <button type="button" class="btn btn-primary paymentbtn" id="wpop" data-rel="popover" data-content="<img src='../images/kpay.jpg' width=100% height=100%><img src='../images/kpay.jpg' width=100% height=100%>">{{ __('website.needhelp') }}<i class="far fa-question-circle"></i></button>
                        <button type="button" class="btn btn-primary paymentbtn" id="kbzpop" data-rel="popover" data-content="<img src='../images/kpay.jpg' width=100% height=100%><img src='../images/kpay.jpg' width=100% height=100%>">{{ __('website.needhelp') }}<i class="far fa-question-circle"></i></button>
                        <button type="button" class="btn btn-primary paymentbtn" id="ayapop" data-rel="popover" data-content="<img src='../images/kpay.jpg' width=100% height=100%><img src='../images/kpay.jpg' width=100% height=100%>">{{ __('website.needhelp') }}<i class="far fa-question-circle"></i></button>
                        <input type="text" name="payment_type" id="p_type" hidden>
                        <input type="text" name="payment_amount" id="p_amount" hidden>
                        <input type="text" name="package" id="p_package" hidden>
                        <input type="text" name="phone" id="p_phone" hidden>
                </div>
                <div class="text-center" id="screenshot">
                </div>
                <hr>
                <div class="modal-footer" style="border-bottom: 2px solid #fff;"> 
                        <button type="button" class="btn btn-secondary" id="cancel" data-dismiss="modal">{{ __('website.close') }}</button>
                        <button type="submit" class="btn btn-dark paymentbtn" disabled>{{ __('website.confirm') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="logoModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-header" style="border: none !important; margin-top: 10%;">
                <!-- <h4 class="text">Card Logo</h4> -->
            </div>
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

    <div class="modal fade" id="nameTextModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-header" style="border: none !important; margin-top: 10%;">
                <!-- <h4 class="text">Card  Name</h4> -->
            </div>
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

    <div class="modal fade" id="descriptionTextModal"  role="dialog">
        <div class="modal-dialog">
            <div class="modal-header" style="border: none !important; margin-top: 10%;">
                <!-- <h4 class="text">Card Description</h4> -->
            </div>
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

    <div class="modal fade bd-example-modal-lg" id="confirm_modal" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" id="modal_pdf">
                <div class="modal-header" style="border: none !important; margin-top: 10%;">
                    <!-- <h4 class="text">Please Confirm</h4> -->
                </div>
                <div class="modal-body  text-center" style="margin-top: 60px !important;">
                    <div class="col-md-12 mt-2">
                        <p class="sure" style="font-size: 20px !important; margin-top: 10px !important;">
                            {{ __('website.areusure') }}
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-md-6" style="text-align:center;">
                            <div id="frontcard" class="text-center" >
                                
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div id="backcard" class="text-center" >
                                
                            </div>
                        </div>
                    </div>
                    <div class="form-group" hidden>
                        <form action="" method="POST" id="form_save">
                            <input type="text" id="input-1" name="pre" hidden>
                            <input type="text" id="input-2" name="tran_f" hidden>
                            <input type="text" id="input-3" name="tran_b" hidden>
                            <input type="file" id="input-4" name="logo_img" hidden>
                            <input type="text" id="input-5" name="text_color" hidden>
                            <input type="text" id="input-6" name="bg_color" hidden>
                            <input type="text" id="input-7" name="cardname_text" hidden>
                            <input type="text" id="input-8" name="description_text" hidden>
                            <input type="text" id="input-9" name="position_front" hidden>
                            <input type="text" id="input-10" name="position_back" hidden>
                            <input type="text" id="input-11" name="pk_name" hidden>
                            <input type="text" id="input-12" name="customer_url" hidden>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="col-md-12" style="margin-top: 20px !important;">
                        <button type="button" class="btn btn-secondary mt-2" id="cancel_confirm" data-dismiss="modal">{{ __('website.close') }}</button>
                        <button type="submit" id="check_confirm" class="btn btn-primary">{{ __('website.confirm') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@section('script')
<script src="../js/package.js"></script>
<script src="../js/payment.js"></script>

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
var packagetextforuser_one = '{{ __('website.packtext_first') }}';
var packagetextforuser_two = '{{ __('website.packtext_second') }}';
var normaltext = '{{ __('website.normal_text') }}';
var standardtext = '{{ __('website.standard_text') }}';
var luxurytext = '{{ __('website.luxury_text') }}';
</script>
@endsection
@endsection
   

  
