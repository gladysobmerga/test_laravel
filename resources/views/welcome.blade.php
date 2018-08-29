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
    
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    
        <!--OWASP HEADERS-->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="Content-Security-Policy" content="script-src 'self' 'unsafe-inline' https://www.googletagmanager.com https://www.google-analytics.com http://code.jquery.com https://stackpath.bootstrapcdn.com https://cdnjs.cloudflare.com https://www.google.com https://fonts.googleapis.com https://maps.googleapis.com https://www.gstatic.com https://s3-ap-southeast-1.amazonaws.com https://cdn.jsdelivr.net https://cdnjs.cloudflare.com">
        <meta http-equiv="Strict-Transport-Security" content="max-age=31536000 ; includeSubDomains">
        <meta http-equiv="X-XSS-Protection" content="1; mode=block">
        <meta http-equiv="X-Content-Type-Options" content="nosniff">
        <meta http-equiv="X-Permitted-Cross-Domain-Policies" content="none">
        <meta http-equiv="Referrer-Policy" content="no-referrer">
        <meta http-equiv="Expect-CT" content="max-age=31536000, enforce">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #03172B;
                color: #636b6f;
                font-family: 'Montserrat', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
                overflow: hidden;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
                align-items: center;
                justify-content: space-around;
                max-width: 980px;
                width: 100%;
                margin: 0 auto;
                padding: 25px;
            }

            .title {
                font-size: 84px;
            }
            p {
                color: white;
                font-size: 15px;
                font-weight: 500;
            }

           .links > a {
                color: #FD3D44;
                padding: 0 25px;
                font-size: 18px;
                font-weight: 700;
                letter-spacing: normal;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .logo img {
                max-width: 60vh;
                width: 100%;
            }

            @media (max-width:716px){
                .logo img {
                    margin-bottom: 35px;
                }
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="logo">
                    <a href="{{ url('/') }}"><img src="{{ asset('img/logo-extra-large.png') }}"></a>
                </div>
                <div class="user-links">
                    @if (Route::has('login'))
                        <div class="links">
                                <p>To experience your hassle free service</p>
                                <a href="{{ route('register') }}">Register Now</a>
                                <p>or</p>
                                <a href="{{ route('login') }}">Signin</a>
                                <p>To start your booking</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </body>
</html>
