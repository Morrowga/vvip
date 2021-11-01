@extends('layouts.app')

@section('content')

<input type="text" id="request" value="{{ $data_module->request_name }}" hidden>
<input type="text" id="user_id" value="{{ $data_module->user_id }}" hidden>
<input type="text" id="self_request" value="{{ $data_module->self_request_name }}" hidden>
<iframe id="ifrm" src="" hidden></iframe>

<div class="d-flex justify-content-center">
    <img src="../images/logo.jpeg" alt="" width="250" height="250">
</div>
<div class="container">
    <div class="col-md-12">
        <div class="data_view">
            
        </div>
    </div>
</div>

@section('script')
<script>
    var request_url = '{{ url('api/get_datas') }}';
    var userid = $('#user_id').val();
    var request_name = $('#request').val();
    $.ajax({
        url: request_url,
        data: {
            user_id:userid,
            request_name: request_name,
        },  
        type: 'POST',
        success: function(response){
            if(response.request == "contacts"){
                    var image_display = response.data['image'].replace('http://vvip9.co/','../');
                    $('.data_view').append(`<div class="d-flex justify-content-center">
                    <div class="col-md-6" style="text-align:center;">
                        <img src="`+ image_display +`" alt="" width="200"  height="200" style="border-radius: 50%">
                    </div>
                    <div class="col-md-6">
                        <h3 class="text text-center">Personal</h3>
                        <p class="text">First Name :`+ response.data['personal']['first_name'] +` </p>
                        <p class="text">Last Name : `+ response.data['personal']['last_name'] +`</p>
                        <p class="text">Company : `+ response.data['personal']['company'] +`</p>
                        <p class="text">Position : `+ response.data['personal']['position'] +`</p>
                        <p class="text">Birthday : `+ response.data['personal']['birthday'] +`</p>
                    </div>
                </div>
                <hr>
                <div class="d-flex justify-content-center">
                    <div class="col-md-6">
                        <h3 class="text text-center">Home Address</h3>
                        <p class="text">Street One : `+ response.data['home_address']['street_one'] +`</p>
                        <p class="text">Street Two : `+ response.data['home_address']['street_two'] +`</p>
                        <p class="text">Postal Code : `+ response.data['home_address']['postal_code'] +`</p>
                        <p class="text">City : `+ response.data['home_address']['city'] +`</p>
                        <p class="text">State : `+ response.data['home_address']['state'] +`</p>
                        <p class="text">Country : `+ response.data['home_address']['country'] +`</p>
                    </div>
                    <div class="col-md-6">
                        <h3 class="text text-center">Work Address</h3>
                        <p class="text">Street One : `+ response.data['work_address']['street_one'] +`</p>
                        <p class="text">Street Two : `+ response.data['work_address']['street_two'] +`</p>
                        <p class="text">Postal Code : `+ response.data['work_address']['postal_code'] +`</p>
                        <p class="text">City : `+ response.data['work_address']['city'] +`</p>
                        <p class="text">State : `+ response.data['work_address']['state'] +`</p>
                        <p class="text">Country : `+ response.data['work_address']['country'] +`</p>
                    </div>
                </div>
                <hr>
                <div class="d-flex justify-content-center">
                    <div class="col-md-6">
                        <h3 class="text text-center">Mobile</h3>
                        <p class="text">Mobile : `+ response.data['mobile']['mobile'] +`</p>
                        <p class="text">Phone : `+ response.data['mobile']['phone'] +`</p>
                        <p class="text">Office : `+ response.data['mobile']['office'] +`</p>
                    </div>
                    <div class="col-md-6">
                        <h3 class="text text-center">Email and Internet</h3>
                        <p class="text">Personal Email : `+ response.data['email_and_internet']['personalemail'] +`</p>
                        <p class="text">Office Email : `+ response.data['email_and_internet']['office_email'] +`</p>
                        <p class="text">Website One : <a href="https://`+ response.data['email_and_internet']['website_one'] +`" target="_blank">`+ response.data['email_and_internet']['website_one'] +`</a></p>
                        <p class="text">Website Two : <a href="https://`+ response.data['email_and_internet']['website_two'] +`" target="_blank">`+ response.data['email_and_internet']['website_two'] +`</a></p>
                        <p class="text">Website Three : <a href="https://`+ response.data['email_and_internet']['website_three'] +`" target="_blank">`+ response.data['email_and_internet']['website_three'] +`</a></p>
                    </div>
                </div>`)
            } else if(response.request == "deep_link"){
                data_view = response.deep_link;
                $.each(data_view, function(i,value){ 
                    if(value['active'] == 1){
                        // var isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
                        // if (isMobile) {
                            var host = value['url'].replace('https://','');
                            var package = value['app_package'];
                            if(package == 'com.facebook.katana'){
                                console.log(value['url']);
                                var app_url = "facebook://user?username=nhyoe.thwayyaung";
                                window.location.replace(app_url);
                            } else {
                                const app_url = "intent://"+ host +"#Intent;scheme=https;package="+ package +";end";
                                window.location.replace(app_url);
                            }
                        // }
                    }
                });
            } else if(response.request == "eusp"){
                    if($('#self_request').val() == "url_active"){
                       window.location = "https://" + response.data['url'];
                    } else if($('#self_request').val() == "email_active"){
                        $('.data_view').append(`<p class="text text-center">`+ response.data['email_address'] +`</p>
                                                <p class="text text-center">`+ response.data['email_subject'] +`</p>
                                                <p class="text text-center">`+ response.data['email_body'] +`</p>`
                        );
                    }
                } 
            }
        });
</script>
@endsection
@endsection


