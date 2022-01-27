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

//package_info
$('.moreinfo_package').on('click', function(e){
    $('#prices-section').hide().fadeOut("slow");
    $('#info_section').show().fadeIn("slow");

    var pack_value = e.target.id;

    if(pack_value == "normal"){
        $('#info_contact').show();
        $('#info_deeplink').show();
        $('#info_linktree').show();
        $('#info_url').show();
        $('#info_call').show();
    } else if(pack_value == "standard"){
        $('#info_contact').show();
        $('#info_deeplink').show();
        $('#info_linktree').show();
        $('#info_url').show();
        $('#info_call').show();
        $('#info_email').show();
        $('#info_events').show();
        $('#info_cns').show();
        $('#info_bank').show();
        $('#info_sms').show();
    } else if(pack_value == "luxury"){
        $('#info_contact').show();
        $('#info_deeplink').show();
        $('#info_linktree').show();
        $('#info_url').show();
        $('#info_call').show();
        $('#info_email').show();
        $('#info_events').show();
        $('#info_cns').show();
        $('#info_bank').show();
        $('#info_sms').show();
        $('#info_assistant').show();
        $('#info_metal').show();
    }
});

$('.packinfo_btn').on('click', function(){
    $('#prices-section').show().fadeIn("slow");
    $('#info_section').hide().fadeOut("slow");
})

//submit_disabled
$('#password').on('keyup', function(){
    $('.sub-btn').attr('disabled', false);
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
      if(response.status == "200"){
        document.getElementById('prices-section').style.display = "none";
        document.getElementById('prices-section-save').style.display = "none";
        document.getElementById('prices-section-two').style.display = "block";
        document.getElementById('ph_name').value = response.phone_number;
        document.getElementById('username').value = response.name;

        // $('.front_card_name').text(response.name);
        // document.getElementById('phone').value = response.phone_number;
        $('#p_phone').val(response.phone_number);
        setInterval(function(){ 
            $('.hp-fp-section').show();
            $('.load-section').hide();
        }, 2000);
      }else if(response.status == "400"){
            $('#error_text').html(invalid_error);
      } else if(response.status == "500"){
          if(response.message == "Phone Number Exist & Active"){
            $('.user_warning_text').text(exist_active);  
            $('#saveuser_check').modal('show');
            $('.u_exp').on('click', function(){
                window.location('login');
            });
            $('#useractive').show();
            $('#userexpired').hide();
          } else if(response.message == "Phone Number Exist & Expired"){
            $('.user_warning_text').text(exist_expired);
            $('#saveuser_check').modal('show');
            $('.u_exp').on('click', function(){
                document.getElementById('prices-section').style.display = "none";
                document.getElementById('prices-section-save').style.display = "none";
                document.getElementById('prices-section-two').style.display = "block";
                $('#saveuser_check').modal('hide');
                $('#p_phone').val(response.phone_number);
            });
            $('#useractive').hide();
            $('#userexpired').show();
          } else {
            var uid = response.userid;
            window.location = "otp/" + uid;
          }     
      }
   },
   error:function(error){
      console.log(error)
   }
});
});



function packageClick(e){
    document.getElementById('prices-section').style.display = "none";
    document.getElementById('prices-section-save').style.display = "block";
    document.getElementById('prices-section-two').style.display = "none";
    var targetValue = e.target.value;
    document.getElementById('package_name').value = targetValue;

    if(targetValue == '12345'){
        $('.packagetxtforuser').text(packagetextforuser_one + '  “ Gold  Package ”  ' + packagetextforuser_two);
    } else if(targetValue == '678910'){
        $('.packagetxtforuser').text(packagetextforuser_one + ' “ Diamond Package ” ' + packagetextforuser_two);
    } else if(targetValue == '11121314'){
        $('.packagetxtforuser').text(packagetextforuser_one + ' “ Ruby Package ” ' + packagetextforuser_two);
    }
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
                <img src="../storage/cards/` + value['front_image'] + `" id="image_data" alt="" width="270" height="200">
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
                // $('.next').attr('disabled', false);
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