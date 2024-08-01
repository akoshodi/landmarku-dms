@extends('backend.layouts.app2')

@section('title', __('Dashboard'))

@section('content')
    <x-card>
        <x-slot name="header">
            Welcome {{ ucfirst(strtolower($logged_in_user->first_name)) }}
        </x-slot>

        <x-slot name="body">
            <div class="row">
                <div class="col-3">
                    <div class="border-start border-start-4 border-start-info px-3 mb-3">
                        <small class="text-medium-emphasis">Total Uploads</small>
                        <div class="fs-5 fw-semibold">{{ $uploads->total }}</div>
                    </div>
                </div>

                <div class="col-3">
                        <div class="border-start border-start-4 border-start-success px-3 mb-3">
                            <small class="text-medium-emphasis">Total Uploads Today</small>
                            <div class="fs-5 fw-semibold">{{ $uploads_today->total }}</div>
                        </div>
                </div>

                <div class="col-3">
                    <div class="border-start border-start-4 border-start-warning px-3 mb-3">
                        <small class="text-medium-emphasis">Current Students</small>
                        <div class="fs-5 fw-semibold">{{ $students->active }}</div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="border-start border-start-4 border-start-danger px-3 mb-3">
                        <small class="text-medium-emphasis">In Active Students</small>
                        <div class="fs-5 fw-semibold">{{ $students->in_active }}</div>
                    </div>
                </div>

            </div>
{{--            <hr class="mt-0">--}}
            <div class="table-responsive">
                <table class="table border table-hover mb-0">
                    <thead class="table-light fw-semibold">
                    <tr class="align-middle">
                        <th class="text-center">
                            <svg class="icon">
                                <use xlink:href="{{ asset('node_modules/@coreui/icons/sprites/free.svg#cil-people') }}"></use>
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
                                <div class="avatar avatar-md">
                                    <img class="avatar-img" src="/assets/img/avatars/{{ 'avatar.jpg' }}" alt="">
                                    <span class="avatar-status bg-success"></span>
                                </div>
                            </td>

                            <td>
                                <div>
                                    {{ $user->session ? $user->session : '' }}
                                    {{ $user->semester ? $user->semester : '' }}
                                    {{ $user->name }}
                                </div>
                            </td>

                            <td>
                                <a href="manage/{{ $user->id }}">
                                    <div>
                                        {{ ucfirst($user->last_name) }} {{ ucfirst($user->first_name) }}
                                    </div>
                                </a>
                            </td>

                            <td>
                                <div class="small text-muted">Uploaded</div>
                                <strong>
                                    {{ $user->created_at ? \Carbon\Carbon::parse($user->created_at)->diffForHumans() : 'Never' }}
                                </strong>
                            </td>
                            <td class="text-center">
                                <div class="avatar"><a class="btn btn-primary btn-sm" href="/documents/{{ $user->uuid }}" target="_blank">
                                        <i class="fas cil-search"></i>
                                    </a></div>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>



            <div style="padding-top: 2em">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-end">
                        {!! $users->links() !!}
                    </ul>
                </nav>
            </div>

        </x-slot>
    </x-card>


@endsection
