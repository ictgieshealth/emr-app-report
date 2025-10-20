
<html>
<head>
    <title>
        Report
    </title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<style type="text/css" media="print">
    @page {
        size: auto;   /* auto is the initial value */
        margin: 0;  /* this affects the margin in the printer settings */
    }
</style>
<style>
    tr td {
        padding: 2px 4px 2px 4px;
    }

    .borderss {
        border-bottom: 1px solid black;
    }

    body {
        font-family: Arial;
    }
</style>
<body style="background-color: #CCCCCC">
<div align="center">
    <table class="bayangprint" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="0" width="{{$pageWidth}}">
        <tbody>
        <tr>
            <td style="padding: 30px">
                <div align="center">
                    <p align="right">
                        <table cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" height="133" border="0" width="100%"
                               style="text-align: center">
                            <tbody>
                            <tr>
                                <td style="text-align:left">
                                    <div align="center">
                                        <table cellspacing="0" cellpadding="0" height="74" border="0" width="850">
                                            <tbody>
                                            <tr>
                                                <td valign="top"></td>
                                            </tr>
                                            <tr>
                                                <td valign="top">
                                                    <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                                        <tbody>
                                                        <tr>
                                                            <td width="450">
            @php
            $d = App\Http\Controllers\Report\ReportController::getProfile();
            @endphp
            <b>
                <font style="font-size: 18pt; text-align: center;" color="#000000">{!! $d['namaprofile'] !!}</font>
                <br>
            </b>
            <font size="3" color="#000000" style="font-weight: bold">{!! $d['alamat'] !!}<font>
            </td>
            @php
             $d = App\Http\Controllers\Report\ReportController::getProfile();
             @endphp
            <td style="border: 1px solid black;">
                <b>
                    <font size="3" color="#000000" style="font-weight: bold">No. RM &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp: {{ $identitas->nocm }} </font>
                    <br>
                </b>
                <font size="3" color="#000000" style="font-weight: bold">Nama &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp: {{ $identitas->namapasien }}<font>
                    <br>
                <font size="3" color="#000000" style="font-weight: bold">Jenis Kelamin : {{ $identitas->jeniskelamin }}<font>
                    <br>
                <font size="3" color="#000000" style="font-weight: bold">Tgl Lahir &nbsp &nbsp &nbsp &nbsp &nbsp: {{ $identitas->tgllahir }}<font>
                    <br>
                <font size="3" color="#000000" style="font-weight: bold">Ruangan &nbsp &nbsp &nbsp &nbsp : Ruang Bedah Sentral (OK)<font>
                    <br>
            </td>
        </tr>
        <tr>
            <td width="105">&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        </tbody>
    </table>
    </td>
    </tr>
    </tbody>
    </table>
</div>
<div style="margin-top: -10px">
    <hr style="border:1px solid #000;margin-bottom:0px;border-style: solid">
    <hr style="border:0.5px solid #000;margin-top:2px">
</div>
</td>
</tr>


@include('template.content')
@include('template.footer')

</tbody>
</table>
</p>
</div>
</td>

</tr>

</tbody>
</table>
</div>
</body>
</html>
