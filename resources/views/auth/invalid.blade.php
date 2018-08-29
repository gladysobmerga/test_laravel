
@extends('layouts.app')

@section('content')
<div class="user-container container">
    <div class="row justify-content-center">
        <div class="user-content login">
            <a href="{{ url('/') }}" class="user-header">
                <img src="{{ asset('img/logo-large.png') }}">
                <h1>Invalid<br>email</h1>
            </a>
            <p class="user-subtext">We cannot recognize the email
                    you provided. </p>
            <div class="form-forgot">
                <a class="btn btn-link" href="{{ url('/') }}">
                    
                    <p class="user-subtext red-line">Please try again.</p>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

