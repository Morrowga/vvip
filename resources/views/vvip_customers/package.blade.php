@extends('layouts.frontview')

@section('content')
    <section id="prices-section" class="page"  style="margin-top: 65px !important;">
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
                                    <h3 class="package">{{ $normal->package_name }}</h3>
                                    <img src="../images/gold.png" alt="" width="100" height="110">
                                    <h4 class="package">GOLD</h4>
                                    <h5 class="package">{{ $normal->plan_name }}</h5>
                                </div>
                                <div class="panel-body text-center">
                                    <p class="lead"><strong>{{ $normal->price }}</strong></p>
                                </div>
                                <!-- <ul class="list-group text-center"> 
                                    <li class="list-group-item one"><i class="fas fa-check" style="margin-right: 5px !important; font-size: 8px !important; color: rgb(253,235,162) !important;" ></i>Personal Use</li>
                                    <li class="list-group-item one"><i class="fas fa-check" style="margin-right: 5px !important; font-size: 8px !important; color: rgb(253,235,162) !important;" ></i>Contact System</li>
                                    <li class="list-group-item one"><i class="fas fa-check" style="margin-right: 5px !important; font-size: 8px !important; color: rgb(253,235,162) !important;" ></i>Personal Social Platform Links</li>
                                    <li class="list-group-item one"><i class="fas fa-check" style="margin-right: 5px !important; font-size: 8px !important; color: rgb(253,235,162) !important;" ></i>Personnal Deep Link</li>
                                    <li class="list-group-item one"><i class="fas fa-check" style="margin-right: 5px !important; font-size: 8px !important; color: rgb(253,235,162) !important;" ></i>Business URL</li>
                                    <li class="list-group-item one"><i class="fas fa-check" style="margin-right: 5px !important; font-size: 8px !important; color: rgb(253,235,162) !important;" ></i>Telephone Call System</li>
                                </ul> -->
                                <div class="panel-footer text-center">
                                    <button type="button" id="" class="btn btn-default price-btn-one" >More Info</button>
                                    <button type="button" id="{{ $normal->id }}" class="btn btn-default price-btn-one" onclick="packageClick(event)" value="{{ $normal->token }}">Order Now!</button>
                                </div>
                            </div>										
                        </div>
                        
                        <div class="price-box col-sm-6 price-box-featured col-md-4 wow flipInY ml-3" data-wow-delay="0.7s">
                            <div class="panel panel-default">
                                <div class="panel-heading text-center">
                                    <h3 class="package">{{ $standard->package_name }}</h3>
                                    <img src="../images/diamond.png" alt="" width="100" height="110">
                                    <h4 class="package">DIAMOND</h4>
                                    <h5 class="package">{{ $standard->plan_name }}</h5>
                                </div>
                                <div class="panel-body text-center">
                                    <p class="lead"><strong>{{ $standard->price }}</strong></p>
                                </div>
                                <!-- <ul class="list-group text-center">
                                    <li class="list-group-item"><i class="fas fa-check" style="margin-right: 5px !important; font-size: 8px !important; color: rgb(253,235,162) !important;" ></i>Personal Use</li>
                                    <li class="list-group-item"><i class="fas fa-check" style="margin-right: 5px !important; font-size: 8px !important; color: rgb(253,235,162) !important;"></i>Contact & Social System</li>
                                    <li class="list-group-item"><i class="fas fa-check" style="margin-right: 5px !important; font-size: 8px !important; color: rgb(253,235,162) !important;"></i>SMS</li>
                                    <li class="list-group-item"><i class="fas fa-check" style="margin-right: 5px !important; font-size: 8px !important; color: rgb(253,235,162) !important;"></i>Event</li>
                                    <li class="list-group-item"><i class="fas fa-check" style="margin-right: 5px !important; font-size: 8px !important; color: rgb(253,235,162) !important;"></i>Bank / Pay Info</li>
                                    <li class="list-group-item"><i class="fas fa-check" style="margin-right: 5px !important; font-size: 8px !important; color: rgb(253,235,162) !important;"></i>Personal Social Platform Links</li>
                                    <li class="list-group-item"><i class="fas fa-check" style="margin-right: 5px !important; font-size: 8px !important; color: rgb(253,235,162) !important;"></i>Personnal Deep Link</li>
                                    <li class="list-group-item"><i class="fas fa-check" style="margin-right: 5px !important; font-size: 8px !important; color: rgb(253,235,162) !important;"></i>Business URL</li>
                                    <li class="list-group-item"><i class="fas fa-check" style="margin-right: 5px !important; font-size: 8px !important; color: rgb(253,235,162) !important;"></i>Telephone Call System</li>
                                </ul> -->
                                <div class="panel-footer text-center">
                                    <button type="button" class="btn btn-default price-btn-one">More Info</button>
                                    <button type="button" id="{{ $standard->id }}" class="btn btn-default price-btn-one" onclick="packageClick(event)" value="{{ $standard->token }}">Order Now!</button>
                                </div>
                                <div class="price-box-ribbon"><strong>Popular</strong></div>
                            </div>										
                        </div>
                        
                        <div class="price-box col-sm-6 col-md-4 wow flipInY ml-3" data-wow-delay="0.9s">
                            <div class="panel panel-default">
                                <div class="panel-heading text-center">
                                    <h3 class="package">{{ $luxury->package_name }}</h3>
                                    <img src="../images/ruby.png" alt="" width="100" height="110">
                                    <h3 class="package">RUBY</h3>
                                    <h5 class="package">{{ $luxury->plan_name }}</h5>
                                </div>
                                <div class="panel-body text-center">
                                    <p class="lead"><strong>{{ $luxury->price }}</strong></p>
                                </div>
                                <!-- <ul class="list-group text-center">
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
                                </ul> -->
                                <div class="panel-footer text-center">
                                    <button type="button" class="btn btn-default price-btn-one">More Info</button>
                                    <button type="button" id="{{ $luxury->id }}" class="btn btn-default price-btn-one" onclick="packageClick(event)" value="{{ $luxury->token }}">Order Now!</button>
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
                                <input id="save-name" type="text" placeholder="Enter Your Name"
                                    class="form-control register-input" name="name" style="font-size: 17px;"
                                    value="{{ old('name') }}" required autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="form-group row mt-5">
                            <div class="col-md-4 col-md-offset-4">
                                <input id="save-phone" type="tel"
                                    class="form-control register-input" placeholder="Enter Phone Number" name="phone_number" style="font-size: 17px;"
                                    value="{{ old('phone_number') }}" required autocomplete="phone_number">
                                    <p id="error_text" style="margin-top: 5px !important; color: rgb(184, 28, 41);"></p>
                            </div>
                        </div>
                        <div class="form-group mt-5">
                            <div class="col-md-4 col-md-offset-4">
                                <button class="btn btn-dark save-user" style="float: right !important;">Next</button>
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
                                <div class="d-flex justify-content-center">
                                    <img src="../images/logo.jpeg" alt="" class="register_image">
                                </div>   
                                <div class="form-section">
                                    <div class="col-md-8 col-md-offset-2">
                                        <h3 class="payment-text">Select Payment</h3>
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
                                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQtWYCKM4fAMo9zl4kFRNcRE_aW5Mw79xJZoTZbSaPxdJruHcR28dKo_4HwxrS_gPlRFcg&usqp=CAU"  style="margin-left: 15px !important;" class="payment" width="170" height="150" alt="">
                                            </div>
                                            <input type="text" name="package" id="package_name" hidden>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-section">
                                    <div class="form-group row">
                                        <div class="col-md-4 col-md-offset-4">
                                            <input id="name" type="text" placeholder="Enter Your Name"
                                                class="form-control @error('name') is-invalid @enderror register-input" name="name" style="font-size: 17px;"
                                                value="{{ old('name') }}" required autocomplete="name" autofocus>

                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row mt-5">
                                        <div class="col-md-4 col-md-offset-4">
                                            <input id="phone" type="tel"
                                                class="form-control @error('phone_number') is-invalid @enderror register-input" placeholder="Enter Phone Number" name="phone_number" style="font-size: 17px;"
                                                value="{{ old('phone_number') }}" required autocomplete="phone_number">

                                            @error('phone_number')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-4 col-md-offset-4">
                                            <input id="email" type="email" placeholder="Enter Your Email"
                                                class="form-control @error('email') is-invalid @enderror register-input" name="email" style="font-size: 17px;"
                                                value="{{ old('email') }}" required autocomplete="email">

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-md-offset-4 hr" style="margin-top: 15px !important;">
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-4 col-md-offset-4" style="margin-top: 5px !important;">
                                            <p class="url_text">URL</p>
                                            <div class="row" style="margin-top: 15px !important;">
                                                <div class="col-md-6 url">
                                                    <input type="radio" name="url_radio" onchange="getCheckedName()" value="" id="url_name" checked>
                                                    <label for="html">Name</label><br>
                                                </div>
                                                <div class="col-md-6 url">
                                                    <input type="radio" name="url_radio" onchange="getCheckedSystem()" value="" id="url_system">
                                                    <label for="css">System</label><br>
                                                </div>
                                            </div>  
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-4 col-md-offset-4" style="margin-top: 20px !important;">
                                            <div class="row">
                                                <div class="col url" style="padding-top:5px;">
                                                    <p class="vvip_text">https://vvip9.co/</p>
                                                </div>
                                                <div class="col url">
                                                    <input type="text" id="url" class="form-control url_input" name="url">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-md-offset-4 hr_bottom mt-2" style="margin-top: 30px !important;">
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-4 col-md-offset-4">
                                            <p class="pt-2 url_text">Secure</p>
                                            <div class="row" style="margin-top: 15px !important;">
                                                <div class="col-md-6 url">
                                                    <input type="radio" name="secure_status" value="private">
                                                    <label for="html">Private</label><br>
                                                </div>
                                                <div class="col-md-6 url">
                                                    <input type="radio" name="secure_status" value="public">
                                                    <label for="css">Public</label><br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-section">
                                    <div class="form-group">
                                        <div class="row d-flex justify-content-center" id="column-image">
                                        </div>
                                    </div>
                                </div>       
                                <div class="form-section">
                                    <div class="form-group">
                                        <div class="col-md-10 col-md-offset-1"  style="margin-top: 15px !important;">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h3 class="text">Background Color</h3>
                                                    <input type="color" class="form-control" id="background_color">
                                                </div>
                                                <div class="col-md-6">
                                                    <h3 class="text">Text Color</h3>
                                                    <input type="color" class="form-control" id="text_color">
                                                </div>
                                            </div>
                                            <div class="devider" style="margin-top: 15px;"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <div class="col-md-10 col-md-offset-1">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <p class="text" style="font-size: 20px !important;">Icon Upload ( Front )</p>
                                                            <button type="button" class="btn btn-dark btn-place"> Upload</button>
                                                            <button type="button" class="btn btn-dark btn-place"> Left</button>
                                                            <button type="button" class="btn btn-dark btn-place">Right</button>
                                                            <button type="button" class="btn btn-dark btn-place">Center</button>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <p class="text"  style="font-size: 20px !important;">Name ( Front )</p>
                                                            <button type="button" class="btn btn-dark btn-place">Center Left</button>
                                                            <button type="button" class="btn btn-dark btn-place">Center Right</button>
                                                            <button type="button" class="btn btn-dark btn-place">Center</button>
                                                        </div>
                                                    </div>
                                                    <div id="card_blank_front">
                                                        <img  alt="" id="card_front" width="450" height="250">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <p class="text" style="font-size: 20px !important;">QR Scan ( Back )</p>
                                                            <button type="button" id="move_left" class="btn btn-dark btn-place"> Left</button>
                                                            <button type="button" id="move_center" class="btn btn-dark btn-place">Center</button>
                                                            <button type="button" id="move_right" class="btn btn-dark btn-place"> Right</button>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <p class="text" style="font-size: 20px !important;">Name ( Back )</p>
                                                            <button type="button" class="btn btn-dark btn-place" >Center Left</button>
                                                            <button type="button" class="btn btn-dark btn-place">Center Right</button>
                                                            <button type="button" class="btn btn-dark btn-place">Center</button>
                                                        </div>
                                                    </div>
                                                    <div id="card_blank_back">
                                                        <img  alt="" id="card_back" width="450" height="250">
                                                        <img  id="qr_scan" alt="" width="80" height="70">
                                                        <p class="text" id="name_back"></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                        
                                    <input type="text" id="card_design_id" name="smart_card_design_id" hidden>
                                </div>      
                                <div class="form-section">
                                    <div class="form-group row">
                                        <div class="col-md-4 col-md-offset-4">
                                            <input id="password" type="password" placeholder="New Pin" class="form-control @error('password') is-invalid @enderror web_pin" name="pin" required autocomplete="new-password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-4 col-md-offset-4">
                                            <input id="password-confirm" type="password" placeholder="Confirm Pin" class="form-control web_pin" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-navigation col-md-6 col-md-offset-3" style="margin-top: 25px !important;">
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <button type="button" class="next btn btn-info">Next</button>
                                            <button type="button" class="previous btn btn-info">Previous</button>
                                            <button type="submit" class="btn btn-info float-right sub-btn">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    

    <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row" style="margin-top: 20px !important;">
                        <div class="col-md-6 text-center">
                            <img src="" id="front_img" alt="" with="400" height="400">
                        </div>
                        <div class="col-md-6 text-center">
                            <img src="" id="back_img" alt="" with="400" height="400">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="cancel" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="select_card">Select Card</button>
                </div>
            </div>
        </div>
    </div>

    @section('script')
    <script>
         $.ajax({
                url: '/api/generate_code',
                type: 'get',
                success: function(response){
                    document.getElementById("url_system").value = response['generate_code'];
                }
            });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(".save-user").click(function(e){

        e.preventDefault();

        var save_name= $("input[name=name]").val();
        var save_phone_number = $("input[name=phone_number]").val();
        var url = '{{ url('api/save-user') }}';

        $.ajax({
           url:url,
           method:'POST',
           data:{
                  name:save_name, 
                  phone_number:save_phone_number
                },
           success:function(response){
              if(response.message == "success"){
                document.getElementById('prices-section').style.display = "none";
                document.getElementById('prices-section-save').style.display = "none";
                document.getElementById('prices-section-two').style.display = "block";
                document.getElementById('name').value = response.name;
                document.getElementById('phone').value = response.phone_number;
                console.log(response.message);
              }else if(response.message == "Phone Number is invalid"){
                    $('#error_text').text(response.message);
              } else if(response.message == "Phone Number Exist & Active"){
                    $('#error_text').text(response.message);
              } else if (response.message == "Phone Number Exist & Expired") {
                    $('#error_text').text(response.message);
              } else {
                console.log(response.message);
              }
           },
           error:function(error){
              console.log(error)
           }
        });
	});
    </script>
    @endsection
    <!--template-modal-->
@endsection
   

  
