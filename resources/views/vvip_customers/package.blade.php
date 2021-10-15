@extends('layouts.frontview')

@section('content')
    <section id="prices-section" class="page"  style="display:block; margin-top: 65px !important;" >
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
                                <ul class="list-group text-center"> 
                                    <li class="list-group-item one"><i class="fas fa-check" style="margin-right: 5px !important; font-size: 8px !important; color: rgb(253,235,162) !important;" ></i>Personal Use</li>
                                    <li class="list-group-item one"><i class="fas fa-check" style="margin-right: 5px !important; font-size: 8px !important; color: rgb(253,235,162) !important;" ></i>Contact System</li>
                                    <li class="list-group-item one"><i class="fas fa-check" style="margin-right: 5px !important; font-size: 8px !important; color: rgb(253,235,162) !important;" ></i>Personal Social Platform Links</li>
                                    <li class="list-group-item one"><i class="fas fa-check" style="margin-right: 5px !important; font-size: 8px !important; color: rgb(253,235,162) !important;" ></i>Personnal Deep Link</li>
                                    <li class="list-group-item one"><i class="fas fa-check" style="margin-right: 5px !important; font-size: 8px !important; color: rgb(253,235,162) !important;" ></i>Business URL</li>
                                    <li class="list-group-item one"><i class="fas fa-check" style="margin-right: 5px !important; font-size: 8px !important; color: rgb(253,235,162) !important;" ></i>Telephone Call System</li>
                                </ul>
                                <div class="panel-footer text-center">
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

    <section id="prices-section-two" class="page-wizard" style="display:none;">
        <div class="extra-space-l"></div>

        <div class="prices">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                        <!-- <div class="col-md-4"></div> -->
                        <div class="col-md-12">
                            <form action="{{ route('register') }}" method="POST" class="contact-form text-center">
                                @csrf 
                                <div class="d-flex justify-content-center">
                                    <img src="../images/logo.jpeg" alt="" class="register_image">
                                </div>
                                <div class="form-section col-md-6 col-md-offset-3">
                                    <h3 class="payment-text">Select Payment</h3>
                                    <div class="devider"></div>
                                    <div class="form-group row pay-border">
                                        <div class="col-md-6" style="margin-top: 10px !important;">
                                            <img src="https://play-lh.googleusercontent.com/cnKJYzzHFAE5ZRepCsGVhv7ZnoDfK8Wu5z6lMefeT-45fTNfUblK_gF3JyW5VZsjFc4"  class="payment" alt="" width="150" height="150">
                                        </div>
                                        <div class="col-md-6"  style="margin-top: 10px !important;">
                                            <img src="https://pbs.twimg.com/profile_images/1041604335543627776/REZJdo09_400x400.jpg" class="payment" width="150" height="150" alt="">
                                        </div>
                                        <input type="text" name="package" id="package_name" hidden>
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
                                        <div class="col-md-12" id="design" style="margin-left: 100px !important;">
                                            <select class="image-picker show-html" name="smart_card_design_id">
                                                @foreach($cards as $card)
                                                <option data-img-src="{{ $card->front_image }}" value="{{ $card->id }}"></option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
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
                                        <button type="button" class="next btn btn-info">Next</button>
                                        <button type="button" class="previous btn btn-info">Previous</button>
                                        <button type="submit" class="btn btn-info float-right sub-btn">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    @section('script')
    <script>
         $.ajax({
                url: '/api/generate_code',
                type: 'get',
                success: function(response){
                    document.getElementById("url_system").value = response['generate_code'];
                }
            });

    </script>
    @endsection
    <!--template-modal-->
@endsection
   

  
