<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v4.1.1
* @link https://coreui.io
* Copyright (c) 2022 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<!-- Breadcrumb-->
<html lang="en">
<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="author" content="Akinwale Oshodi">
    <title>Landmark University</title>

    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendors styles-->
    <link rel="stylesheet" href="{{ asset('../../../node_modules/simplebar/dist/simplebar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendors/simplebar.css') }}">
    <!-- Main styles for this application-->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- We use those styles to show code examples, you should remove them in your application.-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/themes/prism.css">
    <link href="{{ asset('css/examples.css') }}" rel="stylesheet">
    <link href="{{ asset('css/copy-email.css') }}" rel="stylesheet">

    @stack('before-styles')
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/@coreui/icons/css/all.min.css">
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">--}}
    <link rel="stylesheet" href="https://cdn.datatables.net/v/bs4-4.6.0/dt-1.12.1/r-2.3.0/datatables.min.css">
    {{--    <livewire:styles />--}}
    {{-- @toastr_css --}}
    <link href="{{ asset('css/override.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@coreui/coreui@4.1.4/dist/css/coreui.min.css" rel="stylesheet" integrity="sha384-YUdsYsgRlkUONN8mdJ0FYda0kzlomX2TWturtRobleAB8py9rvyfGQzJdLRc9lFL" crossorigin="anonymous">
	<script defer data-domain="documentuploads.lmu.edu.ng" src="https://analytics.lmu.edu.ng/js/plausible.js"></script>


{{--        <link href="{{ asset('css/toastr.css') }}" rel="stylesheet">--}}
    @stack('after-styles')
    @yield('styles')

</head>
<body>

@include('backend.admin.partials.sidebar')

<div class="wrapper d-flex flex-column min-vh-100 bg-light">
    @include('backend.includes.partials.logged-in-as')
    @include('backend.admin.partials.header')

    <div class="body flex-grow-1 px-3">

        <div class="container-lg">
            @yield('content')
            <!-- /.row-->
        </div>
    </div>
    <footer class="footer">
        <div> &copy; {{ date('Y') }} <a href="https://lmu.edu.ng">Landmark University</a></div>
        <div class="ms-auto">Powered by&nbsp;<a href="https://csis.lmu.edu.ng/">CSIS</a></div>
    </footer>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>--}}
<script src="https://cdn.datatables.net/v/bs4-4.6.0/dt-1.12.1/r-2.3.0/datatables.min.js"></script>
<!-- CoreUI and necessary plugins-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
{{--<script src="{{ asset('node_modules/@coreui/coreui/dist/js/coreui.bundle.min.js') }}"></script>--}}
<script src="https://cdn.jsdelivr.net/npm/@coreui/coreui@4.1.4/dist/js/coreui.bundle.min.js" ></script>

<script src="{{ asset('node_modules/simplebar/dist/simplebar.min.js') }}"></script>
<!-- Plugins and scripts required by this view-->
{{--<script src="{{ asset('node_modules/@coreui/chartjs/dist/js/coreui-chartjs.js') }}"></script>--}}
<script src="{{ asset('node_modules/@coreui/utils/dist/coreui-utils.js') }}"></script>
@toastr_js
@toastr_render
@stack('after-scripts')
@yield('javascript')
<script>
</script>
</body>
</html>
