@extends('backend.layouts.app2')

@section('title', __('Dashboard'))
@push('after-styles')

@endpush

@section('content')
    <div class="container">
        <div class="card mb-4">
            <div class="card-header"> Students
{{--                 <div class="card-header-actions"><a class="card-header-action" href="https://datatables.net" target="_blank"><small class="text-muted">docs</small></a></div>--}}
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                    <table class="table table-striped border display responsive nowrap " id="users-table" style="width:100%" >
                        <thead class="">
                        <tr>
{{--                            <th  scope="col">#</th>--}}
                            <th>S/N</th>
                            <th scope="col">Last name</th>
                            <th scope="col">First name</th>
                            <th scope="col">Regno</th>
{{--                            <th scope="col">Last Login</th>--}}
                            <th scope="col">Status</th>
                            <th scope="col">Uploads</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                    </table>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

@push('after-scripts')



    <script>
        $('#users-table').DataTable({
            processing: true,
            responsive: true,
            serverSide: true,
            ajax: '{{ route('api.users') }}',
            zeroRecords:    "No records match",
            columns: [
                { "data": "id",
                    render: function (data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }, orderable: false, searchable: false
                },
                { data: 'last_name', name: 'last_name', searchable: true, sortable : true },
                { data: 'first_name', name: 'first_name', searchable: true, sortable : true },
                { data: 'REGNO', name: 'REGNO' },
                // { data: 'lastlogin', name: 'lastlogin', orderable: false, searchable: false  },
                { data: 'status', name: 'status',
                    render: function( data, type, full, meta ) {
                        if(data == 'ACTIVE' || data == 'SPS ACTIVE' || data == 'MATRICULATED' || data == 'ON I.T.'){
                            return '<span class="badge bg-success">' + data.charAt(0).toUpperCase() + data.slice(1).toLowerCase() + '</span>';
                        } else if(data == 'GRADUATED'){
                            return '<span class="badge bg-primary">' + data.charAt(0).toUpperCase() + data.slice(1).toLowerCase() + '</span>';
                        }
                        else if(data == 'SUSPENDED' || data == 'EXPELLED' || data == 'WITHDRAWN' || data == 'DECEASED' || data == 'STUDENTSHIP REVOKED' || data == 'ADMISSION REVOKED'){
                            return '<span class="badge bg-danger">' + data.charAt(0).toUpperCase() + data.slice(1).toLowerCase() + '</span>';
                        }
                        else if(data == 'TRANSFERRED' || data == 'TENANCY EXPENDED' || data == 'DEFERRED'){
                            return '<span class="badge bg-warning">' + data.charAt(0).toUpperCase() + data.slice(1).toLowerCase() + '</span>';
                        }
                        else if(data == 'NOT MATRICULATED' || data == 'NOT REGISTERED'){
                            return '<span class="badge bg-info">' + data.charAt(0).toUpperCase() + data.slice(1).toLowerCase() + '</span>';
                        } else
                            return '<span class="badge bg-secondary">' + data.charAt(0).toUpperCase() + data.slice(1).toLowerCase() + '</span>';
                        }, sortable: true, searchable: false
                },
                { data: 'documents_count', name: 'documents_count', searchable: false },
                { data: 'action', name: 'action', orderable: false, searchable: false }

            ]
        });
    </script>

@endpush
