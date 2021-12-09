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
                <img width="50" height="50" id="profile_img" alt=""> {{ Auth::user()->name }}
            </a>
            <input type="text" id="userid" value="{{ Auth::user()->id }}" hidden>
            @else
            <a href="" hidden></a>
            @endif
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item dropdown_logout" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                  {{ __('Logout') }} <i class="fas fa-power-off"></i>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
    </ul>
    </div>
</nav>
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div id="countdown">
                <div id="days"></div>
                <div id="hours"></div>
                <div id="minutes"></div>
                <div id="seconds"></div>
            </div>
            <div class="d-flex justify-content-center">
                <img src="../images/logo.jpeg" alt="" class="register_image">
            </div>
            <p class="panel-text">You need to wait until 2days cause this panel can use only with smart card.</p>
        </div>
    </div>
</div> -->
<div class="container" id="home_height" style="height: 1000px;">
    <div class="col-md-12">
        <div class="d-flex justify-content-between">
            <h1 class="text">{{ __('website.welcome') }}</h1>
            <!-- @if(Auth::user()->secure_status == 'private')
            <span id="group">
                <button type="button" class="btn btn-dark bell text-right" id="noti">Notifications</button>
                <span class="badge badge-secondary badge_noti" value="">0</span>
            </span>
            @endif -->
        </div>
        <div class="d-flex justify-content-center">
            <p class="text" id="welcome_text"></p>
        </div>
    </div>
    <div class="col-md-12 menu mt-3">
        <div class="d-flex justify-content-center">
            <div class="col text-right home-col">
                <div class="col-md-12 text-center">
                    <a href="/action" class="btn btn-dark action"><i class="fas fa-exchange-alt pr-2"></i>{{ __('website.action') }}</a>
                </div>
                <div class="col-md-12 mt-4 text-center">
                    <img src="https://i.pinimg.com/originals/98/85/79/988579fea8473f5dd48741d6321c2571.jpg" alt="" id="action" width="350" height="280">
                </div>
            </div>
            <div class="col text-left home-col">
                <div class="col-md-12 text-center">
                    <a href="/create_data" class="btn btn-dark create"><i class="fas fa-plus-square pr-2"></i>{{ __('website.create') }}</a>
                </div>
                <div class="col-md-12 mt-4 text-center">
                    <img src="https://i.pinimg.com/originals/98/85/79/988579fea8473f5dd48741d6321c2571.jpg" alt="" id="create" width="350" height="280">
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="col text-right home-col" style="margin-top: 25px !important;">
                <div class="col-md-12 text-center">
                    <a href="/profile" class="btn btn-dark profile"><i class="fas fa-user-circle pr-2"></i>{{ __('website.profile') }}</a>
                </div>  
                <div class="col-md-12 mt-4 text-center">
                    <img src="https://i.pinimg.com/originals/98/85/79/988579fea8473f5dd48741d6321c2571.jpg" alt="" id="profile" width="350" height="280">
                </div>
            </div>
            <div class="col text-left home-col" style="margin-top: 25px !important;">
                <div class="col-md-12 text-center">
                    <a href="/setting" class="btn btn-dark setting"><i class="fas fa-cog pr-1"></i>{{ __('website.setting') }}</a>
                </div>
                <div class="col-md-12 mt-4 text-center">
                    <img src="https://i.pinimg.com/originals/98/85/79/988579fea8473f5dd48741d6321c2571.jpg" alt="" id="setting" width="350" height="280">
                </div>
            </div>
        </div>
    </div>
</div>


<!-- <div class="modal fade noti" id="bellmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header" style="border-bottom: none !important;">
            <h5 class="modal-title" id="total_visitor"></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" style="border-top: none !important;" id="noti_panel">
            
        </div>
        <div class="modal-footer d-flex justify-content-center">
            <button type="button" class="btn btn-secondary btn-block" id="ok" data-bs-dismiss="modal">Ok</button>
        </div>
        </div>
    </div>
</div> -->

@section('script')
<!-- <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
<script>
    $(function(){

        if($('.badge_noti').text() >= 99){
            $('.badge_noti').text('99+').attr('style', 'width: 40px !important;');
        }

        $('#noti').on('click', function(){
            $('#bellmodal').modal('show');
        })
            // alert(e);

        var userid = $('#userid').val();
        var noti_url = 'api/visitorchecks/' + userid;
        $.ajax({
            url: noti_url,
            method:'GET',
            success:function(response){
                console.log(response);
                if(response.message == "success"){
                    var total = $('.badge_noti').text(response.total_count).val(response.total_count);
                    var noti_data = response.data;
                    $.each(noti_data, function(i, v) {
                            $('#noti_panel').append(`
                            <div class="d-flex justify-content-md-center text-center noti_contain" id="noti_div" data-id="`+ v['id'] +`" data-ip ="`+ v['ip'] +`" data-browser="`+ v['browser'] +`" data-device="`+ v['device_name'] +`">
                                <div class="col-md-6">
                                <p class="noti_text"><i class="fas `+ v['device_image'] +` pr-2"></i>`+ v['device_name'] + `&nbsp; (`+ v['platform']  +`) &nbsp; - `+ v['browser'] + `</p>
                                <p class="noti_text">`+ v['time'] +`&nbsp;`+ v['country'] + `</p>
                                <p class="noti_text">` + v['region'] + ` State ,` + v['city'] +` City</p>
                                </div>
                                <div class="col-md-6 noti_btn_div" data-id="`+ v['id'] +`" data-ip ="`+ v['ip'] +`" data-browser="`+ v['browser'] +`" data-device="`+ v['device_name'] +`">
                                    <button type="button" class="btn btn-success allow" id="`+ v['id'] +`" data-ip="`+ v['ip'] +`" data-browser="`+ v['browser'] +`" data-device="`+ v['device_name'] +`">Allow</button>
                                    <button type="button" class="btn btn-danger disallow" id="`+ v['id'] +`" data-ip="`+ v['ip'] +`" data-browser="`+ v['browser'] +`" data-device="`+ v['device_name'] +`">Disallow</button>
                                </div>
                            </div>
                        `);
                    });

                    $('.allow').on('click', function(e){
                        // alert(e);
                        console.log(e.target.id);
                        var visitor_id = e.target.id;
                        $.ajax({
                            url: 'api/verify_visitor',
                            data: {
                                user_id: userid,
                                visitor_id: visitor_id,
                                status: 1
                            },
                            method:'POST',
                            success:function(response){
                                console.log(response);
                                if($('.noti_contain').attr('data-ip') == e.target.getAttribute("data-ip")){
                                    // $(".noti_btn_div[data-ip='" + e.target.getAttribute("data-ip") +"'][data-browser='"+ e.target.getAttribute("data-browser") +"'][data-device='"+ e.target.getAttribute("data-device") +"']").children('.allow').remove();
                                    // $(".noti_btn_div[data-ip='" + e.target.getAttribute("data-ip") +"'][data-browser='"+ e.target.getAttribute("data-browser") +"'][data-device='"+ e.target.getAttribute("data-device") +"']").children('.disallow').remove();
                                    $(".noti_contain[data-ip='" + e.target.getAttribute("data-ip") +"'][data-browser='"+ e.target.getAttribute("data-browser") +"'][data-device='"+ e.target.getAttribute("data-device") +"']").remove();
                                   var minus =  $('.badge_noti').val() - response.count;
                                   $('.badge_noti').text(minus);
                                }
                            }
                        })
                    });

                    $('.disallow').on('click', function(e){
                        // alert(e);
                        console.log(e.target.id);
                        var visitor_id = e.target.id;
                        $.ajax({
                            url: 'api/verify_visitor',
                            data: {
                                user_id: userid,
                                visitor_id: visitor_id,
                                status: 0
                            },
                            method:'POST',
                            success:function(response){
                                console.log(response);
                                $('#bellmodal').modal('hide');
                                if($('.noti_contain').attr('data-ip') == e.target.getAttribute("data-ip")){
                                    $(".noti_contain[data-ip='" + e.target.getAttribute("data-ip") +"'][data-browser='"+ e.target.getAttribute("data-browser") +"'][data-device='"+ e.target.getAttribute("data-device") +"']").remove();
                                   var minus =  $('.badge_noti').val() - response.count;
                                   $('.badge_noti').text(minus);
                                }
                            }
                        })
                    });
                } else {
                    $('#noti_panel').append(`<p class="text text-center" id="null_text">`+ response.message +`</p>`);
                }
            }
        });
    })

    Pusher.logToConsole = true;

    var pusher = new Pusher('9bf8b95ce0d13d7afae2', {
        cluster: 'ap1',
        encrypted: true
    });

    var channel = pusher.subscribe('notification');
    channel.bind('visitor-notification', function(data) {
        var userid = $('#userid').val();
        var noti_url = 'api/new_visitor/' + userid;
        $.ajax({
            url: noti_url,
            method:'GET',
            success:function(response){
                if(response.message == "success"){
                    $('.badge_noti').text(response.total_count).val(response.total_count);
                    $('#null_text').hide();
                    var v = response.data;
                    $('#noti_panel').prepend(`
                    <div class="d-flex justify-content-md-center text-center noti_contain" id="noti_div" data-id="`+ v['id'] +`" data-ip ="`+ v['ip'] +`" data-browser="`+ v['browser'] +`" data-device="`+ v['device_name'] +`">
                        <div class="col-md-6">
                        <p class="noti_text"><i class="fas `+ v['device_image'] +` pr-2"></i>`+ v['device_name'] + `&nbsp; (`+ v['platform']  +`) &nbsp; - `+ v['browser'] + `</p>
                        <p class="noti_text">`+ v['time'] +`&nbsp;`+ v['country'] + `</p>
                        <p class="noti_text">` + v['region'] + ` State ,` + v['city'] +` City</p>
                        </div>
                        <div class="col-md-6 noti_btn_div">
                            <button class="btn btn-success allow"  id="`+ v['id'] +`" data-ip="`+ v['ip'] +`" data-browser="`+ v['browser'] +`" data-device="`+ v['device_name'] +`"">Allow</button>
                            <button class="btn btn-danger disallow"  id="`+ v['id'] +`" data-ip="`+ v['ip'] +`" data-browser="`+ v['browser'] +`" data-device="`+ v['device_name'] +`">Disallow</button>
                        </div>
                    </div>
                    `);

                    $('.allow').on('click', function(e){
                        // alert(e);
                        console.log(e.target.id);
                        var visitor_id = e.target.id;
                        $.ajax({
                            url: 'api/verify_visitor',
                            data: {
                                user_id: userid,
                                visitor_id: visitor_id,
                                status: 1
                            },
                            method:'POST',
                            success:function(response){
                                console.log(response);
                                if($('.noti_contain').attr('data-ip') == e.target.getAttribute("data-ip")){
                                    // $(".noti_btn_div[data-ip='" + e.target.getAttribute("data-ip") +"'][data-browser='"+ e.target.getAttribute("data-browser") +"'][data-device='"+ e.target.getAttribute("data-device") +"']").children('.allow').remove();
                                    // $(".noti_btn_div[data-ip='" + e.target.getAttribute("data-ip") +"'][data-browser='"+ e.target.getAttribute("data-browser") +"'][data-device='"+ e.target.getAttribute("data-device") +"']").children('.disallow').remove();
                                    $(".noti_contain[data-ip='" + e.target.getAttribute("data-ip") +"'][data-browser='"+ e.target.getAttribute("data-browser") +"'][data-device='"+ e.target.getAttribute("data-device") +"']").remove();
                                   var minus =  $('.badge_noti').val() - response.count;
                                   $('.badge_noti').text(minus);
                                }
                            }
                        })
                    });

                    $('.disallow').on('click', function(e){
                        // alert(e);
                        console.log(e.target.id);
                        var visitor_id = e.target.id;
                        $.ajax({
                            url: 'api/verify_visitor',
                            data: {
                                user_id: userid,
                                visitor_id: visitor_id,
                                status: 0
                            },
                            method:'POST',
                            success:function(response){
                                console.log(response);
                                $('#bellmodal').modal('hide');
                                if($('.noti_contain').attr('data-ip') == e.target.getAttribute("data-ip")){
                                    $(".noti_contain[data-ip='" + e.target.getAttribute("data-ip") +"'][data-browser='"+ e.target.getAttribute("data-browser") +"'][data-device='"+ e.target.getAttribute("data-device") +"']").remove();
                                   var minus =  $('.badge_noti').val() - response.count;
                                   $('.badge_noti').text(minus);
                                }
                            }
                        })
                    });
                } else {
                    console.log('');
                }
            }
        });
        // alert(JSON.stringify(data));
    });
</script> -->
@endsection
@endsection


