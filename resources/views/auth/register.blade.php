@extends('layouts.app')

@section('content')
<div class="container" onload="focusText()">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="d-flex justify-content-center">
                    <img src="../images/logo.jpeg" alt="" class="register_logo">
                </div>
                <div class="form-group row">

                    <div class="col-md-6 offset-md-3">
                        <input id="name" type="text" placeholder="Enter Your Name" onkeyup="annotate()"
                            class="form-control @error('name') is-invalid @enderror register-input" name="name"
                            value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6 offset-md-3">
                        <input id="phone" type="text" placeholder="Enter Your Phone No"
                            class="form-control @error('phone_number') is-invalid @enderror register-input" name="phone_number"
                            value="{{ old('phone_number') }}" required autocomplete="phone_number">

                        @error('phone_number')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6 offset-md-3">'
                        <input id="email" type="email" placeholder="Enter Your Email"
                            class="form-control @error('email') is-invalid @enderror register-input" name="email"
                            value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6 offset-md-3 hr">
                </div>
                <div class="form-group">
                    <div class="col-md-6 offset-md-3">
                        <p class="pt-2 text">URL</p>
                        <div class="row">
                            <div class="col url">
                                <input type="radio" name="url_radio" onchange="getCheckedName()" value="" id="url_name" checked>
                                <label for="html">Name</label><br>
                            </div>
                            <div class="col url">
                                <input type="radio" name="url_radio" onchange="getCheckedSystem()" value="" id="url_system">
                                <label for="css">System</label><br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6 offset-md-3">
                        <div class="row">
                            <div class="col">
                                <p class="text mt-2">https://vvip9.co/</p>
                            </div>
                            <div class="col">
                                <input type="text" id="url" class="form-control url_input" name="url">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 offset-md-3 hr_bottom">
                </div>
                <div class="form-group">
                    <div class="col-md-6 offset-md-3">
                        <p class="pt-2 text">Secure</p>
                        <div class="row">
                            <div class="col url">
                                <input type="radio" name="secure_status" value="private">
                                <label for="html">Private</label><br>
                            </div>
                            <div class="col url">
                                <input type="radio" name="secure_status" value="public">
                                <label for="css">Public</label><br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6 offset-md-3">
                        <button type="submit" class="btn btn-primary register-btn btn-block">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>

                <div class="col-md-6 offset-md-3">
                    <a href="" class="link">Do You Have Account ?</a>
                </div>
            </form>
        </div>
    </div>
</div>

@section('script')
<script>

// function annotate(){
//   var random =  Math.floor(1000 + Math.random() * 9000);
//   var typed= document.getElementById("name").value;
//   document.getElementById("url_system").value = typed + random;
// }

$.ajax({
  url: '/api/generate_code',
  type: 'get',
  success: function(response){
    document.getElementById("url_system").value = response['generate_code'];
  }
});

function focusText(){
    var textbox = document.getElementById("url");
    textbox.focus();    
}

function getCheckedSystem() {
  const checkBox = document.getElementById('url_system').checked;   
  if (checkBox === true) {
        console.log(document.getElementById("url").value = document.getElementById('url_system').value);
        document.getElementById("url").disabled = true;
    } else {
      console.log(false);
  }
}
    
function getCheckedName(){
    const checkBoxName = document.getElementById('url_name').checked;
    if(checkBoxName === true){
        console.log(document.getElementById("url").value = document.getElementById('url_name').value);
        document.getElementById("url").disabled = false;
        var textbox = document.getElementById("url");
        textbox.focus();    
    } else {
        console.log(false);
    }
}
</script>
@endsection
@endsection