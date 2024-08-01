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
                <a class="nav-link active" href="/">
                  <svg class="nav-icon">
                    <use xlink:href="assets/vendors/@coreui/icons/svg/cil-speedometer.svg">
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
                <li class="sidebar-nav-item">
                    <x-link
                        class="sidebar-nav-link"
                        :href="route('profile.edit')"
                        :active="activeClass(Route::is('profile.edit'), 'active')"
                        icon="sidebar-nav-icon cil-file"
                        :text="__('Documents Upload')" />
                </li>

              <li class="nav-item">
                <a class="nav-link" href="colors">
                  <svg class="nav-icon">
                    <use xlink:href="assets/vendors/@coreui/icons/svg/free.svg#cil-drop">
                    </use>
                  </svg>
                  Colors
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="typography">
                  <svg class="nav-icon">
                    <use xlink:href="assets/vendors/@coreui/icons/svg/free.svg#cil-pencil">
                    </use>
                  </svg>
                  Typography
                </a>
              </li>
              <li class="nav-title">
                Components
              </li>
              <li class="nav-group">
                <a class="nav-link nav-group-toggle" href="#">
                  <svg class="nav-icon">
                    <use xlink:href="assets/vendors/@coreui/icons/svg/free.svg#cil-puzzle">
                    </use>
                  </svg>
                  Base
                </a>
                <ul class="nav-group-items compact">
                  <li class="nav-item">
                    <a class="nav-link" href="base/accordion">
                      <span class="nav-icon">
                        <span class="nav-icon-bullet">
                        </span>
                      </span>
                      Accordion
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="base/breadcrumb">
                      <span class="nav-icon">
                        <span class="nav-icon-bullet">
                        </span>
                      </span>
                      Breadcrumb
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="base/cards">
                      <span class="nav-icon">
                        <span class="nav-icon-bullet">
                        </span>
                      </span>
                      Cards
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="base/carousel">
                      <span class="nav-icon">
                        <span class="nav-icon-bullet">
                        </span>
                      </span>
                      Carousel
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="base/collapse">
                      <span class="nav-icon">
                        <span class="nav-icon-bullet">
                        </span>
                      </span>
                      Collapse
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="base/list-group">
                      <span class="nav-icon">
                        <span class="nav-icon-bullet">
                        </span>
                      </span>
                      List group
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="base/navs-tabs">
                      <span class="nav-icon">
                        <span class="nav-icon-bullet">
                        </span>
                      </span>
                      Navs &amp; Tabs
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="base/pagination">
                      <span class="nav-icon">
                        <span class="nav-icon-bullet">
                        </span>
                      </span>
                      Pagination
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="base/placeholders">
                      <span class="nav-icon">
                        <span class="nav-icon-bullet">
                        </span>
                      </span>
                      Placeholders
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="base/popovers">
                      <span class="nav-icon">
                        <span class="nav-icon-bullet">
                        </span>
                      </span>
                      Popovers
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="base/progress">
                      <span class="nav-icon">
                        <span class="nav-icon-bullet">
                        </span>
                      </span>
                      Progress
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="base/spinners">
                      <span class="nav-icon">
                        <span class="nav-icon-bullet">
                        </span>
                      </span>
                      Spinners
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="base/tables">
                      <span class="nav-icon">
                        <span class="nav-icon-bullet">
                        </span>
                      </span>
                      Tables
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="base/tooltips">
                      <span class="nav-icon">
                        <span class="nav-icon-bullet">
                        </span>
                      </span>
                      Tooltips
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-group">
                <a class="nav-link nav-group-toggle" href="#">
                  <svg class="nav-icon">
                    <use xlink:href="assets/vendors/@coreui/icons/svg/free.svg#cil-cursor">
                    </use>
                  </svg>
                  Buttons
                </a>
                <ul class="nav-group-items compact">
                  <li class="nav-item">
                    <a class="nav-link" href="buttons/buttons">
                      <span class="nav-icon">
                        <span class="nav-icon-bullet">
                        </span>
                      </span>
                      Buttons
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="buttons/button-group">
                      <span class="nav-icon">
                        <span class="nav-icon-bullet">
                        </span>
                      </span>
                      Buttons Group
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="buttons/dropdowns">
                      <span class="nav-icon">
                        <span class="nav-icon-bullet">
                        </span>
                      </span>
                      Dropdowns
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="charts">
                  <svg class="nav-icon">
                    <use xlink:href="assets/vendors/@coreui/icons/svg/free.svg#cil-chart-pie">
                    </use>
                  </svg>
                  Charts
                </a>
              </li>
              <li class="nav-group">
                <a class="nav-link nav-group-toggle" href="#">
                  <svg class="nav-icon">
                    <use xlink:href="assets/vendors/@coreui/icons/svg/free.svg#cil-notes">
                    </use>
                  </svg>
                  Forms
                </a>
                <ul class="nav-group-items compact">
                  <li class="nav-item">
                    <a class="nav-link" href="forms/form-control">
                      <span class="nav-icon">
                        <span class="nav-icon-bullet">
                        </span>
                      </span>
                      Form Control
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="forms/select">
                      <span class="nav-icon">
                        <span class="nav-icon-bullet">
                        </span>
                      </span>
                      Select
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="forms/checks-radios">
                      <span class="nav-icon">
                        <span class="nav-icon-bullet">
                        </span>
                      </span>
                      Checks and radios
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="forms/range">
                      <span class="nav-icon">
                        <span class="nav-icon-bullet">
                        </span>
                      </span>
                      Range
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="forms/input-group">
                      <span class="nav-icon">
                        <span class="nav-icon-bullet">
                        </span>
                      </span>
                      Input group
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="forms/floating-labels">
                      <span class="nav-icon">
                        <span class="nav-icon-bullet">
                        </span>
                      </span>
                      Floating labels
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="forms/layout">
                      <span class="nav-icon">
                        <span class="nav-icon-bullet">
                        </span>
                      </span>
                      Layout
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="forms/validation">
                      <span class="nav-icon">
                        <span class="nav-icon-bullet">
                        </span>
                      </span>
                      Validation
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-group">
                <a class="nav-link nav-group-toggle" href="#">
                  <svg class="nav-icon">
                    <use xlink:href="assets/vendors/@coreui/icons/svg/free.svg#cil-star">
                    </use>
                  </svg>
                  Icons
                </a>
                <ul class="nav-group-items compact">
                  <li class="nav-item">
                    <a class="nav-link" href="icons/coreui-icons-free">
                      <span class="nav-icon">
                        <span class="nav-icon-bullet">
                        </span>
                      </span>
                      CoreUI Icons
                      <span class="badge badge-sm bg-success ms-auto">
                        Free
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="icons/coreui-icons-brand">
                      <span class="nav-icon">
                        <span class="nav-icon-bullet">
                        </span>
                      </span>
                      CoreUI Icons - Brand
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="icons/coreui-icons-flag">
                      <span class="nav-icon">
                        <span class="nav-icon-bullet">
                        </span>
                      </span>
                      CoreUI Icons - Flag
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-group">
                <a class="nav-link nav-group-toggle" href="#">
                  <svg class="nav-icon">
                    <use xlink:href="assets/vendors/@coreui/icons/svg/free.svg#cil-bell">
                    </use>
                  </svg>
                  Notifications
                </a>
                <ul class="nav-group-items compact">
                  <li class="nav-item">
                    <a class="nav-link" href="notifications/alerts">
                      <span class="nav-icon">
                        <span class="nav-icon-bullet">
                        </span>
                      </span>
                      Alerts
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="notifications/badge">
                      <span class="nav-icon">
                        <span class="nav-icon-bullet">
                        </span>
                      </span>
                      Badge
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="notifications/modals">
                      <span class="nav-icon">
                        <span class="nav-icon-bullet">
                        </span>
                      </span>
                      Modals
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="notifications/toasts">
                      <span class="nav-icon">
                        <span class="nav-icon-bullet">
                        </span>
                      </span>
                      Toasts
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="widgets">
                  <svg class="nav-icon">
                    <use xlink:href="assets/vendors/@coreui/icons/svg/free.svg#cil-calculator">
                    </use>
                  </svg>
                  Widgets
                  <span class="badge badge-sm bg-info ms-auto">
                    NEW
                  </span>
                </a>
              </li>
              <li class="nav-divider">
              </li>
              <li class="nav-title">
                Extras
              </li>
              <li class="nav-group">
                <a class="nav-link nav-group-toggle" href="#">
                  <svg class="nav-icon">
                    <use xlink:href="assets/vendors/@coreui/icons/svg/free.svg#cil-star">
                    </use>
                  </svg>
                  Pages
                </a>
                <ul class="nav-group-items compact">
                  <li class="nav-item">
                    <a class="nav-link" href="login" target="_top">
                      <svg class="nav-icon">
                        <use xlink:href="assets/vendors/@coreui/icons/svg/free.svg#cil-account-logout">
                        </use>
                      </svg>
                      Login
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="register" target="_top">
                      <svg class="nav-icon">
                        <use xlink:href="assets/vendors/@coreui/icons/svg/free.svg#cil-account-logout">
                        </use>
                      </svg>
                      Register
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="404" target="_top">
                      <svg class="nav-icon">
                        <use xlink:href="assets/vendors/@coreui/icons/svg/free.svg#cil-bug">
                        </use>
                      </svg>
                      Error 404
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="500" target="_top">
                      <svg class="nav-icon">
                        <use xlink:href="assets/vendors/@coreui/icons/svg/free.svg#cil-bug">
                        </use>
                      </svg>
                      Error 500
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item mt-auto">
                <a class="nav-link" href="https://coreui.io/docs/templates/installation/"
                target="_blank">
                  <svg class="nav-icon">
                    <use xlink:href="assets/vendors/@coreui/icons/svg/free.svg#cil-description">
                    </use>
                  </svg>
                  Docs
                </a>
              </li>
              <li class="nav-item">
                <a
                  class="nav-link text-primary fw-semibold"
                  href="https://coreui.io/product/bootstrap-dashboard-template/"
                  target="_top">
                  <svg class="nav-icon text-primary">
                    <use xlink:href="assets/vendors/@coreui/icons/svg/free.svg#cil-layers"></use>
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
