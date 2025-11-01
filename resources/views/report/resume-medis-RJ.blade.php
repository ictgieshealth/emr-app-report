<html>

<head>
    <title>
        Resume Medis Rawat Jalan
    </title>
    @if (stripos(\Request::url(), 'localhost') !== false)
        <link rel="stylesheet" href="{{ asset('css/paper.css') }} ">
        <link rel="stylesheet" href="{{ asset('css/table-v2.css') }}">
        <link rel="stylesheet" href="{{ asset('css/tabel.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @else
        <link rel="stylesheet" href="{{ asset('service/css/paper.css') }} ">
        <link rel="stylesheet" href="{{ asset('service/css/table-v2.css') }}">
        <link rel="stylesheet" href="{{ asset('service/css/tabel.css') }}">
        <link rel="stylesheet" href="{{ asset('service/css/style.css') }}">
    @endif
</head>
<style type="text/css" media="print">
    @media print {
        @page {
            size: auto;
            margin: 0;
            /* size: portrait; */
        }

        footer {
            display: none
        }

        header {
            display: none
        }

        body {
            -webkit-print-color-adjust: exact !important;
        }
    }
</style>
<style>
    tr td {
        padding: 2px 4px 2px 4px;
    }

    .borderss {
        border-bottom: 1px solid black;
    }

    .baris1 {
        border: 2px solid #000000;
    }

    .baris2 {
        border: 1px solid #000000;
    }

    .garishalus {
        border: 0.01em solid #9a9a9a;
    }

    .garishalus tr td {
        border: 0.01em solid #9a9a9a;
        /* border: thin solid #9a9a9a; */
    }

    body {
        font-family: Tahoma, Geneva, sans-serif;
    }

    @page {
        size: A4
    }

    .garis6 td {
        padding: 3px !important;
    }
</style>
{{-- <body class="A4" style="font-family:Tahoma;height: auto"> --}}

<body style="background-color: #CCCCCC;margin: 0" onLoad="window.print()">
    <table style="margin: auto" class="sheet padding-10mm" style="font-family:Tahoma;height: auto">
        <thead>
            <tr>
                <th>
                    <div class="header">

                        <table cellspacing="0" cellpadding="0" border="0" width="100%">
                            <tbody>
                                <tr>
                                    <td width="10%" style="padding: 5px">
                                        @if (stripos(\Request::url(), 'localhost') !== false)
                                            <img src="{{ asset('img/logo_rs.png') }}" alt=""
                                                style="width: 90px;">
                                        @else
                                            <img src="{{ asset('service/img/logo_rs.png') }}" width="80px"
                                                border="0">
                                        @endif
                                    </td>
                                    <td style="text-align: left">
                                        <b>
                                            <span style="font-size: 11px">{!! $res['profile']->namalengkap !!}</span></br>
                                            {{-- </br> --}}
                                            <span style="font-size: 10px;">{!! $res['profile']->alamatlengkap !!}</span>
                                        </b>
                                    </td>
                                    <td width="50%" style="padding: 10px">
                                    </td>

                                </tr>
                            </tbody>
                        </table>

                        <hr style="border:2px solid #000;margin-bottom:0px">
                        <hr style="border:0.5px solid #000;margin-top:2px">
                    </div>

                    <table cellspacing="0" cellpadding="0" border="0" width="100%">
                        <tbody>
                            <tr>
                                <td style="text-align: center">
                                    <b>
                                        <span style="font-size: 16px">RESUME MEDIS RAWAT JALAN</span></br>
                                        {{-- </br> --}}
                                        <span style="font-size: 12px;">(Hanya Untuk Satu Kali Perawatan)</span>
                                    </b>
                                </td>

                            </tr>
                        </tbody>
                    </table>
                    </br>
                    <table cellspacing="0" cellpadding="0" border="0" width="100%">
                        <tbody>
                            <tr>
                                <td style="width: 30%"></td>
                                <td style="width: 5%"></td>
                                <td class="f-s-15 bold text-top"><b></b></td>
                            </tr>
                            <tr>
                                <td style="width: 30%">No. RM / Jenis Kelamin</td>
                                <td style="width: 5%">:</td>
                                <td class="f-s-15 bold text-top"><b>{!! $res['d']['nocm'] !!} /
                                        {!! $res['d']['jeniskelamin'] !!}</b></td>
                            </tr>
                            <tr>
                                <td style="width: 30%"">Nama Pasien</td>
                                <td style="width: 5%">:</td>
                                <td class="f-s-15 bold  text-top"><b>{!! $res['d']['namapasien'] !!}</b>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 30%">Tgl Lahir</td>
                                <td style="width: 5%">:</td>
                                <td class="f-s-15 bold  text-top">
                                    <b>{!! date('d-m-Y', strtotime($res['d']['tgllahir'])) !!}</b>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 30%">Nama Penjamin</td>
                                <td style="width: 5%">:</td>
                                <td class="f-s-15 bold  text-top"><b>{!! $res['d']['namarekanan'] !!}</b>

                            </tr>
                            <tr>
                                <td style="width: 30%"">Tgl Periksa / Masuk RS</td>
                                <td style="width: 5%">:</td>
                                <td class="f-s-15 bold  text-top">
                                    <b>{!! date('d-m-Y', strtotime($res['d']['tglregistrasi'])) !!}</b>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 30%">Ruangan</td>
                                <td style="width: 5%">:</td>
                                <td class="f-s-15 bold  text-top"><b>{!! $res['d']['namaruangan'] !!}</b>
                                </td>
                            </tr>
                            <tr>
                            </tr>
                        </tbody>
                    </table>
                    </br>
                    </br>
                    <table cellspacing="0" cellpadding="0" border="0" width="100%">
                        <tbody>
                            <tr>

                                <td style="width: 30%">
                                    <h3>Anamnesa</h3>
                                </td>
                                <td style="width: 5%">:</td>
                                <td style="width: 65%">{!! $res['d']['anamnesa'] !!}</td>

                            </tr>
                            <tr>

                                <td style="width: 30%">
                                    <h3>Pemeriksaan</h3>
                                </td>
                                <td style="width: 5%">:</td>
                                <td style="width: 65%">{!! $res['d']['pemeriksaan'] !!}</td>

                            </tr>
                            <tr>

                                <td style="width: 30%">
                                    <h3>Diagnosa (mohon diisi dengan huruf cetak)</h3>
                                </td>
                                <td style="width: 5%">:</td>
                                <td style="width: 65%">{!! $res['d']['diagnosacppt'] !!} {!! $res['d']['diagnosacombo'] !!} </td>

                            </tr>
                            <tr>

                                <td style="width: 30%">
                                    <h3>Terapi & Tindakan)</h3>
                                </td>
                                <td style="width: 5%">:</td>
                                <td style="width: 65%">{!! $res['d']['terapitindakan'] !!}</td>

                            </tr>
                        </tbody>
                    </table>
                    </br>
                    <table cellspacing="0" cellpadding="0" border="0" width="100%">
                        <tbody>
                            <tr style="text-align: center">

                                <td style="width: 50%"></td>
                                <td style="width: 50%" "text-align: center">
                                    {!! $res['profile']->namakota !!},{!! date('d-m-Y', strtotime($res['d']['tglregistrasi'])) !!} </td>

                            </tr>
                            <tr style="text-align: center">

                                <td style="width: 50%"></td>
                                <td style="width: 50%" "text-align: center"></br></td>

                            </tr>
                            <tr style="text-align: center">

                                <td style="width: 50%"></td>
                                <td style="width: 50%" "text-align: center">
                                @if($dataimg!=null)    
                                    @forelse ($dataimg as $item)
                                        @if ($item->emrdfk == 1)
                                            <img src="{{ $item->image }}" width="75" height="75"
                                                alt="TTD" />
                                        @break
                                    @endif
                                @empty
                                    <div style="height:75px"></div>
                                @endforelse
                                @endif
                                </br></br>
                            </td>

                        </tr>
                        <tr style="text-align: center">

                            <td style="width: 50%"></td>
                            <td style="width: 50%" "text-align: center">( {!! $res['d']['namadokter'] !!} ) </td>

                        </tr>
                    </tbody>
                </table>
            </th>
        </tr>
    </thead>
    <tbody>
    </tbody>
</table>
</body>

{{-- <script type="text/javascript">
    var APP_URL = {!! json_encode(url('/')) !!}
    $(function () {
        'use strict';

        // $('#qrPasien').qrcode({
        //     text: APP_URL + '/service/medifirst2000/report/cetak-pasien?reg=' + {{ $res['d']['noregistrasi'] }} ,
        //     height: 75,
        //     width: 75
        // });
        $('#qrDokter').qrcode({
            text: APP_URL + '/service/medifirst2000/report/cetak-dokter?reg=' + {{ $res['d']['noregistrasi'] }} ,
            height: 75,
            width: 75
        });

    })
</script> --}}
</body>

</html>
