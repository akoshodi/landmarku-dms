@extends('layouts.coreapp')

@section('content')

      <div class="body flex-grow-1">
        <div class="container-lg px-4">
          <div class="row mb-4">
            <div class="col-xl-5 col-xxl-4 mb-4 mb-xl-0">
              <script id="_carbonads_js" async="" type="text/javascript" src="//cdn.carbonads.com/carbon.js?serve=CEAICKJY&amp;placement=coreuiio"></script>
            </div>
            <div class="col-xl-7 col-xxl-8"><a class="banner-coreui-pro" href="https://coreui.io/product/bootstrap-dashboard-template/?theme=default">
                <svg class="banner-coreui-pro-logo d-xl-none d-xxl-block" width="100" height="100" alt="CoreUI Logo">
                  <use xlink:href="assets/brand/coreui.svg#signet"></use>
                </svg>
                <h4 class="fw-bolder">Elevate Your Design with CoreUI PRO!</h4>
                <p>Unlock a world of possibilities: More themes, enhanced components (Date Picker, Multi Select, and more), and priority support.</p></a></div>
          </div>
          <div class="card mb-4">
            <div class="card-header"> Theme colors</div>
            <div class="card-body">
              <div class="row">
                <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-4">
                  <div class="bg-primary theme-color w-75 rounded mb-2" style="padding-top:75%"></div>
                  <h6>Brand Primary Color</h6>
                </div>
                <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-4">
                  <div class="bg-secondary theme-color w-75 rounded mb-2" style="padding-top:75%"></div>
                  <h6>Brand Secondary Color</h6>
                </div>
                <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-4">
                  <div class="bg-success theme-color w-75 rounded mb-2" style="padding-top:75%"></div>
                  <h6>Brand Success Color</h6>
                </div>
                <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-4">
                  <div class="bg-danger theme-color w-75 rounded mb-2" style="padding-top:75%"></div>
                  <h6>Brand Danger Color</h6>
                </div>
                <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-4">
                  <div class="bg-warning theme-color w-75 rounded mb-2" style="padding-top:75%"></div>
                  <h6>Brand Warning Color</h6>
                </div>
                <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-4">
                  <div class="bg-info theme-color w-75 rounded mb-2" style="padding-top:75%"></div>
                  <h6>Brand Info Color</h6>
                </div>
                <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-4">
                  <div class="bg-light theme-color w-75 rounded mb-2" style="padding-top:75%"></div>
                  <h6>Brand Light Color</h6>
                </div>
                <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-4">
                  <div class="bg-dark theme-color w-75 rounded mb-2" style="padding-top:75%"></div>
                  <h6>Brand Dark Color</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection

@push('styles')
    @vite('resources/assets/css/ads.css')
@endpush

@push('scripts')
{{--    @vite('resources/js/page-specific.js')--}}
@endpush
