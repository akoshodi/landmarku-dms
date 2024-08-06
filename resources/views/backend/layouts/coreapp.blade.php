<html lang="en" data-coreui-theme="light">

    <head>
        <base href="./">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
        <meta name="author" content="Łukasz Holeczek">
        <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="manifest" href="assets/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <!-- Vendors styles-->
{{--        <link rel="stylesheet" href="assets/vendors/simplebar/css/simplebar.css">--}}
{{--        <link rel="stylesheet" href="assets/vendors/simplebar.css">--}}
        <!-- Main styles for this application-->
{{--        <link href="assets/css/style.css" rel="stylesheet">--}}
        <!-- We use those styles to show code examples, you should remove them
        in your application.-->
{{--        <link href="assets/css/examples.css" rel="stylesheet">--}}
        <!-- We use those styles to style Carbon ads and CoreUI PRO banner, you
        should remove them in your application.-->
{{--        <link href="assets/css/ads.css" rel="stylesheet">--}}
{{--        <script src="assets/js/config.js"></script>--}}
{{--        <script src="assets/js/color-modes.js"></script>--}}
{{--        <link href="assets/vendors/@coreui/chartjs/css/coreui-chartjs.css" rel="stylesheet">--}}

        @vite([
            'resources/sass/app.scss',
            'resources/assets/css/style.css',
            'resources/assets/vendors/simplebar/css/simplebar.css',
            'resources/assets/vendors/@coreui/chartjs/css/coreui-chartjs.css',
            'resources/js/app.js',
            'resources/assets/js/config.js',
            'resources/assets/js/color-modes.js',

            ])
        @stack('styles')
    </head>

    <body>
        @include('partials.sidebar')

        <div class="wrapper d-flex flex-column min-vh-100">
            @include('partials.header')

            <main>
                @yield('content')
            </main>

            @include('partials.footer')
        </div>
        <!-- CoreUI and necessary plugins-->
{{--        <script src="assets/vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>--}}
{{--        <script src="assets/vendors/simplebar/js/simplebar.min.js"></script>--}}
        <script>
            const header = document.querySelector('header.header');

            document.addEventListener('scroll', () = >{
                if (header) {
                    header.classList.toggle('shadow-sm', document.documentElement.scrollTop > 0);
                }
            });
        </script>
        <!-- Plugins and scripts required by this view-->
{{--        <script src="assets/vendors/chart.js/js/chart.umd.js"></script>--}}
{{--        <script src="assets/vendors/@coreui/chartjs/js/coreui-chartjs.js"></script>--}}
{{--        <script src="assets/vendors/@coreui/utils/js/index.js"></script>--}}
{{--        <script src="assets/js/main.js"></script>--}}
        @stack('scripts')
        @vite([
            'resources/assets/vendors/chart.js/js/chart.umd.js',
            'resources/assets/vendors/@coreui/chartjs/js/coreui-chartjs.js',
            'resources/assets/vendors/@coreui/utils/js/index.js',
            'resources/assets/js/main.js'
        ])
</body>

</html>
