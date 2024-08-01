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
                         <small>Form</small>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="/admin/saveuser" >
                            {{ csrf_field() }}

                            <div class="form-group col-sm-9">
                                <label for="marital_status">Username</label>
                                <input class="form-control" id="username" type="text" name="username" value="">
                            </div>

                            <div class="form-group col-sm-9">
                                <label for="lastname">Lastname</label>
                                <input class="form-control" id="last_name" name="last_name" type="text" value="">
                            </div>

                            <div class="form-group col-sm-9">
                                <label for="firstname">Firstname</label>
                                <input class="form-control" id="first_name" name="first_name" type="text" value="">
                            </div>

                            <div class="form-group col-sm-9">
                                <label for="marital_status">Password</label>
                                <input class="form-control" id="password" type="password" name="password" value="">
                            </div>

                            <div class="form-group col-sm-9">
                                <label for="phone">Phone</label>
                                <input class="form-control" id="phone" type="text" name="phone" value="" placeholder="2348012345678">
                            </div>


                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary">Save changes</button>
                                <button type="button" class="btn btn-secondary">Cancel</button>
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
@endsection
