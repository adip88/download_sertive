<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>Selamat Datang</title>
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

    <div class="authentication-bg d-flex align-items-center pb-0 vh-100">
        <div class="content-center w-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-lg-4 ms-auto">
                                        <div class="ex-page-content">
                                            <h1 class="text-dark display-1 mt-4"></h1>
                                            <h2 class="mb-4">Selamat Datang</h2>
                                            <p class="mb-5">Silakan Login dengan akun yang telah diberikan untuk
                                                mendownload Sertifikat</p>
                                            @if (Route::has('login'))
                                                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                                    @auth
                                                        <a href="{{ url('home') }}"
                                                            class="btn btn-primary mb-5 waves-effect waves-light"><i
                                                                class="mdi mdi-home"></i> Back to Dashboard</a>
                                                    @else
                                                        <a href="{{ route('login') }}"
                                                            class="btn btn-primary mb-5 waves-effect waves-light"></i>
                                                            Login</a>

                                                        @if (Route::has('register'))
                                                            <a href="{{ route('register') }}"
                                                                class="btn btn-primary mb-5 waves-effect waves-light"></i>
                                                                Register</a>
                                                        @endif
                                                @endif
                                            </div>
                                            @endif
                                        </div>

                                    </div>
                                    <div class="col-lg-5 mx-auto">
                                        <img src="assets/images/error.png" alt="" class="img-fluid mx-auto d-block">
                                    </div>
                                </div>
                            </div><!-- end cardbody -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div>
                <!--end row-->
            </div>
            <!-- end container -->
        </div>

        </div>

        <!-- JAVASCRIPT -->
        <script src="{{ asset('vendor/assets/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('vendor/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('vendor/assets/libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('vendor/assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('vendor/assets/libs/node-waves/waves.min.js') }}"></script>

        <script src="{{ asset('/vendor/assets/js/app.js') }}"></script>

    </body>

    </html>
