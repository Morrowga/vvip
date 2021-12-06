$(function() {
    
    //button_hide_show_play
    $('.file_upload').on('change',function(){
        var url = window.URL.createObjectURL(this.files[0]);
        $('#img').attr('src',url);
    });

    $('.link_file_upload').on('change',function(){
        var link_url = window.URL.createObjectURL(this.files[0]);
        $('#link_img').attr('src',link_url);
    });

    $('#contact_section').hide();
    $('#deep_link_section').hide();
    $('#url_section').hide();
    $('#sms_section').hide();
    $('#email_section').hide();
    $('#phone_section').hide();
    $('#link_tree_section').hide();
    // $('#link_three').hide();
    // $('#link_four').hide();
    // $('#link_five').hide();


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

    $('#link_tree').on('click', function() {
        $('#create_section').hide();
        $('#link_tree_section').show();
    });
    
    $('#section_cancel').on('click', function() {
        $('#create_section').show();
        $('#deep_link_section').hide();
    });

    $('#url').on('click', function(){
        $('#create_section').hide();
        $('#url_section').show();
    });

    $('#email_send').on('click', function(){
        $('#create_section').hide();
        $('#email_section').show();
    });

    $('#sms').on('click', function(){
        $('#create_section').hide();
        $('#sms_section').show();
    });

    $('#call').on('click', function(){
        $('#create_section').hide();
        $('#phone_section').show();
    });

    var data_url = 'api/get_datas';
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
                    if(value['active'] == 1){
                        $('#platform_col').append(`<div class="col-md-6">
                        <button type="button" class="btn btn-dark btn-block dlink_btn active_card check`+ value['id'] +`" id="`+ value['id'] +`">
                            <img src="` + value['icon']  + `" id="img_social" width="50" height="50">
                            <h5 class="social_link" id="social_link">` + value['name'] +`</h5>
                        </button>
                        </div>`);
                    } else {
                        $('#platform_col').append(`<div class="col-md-6">
                        <button type="button" class="btn btn-dark btn-block dlink_btn check`+ value['id'] +`" id="`+ value['id'] +`">
                            <img src="` + value['icon']  +`" id="img_social" width="50" height="50">
                            <h5 class="social_link" id="social_link">` + value['name'] +`</h5>
                        </button>
                        </div>`);
                    }
                    
                    $('#modal_section').append(`<div class="modal fade" id="deep_modal` + value['id'] + `" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body" id="modal_url_input">
                                                            <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}">
                                                            <h3 class="text url_text`+ value['id'] +`" id="url_text" name="url_text">`+ value['name'] +`</h3>
                                                            <input type="text" name="deep_url" placeholder="aungpyaephy6" class="form-control url_input`+ value['id'] +`" id="url_input" value="`+ value['url'] +`"> 
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-dark mt-2 btn-block active_save" id="`+ value['id'] +`">`+ active_deep +`</button>
                                                        <button class="btn btn-dark mt-2 btn-block just_save" id="`+ value['id'] +`">`+ onlysave +`</button>     
                                                        <button type="button" class="btn btn-secondary btn-block cancel_deep" data-bs-dismiss="modal">`+ closebtn +`</button> 
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>`);
                                            });
    
                $('.dlink_btn').on('click', function(){
                var id = this.id;
                var deep_modal = $('#deep_modal' + id);
                deep_modal.modal('show');


                $('.active_save').on("click", function(e){
                    var save_id = e.target.id;
                    var url = $('.url_input'+ save_id).val();
                    console.log(url);
                    var active = 1;
                    var name = $('.url_text' + save_id).text();
                    var post_url = 'api/create_deep_link';
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
                                $('#url_input'+ link_value['id']).val(link_value['url']);
                                $('#url_text' + link_value['id']).text(link_value['name']);
                                if(link_value['active'] == 1){
                                    // console.log($('.dlink_btn').attr('id'));
                                        // alert('he');
                                        $('.check' + link_value['id']).addClass('active_card');
                                } else {
                                    $('.check' + link_value['id']).removeClass('active_card');
                                }
                                $('#deep_modal'+ link_value['id']).modal('hide');
                        });
                        // console.log(response);
                    }
                    });
                });

                $('.just_save').on("click", function(e){
                    var save_id = e.target.id;
                    var save_url = $('.url_input'+ save_id).val();
                    console.log(url);
                    var active_zero = 0;
                    var save_name = $('.url_text' + save_id).text();
                    var post_url = 'api/create_deep_link';
                    var token =  $('#token').val();
                    $.ajax({
                    url:post_url,
                    method: 'POST',
                    headers: {
                        'X-CSRF-Token': token 
                    },
                    data:{
                        user_id: user_id,
                        url: save_url,
                        name: save_name,
                        active: active_zero
                    },
                    success:function(response){
                        link_data = response.data;
                        $.each(link_data, function(i,link_value){
                                $('#url_input'+ link_value['id']).val(link_value['url']);
                                $('#url_text' + link_value['id']).text(link_value['name']);''
                                if(link_value['active'] == 1){
                                    $('.check' + link_value['id']).addClass('active_card');
                                } 
                                $('#deep_modal'+ link_value['id']).modal('hide');
                        });
                        console.log(response);
                    }
                    });
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
            console.log(response.message);
            if(response.status != "500"){
                //  console.log(response.data['image']);
                // var image_display = response.data['image'].replace('../');
            $('#img').attr('src', '../' + response.data['image']);
            // $('.file_upload').val(response.data['image']);
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
            $('#website1').val(response.data['email_and_internet']['website_one']);
            $('#website2').val(response.data['email_and_internet']['website_two']);
            $('#website3').val(response.data['email_and_internet']['website_three']);
            $('#home_street1').val(response.data['home_address']['street_one']);
            $('#home_street2').val(response.data['home_address']['street_two']);
            $('#home_postal_code').val(response.data['home_address']['postal_code']);
            $('#home_city').val(response.data['home_address']['city']);
            $('#home_state').val(response.data['home_address']['state']);
            $('#home_country').val(response.data['home_address']['country']);
            $('#work_street1').val(response.data['work_address']['street_one']);
            $('#work_street2').val(response.data['work_address']['street_two']);
            $('#work_postal_code').val(response.data['work_address']['postal_code']);
            $('#work_city').val(response.data['work_address']['city']);
            $('#work_state').val(response.data['work_address']['state']);
            $('#work_country').val(response.data['work_address']['country']);
            // $('#background_color').val(response.data['background_color']);
            // $('#text_color').val(response.data['text_color']);
            // $('#text_highlight_color').val(response.data['text_highlight_color']);
            } else {
                console.log(response.message);
            }
            

            //create_contacts_ajax
        }
    });



    $('#upload-contact-form').on('submit',function(e){ 
        e.preventDefault();
        var contact_url = 'api/create_contact';
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
                $('#save_text').text('Contact ' + savethetext);
                $('#save_modal').modal('show');
                $('#contact_section').hide();
                $('#ok').on('click', function(){
                    $('#create_section').show();
                });
            }
            });  
    });

    var max_fields      = 10; //maximum input boxes allowed
	var wrapper   		= $(".link_input_field"); //Fields wrapper
	var add_button      = $(".add_moree"); //Add button ID
	
	var x = 1; //initlal text box count
	$(add_button).on('click',function(e){ //on add input button click
        $('.submit_link_tree').attr('disabled', false);
		e.preventDefault();
		if(x < max_fields){ //max input box allowed
			x++; //text box increment
			$(wrapper).append(`<div class="d-flex justify-content-center mt-2">
                                <div class="col-md-10 col-md-offset-1">
                                    <input type="text" class="form-control" name="links_label[]" placeholder="`+ app_label  +`">
                                    <input type="text" class="form-control mt-3" id="link_input" name="links[]" placeholder="`+ app_link  +`">
                                    <a href="#" class="remove_field btn btn-outline-danger btn-block mt-2">`+ remove +`</a>
                                </div>
                            </div>`); //add input box
		}
	});

    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })

    $('#link_tree_form').on('submit', function(e){
        e.preventDefault();
        var link_tree_url = 'api/create_link_tree';
        var token = $('#token').val();
        let formData = new FormData(this);
        $.ajax({
            url: link_tree_url,
            method: 'POST',
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-Token' : token
            },
            data: formData,
            success:function(response){
                console.log(response);
                $('#save_text').text('Link Tree ' + savethetext);
                $('#save_modal').modal('show');
            }
        });
    });

    var get_link_tree = 'api/get_datas';

    $.ajax({
        url:get_link_tree,
        method:'POST',
        data:{
            user_id: user_id,  
            request_name: "get_link_trees"
        },
        success:function(response){
            console.log(response);
            if(response.status == '200'){
                $('#link_img').attr('src', '../' + response.data['link_image']);
                var data = response.data['link_data'];
                $.each(data, function(i, value) {
                $(wrapper).append(`<div class="d-flex justify-content-center mt-2">
                                <div class="col-md-10 col-md-offset-1">
                                    <input type="text" class="form-control" name="links_label[]" value="`+ value['label'] +`" placeholder="Enter app label">
                                    <input type="text" class="form-control mt-3" id="link_input" value="`+ value['url'] +`" name="links[]" placeholder="write your app label">
                                </div>
                            </div>`)
            });
            } else {
                console.log('data does not exist'); 
            } 
        }
    });

    $.ajax({
        url:data_url,
        method:'POST',
        data:{
            user_id: user_id,  
            request_name: "get_eusp"
        },
        success:function(response){
            console.log(response.data);
            if(response.data == null || response.data == ''){
                console.log('no_data_yet');
            } else {
                $('#get_url').val(response.data['url']);
                $('#e_address').val(response.data['email_address']);
                $('#e_subject').val(response.data['email_subject']);
                $('#e_body').val(response.data['email_body']);
                $('#sms_no').val(response.data['sms_no']);
                $('#sms_text').val(response.data['sms_text']);
                $('#phone_num').val(response.data['phone']);
            }
        }
    });

    $('#get_url_form').on('submit', function(e){
        e.preventDefault();
        var create_url = 'api/create_url';
        var token =  $('#token').val();
        let formData = new FormData(this);

        $.ajax({
            url: create_url,
            method:'POST',
            contentType: false,
            processData: false,
            headers: {
                    'X-CSRF-Token': token 
            },
            data: formData,
            success:function(response){
                console.log(response.message);
                $('#save_text').text('Url ' + savethetext);
                $('#save_modal').modal('show');
                $('#url_section').hide();
                $('#ok').on('click', function(){
                    $('#create_section').show();
                });
            }
        });  
    });

    $('#email_form').on('submit', function(e){
        e.preventDefault();
        var create_email = 'api/create_email';
        var token =  $('#token').val();
        let formData = new FormData(this);

        $.ajax({
            url: create_email,
            method:'POST',
            contentType: false,
            processData: false,
            headers: {
                    'X-CSRF-Token': token 
            },
            data: formData,
            success:function(response){
                console.log(response.message);
                $('#save_text').text('Email ' + savethetext);
                $('#save_modal').modal('show');
                $('#email_section').hide();
                $('#ok').on('click', function(){
                    $('#create_section').show();
                });
            }
        });  
    });

    $('#sms_form').on('submit', function(e){
        e.preventDefault();
        var create_email = 'api/create_sms';
        var token =  $('#token').val();
        let formData = new FormData(this);

        $.ajax({
            url: create_email,
            method:'POST',
            contentType: false,
            processData: false,
            headers: {
                    'X-CSRF-Token': token 
            },
            data: formData,
            success:function(response){
                console.log(response.message);
                $('#save_text').text('SMS ' + savethetext);
                $('#save_modal').modal('show');
                $('#sms_section').hide();
                $('#ok').on('click', function(){
                    $('#create_section').show();
                });
            }
        });  
    });

    $('#phone_form').on('submit',function(e){
        e.preventDefault();
        var create_email = 'api/create_phone';
        var token =  $('#token').val();
        let formData = new FormData(this);

        $.ajax({
            url: create_email,
            method:'POST',
            contentType: false,
            processData: false,
            headers: {
                    'X-CSRF-Token': token 
            },
            data: formData,
            success:function(response){
                console.log(response.message);
                $('#save_text').text('Phone Number ' + savethetext);
                $('#save_modal').modal('show');
                $('#phone_section').hide();
                $('#ok').on('click', function(){
                    $('#create_section').show();
                });
            }
        });  
    });
});