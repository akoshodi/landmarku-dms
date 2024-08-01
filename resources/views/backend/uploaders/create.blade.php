@extends('backend.layouts.app')

@section('css')
    <link href="{{ asset('css/token-input.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
    {{-- <link href="{{ asset('css/token-input-facebook.css') }}" rel="stylesheet"> --}}


@endsection


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">
                        <strong>Create User</strong>
                        {{-- <small>Form</small> --}}
                    </div>

                    <div class="card-body">
                        <form method="POST" action="/user/" >
                            {{ method_field('PATCH') }}

                            {{ csrf_field() }}

                            <div class="row">
                                <div class="form-group col-sm-4">
                                    <label for="lastname">Lastname</label>
                                    <input class="form-control" id="last_name" name="last_name" type="text" value="">
                                </div>

                                <div class="form-group col-sm-4">
                                    <label for="firstname">Firstname</label>
                                    <input class="form-control" id="first_name" name="first_name" type="text" value="">
                                </div>

                                <div class="form-group col-sm-4">
                                    <label for="middlename">Middlename</label>
                                    <input class="form-control" id="other_name" name="other_name" type="text" value="">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label for="marital_status">Username</label>
                                    <input class="form-control" id="username" type="text" name="username" value="">
                                </div>

                                <div class="form-group col-sm-6">
                                    <label for="gender">Gender</label>
                                    <select class="form-control" id="gender_id" name="gender_id">

                                        @foreach ($gender as $key => $value)
                                            <option value="{{ $key }}" {{ ( $key == $selectedID) ? 'selected' : '' }}>
                                                {{ $value }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>

                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label for="email">Personal Email</label>
                                    <input class="form-control" id="email" type="text" name="email" value="">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="phone">Phone</label>
                                    <input class="form-control" id="phone" type="text" name="phone" value="" placeholder="2348012345678">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-sm-4">
                                    <label for="nationality">Nationality</label>
                                    <input class="form-control" id="nationality" type="text" name="nationality" value="">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="state">State of Origin</label>
                                    <input class="form-control" id="state" type="text" name="state" value="">
                                </div>

                                <div class="form-group col-sm-4">
                                    <label for="dob">Date of Birth</label>
                                    <input class="form-control" id="dob" type="text" name="dob" value="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="dob">Date of Birth</label>
                                <input class="form-control" id="dob" type="text" name="dob" value="">
                            </div>

                            <div class="form-group">
                                <label for="home_address">Institutions</label>
                                <input class="typeahead form-control" id="home_address" name="home_address" placeholder="Search for Institution" >
                            </div>

                            <div class="form-group">
                                <label for="home_address">House Address</label>
                                <input class="form-control" id="home_address" name="home_address" type="text" placeholder="Enter House Address">
                            </div>

                            <div class="row">
                                <div class="form-group col-sm-4">
                                    <label for="city">City</label>
                                    <input class="form-control" id="city" name="city" type="text" placeholder="Enter your city">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="state">State</label>
                                    <input class="form-control" id="state" name="state" type="text" placeholder="Enter your state">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="country">Country</label>
                                    <input class="form-control" id="country" type="text" placeholder="Country name">
                                </div>

                            </div>

                            <div class="form-group">
                                <label for="postal-code">Postal Code</label>
                                <input class="form-control" id="postal-code" type="text" placeholder="Postal Code">
                            </div>

                            <div class="form-group">
                                <label for="country">Country</label>
                                <input class="form-control" id="country" type="text" placeholder="Country name">
                            </div>

                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label for="email">Email</label>
                                    <input class="form-control" id="email" type="text" name="email" value="">
                                </div>


                                <div class="form-group col-sm-6">
                                    <label for="phone">Inst2</label>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadioInline1">Toggle this custom radio</label>
                                    </div>

                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadioInline2">Or toggle this other custom radio</label>
                                    </div>
                                </div>

{{--                                <div class="form-group col-sm-6">--}}
{{--                                    <label for="phone">Inst2</label>--}}
{{--                                    <input class="form-control" id="my-text-input" type="text" name="phone" value="" placeholder="Search for Institution">--}}
{{--                                </div>--}}
                            </div>

                            <div class="form-group">
                                <label for="home_address">Institutions (Select2)</label>
                                <input class="js-example-matcher-start form-control" id="home_address" name="home_address" placeholder="Search for Institution" >
                            </div>

                            <div class="form-group">
                                <label for="home_address">Institutions (Select2)</label>
                                <select id='selUser' style='width: 200px;'>
                                    <option value='0'>-- Select user --</option>
                                </select>
                                {{-- <input class="js-example-matcher-start form-control" id="home_address" name="home_address" placeholder="Search for Institution" > --}}
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

        @section('javascript')
            <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-tokeninput/1.7.0/jquery.tokeninput.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>

            <script type="text/javascript">
                $(document).ready(function () {
                    $("#my-text-input").tokenInput("{{ route('autocomplete') }}");
                });
            </script>

            <script type="text/javascript">

                var path = "{{ route('autocomplete') }}";

                $('input.typeahead').typeahead({

                    source:  function (query, process) {

                        return $.get(path, { query: query }, function (data) {

                            return process(data);

                        });

                    }

                });

            </script>

            <script>
                // CSRF Token
                // var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                // $(document).ready(function(){

                //   $( "#selUser" ).select2({
                //     ajax: {
                //       url: "{{route('autocomplete')}}",
                //       type: "get",
                //       dataType: 'json',
                //       delay: 250,
                //       data: function (params) {
                //         return {
                //           _token: CSRF_TOKEN,
                //           search: params.term // search term
                //         };
                //       },
                //       processResults: function (response) {
                //         return {
                //           results: response.items
                //         };
                //       },
                //       cache: true
                //     }

                //   });

                // });
                $(document).ready(function() {
                    $('#selUser').select2({
                        minimumInputLength: 3,
                        ajax: {
                            url: '{{ route("autocomplete") }}',
                            dataType: 'json',
                            processResults: function (data) {
                                var data_array = [];
                                data.data.forEach(function(value,key){
                                    data_array.push({id:value.id,text:value.name})
                                });

                                return {
                                    results: data_array
                                }
                            }
                        },
                    });
                });
            </script>

@endsection
