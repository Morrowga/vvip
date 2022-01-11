$('#deeplink').hide();
$('#email_click').hide();
$('#link_tree_display').hide();
$('#contact_display').hide();
$('#event_display').hide();
$('#cns_backbg').hide();
var request_url = 'api/get_datas';
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
                $('#image_hide').hide();
                $('#contact_display').show();
                var image_display = response.data['image'].replace('https://vvip9.co/','../');
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

            if(response.data['background_color'] != null){
                $('#card_background').attr('style', 'background-color:' + response.data['background_color'] + '!important;');

                $('.text_color').attr('style', 'color:' + response.data['text_color'] + '!important; text-shadow: 0px 3px 10px' + 
                response.data['text_highlight_color'] + '; font-family: "Britannic Bold"; font-size: 19px; font-weight: 900;');
            } else {
                $('#card_background').attr('style', 'background-color:rgb(217,181,81);');
                $('.text_color').attr('style', 'color: #fff !important; text-shadow: 0px 3px 10px #000 !important;');
            }
        

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
            $('#dpluse').attr('style', 'margin-top: 200px;');
            data_view = response.deep_link;
            $.each(data_view, function(i,value){ 
                if(value['active'] == 1){
                    var isIOS = /iPhone|iPad|iPod/i.test(navigator.userAgent);
                    var isAndroid = /android/i.test(navigator.userAgent);  
                    // var isDesktop = /webos/i.test(navigator.userAgent.toLowerCase());
                    // if (isIOS) {
                        var host = value['url'];
                        // var package = value['app_package'];
                        if(value['name'] == "Facebook"){
                            if(isIOS){
                                var url = "fb://profile/?id=" + host;
                                var store_url = "https://itunes.apple.com/app/facebook/id284882215";
                                // window.location = url;// fb://method/call..
                                window.location = url;
                                setTimeout(function(){
                                    if(confirm('Do you already have Facebook or do you want to go download it?')){
                                    window.location = store_url;
                                    } else {
                                        alert('refresh the page to see the resut again.');
                                    }
                                }, 300);
                            } else if(isAndroid){
                                var url = "intent://profile/"+ host +"#Intent;package=com.facebook.katana;scheme=fb;end";
                                $('#deeplink').attr('href', url).show();
                            } else {    
                                var url = "https://www.facebook.com/" + host;
                                window.location.replace(url); 
                            }                  
                        } else if(value['name'] == "Instagram"){
                            if(isIOS){
                                var url = "instagram://user?username=" + host;
                                var store_url = "https://itunes.apple.com/app/instagram/id389801252";
                                // window.location = url;// fb://method/call..
                                window.location = url;
                                setTimeout(function(){
                                    if(confirm('Do you already have Instagram or do you want to go download it?')){
                                    window.location = store_url;
                                    } else {
                                        alert('refresh the page to see the resut again.');
                                    }
                                }, 300);
                            }  else if(isAndroid){
                                var url = "intent://instagram.com/" + host +"#Intent;package=com.instagram.android;scheme=https;end";
                                $('#deeplink').attr('href', url).show();
                            } else {
                                var url = "https://www.instagram.com/" + host;
                                window.location.replace(url);
                            }
                        } else if(value['name'] == "Youtube"){
                            if(isIOS){
                                var url = "vnd.youtube://" + host;
                                var store_url = "https://itunes.apple.com/app/youtube-watch-listen-stream/id544007664";
                                // window.location = url;// fb://method/call..
                                window.location = url;
                                setTimeout(function(){
                                    if(confirm('Do you already have Youtube or do you want to go download it?')){
                                    window.location = store_url;
                                    } else {
                                        alert('refresh the page to see the resut again.');
                                    }
                                }, 300);
                            } else if(isAndroid){
                                var url = "intent://youtube.com/" + host +"#Intent;package=com.google.android.youtube;scheme=https;end";
                                $('#deeplink').attr('href', url).show();
                            } else {
                                var url = "https://www.youtube.com/" + host;
                                window.location.replace(url);
                            }
                        } else if(value['name'] == "Tiktok"){
                            if(isIOS){
                                var url = "snssdk1233://user/profile/" + host;
                                var store_url = "https://itunes.apple.com/app/tiktok-make-your-day/id835599320";
                                // window.location = url;// fb://method/call..
                                window.location = url;
                                setTimeout(function(){
                                    if(confirm('Do you already have Tiktok or do you want to go download it?')){
                                    window.location = store_url;
                                    } else {
                                        alert('refresh the page to see the resut again.');
                                    }
                                }, 300);                                    
                            } else if(isAndroid){
                                var url = "intent://user/profile/" + host +"#Intent;package=com.zhiliaoapp.musically;scheme=snssdk1233;end";
                                $('#deeplink').attr('href', url).show();
                            } else {
                                var url = "https://www.tiktok.com/" + host;
                                window.location.replace(url);
                            }
                        } else if(value['name'] == "Pinterest"){
                            if(isIOS){
                                var url = "pinterest://user/" + host;
                                var store_url = "https://itunes.apple.com/app/pinterest/id429047995";
                                // window.location = url;// fb://method/call..
                                window.location = url;
                                setTimeout(function(){
                                    if(confirm('Do you already have Pinterest or do you want to go download it?')){
                                    window.location = store_url;
                                    } else {
                                        alert('refresh the page to see the resut again.');
                                    }
                                }, 300);  
                            } else if(isAndroid){
                                var url = "intent://www.pinterest.com/" + host +"#Intent;package=com.pinterest;scheme=https;end";
                                $('#deeplink').attr('href', url).show();
                            } else {
                                var url = "https://www.pinterest.com/" + host;
                                window.location.replace(url);
                            }
                        } else if(value['name'] == "LinkedIn"){
                            if(isIOS){
                                var url = "linkedin://" + host;
                                var store_url = "https://itunes.apple.com/app/linkedin-network-job-finder/id288429040";
                                // window.location = url;// fb://method/call..
                                window.location = url;
                                setTimeout(function(){
                                    if(confirm('Do you already have LinkedIn or do you want to go download it?')){
                                    window.location = store_url;
                                    } else {
                                        alert('refresh the page to see the resut again.');
                                    }
                                }, 300); 
                            } else if(isAndroid){
                                var url = "intent://linkedin.com/" + host + "#Intent;package=com.linkedin.android;scheme=https;end";
                                $('#deeplink').attr('href', url).show();
                             } else {
                                var url = "https://www.linkedin.com/" + host;
                                window.location.replace(url);
                            } 
                        } else if(value['name'] == "Tripadvisor"){
                            if(isIOS){
                                var url = "tripadvisor://www.tripadvisor.com/" + host;
                                var store_url = "https://itunes.apple.com/app/tripadvisor-plan-book-trips/id284876795";
                                // window.location = url;// fb://method/call..
                                window.location = url;
                                setTimeout(function(){
                                    if(confirm('Do you already have Tripadvisor or do you want to go download it?')){
                                    window.location = store_url;
                                    } else {
                                        alert('refresh the page to see the resut again.');
                                    }
                                }, 300); 
                            } else if(isAndroid){
                                var url = "intent://tripadvisor.com/" + host + "#Intent;package=com.tripadvisor.tripadvisor;scheme=https;end";
                                $('#deeplink').attr('href', url).show();
                             } else {
                                var url = "https://www.tripadvisor.com/" + host;
                                window.location.replace(url);
                            }
                        } else if(value['name'] == "Zoom"){
                            if(isIOS){
                                var url = "zoomus://" + host;
                                var store_url = "https://itunes.apple.com/app/zoom-cloud-meetings/id546505307";
                                // window.location = url;// fb://method/call..
                                window.location = url;
                                setTimeout(function(){
                                    if(confirm('Do you already have Zoom or do you want to go download it?')){
                                    window.location = store_url;
                                    } else {
                                        alert('refresh the page to see the resut again.');
                                    }
                                }, 300); 
                            } else if(isAndroid){
                                var url = "intent://" + host + "#Intent;package=us.zoom.videomeetings;scheme=https;end";
                                $('#deeplink').attr('href', url).show();
                             } else {
                                var url = "https://" + host;
                                window.location.replace(url);
                            }
                        } else if(value['name'] == "Google Maps"){
                            if(isIOS){
                                var url = "comgooglemapsurl://maps.google.com/?q=" + host;
                                var store_url = "https://itunes.apple.com/app/google-maps/id585027354";
                                // window.location = url;// fb://method/call..
                                window.location = url;
                                setTimeout(function(){
                                    if(confirm('Do you already have Google Maps or do you want to go download it?')){
                                    window.location = store_url;
                                    } else {
                                        alert('refresh the page to see the resut again.');
                                    }
                                }, 300); 
                            }  else if(isAndroid){
                                var url = "intent://" + host + "#Intent;package=com.google.android.apps.maps;scheme=https;end";
                                $('#deeplink').attr('href', url).show();
                             } else {
                                var url = "https://www." + host;
                                window.location.replace(url);
                            }
                        } else if(value['name'] == "Vimeo"){
                            if(isIOS){
                                var url = "vimeo://app.vimeo.com/users/" + host;
                                var store_url = "https://itunes.apple.com/app/vimeo-unlock-video-power/id425194759";
                                // window.location = url;// fb://method/call..
                                window.location = url;
                                setTimeout(function(){
                                    if(confirm('Do you already have Vimeo or do you want to go download it?')){
                                    window.location = store_url;
                                    } else {
                                        alert('refresh the page to see the resut again.');
                                    }
                                }, 300); 
                            }  else if(isAndroid){
                                var url = "intent://vimeo.com/" + host + "#Intent;package=com.vimeo.android.videoapp;scheme=https;end";
                                $('#deeplink').attr('href', url).show();
                             } else {
                                var url = "https://vimeo.com/user/" + host;
                            }
                            
                        } else if(value['name'] == "Amazon"){
                            if(isIOS){
                                var url = "com.amazon.mobile.shopping.web://amazon.com/" + host;
                                var store_url = "https://itunes.apple.com/app/amazon-shopping/id297606951";
                                // window.location = url;// fb://method/call..
                                window.location = url;
                                setTimeout(function(){
                                    if(confirm('Do you already have Amazon or do you want to go download it?')){
                                    window.location = store_url;
                                    } else {
                                        alert('refresh the page to see the resut again.');
                                    }
                                }, 300); 
                            } else if(isAndroid){
                                    var url = "intent://amazon.com/" + host + "#Intent;package=com.amazon.mShop.android.shopping;scheme=https;end";
                                    $('#deeplink').attr('href', url).show();
                                } else {
                                var url = "https://www.amazon.com/" + host;
                                window.location.replace(url);
                            }
                        }
                    // }
                // window.location.replace("facebook://" + host);
                }
            });
        } else if(response.request == "eusp"){
                if($('#self_request').val() == "url_active"){
                   window.location = "https://" + response.data['url'];
                } else if($('#self_request').val() == "email_active"){
                    $('#dpluse').attr('style', 'margin-top: 200px;');
                    var email_address = response.data['email_address'];
                    var email_subject = response.data['email_subject'];
                    var email_body = response.data['email_body'];
                    var isIOS = /iPhone|iPad|iPod/i.test(navigator.userAgent);
                    var isAndroid = /android/i.test(navigator.userAgent);  
                    // var isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
                    if(isIOS){
                        var ios_url = "googlegmail://co?to="+ email_address +"&subject="+ email_subject +"&body=" + email_body;
                        var store_url = "https://itunes.apple.com/app/gmail-email-by-google/id422689480";
                        // window.location = url;// fb://method/call..
                        setTimeout(function(){
                            if(confirm('Do you already have Gmail or do you want to go download it?')){
                            window.location = store_url;
                            } else {
                                alert('refresh the page to see the resut again.');
                            }
                        }, 300); 
                        window.location = ios_url;
                    } else if(isAndroid){
                        var inMobile = "intent://mail.google.com/mail/?view=cm&fs=1&to="+ email_address +"&su="+ email_subject +"&body="+ email_body + "#Intent;action=android.intent.action.VIEW;package=com.google.android.gm;scheme=https;end";
                        $('#email_click').attr('href', inMobile).show();
                    } else {
                        var send_email_to = "https://mail.google.com/mail/?view=cm&fs=1&to="+ email_address +"&su="+ email_subject +"&body="+ email_body;
                        window.location.replace(send_email_to);
                        // $('#send_email').attr('href', send_email_to);
                        // window.location.href = $('#send_email').attr('href');
                    }
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
                console.log(response.data);
                var linktree_data = response.data;
                $.each(linktree_data['link_data'], function(i, value) {
                    $('#display_tree').append(`
                        <a href="https://`+ value['url'] +`" class="btn btn-light btn-block link_tree_d_btn mt-4" id="link_one" target="_blank">`+ value['label'] +`</a>
                    `);
                });
                $('#image_hide').hide();
                $('#link_tree_display').show();

                if(response.data['background_color'] != null){
                    $('#link_tree_card').attr('style', 'background-color:' + response.data['background_color'] + ';');
                    $('.link_tree_d_btn').attr('style', 'color:' + response.data['text_color'] + '!important; text-shadow: 0px 3px 10px' + 
                    response.data['text_highlight_color'] + ';');
                } else {
                    $('#link_tree_card').attr('style', 'background-color:rgb(217,181,81);');
                    $('.link_tree_d_btn').attr('style', 'color: #fff !important; text-shadow: 0px 3px 10px #000 !important;');
                }

                if(response.data['link_image'] == ""){
                    $('#link_tree_img').hide(); 
                } else {
                    $('#link_tree_img').attr('src', '../' + response.data['link_image']);
                }

               console.log(response.data);
            } else if(response.request == "get_cns"){
                $('#cns_backbg').show();
                $('#image_hide').hide();
                var image_display = response.contact['image'].replace('https://vvip9.co/','../');
                $('.cns_contact').append(`<div class="d-flex justify-content-center row">
                <div class="col-md-12" style="text-align:center;">
                    <img src="`+ image_display +`" alt="" width="200"  height="200" style="border-radius: 50%">
                </div>
            </div>
            <div class="d-flex justify-content-center row">
                <div class="col-md-6 text-center mt-2">
                    <p class="text_color" id="cns_fn"><strong class="labelcns">First Name</strong>`+ `<br>` + response.contact['personal']['first_name'] +` </p>
                    <p class="text_color" id="cns_ln"><strong class="labelcns">Last Name</strong>`+ `<br>` + response.contact['personal']['last_name'] +`</p>
                </div>
                <div class="col-md-6 text-center mt-2">
                    <p class="text_color" id="cns_company"><strong class="labelcns">Company</strong>`+ `<br>` + response.contact['personal']['company'] +`</p>
                    <p class="text_color" id="cns_position"><strong class="labelcns">Position</strong>`+ `<br>` + response.contact['personal']['position'] +`</p>
                    <p class="text_color" id="cns_birthday"><strong class="labelcns">Birthday</strong>`+ `<br>` + response.contact['personal']['birthday'] +`</p>
                </div>
            </div>
            <div class="d-flex justify-content-center row">
                <div class="col-md-6 text-center">
                    <p class="text_color" id="cns_str_one"> <strong class="labelcns"> Home Street One </strong>`+ `<br>` + response.contact['home_address']['street_one'] +`</p>
                    <p class="text_color" id="cns_str_two"><strong class="labelcns"> Home Street Two </strong>`+ `<br>` + response.contact['home_address']['street_two'] +`</p>
                    <p class="text_color" id="cns_postal_code"><strong class="labelcns"> Home Postal Code </strong>`+ `<br>` + response.contact['home_address']['postal_code'] +`</p>
                    <p class="text_color" id="cns_city"><strong class="labelcns"> Home City </strong>`+ `<br>` + response.contact['home_address']['city'] +`</p>
                    <p class="text_color" id="cns_state"><strong class="labelcns"> Home State </strong>`+ `<br>` + response.contact['home_address']['state'] +`</p>
                    <p class="text_color" id="cns_country"><strong class="labelcns"> Home Country </strong>`+ `<br>` + response.contact['home_address']['country'] +`</p>
                </div>
                <div class="col-md-6 text-center">
                    <p class="text_color" id="cns_work_str_one"><strong class="labelcns"> Work Street One </strong>`+ `<br>` + response.contact['work_address']['street_one'] +`</p>
                    <p class="text_color" id="cns_work_str_two"><strong class="labelcns"> Work Street Two </strong>`+ `<br>` + response.contact['work_address']['street_two'] +`</p>
                    <p class="text_color" id="cns_work_postal_code"><strong class="labelcns"> Work Postal Code </strong>`+ `<br>` + response.contact['work_address']['postal_code'] +`</p>
                    <p class="text_color" id="cns_work_city"><strong class="labelcns"> Work City </strong>`+ `<br>` + response.contact['work_address']['city'] +`</p>
                    <p class="text_color" id="cns_work_state"><strong class="labelcns"> Work State </strong>`+ `<br>` + response.contact['work_address']['state'] +`</p>
                    <p class="text_color" id="cns_work_country"><strong class="labelcns"> Work Country </strong>`+ `<br>` + response.contact['work_address']['country'] +`</p>
                </div>
            </div>
            <div class="d-flex justify-content-center row">
                <div class="col-md-6 text-center">
                    <p class="text_color" id="cns_mobile"><strong class="labelcns">  Mobile </strong>`+ `<br>` + response.contact['mobile']['mobile'] +`</p>
                    <p class="text_color" id="cns_phone_no"><strong class="labelcns"> Phone </strong>`+ `<br>` + response.contact['mobile']['phone'] +`</p>
                    <p class="text_color" id="cns_office"><strong class="labelcns"> Office </strong>`+ `<br>` +response.contact['mobile']['office'] +`</p>
                </div>
                <div class="col-md-6 text-center">
                    <p class="text_color" id="cns_email"><strong class="labelcns"> Personal Email </strong>`+ `<br>` +response.contact['email_and_internet']['personalemail'] +`</p>
                    <p class="text_color" id="cns_office_email"><strong class="labelcns"> Office Email </strong>` + `<br>` + response.contact['email_and_internet']['office_email'] +`</p>
                    <p class="text_color" id="cns_web_one"><strong class="labelcns">Website One </strong>`+ `<br>` +`<a href="https://`+ response.contact['email_and_internet']['website_one'] +`" target="_blank">`+ response.contact['email_and_internet']['website_one'] +`</a></p>
                    <p class="text_color" id="cns_web_two"><strong class="labelcns">Website Two </strong>`+ `<br>` +`<a href="https://`+ response.contact['email_and_internet']['website_two'] +`" target="_blank">`+ response.contact['email_and_internet']['website_two'] +`</a></p>
                    <p class="text_color" id="cns_web_three"><strong class="labelcns">Website Three </strong>`+ `<br>` +`<a href="https://`+ response.contact['email_and_internet']['website_three'] +`" target="_blank">`+ response.contact['email_and_internet']['website_three'] +`</a></p>
                </div>
            </div>`);

                if(response.color_app['background_color'] != null){
                    $('#cns_backbg').attr('style', 'background-color:' + response.color_app['background_color'] + '!important;');
                    $('#cns_cardbg').attr('style', 'background-color:' + response.color_app['background_color'] + '!important;');

                    $('.text_color').attr('style', 'color:' + response.color_app['text_color'] + '!important; text-shadow: 0px 3px 10px' + 
                    response.color_app['text_highlight_color'] + '; font-family: "Britannic Bold"; font-size: 19px; font-weight: 900;');
                } else {
                    $('#card_background').attr('style', 'background-color:rgb(217,181,81);');
                    $('.text_color').attr('style', 'color: #fff !important; text-shadow: 0px 3px 10px #000 !important;');
                }
                
                if(response.contact['personal']['first_name'] == null){
                    $('#cns_fn').hide();
                } 
                if(response.contact['personal']['last_name'] == null){
                    $('#cns_ln').hide();
                }

                if(response.contact['personal']['company'] == null){
                    $('#cns_company').hide();
                }

                if(response.contact['personal']['position'] == null){
                    $('#cns_position').hide();
                }

                if(response.contact['personal']['birthday'] == null){
                    $('#cns_birthday').hide();
                }

                if(response.contact['home_address']['street_one'] == null){
                    $('#cns_str_one').hide();
                }
                
                if(response.contact['home_address']['street_two'] == null){
                    $('#cns_str_two').hide();
                }

                if(response.contact['home_address']['postal_code'] == null){
                    $('#cns_postal_code').hide();
                }

                if(response.contact['home_address']['city'] == null){
                    $('#cns_city').hide();
                }
                
                if(response.contact['home_address']['state'] == null){
                    $('#cns_state').hide();
                }

                if(response.contact['home_address']['country'] == null) {
                    $('#cns_country').hide();
                }

                if(response.contact['work_address']['street_one'] == null){
                    $('#cns_work_str_one').hide();
                }
                
                if(response.contact['work_address']['street_two'] == null){
                    $('#cns_work_str_two').hide();
                }

                if(response.contact['work_address']['postal_code'] == null){
                    $('#cns_work_postal_code').hide();
                }

                if(response.contact['work_address']['city'] == null){
                    $('#cns_work_city').hide();
                }
                
                if(response.contact['work_address']['state'] == null){
                    $('#cns_work_state').hide();
                }

                if(response.contact['work_address']['country'] == null) {
                    $('#cns_work_country').hide();
                }

                if(response.contact['mobile']['mobile'] == null){
                    $('#cns_mobile').hide();
                }

                if(response.contact['mobile']['mobile'] == null){
                    $('#cns_phone_no').hide();
                }

                if(response.contact['mobile']['office'] == null){
                    $('#cns_office').hide();
                }
                
                if(response.contact['email_and_internet']['personalemail'] == null){
                    $('#cns_email').hide();
                }

                if(response.contact['email_and_internet']['office_email'] == null){
                    $('#cns_office_email').hide();
                }

                if(response.contact['email_and_internet']['website_one'] == null){
                    $('#cns_web_one').hide();
                }

                if(response.contact['email_and_internet']['website_two'] == null){
                    $('#cns_web_two').hide();
                }

                if(response.contact['email_and_internet']['website_three'] == null){
                    $('#cns_web_three').hide();
                }
                var cnstree = response.linktree;
                $.each(cnstree['link_data'], function(i, value) {
                    $('.cns_tree').append(`
                        <a href="https://`+ value['url'] +`" class="btn btn-light btn-block linktreecns_btn mt-4" id="link_one" target="_blank">`+ value['label'] +`</a>
                    `);
                });

                if(response.color_app['background_color'] != null){
                    $('#cns_treecardbg').attr('style', 'background-color:' + response.color_app['background_color'] + ';');
                    $('.linktreecns_btn').attr('style', 'color:' + response.color_app['text_color'] + '!important; text-shadow: 0px 3px 10px' + 
                    response.color_app['text_highlight_color'] + ';');
                } else {
                    $('#cns_treecardbg').attr('style', 'background-color:rgb(217,181,81);');
                    $('.linktreecns_btn').attr('style', 'color: #fff !important; text-shadow: 0px 3px 10px #000 !important;');
                }

                if(response.linktree['link_image'] == ""){
                    $('#cnstree_img').hide(); 
                } else {
                    $('#cnstree_img').attr('src', '../' + response.linktree['link_image']);
                }
            } else if(response.request == "get_events"){
                $('#event_display').show();
                var data_active = response.event_active;
                if(data_active.length > 1){
                    $.each(data_active, function(i,e_active){
                        var isIOS = /iPhone|iPad|iPod/i.test(navigator.userAgent);
                        var isAndroid = /android/i.test(navigator.userAgent);  
                        if(isAndroid){
                            //https://calendar.google.com/calendar/r/eventedit?text=`+ e_active['title'] +`&dates=`+ e_active['utc_start'] + `/`+ e_active['utc_end'] +`&details=`+ e_active['description'] +`&location=`+ e_active['location'] 
                            var url = `intent://calendar.google.com/calendar/r/eventedit?text=`+ e_active['title'] +`&dates=`+ e_active['utc_start'] + `/`+ e_active['utc_end'] +`&details=`+ e_active['description'] +`&location=`+ e_active['location'] +` + "#Intent;package=com.google.android.calendar;scheme=https;end`;
                                $('#e_body').append(`
                                <div class="col-md-6">
                                    <div class="card" style="background-image: url(`+ e_active['image'] +`); background-size:cover; border-raidus: 10% !important; border: 2px solid rgb(217,181,81);">
                                        <div class="card-body">
                                            <div class="info_section_event">
                                                <h3 class="event_title">`+ e_active['title'] +`</h3>
                                                <p class="event_description">`+ e_active['description'] +`</p>
                                                <p class="event_location"><i class="fas fa-location-arrow mr-2"></i>`+ e_active['location'] +`</p>
                                                <p class="event_datetime"><i class="far fa-clock mr-2"></i>`+ e_active['start_time'] + ' - ' + e_active['end_time'] +`, <i class="fas fa-calendar-alt mr-2"></i>`+ e_active['start_date'] +` to `+ e_active['end_date'] +`</p>
                                            </div>
                                            <a href="`+ url +`" class="btn btn-success mt-3 add_calendar">Add to Calendar</a>
                                        </div>
                                    </div>
                                </div>
                                `);
                        }
                    });
                } else {
                    $.each(data_active, function(i,e_active){
                        var isIOS = /iPhone|iPad|iPod/i.test(navigator.userAgent);
                        var isAndroid = /android/i.test(navigator.userAgent);  
                        if(isIOS){
                            var url = `com.google.calendar://?action=create&title=`+ e_active['title'] +`&description=`+ e_active['description'] +`&dates=`+ e_active['utc_start'] + `/`+ e_active['utc_end'] +`&location=`+ e_active['location'];
                            $('#e_body').append(`
                            <div class="col-md-12">
                                <div class="card" style="background-image: url(`+ e_active['image'] +`); background-size:cover; border-raidus: 10% !important; border: 2px solid rgb(217,181,81);">
                                    <div class="card-body">
                                        <div class="info_section_event">
                                            <h3 class="event_title">`+ e_active['title'] +`</h3>
                                            <p class="event_description">`+ e_active['description'] +`</p>
                                            <p class="event_location"><i class="fas fa-location-arrow mr-2"></i>`+ e_active['location'] +`</p>
                                            <p class="event_datetime"><i class="far fa-clock mr-2"></i>`+ e_active['start_time'] + ' - ' + e_active['end_time'] +`, <i class="fas fa-calendar-alt mr-2"></i>`+ e_active['start_date'] +` to `+ e_active['end_date'] +`</p>
                                        </div>
                                        <a href="`+ url +`" class="btn btn-success mt-3 add_calendar">Add to Calendar</a>
                                    </div>
                                </div>
                            </div>
                            `);
                            // window.location = url;// fb://method/call..
                            // window.location = url;
        
                        } else if(isAndroid){
                            var url = `intent://www.google.com/calendar/events#Intent;scheme=https;package=com.google.android.calendar;end`;
                            $('#e_body').append(`
                            <div class="col-md-12">
                                <div class="card" style="background-image: url(`+ e_active['image'] +`); background-size:cover; border-raidus: 10% !important; border: 2px solid rgb(217,181,81);">
                                    <div class="card-body">
                                        <div class="info_section_event">
                                            <h3 class="event_title">`+ e_active['title'] +`</h3>
                                            <p class="event_description">`+ e_active['description'] +`</p>
                                            <p class="event_location"><i class="fas fa-location-arrow mr-2"></i>`+ e_active['location'] +`</p>
                                            <p class="event_datetime"><i class="far fa-clock mr-2"></i>`+ e_active['start_time'] + ' - ' + e_active['end_time'] +`, <i class="fas fa-calendar-alt mr-2"></i>`+ e_active['start_date'] +` to `+ e_active['end_date'] +`</p>
                                        </div>
                                        <a href="`+ url +`" class="btn btn-success mt-3 add_calendar">Add to Calendar</a>
                                    </div>
                                </div>
                            </div>
                            `);
                        } else {
                            var url = `https://calendar.google.com/calendar/r/eventedit?text=`+ e_active['title'] +`&dates=`+ e_active['utc_start'] + `/`+ e_active['utc_end'] +`&details=`+ e_active['description'] +`&location=`+ e_active['location'];
                            $('#e_body').append(`
                            <div class="col-md-12">
                                <div class="card" style="background-image: url(`+ e_active['image'] +`); background-size:cover; border-raidus: 10% !important; border: 2px solid rgb(217,181,81);">
                                    <div class="card-body">
                                        <div class="info_section_event">
                                            <h3 class="event_title">`+ e_active['title'] +`</h3>
                                            <p class="event_description">`+ e_active['description'] +`</p>
                                            <p class="event_location"><i class="fas fa-location-arrow mr-2"></i>`+ e_active['location'] +`</p>
                                            <p class="event_datetime"><i class="far fa-clock mr-2"></i>`+ e_active['start_time'] + ' - ' + e_active['end_time'] +`, <i class="fas fa-calendar-alt mr-2"></i>`+ e_active['start_date'] +` to `+ e_active['end_date'] +`</p>
                                        </div>
                                        <a href="`+ url +`" class="btn btn-success mt-3 add_calendar">Add to Calendar</a>
                                    </div>
                                </div>
                            </div>
                            `);
                        }
                    });
                }
            }
        }
    });