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

<div class="container">
    <div class="col-md-12 mt-5">
        <div class="d-flex justify-content-center">
            <div class="col-md-6 col-md-offset-3" id="create_section">
                <h3 class="text">Create Contents</h3>
                <div class="d-flex justify-content-center text-center mt-4">
                    <div class="col-md-6">
                        <button type="button" id="con_tact" class="btn btn-dark btn-block">
                            <div class="card create_content">
                                <div class="card-body">
                                    <img src="https://i.ibb.co/ys0sstT/contacts.png" alt="" width="50" height="50">
                                    <p class="color_black">Contacts</p>
                                </div>
                            </div>
                        </button>
                    </div>
                    <div class="col-md-6">
                        <button type="button" id="link_tree" class="btn btn-dark btn-block">
                            <div class="card create_content">
                                <div class="card-body">
                                    <img src="https://i.ibb.co/4JrcrZ9/link-tree.png" alt="" width="50" height="50">
                                    <p class="color_black">Links Tree</p>
                                </div>
                            </div>
                        </button>
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-4 text-center">
                    <div class="col-md-6">
                        <button type="button" id="deep_link" class="btn btn-dark btn-block">
                            <div class="card create_content">
                                <div class="card-body">
                                    <img src="https://i.ibb.co/nQmbWpR/deep-link.png" alt="" width="50" height="50">
                                    <p class="color_black">Deep Link</p>
                                </div>
                            </div>
                        </button>
                    </div>
                    <div class="col-md-6">
                        <button type="button" id="cands" class="btn btn-dark btn-block">
                            <div class="card create_content">
                                <div class="card-body">
                                    <img src="https://i.ibb.co/pypdbgC/contactandsocial.png" alt="" width="50"
                                        height="50">
                                    <p class="color_black">Contact & Social</p>
                                </div>
                            </div>
                        </button>
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-4 text-center">
                    <div class="col-md-6">
                        <button type="button" id="url" class="btn btn-dark btn-block">
                            <div class="card create_content">
                                <div class="card-body">
                                    <img src="https://i.ibb.co/yhD08Qb/url.png" alt="" width="50" height="50">
                                    <p class="color_black">URL</p>
                                </div>
                            </div>
                        </button>
                    </div>
                    <div class="col-md-6">
                        <button type="button" id="email_send" class="btn btn-dark btn-block">
                            <div class="card create_content">
                                <div class="card-body">
                                    <img src="https://i.ibb.co/2kVtmRV/email.png" alt="" width="50" height="50">
                                    <p class="color_black">Email</p>
                                </div>
                            </div>
                        </button>
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-4 text-center">
                    <div class="col-md-6">
                        <button type="button" id="sms" class="btn btn-dark btn-block">
                            <div class="card create_content">
                                <div class="card-body">
                                    <img src="https://i.ibb.co/W5jcVJL/sms.png" alt="" width="50" height="50">
                                    <p class="color_black">SMS</p>
                                </div>
                            </div>
                        </button>
                    </div>
                    <div class="col-md-6">
                        <button type="button" id="call" class="btn btn-dark btn-block">
                            <div class="card create_content">
                                <div class="card-body">
                                    <img src="https://i.ibb.co/2WdRt2B/call.png" alt="" width="50" height="50">
                                    <p class="color_black">Call</p>
                                </div>
                            </div>
                        </button>
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-4 text-center">
                    <div class="col-md-6">
                        <button type="button" id="event" class="btn btn-dark btn-block">
                            <div class="card create_content">
                                <div class="card-body">
                                    <img src="https://i.ibb.co/YcD8dkz/event.png" alt="" width="50" height="50">
                                    <p class="color_black">Events</p>
                                </div>
                            </div>
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
            <div class="col-md-6 col-md-offset-3" id="contact_section">
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
                                <label class="label_file btn btn-dark btn-block">
                                    <input type="file" class="file_upload" name="image">
                                    select file
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
                        <input type="text" id="home" class="form-control mt-1" placeholder="Home" name="home">
                        <input type="text" id="office" class="form-control mt-1" placeholder="Office" name="office">
                    </div>

                    <div class="card-body">
                        <h4 class="text text-center">Email & Internet</h4>
                        <input type="text" id="personal_email" class="form-control" placeholder="Personal Email" name="personalemail">
                        <input type="text" id="office_email" class="form-control mt-1" placeholder="Office Email" name="office_email">
                        <input type="text" id="website1" class="form-control mt-1" placeholder="Website1" name="website1">
                        <input type="text" id="website2" class="form-control mt-1" placeholder="Website2" name="website2">
                        <input type="text" id="website3" class="form-control mt-1" placeholder="Website3" name="website3">
                    </div>

                    <div class="card-body">
                        <h4 class="text text-center">Home Address</h4>
                        <input type="text" id="home_street1" class="form-control" placeholder="Street 1" name="home_street1">
                        <input type="text" id="home_street2" class="form-control mt-1" placeholder="Street 2" name="home_street2">
                        <input type="text" id="home_postal_code" class="form-control mt-1" placeholder="Postal Code" name="home_postal_code">
                        <input type="text" id="home_city" class="form-control mt-1" placeholder="City" name="home_city">
                        <input type="text" id="home_state" class="form-control mt-1" placeholder="State" name="state">
                        <input type="text" id="home_country" class="form-control mt-1" placeholder="Country" name="country">
                    </div>

                    <div class="card-body">
                        <h4 class="text text-center">Work Address</h4>
                        <input type="text" id="work_street1" class="form-control" placeholder="Street 1" name="work_street1">
                        <input type="text" id="work_street2" class="form-control mt-1" placeholder="Street 2" name="work_street2">
                        <input type="text" id="work_postal_code" class="form-control mt-1" placeholder="Postal Code" name="work_postal_code">
                        <input type="text" id="work_city" class="form-control mt-1" placeholder="City" name="work_city">
                        <input type="text" id="work_state" class="form-control mt-1" placeholder="State" name="work_state">
                        <input type="text" id="work_country" class="form-control mt-1" placeholder="Country" name="work_country">
                    </div>

                    <div class="card-body" style="background-color: rgb(217,181,81) !important;">
                        <h4 class="appear text-center">Appearance Setting</h4>
                        <div class="d-flex justify-content-center mt-3">
                            <div class="col">
                                <p class="appear">Background Color</p>
                            </div>
                            <div class="col">
                            <input type="color" class="form-control" id="background_color" name="background_color">
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mt-3">
                            <div class="col">
                                <p class="appear">Text Color</p>
                            </div>
                            <div class="col">
                            <input type="color" class="form-control" id="text_color" name="text_color">
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mt-3">
                            <div class="col">
                                <p class="appear">Text Highlight Color</p>
                            </div>
                            <div class="col">
                                <input type="color" class="form-control" id="text_highlight_color" name="text_highlight_color">
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-warning mt-3 btn-block" id="save_contact">Save</button>
                </form>
                <button class="btn btn-light mt-3 btn-block" id="section_cancel">Cancel</button>
            </div>
            <div class="col-md-6 col-md-offset-3" id="deep_link_section">
                <div class="d-flex justify-content-center">
                    <div class="row" id="platform_col">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h3 class="text" id="url_text"></h3>
        <input type="text" name="deep_url" class="form-control" id="url_input"> 
        <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}">
      </div>
      <div class="modal-footer">
        <button class="btn btn-dark mt-2 btn-block" id="just_save">Active</button>
        <button class="btn btn-dark mt-2 btn-block" id="url_form">Save</button>     
        <button type="button" class="btn btn-secondary btn-block" data-bs-dismiss="modal">Close</button> 
    </div>
    </div>
  </div>
</div>

<div class="modal fade" id="save_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        <h3 class="text text-center mt-2">Contact Saved</h3>
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button type="button" class="btn btn-secondary btn-block" id="ok" data-bs-dismiss="modal">Ok</button>
      </div>
    </div>
  </div>
</div>
@section('script')
<script>
$(function() {
    //button_hide_show_play

    $('#contact_section').hide();
    $('#deep_link_section').hide();


    $('#con_tact').on('click', function() {
        $('#create_section').hide();
        $('#contact_section').show();

    });

    $('#section_cancel').on('click', function() {
        $('#create_section').show();
        $('#contact_section').hide();
    }); 

    $('#deep_link').on('click', function() {
        $('#create_section').hide();
        $('#deep_link_section').show();
    });
    
    $('#section_cancel').on('click', function() {
        $('#create_section').show();
        $('#deep_link_section').hide();
    });

    var data_url = '{{ url('api/get_datas') }}';
    var user_id = $('#userid').val();

    //deep_links_ajax
    $.ajax({
           url:data_url,
           method:'POST',
           data:{
                user_id: user_id,  
                request_name: "get_deep_links"
                },
           success:function(response){
                data = response.deep_link;
                $.each(data, function(i, value) {
                    $('#platform_col').append('<div class="col-md-6"><button type="button" class="btn btn-dark btn-block dlink_btn" id="'+ value['id'] +'"><div class="card dlink_main_card value'+ value['id'] +'" id="'+ value['id'] +'"><div class="card-body dlink_card"><div class="dblock d-flex justify-content-center"><img src="' + value['icon']  +'" id="img_social" width="50" height="50"><h5 class="social_link">' + value['name'] +'</h5></div></div></button></div>');
                    // if(value['active'] == "1"){
                    //     var card_id = $('.value' + value['id']);
                    //     console.log(card_id);
                    //     card_id.addClass("active_card");
                    // }
                    $('.dlink_btn').on('click', function(){
                        if(value['id'] == this.id){
                            $('#exampleModal').modal('show');
                            var id = this.id; 
                            $('#url_input').val(value['url']);
                            $('#url_text').text(value['name'] + '  URL');

                            $('#just_save').on("click", function(){
                                var url = $('#url_input').val();
                                var active = 1;
                                var name = value['name'];
                                var post_url = '{{ url('api/create_deep_link') }}';
                                var token =  $('#token').val();
                                $.ajax({
                                url:post_url,
                                method: 'POST',
                                headers: {
                                    'X-CSRF-Token': token 
                                },
                                data:{
                                    user_id: user_id,
                                    url: url,
                                    name: name,
                                    active: active
                                },
                                success:function(response){
                                    link_data = response.data;
                                    $.each(link_data, function(i,link_value){
                                        if(link_value['active'] == 1){
                                            console.log(link_value['id']);
                                            $('#url_input').val(link_value['name']);
                                            $('.value' + link_value['id']).addClass('active_card');
                                            $('#exampleModal').modal('hide');
                                        } else {
                                            $('.value' + link_value['id']).removeClass('active_card');
                                        }
                                    });
                                    console.log(response);
                                }
                                });
                            });

                            $('#url_form').on("click", function(){
                                var url = $('#url_input').val();
                                var active_zero = 0;
                                var name = value['name'];
                                var post_url = '{{ url('api/create_deep_link') }}';
                                var token =  $('#token').val();
                                $.ajax({
                                url:post_url,
                                method: 'POST',
                                headers: {
                                    'X-CSRF-Token': token 
                                },
                                data:{
                                    user_id: user_id,
                                    url: url,
                                    name: name,
                                    active: active_zero
                                },
                                success:function(response){
                                    link_data_two = response.data;
                                    $.each(link_data_two, function(i,link_value){
                                        if(link_value['active'] == 1){
                                            console.log(link_value['id']);
                                            $('#url_input').val(link_value['name']);
                                            $('.value' + link_value['id']).addClass('active_card');
                                            $('#exampleModal').modal('hide');
                                        } 
                                    });
                                    console.log(response);
                                }
                                })
                            });
                        }                        
                    });
                });
           },
           error:function(error){
              console.log(error);
           }
    });

    //get_contacts_ajax
    $.ajax({
        url:data_url,
        method:'POST',
        data:{
            user_id: user_id,  
            request_name: "get_contacts"
        },
        success:function(response){
            console.log(response.data);
            if(response.data['image'] == null){
                alert('helo');
            } else {
                var image_display = response.data['image'].replace('http://vvip9.co/','../');
                $('#img').attr('src', image_display);
                $('.file_upload').change(function(){
                var url = window.URL.createObjectURL(this.files[0]);
                $('#img').attr('src',url);
            });
            }

            
            // $('.file_upload').val(image_keep);
            $('#first_name').val(response.data['personal']['first_name']);
            $('#last_name').val(response.data['personal']['last_name']);
            $('#company').val(response.data['personal']['company']);
            $('#position').val(response.data['personal']['position']);
            $('#birthday').val(response.data['personal']['birthday']);
            $('#mobile').val(response.data['mobile']['mobile']);
            $('#phone').val(response.data['mobile']['phone']);
            $('#office').val(response.data['mobile']['office']);
            $('#personalemail').val(response.data['email_and_internet']['personalemail']);
            $('#office_email').val(response.data['email_and_internet']['office_email']);
            $('#website1').val(response.data['email_and_internet']['website1']);
            $('#website2').val(response.data['email_and_internet']['website2']);
            $('#website3').val(response.data['email_and_internet']['website3']);
            $('#home_street1').val(response.data['home_address']['street1']);
            $('#home_street2').val(response.data['home_address']['street2']);
            $('#home_postal_code').val(response.data['home_address']['postal_code']);
            $('#home_city').val(response.data['home_address']['city']);
            $('#home_state').val(response.data['home_address']['state']);
            $('#home_country').val(response.data['home_address']['country']);
            $('#work_street1').val(response.data['work_address']['street1']);
            $('#work_street2').val(response.data['work_address']['street2']);
            $('#work_postal_code').val(response.data['work_address']['postal_code']);
            $('#work_city').val(response.data['work_address']['city']);
            $('#work_state').val(response.data['work_address']['state']);
            $('#work_country').val(response.data['work_address']['country']);
            $('#background_color').val(response.data['background-color']);
            $('#text_color').val(response.data['text_color']);
            $('#text_highlight_color').val(response.data['text_hightlight_color']);

            //create_contacts_ajax
        }
    });


    $('#upload-contact-form').submit(function(e){
        e.preventDefault();
        var contact_url = '{{ url('api/create_contact') }}';
        var token =  $('#token').val();
        let formData = new FormData(this);

        $.ajax({
            url: contact_url,
            method:'POST',
            contentType: false,
            processData: false,
            headers: {
                    'X-CSRF-Token': token 
            },
            data: formData,
            success:function(response){
                console.log(response.message);
                $('#save_modal').modal('show');
                $('#contact_section').hide();
                $('#ok').on('click', function(){
                    $('#create_section').show();
                });
            }
            });  
    });
});
</script>
@endsection

@endsection