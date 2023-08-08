<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>UKM LABBAIK 2023</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="Coderthemes" name="author">

    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> --}}

    {{-- <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> --}}

    <link rel="shortcut icon" href="{{ URL::asset('admin/assets/images/Logo_LABAIK.png') }}">

    <!-- third party css -->
    <link href="{{ URL::asset('admin/assets/css/vendor/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet"
        type="text/css">
    <!-- third party css end -->

    <!-- App css -->
    <link href="{{ URL::asset('/css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('admin/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('admin/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="light-style">
    <link href="{{ URL::asset('admin/assets/css/app-dark.min.css') }}" rel="stylesheet" type="text/css" id="dark-style">
    <link href="{{ URL::asset('admin/assets/css/style.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@2.1.4/dist/boxicons.js' rel='stylesheet'>



</head>

<body class="loading"
    data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
    <!-- Begin page -->
    <div class="wrapper">
        <!-- ========== Left Sidebar Start ========== -->
        <div class="leftside-menu">

            <!-- LOGO -->

            <a href="." class="logo text-center logo-light" style="background-color: white">
                <div class="d-flex align-items-center gap-2 justify-content-center">
                    <span class="logo-lg">
                        <img src="{{ URL::asset('admin/assets/images/Logo_LABAIK.png') }}" alt="" height="76"
                            class="py-2">
                    </span>
                    <h4 class="fw-bold text-light">Labbaik</h4>
                </div>
                <span class="logo-sm">
                    <img src="{{ URL::asset('admin/assets/images/Logo_LABAIK.png') }}" alt="" height="46">
                </span>
            </a>

            <!-- LOGO -->
            <a href="." class="logo text-center logo-dark">
                <span class="logo-lg">
                    <img src="{{ URL::asset('admin/assets/images/logo-dark.png') }}" alt="" height="16">
                </span>
                <span class="logo-sm">
                    <img src="{{ URL::asset('admin/assets/images/logo_sm_dark.png') }}" alt="" height="16">
                </span>
            </a>

            @include('admin.partials.sidebar')
        </div>

        <div class="content-page">
            <div class="content">
                @include('admin.partials.header')
                <div class="container-fluid">
                    @yield('content2')
                </div>
            </div>
            @include('admin.partials.footer')
        </div>
    </div>
    @include('admin.partials.custome')
    <div class="rightbar-overlay"></div>

    {{-- <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> --}}

    <script src="{{ URL::asset('admin/assets/js/vendor.min.js') }}"></script>
    <script src="{{ URL::asset('admin/assets/js/app.min.js') }}"></script>

    <!-- third party js -->
    <script src="{{ URL::asset('admin/assets/js/vendor/apexcharts.min.js') }}"></script>
    <script src="{{ URL::asset('admin/assets/js/vendor/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ URL::asset('admin/assets/js/vendor/jquery-jvectormap-world-mill-en.js') }}"></script>
    <!-- third party js ends -->

    <!-- demo app -->
    <script src="{{ URL::asset('admin/assets/js/pages/demo.dashboard.js') }}"></script>
    <!-- end demo js-->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="//cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.css">
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script> --}}
    @stack('script');
</body>

</html>
