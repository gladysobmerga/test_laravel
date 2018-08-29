@extends('layouts.app')

@section('content')
<div class="user-container container">
    <div class="row justify-content-center">
        <div class="user-content login reset">
            <a href="{{ url('/home') }}" class="user-header">
                <img src="{{ asset('img/logo-medium.png') }}">
                <h1>Reset<br>Password</h1>
            </a>

            <div class="user-body">
                <form method="POST" action="{{ route('password.request') }}" aria-label="{{ __('Reset Password') }}" novalidate>
                    @csrf

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="form-group row">
                        <div class="user-fields col-md-12">
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" nofreemail="true" onkeyup="btnDisabledReset()" placeholder="Email address" value="{{ $email ?? old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="user-fields col-md-12">
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" minlength="6" onkeyup="btnDisabledReset()" placeholder="New password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="user-fields col-md-12">
                            <input id="password-confirm" type="password" class="form-control" placeholder="Confirm password" name="password_confirmation" minlength="6" onkeyup="btnDisabledReset()" required>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="text-center col-lg-12">
                            <button type="submit" class="btn btn-main btn-primary disabled">
                                {{ __('Update') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
