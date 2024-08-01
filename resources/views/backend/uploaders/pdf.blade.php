@extends('backend.layouts.app')

@section('styles')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/r-2.2.2/datatables.min.css">
@endsection

@section('content')
    <div class="container"  >
        <div class="card">
            <div class="card-header"> <b>{{ $users->fullname }}'s uploaded documents</b>
                <div class="card-header-actions"><a class="card-header-action" href="https://datatables.net" target="_blank"><small class="text-muted">docs</small></a></div>
            </div>
            <div class="card-body">
                <div class="col-sm-12">

                </div>
                <div>
                    @if(count($documents) > 1)
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
                                <td>{{ $document->name }}</td>
                                <td>{{ Carbon\Carbon::parse($document->created_at)->toDayDateTimeString() }}</td>
                                <td>
                                    {{--                            <div class="row" >--}}
                                    {{--                                <a href="" type="button" class="btn btn-danger btn-sm" >--}}
                                    {{--                                    <i class="fas fa-search"></i>--}}
                                    {{--                                </a>--}}
                                    <form action="/documents/{{$document->id}}" method="GET">
                                        {{ csrf_field() }}

                                        <button type="button" class="btn btn-primary btn-sm" value="submit" type="submit" data-toggle="modal" data-target="#exampleModal">
                                            <svg class="c-icon">
                                                {{--                                                <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-trash"></use>--}}
                                                <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-magnifying-glass"></use>
                                            </svg>
                                        </button>
                                    </form>

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

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Launch demo modal
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">



                            <canvas id="pdf"></canvas>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>

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
