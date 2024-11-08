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
            <input type="text" id="exp_date" value="{{ Auth::user()->expired_date }}" hidden>
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

<div class="container" id="action_area">
    <div class="col-md-12">
        <div class="d-flex justify-content-center">
            <div class="col-md-4 col-md-offset-4">
                <h3 class="text mt-5">{{ __('website.change_action') }} <a href="/feature" class="question_link"><i class="far fa-question-circle"></i></a></h3>
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
                    <button class="btn btn-dark btn-block action-btn" id="contact_active" value="get_contacts" data-text="Contact" data-id="contact_active">Contact <img src="../images/right_arrow.png" width="30" height="30" class="menu_arrow" alt=""></button>
                    <button class="btn btn-dark btn-block action-btn" id="link_tree_active" value="get_link_trees" data-text="Link Tree" data-id="link_tree_active">Link Tree <img src="../images/right_arrow.png" width="30" height="30" class="menu_arrow" alt=""></button>
                    <button class="btn btn-dark btn-block action-btn" id="deep_link_active" value="get_deep_links"data-text="Deep Link" data-id="deep_link_active">Deep Link <img src="../images/right_arrow.png" width="30" height="30" class="menu_arrow" alt=""></button>
                    <button class="btn btn-dark btn-block action-btn" id="call_active" value="get_eusp"  data-text="Call" data-id="call_active">Call <img src="../images/right_arrow.png" width="30" height="30" class="menu_arrow" alt=""></button>
                    <button class="btn btn-dark btn-block action-btn" id="url_active" value="get_eusp" data-text="URL" data-id="url_active">URL <img src="../images/right_arrow.png" width="30" height="30" class="menu_arrow" alt=""></button>
                    @can('isStandard')
                    <button class="btn btn-dark btn-block action-btn" id="email_active" value="get_eusp" data-text="Email" data-id="email_active">Email <img src="../images/right_arrow.png" width="30" height="30" class="menu_arrow" alt=""></button>
                    <button class="btn btn-dark btn-block action-btn" id="cns_active" value="get_cns" data-text="Contact Social" data-id="cns_active">Contact Social <img src="../images/right_arrow.png" width="30" height="30" class="menu_arrow" alt=""></button>
                    <button class="btn btn-dark btn-block action-btn" id="sms_active" value="get_eusp" data-text="SMS" data-id="sms_active">SMS <img src="../images/right_arrow.png" width="30" height="30" class="menu_arrow" alt=""></button>
                    <button class="btn btn-dark btn-block action-btn" id="event_active" value="get_events" data-text="Event" data-id="event_active">Event <img src="../images/right_arrow.png" width="30" height="30" class="menu_arrow" alt=""></button>
                    @elsecan('isLuxury')
                    <button class="btn btn-dark btn-block action-btn" id="email_active" value="get_eusp" data-text="Email" data-id="email_active">Email <img src="../images/right_arrow.png" width="30" height="30" class="menu_arrow" alt=""></button>
                    <button class="btn btn-dark btn-block action-btn" id="cns_active" value="get_cns" data-text="Contact Social" data-id="cns_active">Contact Social <img src="../images/right_arrow.png" width="30" height="30" class="menu_arrow" alt=""></button>
                    <button class="btn btn-dark btn-block action-btn" id="sms_active" value="get_eusp" data-text="SMS" data-id="sms_active">SMS <img src="../images/right_arrow.png" width="30" height="30" class="menu_arrow" alt=""></button>
                    <button class="btn btn-dark btn-block action-btn" id="event_active" value="get_events" data-text="Event" data-id="event_active">Event <img src="../images/right_arrow.png" width="30" height="30" class="menu_arrow" alt=""></button>
                    @else 
                    <button class="btn btn-dark btn-block action-btn" id="email_active" value="get_eusp" data-text="Email" data-id="email_active" disabled>Email <img src="../images/right_arrow.png" width="30" height="30" class="menu_arrow" alt=""></button>
                    <button class="btn btn-dark btn-block action-btn" id="cns_active" value="get_cns" data-text="Contact Social" data-id="cns_active" disabled>Contact Social <img src="../images/right_arrow.png" width="30" height="30" class="menu_arrow" alt=""></button>
                    <button class="btn btn-dark btn-block action-btn" id="sms_active" value="get_eusp" data-text="SMS" data-id="sms_active" disabled>SMS <img src="../images/right_arrow.png" width="30" height="30" class="menu_arrow" alt=""></button>
                    <button class="btn btn-dark btn-block action-btn" id="event_active" value="get_events" data-text="Event" data-id="event_active" disabled>Event <img src="../images/right_arrow.png" width="30" height="30" class="menu_arrow" alt=""></button>
                    @endcan
                    <!-- <button class="btn btn-dark btn-block action-btn" id="personal">Personal</button> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="space-lift-home"></div>



<div class="modal fade" id="countDown" role="dialog">
    <div class="modal-dialog">
        <div class="modal-header" style="border: none !important; margin-top: 10%;">
        </div>
        <div class="modal-content" id="locked" style="backgtokenround-color: #fff !important;">
            <div class="modal-body text-center" style="background-color: #fff !important;">
                <p class="count_display text text-center" id="countTime"></p>
                <p class="warn-count"><i class="fas fa-exclamation-triangle tri-count mr-2"></i>{{ __('website.warncount') }}</p>
                <a href="" class="btn btn-success ml-2 mb-2 text-center gohome">Go Back</a>
                <img src="https://i.pinimg.com/564x/df/ec/8a/dfec8ab8544383fff306ff22c385f6d2.jpg" alt="" class="img-fluid lock_img">
            </div>
        </div>
    </div>
</div>


@section('script')
<script src="../js/action.js"></script>
@endsection

@endsection