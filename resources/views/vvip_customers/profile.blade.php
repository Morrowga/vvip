@extends('layouts.app')

@section('content')

<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm" style="background-color: #000 !important;">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/home') }}">
            <img src="../images/logo.jpeg" alt="" width="100" height="100">
        </a>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            @if(Auth::user()->name)
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>
            <input type="text" id="userid" value="{{ Auth::user()->id }}" hidden>
            @else
            <a href="" hidden></a>
            @endif
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
    </ul>
    </div>
</nav> 

<div class="container" style="height: 850px;" id="profile_container">
    <div class="d-flex justify-content-center">
        <div class="col-md-6 col-md-offset-3">
            <input type="text" value="{{ Auth::user()->id }}" id="userid" hidden>
            <h3 class="text">Profile</h3>
        </div>
    </div>
    <div class="col-md-12 mt-5">
        <div class="d-flex justify-content-center">
            <img src="https://i.pinimg.com/236x/4c/bd/43/4cbd43a2e345adda7dd7f75848c95db7.jpg" class="profile_img" alt="" width="200" height="200">
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
            <div class="d-flex justify-content-center mt-4">
            <p class="text-center profile_txt">Name </p>
        </div>
        <div class="d-flex justify-content-center">
            <p class="text-center profile_text" id="username" style="text-transform: capitalize;"></p>
        </div>
        <div class="d-flex justify-content-center">
            <p class="text-center profile_txt">Mobile </p>
        </div>
        <div class="d-flex justify-content-center">
            <p class="profile_text" id="mobile"></p>
        </div>
        <div class="d-flex justify-content-center">
            <p class="text-center profile_txt">Email </p>
        </div>
        <div class="d-flex justify-content-center">
            <p class="text-center profile_text" id="email_name"></p>
        </div>
        <div class="d-flex justify-content-center">
            <p class="text-center profile_txt">BOD </p>
        </div>
        <div class="d-flex justify-content-center">
            <p class="text-center profile_text" id="bod"></p>
        </div>
        <div class="d-flex justify-content-center">
            <p class="text-center profile_txt">Work </p>
        </div>
        <div class="d-flex justify-content-center">
            <p class="text-center profile_text" id="work"></p>
        </div>
        <div class="d-flex justify-content-center">
            <p class="text-center profile_txt">Address </p>
        </div>
        <div class="d-flex justify-content-center">
            <p class="text-center profile_text" id="address"></p>
        </div>
        <div class="d-flex justify-content-center">
            <p class="text-center profile_txt">URL</p>
        </div>
        <div class="d-flex justify-content-center">
            <p class="text-center profile_text" id="customer_url"></p>
        </div>
            </div>
            <div class="col-md-6">
        <div class="d-flex justify-content-center  mt-4">
            <p class="text-center profile_txt">Package</p>
        </div>
        <div class="d-flex justify-content-center">
            <p class="text-center profile_text" id="package"></p>
        </div>
        <div class="d-flex justify-content-center">
            <p class="text-center profile_txt">Package Status</p>
        </div>
        <div class="d-flex justify-content-center">
            <p class="text-center profile_text" id="package_status"></p>
        </div>
        <div class="d-flex justify-content-center">
            <p class="text-center profile_txt">Remaining Days</p>  
        </div>
        <div class="d-flex justify-content-center">
            <p class="text-center profile_text" id="remaining_days"></p>
        </div>
        <div class="d-flex justify-content-center">
            <p class="text-center profile_text"></p>  
        </div>
        <div class="d-flex justify-content-center">
            <p class="text-center profile_txt">Secure Status</p>
        </div>
        <div class="d-flex justify-content-center">
            <p class="text-center profile_text" id="secure_status"></p>
        </div>
        <div class="d-flex justify-content-center">
            <p class="text-center profile_txt" id="secure_status">Private Mode</p>
        </div>
        <div class="d-flex justify-content-center">
            <div class="col">
                <p id="private_on_off" class="text-right profile_text pt-2"></p>
            </div>
            <div class="col">
                <label class="switch">
                    <input type="checkbox" class="sw">
                    <span class="slider round"  id="switch_box"></span>
                </label>
            </div>
        </div>
        </div>
        </div>
       
        <!-- <div class="d-flex justify-content-center mt-3">
            <div class="col-md-4 col-md-offset-4">
            <button class="btn btn-dark btn-block edit_profile">EDIT</button>
            </div>
        </div> -->
    </div>
</div>

@section('script')
<script>
$(function() {
    var user_id = $('#userid').val();
    var profile_url = '{{ url('api/get_datas') }}';
    $.ajax({
        url:profile_url,
           method:'POST',
           data:{
                user_id: user_id,  
                request_name: "get_user_profile"
                },
           success:function(response){
               if(response.data == null){
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
</script>
@endsection
@endsection