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
    //card_ap
}  

jQuery('.fp-slider-items').slick({
    dots: false,
    infinite: true,
    speed: 10000,
    slidesToShow: 4,
    slidesToScroll: 2,
    arrows: true,
    autoplay: true,
    autoplaySpeed: 100,
    responsive: [
    {
    breakpoint: 992,
    settings: {
    slidesToShow: 2,
    slidesToScroll: 2
    }
    },
    {
    breakpoint: 600,
    settings: {
    slidesToShow: 1,
    slidesToScroll: 1
    }
    },
    {
    breakpoint: 480,
    settings: {
    slidesToShow: 1,
    slidesToScroll: 1
    }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
    ]
});