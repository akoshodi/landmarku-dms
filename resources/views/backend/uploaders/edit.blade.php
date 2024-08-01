@extends('backend.layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">


                <div class="card">
                    <div class="card-header">
                        <strong>Edit User</strong>
                        {{-- <small>Form</small> --}}
                    </div>

                    <div class="card-body">
                        <form method="POST" action="/user/{{ $user->id }}/biodata" >
                            {{ method_field('PATCH') }}

                            {{ csrf_field() }}


                            <div class="row">
                                <div class="form-group col-sm-4">
                                    <label for="lastname">Lastname</label>
                                    <input class="form-control" id="last_name" name="last_name" type="text" value="{{ $user->last_name }}">
                                </div>

                                <div class="form-group col-sm-4">
                                    <label for="firstname">Firstname</label>
                                    <input class="form-control" id="first_name" name="first_name" type="text" value="{{ $user->first_name }}">
                                </div>

                                <div class="form-group col-sm-4">
                                    <label for="middlename">Middlename</label>
                                    <input class="form-control" id="other_name" name="other_name" type="text" value="{{ $user->other_name }}"">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label for="gender">Gender</label>
                                    <input class="form-control" id="gender" type="text" name="gender" value="{{ $user->gender->name }}">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="marital_status">Marital Status</label>
                                    <input class="form-control" id="marital_status" type="text" name="marital_status" value="{{ $user->marital_status }}">
                                </div>
                            </div>

                            {{--<div class="row">--}}
                            {{--<div class="form-group col-sm-6">--}}
                            {{--<label for="nationality">Nationality</label>--}}
                            {{--<input class="form-control" id="nationality" type="text" name="nationality" value="{{ $user->nationality }}">--}}
                            {{--</div>--}}
                            {{--<div class="form-group col-sm-6">--}}
                            {{--<label for="state">State of Origin</label>--}}
                            {{--<input class="form-control" id="state" type="text" name="state" value="{{ $user->state }}">--}}
                            {{--</div>--}}
                            {{--</div>--}}

                            <div class="form-group">
                                <label for="dob">Date of Birth</label>
                                <input class="form-control" id="dob" type="text" name="dob" value="{{ $user->dob }}">
                            </div>

                            <div class="form-group">
                                <label for="home_address">Permanent Home Address</label>
                                {{--<textarea class="form-control" type="text" id="home_address" name="home_address" value="{{ $user->home_address }}"></textarea>--}}
                                <input class="form-control" id="home_address" name="home_address" value="{{ $user->home_address }}">
                            </div>

                            {{--<div class="form-group">--}}
                            {{--<label for="street">Street</label>--}}
                            {{--<input class="form-control" id="street" type="text" placeholder="Enter street name">--}}
                            {{--</div>--}}

                            {{--<div class="row">--}}
                            {{--<div class="form-group col-sm-8">--}}
                            {{--<label for="city">City</label>--}}
                            {{--<input class="form-control" id="city" type="text" placeholder="Enter your city">--}}
                            {{--</div>--}}
                            {{--<div class="form-group col-sm-4">--}}
                            {{--<label for="postal-code">Postal Code</label>--}}
                            {{--<input class="form-control" id="postal-code" type="text" placeholder="Postal Code">--}}
                            {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group">--}}
                            {{--<label for="country">Country</label>--}}
                            {{--<input class="form-control" id="country" type="text" placeholder="Country name">--}}
                            {{--</div>--}}

                            <div class="row">
                                <div class="form-group col-sm-8">
                                    <label for="email">Email</label>
                                    <input class="form-control" id="email" type="text" name="email" value="{{ $user->email }}">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="phone">Phone</label>
                                    <input class="form-control" id="phone" type="text" name="phone" value="{{ $user->phone }}">
                                </div>
                            </div>



                            <div class="card-footer">
                                <button class="btn btn btn-primary" type="submit">

                                    <i class="fa fa-dot-circle-o"></i> Submit</button>
                                <a class="btn btn btn-danger" href="{{ route('admin.dashboard') }}"><i class="fa fa-ban"></i> Cancel</a>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
