<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
    <div class="sidebar-brand d-none d-md-flex">
        <img
            class="sidebar-brand-full"
            src="{{ asset('assets/brand/logo.png') }}"
            width="118"
            height="46"
            alt="Landmark University Logo"
        >
        <img
            class="sidebar-brand-narrow"
            src="{{ asset('assets/brand/logo_small.png') }}"
            width="46"
            height="46"
            alt="Landmark University Logo"
        >
    </div>
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar>
        @if(Auth::user()->hasRole(['Administrator|Superadmin']))
            <li class="nav-item"><a class="nav-link" href="/admin/dashboard">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('assets/icons/sprites/free.svg#cil-speedometer') }}"></use>
                </svg> Dashboard<span class="badge badge-sm bg-info ms-auto">NEW</span></a></li>
            <li class="nav-title">Theme</li>

            <li class="nav-item"><a class="nav-link" href="/admin/manage">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('assets/icons/sprites/free.svg#cil-file') }}"></use>
                </svg> Manage Documents</a></li>
        @endif
        @if(!Auth::user()->hasRole(['Administrator','Superadmin']))
            <li class="nav-item"><a class="nav-link" href="/">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('assets/icons/sprites/free.svg#cil-cloud-upload') }}"></use>
                </svg> Documents Upload</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="printouts">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('assets/icons/sprites/free.svg#cil-notes') }}"></use>
                </svg> Other Documents</a>
            </li>

            <li class="nav-item"><a class="nav-link" href="pdf">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('assets/icons/sprites/free.svg#cil-cloud-download') }}"></use>
                </svg> Download Report</a>
            </li>
        @endif
{{--        @if(Auth::user()->hasRole(['Superadmin']))--}}
{{--            <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">--}}
{{--                <svg class="nav-icon">--}}
{{--                    <use xlink:href="{{ asset('assets/icons/sprites/free.svg#cil-star') }}"></use>--}}
{{--                </svg> Pages</a>--}}
{{--                <ul class="nav-group-items">--}}
{{--                    <li class="nav-item"><a class="nav-link" href="login.html" target="_top">--}}
{{--                        <svg class="nav-icon">--}}
{{--                            <use xlink:href="{{ asset('assets/icons/sprites/free.svg#cil-account-logout') }}"></use>--}}
{{--                        </svg> Login</a></li>--}}
{{--                    <li class="nav-item"><a class="nav-link" href="register.html" target="_top">--}}
{{--                        <svg class="nav-icon">--}}
{{--                            <use xlink:href="{{ asset('assets/icons/sprites/free.svg#cil-account-logout') }}"></use>--}}
{{--                        </svg> Register</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--        @endif--}}

        <li class="nav-item mt-auto">
            <x-link
                class="nav-link"
                :active="activeClass(Route::is('logout'), 'active')"
                icon="nav-icon cil-account-logout"
                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <x-slot name="text">
                    @lang('Logout')
                    <x-post :action="route('logout')" id="logout-form" class="d-none" />
                </x-slot>
            </x-link>

{{--            <a class="nav-link nav-link-danger" href="https://coreui.io/pro/" target="_top">--}}
{{--            <svg class="nav-icon">--}}
{{--                <use xlink:href="{{ asset('assets/icons/sprites/free.svg#cil-description') }}"></use>--}}
{{--            </svg> Starter--}}
{{--            <div class="fw-semibold">kit</div></a>--}}
        </li>
    </ul>
    <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
</div>
