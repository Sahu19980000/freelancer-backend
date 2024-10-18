<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Riho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Riho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ asset('assets/images/favicon.png" type="image/x-icon') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png" type="image/x-icon') }}">
    <title>@yield('title')</title>
    @include('admin.layouts.css')

</head>

<body>
    <!-- loader starts-->
    <div class="loader-wrapper">
        <div class="loader">
            <div class="loader4"></div>
        </div>
    </div>
    <!-- loader ends-->


    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">


        <!-- Page Header Start-->
        @include('admin.layouts.header')
        <!-- Page Header Ends

        -->
        <!-- Page Body Start-->
        <div class="page-body-wrapper">


            <!-- Page Sidebar Start-->
            @include('admin.layouts.sidebar')
            <!-- Page Sidebar Ends-->


            <div class="page-body">
                @yield('content')
            </div>



            <!-- footer start-->
            @include('admin.layouts.footer')
            <!-- footer Ends-->

        </div>
    </div>

    {{-- js link --}}
    @include('admin.layouts.js')
</body>

</html>
