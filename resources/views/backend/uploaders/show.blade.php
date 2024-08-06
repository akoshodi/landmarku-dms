@extends('backend.layouts.coreapp')

@section('styles')
{{--    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/r-2.2.2/datatables.min.css">--}}
@endsection

@section('content')
    <div class="container"  >
        <div class="card">
            <div class="card-header"> <strong>{{ $users->fullname }}'s uploaded documents</strong>
{{--                <div class="card-header-actions"><a class="card-header-action" href="https://datatables.net" target="_blank"><small class="text-muted">docs</small></a></div>--}}
            </div>
            <div class="card-body">
                <div class="col-sm-12">

                </div>
                <div>
                    @if(count($documents) > 0)
                    <table class="table border table-striped id="myTable">
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
                                    >
                                        <i class="icon cil-search"></i>
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
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    @else
                        No documents uploaded yet.
                    @endif
                </div>
            </div>


           </div>

        </div>
    </div>
@endsection

@section('javascripts')


<script>
    $('#modal-item').on('hidden', function() {
        $(this).removeData('modal');
    });
</script>

@endsection
