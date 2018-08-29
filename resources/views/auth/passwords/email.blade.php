@extends('layouts.app')

@section('content')
<div class="user-container container">
    <div class="row justify-content-center">
        <div class="user-content login reset">
            @if (session('status'))
                <a href="{{ url('/') }}" class="user-header">
                    <img src="{{ asset('img/logo-medium.png') }}">
                    <h1>Reset<br>password</h1>
                </a>

                @if (session('status'))
                    <p class="user-subtext">{{ session('status') }}</p>
                @endif

            @else
                <a href="{{ url('/') }}" class="user-header user-hide">
                    <img src="{{ asset('img/logo-medium.png') }}">
                    <h1>{{ __('Forgot your password?') }}</h1>
                </a>

                <p class="user-subtext user-hide">We need to verify your email first.</p>

                <div class="user-body user-hide">

                    <form method="POST" action="{{ route('password.email') }}" aria-label="{{ __('Reset Password') }}" novalidate>
                        @csrf

                        <div class="form-group row">
                            <div class="user-fields col-md-12">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" nofreemail="true" onkeyup="btnDisabledForgot()" placeholder="email address" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="text-center col-lg-12">
                                <button type="submit" class="btn btn-main btn-primary disabled">
                                    {{ __('Verify') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
