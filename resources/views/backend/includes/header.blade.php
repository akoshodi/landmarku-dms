<header class="c-header c-header-light c-header-fixed">
    <button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar" data-class="c-sidebar-show">
        <i class="c-icon c-icon-lg cil-menu"></i>
    </button>

    <a class="c-header-brand d-lg-none" href="#">
        <img class="c-sidebar-brand-full" src="{{ asset('/assets/brand/logo.png') }}" width="118" height="46" alt="Landmark University Logo">
    </a>

    <button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar" data-class="c-sidebar-lg-show" responsive="true">
        <i class="icon icon-lg cil-menu"></i>
    </button>

    <ul class="c-header-nav d-md-down-none">
        <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="{{ route('home') }}">Homezzzz</a></li>

        @if(config('boilerplate.locale.status') && count(config('boilerplate.locale.languages')) > 1)
            <li class="c-header-nav-item dropdown">
                <x-link
                    :text="__(getLocaleName(app()->getLocale()))"
                    class="c-header-nav-link dropdown-toggle"
                    id="navbarDropdownLanguageLink"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false" />

                @include('includes.partials.lang')
            </li>
        @endif
    </ul>

    <ul class="c-header-nav ml-auto mr-4">
        <li></li>
        <li class="c-header-nav-item dropdown">
            <x-link class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <x-slot name="text">
                    <div>
                        <b>{{ ucfirst(strtolower($logged_in_user->first_name)) . ' ' . ucfirst(strtolower($logged_in_user->last_name)) }}</b>
                    </div>
                    <div class="c-avatar">
                        <img class="c-avatar-img" src="{{ asset('/assets/img/avatars/avatar.jpg') }}" style="height: 35px; width:35px;" alt="{{ $logged_in_user->email ?? '' }}">
                    </div>
                </x-slot>
            </x-link>

            <div class="dropdown-menu dropdown-menu-right pt-0">
                <div class="dropdown-header bg-light py-2">
                    <strong>@lang('Account')</strong>
                </div>

                <a class="dropdown-item" href="#">
                    <i class="c-icon mr-2 cil-bell"></i> Updates<span class="badge badge-info ml-auto">42</span></a>

                <a class="dropdown-item" href="#">
                    <i class="c-icon mr-2 cil-envelope-open"></i> Messages<span class="badge badge-success ml-auto">42</span></a>

                <a class="dropdown-item" href="#">
                    <i class="c-icon mr-2 cil-task"></i> Tasks<span class="badge badge-danger ml-auto">42</span></a>

                <div class="dropdown-header bg-light py-2"><strong>Settings</strong></div>
                <a class="dropdown-item" href="#">
                    <i class="c-icon mr-2 cil-user"></i> Profile</a>
                <div class="dropdown-divider"></div>

                <x-link
                    class="dropdown-item"
                    icon="c-icon mr-2 cil-account-logout"
                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <x-slot name="text">
                        @lang('Logout')
                        <x-post :action="route('logout')" id="logout-form" class="d-none" />
                    </x-slot>
                </x-link>
            </div>
        </li>
    </ul>


</header>

