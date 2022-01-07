$(function(){
    $('#kpop').hide();
    $('#wpop').hide();
    $('#kbzpop').hide();
    $('#ayapop').hide();

    $('.payment_link').on('click', function(e){
        var payment = $(this).attr('data-value');
        $('#payment_modal').modal('show');
        console.log(payment);
        console.log($('#package_name').val());
        if($('#package_name').val() == '12345'){
            $('#p_package').val('normal');
            $('#p_amount').val('80000');
            $('#amount_text').text(normaltext);
        } else if($('#package_name').val() == '678910'){
            $('#p_amount').val('120000');
            $('#p_package').val('standard');
            $('#amount_text').text(standardtext);
        } else if($('#package_name').val() == '11121314'){
            $('#p_package').val('luxury');
            $('#p_amount').val('150000');
            $('#amount_text').text(luxurytext);
        }
        if(payment == 'kpay'){
            $('#p_type').val('kpay');
            $('#payment-title').attr('src', 'https://is4-ssl.mzstatic.com/image/thumb/Purple114/v4/7e/a2/79/7ea2799e-feae-79ec-1fd6-b9f20cb1ed34/source/512x512bb.jpg');
            $('#payment-account').html('<i class="far fa-address-card"></i>' + 'Account No - 09795684194');
            $('#kpop').show();
            $('#wpop').hide();
            $('#kbzpop').hide();
            $('#ayapop').hide();
        } else if(payment == 'wavemoney'){
            $('#p_type').val('wavemoney');
            $('#payment-title').attr('src', 'https://pbs.twimg.com/profile_images/1041604335543627776/REZJdo09_400x400.jpg');
            $('#payment-account').html('<i class="far fa-address-card"></i>' + 'Account No - 09266331136');
            $('#wpop').show();
            $('#kpop').hide();
            $('#kbzpop').hide();
            $('#ayapop').hide();
        } else if(payment == 'kbzbanking'){
            $('#p_type').val('kbzbanking');
            $('#payment-title').attr('src', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJIGpWUpbBiv0ms_OSlbsr0PWx1Ep6RCJmYfVvjq_R1hjG0n7hLd3P4WdBytwD16gSSmE&usqp=CAU');
            $('#payment-account').html('<i class="far fa-address-card"></i>' + 'Account No - 1312443534554545454544');
            $('#kbzpop').show();
            $('#kpop').hide();
            $('#wpop').hide();
            $('#ayapop').hide();
        } else if(payment == 'ayabanking'){
            $('#p_type').val('ayabanking');
            $('#payment-title').attr('src', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQtWYCKM4fAMo9zl4kFRNcRE_aW5Mw79xJZoTZbSaPxdJruHcR28dKo_4HwxrS_gPlRFcg&usqp=CAU');
            $('#payment-account').html('<i class="far fa-address-card"></i>' + 'Account No - 82423742384738473834343');
            $('#ayapop').show();
            $('#kpop').hide();
            $('#wpop').hide();
            $('#kbzpop').hide();
        }
    });


    $('#payment_form').on('submit', function(e){
        e.preventDefault();
        var create_payment = 'api/pymt';
        var token =  $('#token').val();
        let formData = new FormData(this);

        $.ajax({
            url: create_payment,
            method:'POST',
            contentType: false,
            processData: false,
            headers: {
                    'X-CSRF-Token': token 
            },
            data: formData,
            success:function(response){
               console.log(response);
               if(response.message == 'success'){
                   $('#payment_modal').modal('hide');
               }
            }
        });
    });
    // $('[data-toggle="popover"]').popover();
    $('[data-rel=popover]').popover({
        html: true,
        trigger: "hover"
      });

    $('.paymentload').on('change',function(){
        var url = window.URL.createObjectURL(this.files[0]);
        $('#screenshot').html('<img class="payment-screenshot" src="'+ url +'" alt="" width="320" height="300">');
    });
});