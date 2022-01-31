$(function() {
    var userId = $('#userid').val();
    //button_hide_show_play
    $('.file_upload').on('change',function(){
        var url = window.URL.createObjectURL(this.files[0]);
        $('#img').attr('src',url);
    });

    $('.link_file_upload').on('change',function(){
        var link_url = window.URL.createObjectURL(this.files[0]);
        $('#link_img').attr('src',link_url);
    });

    $('#cands_section').hide();
    $('#contact_section').hide();
    $('#deep_link_section').hide();
    $('#url_section').hide();
    $('#sms_section').hide();
    $('#email_section').hide();
    $('#phone_section').hide();
    $('#event_section').hide();
    $('#link_tree_section').hide();
    $('#disappear_cns').hide();
    // $('#link_three').hide();
    // $('#link_four').hide();
    // $('#link_five').hide();

    $('#see_more_contact').hide();

    $('#cands').on('click', function(){
        $('#create_section').hide();
        $('#cands_section').show();
        $.ajax({
            url: 'api/get_datas',
            method:'POST',
            data:{
                 user_id: user_id,  
                 request_name: "get_contacts"
                 },
            success:function(response){
                console.log(response);
                if(response.text != "no data available"){
                    console.log(response);
                    $('#cns_image').attr('src', '../' + response.data['image']);
                    $('#cns_firstname').text(response.data['personal']['first_name']);
                    $('#cns_lastname').text(response.data['personal']['last_name']);
                    $('#cns_company').text(response.data['personal']['company']);
                    $('#cns_position').text(response.data['personal']['position']);
                    $('#cns_birthday').text(response.data['personal']['birthday']);
                    $('#cns_mobile').text(response.data['mobile']['mobile']);
                    $('#cns_phone').text(response.data['mobile']['phone']);
                    $('#cns_office').text(response.data['mobile']['office']);
                    $('#cns_personal').text(response.data['email_and_internet']['personalemail']);
                    $('#cns_officeemail').text(response.data['email_and_internet']['office_email']);
                    $('#cns_webone').attr('href',response.data['email_and_internet']['website_one']).text(response.data['email_and_internet']['website_one']);
                    $('#cns_webtwo').attr('href',response.data['email_and_internet']['website_two']).text(response.data['email_and_internet']['website_two']);
                    $('#cns_webthree').attr('href',response.data['email_and_internet']['website_three']).text(response.data['email_and_internet']['website_three']);
                    $('#cns_strone').text(response.data['home_address']['street_one']);
                    $('#cns_strtwo').text(response.data['home_address']['street_two']);
                    $('#cns_postal').text(response.data['home_address']['postal_code']);
                    $('#cns_city').text(response.data['home_address']['city']);
                    $('#cns_state').text(response.data['home_address']['state']);
                    $('#cns_country').text(response.data['home_address']['country']);
                    $('#cns_work_strone').text(response.data['work_address']['street_one']);
                    $('#cns_work_strtwo').text(response.data['work_address']['street_two']);
                    $('#cns_work_postal').text(response.data['work_address']['postal_code']);
                    $('#cns_work_city').text(response.data['work_address']['city']);
                    $('#cns_work_state').text(response.data['work_address']['state']);
                    $('#cns_work_country').text(response.data['work_address']['country']);
                    
                    $('#seemore_contact_btn').on('click', function(){
                        $('#disappear_cns').show();
                        $('#seemore_contact_btn').hide();
                        $('#see_more_contact').show();
                        if(response.data['personal']['first_name'] == null && response.data['personal']['last_name'] == null){
                            $('#namesection').hide();
                        } else {
                            $('#namesection').show();
                        }
                        if(response.data['personal']['first_name'] == null){
                            $('#cns_firstname').hide();
                        } else {
                            $('#cns_firstname').show();
                        }
                        if(response.data['personal']['last_name'] == null){
                            $('#cns_lastname').hide();
                        } else {
                            $('#cns_lastname').show();
                        }
            
                        if(response.data['personal']['company'] == null){
                            $('#comsection').hide();
                        } else {
                            $('#comsection').show();
                        }
            
                        if(response.data['personal']['position'] == null){
                            $('#positionsection').hide();
                        } else {
                            $('#positionsection').show();
                        }
            
                        if(response.data['personal']['birthday'] == null){
                            $('#bdsection').hide();
                        } else {
                            $('#bdsection').show();
                        }
            
                        if(response.data['home_address']['street_one'] == null){
                            $('#home_strone_section').hide();
                        } else {
                            $('#home_strone_section').show();
                        }
                        
                        if(response.data['home_address']['street_two'] == null){
                            $('#home_strtwo_section').hide();
                        } else {
                            $('#home_strtwo_section').show();
                        }
            
                        if(response.data['home_address']['postal_code'] == null){
                            $('#home_postal_section').hide();
                        } else {
                            $('#home_postal_section').show();
                        }
            
                        if(response.data['home_address']['city'] == null){
                            $('#home_city_section').hide();
                        } else {
                            $('#home_city_section').show();
                        }
                        
                        if(response.data['home_address']['state'] == null){
                            $('#home_state_section').hide();
                        } else {
                            $('#home_state_section').show();
                        }
            
                        if(response.data['home_address']['country'] == null) {
                            $('#home_country_section').hide();
                        } else {
                            $('#home_country_section').show();
                        }
            
                        if(response.data['work_address']['street_one'] == null){
                            $('#work_strone_section').hide();
                        } else {
                            $('#work_strone_section').show();
                        }
                        
                        if(response.data['work_address']['street_two'] == null){
                            $('#work_strtwo_section').hide();
                        } else {
                            $('#work_strtwo_section').show();
                        }
            
                        if(response.data['work_address']['postal_code'] == null){
                            $('#work_postal_section').hide();
                        } else {
                            $('#work_postal_section').show();
                        }
            
                        if(response.data['work_address']['city'] == null){
                            $('#work_city_section').hide();
                        } else {
                            $('#work_city_section').show();
                        }
                        
                        if(response.data['work_address']['state'] == null){
                            $('#work_state_section').hide();
                        } else {
                            $('#work_state_section').show();
                        }
            
                        if(response.data['work_address']['country'] == null) {
                            $('#work_country_section').hide();
                        } else {
                            $('#work_country_section').show();
                        }
            
                        if(response.data['mobile']['mobile'] == null){
                            $('#mobilesection').hide();
                        } else {
                            $('#mobilesection').show();
                        }
            
                        if(response.data['mobile']['phone'] == null){
                            $('#phonesection').hide();
                        } else {
                            $('#phonesection').show();
                        }
            
                        if(response.data['mobile']['office'] == null){
                            $('#officesection').hide();
                        } else {
                            $('#officesection').show();
                        }
                        
                        if(response.data['email_and_internet']['personalemail'] == null){
                            $('#personalsection').hide();
                        } else {
                            $('#personalsection').show();
                        }
            
                        if(response.data['email_and_internet']['office_email'] == null){
                            $('#officeemailsection').hide();
                        } else {
                            $('#officeemailsection').show();
                        }
            
                        if(response.data['email_and_internet']['website_one'] == null){
                            $('#wbonesection').hide();
                        } else {
                            $('#wbonesection').show();
                        }
            
                        if(response.data['email_and_internet']['website_two'] == null){
                            $('#wbtwosection').hide();
                        } else {
                            $('#wbtwosection').show();
                        }
            
                        if(response.data['email_and_internet']['website_three'] == null){
                            $('#wbthreesection').hide();
                        } else {
                            $('#wbthreesection').show();
                        }
                    });

                    $('#disappear_cns').on('click', function(){
                        $('#seemore_contact_btn').show();
                        $('#disappear_cns').hide();
                        $('#see_more_contact').hide();
                    });
                } else {
                    console.log(response.text);
                    $('#cns_no_data_text').append(`
                        <h1 id="no_data_text" class="text text-center">`+ response.text +`</h1>
                    `);
                }
            }
        });

        $.ajax({
            url: 'api/get_datas',
            method:'POST',
            data:{
                 user_id: user_id,  
                 request_name: "get_link_trees"
                 },
            success:function(response){
                $('#link_tree_cns').attr('src', '../' + response.data['link_image']);
                var linktree = response.data['link_data'];
                $.each(linktree, function(i,val){
                    console.log(val);
                    $('#link_tree_links_cns').append(`
                        <div class="col-md-12 mt-2">
                            <a href="https://`+ val['url'] +`" target="_blank" class="btn btn-success btn-block" id="linkcns">`+ val['label'] +`</a>
                        </div>
                    `);
                });
                console.log(response);
            }
        })
    });

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
           headers:{
            'userId': userId
            },
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
        headers:{
            'userId': userId
        },
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
                    'X-CSRF-Token': token,
                    'userId': userId
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
        // $('.submit_link_tree').attr('disabled', false);
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
                'X-CSRF-Token' : token,
                'userId': userId
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
        headers:{
            'userId': userId
        },
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
        headers:{
            'userId': userId
        },
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
                    'X-CSRF-Token': token,
                    'userId': userId
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
                    'X-CSRF-Token': token,
                    'userId': userId
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
                    'X-CSRF-Token': token,
                    'userId': userId
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
                    'X-CSRF-Token': token,
                    'userId': userId
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

    $('.event_upload').on('change',function(){
        var event_url = window.URL.createObjectURL(this.files[0]);
        $('.event_image').attr('style',`background-image: url('` + event_url + `'); background-size: cover; background-position: center;`);
    });

    $('#event').on('click', function(){
        $('#create_section').hide();
        $('#event_section').show();
        $('#e-display').hide();
    });

    $('#eventlists').on('click', function() {
        $('#e-display').show();
        $('#e-create').hide();

        var userid = $('#e-userid').val();


        $.ajax({
            url: 'api/get_datas',
            method: 'POST',
            headers:{
                'userId': userId
            },
            data: {
                user_id:userid,
                request_name: "get_events"
            },
            success:function(response){
                $('#e-list-group').empty();
                var data = response.data;
                $.each(data, function(i,e_val) {
                    $('#e-list-group').append(`
                        <li class="list-group-item" id="`+ e_val['id'] +`">
                            <div class="d-flex justify-content-center row">
                                <div class="col-md-7">
                                    <p class="event_text_date"><i class="fas fa-calendar-alt ml-2 mr-2"></i>`+ e_val['start_date'] +` to `+ e_val['end_date'] +`</p> 
                                    <p class="event_text_date"><i class="far fa-clock mr-2 ml-2"></i>` + e_val['start_time'] + ' - ' + e_val['end_time'] +`<i class="fas fa-location-arrow ml-2 mr-2"></i>`+ e_val['location'] +`</p>
                                    <p class="event_text ml-2">`+ e_val['title'] +`</p>
                                    <p class="event_text ml-2">`+ e_val['description'] +`</p>
                                    <div class="d-flex justify-content-right">
                                        <button class="btn btn-success event_show" id="`+ e_val['id'] +`">Show</button>
                                        <button class="btn btn-warning ml-2 event_hide" id="`+ e_val['id'] +`" disabled>Hide</button>
                                        <button class="btn btn-danger ml-2 event_delete" id="`+ e_val['id'] +`">Delete</button>
                                    </div>
                                </div>
                                <div class="col-md-5 text-center">
                                    <img class="mt-4" src="../`+ e_val['image'] +`" width="150" height="150">
                                </div>
                            </div>
                        </li>
                    `);
                    if(e_val['is_displayed'] == 1){
                        $('.event_show[id="'+ e_val['id'] +'"]').attr('disabled', true);
                        $('.event_hide[id="'+ e_val['id'] +'"]').attr('disabled', false);
                    } 
                });

                $('.event_show').on('click', function(e){
                    var current_id = e.target.id;
                    var event_action = $(this).text();
                    console.log(current_id);
                    console.log($(this).text());
            
                    var userid = $('#e-userid').val();
            
                    $.ajax({
                        url: 'api/action_event_by_id',
                        method: "POST",
                        headers:{
                            'userId': userId
                        },
                        data: {
                            id: current_id,
                            eventaction: event_action,
                            user_id: userid
                        },
                        success:function(response){
                            console.log(response);
                            $('.event_show[id='+ response.id +']').attr('disabled', true);
                            $('.event_hide[id='+ response.id +']').attr('disabled', false);
                        }
                    });
                });

                $('.event_hide').on('click', function(e){
                    var current_id = e.target.id;
                    var event_action = $(this).text();
                    console.log(current_id);
                    console.log($(this).text());
            
                    var userid = $('#e-userid').val();
            
                    $.ajax({
                        url: 'api/action_event_by_id',
                        method: "POST",
                        data: {
                            id: current_id,
                            eventaction: event_action,
                            user_id: userid
                        },
                        success:function(response){
                            console.log(response);
                                $('.event_show[id='+ response.id +']').attr('disabled', false);
                                $('.event_hide[id='+ response.id +']').attr('disabled', true);
                        }
                    });
                });

                $('.event_delete').on('click', function(e){
                    var current_id = e.target.id;
                    var event_action = $(this).text();
                    console.log(current_id);
                    console.log($(this).text());
            
                    var userid = $('#e-userid').val();
            
                    $.ajax({
                        url: 'api/action_event_by_id',
                        method: "POST",
                        data: {
                            id: current_id,
                            eventaction: event_action,
                            user_id: userid
                        },
                        success:function(response){
                            console.log(response);
                            $('.list-group-item[id='+ response.id +']').remove();
                        }
                    });
                });
            }
        })
    });


    $("#countryId").bind("change keyup", function(event){
        //Code here
        $('#country_id').val($(this).val());
     });

     $("#stateId").bind("change keyup", function(event){
        //Code here
        $('#state_id').val($(this).val());
     });

     $("#cityId").bind("change keyup", function(event){
        //Code here
        $('#city_id').val($(this).val());
     });

     $("#detail_location").on("keyup", function(event){
        //Code here
        $('#detaillocate').val($(this).val());
     });

    $('#close_eventlist').on('click', function(){
        $('#e-create').show();
        $('#e-display').hide();
    });

    $('#event_form').on('submit', function(e){
        $('#location').val($('#detaillocate').val()+ ' , ' + $('#state_id').val() + ' , ' + $('#country_id').val());
        e.preventDefault();
        var create_event = 'api/create_event';
        var token =  $('#token').val();
        let formData = new FormData(this);

        $.ajax({
            url: create_event,
            method:'POST',
            contentType: false,
            processData: false,
            headers: {
                    'X-CSRF-Token': token,
                    'userId': userId
            },
            data: formData,
            success:function(response){
                $('#save_text').text('Event ' + savethetext);
                $('#save_modal').modal('show');
                $('#event_section').hide();
                $('#ok').on('click', function(){
                    $('#create_section').show();
                })
            }
        });
    });
});
