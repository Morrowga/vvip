@extends('layouts.app')

@section('content')

<<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm" style="background-color: #000 !important;">
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

<div class="container" style="height: 800px !important;">
    <div class="d-flex justify-content-center">
        <div class="col-md-6 col-md-3">
            <h3 class="text">{{ __('website.setting') }}</h3>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <!-- <div class="col-md-6 col-md-3 text-center">
            <h4 class="text text-center">Languages</h4>
            <button class="btn btn-light">
                English
            </button>
            <button class="btn btn-light">
                Myanmar
            </button>
        </div> -->
    </div>
    <div class="d-flex justify-content-center">
        <div class="col-md-6 col-md-3 mt-4">
            <h4 class="text text-center">{{ __('website.language') }}</h4>
            <div class="card text-center" id="card_lang">
                <div class="card-body text-center">
                    <div class="d-flex justify-content-center">
                        <div class="col" id="">
                            @foreach (Config::get('languages') as $lang => $language)
                                @if ($lang != App::getLocale())
                                    <a class="drop_link" id="lang_setting" href="{{ route('lang.switch', $lang) }}" disabled>{{$language['display']}}</a>
                                    <!-- <span class="flag-icon flag-icon-{{$language['flag-icon']}}"></span> -->
                                @endif
                            @endforeach
                        </div>
                        <div class="col">
                            <button class="btn btn-dark langbtn" id="lang_btn">{{ __('website.change') }}</button>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="text text-center">{{ __('website.color_appearance') }}</h4>
            <div class="card" id="card_appear">
                <div class="card-body">
                    <form method="POST" id="appearance" enctype="multipart/form-data">
                        <div class="d-flex justify-content-center mt-3">
                            <input type="text" id="userid" name="user_id" value="{{ Auth::user()->id }}" hidden>
                            <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}">
                            <div class="col">
                                <p class="appear">{{ __('website.background') }}</p>
                            </div>
                            <div class="col" id="setting_bg">
                                <input type="color" class="form-control" id="background_color" name="background_color">
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mt-3">
                            <div class="col">
                                <p class="appear" id="text_appear">{{ __('website.text') }}</p>
                            </div>
                            <div class="col" id="setting_text">
                                <input type="color" class="form-control" id="text_color" name="text_color">
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mt-3">
                            <div class="col">
                                <p class="appear">{{ __('website.text_highlight') }}</p>
                            </div>
                            <div class="col" id="setting_hc">
                                <input type="color" class="form-control" id="text_highlight_color"
                                    name="text_highlight_color">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button class="btn btn-light appear-btn page-scroll" type="submit"
                                style="float:right; margin-top: 20px;">{{ __('website.confirm') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade deep" id="save_setting" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="border-bottom: none !important;">
                <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="border-top: none !important;">
                <div class="d-flex justify-content-center">
                    <img class="text-center" src="../images/logo.jpeg" alt="" width="100" height="100">
                </div>
                <h3 class="text text-center mt-2" id="save_setting_text"></h3>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button type="button" class="btn btn-secondary btn-block" id="ok" data-bs-dismiss="modal">Ok</button>
            </div>
        </div>
    </div>
</div>

@section('script')
<script src="../js/setting.js"></script>
@endsection
@endsection