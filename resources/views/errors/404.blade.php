<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Automan</title>
        <!-- MANIFEST -->
        <meta name="theme-color" content="#03172B">
        <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">
        <link rel="manifest" href="{{ asset('manifest.json') }}">
        <link rel="apple-touch-icon" href="{{ asset('img/icon-152.png') }}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">
        <!-- Styles -->

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style-register.css') }}" rel="stylesheet">
    </head>
    <body>
        <style>
            body {
                background-color: #03172B;
                color: white;
                overflow: hidden;
                background-size: cover;
                display: flex;
                height: 100vh;
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }
    
            h1 {
                font-family: 'Montserrat', sans-serif !important;
                font-weight: 300;
                text-align: center;
            }
            .btn-main {
                color: #fff;
                background-color: #FD3D44;
                border-color: #FD3D44;
                text-transform: uppercase;
                letter-spacing: 0.1em;
                font-weight: 500;
                padding: 13px 50px;
                font-size: 16px;
                margin-top: 40px;
            }
            .btn-primary:hover {
                color: #fff;
                background-color: #FD3D44;
                border-color: #FD3D44;
            }
        </style>
        <h1>Page not Found</h1>
        <a href="{{ url('/') }}" class="btn btn-main btn-primary">
            {{ __('Back to Home') }}
        </a>
    </body>
</html>
