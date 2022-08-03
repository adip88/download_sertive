<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>
        @yield('title')
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
    <meta content="Themesbrand" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('vendor/assets/images/favicon.png') }}">

    <!-- Bootstrap Css -->
    <link href="{{ asset('vendor/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet"
        type="text/css">
    <!-- Icons Css -->
    <link href="{{ asset('vendor/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">
    <!-- App Css-->
    <link href="{{ asset('vendor/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css">

</head>

<body>

    <div class="account-pages my-5 pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-4">
                    <div class="card overflow-hidden">



                        @yield('content')


                    </div>




                </div>
                @include('layouts._auth.footer')
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="{{ asset('vendor/assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('vendor/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('vendor/assets/libs/node-waves/waves.min.js') }}"></script>

    <script src="{{ asset('vendor/assets/js/app.js') }}"></script>

</body>

</html>
