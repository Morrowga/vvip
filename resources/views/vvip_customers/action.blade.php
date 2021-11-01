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

<div class="container">
    <div class="col-md-12">
        <div class="d-flex justify-content-center">
            <div class="col-md-4 col-md-offset-4">
                <h3 class="text mt-5">Change Action</h3>
            </div>
        </div>
        <div class="card" id="ca">
            <div class="card-body">
                <!-- <div class="d-flex justify-content-center">
                    <p>Menu Categories</p>
                </div> -->
                <div class="d-flex justify-content-center">
                    <div class="col-md-4 col-md-offset-4" id="action_body">
                    <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}">
                    <button class="btn btn-dark btn-block action-btn" id="contact_active" value="get_contacts" data-id="contact_active">Contact</button>
                    <button class="btn btn-dark btn-block action-btn" id="link_tree_active" data-id="link_tree_active">Link Tree</button>
                    <button class="btn btn-dark btn-block action-btn" id="deep_link_active" value="get_deep_links" data-id="deep_link_active">Deep Link</button>
                    <button class="btn btn-dark btn-block action-btn" id="url_active" value="get_eusp" data-id="url_active">URL</button>
                    <button class="btn btn-dark btn-block action-btn" id="email_active" value="get_eusp" data-id="email_active">Email</button>
                    <button class="btn btn-dark btn-block action-btn" id="contact_social_active">Contact Social</button>
                    <button class="btn btn-dark btn-block action-btn" id="sms_active" value="get_eusp" data-id="sms_active">SMS</button>
                    <button class="btn btn-dark btn-block action-btn" id="call_active" value="get_eusp" data-id="call_active">Call</button>
                    <button class="btn btn-dark btn-block action-btn" id="event">Event</button>
                    <button class="btn btn-dark btn-block action-btn" id="personal">Personal</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <footer>
        <div class="d-flex justify-content-center text-center">
            <div class="col-md-6 col-md-offset-3">
                <div class="d-flex justfiy-content-center">
                <div class="col">
                    <a href="#home" class="text-center">Home</a> 
                </div>
                <div class="col">
                    <a href="#home" class="text-center">Home</a> 
                </div>
                <div class="col">
                    <a href="#home" class="text-center">Home</a> 
                </div>
                </div>
            </div>
        </div>  
</footer> -->


@section('script')
<script>
$(function() {
    var user_id = $('#userid').val();
    var action_url = '{{ url('api/change_action') }}';
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
            // var check = $('#' + response.data['self_request_name']);
            // if(check.val() == response.data['request_name']) {
            //    check.attr('style', 'background-color: rgb(217,181,81) !important');
            // } else {
            //    check.attr('style', 'background-color: rgb(0,0,0) !important');
            // }
               var id_value = ['contact_active', 'deep_link_active', 'url_active', 'email_active', 'sms_active', 'call_active'];
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

    var get_action = '{{ url('api/get_datas') }}'
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
            $('#' + response.data['self_request_name']).attr('style', 'background-color: rgb(217,181,81) !important');
        }
    });

});
</script>
@endsection

@endsection