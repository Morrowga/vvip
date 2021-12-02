$(function() {
    var user_id = $('#userid').val();
    var profile_url = 'api/get_datas';
    $.ajax({
        url:profile_url,
           method:'POST',
           data:{
                user_id: user_id,
                request_name: "get_user_profile"
                },
           success:function(response){
               if(response.data != null){
                $('#username').text(response.data['name']);
                $('#email_name').text(response.data['email']);
                $('#mobile').text(response.data['phone_number']);
                $('#customer_url').text('http://vvip9.co/' + response.data['url']);
                $('#package').text(response.data['package']);
                $('#package_status').text(response.data['package_status']);
                $('remaining_days').text(response.data['remaining_days']);
                if(response.data['secure_status'] == 'public'){
                    $('#secure_status').text(response.data['secure_status']);
                    $('#private_on_off').text('Off');
               }
               }
               console.log(response);
           }
    });

    $('.sw').on('change', function(){
        var check = $(this);
        var check_value = check.val();

        if(check.is(':checked')){
            $('#private_on_off').text('On');
        } else {
            $('#private_on_off').text('Off');
        }
    });
});