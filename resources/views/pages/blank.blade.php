@extends('layouts.coreapp')

@section('content')

      <div class="body flex-grow-1">
        <div class="container-lg px-4">
            <div class="row mb-4">
                <div class="card">
                    <div class="card-header">Manage Users</div>
                    <div class="card-body">
                        {{ $dataTable->table() }}
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




