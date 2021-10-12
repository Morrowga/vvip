@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('web_pin_create', $user->id) }}" method="POST">
    @method('PUT')
    @csrf
    <div class="row justify-content-center d-flex">
        <div class="col-md-8">
            <h1 class="text text-center">Create Pin</h1>
            <div class="form-group row">
                <div class="col-md-6 offset-md-3">
                    <input id="password" type="password" placeholder="New Pin" class="form-control @error('password') is-invalid @enderror web_pin" name="pin" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-6 offset-md-3">
                    <input id="password-confirm" type="password" placeholder="Confirm Pin" class="form-control web_pin" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>
            <div class="col-md-4 offset-md-4">
            <button type="submit" class="btn btn-info btn-block pin_btn">Confirm</button>
            </div>
        </div>
    </div>
    </form>
</div>
@endsection