@extends('backend.layouts.app')

@section('css')
    <link href="{{ asset('css/token-input.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
    {{-- <link href="{{ asset('css/token-input-facebook.css') }}" rel="stylesheet"> --}}

    <link href="{{ asset('css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-datepicker.standalone.min.css') }}" rel="stylesheet">


@endsection
@section('title', __('Profile'))
<?php //dd($logged_in_user); ?>
@section('content')
    <x-card>
        <x-slot name="header">
            header
        </x-slot>

        <x-slot name="body">
            <div class="p-avatar">
                <img src="/assets/img/avatars/{{ $logged_in_user->avatar ?? '' }}" alt="">
            </div>
            <div class="row">
                <div class="p-title">
                    <h1>{{ $logged_in_user->last_name . ' ' . $logged_in_user->first_name}}</h1>
                </div>
            </div>
            <div class="row">
                <div class="p-jobtitle">
                    <h5><i>Senior Software Engineer</i></h5>
                </div>
            </div>
{{--            <span class="intro-email">--}}
{{--              or--}}
{{--              <a href="#" title="Copy email address" id="copy-email">hi@kuldar.com</a>--}}
{{--            </span>--}}
            <div class="row">
                <div class="col-sm-6">
                    <table table class="table table-sm table-borderless">
                        <tbody>
                        <tr>
                            <td><b>Intercom</b></td>
                            <td>4046</td>
                        </tr>
                        <tr>
                            <td><b>Work Phone</b></td>
                            <td>080987654321</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-6">
                    <table class="table table-sm table-borderless">
                        <tbody>
                        <tr>
                            <td><b>Work Email</b></td>
                            <td><a href="mailto:oshodi.akinwale@lmu.edu.ng">oshodi.akinwale@lmu.edu.ng</a></td>
                        </tr>
                        <tr>
                            <td><b>Work Location</b></td>
                            <td>First College Building</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Resume</a>
                    <a class="nav-item nav-link" id="nav-work-tab" data-toggle="tab" href="#nav-work" role="tab" aria-controls="nav-work" aria-selected="false">Work Information</a>
                    <a class="nav-item nav-link" id="nav-private-tab" data-toggle="tab" href="#nav-private" role="tab" aria-controls="nav-private" aria-selected="false">Private Information</a>
                </div>
            </nav>

            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="container  p-table-group">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Experience</h4>
                                <ul class="timeline">
                                    <li>
                                        <small>10/01/2016 - Current</small>
                                        <h5>Landmark University</h5>
                                        <p>Job position: Senior Software Engineer</p>
                                    </li>
                                    <li>
                                        <small>01/12/2012 - 31/02/2016</small>
                                        <h5>Ondo State University of Science and Technology</h5>
                                        <p>Job position: System Programmer</p>
                                    </li>
                                    <li>
                                        <small>10/01/2011 - 21/11/2012</small>
                                        <h5>Macawmedia Ltd</h5>
                                        <p>Job position: Web Developer</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h4>Skills</h4>
                                <table class="table  table-borderless">
                                    <tbody>
                                    <tr>
                                        <td style="text-align: bottom">Laravel</td>
                                        <td>
                                            <div class="clearfix">
                                                <div class="float-left"><strong>90%</strong></div>
                                                <div class="float-right"><small class="text-muted">Proficient</small></div>
                                            </div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span>Laravel</span></td>
                                        <td>
                                            <div class="clearfix">
                                                <div class="float-left"><strong>90%</strong></div>
                                                <div class="float-right"><small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small></div>
                                            </div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="container mt-5 mb-5">
                        <div class="row">
                            <div class="col-sm-6 p-subheader">
                                <h4>Location</h4>
                                <table table class="table table-sm table-borderless">
                                    <tbody>
                                    <tr>
                                        <td><b>Department</b></td>
                                        <td>Centre for Systems and Information Services(CSIS)</td>
                                    </tr>
                                    <tr>
                                        <td><b>Work Phone</b></td>
                                        <td>080987654321</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class=""><h4>Work Phone</h4></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="nav-work" role="tabpanel" aria-labelledby="nav-work-tab">
                    <div class="container mt-5 mb-5">
                        <div class="row">
                            <div class="col-sm-6">
                                <h4>Location</h4>
                                <table table class="table table-sm table-borderless">
                                    <tbody>
                                    <tr>
                                        <td><b>Department</b></td>
                                        <td>Centre for Systems and Information Services(CSIS)</td>
                                    </tr>
                                    <tr>
                                        <td><b>Work Address</b></td>
                                        <td>Landmark University, Omu-Aran.</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-sm-6">
                                <table table class="table table-sm table-borderless">
                                    <tbody>
                                    <tr>
                                        <td><b>Intercom</b></td>
                                        <td>4046</td>
                                    </tr>
                                    <tr>
                                        <td><b>Work Phone</b></td>
                                        <td>080987654321</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-private" role="tabpanel" aria-labelledby="nav-private-tab">
                    <div class="container mt-5 mb-5">
                        <div class="row">
                            <div class="col-sm-6 p-subheader">
                                <h4>Contact Information</h4>
                                <table table class="table table-sm table-borderless">
                                    <tbody>
                                    <tr>
                                        <td><b>Address</b></td>
                                        <td>Block 6 Flat 5 <br/>
                                            Landmark University Quarters<br/>
                                            Omu-Aran, Kwara State.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Email</b></td>
                                        <td><a href="mailto:oshodi.akinwale@lmu.edu.ng">akoshodi@gmail.com</a></td>
                                    </tr>
                                    <tr>
                                        <td><b>Phone</b></td>
                                        <td>080987654321</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><h4>Matrital Status</h4></td>
                                    </tr>
                                    <tr>
                                        <td><b>Matrital Status</b></td>
                                        <td>Married</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><h4>Dependant</h4></td>
                                    </tr>
                                    <tr>
                                        <td class="p-table-label"><b>No of Children</b></td>
                                        <td>1</td>
                                    </tr>
                                    </tbody>
                                </table>

                            </div>

                            <div class="col-sm-6 p-subheader">

                                <table table class="table table-sm table-borderless">
                                    <tbody>
                                    <tr>
                                        <td colspan="2"><h4>Other Information</h4></td>
                                    </tr>
                                    <tr>
                                        <td><b>Citizenship</b></td>
                                        <td>Nigerian</td>
                                    </tr>
                                    <tr>
                                        <td><b>Gender</b></td>
                                        <td>Male</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><h4>Education</h4></td>
                                    </tr>
                                    <tr>
                                        <td><b>Education Level</b></td>
                                        <td>M.Sc</td>
                                    </tr>
                                    <tr>
                                        <td><b>Field of Study</b></td>
                                        <td>Engineering</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><h4>Emergency</h4></td>
                                    </tr>
                                    <tr>
                                        <td><b>Emergency Contact</b></td>
                                        <td>Mrs. O</td>
                                    </tr>
                                    <tr>
                                        <td><b>Emergency Phone</b></td>
                                        <td>+23480000000</td>
                                    </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>


        </x-slot>
    </x-card>
@endsection

@section('javascript')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
    <script>
        $('.datepicker').datepicker();
    </script>
    <script src="https://raw.githubusercontent.com/kuldar/kuldar-2020/master/js/site.js"></script>


@endsection
