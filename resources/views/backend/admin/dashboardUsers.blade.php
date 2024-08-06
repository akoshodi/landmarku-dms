@extends('backend.layouts.coreapp')

@section('title', __('Dashboard'))

@section('content')
    <div class="body flex-grow-1">
        <div class="container-lg px-4">
{{--            <x-card>--}}
{{--                <x-slot name="header">--}}
{{--                    Welcome {{ ucfirst(strtolower($logged_in_user->first_name)) }}--}}
{{--                </x-slot>--}}

{{--                <x-slot name="body">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-3">--}}
{{--                            <div class="border-start border-start-4 border-start-info px-3 mb-3">--}}
{{--                                <small class="text-medium-emphasis">Total Uploads</small>--}}
{{--                                <div class="fs-5 fw-semibold">{{ $uploads->total }}</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="col-3">--}}
{{--                                <div class="border-start border-start-4 border-start-success px-3 mb-3">--}}
{{--                                    <small class="text-medium-emphasis">Total Uploads Today</small>--}}
{{--                                    <div class="fs-5 fw-semibold">{{ $uploads_today->total }}</div>--}}
{{--                                </div>--}}
{{--                        </div>--}}

{{--                        <div class="col-3">--}}
{{--                            <div class="border-start border-start-4 border-start-warning px-3 mb-3">--}}
{{--                                <small class="text-medium-emphasis">Current Students</small>--}}
{{--                                <div class="fs-5 fw-semibold">{{ $students->active }}</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="col-3">--}}
{{--                            <div class="border-start border-start-4 border-start-danger px-3 mb-3">--}}
{{--                                <small class="text-medium-emphasis">In Active Students</small>--}}
{{--                                <div class="fs-5 fw-semibold">{{ $students->in_active }}</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--        --}}{{--            <hr class="mt-0">--}}
{{--                    <div class="table-responsive">--}}
{{--                        <table class="table border table-hover mb-0">--}}
{{--                            <thead class="table-light fw-semibold">--}}
{{--                            <tr class="align-middle">--}}
{{--                                <th class="text-center">--}}
{{--                                    <svg class="icon">--}}
{{--                                        <use xlink:href="{{ asset('node_modules/@coreui/icons/sprites/free.svg#cil-people') }}"></use>--}}
{{--                                    </svg>--}}
{{--                                </th>--}}
{{--                                <th>Document</th>--}}
{{--                                <th>Uploaded By</th>--}}


{{--                                --}}{{--                    <th class="text-center">Payment Method</th>--}}
{{--                                <th>Activity</th>--}}
{{--                                <th class="text-center">Action</th>--}}
{{--                            </tr>--}}
{{--                            </thead>--}}
{{--                            <tbody>--}}
{{--                            @foreach ($users as $user)--}}
{{--                                <tr>--}}
{{--                                    <td class="text-center">--}}
{{--                                        <div class="avatar avatar-md">--}}
{{--                                            <img class="avatar-img" src="//assets/img/avatars/{{ 'avatar.jpg' }}" alt="">--}}
{{--                                            <span class="avatar-status bg-success"></span>--}}
{{--                                        </div>--}}
{{--                                    </td>--}}

{{--                                    <td>--}}
{{--                                        <div>--}}
{{--                                            {{ $user->session ? $user->session : '' }}--}}
{{--                                            {{ $user->semester ? $user->semester : '' }}--}}
{{--                                            {{ $user->name }}--}}
{{--                                        </div>--}}
{{--                                    </td>--}}

{{--                                    <td>--}}
{{--                                        <a href="manage/{{ $user->id }}">--}}
{{--                                            <div>--}}
{{--                                                {{ ucfirst($user->last_name) }} {{ ucfirst($user->first_name) }}--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </td>--}}

{{--                                    <td>--}}
{{--                                        <div class="small text-muted">Uploaded</div>--}}
{{--                                        <strong>--}}
{{--                                            {{ $user->created_at ? \Carbon\Carbon::parse($user->created_at)->diffForHumans() : 'Never' }}--}}
{{--                                        </strong>--}}
{{--                                    </td>--}}
{{--                                    <td class="text-center">--}}
{{--                                        <div class="avatar"><a class="btn btn-primary btn-sm" href="/documents/{{ $user->uuid }}" target="_blank">--}}
{{--                                                <i class="fas cil-search"></i>--}}
{{--                                            </a></div>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}
{{--                            @endforeach--}}

{{--                            </tbody>--}}
{{--                        </table>--}}
{{--                    </div>--}}



{{--                    <div style="padding-top: 2em">--}}
{{--                        <nav aria-label="Page navigation example">--}}
{{--                            <ul class="pagination justify-content-end">--}}
{{--                                {!! $users->links() !!}--}}
{{--                            </ul>--}}
{{--                        </nav>--}}
{{--                    </div>--}}

{{--                </x-slot>--}}
{{--            </x-card>--}}


            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-header">Welcome {{ ucfirst(strtolower($logged_in_user->first_name)) }}</div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="border-start border-start-4 border-start-info px-3 mb-3">
                                                <div class="small text-body-secondary text-truncate">Total Uploads</div>
                                                <div class="fs-5 fw-semibold">{{ $uploads->total }}</div>
                                            </div>
                                        </div>
                                        <!-- /.col-->
                                        <div class="col-6">
                                            <div class="border-start border-start-4 border-start-danger px-3 mb-3">
                                                <div class="small text-body-secondary text-truncate">Total Uploads Today</div>
                                                <div class="fs-5 fw-semibold">{{ $uploads_today->total }}</div>
                                            </div>
                                        </div>
                                        <!-- /.col-->
                                    </div>
                                    <!-- /.row-->
                                    <hr class="mt-0">
                                </div>
                                <!-- /.col-->
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="border-start border-start-4 border-start-warning px-3 mb-3">
                                                <div class="small text-body-secondary text-truncate">Current Students</div>
                                                <div class="fs-5 fw-semibold">{{ $students->active }}</div>
                                            </div>
                                        </div>
                                        <!-- /.col-->
                                        <div class="col-6">
                                            <div class="border-start border-start-4 border-start-success px-3 mb-3">
                                                <div class="small text-body-secondary text-truncate">In Active Students</div>
                                                <div class="fs-5 fw-semibold">{{ $students->in_active }}</div>
                                            </div>
                                        </div>
                                        <!-- /.col-->
                                    </div>
                                    <!-- /.row-->
                                    <hr class="mt-0">

                                </div>
                                <!-- /.col-->
                            </div>
                            <!-- /.row--><br>
                            <div class="table-responsive">
                                <table class="table border mb-0">
                                    <thead class="fw-semibold text-nowrap">
                                    <tr class="align-middle">
                                        <th class="bg-body-secondary text-center">
                                            <svg class="icon">
                                                <use xlink:href="/assets/vendors/@coreui/icons/svg/free.svg#cil-people"></use>
                                            </svg>
                                        </th>
                                        <th class="bg-body-secondary">User</th>
                                        <th class="bg-body-secondary text-center">Country</th>
                                        <th class="bg-body-secondary">Usage</th>
                                        <th class="bg-body-secondary text-center">Payment Method</th>
                                        <th class="bg-body-secondary">Activity</th>
                                        <th class="bg-body-secondary"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
{{--                                    {{ dd($users) }}--}}
                                    @foreach ($users as $user)
                                    <tr class="align-middle">
                                        <td class="text-center">
                                            <div class="avatar avatar-md"><img class="avatar-img" src="/assets/img/passports/{{ $user->avatar }}" alt="user@email.com"><span class="avatar-status bg-success"></span></div>
                                        </td>
                                        <td>
                                            <div class="text-nowrap">{{ ucfirst($user->last_name) }} {{ ucfirst($user->first_name) }}</div>
                                            <div class="small text-body-secondary text-nowrap"><span>New</span> | Registered: Jan 1, 2023</div>
                                        </td>
                                        <td class="text-center">
                                            <svg class="icon icon-xl">
                                                <use xlink:href="/assets/vendors/@coreui/icons/svg/flag.svg#cif-us"></use>
                                            </svg>
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-between align-items-baseline">
                                                <div class="fw-semibold">50%</div>
                                                <div class="text-nowrap small text-body-secondary ms-3">Jun 11, 2023 - Jul 10, 2023</div>
                                            </div>
                                            <div class="progress progress-thin">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <svg class="icon icon-xl">
                                                <use xlink:href="/assets/vendors/@coreui/icons/svg/brand.svg#cib-cc-mastercard"></use>
                                            </svg>
                                        </td>
                                        <td>
                                            <div class="small text-body-secondary">Last login</div>
                                            <div class="fw-semibold text-nowrap">10 sec ago</div>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-transparent p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <svg class="icon">
                                                        <use xlink:href="/assets/vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Info</a><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item text-danger" href="#">Delete</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    <tr class="align-middle">
                                        <td class="text-center">
                                            <div class="avatar avatar-md"><img class="avatar-img" src="/assets/img/avatars/2.jpg" alt="user@email.com"><span class="avatar-status bg-danger"></span></div>
                                        </td>
                                        <td>
                                            <div class="text-nowrap">Avram Tarasios</div>
                                            <div class="small text-body-secondary text-nowrap"><span>Recurring</span> | Registered: Jan 1, 2023</div>
                                        </td>
                                        <td class="text-center">
                                            <svg class="icon icon-xl">
                                                <use xlink:href="/assets/vendors/@coreui/icons/svg/flag.svg#cif-br"></use>
                                            </svg>
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-between align-items-baseline">
                                                <div class="fw-semibold">10%</div>
                                                <div class="text-nowrap small text-body-secondary ms-3">Jun 11, 2023 - Jul 10, 2023</div>
                                            </div>
                                            <div class="progress progress-thin">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <svg class="icon icon-xl">
                                                <use xlink:href="/assets/vendors/@coreui/icons/svg/brand.svg#cib-cc-visa"></use>
                                            </svg>
                                        </td>
                                        <td>
                                            <div class="small text-body-secondary">Last login</div>
                                            <div class="fw-semibold text-nowrap">5 minutes ago</div>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-transparent p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <svg class="icon">
                                                        <use xlink:href="/assets/vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Info</a><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item text-danger" href="#">Delete</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td class="text-center">
                                            <div class="avatar avatar-md"><img class="avatar-img" src="/assets/img/avatars/3.jpg" alt="user@email.com"><span class="avatar-status bg-warning"></span></div>
                                        </td>
                                        <td>
                                            <div class="text-nowrap">Quintin Ed</div>
                                            <div class="small text-body-secondary text-nowrap"><span>New</span> | Registered: Jan 1, 2023</div>
                                        </td>
                                        <td class="text-center">
                                            <svg class="icon icon-xl">
                                                <use xlink:href="/assets/vendors/@coreui/icons/svg/flag.svg#cif-in"></use>
                                            </svg>
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-between align-items-baseline">
                                                <div class="fw-semibold">74%</div>
                                                <div class="text-nowrap small text-body-secondary ms-3">Jun 11, 2023 - Jul 10, 2023</div>
                                            </div>
                                            <div class="progress progress-thin">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 74%" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <svg class="icon icon-xl">
                                                <use xlink:href="/assets/vendors/@coreui/icons/svg/brand.svg#cib-cc-stripe"></use>
                                            </svg>
                                        </td>
                                        <td>
                                            <div class="small text-body-secondary">Last login</div>
                                            <div class="fw-semibold text-nowrap">1 hour ago</div>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-transparent p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <svg class="icon">
                                                        <use xlink:href="/assets/vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Info</a><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item text-danger" href="#">Delete</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td class="text-center">
                                            <div class="avatar avatar-md"><img class="avatar-img" src="/assets/img/avatars/4.jpg" alt="user@email.com"><span class="avatar-status bg-secondary"></span></div>
                                        </td>
                                        <td>
                                            <div class="text-nowrap">Enéas Kwadwo</div>
                                            <div class="small text-body-secondary text-nowrap"><span>New</span> | Registered: Jan 1, 2023</div>
                                        </td>
                                        <td class="text-center">
                                            <svg class="icon icon-xl">
                                                <use xlink:href="/assets/vendors/@coreui/icons/svg/flag.svg#cif-fr"></use>
                                            </svg>
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-between align-items-baseline">
                                                <div class="fw-semibold">98%</div>
                                                <div class="text-nowrap small text-body-secondary ms-3">Jun 11, 2023 - Jul 10, 2023</div>
                                            </div>
                                            <div class="progress progress-thin">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 98%" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <svg class="icon icon-xl">
                                                <use xlink:href="/assets/vendors/@coreui/icons/svg/brand.svg#cib-cc-paypal"></use>
                                            </svg>
                                        </td>
                                        <td>
                                            <div class="small text-body-secondary">Last login</div>
                                            <div class="fw-semibold text-nowrap">Last month</div>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-transparent p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <svg class="icon">
                                                        <use xlink:href="/assets/vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Info</a><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item text-danger" href="#">Delete</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td class="text-center">
                                            <div class="avatar avatar-md"><img class="avatar-img" src="/assets/img/avatars/5.jpg" alt="user@email.com"><span class="avatar-status bg-success"></span></div>
                                        </td>
                                        <td>
                                            <div class="text-nowrap">Agapetus Tadeáš</div>
                                            <div class="small text-body-secondary text-nowrap"><span>New</span> | Registered: Jan 1, 2023</div>
                                        </td>
                                        <td class="text-center">
                                            <svg class="icon icon-xl">
                                                <use xlink:href="/assets/vendors/@coreui/icons/svg/flag.svg#cif-es"></use>
                                            </svg>
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-between align-items-baseline">
                                                <div class="fw-semibold">22%</div>
                                                <div class="text-nowrap small text-body-secondary ms-3">Jun 11, 2023 - Jul 10, 2023</div>
                                            </div>
                                            <div class="progress progress-thin">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <svg class="icon icon-xl">
                                                <use xlink:href="/assets/vendors/@coreui/icons/svg/brand.svg#cib-cc-apple-pay"></use>
                                            </svg>
                                        </td>
                                        <td>
                                            <div class="small text-body-secondary">Last login</div>
                                            <div class="fw-semibold text-nowrap">Last week</div>
                                        </td>
                                        <td>
                                            <div class="dropdown dropup">
                                                <button class="btn btn-transparent p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <svg class="icon">
                                                        <use xlink:href="/assets/vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Info</a><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item text-danger" href="#">Delete</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td class="text-center">
                                            <div class="avatar avatar-md"><img class="avatar-img" src="/assets/img/avatars/6.jpg" alt="user@email.com"><span class="avatar-status bg-danger"></span></div>
                                        </td>
                                        <td>
                                            <div class="text-nowrap">Friderik Dávid</div>
                                            <div class="small text-body-secondary text-nowrap"><span>New</span> | Registered: Jan 1, 2023</div>
                                        </td>
                                        <td class="text-center">
                                            <svg class="icon icon-xl">
                                                <use xlink:href="/assets/vendors/@coreui/icons/svg/flag.svg#cif-pl"></use>
                                            </svg>
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-between align-items-baseline">
                                                <div class="fw-semibold">43%</div>
                                                <div class="text-nowrap small text-body-secondary ms-3">Jun 11, 2023 - Jul 10, 2023</div>
                                            </div>
                                            <div class="progress progress-thin">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <svg class="icon icon-xl">
                                                <use xlink:href="/assets/vendors/@coreui/icons/svg/brand.svg#cib-cc-amex"></use>
                                            </svg>
                                        </td>
                                        <td>
                                            <div class="small text-body-secondary">Last login</div>
                                            <div class="fw-semibold text-nowrap">Yesterday</div>
                                        </td>
                                        <td>
                                            <div class="dropdown dropup">
                                                <button class="btn btn-transparent p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <svg class="icon">
                                                        <use xlink:href="/assets/vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Info</a><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item text-danger" href="#">Delete</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div style="padding-top: 2em">
{{--                                <nav aria-label="Page navigation example">--}}
{{--                                    <ul class="pagination justify-content-end">--}}
{{--                                        {!! $users->links() !!}--}}
{{--                                    </ul>--}}
{{--                                </nav>--}}

                                <nav aria-label="...">
                                    <ul class="pagination justify-content-end">

                                        {!! $users->links() !!}

                                    </ul>
                                </nav>
                            </div>





                        </div>
                    </div>
                </div>
                <!-- /.col-->
            </div>





        </div>
    </div>


@endsection
