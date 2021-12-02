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
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>
                <input type="text" id="userid" value="{{ Auth::user()->id }}" hidden>
                @else
                <a href="" hidden></a>
                @endif
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
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
        <h3 class="text">Create Contents</h3>
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
                    <p class="color_black">Links Tree</p>
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
                <button type="button" id="cands" class="btn btn-dark btn-block create_content">
                    <img src="https://i.ibb.co/pypdbgC/contactandsocial.png" class="mt-3" alt="" width="50"
                        height="50">
                    <p class="color_black c_s">Contact & Social</p>
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
            <div class="col-md-6">
                <button type="button" id="email_send" class="btn btn-dark btn-block create_content">
                    <img src="https://i.ibb.co/2kVtmRV/email.png" class="mt-3" alt="" width="50" height="50">
                    <p class="color_black">Email</p>
                </button>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-4 text-center">
            <div class="col-md-6">
                <button type="button" id="sms" class="btn btn-dark btn-block create_content">
                    <img src="https://i.ibb.co/W5jcVJL/sms.png" class="mt-3" alt="" width="50" height="50">
                    <p class="color_black">SMS</p>
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
                <button type="button" id="event" class="btn btn-dark btn-block create_content">
                    <img src="https://i.ibb.co/YcD8dkz/event.png" class="mt-3" alt="" width="50" height="50">
                    <p class="color_black">Events</p>
                </button>
            </div>
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
                        <h4 class="text text-center">Upload Photo</h4>
                        <label class="label_file btn btn-dark btn-block text">
                            <input type="file" class="file_upload" name="image" accept="image/*">
                            Select file
                        </label>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <h4 class="text text-center">Personal</h4>
                <input type="text" id="first_name" class="form-control" placeholder="First Name" name="first_name">
                <input type="text" id="last_name" class="form-control mt-1" placeholder="Last Name" name="last_name">
                <input type="text" id="company" class="form-control mt-1" placeholder="Company" name="company">
                <input type="text" id="position" class="form-control mt-1" placeholder="Position" name="position">
                <input type="text" id="birthday" class="form-control mt-1" placeholder="Birthday" name="birthday">
            </div>

            <div class="card-body">
                <h4 class="text text-center">Mobile</h4>
                <input type="text" id="mobile" class="form-control" placeholder="Mobile" name="mobile">
                <input type="text" id="phone" class="form-control mt-1" placeholder="Phone" name="phone">
                <input type="text" id="office" class="form-control mt-1" placeholder="Office" name="office">
            </div>

            <div class="card-body">
                <h4 class="text text-center">Email & Internet</h4>
                <input type="text" id="personal_email" class="form-control" placeholder="Personal Email" name="personalemail">
                <input type="text" id="office_email" class="form-control mt-1" placeholder="Office Email" name="office_email">
                <input type="text" id="website1" class="form-control mt-1" placeholder="Website One" name="website1">
                <input type="text" id="website2" class="form-control mt-1" placeholder="Website Two" name="website2">
                <input type="text" id="website3" class="form-control mt-1" placeholder="Website Three" name="website3">
            </div>

            <div class="card-body">
                <h4 class="text text-center">Home Address</h4>
                <input type="text" id="home_street1" class="form-control" placeholder="Street One" name="home_street1">
                <input type="text" id="home_street2" class="form-control mt-1" placeholder="Street Two" name="home_street2">
                <input type="text" id="home_postal_code" class="form-control mt-1" placeholder="Postal Code" name="home_postal_code">
                <input type="text" id="home_city" class="form-control mt-1" placeholder="City" name="home_city">
                <input type="text" id="home_state" class="form-control mt-1" placeholder="State" name="state">
                <input type="text" id="home_country" class="form-control mt-1" placeholder="Country" name="country">
            </div>

            <div class="card-body">
                <h4 class="text text-center">Work Address</h4>
                <input type="text" id="work_street1" class="form-control" placeholder="Street One" name="work_street1">
                <input type="text" id="work_street2" class="form-control mt-1" placeholder="Street Two" name="work_street2">
                <input type="text" id="work_postal_code" class="form-control mt-1" placeholder="Postal Code" name="work_postal_code">
                <input type="text" id="work_city" class="form-control mt-1" placeholder="City" name="work_city">
                <input type="text" id="work_state" class="form-control mt-1" placeholder="State" name="work_state">
                <input type="text" id="work_country" class="form-control mt-1" placeholder="Country" name="work_country">
            </div>

            <!-- <div class="card-body" style="background-color: rgb(217,181,81) !important;">
                <h4 class="appear text-center">Appearance Setting</h4>
                <div class="d-flex justify-content-center mt-3">
                    <div class="col">
                        <p class="appear">Background</p>
                    </div>
                    <div class="col">
                    <input type="color" class="form-control" id="background_color" name="background_color">
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-3">
                    <div class="col">
                    <p class="appear">Text</p>
                    </div>
                    <div class="col">
                    <input type="color" class="form-control" id="text_color" name="text_color">
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-3">
                    <div class="col">
                        <p class="appear">Text Highlight</p>
                    </div>
                    <div class="col">
                        <input type="color" class="form-control" id="text_highlight_color" name="text_highlight_color">
                    </div>
                </div>
            </div> -->
        </div>
        <button type="submit" class="btn btn-warning mt-3 btn-block" id="save_contact">Save</button>
        </form>
        <button class="btn btn-light mt-3 btn-block" id="section_cancel">Cancel</button>
    </div>
    <div class="col-md-6 col-md-offset-3" id="deep_link_section" style="height:  830px;">
        <div class="d-flex justify-content-center">
            <div class="row" id="platform_col">
            </div>
        </div>
    </div>
    <div class="col-md-6 col-md-offset-3" id="link_tree_section" style="height: 800px;">
        <form method="POST" id="link_tree_form">
        <input type="text" name="user_id" value="{{ Auth::user()->id }}" hidden>
        <div class="card">
            <div class="card-body" id="image_card">
                <div class="d-flex justify-content-center">
                    <div class="col-md-6 text-center">
                        <img id="link_img" src="../images/logo.jpeg" class="text-center" width="150" height="150" />
                    </div>
                    <div class="col-md-6">
                        <h4 class="text text-center mt-3">Upload Logo</h4>
                        <label class="label_file btn btn-dark btn-block text">
                            <input type="file" class="link_file_upload" name="link_image" accept="image/*">
                            Select file
                        </label>
                    </div>
                </div>
            </div>
            <div class="card-body" id="link_above">
                <div class="card-body">
                    <h3 class="text text-center">Link</h3>
                    <div class="link_input_field">
                    </div>
                    <div class="d-flex justify-content-center mt-2">
                        <div class="col-md-10 col-md-offset-1">
                            <input type="text" class="form-control" name="links_label[]" placeholder="Enter app label">
                            <input type="text" class="form-control mt-3" id="link_input" name="links[]" placeholder="Enter app url">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt-2">
                        <div class="col-md-10 col-md-offset-1">
                            <button class="btn btn-success add_moree btn-block">Add More</button>
                            <button class="submit_link_tree btn btn-primary btn-block">Confirm</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
    <div class="col-md-6 col-md-offset-3" id="url_section">
        <form action="" method="POST" id="get_url_form">
        <input type="text" name="user_id" value="{{ Auth::user()->id }}" hidden>
        <div class="card">
            <div class="card-body">
                <h3 class="text text-center">URL</h3>
                <input type="text" class="form-control" name="url" id="get_url">
                <button type="submit" class="btn btn-dark btn-block mt-3 save_all" id="save_url">Save</button>
            </div>
        </div>
        </form>
    </div>
    <div class="col-md-6 col-md-offset-3" id="email_section">
        <form action="" method="POST" id="email_form">
        <input type="text" name="user_id" value="{{ Auth::user()->id }}" hidden>
        <div class="card">
            <div class="card-body">
                <h3 class="text text-center">Email</h3>
                <input type="text" name="email_address" id="e_address" class="form-control" placeholder="email_address">
                <input type="text" name="email_subject" id="e_subject" class="form-control mt-2" placeholder="email_subject">
                <textarea type="text" name="email_body" rows="3" id="e_body" class="form-control mt-2" placeholder="email_body"></textarea>
                <button type="submit" class="btn btn-dark btn-block mt-3 save_all" id="save_email">Save</button>
            </div>
        </div>
        </form>
    </div>
    <div class="col-md-6 col-md-offset-3" id="sms_section">
        <form action="" method="POST" id="sms_form">
        <input type="text" name="user_id" value="{{ Auth::user()->id }}" hidden>
        <div class="card">
            <div class="card-body">
                <h3 class="text text-center">SMS</h3>
                <input type="number" name="sms_no" id="sms_no" class="form-control" placeholder="Sms Number">
                <textarea type="text" name="sms_text" id="sms_text" class="form-control mt-2" placeholder="Sms Text"></textarea>
                <button type="submit" class="btn btn-dark btn-block mt-3 save_all" id="save_sms">Save</button>
            </div>
        </div>
        </form>
    </div>
    <div class="col-md-6 col-md-offset-3" id="phone_section">
        <form action="" method="POST" id="phone_form">
        <input type="text" name="user_id" value="{{ Auth::user()->id }}" hidden>
        <div class="card">
            <div class="card-body">
                <h3 class="text text-center">Phone</h3>
                <input type="number" class="form-control" id="phone_num" name="phone">
                <button type="submit" class="btn btn-dark btn-block mt-3 save_all" id="save_phone">Save</button>
            </div>
        </div>
        </form>
    </div>
</div>
<!-- <div class="modal fade" id="deep_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="modal_url_input">
            <h3 class="text" id="url_text"></h3>
            <input type="text" name="deep_url" class="form-control" id="url_input" > 
            <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}">
      </div>
      <div class="modal-footer">
        <button class="btn btn-dark mt-2 btn-block justsave" id="just_save">Active</button>
        <button class="btn btn-dark mt-2 btn-block urlform" id="url_form">Save</button>     
        <button type="button" class="btn btn-secondary btn-block" data-bs-dismiss="modal">Close</button> 
    </div>
    </div>
  </div>
</div> -->

<div id="modal_section">
</div>

<div class="modal fade deep" id="save_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
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
@endsection


