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
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>CoreUI Free Bootstrap Admin Template</title>

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

    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

    </script>
    {{--    <link href="../../../node_modules/@coreui/chartjs/dist/css/coreui-chartjs.css" rel="stylesheet">--}}
</head>
<body>

@include('backend.admin.partials.sidebar')

<div class="wrapper d-flex flex-column min-vh-100 bg-light">
    @include('backend.admin.partials.header')

    <div class="body flex-grow-1 px-3">
        <div class="container-lg">

            <!-- /.row-->
        </div>
    </div>
    <footer class="footer">
        <div> &copy; {{ date('Y') }} <a href="https://lmu.edu.ng">Landmark University</a></div>
        <div class="ms-auto">Powered by&nbsp;<a href="https://csis.lmu.edu.ng/">CSIS</a></div>
    </footer>
</div>
<!-- CoreUI and necessary plugins-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="{{ asset('node_modules/@coreui/coreui/dist/js/coreui.bundle.min.js') }}"></script>
<script src="{{ asset('node_modules/simplebar/dist/simplebar.min.js') }}"></script>
<!-- Plugins and scripts required by this view-->
{{--<script src="node_modules/chart.js/dist/chart.min.js"></script>--}}
<script src="{{ asset('node_modules/@coreui/chartjs/dist/js/coreui-chartjs.js') }}"></script>
<script src="{{ asset('node_modules/@coreui/utils/dist/coreui-utils.js') }}"></script>
{{--<script src="js/main.js"></script>--}}
<script>
</script>
</body>
</html>
