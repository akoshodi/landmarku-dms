@extends('backend.layouts.app')

@section('title', __('Dashboard'))

@section('content')
    <x-card>
        <x-slot name="header">
            Welcome Admin
        </x-slot>

        <x-slot name="body">
            <div class="row">
                <div class="col-3">
                    <div class="c-callout c-callout-info"><small class="text-muted">Total Uploads</small>
                        <div class="text-value-lg"> {{ $uploads->total }} </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="c-callout c-callout-danger"><small class="text-muted">In-active Staff</small>
                        <div class="text-value-lg">{{ $uploads->total }}</div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="c-callout c-callout-warning"><small class="text-muted">Academic Staff</small>
                        <div class="text-value-lg">78,623</div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="c-callout c-callout-success"><small class="text-muted">Non-academic Staff</small>
                        <div class="text-value-lg">49,123</div>
                    </div>
                </div>

            </div>
            <hr class="mt-0">
            <table class="table table-responsive-sm table-hover table-outline mb-0">
                <thead class="thead-light">
                <tr>
                    <th class="text-center">
                        <svg class="c-icon">
                            <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-people"></use>
                        </svg>
                    </th>
                    <th>Document</th>
                    <th>Uploaded By</th>


                    {{--                    <th class="text-center">Payment Method</th>--}}
                    <th>Activity</th>
                    <th class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td class="text-center">
                            <div class="c-avatar"><img class="c-avatar-img" src="/assets/img/avatars/{{ 'avatar.jpg' }}" alt=""><span class="c-avatar-status bg-success"></span></div>
                        </td>

                        <td>
                            <div> {{ $user->name }}</div>
                        </td>

                        <td>
                            <a href="/manage/{{ $user->id }}"><div>{{ $user->last_name }} {{ $user->first_name }}</div></a>
                            {{--                            <div class="small text-muted"> Entry Year: {{ $user->ENTRY_YEAR }} </div>--}}
                        </td>
                        {{--                        <td class="text-center"><i class="flag-icon flag-icon-ng c-icon-xl" id="us" title="us"></i></td>--}}

                        {{--                        <td class="text-center">--}}
                        {{--                            <svg class="c-icon c-icon-xl">--}}
                        {{--                                <use xlink:href="/assets/icons/brands/brands-symbol-defs.svg#cc-mastercard"></use>--}}
                        {{--                            </svg>--}}
                        {{--                        </td>--}}
                        <td>
                            <div class="small text-muted">Uploaded</div>
                            <strong>
                                {{ $user->created_at ? \Carbon\Carbon::parse($user->created_at)->diffForHumans() : 'Never' }}
                            </strong>
                        </td>
                        <td class="text-center">
                            <div class="c-avatar"><a class="btn btn-info btn-sm" href="/manage/{{ $user->document_id }}" target="_blank">
                                    <i class="fas fa-search"></i> View
                                </a></div>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>

            <div style="padding-top: 2em">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-lg-end">
                        {{ $users->links() }}
                    </ul>
                </nav>
            </div>

        </x-slot>
    </x-card>
@endsection
