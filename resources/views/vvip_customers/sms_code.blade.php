@extends('layouts.user_display')

@section('content')
<div class="d-flex justify-content-center">
    <img src="../images/logo.jpeg" alt="" width="250" height="250" id="image_hide">
</div>
<div class="container">
  <div class="row justify-content-md-center">
      <div class="col-md-4 text-center">
        <div class="row">
          <div class="col-sm-12 mt-5 bgWhite">
            <div class="title-otp">
              Verify OTP CODE
            </div>
            <form action="" method="POST" id="otp_form">
              <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}">
              <input class="otp" name="code1" type="text" oninput='digitValidate(this)' onkeyup='tabChange(1)' maxlength=1 >
              <input class="otp" name="code2" type="text" oninput='digitValidate(this)' onkeyup='tabChange(2)' maxlength=1 >
              <input class="otp" name="code3" type="text" oninput='digitValidate(this)' onkeyup='tabChange(3)' maxlength=1 >
              <input class="otp" name="code4" type="text" oninput='digitValidate(this)'onkeyup='tabChange(4)' maxlength=1 >
              <input class="otp" name="code5" type="text" oninput='digitValidate(this)'onkeyup='tabChange(5)' maxlength=1 >
              <input class="otp" name="code6" type="text" oninput='digitValidate(this)'onkeyup='tabChange(6)' maxlength=1 >
            <hr class="mt-4">
            <input class="otp_userid" name="userid" type="text" hidden>
            <button type="submit" class='btn btn-primary btn-block mt-4 mb-4 customBtn'>Verify Account</button>
            <p class="text" style="margin-top: 10px;" id="otp_text"></p>
            </form>
            <form action="" method="POST" id="s-again">
              <input type="hidden" id="token_code" name="_token" value="{{ csrf_token() }}">
              <input type="text" id="encrypt" name="userid" hidden> 
              <button type="submit" class="btn btn-dark text-left send-again mb-4" style="text-align: right !important; float: right !important;"></button>
            </form>
          </div>
        </div>
      </div>
  </div>
</div>
@section('script')
<script>
let digitValidate = function(ele){
  console.log(ele.value);
  ele.value = ele.value.replace(/[^a-zA-Z0-9 _]/g,'');
}

let tabChange = function(val){
    let ele = document.querySelectorAll('input.otp');
    if(ele[val-1].value != ''){
      ele[val].focus()
    }else if(ele[val-1].value == ''){
      ele[val-2].focus()
    }   
    // console.log(val);
 }

 $(function(){

  $(window).on('load', function() {
    $('.send-again').attr('disabled', true)
    var counter = 60;
    var interval = setInterval(function() {
        counter--;
        // Display 'counter' wherever you want to display it.
        if (counter == 0) {
            clearInterval(interval);
            $('.send-again').attr('disabled', false);
            $('.send-again').html('<i class="fas fa-hourglass-half mr-2"></i>Send Again');
            return;
        }else{
          $('.send-again').html('<i class="fas fa-hourglass-half mr-2"></i>Send Again ' + counter + 's');
          // console.log("Timer --> " + counter);
        }
    }, 1000);
  });

  $('#s-again').on('submit', function(e){
      e.preventDefault()
      var current = window.location.pathname;
      var result = current.split('/');  
      var userid_value = $('#encrypt').val(result[2]);
      var token =  $('#token_code').val();
      let formDataCode = new FormData(this);

      $.ajax({
      url: '/api/sendagain',
      method:'POST',
      contentType: false,
      processData: false,
      headers: {
          'Authorization' : 'dnZpcDk=aHR1dG1lZGlh',
          'X-CSRF-Token': token 
      },
      data: formDataCode,
      success: function(response){
        console.log(response);
        if(response['message'] == "success"){
          $('#otp_text').text('Please check the code in your sms!')
        } else {
          $('#otp_text').text('Your OTP Code is Invalid.Try Again!')
        }
      }
    });


    $(this).attr('disabled', true);
    var counter = 60;
    var interval = setInterval(function() {
        counter--;
        // Display 'counter' wherever you want to display it.
        if (counter == 0) {
            clearInterval(interval);
            $('.send-again').attr('disabled', false);
            $('.send-again').html('<i class="fas fa-hourglass-half mr-2"></i>Send Again');
            return;
        }else{
          $('.send-again').html('<i class="fas fa-hourglass-half mr-2"></i>Send Again ' + counter + 's');
          // console.log("Timer --> " + counter);
        }
    }, 1000);
  });

  $('#otp_form').on('submit', function(e){
    var current = window.location.pathname;
    var result = current.split('/');  
    var userid = result[2];
    $('.otp_userid').val(result[2]);
    e.preventDefault();
    var token =  $('#token').val();
    let formData = new FormData(this);
    var token =  $('#token').val();

    $.ajax({
      url: '/api/verify',
      method:'POST',
      contentType: false,
      processData: false,
      headers: {
          'Authorization' : 'dnZpcDk=aHR1dG1lZGlh',
          'X-CSRF-Token': token 
      },
      data: formData,
      success: function(response){
        console.log(response);
        if(response == "success"){
          window.location.href = "{{ URL::to('login') }}"
        } else {
          $('#otp_text').text('Your OTP Code is Invalid.Try Again!')
        }
      }
    });
  });
})
</script>
@endsection
@endsection