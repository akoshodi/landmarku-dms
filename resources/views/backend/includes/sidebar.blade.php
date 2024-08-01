<div class="sidebar sidebar-dark sidebar-fixed sidebar-lg-show" id="sidebar">
    <div class="sidebar-brand d-lg-down-none">
        <img class="sidebar-brand-full" width="118" height="46" src="{{ asset('assets/brand/logo.png') }}" width="118" height="46" alt="Landmark University Logo">
        <img class="sidebar-brand-minimized" width="46" height="46" src="{{ asset('assets/brand/logo_small.png') }}" width="118" height="46">

    </div>

    <ul class="sidebar-nav">
        @if(!Auth::user()->hasRole(['Administrator','Superadmin']))
            <li class="sidebar-nav-item">
                <x-link
                    class="sidebar-nav-link"
                    :href="route('documents.index')"
                    :active="activeClass(Route::is('documents.index'), 'active')"
                    icon="sidebar-nav-icon cil-file"
                    :text="__('Documents Upload')" />
            </li>
            <li class="c-sidebar-nav-item">
                <x-link
                    class="c-sidebar-nav-link"
                    :href="route('printouts.index')"
                    :active="activeClass(Route::is('printouts.index'), 'c-active')"
                    icon="c-sidebar-nav-icon cil-file"
                    :text="__('Printouts Upload')" />
            </li>
            <li class="c-sidebar-nav-item">
                <x-link
                    class="c-sidebar-nav-link"
                    :href="route('download')"
                    :active="activeClass(Route::is('download'), 'c-active')"
                    icon="c-sidebar-nav-icon cil-file"
                    :text="__('Download Report')" />
            </li>
        @endif
        @if(Auth::user()->hasRole(['Administrator|Superadmin']))
                <li class="c-sidebar-nav-item">
                    {{--                <a href="http://staffhr8.test/admin/dashboard" class="c-active c-sidebar-nav-link"><i class="c-sidebar-nav-icon cil-speedometer"></i> Dashboard</a>--}}
                    <x-link
                        class="c-sidebar-nav-link"
                        :href="route('admin.dashboard')"
                        :active="activeClass(Route::is('dashboard'), 'c-active')"
                        icon="c-sidebar-nav-icon cil-speedometer"
                        :text="__('Dashboard')" />
                </li>
            <li class="c-sidebar-nav-item">
                <x-link
                    class="c-sidebar-nav-link"
                    :href="route('admin.manage.index')"
                    :active="activeClass(Route::is('manage.index'), 'c-active')"
                    icon="c-sidebar-nav-icon cil-file"
                    :text="__('Manage Documents')" />
            </li>
        @endif
        <li class="c-sidebar-nav-item">
            <x-link
                class="c-sidebar-nav-link"
                :active="activeClass(Route::is('logout'), 'c-active')"
                icon="c-sidebar-nav-icon cil-account-logout"
                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <x-slot name="text">
                    @lang('Logout')
                    <x-post :action="route('logout')" id="logout-form" class="d-none" />
                </x-slot>
            </x-link>

        </li>




    </ul>

    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
</div><!--sidebar-->
