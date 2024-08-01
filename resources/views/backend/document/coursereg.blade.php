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
                Kindly upload scanned copies of your documents in <b>pdf format</b> and passport in <b>JPEG format</b> with sizes not more that <b>1MB</b>. <br/>
                If your document size is more than 1MB use <a href="https://smallpdf.com/compress-pdf" target="_blank" class="alert-link">smallpdf website</a> to reduce the document size before uploading.
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

            <form method="POST" action="/documents" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-row">

                    <div class="form-group col-md-4">

                        <select class="form-control" name="document" id="docu" onchange="yesnoCheck(this);">
                            <option>Select Document</option>
                            @foreach ($items as $item)
                                <option value="{{ $item->id }}">
                                    {{ $item->name }}
                                </option>
                            @endforeach
                            <option value="12">Result</option>
                        </select>
                    </div>

                    <div class="custom-file col-md-6" >
                        <input type="file" class="custom-file-input" id="uploaded_file" name="uploaded_file">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                    <div class="col-md-2" >
                        <button type="submit" id="addMore" class="btn btn-success btn-md">Upload Document </button>
                    </div>

                </div>
            </form>

            <div>
                <table class="table table-responsive-sm table-outline table-bordered">
                    @isset($documents)
                        <thead class="thead-light">
                        <tr>
                            <th>Document Name</th>
                            <th>Upload Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                    @endisset

                    <tbody>
                    @foreach ($documents as $document)
                        <tr>
                            <td>{{ $document->name }}</td>
                            <td>{{ Carbon\Carbon::parse($document->created_at)->toDayDateTimeString() }}</td>
                            <td>
                                <a class="btn btn-info btn-sm" href="/documents/{{$document->id}}" target="_blank">
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
    <?php
    //    echo $upload_path;
    ?>
@endsection

@section('javascript')

    <script>
        // $(document).ready(function(){
        //     var num = 12;
        //     $("div#selection select.select option").each(function(){
        //         if($(this).val()==num){ // EDITED THIS LINE
        //             $(this).attr("selected","selected");
        //             $('#myDiv').show();
        //         }
        //     });
        // });
        function yesnoCheck(that) {
            if (that.value == 12 {
                document.getElementById("myDiv").style.display = "block";
            } else {
                document.getElementById("myDiv").style.display = "none";
            }
        }
    </script>


    <script>
        var _grid = $("#myTable").dataTable({
            fnDrawCallback: function (settings) {
                $("#myTable").parent().toggle(settings.fnRecordsDisplay() > 0);
            }
        });
    </script>

@endsection
