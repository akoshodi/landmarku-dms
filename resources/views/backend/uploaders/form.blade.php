@extends('backend.layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}

                            </div>
                        @endif
<!--                        --><?php //dd($edu); ?>
{{--                            @foreach($edu as $q)--}}
{{--                                {{ $q->edu_level_name }}--}}
{{--                            @endforeach--}}

                        @foreach($data as $user)

                        <div class="row" style="padding-bottom: 1em;">
                            <div class="col-md-2">
                                <img src="assets/img/avatars/{{ $user->avatar }}" height="150px">
                            </div>
                            <div class="col-md-10">
                                <table class="table table-sm table-borderless">

                                    <tbody>
                                    <tr>
                                        <td><b>Employee Name</b></td>
                                        <td>Oshodi Akinwale</td>
                                    </tr>
                                    <tr>
                                        <td><b>Employee ID</b></td>
                                        <td>LU10942</td>
                                    </tr>
                                    <tr>
                                        <td><b>Email</b></td>
                                        <td>oshodi.akinwale@lmu.edu.ng</td>
                                    </tr>
                                    <tr>
                                        <td><b>Phone</b></td>
                                        <td>2348055363556</td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-2">
                                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <a class="nav-link active" id="v-pills-official-tab" data-toggle="pill" href="#v-pills-official" role="tab" aria-controls="v-pills-official" aria-selected="true">Official</a>
                                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Personal</a>
                                    <a class="nav-link" id="v-pills-education-tab" data-toggle="pill" href="#v-pills-education" role="tab" aria-controls="v-pills-education" aria-selected="false">Education</a>
                                    <a class="nav-link" id="v-pills-certification-tab" data-toggle="pill" href="#v-pills-certification" role="tab" aria-controls="v-pills-certification" aria-selected="false">Certifications</a>
                                    <a class="nav-link" id="v-pills-competency-tab" data-toggle="pill" href="#v-pills-competency" role="tab" aria-controls="v-pills-competency" aria-selected="false">Competency</a>
                                    <a class="nav-link" id="v-pills-experience-tab" data-toggle="pill" href="#v-pills-experience" role="tab" aria-controls="v-pills-experience" aria-selected="false">Experience</a>
                                    <a class="nav-link" id="v-pills-job-tab" data-toggle="pill" href="#v-pills-job" role="tab" aria-controls="v-pills-job" aria-selected="false">Job History</a>
                                    <a class="nav-link" id="v-pills-promotion-tab" data-toggle="pill" href="#v-pills-promotion" role="tab" aria-controls="v-pills-promotion" aria-selected="false">Promotion</a>
                                    <a class="nav-link" id="v-pills-contact-tab" data-toggle="pill" href="#v-pills-contact" role="tab" aria-controls="v-pills-contact" aria-selected="false">Contact</a>
                                    <a class="nav-link" id="v-pills-documents-tab" data-toggle="pill" href="#v-pills-documents" role="tab" aria-controls="v-pills-documents" aria-selected="false">Documents</a>
                                    <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Form</a>
                                </div>
                            </div>

                            <div class="col-10">
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                        <form>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="lastname">Lastname</label>
                                                    <input type="text" class="form-control" id="lastname" placeholder="Lastname" name="lastname">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="firstname">Firstname</label>
                                                    <input type="text" class="form-control" id="firstname" placeholder="Firstname">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="middlename">Middlename</label>
                                                    <input type="text" class="form-control" id="middlename" placeholder="Middlename">
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="gender">Gender</label>
                                                    <input type="text" class="form-control" id="gender" placeholder="Gender" name="lastname">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="mstatus">Marital Status</label>
                                                    <input type="text" class="form-control" id="mstatus" placeholder="Marital Status">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="dob">Date of Birth</label>
                                                    <input type="text" class="form-control" id="dob" placeholder="Date of Birth">
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="gender">Faculty</label>
                                                    <input type="text" class="form-control" id="gender" placeholder="Gender" name="lastname">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="mstatus">department</label>
                                                    <input type="text" class="form-control" id="mstatus" placeholder="Marital Status">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="dob">Reporting Manager</label>
                                                    <input type="text" class="form-control" id="dob" placeholder="Date of Birth">
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputCity">City</label>
                                                    <input type="text" class="form-control" id="inputCity">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputState">State</label>
                                                    <select id="inputState" class="form-control">
                                                        <option selected>Choose...</option>
                                                        <option>...</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label for="inputZip">Zip</label>
                                                    <input type="text" class="form-control" id="inputZip">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                                    <label class="form-check-label" for="gridCheck">
                                                        Check me out
                                                    </label>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Sign in</button>
                                        </form>
                                    </div>

                                    <div class="tab-pane fade show active" id="v-pills-official" role="tabpanel" aria-labelledby="v-pills-official-tab">
                                        <table class="table table-striped table-bordered ">

                                            <tbody>
                                            <tr>
                                                <td class="userd" width="20%">Staff ID</td>
                                                <td width="30%">{{ $user->staffno }}</td>

                                                <td class="userd" width="20%">Prefix</td>
                                                <td width="30%">{{ $user->title }}</td>
                                            </tr>
                                            <tr>
                                                <td class="userd"  width="20%">Lastname</td>
                                                <td width="30%">{{ $user->last_name }}</td>

                                                <td class="userd"  width="20%">Firstname</td>
                                                <td width="30%">{{ $user->first_name }}</td>
                                            </tr>
                                            <tr>
                                                <td class="userd"  width="20%">Middlename</td>
                                                <td width="30%">{{ $user->other_name }}</td>

                                                <td class="userd"  width="20%"></td>
                                                <td width="30%"></td>
                                            </tr>
                                            <tr>
                                                <td class="userd"  width="20%">Role</td>
                                                <td width="30%"> </td>

                                                <td class="userd"  width="20%">Email</td>
                                                <td width="30%">{{ $user->username }}@lmu.edu.ng</td>
                                            </tr>
                                            <tr>
                                                <td class="userd"  width="20%">Faculty</td>
                                                <td width="30%">{{ $user->department }}</td>

                                                <td class="userd"  width="20%">Department</td>
                                                <td width="30%">{{ $user->department }}</td>
                                            </tr>
                                            <tr>
                                                <td class="userd"  width="20%">Job Title</td>
                                                <td width="30%">{{ $user->job_title }}</td>

                                                <td class="userd"  width="20%">Position</td>
                                                <td width="30%">{{ $user->position }}</td>
                                            </tr>
                                            <tr>
                                                <td class="userd"  width="20%">Employment Status</td>
                                                <td width="30%">{{ $user->employment_status }}</td>

                                                <td class="userd"  width="20%">Reporting Manager</td>
                                                <td width="30%">{{ $logged_in_user->manager }}</td>
                                            </tr>
                                            <tr>
                                                <td class="userd"  width="20%">Resumption Date</td>
                                                <td width="30%">{{ $user->hire_date }}</td>

                                                <td class="userd"  width="20%">Exit Date</td>
                                                <td width="30%">{{ $user->exit_date }}</td>
                                            </tr>

                                            <tr>
                                                <td class="userd"  width="20%">Year of Experience</td>
                                                <td width="30%">{{ $logged_in_user->department }}</td>

                                                <td class="userd"  width="20%">Mobile</td>
                                                <td width="30%">{{ $user->phone }}</td>
                                            </tr>
                                            </tbody>

                                        </table>
                                    </div>

                                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                        <table class="table table-striped table-bordered ">

                                            <tbody>
                                            <tr>
                                                <td class="userd"  width="20%">Gender</td>
                                                <td width="30%">{{ $user->gender }}</td>

                                                <td class="userd"  width="20%">Marital Status</td>
                                                <td width="30%">{{ $user->marital_status }}</td>
                                            </tr>
                                            <tr>
                                                <td class="userd"  width="20%">Date of Birth</td>
                                                <td width="30%">{{ $user->dob }}</td>

                                                <td class="userd"  width="20%">Blood Group</td>
                                                <td width="30%">{{ $logged_in_user->faculty }}</td>
                                            </tr>


                                            </tbody>

                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-education" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                        <table class="table table-striped table-bordered ">

                                            <tbody>
                                            <tr>
                                                <td class="userd" width="20%">Staff ID</td>
                                                <td width="30%">{{ $logged_in_user->staffid }}</td>

                                                <td class="userd" width="20%">Prefix</td>
                                                <td width="30%">{{ $logged_in_user->last_name }}</td>
                                            </tr>
                                            <tr>
                                                <td class="userd"  width="20%">Firstname</td>
                                                <td width="30%">{{ $logged_in_user->first_name }}</td>

                                                <td class="userd"  width="20%">Middlename</td>
                                                <td width="30%">{{ $logged_in_user->middle_name }}</td>
                                            </tr>
                                            <tr>
                                                <td class="userd"  width="20%">Gender</td>
                                                <td width="30%">{{ $user->gender }}</td>

                                                <td class="userd"  width="20%">Marital Status</td>
                                                <td width="30%">{{ $logged_in_user->maritalstatus }}</td>
                                            </tr>
                                            <tr>
                                                <td class="userd"  width="20%">Date of Birth</td>
                                                <td width="30%">{{ $logged_in_user->dob }}</td>

                                                <td class="userd"  width="20%">Faculty</td>
                                                <td width="30%">{{ $logged_in_user->faculty }}</td>
                                            </tr>
                                            <tr>
                                                <td class="userd"  width="20%">Department</td>
                                                <td width="30%">{{ $logged_in_user->department }}</td>

                                                <td class="userd"  width="20%">Reporting Manager</td>
                                                <td width="30%">{{ $logged_in_user->manager }}</td>
                                            </tr>
                                            <tr>
                                                <td class="userd"  width="20%">Job Title</td>
                                                <td width="30%">{{ $logged_in_user->department }}</td>

                                                <td class="userd"  width="20%">Employment Status</td>
                                                <td width="30%">{{ $logged_in_user->manager }}</td>
                                            </tr>
                                            <tr>
                                                <td class="userd"  width="20%">Resumption Date</td>
                                                <td width="30%">{{ $logged_in_user->date_of_joining }}</td>

                                                <td class="userd"  width="20%">Exit Date</td>
                                                <td width="30%">{{ $logged_in_user->manager }}</td>
                                            </tr>
                                            <tr>
                                                <td class="userd"  width="20%">Year of Experience</td>
                                                <td width="30%">{{ $logged_in_user->department }}</td>

                                                <td class="userd"  width="20%">Mobile</td>
                                                <td width="30%">{{ $logged_in_user->phone }}</td>
                                            </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-certification" role="tabpanel" aria-labelledby="v-pills-certification-tab">
                                        <p>cert</p>
                                    </div>

                                    <div class="tab-pane fade" id="v-pills-competency" role="tabpanel" aria-labelledby="v-pills-competency-tab">
                                        <p>competency</p>
                                    </div>

                                    <div class="tab-pane fade" id="v-pills-experience" role="tabpanel" aria-labelledby="v-pills-experience-tab">
                                        <p>experience</p>
                                    </div>

                                    <div class="tab-pane fade" id="v-pills-job" role="tabpanel" aria-labelledby="v-pills-job-tab">
                                        <p>Job History</p>
                                    </div>

                                    <div class="tab-pane fade" id="v-pills-promotion" role="tabpanel" aria-labelledby="v-pills-promotion-tab">
                                        <p>Promotion Record</p>
                                    </div>

                                    <div class="tab-pane fade" id="v-pills-contact" role="tabpanel" aria-labelledby="v-pills-contact-tab">
                                        <h5>PERMANENT ADDRESS</h5>
                                        <table class="table table-striped table-bordered ">
                                            <tbody>
                                            <tr>
                                                <td class="userd" width="20%">Street Address</td>
                                                <td width="30%">{{ $logged_in_user->staffid }}</td>

                                                <td class="userd" width="20%">Country</td>
                                                <td width="30%">{{ $logged_in_user->last_name }}</td>
                                            </tr>
                                            <tr>
                                                <td class="userd" width="20%">State</td>
                                                <td width="30%">{{ $logged_in_user->staffid }}</td>

                                                <td class="userd" width="20%">City</td>
                                                <td width="30%">{{ $logged_in_user->last_name }}</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <h5>CURRENT ADDRESS</h5>
                                        <table class="table table-striped table-bordered ">
                                            <tbody>
                                            <tr>
                                                <td class="userd" width="20%">Street Address</td>
                                                <td width="30%">{{ $logged_in_user->staffid }}</td>

                                                <td class="userd" width="20%">Country</td>
                                                <td width="30%">{{ $logged_in_user->last_name }}</td>
                                            </tr>
                                            <tr>
                                                <td class="userd" width="20%">State</td>
                                                <td width="30%">{{ $logged_in_user->staffid }}</td>

                                                <td class="userd" width="20%">City</td>
                                                <td width="30%">{{ $logged_in_user->last_name }}</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <h5>EMERGENCY DETAILS</h5>
                                        <table class="table table-striped table-bordered ">
                                            <tbody>
                                            <tr>
                                                <td class="userd" width="20%">Name</td>
                                                <td width="30%">{{ $logged_in_user->staffid }}</td>

                                                <td class="userd" width="20%">Email</td>
                                                <td width="30%">{{ $logged_in_user->last_name }}</td>
                                            </tr>
                                            <tr>
                                                <td class="userd" width="20%">Phone</td>
                                                <td width="30%">{{ $logged_in_user->staffid }}</td>

                                                <td class="userd" width="20%">Alternate Phone</td>
                                                <td width="30%">{{ $logged_in_user->last_name }}</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="tab-pane fade" id="v-pills-documents" role="tabpanel" aria-labelledby="v-pills-documents-tab">
                                        <p>Documents</p>
                                    </div>
                                </div>
                            </div>


                        </div>

                            @endforeach


                    </div>
                </div>
            </div>
        </div>




    </div>
@endsection

@section('javascript')

@endsection
