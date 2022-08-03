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

    <link href="{{ asset('vendor/assets/libs/chartist/chartist.min.css') }}" rel="stylesheet">

    <!-- Plugins css -->
    <link href="{{ asset('vendor/assets/libs/dropzone/min/dropzone.min.css') }}" rel="stylesheet" type="text/css">

    <!-- DataTables -->
    <link href="{{ asset('vendor/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('vendor/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}"
        rel="stylesheet" type="text/css">

    <!-- Responsive datatable examples -->
    <link href="{{ asset('vendor/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}"
        rel="stylesheet" type="text/css">

    <!-- Bootstrap Css -->
    <link href="{{ asset('vendor/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet"
        type="text/css">
    <!-- Icons Css -->
    <link href="{{ asset('vendor/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">
    <!-- App Css-->
    <link href="{{ asset('vendor/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css">

    {{-- dropdown select --}}
    <link href="{{ asset('vendor/assets/libs/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('vendor/assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}"
        rel="stylesheet">
    <link href="{{ asset('vendor/assets/libs/spectrum-colorpicker2/spectrum.min.css" rel="stylesheet') }}"
        type="text/css">
    <link href="{{ asset('vendor/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css') }}"
        rel="stylesheet">
    <style>
        .container {
            position: relative;
            width: 80%;
            margin: 0 auto;
        }

        form .group {
            margin-bottom: 10px;
        }

        form .group label {
            display: inline-block;
            margin-bottom: 10px;
        }

        form .group input {
            border: 1px solid #cccccc;
            border-radius: 4px;
            display: block;
            width: 100%;
            padding: 10px;
        }

        form .group .error {
            display: inline-block;
            color: #ff0000;
            margin-top: 5px;
        }

        form .group button.save {
            background-color: #4169E1;
            border: 1px solid #325cdb;
            color: #ffffff;
            padding: 10px;
            cursor: pointer;
            border-radius: 4px;
        }

        form .group button.cancel {
            background-color: #4169E1;
            border: 1px solid #325cdb;
            color: #ffffff;
            padding: 10px;
            cursor: pointer;
            border-radius: 4px;
        }

        table {
            border: 1px solid #cccccc;
            margin-top: 10px;
        }

        table tr td,
        table tr th {
            border-left: 1px solid #cccccc;
            padding: 10px;
        }

        table tr td:first-child,
        table tr th:first-child {
            border-left: 0;
        }

        table tr td {
            border-top: 1px solid #cccccc;
        }
    </style>
</head>

<body data-sidebar="dark">

    <!-- Begin page -->
    <div id="layout-wrapper">

        <!-- ========== header Start ========== -->
        <header id="page-topbar">
            @include('layouts._dashboard.navbar')
        </header>

        <!-- ========== Sidebar Start ========== -->
        <div class="vertical-menu">

            <div data-simplebar class="h-100">

                <!--- Sidemenu -->
                @include('layouts._dashboard.sidebar')
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->


        @include('sweetalert::alert')
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="page-title-box">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <h6 class="page-title">
                                    @yield('title')
                                </h6>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->


                    <!-- end row -->
                    <!-- start page content -->
                    @yield('content')

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->


            <!-- ========== Footer Start ========== -->
            @include('layouts._dashboard.footer')
            {{-- @include('sweetalert::alert') --}}
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->

    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="{{ asset('vendor/assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('vendor/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('vendor/assets/libs/node-waves/waves.min.js') }}"></script>


    <!-- Peity chart-->
    <script src="{{ asset('vendor/assets/libs/peity/jquery.peity.min.js') }}"></script>

    <!-- Plugin Js-->
    <script src="{{ asset('vendor/assets/libs/chartist/chartist.min.js') }}"></script>
    <script src="{{ asset('vendor/assets/libs/chartist-plugin-tooltips/chartist-plugin-tooltip.min.js') }}"></script>

    <script src="{{ asset('vendor/assets/js/pages/dashboard.init.js') }}"></script>

    <script src="{{ asset('vendor/assets/js/app.js') }}"></script>


    <!-- Required datatable js -->
    <script src="{{ asset('vendor/assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <!-- Buttons examples -->
    <script src="{{ asset('vendor/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('vendor/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('vendor/assets/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('vendor/assets/libs/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('vendor/assets/libs/pdfmake/build/vfs_fonts.js') }}"></script>
    <script src="{{ asset('vendor/assets/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('vendor/assets/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('vendor/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>
    <!-- Responsive examples -->
    <script src="{{ asset('vendor/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('vendor/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>

    <!-- Datatable init js -->
    <script src="{{ asset('vendor/assets/js/pages/datatables.init.js') }}"></script>

    <!-- Plugins js -->
    <script src="{{ asset('vendor/assets/libs/dropzone/min/dropzone.min.js') }}"></script>
    <script src="{{ asset('vendor/assets/js/pages/form-editor.init.js') }}"></script>

    <!--tinymce js-->
    <script src="{{ asset('vendor/assets/libs/tinymce/tinymce.min.js') }}"></script>

    <script src="{{ asset('vendor/assets/js/app.js') }}"></script>

    {{-- image --}}
    <script src="{{ asset('/vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>

    {{-- filemanager --}}
    <script>
        $('#lfm').filemanager('image');
    </script>


    <script src="{{ asset('/vendor/assets/libs/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('/vendor/assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('/vendor/assets/libs/spectrum-colorpicker2/spectrum.min.js') }}"></script>
    <script src="{{ asset('/vendor/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js') }}"></script>
    <script src="{{ asset('/vendor/assets/libs/admin-resources/bootstrap-filestyle/bootstrap-filestyle.min.js') }}">
    </script>
    <script src="{{ asset('/vendor/assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>

    <script src="{{ asset('/vendor/assets/js/pages/form-advanced.init.js') }}"></script>

    <script src="{{ asset('/vendor/assets/js/app.js') }}"></script>

</body>

</html>
