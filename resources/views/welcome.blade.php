<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html,
            body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            @font-face {
                font-family: valentine;
                src: url(/fonts/valentine.ttf);
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
            }

            .title {
                font-size: 54px;
                text-transform: capitalize;
                font-family: 'valentine';
            }

            .links>a {
                color: #636b6f;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .5rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .get-started {
                padding: 5px 10px;
                border: 1px solid #636b6f;
                text-decoration: none;
                color: #636b6f;
            }
        </style>
    </head>

    <body>
        <div class="flex-center position-ref full-height">
            {{-- @if (Route::has('login'))
            <div class="top-right links">
                @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ route('login') }}">Login</a>

            <!-- @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif -->
            @endauth
        </div>
        @endif --}}

        <div class="content">
            <div class="title">
                Abhivyakta
            </div>

            <div class="links">
                {{-- <a href="#">Articles</a> --}}
                <a href="#">Karnataka(GOVT) Polytecnic, Mangaluru</a>
                {{-- <a href="#">Drawings</a>                    
                    <a href="#">Photographs</a>                    
                    <a href="#">Gallery</a>                    
                    <a href="#">Videos</a>                    
                    <a href="#">Reports</a>                     --}}
            </div>
            <a href="/landing-page" class="get-started">Get Started</a>
        </div>
        </div>
    </body>

</html>