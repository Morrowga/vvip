@extends('layouts.frontview')

@section('content')
    <section id="prices-section" class="page"  style="margin-top: 65px !important;" >
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


    <section id="prices-section-save" class="page-wizard" style="display:none;">
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

    <section id="prices-section-two" class="page-wizard" style="display:none;">
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
                                <div class="form-section col-md-8 col-md-offset-2">
                                    <h3 class="payment-text">Select Payment</h3>
                                    <div class="devider"></div>
                                    <div class="form-group row pay-border">
                                        <div class="col-md-3" style="margin-top: 10px !important;">
                                            <img src="https://is4-ssl.mzstatic.com/image/thumb/Purple114/v4/7e/a2/79/7ea2799e-feae-79ec-1fd6-b9f20cb1ed34/source/512x512bb.jpg" style="padding-left: 15px !important;" class="payment" alt="" width="160" height="150">
                                        </div>
                                        <div class="col-md-3"  style="margin-top: 10px !important;">
                                            <img src="https://pbs.twimg.com/profile_images/1041604335543627776/REZJdo09_400x400.jpg"  style="padding-left: 15px !important;" class="payment" width="170" height="150" alt="">
                                        </div>
                                        <div class="col-md-3"  style="margin-top: 10px !important;">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJIGpWUpbBiv0ms_OSlbsr0PWx1Ep6RCJmYfVvjq_R1hjG0n7hLd3P4WdBytwD16gSSmE&usqp=CAU"  style="padding-left: 15px !important;" class="payment" width="170" height="150" alt="">
                                        </div>
                                        <div class="col-md-3"  style="margin-top: 10px !important;">
                                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPwAAADICAMAAAD7nnzuAAABZVBMVEX+/v6qNzyKjZL////8///+/v2KjpH//P/6////+//8//3///yuNT3//P3//fz7/v/Zq6355+acJCujKimnOTyqNz+rNjj///j1//+vNDyoJyygICeMjJSxMDqUKia5bGzx39uZOj3Rq6qxSk6nKzKnOTnr7O7QmJjN0NKjOzz66eWXm57/9fL/9/+1trk3O0eqqqrDh4exNDeoHyXa297StLKeLTTImZThur2jPDebJCvs0NL48Oi6vb97fIGfoKNTVWJubnXT09S/enewYl+sIzWvT1Osa27AkpLewrimVlm0Iy+5kIjs1se9h3/nxMWqWVTFiI6dR0OXLTafTUKRPUWcCSDIpq7GqqfhzciVGhyaExC4gHetS1WyYlu2bXbKeXyoama2S1WeVVjZoKX02uDQlI+LLi+QS03Ytqd9Fx21XmiIHAuNFByNAAn60c26UGTewstOTk8zNDtIR081NzkpJjakJOmwAAAan0lEQVR4nO1diUPbxpqX+DRodINs3RHYRjLYOBRksME2EMIRjNuawGu20OalV9Ltdrtvy6P79+83siEQyFkSaupfG2Pr8vxm5rvm+MxxQwwxxBBDDDHEEEMMMcQQQwwxxBBDDDHEEEMMMcTfGtDDbRfjE0Immoz/QBBA0SuVit7jT2RZ14h826X7yJAMCkQpH9U3tw5WViZWVqYmvyzkKlgDlIribZfuI0MUIDe9Vwsi1UsYPNsLt6vm94VxcI07Th6cpZ3ADz1PtXietyyLt3lV5fmw05jsOndVAQhUQMmujNUiL+b5bBap2zafvmazWAlZLzIPlnWZig6h9LZLe7PQsEeDspT3+TdAjfaaqPRESbrt4t4sNIHC+JYZ2m8iz9uJuVBB2dduu7g3C4EqhZqf8KU3ko/tJMo3wXVuu7g3B5mTOKovBElc4tU3kk9VgDkGLtH1O2LzFcGAyqMgsd5GvAfveBeEO+PwaNSt7Pm2/dZWT2F5KPgcR5XbLvZNQfsxsvnsO7a86nnBgkj12y70TUDTqPgs8izPezfuvJW11OM6cKJGbrvsfxZU4mA3sN+x1c9gH7dB5OQBd3YUzoXucfJm834N4loZBt7RcyRazode9n3Je+EWurniYHs7VILNSEXP/b2oZ/mwVP2a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"  style="padding-left: 20px !important;" class="payment" width="190" height="150" alt="">
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
                console.log(reponse.message);
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
   

  
