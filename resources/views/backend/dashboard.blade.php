@extends('backend.layouts.app')

@section('title', __('Dashboard'))

@section('content')
    <x-card>
        <x-slot name="header">
            Welcome {{ ucfirst(strtolower($logged_in_user->first_name)) }}
        </x-slot>

        <x-slot name="body">
            <div class="row">
                <div class="col-3">
                    <div class="c-callout c-callout-info"><small class="text-muted">Total Uploads</small>
                        <div class="text-value-lg"> {{ $uploads->total }} </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="c-callout c-callout-success"><small class="text-muted">Total Uploads Today</small>
                        <div class="text-value-lg">{{ $uploads_today->total }}</div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="c-callout c-callout-warning"><small class="text-muted">Current Students</small>
                        <div class="text-value-lg">{{ $students->active }}</div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="c-callout c-callout-danger"><small class="text-muted">In Active Students</small>
                        <div class="text-value-lg">{{ $students->in_active }}</div>
                    </div>
                </div>

            </div>
            <hr class="mt-0">
            <table class="table table-responsive-sm table-hover table-outline mb-0">
                <thead class="thead-light">
                <tr class="align-middle">
                    <th class="text-center">
                        <svg class="c-icon">
                            <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-people"></use>
                        </svg>
                    </th>
                    <th>Document</th>
                    <th>Uploaded By</th>
                    <th class="text-center">Verified</th>
                    <th>Activity</th>
                    <th class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)

                    <tr class="align-middle">
                        <td class="text-center">
                            <div class="c-avatar"><img class="c-avatar-img" src="/assets/img/avatars/{{ 'avatar.jpg' }}" alt=""><span class="c-avatar-status bg-success"></span></div>
                        </td>

                        <td>
                            <div>
                                {{ $user->session ? $user->session : '' }}
                                {{ $user->semester ? $user->semester : '' }}
                                {{ $user->name }}</div>
                        </td>

                        <td>
                            <a href="/admin/manage/{{ $user->id }}"><div>{{ $user->last_name }} {{ $user->first_name }}</div></a>
{{--                            <div class="small text-muted"> Entry Year: {{ $user->ENTRY_YEAR }} </div>--}}
                        </td>
                        @if($user->verified)
                            <td class="text-center"><i class="cil-check-circle success"></i></span></td>
                        @else
                            <td class="text-center danger"><i class="cil-x-circle"></i></span></td>
                        @endif
                        <td>
                            <div class="small text-muted">Uploaded</div>
                            <strong>
                                {{ $user->created_at ? \Carbon\Carbon::parse($user->created_at)->diffForHumans() : 'Never' }}
                            </strong>
                        </td>
                        <td class="text-center">
                            <div class="c-avatar">
                                <a class="btn btn-info btn-sm" href="/documents/{{ $user->uuid }}" target="_blank">
                                    <i class="fas fa-search"></i>
                                </a>
                            </div>
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
