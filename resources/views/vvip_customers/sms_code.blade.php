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
            
            <form action="" class="mt-5" id="otp_form">
              <input class="otp" type="text" oninput='digitValidate(this)' onkeyup='tabChange(1)' maxlength=1 >
              <input class="otp" type="text" oninput='digitValidate(this)' onkeyup='tabChange(2)' maxlength=1 >
              <input class="otp" type="text" oninput='digitValidate(this)' onkeyup='tabChange(3)' maxlength=1 >
              <input class="otp" type="text" oninput='digitValidate(this)'onkeyup='tabChange(4)' maxlength=1 >
            </form>
            <hr class="mt-4">
            <button class='btn btn-primary btn-block mt-4 mb-4 customBtn'>Verify Account</button>
          </div>
        </div>
      </div>
  </div>
</div>
@section('script')
<script>
let digitValidate = function(ele){
  console.log(ele.value);
  ele.value = ele.value.replace(/[^0-9]/g,'');
}

let tabChange = function(val){
    let ele = document.querySelectorAll('input');
    if(ele[val-1].value != ''){
      ele[val].focus()
    }else if(ele[val-1].value == ''){
      ele[val-2].focus()
    }   
 }
</script>
@endsection
@endsection