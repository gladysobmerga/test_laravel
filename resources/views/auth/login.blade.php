
@extends('layouts.app')

@section('content')
<div class="user-container container">
    <div class="row justify-content-center">
        <div class="user-content login">
            <a href="{{ url('/') }}" class="user-header">
                <img src="{{ asset('img/logo-medium.png') }}">
                <h1>{{ __('Sign in') }}</h1>
            </a>

            @if (session('status'))
                <p class="user-subtext">{{ session('status') }}</p>
            @endif
            
            <div class="user-body">
                <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}" id="form">
                    @csrf

                    <div class="form-group row">
                        <div class="user-fields col-md-12">
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" onkeyup="btnDisabledLogin()" nofreemail="true" placeholder="email address" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="user-fields col-md-12">
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="password" onkeyup="btnDisabledLogin()" name="password" minlength="6" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="no-padding offset-md-5 col-md-7">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                            <div class="form-forgot">
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Password?') }}
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="text-center col-lg-12">
                            <button type="submit" class="btn btn-main btn-primary disabled">
                                {{ __('Sign in') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
        
@endsection

