@extends('layouts.app')

@section('content')

<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm" style="background-color: #000 !important;">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
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
                    <!-- <div class="col-md-6">
                        <button type="button" id="personal" class="btn btn-dark btn-block">
                            <div class="card create_content">
                                <div class="card-body">
                                    <img src="https://cdn-icons.flaticon.com/png/128/3948/premium/3948048.png?token=exp=1635146332~hmac=b5126d32ac78751b9a7842de1421ebbd"
                                        alt="" width="50" height="50">
                                    <p class="color_black">Personal Se</p>
                                </div>
                            </div>
                        </button>
                    </div> -->
                </div>
            </div>
            <div class="col-md-6 col-md-offset-3" id="contact_section">
                <h3 class="text">Contacts</h3>
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-center">
                            <div class="col-md-6">
                                <img src="https://i.ibb.co/T0mh4FK/logobb.png" alt="">
                            </div>
                            <div class="col-md-6">
                                <h4 class="text text-center">Upload Photo</h4>
                                <button class="btn btn-dark btn-block">Upload</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h4 class="text text-center">Personal</h4>
                        <input type="text" class="form-control" placeholder="First Name">
                        <input type="text" class="form-control mt-1" placeholder="Last Name">
                        <input type="text" class="form-control mt-1" placeholder="Company">
                        <input type="text" class="form-control mt-1" placeholder="Position">
                        <input type="text" class="form-control mt-1" placeholder="Birthday">
                    </div>

                    <div class="card-body">
                        <h4 class="text text-center">Mobile</h4>
                        <input type="text" class="form-control" placeholder="Mobile">
                        <input type="text" class="form-control mt-1" placeholder="Home">
                        <input type="text" class="form-control mt-1" placeholder="Office">
                    </div>

                    <div class="card-body">
                        <h4 class="text text-center">Email & Internet</h4>
                        <input type="text" class="form-control" placeholder="Personal Email">
                        <input type="text" class="form-control mt-1" placeholder="Office">
                        <input type="text" class="form-control mt-1" placeholder="Website1">
                        <input type="text" class="form-control mt-1" placeholder="Website2">
                        <input type="text" class="form-control mt-1" placeholder="Website3">
                    </div>

                    <div class="card-body">
                        <h4 class="text text-center">Home Address</h4>
                        <input type="text" class="form-control" placeholder="Street 1">
                        <input type="text" class="form-control mt-1" placeholder="Street 2">
                        <input type="text" class="form-control mt-1" placeholder="Postal Code">
                        <input type="text" class="form-control mt-1" placeholder="City">
                        <input type="text" class="form-control mt-1" placeholder="State">
                        <input type="text" class="form-control mt-1" placeholder="Country">
                    </div>

                    <div class="card-body">
                        <h4 class="text text-center">Work Address</h4>
                        <input type="text" class="form-control" placeholder="Street 1">
                        <input type="text" class="form-control mt-1" placeholder="Street 2">
                        <input type="text" class="form-control mt-1" placeholder="Postal Code">
                        <input type="text" class="form-control mt-1" placeholder="City">
                        <input type="text" class="form-control mt-1" placeholder="State">
                        <input type="text" class="form-control mt-1" placeholder="Country">
                    </div>

                    <div class="card-body" style="background-color: rgb(217,181,81) !important;">
                        <h4 class="appear text-center">Appearance Setting</h4>
                        <div class="d-flex justify-content-center mt-3">
                            <div class="col">
                                <p class="appear">Background Color</p>
                            </div>
                            <div class="col">
                            <input type="color" class="form-control">
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mt-3">
                            <div class="col">
                                <p class="appear">Text Color</p>
                            </div>
                            <div class="col">
                            <input type="color" class="form-control">
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mt-3">
                            <div class="col">
                                <p class="appear">Text Highlight Color</p>
                            </div>
                            <div class="col">
                            <input type="color" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-light mt-3 btn-block" id="section_cancel">Cancel</button>
                <button class="btn btn-warning mt-3 btn-block">Save</button>
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
@section('script')
<script>
$(function() {
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

    
});
</script>
@endsection

@endsection