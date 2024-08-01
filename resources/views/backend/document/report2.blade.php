<style>
    table {
        border-collapse: collapse;
        width:95%;
    }
    .top table {
        border-collapse: collapse;
        width:100%;
        border: none;
    }
    th,
    td {
        border: 1px solid #cecfd5;
        padding: 5px 15px;
    }
    thead {
        background: #395870;
        color: #fff;
    }
    .bod tbody tr:nth-child(even) {
        background: #f0f0f2;
    }

    /*.nob  td {*/
    /*    border: 0;*/
    /*    padding: 10px 15px;*/
    /*}*/
    .top td  {
        border: none;
        padding: 2px 10px;
    }


    /* Automatic Serial Number Row */
    /*.css-serial {*/
    /*    counter-reset: serial-number; !* Set the serial number counter to 0 *!*/
    /*}*/
    /*.css-serial td:first-child:before {*/
    /*    counter-increment: serial-number; !* Increment the serial number counter *!*/
    /*    content: counter(serial-number); !* Display the counter *!*/
    /*}*/


</style>


<div>
{{--    <div>--}}
{{--        <img style="width:75px; float:left"  src="{{ asset('assets/brand/lmu_logo.png') }}">--}}
{{--    </div>--}}
{{--    <div style="float:left">--}}
{{--        <div style="text-align: center">--}}
{{--            <h4>Landamrk University</h4><br>--}}
{{--            <p>P.M.B 1001, Omu Aran, Kwara State, Nigeria</p>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div style="background: #919ca6">--}}
{{--        Document Upload Status--}}

{{--    </div>--}}

<table width="100%" class="top">
    <tr >
        <td colspan="2" id="nob2">
            <table cellpadding="0" cellspacing="0" class="nob">
                <tr>
                    <td class="title" width="5%">
                        <img style="width:60px"  src="{{ asset('assets/brand/lmu_logo.png') }}">
                    </td>

                    <td style="text-align: center; padding-right: 105px">
                        <b style="font-size: x-large">Landmark University</b><br>
                        P.M.B 1001, Omu Aran, Kwara State, Nigeria<br>
                        LMU
                    </td>
{{--                    <td width="18%"></td>--}}
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center; font-size: large"><b>Document Upload Status</b></td>
                </tr>
                @foreach ($users as $user)
                    <tr>
                        <td><B>DATE:</B></td>
                        <td>{{ Carbon\Carbon::now() }}</td>
                    </tr>
                    <tr>
                        <td><B>REGNO:</B></td>
                        <td>{{ $user->REGNO }}</td>
                    </tr>
                    <tr>
                        <td><b>NAME:</b></td>
                        <td>{{ $user->last_name . ' ' . $user->first_name }}</td>
                    </tr>
                @endforeach
            </table>
        </td>
    </tr>
</table>

    @if(count($documents) > 0)
        <table class="table css-serial bod" style="margin-left: 1em" >
        <thead>
        <tr>
            <th style="width: 10px">S/N</th>
            <th>Document Name</th>
            <th>Upload Date</th>
        </tr>
        </thead>
        <tbody>
        {{ $sn = 1 }}
        @foreach ($documents as $document)

            <tr>
                <td>{{ $sn }}</td>
                <td>{{ $document->session . ' ' . $document->semester . ' ' . $document->name }}</td>
                <td>{{ Carbon\Carbon::parse($document->created_at)->toDayDateTimeString() }}</td>



                {{--                            </div>--}}
            </tr>
            {{ ++$sn }}
        @endforeach
        </tbody>
        </table>
    @else
        No documents uploaded yet.
    @endif
</div>
