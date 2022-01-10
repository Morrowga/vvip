@extends('layouts.app')

@section('content')
<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm" style="background-color: #000 !important;">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/home') }}">
            <img src="../images/logo.jpeg" alt="" width="100" height="100">
        </a>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            @if(Auth::user()->name)
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                <img width="50" height="50" id="profile_img" alt=""> {{ Auth::user()->name }}
            </a>
            <input type="text" id="userid" value="{{ Auth::user()->id }}" hidden>
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

<div class="d-flex justify-content-center">
    <div class="col-md-6 col-md-offset-3" id="create_section" style="height: 900px;">
        <h3 class="text">{{ __('website.create_content') }}</h3>
        <div class="d-flex justify-content-center text-center mt-4">
            <div class="col">
                <button type="button" id="con_tact" class="btn btn-dark btn-block create_content">
                    <img src="https://i.ibb.co/ys0sstT/contacts.png" class="mt-3" alt="" width="50" height="50">
                    <p class="color_black">Contacts</p>
                </button>
            </div>
            <div class="col">
                <button type="button" id="link_tree" class="btn btn-dark btn-block create_content">
                    <img src="https://i.ibb.co/4JrcrZ9/link-tree.png" class="mt-3" alt="" width="50" height="50">
                    <p class="color_black link_t">Links Tree</p>
                </button>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-4 text-center">
            <div class="col-md-6">
                <button type="button" id="deep_link" class="btn btn-dark btn-block create_content">
                    <img src="https://i.ibb.co/nQmbWpR/deep-link.png" class="mt-3" alt="" width="50" height="50">
                    <p class="color_black">Deep Link</p>
                </button>
            </div>
            <div class="col-md-6">
                <button type="button" id="call" class="btn btn-dark btn-block create_content">
                    <img src="https://i.ibb.co/2WdRt2B/call.png" class="mt-3" alt="" width="50" height="50">
                    <p class="color_black">Call</p>
                </button>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-4 text-center">
            <div class="col-md-6">
                <button type="button" id="url" class="btn btn-dark btn-block create_content">
                    <img src="https://i.ibb.co/yhD08Qb/url.png" class="mt-3" alt="" width="50" height="50">
                    <p class="color_black">URL</p>
                </button>
            </div>
            @can('isStandard')
            <div class="col-md-6">
                <button type="button" id="email_send" class="btn btn-dark btn-block create_content">
                    <img src="https://i.ibb.co/2kVtmRV/email.png" class="mt-3" alt="" width="50" height="50">
                    <p class="color_black">Email</p>
                </button>
            </div>
            @elsecan('isLuxury')
            <div class="col-md-6">
                <button type="button" id="email_send" class="btn btn-dark btn-block create_content">
                    <img src="https://i.ibb.co/2kVtmRV/email.png" class="mt-3" alt="" width="50" height="50">
                    <p class="color_black">Email</p>
                </button>
            </div>
            @else 
            <div class="col-md-6">
                <button type="button" id="email_send" class="btn btn-dark btn-block create_content" disabled>
                    <img src="https://i.ibb.co/2kVtmRV/email.png" class="mt-3" alt="" width="50" height="50">
                    <p class="color_black">Email</p>
                </button>
            </div>
            @endcan
        </div>
        <div class="d-flex justify-content-center mt-4 text-center">
            @can('isStandard')
            <div class="col-md-6">
                <button type="button" id="sms" class="btn btn-dark btn-block create_content">
                    <img src="https://i.ibb.co/W5jcVJL/sms.png" class="mt-3" alt="" width="50" height="50">
                    <p class="color_black">SMS</p>
                </button>
            </div>
            @elsecan('isLuxury')
            <div class="col-md-6">
                <button type="button" id="sms" class="btn btn-dark btn-block create_content">
                    <img src="https://i.ibb.co/W5jcVJL/sms.png" class="mt-3" alt="" width="50" height="50">
                    <p class="color_black">SMS</p>
                </button>
            </div>
            @else
            <div class="col-md-6">
                <button type="button" id="sms" class="btn btn-dark btn-block create_content" disabled>
                    <img src="https://i.ibb.co/W5jcVJL/sms.png" class="mt-3" alt="" width="50" height="50">
                    <p class="color_black">SMS</p>
                </button>
            </div>
            @endcan

            @can('isStandard')
            <div class="col-md-6">
                <button type="button" id="cands" class="btn btn-dark btn-block create_content">
                    <img src="https://i.ibb.co/pypdbgC/contactandsocial.png" class="mt-3" alt="" width="50"
                        height="50">
                    <p class="color_black c_s">Contact & Social</p>
                </button>
            </div>
            @elsecan('isLuxury')
            <div class="col-md-6">
                <button type="button" id="cands" class="btn btn-dark btn-block create_content">
                    <img src="https://i.ibb.co/pypdbgC/contactandsocial.png" class="mt-3" alt="" width="50"
                        height="50">
                    <p class="color_black c_s">Contact & Social</p>
                </button>
            </div>
            @else
            <div class="col-md-6">
                <button type="button" id="cands" class="btn btn-dark btn-block create_content" disabled>
                    <img src="https://i.ibb.co/pypdbgC/contactandsocial.png" class="mt-3" alt="" width="50"
                        height="50">
                    <p class="color_black c_s">Contact & Social</p>
                </button>
            </div>
            @endcan
        </div>
        <div class="d-flex justify-content-center mt-4 text-center">
            @can('isStandard')
            <div class="col-md-6">
                <button type="button" id="event" class="btn btn-dark btn-block create_content">
                    <img src="https://i.ibb.co/YcD8dkz/event.png" class="mt-3" alt="" width="50" height="50">
                    <p class="color_black">Events</p>
                </button>
            </div>
            @elsecan('isLuxury')
            <div class="col-md-6">
                <button type="button" id="event" class="btn btn-dark btn-block create_content">
                    <img src="https://i.ibb.co/YcD8dkz/event.png" class="mt-3" alt="" width="50" height="50">
                    <p class="color_black">Events</p>
                </button>
            </div>
            @else
            <div class="col-md-6">
                <button type="button" id="event" class="btn btn-dark btn-block create_content" disabled>
                    <img src="https://i.ibb.co/YcD8dkz/event.png" class="mt-3" alt="" width="50" height="50">
                    <p class="color_black">Events</p>
                </button>
            </div>
            @endcan
            <div class="col-md-6">
                <!-- <button type="button" id="personal" class="btn btn-dark btn-block">
                    <div class="card create_content">
                        <div class="card-body">
                            <img src="https://cdn-icons.flaticon.com/png/128/3948/premium/3948048.png?token=exp=1635146332~hmac=b5126d32ac78751b9a7842de1421ebbd"
                                alt="" width="50" height="50">
                            <p class="color_black">Personal Se</p>
                        </div>
                    </div>
                </button> -->
            </div>
        </div>
    </div>
    <!-- contact -->
    <div class="col-md-6 col-md-offset-3" id="contact_section" style="height: 2150px;">
        <h3 class="text">Contacts</h3>
        <form method="POST" id="upload-contact-form" enctype="multipart/form-data">
        <input type="text" name="user_id" value="{{ Auth::user()->id }}" hidden>
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-center">
                    <div class="col-md-6">
                        <img id="img" width="150" height="150" />
                    </div>
                    <div class="col-md-6">
                        <h4 class="text text-center">{{ __('website.upload_photo') }}</h4>
                        <label class="label_file btn btn-dark btn-block text">
                            <input type="file" class="file_upload" name="image" accept="image/*">
                            {{ __('website.select_file') }}
                        </label>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <h4 class="text text-center">{{ __('website.contact_personal') }}</h4>
                <input type="text" id="first_name" class="form-control" placeholder="{{ __('website.contact_firstname') }}" name="first_name">
                <input type="text" id="last_name" class="form-control mt-1" placeholder="{{ __('website.contact_lastname') }}" name="last_name">
                <input type="text" id="company" class="form-control mt-1" placeholder="{{ __('website.contact_company') }}" name="company">
                <input type="text" id="position" class="form-control mt-1" placeholder="{{ __('website.contact_position') }}" name="position">
                <input type="text" id="birthday" class="form-control mt-1" placeholder="{{ __('website.contact_birthday') }}" name="birthday">
            </div>

            <div class="card-body">
                <h4 class="text text-center">{{ __('website.contact_mobile') }}</h4>
                <input type="text" id="mobile" class="form-control" placeholder="{{ __('website.contact_mobile_no') }}" name="mobile">
                <input type="text" id="phone" class="form-control mt-1" placeholder="{{ __('website.contact_phone_no') }}" name="phone">
                <input type="text" id="office" class="form-control mt-1" placeholder="{{ __('website.contact_office_no') }}" name="office">
            </div>

            <div class="card-body">
                <h4 class="text text-center">{{ __('website.contact_email_internet') }}</h4>
                <input type="text" id="personal_email" class="form-control" placeholder="{{ __('website.contact_personal_email') }}" name="personalemail">
                <input type="text" id="office_email" class="form-control mt-1" placeholder="{{ __('website.contact_office_email') }}" name="office_email">
                <input type="text" id="website1" class="form-control mt-1" placeholder="{{ __('website.contact_website_one') }}" name="website1">
                <input type="text" id="website2" class="form-control mt-1" placeholder="{{ __('website.contact_website_two') }}" name="website2">
                <input type="text" id="website3" class="form-control mt-1" placeholder="{{ __('website.contact_website_three') }}" name="website3">
            </div>

            <div class="card-body">
                <h4 class="text text-center">{{ __('website.contact_home_address') }}</h4>
                <input type="text" id="home_street1" class="form-control" placeholder="{{ __('website.contact_str_one') }}" name="home_street1">
                <input type="text" id="home_street2" class="form-control mt-1" placeholder="{{ __('website.contact_str_two') }}" name="home_street2">
                <input type="text" id="home_postal_code" class="form-control mt-1" placeholder="{{ __('website.contact_postal_code') }}" name="home_postal_code">
                <input type="text" id="home_city" class="form-control mt-1" placeholder="{{ __('website.contact_city') }}" name="home_city">
                <input type="text" id="home_state" class="form-control mt-1" placeholder="{{ __('website.contact_state') }}" name="home_state">
                <input type="text" id="home_country" class="form-control mt-1" placeholder="{{ __('website.contact_country') }}" name="home_country">
            </div>

            <div class="card-body">
                <h4 class="text text-center">{{ __('website.contact_work_address') }}</h4>
                <input type="text" id="work_street1" class="form-control" placeholder="{{ __('website.contact_str_one') }}" name="work_street1">
                <input type="text" id="work_street2" class="form-control mt-1" placeholder="{{ __('website.contact_str_two') }}" name="work_street2">
                <input type="text" id="work_postal_code" class="form-control mt-1" placeholder="{{ __('website.contact_postal_code') }}" name="work_postal_code">
                <input type="text" id="work_city" class="form-control mt-1" placeholder="{{ __('website.contact_city') }}" name="work_city">
                <input type="text" id="work_state" class="form-control mt-1" placeholder="{{ __('website.contact_state') }}" name="work_state">
                <input type="text" id="work_country" class="form-control mt-1" placeholder="{{ __('website.contact_country') }}" name="work_country">
            </div>
        </div>
        <button type="submit" class="btn btn-warning mt-3 btn-block" id="save_contact">{{ __('website.save') }}</button>
        </form>
        <button class="btn btn-light mt-3 btn-block" id="section_cancel">{{ __('website.cancel') }}</button>
    </div>
    <!-- deep_link -->
    <div class="col-md-6 col-md-offset-3" id="deep_link_section" style="height:  830px;">
        <div class="d-flex justify-content-center">
            <div class="row" id="platform_col">
            </div>
        </div>
    </div>
    <!-- cands -->
    <div class="col-md-12" id="cands_section" style="height: 2100px;">
        <div class="col-md-6 col-md-offset-3">
            <h3 class="text text-center">Contacts & Social</h3>
        </div>
        <div class="row">
            <div class="col-md-6 mt-5">
                <div class="d-flex justify-content-center">
                    <div class="col-md-12" id="cns_no_data_text"></div>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="col-md-12 text-center">
                        <img id="cns_image" alt="" width="200" height="200">
                    </div>
                </div>
                <div class="card" id="cns_main_card">
                    <div class="card-body" id="cns_card">
                        <div class="d-flex justify-content-center">
                            <div class="col-md-6 text-center" id="namesection">
                                <label for="" class="text text-center">NAME</label>
                                <div class="d-flex justify-content-center">
                                    <p class="text text-center" id="cns_firstname"></p><p class="text text-center" id="cns_lastname"></p>
                                </div>
                            </div>
                            <div class="col-md-6 text-center" id="comsection">
                                <label for="" class="text text-center">Company</label>
                                <p class="text text-center" id="cns_company"></p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="col-md-6 text-center" id="positionsection">
                                <label for="" class="text text-center">Position</label>
                                <p class="text text-center" id="cns_position"></p>
                            </div>
                            <div class="col-md-6 text-center" id="bdsection">
                                <label for="" class="text text-center">Birthday</label>
                                <p class="text text-center" id="cns_birthday"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-5">
                    <div class="col-md-4 col-md-offset-4 text-center">
                        <button class="btn btn-success btn-block" id="seemore_contact_btn">See More</button>
                        <button class="btn btn-outline-danger btn-block" id="disappear_cns"><i class="far fa-times-circle"></i> Hide</button>
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-5">
                    <div class="col-md-12" id="see_more_contact">
                    <div class="card" id="cns_main_card">
                        <div class="card-body" id="cns_card">
                            <div class="d-flex justify-content-center">
                                <div class="col-md-6 text-center" id="mobilesection">
                                    <label for="" class="text text-center">Mobile</label>
                                    <p class="text text-center" id="cns_mobile"></p>
                                </div>
                                <div class="col-md-6 text-center" id="phonesection">
                                    <label for="" class="text text-center">Phone</label>
                                    <p class="text text-center" id="cns_phone"></p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="col-md-6 text-center" id="officesection">
                                    <label for="" class="text text-center">Office</label>
                                    <p class="text text-center" id="cns_office"></p>
                                </div>
                                <div class="col-md-6 text-center" id="personalsection">
                                    <label for="" class="text text-center">Personal</label>
                                    <p class="text text-center" id="cns_personal"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3" id="cns_main_card">
                        <div class="card-body" id="cns_card">
                            <div class="d-flex justify-content-center">
                                <div class="col-md-6 text-center" id="officeemailsection">
                                    <label for="" class="text text-center">Office</label>
                                    <p class="text text-center" id="cns_officeemail"></p>
                                </div>
                                <div class="col-md-6 text-center" id="wbonesection">
                                    <label for="" class="text text-center">Website One</label>
                                    <a href="" target="_blank" class="text text-center" id="cns_webone"></a>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="col-md-6 text-center" id="wbtwosection">
                                    <label for="" class="text text-center">Website Two</label>
                                    <a href="" target="_blank" class="text text-center" id="cns_webtwo"></a>
                                </div>
                                <div class="col-md-6 text-center" id="wbthreesection">
                                    <label for="" class="text text-center">Website Three</label>
                                    <a href="" target="_blank" class="text text-center" id="cns_webthree"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3 homeadd" id="cns_main_card">
                        <div class="card-header text-center">
                            Home Address
                        </div>  
                        <div class="card-body" id="cns_card">
                            <div class="d-flex justify-content-center">
                                <div class="col-md-6 text-center" id="home_strone_section">
                                    <label for="" class="text text-center">Street One</label>
                                    <p class="text text-center" id="cns_strone"></p>
                                </div>
                                <div class="col-md-6 text-center" id="home_strtwo_section">
                                    <label for="" class="text text-center">Street Two</label>
                                    <p class="text text-center" id="cns_strtwo"></p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="col-md-6 text-center" id="home_postal_section">
                                    <label for="" class="text text-center">Postal Code</label>
                                    <p class="text text-center" id="cns_postal"></p>
                                </div>
                                <div class="col-md-6 text-center" id="home_city_section">
                                    <label for="" class="text text-center">City</label>
                                    <p class="text text-center" id="cns_city"></p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="col-md-6 text-center" id="home_state_section">
                                    <label for="" class="text text-center">State</label>
                                    <p class="text text-center" id="cns_state"></p>
                                </div>
                                <div class="col-md-6 text-center" id="home_country_section">
                                    <label for="" class="text text-center">Country</label>
                                    <p class="text text-center" id="cns_country"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3" id="cns_main_card">
                        <div class="card-header text-center">
                            Work Address
                        </div>
                        <div class="card-body" id="cns_card">
                            <div class="d-flex justify-content-center">
                                <div class="col-md-6 text-center" id="work_strone_section">
                                    <label for="" class="text text-center">Street One</label>
                                    <p class="text text-center" id="cns_work_strone"></p>
                                </div>
                                <div class="col-md-6 text-center" id="work_strtwo_section">
                                    <label for="" class="text text-center">Street Two</label>
                                    <p class="text text-center" id="cns_work_strtwo"></p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="col-md-6 text-center" id="work_postal_section">
                                    <label for="" class="text text-center">Postal Code</label>
                                    <p class="text text-center" id="cns_work_postal"></p>
                                </div>
                                <div class="col-md-6 text-center" id="work_city_section">
                                    <label for="" class="text text-center">City</label>
                                    <p class="text text-center" id="cns_work_city"></p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="col-md-6 text-center" id="work_state_section">
                                    <label for="" class="text text-center">State</label>
                                    <p class="text text-center" id="cns_work_state"></p>
                                </div>
                                <div class="col-md-6 text-center" id="work_country_section">
                                    <label for="" class="text text-center">Country</label>
                                    <p class="text text-center" id="cns_work_country"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-5">
                <div class="d-flex justify-content-center">
                    <img src="" alt="" id="link_tree_cns" width="200" height="200">
                </div>
                <div id="link_tree_links_cns">
                    
                </div>
            </div>
        </div>
    </div>
    <!-- link_tree -->
    <div class="col-md-6 col-md-offset-3" id="link_tree_section" style="height: 1500px;">
        <form method="POST" id="link_tree_form">
        <input type="text" name="user_id" value="{{ Auth::user()->id }}" hidden>
        <div class="card">
            <div class="card-body" id="image_card">
                <div class="d-flex justify-content-center">
                    <div class="col-md-6 text-center">
                        <img id="link_img" src="../images/logo.jpeg" class="text-center" width="150" height="150" />
                    </div>
                    <div class="col-md-6">
                        <h4 class="text text-center mt-3">{{ __('website.upload_photo') }}</h4>
                        <label class="label_file btn btn-dark btn-block text">
                            <input type="file" class="link_file_upload" name="link_image" accept="image/*">
                            {{ __('website.select_file') }}
                        </label>
                    </div>
                </div>
            </div>
            <div class="card-body" id="link_above">
                <div class="card-body">
                    <h3 class="text text-center">Link</h3>
                    <div class="link_input_field">
                    </div>
                    <!-- <div class="d-flex justify-content-center mt-2">
                        <div class="col-md-10 col-md-offset-1">
                            <input type="text" class="form-control" name="links_label[]" placeholder="Enter app label">
                            <input type="text" class="form-control mt-3" id="link_input" name="links[]" placeholder="Enter app url">
                        </div>
                    </div> -->
                    <div class="d-flex justify-content-center mt-2">
                        <div class="col-md-10 col-md-offset-1">
                            <button class="btn btn-success add_moree btn-block">{{ __('website.addmore') }}</button>
                            <button class="submit_link_tree btn btn-primary btn-block">{{ __('website.save') }}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
    <!-- url -->
    <div class="col-md-6 col-md-offset-3" id="url_section">
        <form action="" method="POST" id="get_url_form">
        <input type="text" name="user_id" value="{{ Auth::user()->id }}" hidden>
        <div class="card">
            <div class="card-body">
                <h3 class="text text-center">URL</h3>
                <input type="text" class="form-control" name="url" id="get_url" placeholder="{{ __('website.createurl') }}">
                <button type="submit" class="btn btn-dark btn-block mt-3 save_all" id="save_url">{{ __('website.save') }}</button>
            </div>
        </div>
        </form>
    </div>
    <!-- email -->
    <div class="col-md-6 col-md-offset-3" id="email_section">
        <form action="" method="POST" id="email_form">
        <input type="text" name="user_id" value="{{ Auth::user()->id }}" hidden>
        <div class="card">
            <div class="card-body">
                <h3 class="text text-center">Email</h3>
                <input type="text" name="email_address" id="e_address" class="form-control" placeholder="{{ __('website.email_address') }}">
                <input type="text" name="email_subject" id="e_subject" class="form-control mt-2" placeholder="{{ __('website.email_sub') }}">
                <textarea type="text" name="email_body" rows="3" id="e_body" class="form-control mt-2" placeholder="{{ __('website.email_body') }}"></textarea>
                <button type="submit" class="btn btn-dark btn-block mt-3 save_all" id="save_email">{{ __('website.save') }}</button>
            </div>
        </div>
        </form>
    </div>
    <!-- sms -->
    <div class="col-md-6 col-md-offset-3" id="sms_section">
        <form action="" method="POST" id="sms_form">
        <input type="text" name="user_id" value="{{ Auth::user()->id }}" hidden>
        <div class="card">
            <div class="card-body">
                <h3 class="text text-center">SMS</h3>
                <input type="number" name="sms_no" id="sms_no" class="form-control" placeholder="{{ __('website.phonenumber') }}">
                <textarea type="text" name="sms_text" id="sms_text" class="form-control mt-2" placeholder="{{ __('website.sms_body') }}"></textarea>
                <button type="submit" class="btn btn-dark btn-block mt-3 save_all" id="save_sms">{{ __('website.save') }}</button>
            </div>
        </div>
        </form>
    </div>
    <!-- phone -->
    <div class="col-md-6 col-md-offset-3" id="phone_section">
        <form action="" method="POST" id="phone_form">
        <input type="text" name="user_id" value="{{ Auth::user()->id }}" hidden>
        <div class="card">
            <div class="card-body">
                <h3 class="text text-center">Phone</h3>
                <input type="number" class="form-control" placeholder="{{ __('website.phonecallnumber') }}" id="phone_num" name="phone">
                <button type="submit" class="btn btn-dark btn-block mt-3 save_all" id="save_phone">{{ __('website.save') }}</button>
            </div>
        </div>
        </form>
    </div>
    <!-- event -->
    <div class="col-md-6 col-md-offset-3" id="event_section">
        <div class="card" id="e-create">
            <div class="card-body">
                <div class="d-flex justify-content-center">
                    <div class="col">
                        <h3 class="text text-left">Event</h3>
                    </div>
                    <div class="col text-right">
                        <button class="btn btn-dark mt-4" id="eventlists"><i class="fas fa-th-list mr-2"></i>{{ __('website.e_lists') }}</button>
                    </div>
                </div>
                <form action="POST" id="event_form">
                    <input type="text" id="e-userid" name="userid" value="{{ Auth::user()->id }}" hidden>
                    <div class="mt-2">
                        <input type="text" class="form-control eventinput" placeholder="{{ __('website.e_title') }}" name="title">
                    </div>
                    <div class="mt-2">
                        <textarea type="text" rows="5" class="form-control eventinput" placeholder="{{ __('website.e_description') }}" name="description"></textarea>
                    </div>
                    <input data-provide="datepicker" class="form-control eventinput mt-2" placeholder="{{ __('website.e_start_date') }}" name="start_date">
                    <input data-provide="datepicker" class="form-control eventinput mt-2" placeholder="{{ __('website.e_end_date') }}" name="end_date">
                    <div class="md-form md-outline">
                        <input type="time" id="default-picker" class="form-control mt-2" placeholder="Select Start time" name="start_time">
                        <label for="" class="text">{{ __('website.e_start_time') }}</label>
                    </div>
                    <div class="md-form md-outline">
                        <input type="time" id="default-picker" class="form-control mt-2" placeholder="Select End time" name="end_time">
                        <label for="" class="text">{{ __('website.e_end_time') }}</label>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4">
                            <h3 class="text">{{ __('website.select_country') }}</h3>
                            <select name="country" class="countries form-control" id="countryId">
                            <option value="" class="locate_option">Select Country</option>
                        </select>

                            </div>
                            <div class="col-sm-4">
                            <h3 class="text">{{ __('website.select_state') }}</h3>
                            <select name="state" class="states form-control" id="stateId">
                            <option value="" class="locate_option">Select State</option>
                        </select>
                            </div>
                            <div class="col-sm-4">
                            <h3 class="text">{{ __('website.select_city') }}</h3>        
                            <select name="city" class="cities form-control" id="cityId">
                            <option value="" class="locate_option">Select City</option>
                        </select>
                            </div>
                        </div>
                        <div class="mt-2">
                            <label for="" class="text">{{ __('website.address_event') }}</label>
                            <input type="text" class="form-control" id="detail_location">
                        </div>
                        <input type="text" id="country_id" hidden>
                        <input type="text" id="state_id" hidden>
                        <input type="text" id="city_id" hidden>
                        <input type="text" id="detaillocate" hidden>
                        <input type="text" id="location" name="location" hidden>
                    </div>
                    <div class="card event_image mt-2">
                        <div class="card-body text-center">
                            <span class="hiddenFileInput">
                                <input type="file" name="event_image" class="event_upload"/>
                            </span>
                        </div>
                    </div>
                    <!-- <div class="mt-2">
                        <div id="location_pick" style="width: 100%; height: auto;"></div>
                    </div> -->
                    <button class="btn btn-dark mt-2 btn-block eventbtn">{{ __('website.e_create') }}</button>
                </form>
            </div>
        </div>
        <div class="card" id="e-display">
            <div class="card-body">
                <h3 class="text">{{ __('website.e_lists') }}</h3>
                <ul class="list-group" id="e-list-group">
                    
                </ul>
                <div class="d-flex justify-content-center">
                    <div class="col-md-8 col-md-offset-2">
                        <button class="btn btn-light btn-block mt-4" id="close_eventlist">{{ __('website.close') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="space-lift"></div>

<div id="modal_section">
</div>

<div class="modal fade deep" id="save_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="border-bottom: none !important;">
        <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="border-top: none !important;">
        <div class="d-flex justify-content-center">
            <img class="text-center" src="../images/logo.jpeg" alt="" width="100" height="100">
        </div>
        <h3 class="text text-center mt-2" id="save_text"></h3>
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button type="button" class="btn btn-secondary btn-block" id="ok" data-bs-dismiss="modal">Ok</button>
      </div>
    </div>
  </div>
</div>

@section('script')
<script src="../js/create_action.js"></script>
<script>
    var app_label = '{{ __('website.enter_app_label') }}';
    var app_link = '{{ __('website.enter_app_link') }}';
    var remove = '{{ __('website.remove') }}';
    var active_deep = '{{ __('website.active') }}';
    var onlysave = '{{ __('website.save_deep') }}';
    var closebtn = '{{ __('website.close') }}';
    var savethetext = '{{ __('website.savetext') }}';
    var okbtn = '{{ __('website.Ok') }}';
</script>
@endsection
@endsection


