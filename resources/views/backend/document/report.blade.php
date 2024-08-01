@extends('backend.layouts.app')

@section('styles')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/r-2.2.2/datatables.min.css">
@endsection

@section('content')
    <div class="container"  >
        <div class="card">
{{--            <div class="card-header"> <b>{{ $users->fullname }}'s uploaded documents</b>--}}
                {{--                <div class="card-header-actions"><a class="card-header-action" href="https://datatables.net" target="_blank"><small class="text-muted">docs</small></a></div>--}}
            </div>
            <div class="card-body">
                <div class="col-sm-12">

                </div>
                <div>
                    @if(count($documents) > 0)
                        <table class="table table-striped id="myTable">
                        <thead>
                        <tr>
                            <th>Document Name</th>
                            <th>Upload Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($documents as $document)
                            <tr>
                                <td>{{ $document->session . ' ' . $document->semester . ' ' . $document->name }}</td>
                                <td>{{ Carbon\Carbon::parse($document->created_at)->toDayDateTimeString() }}</td>

                                <td>
                                    <a class="btn btn-info btn-sm" href="/documents/{{$document->uuid}}" target="_blank"
                                        {{--                                       data-toggle="modal" data-target=".cd-example-modal-xl"--}}
                                    >
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
                                </td>

                                {{--                            </div>--}}
                            </tr>
                        @endforeach
                        </tbody>
                        </table>
                    @else
                        No documents uploaded yet.
                    @endif
                </div>
            </div>

            <!-- Modal -->
            {{--            <div class="modal fade cd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">--}}
            {{--                <div class="modal-dialog modal-xl">--}}
            {{--                    <div class="modal-content">--}}
            {{--                        <embed src="/documents/{{$document->uuid}}" frameborder="0" width="100%" >--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}



        </div>
    </div>
@endsection

@section('javascripts')
    {{--    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>--}}

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
    <script>
        // simple.js
        var loadingTask = PDFJS.getDocument("{{ $file ?? '' }}");
        loadingTask.promise.then(
            function(pdf) {
                // Load information from the first page.
                pdf.getPage(1).then(function(page) {
                    var scale = 1;
                    var viewport = page.getViewport(scale);

                    // Apply page dimensions to the <canvas> element.
                    var canvas = document.getElementById("pdf");
                    var context = canvas.getContext("2d");
                    canvas.height = viewport.height;
                    canvas.width = viewport.width;

                    // Render the page into the <canvas> element.
                    var renderContext = {
                        canvasContext: context,
                        viewport: viewport
                    };
                    page.render(renderContext).then(function() {
                        console.log("Page rendered!");
                    });
                });
            },
            function(reason) {
                console.error(reason);
            }
        );

    </script>
@endsection
