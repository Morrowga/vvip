@extends('layouts.user_display')

@section('content')

<input type="text" id="request" value="{{ $data_module->request_name }}" hidden>
<input type="text" id="user_id" value="{{ $data_module->user_id }}" hidden>
<input type="text" id="self_request" value="{{ $data_module->self_request_name }}" hidden>

<div class="d-flex justify-content-center">
    <img src="../images/logo.jpeg" alt="" width="250" height="250" id="image_hide">
</div>

<a href="" id="phone_call" hidden></a>
<a href="" id="send_sms" hidden></a>
<a href="" id="send_email" hidden></a>

<div class="container" id="contact_display">
    <div class="col-md-12">
        <div class="card" id="card_background">
            <div class="card-body">
                <div class="data_view">
                
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container" id="link_tree_display">
    <div class="card" id="link_tree_card">
        <div class="card-body">
            <div class="col-md-12 d-flex justify-content-center">
                <img src="" alt="" width="300" height="300" id="link_tree_img" style="border-radius: 50%;">
            </div>
            <div class="d-flex justify-content-center mt-3">
                <div class="col-md-6 col-md-offset-3">
                    <a href="" class="btn btn-light btn-block link_tree_d_btn" id="link_one" target="_blank"></a>
                    <a href="" class="btn btn-light btn-block link_tree_d_btn" id="link_two"  target="_blank"></a>
                    <a href="" class="btn btn-light btn-block link_tree_d_btn" id="link_three"  target="_blank"></a>
                    <a href="" class="btn btn-light btn-block link_tree_d_btn" id="link_four"  target="_blank"></a>
                    <a href="" class="btn btn-light btn-block link_tree_d_btn" id="link_five"  target="_blank"></a>
                </div>
            </div>
        </div>
    </div>
</div>

@section('script')
<script>
    $('#contact_display').hide();
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
                    $('#contact_display').show();
                    var image_display = response.data['image'].replace('http://vvip9.co/','../');
                    $('.data_view').append(`<div class="d-flex justify-content-center row">
                    <div class="col-md-6" style="text-align:center;">
                        <img src="`+ image_display +`" alt="" width="200"  height="200" style="border-radius: 50%">
                    </div>
                    <div class="col-md-6 text-center mt-2">
                        <p class="text_color" id="fn">First Name :`+ response.data['personal']['first_name'] +` </p>
                        <p class="text_color" id="ln">Last Name : `+ response.data['personal']['last_name'] +`</p>
                        <p class="text_color" id="company">Company : `+ response.data['personal']['company'] +`</p>
                        <p class="text_color" id="position">Position : `+ response.data['personal']['position'] +`</p>
                        <p class="text_color" id="birthday">Birthday : `+ response.data['personal']['birthday'] +`</p>
                    </div>
                </div>
                <div class="d-flex justify-content-center row">
                    <div class="col-md-6 text-center">
                        <p class="text_color" id="str_one">Street One ( Home ) : `+ response.data['home_address']['street_one'] +`</p>
                        <p class="text_color" id="str_two">Street Two ( Home ) : `+ response.data['home_address']['street_two'] +`</p>
                        <p class="text_color" id="postal_code">Postal Code ( Home ) : `+ response.data['home_address']['postal_code'] +`</p>
                        <p class="text_color" id="city">City ( HOME ) : `+ response.data['home_address']['city'] +`</p>
                        <p class="text_color" id="state">State ( HOME ) : `+ response.data['home_address']['state'] +`</p>
                        <p class="text_color" id="country">Country ( Home ) : `+ response.data['home_address']['country'] +`</p>
                    </div>
                    <div class="col-md-6 text-center">
                        <p class="text_color" id="work_str_one">Street One ( Work ) : `+ response.data['work_address']['street_one'] +`</p>
                        <p class="text_color" id="work_str_two"> Street Two ( Work ) : `+ response.data['work_address']['street_two'] +`</p>
                        <p class="text_color" id="work_postal_code">Postal Code ( Work ) : `+ response.data['work_address']['postal_code'] +`</p>
                        <p class="text_color" id="work_city">City ( Work ): `+ response.data['work_address']['city'] +`</p>
                        <p class="text_color" id="work_state">State ( Work ) : `+ response.data['work_address']['state'] +`</p>
                        <p class="text_color" id="work_country">Country ( Work ) : `+ response.data['work_address']['country'] +`</p>
                    </div>
                </div>
                <div class="d-flex justify-content-center row">
                    <div class="col-md-6 text-center">
                        <p class="text_color" id="mobile">Mobile : `+ response.data['mobile']['mobile'] +`</p>
                        <p class="text_color" id="phone_no">Phone : `+ response.data['mobile']['phone'] +`</p>
                        <p class="text_color" id="office">Office : `+ response.data['mobile']['office'] +`</p>
                    </div>
                    <div class="col-md-6 text-center">
                        <p class="text_color" id="email">Personal Email : `+ response.data['email_and_internet']['personalemail'] +`</p>
                        <p class="text_color" id="office_email">Office Email : `+ response.data['email_and_internet']['office_email'] +`</p>
                        <p class="text_color" id="web_one">Website One : <a href="https://`+ response.data['email_and_internet']['website_one'] +`" target="_blank">`+ response.data['email_and_internet']['website_one'] +`</a></p>
                        <p class="text_color" id="web_two">Website Two : <a href="https://`+ response.data['email_and_internet']['website_two'] +`" target="_blank">`+ response.data['email_and_internet']['website_two'] +`</a></p>
                        <p class="text_color" id="web_three">Website Three : <a href="https://`+ response.data['email_and_internet']['website_three'] +`" target="_blank">`+ response.data['email_and_internet']['website_three'] +`</a></p>
                    </div>
                </div>`);

                $('#card_background').attr('style', 'background-color:' + response.data['background_color'] + '!important;');

                $('.text_color').attr('style', 'color:' + response.data['text_color'] + '!important; text-shadow: 0px 3px 10px' + 
                response.data['text_highlight_color'] + '; font-family: "Britannic Bold"; font-size: 19px; font-weight: 900;');

                if(response.data['personal']['first_name'] == null){
                    $('#fn').hide();
                } 
                if(response.data['personal']['last_name'] == null){
                    $('#ln').hide();
                }

                if(response.data['personal']['company'] == null){
                    $('#company').hide();
                }

                if(response.data['personal']['position'] == null){
                    $('#position').hide();
                }

                if(response.data['personal']['birthday'] == null){
                    $('#birthday').hide();
                }

                if(response.data['home_address']['street_one'] == null){
                    $('#str_one').hide();
                }
                
                if(response.data['home_address']['street_two'] == null){
                    $('#str_two').hide();
                }

                if(response.data['home_address']['postal_code'] == null){
                    $('#postal_code').hide();
                }

                if(response.data['home_address']['city'] == null){
                    $('#city').hide();
                }
                
                if(response.data['home_address']['state'] == null){
                    $('#state').hide();
                }

                if(response.data['home_address']['country'] == null) {
                    $('#country').hide();
                }

                if(response.data['work_address']['street_one'] == null){
                    $('#work_str_one').hide();
                }
                
                if(response.data['work_address']['street_two'] == null){
                    $('#work_str_two').hide();
                }

                if(response.data['work_address']['postal_code'] == null){
                    $('#work_postal_code').hide();
                }

                if(response.data['work_address']['city'] == null){
                    $('#work_city').hide();
                }
                
                if(response.data['work_address']['state'] == null){
                    $('#work_state').hide();
                }

                if(response.data['work_address']['country'] == null) {
                    $('#work_country').hide();
                }

                if(response.data['mobile']['mobile'] == null){
                    $('#mobile').hide();
                }

                if(response.data['mobile']['mobile'] == null){
                    $('#phone_no').hide();
                }

                if(response.data['mobile']['office'] == null){
                    $('#office').hide();
                }
                
                if(response.data['email_and_internet']['personalemail'] == null){
                    $('#email').hide();
                }

                if(response.data['email_and_internet']['office_email'] == null){
                    $('#office_email').hide();
                }

                if(response.data['email_and_internet']['website_one'] == null){
                    $('#web_one').hide();
                }

                if(response.data['email_and_internet']['website_two'] == null){
                    $('#web_two').hide();
                }

                if(response.data['email_and_internet']['website_three'] == null){
                    $('#web_three').hide();
                }
            } else if(response.request == "deep_link"){
                data_view = response.deep_link;
                $.each(data_view, function(i,value){ 
                    if(value['active'] == 1){
                        var isAndroid = /Android/i.test(navigator.userAgent);
                        var isIOS = /iPhone|iPad|iPod/i.test(navigator.userAgent);
                        if (isAndroid) {
                            var host = value['url'];
                            var package = value['app_package'];
                            const app_url = "intent://"+ value['url'] +"#Intent;scheme=https;package="+ package +";end";
                            window.location.replace(app_url);
                        } else if(isIOS){
                            window.location.replace("fb://nhyoe.thwayyaung/"); 
                            // setTimeout(function () {
                            //     window.location.replace("https://itunes.apple.com/app/facebook/id12345678"); 
                            // }, 2000);
                        }
                    // window.location.replace("facebook://" + host);
                    }
                });
            } else if(response.request == "eusp"){
                    if($('#self_request').val() == "url_active"){
                       window.location = "https://" + response.data['url'];
                    } else if($('#self_request').val() == "email_active"){
                        var email_address = response.data['email_address'];
                        var email_subject = response.data['email_subject'];
                        var email_body = response.data['email_body'];
                        var isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
                        // if(isMobile){
                        //     var send_email_to = "mail.google.com/mail/?view=cm&fs=1&to="+ email_address +"&su="+ email_subject +"&body=" + email_body;
                        //     var inMobile = "intent://" + send_email_to +"#Intent;scheme=https;package=com.google.android.gm;end";
                        //     window.location.replace(inMobile);
                        // } else {
                            var send_email_to = "https://mail.google.com/mail/?view=cm&fs=1&to="+ email_address +"&su="+ email_subject +"&body=" + email_body;
                            $('#send_email').attr('href', send_email_to);
                            window.location.href = $('#send_email').attr('href');
                        // }
                    } else if($('#self_request').val() == "call_active"){
                        var tele = "tel:" + response.data['phone'];
                        $('#phone_call').attr('href', tele);
                        window.location.href = $('#phone_call').attr('href');
                    } else if($('#self_request').val() == "sms_active"){
                        var sms_no = response.data['sms_no'];
                        var sms_text = response.data['sms_text'];
                        var send_sms_to = "sms://"+ sms_no + ";?&body=" + sms_text;
                        $('#send_sms').attr('href', send_sms_to);
                        window.location.href = $('#send_sms').attr('href');
                    } 
                }  else if(response.request == "get_link_trees"){
                    $('#image_hide').hide();
                    $('#link_tree_card').attr('style', 'background-color:' + response.data['background_color'] + ';');
                    $('.link_tree_d_btn').attr('style', 'color:' + response.data['text_color'] + '!important; text-shadow: 0px 3px 10px' + 
                    response.data['text_highlight_color'] + ';');
                    if(response.data['link_image'] == null){
                        $('#link_tree_img').hide(); 
                    } else {
                        $('#link_tree_img').attr('src', '../' + response.data['link_image']);
                    }

                    if(response.data['link_one_url'] == null || response.data['link_one_label'] == null){
                        $('#link_one').hide();
                    } else {
                        $('#link_one').attr('href', response.data['link_one_url']).text(response.data['link_one_label']);
                    }

                    if(response.data['link_two_url'] == null || response.data['link_two_label'] == null){
                        $('#link_two').hide();
                    } else {
                        $('#link_two').attr('href', response.data['link_two_url']).text(response.data['link_two_label']);
                    }

                    if(response.data['link_three_url'] == null || response.data['link_three_label'] == null){
                        $('#link_three').hide();
                    } else {
                        $('#link_three').attr('href', response.data['link_three_url']).text(response.data['link_three_label']);
                    }

                    if(response.data['link_four_url'] == null || response.data['link_four_label'] == null){
                        $('#link_four').hide();
                    } else {
                        $('#link_four').attr('href', response.data['link_four_url']).text(response.data['link_four_label']);
                    }

                    if(response.data['link_five_url'] == null || response.data['link_five_label'] == null){
                        $('#link_five').hide();
                    } else {
                        $('#link_five').attr('href', response.data['link_five_url']).text(response.data['link_five_label'])
                    }

                   console.log(response.data);
                }
            }
        });
</script>
@endsection
@endsection


