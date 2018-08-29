@extends('layouts.app')

@section('content')
<div class="user-container container">
    <div class="row justify-content-center">
        
        @if(session()->has('message'))
            <div class="user-content login verify">
                <a href="{{ url('/') }}" class="user-header">
                    <img src="{{ asset('img/logo-large.png') }}">
                    <h1>Verify your email</h1>
                </a>
                <p class="user-subtext">Help us verify your account, by checking your email address that you provided to us.<br><br>Enjoy using AutoMan!</p>
            </div>
        @else
            <div class="user-content register">
                <a href="{{ url('/') }}" class="user-header">
                    <img src="{{ asset('img/logo-medium.png') }}">
                    <h1>{{ __('Registration') }}</h1>
                </a>
                <div class="user-body">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}" novalidate>
                        @csrf
                        <div class="user-register">
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Full name') }}</label>
        
                                <div class="user-fields col-md-8">
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" maxlength="50" minlength="3" onkeyup="btnDisabledReg()" placeholder="Full Name" value="{{ old('name') }}" required autofocus>
        
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
            
                            <div class="form-group row">
                                <label for="mobile" class="col-md-4 col-form-label text-md-right">{{ __('Mobile Number (09xxxxxxxxx)') }}</label>
        
                                <div class="user-fields col-md-8">
                                    <input id="mobile" type="tel" class="form-control{{ $errors->has('mobile_number') ? ' is-invalid' : '' }}" placeholder="Mobile number (09XXXXXXXXX)" name="mobile_number" minlength="11" maxlength="11" checkmobile="true" onkeyup="btnDisabledReg()" value="{{ old('mobile_number') }}" required autofocus>
        
                                    @if ($errors->has('mobile_number'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('mobile_number') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email Address') }}</label>
        
                                <div class="user-fields col-md-8">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" nofreemail="true" onkeyup="btnDisabledReg()" maxlength="50" placeholder="Email address" value="{{ old('email') }}" required>
        
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
        
                                <div class="user-fields col-md-8">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="password" name="password" onkeyup="btnDisabledReg()" minlength="6" required>
        
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
        
                                <div class="user-fields col-md-8">
                                    <input id="password-confirm" type="password" placeholder="Confirm password" class="form-control" minlength="6" name="password_confirmation" onkeyup="btnDisabledReg()" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="text-center col-lg-12">
                                <button type="submit" class="btn btn-main btn-primary disabled">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        @endif
    </div>
</div>
@endsection
