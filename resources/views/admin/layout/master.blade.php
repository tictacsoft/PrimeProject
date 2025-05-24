<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"  />
    <link href="{{ asset('admin/assets/libs/chartist/dist/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/extra-libs/c3/c3.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/dist/css/style.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/libs/toastr/build/toastr.min.css') }}" rel="stylesheet">

    <title>@yield('title') - Admin Portal System</title>
</head>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <div id="main-wrapper">
        @include('admin.layout.header')
        @include('admin.layout.sidebar')
        <div class="page-wrapper">
            @yield('content')
            @include('admin.layout.footer')
        </div>
    </div>

    <script src="{{ asset('admin/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/dist/js/app.min.js') }}"></script>
    <script src="{{ asset('admin/dist/js/app.init.js') }}"></script>
    <script src="{{ asset('admin/dist/js/app-style-switcher.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('admin/assets/extra-libs/sparkline/sparkline.js') }}"></script>
    <script src="{{ asset('admin/dist/js/waves.js') }}"></script>
    <script src="{{ asset('admin/dist/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('admin/dist/js/custom.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/chartist/dist/chartist.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js') }}"></script>
    <script src="{{ asset('admin/assets/extra-libs/c3/d3.min.js') }}"></script>
    <script src="{{ asset('admin/assets/extra-libs/c3/c3.min.js') }}"></script>
    <script src="{{ asset('admin/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('admin/assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('admin/assets/extra-libs/DataTables/datatables.min.js') }}"></script>
    <script src="{{ asset('admin/dist/js/pages/datatable/datatable-advanced.init.js') }}"></script>
    <script src="{{ asset('admin/dist/js/pages/dashboards/dashboard1.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/toastr/build/toastr.min.js') }}"></script>
    <script src="{{ asset('admin/assets/extra-libs/toastr/toastr-init.js') }}"></script>
    @stack('scripts')
</body>

</html>
