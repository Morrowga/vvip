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
            <button type="submit" class='btn btn-primary btn-block mt-4 mb-4 customBtn'>Verify Account</button>
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
  $('#otp_form').on('submit', function(e){
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
      }
    }
  });
 });
 })
</script>
@endsection
@endsection