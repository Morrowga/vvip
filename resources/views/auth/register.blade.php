@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="d-flex justify-content-center">
                    <img src="../images/4529564-removebg-preview.png" alt="" class="register_logo">
                </div>
                <div class="form-group row">

                    <div class="col-md-6 offset-md-3">
                        <input id="name" type="text" placeholder="Enter Your Name"
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
                        <input id="email" type="email" placeholder="Enter Your Phone No"
                            class="form-control @error('phone_number') is-invalid @enderror register-input" name="email"
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
                                <input type="radio" id="html" name="fav_language" value="HTML">
                                <label for="html">Name</label><br>
                            </div>
                            <div class="col url">
                                <input type="radio" id="css" name="fav_language" value="CSS">
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
                                <input type="text" class="form-control url_input" placeholder="...">
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
                                <input type="radio" id="html" name="fav_language" value="HTML">
                                <label for="html">Private</label><br>
                            </div>
                            <div class="col url">
                                <input type="radio" id="css" name="fav_language" value="CSS">
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
                <!-- <div class="form-group row">
                    <div class="col-md-6 offset-md-3">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror register-input" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                <div class="form-group row">

                <div class="col-md-6 offset-md-3">
                        <input id="password-confirm" type="password" class="form-control register-input" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div> -->
            </form>
        </div>
    </div>
</div>
@endsection