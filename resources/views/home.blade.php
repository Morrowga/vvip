@extends('layouts.app')

@section('content')

<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm" style="background-color: #000 !important;">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/home') }}">
            <img src="../images/logo.jpeg" alt="" width="80" height="80">
        </a>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            @if(Auth::user()->name)
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                <img width="50" height="50" id="profile_img" alt=""> {{ Auth::user()->name }}
            </a>
            <input type="text" id="userid" value="{{ Auth::user()->id }}" hidden>
            <input type="text" id="step_two" value="{{ Auth::user()->step_two }}" hidden>
            @else
            <a href="" hidden></a>
            @endif
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item dropdown_logout" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                  {{ __('Logout') }} <i class="fas fa-power-off"></i>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
    </ul>
    </div>
</nav>

<div id="reg-section">
<form method="POST" id="second_register">
@csrf
<div class="user-journey">
    <div class="form-section">
        <div class="container col-md-12 text-center">
            <p class="text">{{ Auth::user()->phone_number }}</p>
            <div class="form-group row d-flex justify-content-center">
                <div class="col-md-4 col-md-offset-4">
                    <span id="error_name" class="error_texts" role="alert">{{ __('website.enter_name') }}</span>
                    <input id="name" type="text" value="{{ Auth::user()->name }}" placeholder="{{ __('website.enter_name') }}"
                        class="form-control register-input reg-name" name="name" style="font-size: 17px; margin-top: 5px !important;" required autocomplete="name" autofocus>
                </div>
            </div>
            <div class="form-group row d-flex justify-content-center">
                <div class="col-md-4 col-md-offset-4">
                    <span id="error_email" class="error_texts" role="alert"></span>
                    <input id="email" type="email" placeholder="{{ __('website.email') }}"
                        class="form-control register-input" name="email" style="font-size: 17px; margin-top: 5px !important;"
                        required autocomplete="email">
                </div>
            </div>
            <div class="form-group row d-flex justify-content-center">
                <div class="col-md-4 col-md-offset-4 hr" style="margin-top: 15px !important;">
            </div> 
            </div>
            <div class="form-group d-flex justify-content-center">
                <div class="col-md-4 col-md-offset-4" style="margin-top: 5px !important;">
                <div class="d-flex justify-content-center" style="display:flex; text-align:left !important;">
                    <p class="url_text text-left">{{ __('website.url') }}</p>
                    <button type="button" style="margin-left: 5px !important;" class="btn btn btn-light span_question" data-toggle="popover" title="{{ __('website.url_popover_title') }}" data-content="{{ __('website.url_popover_body') }}"><i class="fas fa-question"></i></button>
                </div>
                    <div class="d-flex justify-content-center" style="margin-top: 15px !important;">
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
            <div class="form-group d-flex justify-content-center">
                <div class="col-md-4 col-md-offset-4" style="margin-top: 20px !important;">
                    <span id="error_url" class="error_texts" role="alert"></span>
                    <input type="text" value="1" id="total_input" hidden>
                    <div class="d-flex justify-content-center">
                        <div class="col-md-4 url vvip_link">
                            <p class="vvip_text">https://vvip9.co/</p>
                        </div>
                        <div class="col-md-8">
                            <input type="text" id="url" class="form-control url_input" name="url" placeholder="{{ __('website.enter_url') }}">
                            <input type="text" id="encrypt_url" name="encryption" hidden>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row d-flex justify-content-center">
                <div class="col-md-4 col-md-offset-4 hr_bottom mt-2" style="margin-top: 30px !important;">
                </div>
            </div>
            <div class="form-group  d-flex justify-content-center">
                <div class="col-md-4 col-md-offset-4" style="margin-top: 5px !important;">
                    <div class="d-flex justify-content-center" style="display:flex; text-align:left !important;">
                        <p class="pt-2 url_text">{{ __('website.secure') }}</p>
                        <button style="margin-left: 5px !important;" type="button" class="btn btn-light span_question" data-toggle="popover" title="{{ __('website.secure_popover_title') }}" data-content="{{ __('website.secure_popover_body') }}"><i class="fas fa-question"></i></button>
                    </div>
                    <div class="d-flex justify-content-center" style="margin-top: 15px !important;">
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
    </div>
    <div class="form-section">
        <!-- <div class="d-flex justify-content-center">
            <img src="../images/logo.jpeg" alt="" class="register_image">
        </div>  -->
        <div class="form-group">
            <div class="row d-flex justify-content-center" id="column-image">
            </div>
        </div>
    </div>       
    <div class="form-section">
        <div class="form-group d-flex justify-content-center">
            <div class="col-md-10 col-md-offset-1"  style="margin-top: 15px !important;">
                <div class="row">
                    <div class="col-md-8 text-center">
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
                            <button type="button" id="upload_logo" class="btn btn-dark btn-place"><i class="fas fa-camera-retro custom-case"></i>{{ __('website.upload_logo') }}</button>
                        </div>
                        <div class="col-md-12 mt-2">
                            <p class="text"  style="font-size: 20px !important; margin-top: 15px;">{{ __('website.editname') }}</p>
                            <button type="button" id="editName" class="btn btn-dark btn-place"><i class="fas fa-pen-nib custom-case"></i>{{ __('website.edit_name') }}</button>
                        </div>
                        <div class="col-md-12">
                            <p class="text"  style="font-size: 21px !important; margin-top: 15px">{{ __('website.description') }}</p>
                            <button type="button"  id="editDescription" class="btn btn-dark btn-place"><i class="fas fa-font custo"></i>{{ __('website.edit_descript') }}</button>                    
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
                    <div class="col-md-4 text-center custom_card" id="bl_front">
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
                        <input type="text" id="card_design_id" name="smart_card_id" hidden>
                    </div>
                </div>
            </div>
        </div>
    </div>   
    
    <div class="form-group d-flex justify-content-center">
        <div class="form-navigation col-md-4 col-md-offset-4" style="margin-top: 25px !important;">
            <div class="form-group row">
                <div class="col-md-12">
                    <button type="button" class="next btn btn-success float-right btn-block"  style="margin-top: 10px !important;" disabled>{{ __('website.next') }}</button>
                    <button type="button" class="previous btn btn-danger btn-block" style="margin-top: 10px !important;">{{ __('website.pre') }}</button>
                    <button type="submit" id="submit-register" class="btn btn-info float-right sub-btn btn-block" style="margin-top: 10px !important;">{{ __('website.submit_register') }}</button>
                    <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}">
                </div>
            </div>
        </div>
    </div>
</div>
</form>
</div>

<div class="container" id="home_height">
    <div class="col-md-12">
        <div class="d-flex justify-content-between">
            <h1 class="text">{{ __('website.welcome') }}</h1>
        </div>
        <div class="d-flex justify-content-center">
            <p class="text" id="welcome_text"></p>
        </div>
    </div>
    <div class="col-md-12 menu mt-3">
        <div class="d-flex justify-content-center">
            <div class="col-md-6 col-md-offset-3">
                <div class="row">
                    <div class="col home-col text-center">
                        <a class="homelink" href="/action"><img src="https://i.ibb.co/4gBD13g/create.jpg" alt="" class="img-fluid"></a>
                        <p class="home_text">Action</p>
                    </div>
                    <div class="col home-col text-center">
                        <a class="homelink" href="/create_data"><img src="https://i.ibb.co/4gBD13g/create.jpg" alt="" class="img-fluid"></a>
                        <p class="home_text">Create</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="col-md-6 col-md-offset-3 mt-3">
                <div class="row">
                    <div class="col home-col text-center">
                        <a class="homelink" href="/profile"><img src="https://i.ibb.co/4gBD13g/create.jpg" alt="" class="img-fluid"></a>
                        <p class="home_text">Profile</p>
                    </div>
                    <div class="col home-col text-center">
                        <a class="homelink" href="/list"><img src="https://i.ibb.co/4gBD13g/create.jpg" alt="" class="img-fluid"></a>
                        <p class="home_text">Settings</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="space-lift-home"></div>

    <div class="modal fade" id="logoModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-header" style="border: none !important; margin-top: 10%;">
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

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="nameTextModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-header" style="border: none !important; margin-top: 10%;">
            </div>
            <div class="modal-content" style="backgtokenround-color: #fff !important;">
                <div class="modal-body" style="background-color: #fff !important;">
                    <div class="col-md-12" style="margin-top: 60px !important;">
                        <h4 class="upload_logo_text text-center mt-3">{{ __('website.editname') }}</h4>
                        <input type="text" class="form-control btn-block edit_name" placeholder="{{ __('website.enter_card_name') }}">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary mt-2" id="cancel" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="descriptionTextModal"  role="dialog">
        <div class="modal-dialog">
            <div class="modal-header" style="border: none !important; margin-top: 10%;">
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
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bd-example-modal-lg" id="confirm_modal" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" id="modal_pdf">               
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
                    <div class="col-md-12 text-right" style="margin-top: 20px !important;">
                        <button type="button" class="btn btn-secondary" id="cancel_confirm" data-dismiss="modal">{{ __('website.close') }}</button>
                        <button type="submit" id="check_confirm" class="btn btn-primary">{{ __('website.confirm') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@section('script')
<script src="../js/home.js"></script>

@endsection
@endsection


