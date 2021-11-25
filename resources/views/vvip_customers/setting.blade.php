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
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>
                <input type="text" id="userid" value="{{ Auth::user()->id }}" hidden>
                @else
                <a href="" hidden></a>
                @endif
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
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
    <div class="d-flex justify-content-center">
        <div class="col-md-6 col-md-3">
            <h3 class="text">Setting</h3>
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
            <h4 class="text text-center">Color Appearance</h4>
            <div class="card" id="card_appear">
                <div class="card-body">
                    <form method="POST" id="appearance" enctype="multipart/form-data">
                        <div class="d-flex justify-content-center mt-3">
                            <input type="text" id="userid" name="user_id" value="{{ Auth::user()->id }}" hidden>
                            <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}">
                            <div class="col">
                                <p class="appear">Background</p>
                            </div>
                            <div class="col">
                                <input type="color" class="form-control" id="background_color" name="background_color">
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mt-3">
                            <div class="col">
                                <p class="appear" id="text_appear">Text</p>
                            </div>
                            <div class="col">
                                <input type="color" class="form-control" id="text_color" name="text_color">
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mt-3">
                            <div class="col">
                                <p class="appear">Text Highlight</p>
                            </div>
                            <div class="col">
                                <input type="color" class="form-control" id="text_highlight_color"
                                    name="text_highlight_color">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button class="btn btn-light appear-btn page-scroll" type="submit"
                                style="float:right; margin-top: 20px;">Confirm</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade deep" id="save_setting" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
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
<script>
$(function() {
    var get_appearance = '{{ url('api/get_datas') }}';
    var userid = $('#userid').val();
    $('#appearance').submit(function(e) {
        e.preventDefault();
        var appearance_url = '{{ url('api/create_appearance') }}';
        var token = $('#token').val();
        let formData = new FormData(this);

        $.ajax({
            url: appearance_url,
            method: 'POST',
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-Token': token
            },
            data: formData,
            success: function(response) {
                console.log(response.message);
                $('#save_setting_text').text('Appearance Saved');
                $('#save_setting').modal('show');
            }
        });
    });

    let bg_colorInput = document.getElementById('background_color');
    bg_colorInput.addEventListener('input', () => {
        $('#card_appear').attr('style', 'background-color:' + bg_colorInput.value + '!important;');
    });

    let text_colorInput = document.getElementById('text_color');
    text_colorInput.addEventListener('input', () => {
        $('.appear').attr('style', 'color:' + text_colorInput.value + '!important');
    });

    let text_hl_colorInput = document.getElementById('text_highlight_color');
    text_hl_colorInput.addEventListener('input', () => {
        $('.appear').attr('style', 'text-shadow: 0px 3px 10px' +
            text_hl_colorInput.value + '!important;');
    });

    $.ajax({
        url: get_appearance,
        method: 'POST',
        data: {
            user_id: userid,
            request_name: "get_contacts"
        },
        success: function(response) {
            $('#background_color').val(response.data['background_color']);
            $('#text_color').val(response.data['text_color']);
            $('#text_highlight_color').val(response.data['text_highlight_color']);
            $('#card_appear').attr('style', 'background-color:' + response.data[
                'background_color'] + '!important;');
            $('.appear').attr('style', 'color:' + response.data['text_color'] +
                '!important; text-shadow: 0px 3px 10px' + response.data[
                'text_highlight_color'] + '!important;');
        }
    });
});
</script>
@endsection
@endsection