@extends('layouts.app')

@section('content')

<input type="text" id="request" value="{{ $data_module->request_name }}" hidden>
<input type="text" id="user_id" value="{{ $data_module->user_id }}" hidden>

<div class="d-flex justify-content-center">
    <img src="../images/logo.jpeg" alt="" width="250" height="250">
</div>
<div class="container">
    <div class="col-md-12">
        <img src="" alt="" width="200" heighgt="200">
        <div class="contact_view">
            
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
            request_name: request_name
        },  
        type: 'POST',
        success: function(response){
            if(response.request == "contacts"){
                var image_display = response.data['image'].replace('http://vvip9.co/','../');
                $('.contact_view').append(`<div class="d-flex justify-content-center">
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
                    <p class="text">Street1 : `+ response.data['home_address']['street1'] +`</p>
                    <p class="text">Street2 : `+ response.data['home_address']['street2'] +`</p>
                    <p class="text">Postal Code : `+ response.data['home_address']['postal_code'] +`</p>
                    <p class="text">City : `+ response.data['home_address']['city'] +`</p>
                    <p class="text">State : `+ response.data['home_address']['state'] +`</p>
                    <p class="text">Country : `+ response.data['home_address']['country'] +`</p>
                </div>
                <div class="col-md-6">
                    <h3 class="text text-center">Work Address</h3>
                    <p class="text">Street1 : `+ response.data['work_address']['street1'] +`</p>
                    <p class="text">Street2 : `+ response.data['work_address']['street2'] +`</p>
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
                    <p class="text">Website1 : <a href="`+ response.data['email_and_internet']['website1'] +`">`+ response.data['email_and_internet']['website1'] +`</a></p>
                    <p class="text">Website2 : <a href="`+ response.data['email_and_internet']['website2'] +`">`+ response.data['email_and_internet']['website2'] +`</a></p>
                    <p class="text">Website3 : <a href="`+ response.data['email_and_internet']['website3'] +`">`+ response.data['email_and_internet']['website3'] +`</a></p>
                </div>
            </div>`)
            } else if(response.request == "deep_link"){
                data_view = response.deep_link;
                $.each(data_view, function(i,value){ 
                    if(value['active'] == 1){
                        window.location = value['url'];
                    }
                });
            }
            }
        });
</script>
@endsection
@endsection