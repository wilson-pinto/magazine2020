<html>

    <head>
        <title>Abhivyakta | Admin</title>
        @include('admin.includes.head')
    </head>

    <body class="bg-light text-white">
        <div class="container-fluid p-0">
            <div class="row" id="body-row">
                @include('admin.includes.sidebar')
                <div class="col">
                    <div class="row header align-content-start justify-content-between py-4">
                        @include('admin.includes.header')
                    </div>
                    <div class="row text-dark">
                        @yield('content')
                    </div>
                    <div class="row">
                        @include('admin.includes.footer')
                    </div>
                </div>
            </div>
        </div>
        <div id="snackbar" class="snackbar">Messege here.....</div>
        @include('admin.includes.scripts')
        @if (Session::has('message'))
        <script>
            showSnackBar("{{Session::get('message')}}");
        </script>
        @endif
    </body>

</html>