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
               var id_value = ['contact_active', 'deep_link_active','link_tree_active', 'url_active', 'email_active', 'sms_active', 'call_active', 'cns_active', 'event_active'];
               $.each(id_value, function(i,value){
                   var check = $('#' + value);
                   var display = check.attr('data-text');
                   if(check.attr('data-id') == response.data['self_request_name']){
                       check.attr('style', 'background-color: rgb(217,181,81) !important');
                        check.html('<img src="../images/star.png" class="star_left mt-1" width="20" height="20" alt="">' + display + '<img src="../images/right_arrow.png" width="30" height="30" class="menu_arrow" alt="">');
                   } else {
                       check.attr('style', 'background-color: rgb(0,0,0) !important');
                       check.html(display + '<img src="../images/right_arrow.png" width="30" height="30" class="menu_arrow" alt="">');
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
                var text_dis = $('#' + response.data['self_request_name']).attr('data-text');
                $('#' + response.data['self_request_name']).html('<img src="../images/star.png" class="star_left mt-1" width="20" height="20" alt="">' + text_dis + '<img src="../images/right_arrow.png" width="30" height="30" class="menu_arrow" alt="">');
            }
        }
    });



    $(window).on('load', function(){
        setInterval(function(){ 
            $('#countDown').modal({
                backdrop: 'static',
    		    keyboard: false 
            });
            var expire = $('#exp_date').val();
            var countDownDate = new Date(expire).getTime();
            var x = setInterval(function() {

                // Get today's date and time
                var now = new Date().getTime();
                  
                // Find the distance between now and the count down date
                var distance = countDownDate - now;
                  
                // Time calculations for days, hours, minutes and seconds
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                  
                // Output the result in an element with id="demo"
                document.getElementById("countTime").innerHTML = days + "d " + hours + "h "
                + minutes + "m " + seconds + "s ";
                  
                // If the count down is over, write some text 
                if (distance < 0) {
                  clearInterval(x);
                  $('#countDown').modal('hide');
                }
              }, 1000);
        }, 2000);

    });

});