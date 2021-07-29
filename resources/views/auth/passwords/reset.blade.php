@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="login-container">
                <div class="card" style="width: 65%">
                    <div class="card-body">
                    <form method="POST" action="{{ route('reset.password.post') }}">
                    @csrf
                    <div class="row">
                    @include('layouts.flash-message') 
                    </div>     
                     <center><h3> {{ __('Password Reset') }}</h3></center>
                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row reset_margin_bottom">
                            <label for="email" class="col-md-12 col-form-label ">{{ __('E-Mail Address') }}</label>
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control bg-color-login input_border @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row reset_margin_bottom">
                            <label for="password" class="col-md-12 col-form-label ">{{ __('Password') }}</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control bg-color-login input_border @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row reset_margin_bottom">
                            <label for="password-confirm" class="col-md-12 col-form-label ">{{ __('Confirm Password') }}</label>

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control bg-color-login input_border" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 bg-color-login image_container">
        <div class="login-container">
            <div class="login_image">
                <div class="img-div">
                    <img class="login_image_width" src="../assets/images/login.PNG" />
                </div>
            </div>
        </div>
        </div>
    </div>
</div>

@endsection