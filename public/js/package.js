//wizard_form_register
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
            
            if(curIndex() == 2){
                $(this).attr('disabled', true);
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

            if(curIndex() == 4){
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

//popover
$('[data-toggle="popover"]').popover();

//normal_package_images_slide
function normal(){
    var i = 0;
    var normal_pics = [ "../images/Normal_001.png", "../images/Normal_002.png",
    "../images/Normal_003.png" ];
    var normal_el = document.getElementById('normal_img');  // el doesn't change

    function normal_toggle() {
        normal_el.src = normal_pics[i];           // set the image
        i = (i + 2) % normal_pics.length;  // update the counter
    }
    setInterval(normal_toggle, 2000);
}

normal();

//luxury_package_images_slide

function standard(){
    i = 0;
    var standard_pics = ["../images/Standard_001.png",
    "../images/Standard_002.png",
    "../images/Standard_003.png"];
    var standard_el = document.getElementById('standard_img'); 

    function standard_toggle(){
        standard_el.src = standard_pics[i];
        i = (i + 2) % standard_pics.length;
    }
    setInterval(standard_toggle, 2000);

}

standard();

//luxury_package_images_slide

function luxury(){
    i = 0;
    var luxury_pics = ["../images/Luxury_001.png",
    "../images/Luxury_002.png",
    "../images/Luxury_003.png"];

    var luxury_el = document.getElementById('luxury_img');

    function luxury_toggle(){
        luxury_el.src = luxury_pics[i];
        i = (i + 2 ) % luxury_pics.length;
    }
    setInterval(luxury_toggle, 2000);
}

luxury();


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

// $.ajaxSetup({
//     headers: {
//         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//     }
// });


//save_user_form 

$(".save-user").on('click', function(e){
e.preventDefault();

var save_name= $("input[name=name]").val();
var save_phone_number = $("input[name=phone_number]").val();
var url = '/api/save-user'; 

$.ajax({
   url:url,
   method:'POST',
   data:{
          name:save_name, 
          phone_number:save_phone_number
        },
    headers: {
        'Authorization' : 'dnZpcDk=aHR1dG1lZGlh'
    },  
   success:function(response){
      if(response.message == "success"){
        document.getElementById('prices-section').style.display = "none";
        document.getElementById('prices-section-save').style.display = "none";
        document.getElementById('prices-section-two').style.display = "block";
        document.getElementById('name').value = response.name;
        $('.front_card_name').text(response.name);
        document.getElementById('phone').value = response.phone_number;
        console.log(response.message);
      }else if(response.message == "Phone Number is invalid"){
            $('#error_text').html(invalid_error);
      } else if(response.message == "Phone Number Exist & Active"){
        $('.user_warning_text').text(exist_active);
        $('#saveuser_check').modal('show');
        $('#useractive').show();
        $('#userexpired').hide();
      } else if (response.message == "Phone Number Exist & Expired") {
            $('.user_warning_text').text(exist_expired);
            $('#saveuser_check').modal('show');
            $('#useractive').hide();
            $('#userexpired').show();
      } else {
        console.log(response.message);
      }
   },
   error:function(error){
      console.log(error)
   }
});
});
//validate
$('#error_name').hide();
$('#error_phone').hide();
$('#error_email').hide();
$('#error_url').hide();

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
    console.log($('#catch_click').text());
});

$('#front_move_center').on('click', function(){
    $('.card_description').attr('style', 'text-align:center !important; color:' + $('#text_color').val() + '!important;');
    $('.front_card_name').attr('style', 'text-align:center !important; color:' + $('#text_color').val() + '!important;');
    $('#logo_view').attr('style', 'left: 42% !important');
    $('#catch_click').text('center');
    if (window.matchMedia('(max-width: 375px)').matches) {
        $('#logo_view').attr('style', 'left: 38% !important');
    } else if(window.matchMedia('(max-width: 411px)').matches) {
        $('#logo_view').attr('style', 'left: 40% !important');
    } 
    console.log($('#catch_click').text());
});

$('#front_move_right').on('click', function(){
    $('.card_description').attr('style', 'left: 25% !important; color:' + $('#text_color').val() + '!important;');
    $('.front_card_name').attr('style', 'left: 25% !important;color:' + $('#text_color').val() + '!important;');
    $('#logo_view').attr('style', 'left: 67% !important;');
    $('#catch_click').text('right');
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
$("#name").on("keyup", function(event) {
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
        $('.next').attr('disabled', true);
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

//submit_disabled
$('#password').on('keyup', function(){
    $('.sub-btn').attr('disabled', false);
});

//take_package_token
function packageClick(e){
    document.getElementById('prices-section').style.display = "none";
    document.getElementById('prices-section-save').style.display = "block";
    document.getElementById('prices-section-two').style.display = "none";
    var targetValue = e.target.value;
    document.getElementById('package_name').value = targetValue;
    //card_api
    $.ajax({
    url: 'api/cards/' + targetValue,
    crossDomain: true,
    contentType: 'application/x-www-form-urlencoded', 
    type: 'get',
    headers: {
        'Authorization' : 'dnZpcDk=aHR1dG1lZGlh'
    }, 
    success: function(response){
        console.log(response);
        data = response.preview_design;
        $.each(data, function(i, value) {
                //loop_card_designs
                $('#column-image').append(`<div class="col-md-4">
                <img src="../storage/cards/` + value['front_image'] + `" id="image_data" alt="" width="310" height="200">
                <div class="col-md-6 col-md-offset-3" style="display: flex; justify-content: center;">
                    <button type="button" class="btn btn-success zoom" id="` + value['id']  + `" data-id="` + value['id'] + `">` + zoom_card + `</button>
                    <button type="button" class="btn btn-success select-card" id="` + value['id']  + `" data-id="` + value['id'] + `">`+ select_card  +`</button>
                </div>
                <div class="col-md-6 col-md-offset-3">
                    <p id="success_p"  class="success_text`+ value['id'] +`"></p>
                </div>`);
            
            //add_color_to_name&description
            $('.front_card_name').attr('style', 'color:' + $('#text_color').val() + ';');
            $('.card_description').attr('style', 'color:' + $('#text_color').val() + ';');

            //normal_package_condition
            if(targetValue == "12345"){
                $('#bg_div').hide();
                $('#qr_div').hide();
                $('#card_blank_back').attr('style', 'margin-top: 100px !important;');
            } 

            //add_bg_color
            let colorInput = document.getElementById('background_color');
            colorInput.addEventListener('input', () =>{
                if(targetValue == "12345"){
                    $('#card_blank_front').attr('style', 'background-color:' + colorInput.value + ';');
                } else {
                    $('#card_blank_front').attr('style', 'background-color:' + colorInput.value + ';');
                    $('#card_blank_back').attr('style', 'background-color:' + colorInput.value + ';');
                }
            });

            //zoom_card
            $('.zoom').on('click', function(e) {
                let id = e.target.id;
                if(id == value['id']){
                    // console.log(value['preview_design']['back_image']);
                        $('#front_img').attr('src', "../storage/cards/" + value['front_image']);
                    if(targetValue == "12345"){
                        $('#back_img').attr('src', "../images/Back.png");
                    } else {
                        console.log(value['default_back_transparent']);
                        $('#back_img').attr('src', "../storage/cards/" + value['back_image']);
                    }
                    $('#exampleModal').modal('show');
                }
            });

            //select_card
            $('.select-card').on('click', function(e) {
                $('.next').attr('disabled', false);
                var target = e.target.id;
                console.log(target);
                $('#card_design_id').val(target);
                $.ajax({
                    url: 'api/card_by_id/' + target,
                    crossDomain: true,
                    contentType: 'application/x-www-form-urlencoded', 
                    type: 'get',
                    headers: {
                        'Authorization' : 'dnZpcDk=aHR1dG1lZGlh'
                    }, 
                    success: function(response){
                        var front_theme = response.package_design[0]['front_trans'];
                        var back_theme = response.package_design[0]['back_trans'];
                        var tran_front_data = response.package_design[0]['front_trans'][0];
                        var tran_back_data = response.package_design[0]['back_trans'][0];
                        var txt_color = tran_front_data['textcolor'];
                        var frontposition = tran_front_data['front_position'];
                        var backposition = tran_back_data['back_position'];
                        $('#background_color').val(tran_front_data['bg_color']);
                        $('#text_color').val(txt_color);
                        $('#card_blank_front').attr('style', 'background-color:'+ tran_front_data['bg_color'] +'!important;');
                        $('#frontcard').attr('style', 'background-color:'+ tran_front_data['bg_color'] +'!important;');
                        $('.front_card_name').attr('style', 'color:' + txt_color + '!important;');
                        $('.card_description').attr('style', 'color:' + txt_color + '!important;');
                        $('#catch_click').text(tran_front_data['front_position']);
                        var tran_front_img = tran_front_data['front_image'].replace('http://admin.vvip9.co/card_collection/', '../storage/cards/');
                        $('#card_front').attr('src', tran_front_img);
                        $('#front_move_' + frontposition).trigger('click');
                        if(targetValue != '12345'){
                            var tran_back_img = tran_back_data['back_image'].replace('http://admin.vvip9.co/card_collection/', '../storage/cards/');
                            $('#card_back').attr('src', tran_back_data);
                            $('#move_' + backposition).trigger('click');
                            $('.back_theme').show();
                            $('#backcard').attr('style', 'background-color:'+ tran_back_data['bg_color'] +'!important;');
                        } else {
                            $('#qrposition').text(tran_back_data['back_position']);
                            $('.back_theme').hide();
                        }
                        $('#qrposition').val(tran_back_data['back_position']);
                        $('#exampleModal').modal('hide');
                        $('.success_text' + target).text(select_success).delay(5000).fadeOut();


                        $.each(front_theme, function(i,front_theme_val){
                            var fronttheme = front_theme_val['front_image'].replace('http://admin.vvip9.co/card_collection/', '../storage/cards/');
                            console.log(fronttheme);
                            $('.front_theme_div').append(`
                                <div class="col" style="margin-right: 5px !important; margin-top: 5px !important;">
                                    <img src="`+ fronttheme +`" alt="" width="60" height="60" class="theme_img_front" id="`+ fronttheme +`" data-property="`+ front_theme_val['front_property'] +`" data-position="`+ front_theme_val['front_position'] +`">
                                </div>
                            `)
                        })

                        $.each(back_theme, function(i,back_theme_val){
                            var backtheme = back_theme_val['back_image'].replace('http://admin.vvip9.co/card_collection/', '../storage/cards/');
                            $('.back_theme_div').append(`
                                <div class="col" style="margin-right: 5px !important; margin-top: 5px !important;">
                                    <img src="`+ backtheme +`" alt="" width="60" height="60" class="theme_img_back" id="`+ backtheme +`" data-property="`+ back_theme_val['back_property'] +`" data-position="`+ back_theme_val['back_position'] +`">
                                </div>
                            `)
                        })

                        $('.theme_img_front').on('click', function(e){
                            $('#card_front').attr('src', e.target.id);
                            if(e.target.getAttribute('data-property') == "unactive"){
                                $('#front_move_' + e.target.getAttribute('data-position')).trigger('click');
                                $('#positioning').hide();
                            } else {
                                $('#positioning').show();
                            }
                        });

                        $('.theme_img_back').on('click', function(e){
                            $('#card_back').attr('src', e.target.id);

                            if(e.target.getAttribute('data-property') == "unactive"){
                                $('#move_' + e.target.getAttribute('data-position')).trigger('click');
                                $('#positioning').hide();
                            } else {
                                $('#positioning').show();
                            }
                        });
                    }
                });
            });  
        });
    },
});
}  


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
