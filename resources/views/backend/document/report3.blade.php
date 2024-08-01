<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Landmark University Document Uploads</title>

    <style>
        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            /*border: 1px solid #eee;*/
            /*box-shadow: 0 0 10px rgba(0, 0, 0, .15);*/
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
        }

        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
        }

        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }

        .invoice-box table tr td:nth-child(2) {
            /*text-align: right;*/
        }

        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.top table td.title {
            font-size: 45px;
            line-height: 45px;
            color: #333;
        }

        .invoice-box table tr.information table td {
            padding-bottom: 40px;
        }

        .invoice-box table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }

        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.item td{
            border-bottom: 1px solid #eee;
        }

        .invoice-box table tr.item.last td {
            border-bottom: none;
        }

        .invoice-box table tr.total td:nth-child(2) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }

        @media only screen and (max-width: 600px) {
            .invoice-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
            }

            .invoice-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
            }
        }

        /** RTL **/
        .rtl {
            direction: rtl;
            font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        }

        .rtl table {
            text-align: right;
        }

        .rtl table tr td:nth-child(2) {
            text-align: left;
        }
    </style>
</head>

<body>
<div class="invoice-box">
    <table>
        <tr class="top">
            <td colspan="2">
                <table>
                    <tr>
                        <td class="title">
                            <img style="width:60px"  src="{{ public_path('assets/brand/lmu_logo.png') }}" style="width:100%; max-width:300px;">
                        </td>

                        <td style="text-align: center; padding-right: 110px">
                            <strong style="font-size: x-large">Landmark University</strong><br>
                            <strong>P.M.B 1001, Omu Aran, Kwara State, Nigeria</strong><br>
                            <em>{{ Carbon\Carbon::now()->format('d F Y') }}</em>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr class="information">
            <td colspan="2">
                <table>
                    <tr>
                        <td style="text-align: center">
                            <strong style="font-size: larger">Document Uploads</strong>
                        </td>
                    </tr>
                </table>

            </td>
        </tr>

        @foreach ($users as $user)
            <tr>
                <td colspan="2"><strong>NAME: </strong> {{ ucfirst(strtolower($user->last_name)) . ' ' . ucfirst(strtolower($user->first_name )) }} </td>
            </tr>
            <tr>
                <td colspan="2"><strong>REGNO: </strong> {{ $user->REGNO }} </td>
            </tr>
            <tr>
                <td colspan="2"><strong>PROGRAMME: </strong> {{ $user->programme }} </td>
            </tr>
        @endforeach

{{--        <tr class="heading">--}}
{{--            <td>--}}
{{--                Document--}}
{{--            </td>--}}

{{--            <td>--}}
{{--                Upload date--}}
{{--            </td>--}}
{{--        </tr>--}}
{{--        @foreach ($documents as $document)--}}
{{--        <tr class="details">--}}
{{--            <td>--}}
{{--                {{ $document->session . ' ' . $document->semester . ' ' . $document->name }}--}}
{{--            </td>--}}

{{--            <td>--}}
{{--                {{ Carbon\Carbon::parse($document->created_at)->toDayDateTimeString() }}--}}
{{--            </td>--}}
{{--        </tr>--}}
{{--        @endforeach--}}
        @if(count($documents) > 0)
        <tr class="heading">
            <td>Admission Documents</td>
            <td>Upload date</td>
        </tr>
            @foreach ($documents as $document)
                @if(in_array($document->docid, [1,2,3,4,5,6,7,8,11]))
                    <tr class="item">
                        <td>{{ $document->name }}</td>

                        <td>{{ Carbon\Carbon::parse($document->created_at)->toDayDateTimeString() }}</td>
                    </tr>


                @endif
            @endforeach
                    <tr class="heading">
                        <td>Other Documents</td>
                        <td>Upload date</td>
                    </tr>
            @foreach ($documents as $document)
                @if(in_array($document->docid, [9,10,12]))
                    <tr class="item">
                        <td>{{ $document->session . ' ' . $document->semester . ' ' . $document->name }}</td>

                        <td>{{ Carbon\Carbon::parse($document->created_at)->toDayDateTimeString() }}</td>
                    </tr>
                @endif

            @endforeach
        @endif

{{--        <tr class="total">--}}
{{--            <td></td>--}}
{{--            <td>Total: $385.00</td>--}}
{{--        </tr>--}}
    </table>
</div>
</body>
</html>
