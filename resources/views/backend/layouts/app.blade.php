<!doctype html>
{{--<html lang="{{ htmlLang() }}" @langrtl dir="ltr" @endlangltr>--}}
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
{{--    <meta name="csrf-token" content="{{ csrf_token() }}">--}}
    <title> {{ appName() }} - @yield('title')</title>
    <meta name="description" content="@yield('meta_description', appName() )">
    <meta name="author" content="@yield('meta_author', 'Oshodi Akinwale')">
    @yield('meta')
{{--    <link href="{{ asset('img/brand/android-chrome-16x16.png') }}" rel="shortcut icon" type="image/png"/>--}}
    <link rel="icon" href="{{ URL::asset('img/brand/android-chrome-16x16.png') }}" type="image/x-icon"/>
{{--    <link rel="apple-touch-icon" sizes="192x192" href="{{ asset('img/brand/android-chrome-192x192.png') }}">--}}
{{--    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/brand/android-chrome-32x32.png') }}">--}}
{{--    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/brand/android-chrome-16x16.png') }}">--}}
{{--    <link rel="manifest" href="{{ asset('img/brand/site.webmanifest') }}">--}}
    @stack('before-styles')
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/@coreui/icons/css/free.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.dataTables.min.css">
{{--    <livewire:styles />--}}
    {{-- @toastr_css --}}
    <link href="{{ asset('css/override.css') }}" rel="stylesheet">
{{--    <link href="{{ asset('css/toastr.css') }}" rel="stylesheet">--}}
    @stack('after-styles')
    @yield('styles')

</head>
<body class="c-app">
    @include('backend.includes.sidebar')

    <div class="c-wrapper c-fixed-components">
        @include('backend.includes.header')
{{--        @include('backend.includes.partials.read-only')--}}
{{--        @include('backend.includes.partials.logged-in-as')--}}

        <div class="c-body">
            <main class="c-main">
                <div class="container-fluid">
                    <div class="fade-in">
{{--                        @include('backend.includes.partials.messages')--}}
                        @yield('content')
                    </div><!--fade-in-->
                </div><!--container-fluid-->
            </main>
        </div><!--c-body-->

        @include('backend.includes.footer')
    </div><!--c-wrapper-->

    @stack('before-scripts')
{{--    <script src="{{ mix('js/manifest.js') }}"></script>--}}
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.6.347/pdf.worker.entry.min.js"></script>--}}

    @toastr_js
    @toastr_render
{{--    <script src="{{ mix('js/vendor.js') }}"></script>--}}
    <script src="{{ mix('js/app.js') }}"></script>

{{--    <livewire:scripts />--}}
    @stack('after-scripts')

    @yield('javascript')
</body>
</html>
