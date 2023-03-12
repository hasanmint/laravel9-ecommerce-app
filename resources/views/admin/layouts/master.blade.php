<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title> Admin & Dashboard|Laravel </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Admin & Dashboard laravel" name="description" />
    <meta content="laraveldevs" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('public/backend/assets/images/favicon.ico') }}">

    <!-- Select css -->
    <link href="{{ asset('public/backend/assets/libs/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Toaster Css-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

    <!-- jquery.vectormap css -->
    <link href="{{ asset('public/backend/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}')}}"
        rel="stylesheet" type="text/css" />

    <!-- DataTables -->
    <link href="{{ asset('public/backend/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}"
        rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="{{ asset('public/backend/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}"
        rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="{{ asset('public/backend/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet"
        type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('public/backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('public/backend/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />


</head>

<body data-sidebar="dark" data-layout-mode="light">


    <!-- Start page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            @include('admin._partials.header')
        </header>


        <!--Left Sidebar Start -->
        @include('admin._partials.sidebar')
        <!-- Left Sidebar End -->


        <!-- Start right Content here -->
        <div class="main-content">

            <div class="page-content">
                @yield('content')
            </div>
            <!-- End Page-content -->

            <!--Footer start -->
            @include('admin._partials.footer')
            <!--Footer start -->

        </div>
        <!-- end main content-->


    </div>
    <!-- end layout-wrapper -->



    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="{{ asset('public/backend/assets/libs/jquery/jquery.min') }} "></script>
    <script src="{{ asset('public/backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('public/backend/assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('public/backend/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('public/backend/assets/libs/node-waves/waves.min.js') }}"></script>

     <!-- Required datatable js -->
     <script src="{{ asset('public/backend/assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
     <script src="{{ asset('public/backend/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Buttons examples -->
    <script src="{{ asset('public/backend/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('public/backend/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('public/backend/assets/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('public/backend/assets/libs/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('public/backend/assets/libs/pdfmake/build/vfs_fonts.js') }}"></script>
    <script src="{{ asset('public/backend/assets/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('public/backend/assets/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('public/backend/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>

    <!-- Responsive examples -->
    <script src="{{ asset('public/backend/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>

    <!-- Datatable init js -->
    <script src="{{ asset('public/backend/assets/js/pages/datatables.init.js') }}"></script>


    <!-- jquery.vectormap map -->
    <script src="{{ asset('public/backend/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('public/backend/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js') }}"> </script>

    <!-- apexcharts -->
    <script src="{{ asset('public/backend/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- dashboard blog init -->
    <script src="{{ asset('public/backend/assets/js/pages/dashboard-job.init.js') }}"></script>

    <!-- dashboard init -->
    <script src="{{ asset('public/backend/assets/js/pages/dashboard.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('public/backend/assets/js/app.js') }}"></script>



















</body>


</html>
