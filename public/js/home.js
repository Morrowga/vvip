$(function(){
    var $sections = $('.form-section');

    function navigateTo(index){
        $sections.removeClass('current').eq(index).addClass('current');
        $('.form-navigation .previous').toggle(index>0);
        var atTheEnd = index >= $sections.length - 1;
        $('.form-navigation .next').toggle(!atTheEnd);
        $('.form-navigation .sub-btn').toggle(atTheEnd);
    }

    function curIndex() {
        return $sections.index($sections.filter('.current'));
    }

    $('.form-navigation .previous').on("click", function(){
        navigateTo(curIndex()-1);
        // if(navigateTo(curIndex()-1)){
        //     $('.next').attr('disabled', false);
        // }
    });

    $('.form-navigation .next').on("click", function(){
            navigateTo(curIndex()+1);
            
            if(curIndex() == 1){
                // $(this).attr('disabled', true);
                var url_value =  document.getElementById("url").value;
                $.ajax({
                    url: 'api/qr_generate',
                    method: 'GET',
                    headers: {
                        'Content-type':'image/png'
                    },
                    data: {
                        url_value
                    },
                    success:function(response){
                        $('#qr_scan').attr('src', '../storage/customer_qr/' + response + '.png');
                        $('#encrypt_url').val(response);
                        console.log($('#encrypt_url').val());
                    }
                });
            }

            if(curIndex() == 2){
                $('#input-1').val($('#image_data').attr('src'));
                $('#input-2').val($('#card_front').attr('src'));
                $('#input-3').val($('#card_back').attr('src'));
                $('#input-4').prop("files",$(".uploadLogo").prop("files"));
                console.log($('#input-4').prop("files",$(".uploadLogo").prop("files")));
                $('#input-5').val($('#text_color').val());
                $('#input-6').val($('#background_color').val());
                $('#input-7').val($('#card_blank_front').find('[class*="front_card_name"]').text());
                $('#input-8').val($('#card_blank_front').find('[class*="card_description"]').text());
                $('#input-9').val($('#catch_click').text());
                $('#input-10').val($('#qrposition').val());
                $('#input-11').val($('#package_name').val());
                $('#input-12').val($('#url').val());
                $('#frontcard').html($('#card_blank_front').html());
                $('#backcard').html($('#card_blank_back').html());
                $('#backcard').find('[id*="card_blank_back"]').first().removeAttr('style');
                $('#backcard').find('[id*="qr_scan"]').first().attr('style', 'position: absolute;top: 38% !important;left: 41% !important;');
                $('#confirm_modal').modal('show');
                $('#form_save').on('submit', function(e){
                    e.preventDefault();
                    $('#confirm_modal').modal('hide');
                    var token =  $('#token').val();
                    let formData = new FormData(this);
                    // var previewimg = $('#input-1').val();
                    // var fronttranimg = $('#input-2').val();
                    // var backtranimg = $('#input-3').val();
                    // var logo = $('#input-4').val();
                    // var txt_color = $('#input-5').val();
                    // var bg_color = $('#input-6').val();
                    // var cardname = $('#input-7').val();
                    // var description = $('#input-8').val();
                    // var position = $('#input-9').val();
                    // var qr_position = $('#input-10').val();
                    // var pack = $('#input-11').val();
                    // var userurl = $('#input-12').val();
                    
                    $.ajax({
                        url: 'api/save_customer_card',
                        method:'POST',
                        dataType: 'json',
                        data: formData,
                        processData: false, //add this
                        contentType: false, //and this
                        headers: {
                                'Authorization' : 'dnZpcDk=aHR1dG1lZGlh',
                                'X-CSRF-Token': token 
                        },
                        
                        success:function(response){
                            console.log(response);
                        }
                    });
                });
                   
                $('#cancel_confirm').on('click', function(){
                    navigateTo(curIndex()-1);
                })
            }
    });
    
    navigateTo(0);
});

$('[data-toggle="popover"]').popover();

//validate
$('#error_name').hide();
$('#error_phone').hide();
$('#error_email').hide();
$('#error_url').hide();


//url_system_generate_Code

$.ajax({
    url: '/api/generate_code',
    type: 'get',
    headers: {
        'Authorization' : 'dnZpcDk=aHR1dG1lZGlh'
    }, 
    success: function(response){
        document.getElementById("url_system").value = response['generate_code'];
    }
});

//focus_url
function focusText(){
    var textbox = document.getElementById("url");
    textbox.focus();    
}

//checkbox_system
function getCheckedSystem() {
    const checkBox = document.getElementById('url_system').checked;   
    if (checkBox === true) {
            document.getElementById("url").value = document.getElementById('url_system').value;
            // document.getElementById("url").disabled = true;
            $('#error_url').hide();
            $('.next').attr('disabled', false)
        } else {
        console.log(false);
    }
}
    
//checkbox_name
function getCheckedName(){
    const checkBoxName = document.getElementById('url_name').checked;
    if(checkBoxName === true){
        console.log(document.getElementById("url").value = document.getElementById('url_name').value);
        document.getElementById("url").disabled = false;
        var textbox = document.getElementById("url");
        textbox.focus();    
    } else {
        console.log(false);
    }
}

//qr_position
$('#move_left').on('click', function(){
    $('#qr_scan').attr('style', 'left: 10% !important');
    $('#qrposition').val('left');
});

$('#move_center').on('click', function(){
    $('#qr_scan').attr('style', 'left: 41% !important');
    $('#qrposition').val('center');
});

$('#move_right').on('click', function(){
    $('#qr_scan').attr('style', 'left: 70% !important');
    $('#qrposition').val('right');
});


//card_image_text_description_position
$('#front_move_left').on('click', function(){
    $('.card_description').attr('style', 'right: 30% !important; color:' + $('#text_color').val() + '!important;');
    $('.front_card_name').attr('style', 'right: 30% !important; color:' + $('#text_color').val() + '!important;');
    $('#logo_view').attr('style', 'left: 13% !important');
    $('#catch_click').text('left');
    if (window.matchMedia('(max-width: 360px)').matches) {
        $('#logo_view').attr('style', 'left: 8%;');
    } else if(window.matchMedia('(max-width: 411px)').matches){
        $('#logo_view').attr('style', 'left: 10%;');
    } else if(window.matchMedia('(max-width: 320px)').matches){
        $('#logo_view').attr('style', 'left: 7%;');
    } else if(window.matchMedia('(max-width: 375px)').matches){
        $('#logo_view').attr('style', 'left: 9%;');
    } else if(window.matchMedia('(max-width: 414px)').matches){
        $('#logo_view').attr('style', 'left: 10%;');
    } else if(window.matchMedia('(max-width: 768px)').matches){
        $('#logo_view').attr('style', 'left: 15%;');
    } else if(window.matchMedia('(max-width: 540px)').matches){
        $('#logo_view').attr('style', 'left: 13%;');
    }
    console.log($('#catch_click').text());
});

$('#front_move_center').on('click', function(){
    $('.card_description').attr('style', 'text-align:center !important; color:' + $('#text_color').val() + '!important;');
    $('.front_card_name').attr('style', 'text-align:center !important; color:' + $('#text_color').val() + '!important;');
    $('#logo_view').attr('style', 'left: 42% !important;');
    $('#catch_click').text('center');
    if (window.matchMedia('(max-width: 375px)').matches) {
        $('#logo_view').attr('style', 'left: 39%;');
    } else if(window.matchMedia('(max-width: 411px)').matches) {
        $('#logo_view').attr('style', 'left: 40%;');
    } else if(window.matchMedia('(max-width: 320px)').matches){
        $('#logo_view').attr('style', 'left: 36%;');
    } else if(window.matchMedia('(max-width: 414px)').matches){
        $('#logo_view').attr('style', 'left: 40%;');
    } else if(window.matchMedia('(max-width: 768px)').matches){
        $('#logo_view').attr('style', 'left: 45%;');
    } 
    console.log($('#catch_click').text());
});

$('#front_move_right').on('click', function(){
    $('.card_description').attr('style', 'left: 25% !important; color:' + $('#text_color').val() + '!important;');
    $('.front_card_name').attr('style', 'left: 25% !important;color:' + $('#text_color').val() + '!important;');
    $('#logo_view').attr('style', 'left: 67% !important;');
    $('#catch_click').text('right');
    if (window.matchMedia('(max-width: 375px)').matches) {
        $('#logo_view').attr('style', 'left: 65%;');
    } else if(window.matchMedia('(max-width: 411px)').matches) {
        $('#logo_view').attr('style', 'left: 65%;');
    } else if(window.matchMedia('(max-width: 320px)').matches){
        $('#logo_view').attr('style', 'left: 62%;');
    } else if(window.matchMedia('(max-width: 414px)').matches){
        $('#logo_view').attr('style', 'left: 65%%;');
    } else if(window.matchMedia('(max-width: 768px)').matches){
        $('#logo_view').attr('style', 'left: 70%;');
    } 
    console.log($('#catch_click').text());
});

//colorInput_event
let TextcolorInput = document.getElementById('text_color');
    TextcolorInput.addEventListener('input', () =>{
        // alert('left');
    if($('#catch_click').text() == 'left'){
        $('.front_card_name').attr('style', 'color:' + TextcolorInput.value + '!important; right: 30% !important;');
        $('.card_description').attr('style', 'color:' + TextcolorInput.value + '!important; right: 30% !important;');
    } else if($('#catch_click').text() == 'right'){
        $('.front_card_name').attr('style', 'color:' + TextcolorInput.value + '!important; left: 25% !important;');
        $('.card_description').attr('style', 'color:' + TextcolorInput.value + '!important; left: 25% !important;');
    } else {
        $('.front_card_name').attr('style', 'color:' + TextcolorInput.value + '!important; text-align:center !important;');
        $('.card_description').attr('style', 'color:' + TextcolorInput.value + '!important; text-align:center !important;');
    }
});



//name_validate
$("#name").on("keyup", function(e) {
    if($(this).val() == ""){
        $('#error_name').show();
        $('.next').attr('disabled', true);
    } else {
        $('#error_name').hide();
        $('.next').attr('disabled', false);
    }
    var name_value = $(this).val();
    $('.front_card_name').text(name_value);
});

//phone_validate
$("#phone").on('keyup', function(event) {
    if($(this).val().length == ""){
        $('#error_phone').show().text(enter_phone);
    } else if($(this).val().length < 8){
        $('#error_phone').show().text(phone_no_need_digit);
        $('.next').attr('disabled', true);
    } else if($(this).val().length > 11){
        $('#error_phone').show().text(phone_no_need_digit);
        $('.next').attr('disabled', true);
    } else {
        $.ajax({
            url: '/api/user_exists',
            data: {
                'phone_number_exist': $(this).val()
            },
            type: 'post',
            success:function(response){
                console.log(response);
                if(response.status == '403'){
                    $('#error_phone').show().text(phone_exist);
                    $('.next').attr('disabled', true);
                } else {
                    $('#error_phone').hide();
                    $('.next').removeAttr('disabled');

                }
            }
        });       
    }
    // console.log($(this).val());
});

//email_validate
$("#email").on('keyup', function(event) {
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;  
    var data = $(this).val();
    if($(this).val().length < 0){
        $('#error_email').show().text(enter_email);
        $('.next').attr('disabled', true);
    } else if(!emailReg.test($(this).val())){
        $('#error_email').show().text(email_invalid);
        $('.next').attr('disabled', true);
    } else  if (data.indexOf('.com') >= 0) {
        $.ajax({
            url: '/api/user_exists',
            data: {
                'email_exist': $(this).val()
            },
            type: 'post',
            success:function(response){
                console.log(response);
                if(response.status == '403'){
                    $('#error_email').show().text(email_exist);
                    $('.next').attr('disabled', true);
                } else {
                    $('#error_email').hide();
                    $('.next').attr('disabled', false);
                }
            }
        });       
    } 
});

//url_validate
$('#url').on("keyup",function(){
    var url_char = /^[A-Za-z0-9]+$/;
    if($(this).val() == ""){
        $('#error_url').show().text(enter_url);
        $('.next').attr('disabled', true);
    } else if(!url_char.test($(this).val())){ 
        $('#error_url').show().text(special_char);
        $('.next').attr('disabled', true);
    }else if($(this).val().length < 4) {
        $('#error_url').show().text(url_need_char);
        $('.next').attr('disabled', true);
    } else if($(this).val().length >= 4){ //minimum 4 charactors
        $.ajax({
            url: '/api/user_exists',
            data: {
                'url_exist': $(this).val()
            },
            type: 'post',
            success:function(response){
                console.log(response);
                if(response.status == '403'){
                    $('#error_url').show().text(response.message);
                    $('.next').attr('disabled', true);
                } else {
                    $('#error_url').hide();
                    $('.next').attr('disabled', false);
                }
            }
        });    
    } 
});


//verify-options
// $('.sub-btn').on('click', function(){
//     $('#submit-verify').modal('show');
//     $('.phone-verify').html(`
//     SMS Verify <i class="far fa-comment-alt"></i>
//     <p class="padding-send">We will send verify code to <br> `+ $('#phone').val() +`</p>
//     `);
//     console.log($('#email').val());
//     $('.email-verify').html(`
//     Email Verify <i class="far fa-envelope"></i>
//     <p class="padding-send">We will send verify link to <br> `+ $('#email').val() +`</p>
//     `);
// });


$('.verifybtn').on('click', function(e){
    var value = $(this).attr('id');
    $('#verify-type').val(value);   
    $('.sub-regi[type="submit"]')[0].click();

    console.log(value);
})

//add_upload_logo_on_card
$('.uploadLogo').on('change', function(){
    var logo = window.URL.createObjectURL(this.files[0]);
    $('#logo_view').attr('src',logo);
    $('#logoModal').modal('hide');
});

//add_Name_form_modal
$('#editName').on("click", function(){
    $('#nameTextModal').modal('show');
});

//edit_name_keyup
$('.edit_name').on('keyup', function(event){
    var text_value = $(this).val();
    var text_length = $(this).val().length;
    var text_limit = 18;

    if(text_length > text_limit){
        $(this).val($(this).val().substring(0, text_limit));
    }
    $('.front_card_name').text(text_value);
});

//description_form_modal
$('#editDescription').on("click", function(){
    $('#descriptionTextModal').modal('show');
});

//edit_description_key_up
$('.edit_description').on('keyup', function(event){ 

    var char_length = $(this).val().length;
    // console.log(char_length);
    $('.card_description').text($(this).val());
    console.log($('.card_description').text());
    
    var limit = 30;
    if(char_length > limit){
        $(this).val($(this).val().substring(0, limit));
    }
   
});

//upload_logo_form_modal
$('#upload_logo').on("click", function(){
    $('#logoModal').modal('show');
});


$('#second_register').on('submit', function(e){
    e.preventDefault();
    var userid = $('#userid').val();
    var register_url = 'api/register_update/' + userid;
    var token = $('#token').val();
    let registerFormData = new FormData(this);
    $.ajax({
        url: register_url,
        method:'POST',
        dataType: 'json',
        data: registerFormData,
        processData: false, //add this
        contentType: false, //and this
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success:function(response){
            if(response.message == 'success'){
                location.reload();
            } 
        }
    });
})

$(window).on('load', function() {
    console.log($('#step_two').val());
   if($('#step_two').val() == 1){
        $('#home_height').show();
        $('#reg-section').hide();

        setInterval(function(){ 
            $('#countDownHome').modal({
                backdrop: 'static',
                keyboard: false 
            });
        }, 2000);
        if($('#payment-approve').val() == 1){
            $('#countDownHome').modal('hide');
        }
   } else {
        $('#home_height').hide();
        $('#reg-section').show();
   }
});
