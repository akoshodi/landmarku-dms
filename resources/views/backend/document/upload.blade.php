@extends('backend.layouts.app2')

@section('title', __('Dashboard'))
@section('styles')
    <link href="{{ asset('css/copy-email.css') }}" rel="stylesheet">
@endsection

@section('content')
    <x-card>
        <x-slot name="header">
            <b>Documents Upload</b>
        </x-slot>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <x-slot name="body">
{{--            @if (session('status'))--}}
{{--                <div class="alert alert-success">--}}
{{--                    {{ session('status') }}--}}
{{--                </div>--}}
{{--            @endif--}}
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                Kindly upload scanned copies of your documents in <strong>pdf format</strong> and passport in <strong>JPEG format</strong> with sizes not more that <strong>512 KB</strong>.
                However, if the size of your documents are more than 512KB, use <a href="https://smallpdf.com/compress-pdf" target="_blank" class="alert-link">smallpdf website</a> to reduce the document size before uploading.
                Note: You are to upload the <strong>original of your JAMB admission letter downloaded from JAMB website</strong>. <br/> Send requests for file deletion to
                <a href="mailto:oshodi.akinwale@lmu.edu.ng">oshodi.akinwale@lmu.edu.ng</a> or <a href="mailto:examandrecords@lmu.edu.ng ">examandrecords@lmu.edu.ng</a>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

                @if ($errors->any())
                    <div class="alert alert-danger col-md-12" role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

            <form method="POST" action="/documents" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-row">

                    <div class="form-group col-md-4">

                        <select class="form-control" name="document" id="docu">
                            <option>Select Document</option>
                            @foreach ($items as $item)
                                <option value="{{ $item->id }}">
                                    {{ $item->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group col-md-6">
                        <input class="form-control" type="file" id="uploaded_file" name="uploaded_file">
                    </div>
                    <div class="col-2" >
                        <button type="submit" id="upload" class="btn btn-success btn-md">Upload</button>
                    </div>

                </div>
            </form>

            <div>
                <table class="table table-responsive-sm table-outline table-bordered">
                    @isset($documents)
                        <thead class="thead-light">
                        <tr>
                            <th>Document Name</th>
                            <th>Upload Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                    @endisset

                    <tbody>
                    @foreach ($documents as $document)
                    <tr>
                        <td>{{ $document->session . ' ' . $document->semester . ' ' . $document->name }}</td>
                        <td>{{ Carbon\Carbon::parse($document->created_at)->toDayDateTimeString() }}</td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="/documents/{{$document->uuid}}" target="_blank">
                                <i class="icon cil-search"></i>
                            </a>

{{--                            <x-link--}}
{{--                                class="btn btn-danger btn-sm"--}}
{{--                                icon="c-icon cil-trash"--}}
{{--                                onclick="event.preventDefault();document.getElementById('delete-form-{{$document->id}}').submit();">--}}
{{--                                <x-slot name="text">--}}
{{--                                    <x-delete :action="route('documents.del',  [$document->id] )" id="delete-form-{{$document->id}}" class="d-none" />--}}
{{--                                </x-slot>--}}
{{--                            </x-link>--}}
                        </td>
                    </tr>

                    @endforeach
                    </tbody>
                </table>
            </div>



        </x-slot>
    </x-card>
    <?php
//    echo $upload_path;
    ?>
@endsection

@section('javascript')

<script>
    var _grid = $("#myTable").dataTable({
        fnDrawCallback: function (settings) {
            $("#myTable").parent().toggle(settings.fnRecordsDisplay() > 0);
        }
    });

    $("#upload").click(function(e) {
        var uploaded_file = document.getElementById("uploaded_file");
        let size = uploaded_file.files[0].size;
        if (size > 500000) {
            alert("Document size is exceeds 500 kB. Please reduce the size and try again.");
            event.preventDefault();
        }
    });
</script>
<script>
    $(document).ready(function() {

        // Add class to mailto link
        // Needed to separate the disabling of the default action AND copy email to clipboard
        $('a[href^=mailto]').addClass('mailto-link');

        var mailto = $('.mailto-link');
        var messageCopy = 'Click to copy email address';
        var messageSuccess = 'Email address copied to clipboard';

        mailto.append('<span class="mailto-message"></span>');
        $('.mailto-message').append(messageCopy);

        // Disable opening your email client. yuk.
        $('a[href^=mailto]').click(function() {
            return false;
        })

        // On click, get href and remove 'mailto:' from value
        // Store email address in a variable.
        mailto.click(function() {
            var href = $(this).attr('href');
            var email = href.replace('mailto:', '');
            copyToClipboard(email);
            $('.mailto-message').empty().append(messageSuccess);
            setTimeout(function() {
                $('.mailto-message').empty().append(messageCopy);}, 2000);
        });

    });

    // Grabbed this from Stack Overflow.
    // Copies the email variable to clipboard
    function copyToClipboard(text) {
        var dummy = document.createElement("input");
        document.body.appendChild(dummy);
        dummy.setAttribute('value', text);
        dummy.select();
        document.execCommand('copy');
        document.body.removeChild(dummy);
    }
</script>

@endsection
