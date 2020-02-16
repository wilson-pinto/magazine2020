<html>

    <head>
        <title>Abhivyakta | @yield('title')</title>
        @include('client.includes.head')
    </head>

    <body>
        <div class="row mx-0">
            @include('client.includes.header')
        </div>
        <div class="row text-dark mx-0">
            <div class="col px-0">
                @yield('content')
            </div>
        </div>
        <div class="row mx-0">
            <div class="col px-0">
                @include('client.includes.footer')
            </div>
        </div>
        @include('client.includes.review-modal')
        @include('client.includes.scripts')

    </body>

</html>