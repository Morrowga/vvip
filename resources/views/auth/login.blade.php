@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <img src="../images/logo.jpeg" class="text-center" alt="" width="500" height="500">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group row">

                    <div class="col-md-6 offset-md-3">
                        <input id="phone_number" type="text" placeholder="Phone No" class="form-control @error('email') is-invalid @enderror login-input" name="email" value="{{ old('phone_number') }}" required autocomplete="phone_number" autofocus>

                        @error('phone_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">

                    <div class="col-md-6 offset-md-3">
                        <input id="password" type="password" placeholder="Password or Something" class="form-control @error('password') is-invalid @enderror login-input" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <!-- <div class="form-group row">
                    <div class="col-md-6 offset-md-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div> -->

                <div class="form-group row mb-0 mt-5">
                    <div class="col-md-6 offset-md-3">
                        <button type="submit" class="btn btn-primary login-btn">
                            {{ __('Login') }}
                        </button>
                        <a href="" class="link mt-3">Do You Have Account ?</a>
                        <!-- @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif -->
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
