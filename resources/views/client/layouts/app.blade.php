<html>

    <head>
        <title>Abhivyakta | @yield('title')</title>
        @include('client.includes.head')
    </head>

    <body>
        <div class="container-fluid">
            <div class="row">
                @include('client.includes.header')
            </div>
            <div class="row text-dark">
                @yield('content')
            </div>
            <div class="row">
                @include('client.includes.footer')
            </div>
        </div>
        @include('client.includes.scripts')

    </body>

</html>