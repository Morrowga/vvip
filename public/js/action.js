$(function() {
    var user_id = $('#userid').val();
    var action_url = 'api/change_action';
    var token =  $('#token').val();
    $('.action-btn').on('click', function(e){
        var request_name = $('#' + e.target.id).val();
        $.ajax({
           url:action_url,
           headers: {
                'X-CSRF-Token': token 
            },
           method:'POST',
           data:{
                user_id: user_id,  
                request_name: request_name,
                self_request_name: e.target.id
                },
           success:function(response){
               console.log(response);
               var id_value = ['contact_active', 'deep_link_active','link_tree_active', 'url_active', 'email_active', 'sms_active', 'call_active'];
               $.each(id_value, function(i,value){
                   var check = $('#' + value);
                   if(check.attr('data-id') == response.data['self_request_name']){
                       check.attr('style', 'background-color: rgb(217,181,81) !important');
                   } else {
                       check.attr('style', 'background-color: rgb(0,0,0) !important');
                   }
               });
           }
        });
    });

    var get_action = 'api/get_datas'
    var get_request = 'get_selected_action';
    $.ajax({
        url: get_action,
        headers: {
            'X-CSRF-Token': token
        },
        method: 'POST',
        data:{
            user_id: user_id,
            request_name: get_request,
        },
        success:function(response){
            console.log(response.data['self_request_name']);
            if(response.data['self_request_name'] == ""){
                console.log('no data');
            } else {
                $('#' + response.data['self_request_name']).attr('style', 'background-color: rgb(217,181,81) !important');
            }
        }
    });

});