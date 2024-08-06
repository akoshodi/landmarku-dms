<div class="sidebar sidebar-dark sidebar-fixed border-end" id="sidebar">
  <div class="sidebar-header border-bottom">
    <div class="sidebar-brand">
        <img class="sidebar-brand-full" width="88" height="32" src="{{ asset('assets/brand/logo.png') }}"  alt="Landmark University Logo">
        <img class="sidebar-brand-narrow" width="32" height="32" src="{{ asset('assets/brand/logo_small.png') }}" >
    </div>
    <button class="btn-close d-lg-none" type="button" data-coreui-dismiss="offcanvas"
    data-coreui-theme="dark" aria-label="Close" onclick="coreui.Sidebar.getInstance(document.querySelector(&quot;#sidebar&quot;)).toggle()">
    </button>
  </div>
  <ul class="sidebar-nav simplebar-scrollable-y" data-coreui="navigation"  data-simplebar="init">
    <div class="simplebar-wrapper" style="margin: -8px;">
      <div class="simplebar-height-auto-observer-wrapper">
        <div class="simplebar-height-auto-observer">
        </div>
      </div>
      <div class="simplebar-mask">
        <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
          <div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content"
          style="height: 100%; overflow: hidden scroll;">
            <div class="simplebar-content" style="padding: 8px;">
              <li class="nav-item">
                <a
                    class="nav-link active"
                    @if(Auth::user()->hasRole(['Administrator|Superadmin']))
                        href="/admin/dashboard"
                    @else
                        href="route('admin.dashboard')"
                    @endif
{{--                    {{  href="route('admin.dashboard')" ?? href="route('admin.dashboard')" }}--}}

                >
                    <svg class="nav-icon">
                        <use xlink:href="/assets/vendors/@coreui/icons/svg/cil-speedometer.svg">
                        </use>
                    </svg>
                      Dashboard
                    <span class="badge badge-sm bg-info ms-auto">
                        NEW
                    </span>
                </a>
              </li>
              <li class="nav-title">
                Theme
              </li>

              @if(!Auth::user()->hasRole(['Administrator','Superadmin']))
                  <li class="nav-item">
                    <a class="nav-link" href="colors">
                      <svg class="nav-icon">
                        <use xlink:href="/assets/vendors/@coreui/icons/svg/free.svg#cil-drop">
                        </use>
                      </svg>
                      Documents
                    </a>
                  </li>
              @endif
              @if(Auth::user()->hasRole(['Administrator|Superadmin']))
                  <li class="nav-item">
                    <a class="nav-link" href="/admin/manage">
                      <svg class="nav-icon">
                        <use xlink:href="/assets/vendors/@coreui/icons/svg/free.svg#cil-pencil">
                        </use>
                      </svg>
                        Manage Documents
                    </a>
                  </li>
              @endif


              <li class="nav-item mt-auto">
                  <x-link
                      class="nav-link text-primary fw-semibold"
                      :active="activeClass(Route::is('logout'), 'c-active')"
                      icon="c-sidebar-nav-icon cil-account-logout"
                      onclick="event.preventDefault();document.getElementById('logout-form').submit();">

                      <x-slot name="text">
                          @lang('Logout')
                          <x-post :action="route('logout')" id="logout-form" class="d-none" />
                      </x-slot>
                  </x-link>
                <a
                  class="nav-link text-primary fw-semibold"
                  href="https://coreui.io/product/bootstrap-dashboard-template/"
                  target="_top">
                  <svg class="nav-icon text-primary">
                    <use xlink:href="/assets/vendors/@coreui/icons/svg/free.svg#cil-layers"></use>
                  </svg>Try CoreUI PRO
                </a>
              </li>
            </div>
          </div>
        </div>
      </div>
      <div class="simplebar-placeholder" style="width: 255px; height: 823px;">
      </div>
    </div>
    <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
      <div class="simplebar-scrollbar" style="width: 0px; display: none;">
      </div>
    </div>
    <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
      <div class="simplebar-scrollbar" style="height: 25px; transform: translate3d(0px, 41px, 0px); display: block;">
      </div>
    </div>
  </ul>
  <div class="sidebar-footer border-top d-none d-md-flex">
    <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable">
    </button>
  </div>
</div>
