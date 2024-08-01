@extends('backend.layouts.app')

@section('title', __('Dashboard'))
@push('after-styles')

@endpush

@section('content')
    <div class="kanban_container">
        <div class="card-group">
            <div class="card m-1 " >
                <div class="row no-gutters">
                    <div class="col-4">
                        <img class="kanban_image" width="95" src="assets/img/avatars/LU10942.JPG">
{{--                        <svg class="bd-placeholder-img" width="" height="80%" xmlns="asse" aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice" role="img"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image</text></svg>--}}

                    </div>
                    <div class="col-8">
                        <div class="kanban_details">
                            <b>Oshodi Akinwale</b>
                            <p class="card-text"> Software Engineer</p>
                            <p class="card-text"><small class="text-muted">oshodi.akinwale@lmu.edu.ng</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card m-1 " >
                <div class="row no-gutters">
                    <div class="col-4">
                        <img class="kanban_image" width="95" src="assets/img/avatars/LU11073.JPG">
                    </div>
                    <div class="col-8">
                        <div class="kanban_details">
                            <div class="kanban_record_headings">
                                <strong class="kanban_record_title">
                                    <span>Olawepo Samuel</span>
                                </strong>
                                <span class="kanban_record_subtitle" >
                                    <span>Software Engineer</span>
                                </span>
                            </div>

                            <p class="card-text"><small class="text-muted">samuel.olawepo@lmu.edu.ng</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card m-1 ">
                <div class="row no-gutters">
                    <div class="col-4">
                        <img class="kanban_image" width="95" src="assets/img/avatars/LU10937.JPG">
                    </div>
                    <div class="col-8">
                        <div class="kanban_details">
                            <b>Igbekele Emmanuel</b>
                            <p class="card-text"> Software Engineer</p>
                            <p class="card-text"><small class="text-muted">oshodi.akinwale@lmu.edu.ng</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>

@endsection

@push('after-scripts')

@endpush
