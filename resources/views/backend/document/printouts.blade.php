@extends('backend.layouts.app2')

@section('title', __('Dashboard'))

@section('content')
    <x-card>
        <x-slot name="header">
            <b>Documents Upload</b>
        </x-slot>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <x-slot name="body">
            {{--            @if (session('status'))--}}
            {{--                <div class="alert alert-success">--}}
            {{--                    {{ session('status') }}--}}
            {{--                </div>--}}
            {{--            @endif--}}
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                Kindly upload scanned copies of your documents in <b>pdf format</b> with sizes not more that <b>500KB</b>. <br/>
                If your document size is more than 500KB use <a href="https://smallpdf.com/compress-pdf" target="_blank" class="alert-link">smallpdf website</a> to reduce the document size before uploading.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger col-md-12" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


            <form method="POST" action="/printouts" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <select id="inputState" class="form-control" name="semester">
                            <option selected>Select Semester</option>
                            <option value="Alpha">Alpha</option>
                            <option value="Omega">Omega</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <select class="form-control" name="acadsession" id="docu" ">
                            <option>Select Session</option>
                            @foreach ($session as $session_value)
                                <option value="{{ $session_value->description }}">
                                    {{ $session_value->description }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">

                        <select class="form-control" name="document" id="docu" onchange="yesnoCheck(this);">
                            <option>Select Document</option>
                            @foreach ($items as $item)
                                <option value="{{ $item->id }}">
                                    {{ $item->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-6">
{{--                        <div class="custom-file" >--}}
{{--                            <input type="file" class="custom-file-input" id="uploaded_file" name="uploaded_file">--}}
{{--                            <label class="custom-file-label" for="customFile">Choose file</label>--}}
{{--                        </div>--}}
                        <div class="mb-3">
                            <input class="form-control" type="file" id="uploaded_file"  name="uploaded_file">
                        </div>
                    </div>
                </div>
                <div>
                    <button type="submit" id="addMore" class="btn btn-success btn-md">Upload Document </button>
                </div>

            </form>

            <div>
                <table class="table table-responsive-sm table-outline table-bordered" id="myTable">

                        <thead class="thead-light">
                        <tr>
                            <th>Document Name</th>
                            <th>Upload Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>


                    <tbody>
                    @foreach ($documents as $document)
                        <tr>
{{--                            @if($document->session && $document->semester)--}}
                                <td>{{ $document->session . ' ' . $document->semester . ' ' . $document->name }}</td>
{{--                            @else--}}
{{--                                <td>{{ $document->name }}</td>--}}
{{--                            @endif--}}
                            <td>{{ Carbon\Carbon::parse($document->created_at)->toDayDateTimeString() }}</td>
                            <td>
                                <a class="btn btn-info btn-sm" href="/documents/{{$document->uuid}}" target="_blank">
                                    <i class="fas fa-search"></i> View
                                </a>

                                <x-link
                                    class="btn btn-danger btn-sm"
                                    icon="c-icon cil-trash"
                                    onclick="event.preventDefault();document.getElementById('delete-form-{{$document->id}}').submit();">
                                    <x-slot name="text">
                                        <x-delete :action="route('documents.del',  [$document->id] )" id="delete-form-{{$document->id}}" class="d-none" />
                                    </x-slot>
                                </x-link>
                        </tr>

                    @endforeach
                    </tbody>
                </table>
            </div>

        </x-slot>
    </x-card>

@endsection

@section('javascript')
    <script>
        var _grid = $("#myTable").dataTable({
            fnDrawCallback: function (settings) {
                $("#myTable").parent().toggle(settings.fnRecordsDisplay() > 0);

            },
            initComplete : function() {
                if ($(this).find('tbody tr').length<=1) {
                    $('#myTable').parents('div.dataTables_wrapper').first().hide();
                }
            }

        });
    </script>

@endsection
