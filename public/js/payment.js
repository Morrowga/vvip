$(function(){
    $('#kpop').hide();
    $('#wpop').hide();
    $('#kbzpop').hide();
    $('#ayapop').hide();

    $('.payment_link').on('click', function(e){
        var payment = $(this).attr('data-value');
        $('#payment_modal').modal('show');
        if(payment == 'kpay'){
            $('#payment-title').attr('src', 'https://is4-ssl.mzstatic.com/image/thumb/Purple114/v4/7e/a2/79/7ea2799e-feae-79ec-1fd6-b9f20cb1ed34/source/512x512bb.jpg');
            $('#payment-account').html('<i class="far fa-address-card"></i>' + 'Account No - 09795684194');
            $('#kpop').show();
            $('#wpop').hide();
            $('#kbzpop').hide();
            $('#ayapop').hide();
        } else if(payment == 'wavemoney'){
            $('#payment-title').attr('src', 'https://pbs.twimg.com/profile_images/1041604335543627776/REZJdo09_400x400.jpg');
            $('#payment-account').html('<i class="far fa-address-card"></i>' + 'Account No - 09266331136');
            $('#wpop').show();
            $('#kpop').hide();
            $('#kbzpop').hide();
            $('#ayapop').hide();
        } else if(payment == 'kbzbanking'){
            $('#payment-title').attr('src', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJIGpWUpbBiv0ms_OSlbsr0PWx1Ep6RCJmYfVvjq_R1hjG0n7hLd3P4WdBytwD16gSSmE&usqp=CAU');
            $('#payment-account').html('<i class="far fa-address-card"></i>' + 'Account No - 1312443534554545454544');
            $('#kbzpop').show();
            $('#kpop').hide();
            $('#wpop').hide();
            $('#ayapop').hide();
        } else if(payment == 'ayabanking'){
            $('#payment-title').attr('src', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQtWYCKM4fAMo9zl4kFRNcRE_aW5Mw79xJZoTZbSaPxdJruHcR28dKo_4HwxrS_gPlRFcg&usqp=CAU');
            $('#payment-account').html('<i class="far fa-address-card"></i>' + 'Account No - 82423742384738473834343');
            $('#ayapop').show();
            $('#kpop').hide();
            $('#wpop').hide();
            $('#kbzpop').hide();
        }
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