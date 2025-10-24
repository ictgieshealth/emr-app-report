<!DOCTYPE html >
<html lang="en" ng-app="angularApp">

<head>
    <meta charset="utf-8">
    <title>Asesmen Awal Keperawatan I G D</title>

    @if(stripos(\Request::url(), 'localhost') !== FALSE || stripos(\Request::url(), '192.168.75.233:8080') !== FALSE)
        <link rel="stylesheet" href="{{ asset('css/report/paper.css') }}">
        <link rel="stylesheet" href="{{ asset('css/report/table.css') }}">
        <link rel="stylesheet" href="{{ asset('css/report/tabel.css') }}">
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/jquery.qr-code.js') }}"></script>
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <!-- angular -->
        <script src="{{ asset('js/angular/angular.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/angular/angular-route.min.js') }}" type="text/javascript"></script>
        <script type="text/javascript" src="{{ asset('js/angular/angular-animate.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/angular/angular-aria.min.js') }}"></script>
        <script src="{{ asset('js/angular/angular-material.js') }}" type="text/javascript"></script>
    @else
        <link rel="stylesheet" href="{{ asset('service/css/report/paper.css') }}">
        <link rel="stylesheet" href="{{ asset('service/css/report/table.css') }}">
        <link rel="stylesheet" href="{{ asset('service/css/report/tabel.css') }}">
        <script src="{{ asset('service/js/jquery.min.js') }}"></script>
        <script src="{{ asset('service/js/jquery.qr-code.js') }}"></script>
        <link href="{{ asset('service/css/style.css') }}" rel="stylesheet">
        <!-- angular -->
        <script src="{{ asset('service/js/angular/angular.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('service/js/angular/angular-route.min.js') }}" type="text/javascript"></script>
        <script type="text/javascript" src="{{ asset('service/js/angular/angular-animate.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('service/js/angular/angular-aria.min.js') }}"></script>
        <script src="{{ asset('service/js/angular/angular-material.js') }}" type="text/javascript"></script>
    @endif
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <style>
        @page {
            size: A4;
        }

        /*@media print {*/
        /*    body {margin:0}*/
        /*}*/
        .double-border {

            border: 4px solid #000;

        }

        .double-border:before {

            border: 4px solid #fff;

        }

        .box {
            border: 2px solid black;
            /*border-radius: 6px;*/
        }

        .garis6 td {
            padding: 3px;
        }

        .bold {
            font-weight: bold;
        }

        .f-s-15 {
            font-size: 12px;
        }

        .top-height {
            height: 50px;
            vertical-align: text-top;
            width: 15%;
        }

        .text-top {
            vertical-align: text-top;
        }
        table {
            width: 100%;
            height: 100%;
        }
    </style>
</head>

<body class="A4" style="font-family:Tahoma;height: auto" ng-controller="cetakAsesmenAwalKeperawatanIGDCtrl">
    <section class="sheet padding-10mm" style="font-family:Tahoma;height: auto">

        <table cellspacing="0" cellpadding="0" border="0" width="100%">
            <tbody>
            <tr>
                <td width="10%" style="padding: 5px">
                @if(stripos(\Request::url(), 'localhost') !== FALSE || stripos(\Request::url(), '192.168.75.233:8080') !== FALSE)
                    <img src="{{ asset('img/logo_triadipa.jpeg') }}" alt="" style="width: 90px;">
                @else
                    <img src="{{ asset('service/img/logo_triadipa.jpeg') }}" alt="" style="width: 90px;">
                @endif
                </td>

                <td width="15%" style="text-align: justify; border: 1px solid black; vertical-align: top; padding: 5px; font-size: 11pt;">
                    <b>No. RM</b>
                    <p style="font-size: 11pt; display: inline; margin: 1.8cm;"><b>: {!! $res['d'][0]->nocm !!}</b></b></p><br>
                    <b>Nama</b>
                    <p style="font-size: 11pt; display: inline; margin: 2.1cm;"><b>: {!! $res['d'][0]->namapasien !!}</b></p><br>
                    <b>Jenis Kelamin</b>
                    <p style="font-size: 11pt; display: inline; margin: 0.5cm;"><b>: {!! $res['d'][0]->jeniskelamin !!}</b></p><br>
                    <b>Umur</b>
                    <p style="font-size: 11pt; display: inline; margin: 2.1cm;"><b>: {!! $res['d'][0]->umur !!}</b></p><br>
                    <b>Ruangan </b>
                    <p style="font-size: 11pt; display: inline; margin: 1.4cm;"><b>: {!! $res['d'][0]->namaruangan !!}</b></p>
                </td>


            </tbody>
        </table>

        <td style="vertical-align: text-top">

                <table width="100%">
                    <tr>
                        <td width="50%" colspan="4">
                            <font style="font-size: 11pt;font-weight: bold" color="#000000" ><b>Asesmen Awal Kebidanan Rawat Jalan</b></font>
                        </td>
                    </tr>
                    <tr>
                        <td width="50%" colspan="4" height="10"></td>
                    </tr>
                    <tr>
                        <td width="24%"><font style="font-size: 11pt;" color="#000000" >Masuk RS tanggal</font></td>
                        <td width="1%"><font style="font-size: 11pt;" color="#000000" >:</font></td>
                        <td width="75%"><font style="font-size: 11pt;" color="#000000" >@{{ item.obj[21002626] }}</font></td>

                    </tr>
                    <tr>
                        <td width="24%"><font style="font-size: 11pt;" color="#000000" >Pengkajian tanggal</font></td>
                        <td width="1%"><font style="font-size: 11pt;" color="#000000" >:</font></td>
                        <td width="75%"><font style="font-size: 11pt;" color="#000000" >@{{ item.obj[21002627] }}</font></td>

                    </tr>
                    <tr>
                        <td width="24%"><font style="font-size: 11pt;" color="#000000" >Masuk Poliklinik</font></td>
                        <td width="1%"><font style="font-size: 11pt;" color="#000000" >:</font></td>
                        <td width="75%"><font style="font-size: 11pt;" color="#000000" >@{{ item.obj[21002628] }}</font></td>

                    </tr>
                    <tr>
                        <td width="24%"><font style="font-size: 11pt;" color="#000000" >Anamnesa</font></td>
                        <td width="1%"><font style="font-size: 11pt;" color="#000000" >:</font></td>
                        <td width=75%>
                        <span >
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21002629') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21002629]"/><font style="font-size: 11pt;" color="#000000">Auto Anamnesa<br>

                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21002630') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21002630]"/><font style="font-size: 11pt;" color="#000000">Allo Anamnesa:

                            <input style="margin-left: 0.5cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21002631') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21002631]"/><font style="font-size: 11pt;" color="#000000">Keluarga

                            <input style="margin-left: 0.5cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21002632') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21002632]"/><font style="font-size: 11pt;" color="#000000">Penerjemah Bahasa <br>

                                <div style="display: flex; align-items: center;">
                                    <input type="checkbox"
                                        @foreach ($res['d'] as $item)
                                        @if ($item->emrdfk == '21002633') checked @endif
                                        @endforeach
                                        ng-model="item.obj[21002633]" /> <font style="font-size: 11pt; color: #000000;">Orang Lain:</font>
                                    <label style="margin-left: 0.5cm;">Nama</label>
                                    <label >:</label>
                                    <input style="margin-left: 0.2cm; width: 4cm;" type="textbox" ng-model="item.obj[21002634]"
                                        @if ($item->emrdfk == '21002634') value="" @endif>
                                    <label style="margin-left: 0.5cm;">Hubungan</label>
                                    <label >:</label>
                                    <input style="margin-left: 0.2cm; width: 4cm;" type="textbox" ng-model="item.obj[21002635]"
                                        @if ($item->emrdfk == '21002635') value="" @endif>
                                </div>

                        </span>
                        </td>
                    </tr>
                    <tr>
                        <td width="24%"><font style="font-size: 11pt;" color="#000000" >Cara Masuk</font></td>
                        <td width="1%"><font style="font-size: 11pt;" color="#000000" >:</font></td>
                        <td width=75%>
                        <span >
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21002636') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21002636]"/><font style="font-size: 11pt;" color="#000000">Jalan Tanpa Bantuan

                            <input style="margin-left: 1cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21002637') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21002637]"/><font style="font-size: 11pt;" color="#000000">Tempat Tidur Dorong

                            <input style="width: 30%;" type="textbox" ng-model="item.obj[21002638]" @if ($item->emrdfk == '21002638') value="" @endif><br>

                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21002639') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21002639]"/><font style="font-size: 11pt;" color="#000000">Jalan Dengan Bantuan

                        </span>
                        </td>
                    </tr>

                    <tr>
                        <td width="24%"><font style="font-size: 11pt;" color="#000000" >Asal Masuk</font></td>
                        <td width="1%"><font style="font-size: 11pt;" color="#000000" >:</font></td>
                        <td width=75%>
                        <span >
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21002640') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21002640]"/><font style="font-size: 11pt;" color="#000000">Non Rujukan

                            <input style="margin-left: 0.9cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21002641') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21002641]"/><font style="font-size: 11pt;" color="#000000">Rujukan

                        </span>
                        </td>
                    </tr>
                    <tr>
                        <td width="24%"><font style="font-size: 11pt;" color="#000000" >Alasan Masuk</font></td>
                        <td width="1%"><font style="font-size: 11pt;" color="#000000" >:</font></td>
                        <td width=75%>
                            <textarea style="width: 95%; height: 80px;">@{{ item.obj[21002642] }}</textarea>
                        </td>
                    </tr>
                </table>

                <table width="100%" style="margin-top: 5px;">
                    <tr>
                        <td width="50%" colspan="4">
                            <font style="font-size: 11pt;font-weight: bold;" color="#000000" ><b>1. RIWAYAT KESEHATAN</b></font>
                        </td>
                    </tr>
                    <tr>
                        <td width="100%" colspan="4" style="padding: 5pt 10pt">
                            <b>A. Penyakit yang pernah diderita :</b>
                            <div style="padding: 5pt">
                                <input type="text" style="width: 95%;" value="@{{ item.obj[21002643] }}" />
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="100%" colspan="4" style="padding: 5pt 10pt">
                            <b>B. Riwayat pengobatan saat di rumah :</b>
                            <div style="padding: 5pt">
                                <input type="checkbox" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002644') checked @endif @endforeach /> Tidak
                                <input type="checkbox" style="margin-left: 1cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002645') checked @endif @endforeach /> Ya
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="100%" colspan="4" style="padding: 10pt">
                            <table style="width:100%; border: 1px solid black; border-collapse: collapse;">
                                <tr>
                                    <th style="border: 1px solid black; padding: 5px; font-weight: bold;">No.</th>
                                    <th style="border: 1px solid black; padding: 5px; font-weight: bold;">Nama Obat</th>
                                    <th style="border: 1px solid black; padding: 5px; font-weight: bold;">Dosis</th>
                                    <th style="border: 1px solid black; padding: 5px; font-weight: bold;">Cara Pemberian</th>
                                    <th style="border: 1px solid black; padding: 5px; font-weight: bold;">Frekuensi</th>
                                    <th style="border: 1px solid black; padding: 5px; font-weight: bold;">Waktu & Tanggal Terakhir Diberikan</th>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid black; padding: 5px; text-align: center;">1</td>
                                    <td style="border: 1px solid black; padding: 5px;">@{{ item.obj[21002646] }}</td>
                                    <td style="border: 1px solid black; padding: 5px;">@{{ item.obj[21002647] }}</td>
                                    <td style="border: 1px solid black; padding: 5px;">@{{ item.obj[21002648] }}</td>
                                    <td style="border: 1px solid black; padding: 5px;">@{{ item.obj[21002649] }}</td>
                                    <td style="border: 1px solid black; padding: 5px;">@{{ item.obj[21002650] }}</td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid black; padding: 5px; text-align: center;">2</td>
                                    <td style="border: 1px solid black; padding: 5px;">@{{ item.obj[21002651] }}</td>
                                    <td style="border: 1px solid black; padding: 5px;">@{{ item.obj[21002652] }}</td>
                                    <td style="border: 1px solid black; padding: 5px;">@{{ item.obj[21002653] }}</td>
                                    <td style="border: 1px solid black; padding: 5px;">@{{ item.obj[21002654] }}</td>
                                    <td style="border: 1px solid black; padding: 5px;">@{{ item.obj[21002655] }}</td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid black; padding: 5px; text-align: center;">3</td>
                                    <td style="border: 1px solid black; padding: 5px;">@{{ item.obj[21002656] }}</td>
                                    <td style="border: 1px solid black; padding: 5px;">@{{ item.obj[21002657] }}</td>
                                    <td style="border: 1px solid black; padding: 5px;">@{{ item.obj[21002658] }}</td>
                                    <td style="border: 1px solid black; padding: 5px;">@{{ item.obj[21002659] }}</td>
                                    <td style="border: 1px solid black; padding: 5px;">@{{ item.obj[21002660] }}</td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid black; padding: 5px; text-align: center;">4</td>
                                    <td style="border: 1px solid black; padding: 5px;">@{{ item.obj[21002661] }}</td>
                                    <td style="border: 1px solid black; padding: 5px;">@{{ item.obj[21002662] }}</td>
                                    <td style="border: 1px solid black; padding: 5px;">@{{ item.obj[21002663] }}</td>
                                    <td style="border: 1px solid black; padding: 5px;">@{{ item.obj[21002664] }}</td>
                                    <td style="border: 1px solid black; padding: 5px;">@{{ item.obj[21002665] }}</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td width="100%" colspan="4" style="padding: 5pt 10pt">
                            <b>C. Operasi yang pernah dialami, (Jenis, kapan, komplikasi yang ada) :</b>
                            <div style="padding: 5pt">
                                <textarea style="width: 95%; height: 60px;">@{{ item.obj[21002666] }}</textarea>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="100%" colspan="4" style="padding: 5pt 10pt">
                            <b>D. Faktor keturunan Gemeli :</b>
                            <div style="padding: 5pt">
                                <input type="checkbox" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002667') checked @endif @endforeach /> Tidak
                                <input type="checkbox" style="margin-left: 1cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002668') checked @endif @endforeach /> Ya
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="100%" colspan="4" style="padding: 5pt 10pt">
                            <b>E. Riwayat penyakit herediter :</b>
                            <div style="padding: 5pt">
                                <input type="checkbox" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002669') checked @endif @endforeach /> Tidak ada
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002670') checked @endif @endforeach /> Ada, Jelaskan
                                <input type="text" style="width: 30%; margin-left: 0.5cm;" value="@{{ item.obj[21002671] }}" />
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="100%" colspan="4" style="padding: 5pt 10pt">
                            <b>F. Riwayat penyakit dalam keluarga saat ini :</b>
                            <div style="padding: 5pt">
                                <input type="text" style="width: 95%;" value="@{{ item.obj[21002672] }}" />
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="100%" colspan="4" style="padding: 5pt 10pt">
                            <b>G. Ketergantungan terhadap</b>
                            <div style="padding: 5pt">
                                <input type="checkbox" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002673') checked @endif @endforeach /> Obat obatan
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002674') checked @endif @endforeach /> Rokok
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002675') checked @endif @endforeach /> Alkohol
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002676') checked @endif @endforeach />
                                <input type="text" style="width: 20%;" value="@{{ item.obj[21002677] }}" />
                                <br>
                                <label>Tidak ada Jelaskan</label>
                                <input type="text" style="width: 80%; margin-left: 0.5cm;" value="@{{ item.obj[21002678] }}" />
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="100%" colspan="4" style="padding: 5pt 10pt">
                            <b>H. Riwayat pekerjaan (apakah berhubungan dengan zat - zat berbahaya) :</b>
                            <div style="padding: 5pt">
                                <input type="checkbox" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002679') checked @endif @endforeach /> Tidak
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002680') checked @endif @endforeach /> Ya, Jelaskan
                                <input type="text" style="width: 30%; margin-left: 0.5cm;" value="@{{ item.obj[21002681] }}" />
                            </div>
                        </td>
                    </tr>
                </table>

                <table width="100%" style="margin-top: 10px;">
                    <tr>
                        <td width="50%" colspan="4">
                            <font style="font-size: 11pt;font-weight: bold;" color="#000000" ><b>2. RIWAYAT KEHAMILAN</b></font>
                        </td>
                    </tr>
                    <tr>
                        <td width="100%" colspan="4" style="padding: 10pt">
                            <table style="width:100%; border: 1px solid black; border-collapse: collapse;">
                                <tr>
                                    <th style="border: 1px solid black; padding: 5px; font-weight: bold;">No.</th>
                                    <th style="border: 1px solid black; padding: 5px; font-weight: bold;">P/L</th>
                                    <th style="border: 1px solid black; padding: 5px; font-weight: bold;">Umur Anak</th>
                                    <th style="border: 1px solid black; padding: 5px; font-weight: bold;">KU Anak</th>
                                    <th style="border: 1px solid black; padding: 5px; font-weight: bold;">BBL(Gram)</th>
                                    <th style="border: 1px solid black; padding: 5px; font-weight: bold;">Riwayat Persalinan</th>
                                    <th style="border: 1px solid black; padding: 5px; font-weight: bold;">Ditolong oleh & tempat</th>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid black; padding: 5px; text-align: center;">1</td>
                                    <td style="border: 1px solid black; padding: 5px;">@{{ item.obj[21002682] }}</td>
                                    <td style="border: 1px solid black; padding: 5px;">@{{ item.obj[21002683] }}</td>
                                    <td style="border: 1px solid black; padding: 5px;">@{{ item.obj[21002684] }}</td>
                                    <td style="border: 1px solid black; padding: 5px;">@{{ item.obj[21002685] }}</td>
                                    <td style="border: 1px solid black; padding: 5px;">@{{ item.obj[21002686] }}</td>
                                    <td style="border: 1px solid black; padding: 5px;">@{{ item.obj[21002687] }}</td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid black; padding: 5px; text-align: center;">2</td>
                                    <td style="border: 1px solid black; padding: 5px;">@{{ item.obj[21002688] }}</td>
                                    <td style="border: 1px solid black; padding: 5px;">@{{ item.obj[21002689] }}</td>
                                    <td style="border: 1px solid black; padding: 5px;">@{{ item.obj[21002690] }}</td>
                                    <td style="border: 1px solid black; padding: 5px;">@{{ item.obj[21002691] }}</td>
                                    <td style="border: 1px solid black; padding: 5px;">@{{ item.obj[21002692] }}</td>
                                    <td style="border: 1px solid black; padding: 5px;">@{{ item.obj[21002693] }}</td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid black; padding: 5px; text-align: center;">3</td>
                                    <td style="border: 1px solid black; padding: 5px;">@{{ item.obj[21002694] }}</td>
                                    <td style="border: 1px solid black; padding: 5px;">@{{ item.obj[21002695] }}</td>
                                    <td style="border: 1px solid black; padding: 5px;">@{{ item.obj[21002696] }}</td>
                                    <td style="border: 1px solid black; padding: 5px;">@{{ item.obj[21002697] }}</td>
                                    <td style="border: 1px solid black; padding: 5px;">@{{ item.obj[21002698] }}</td>
                                    <td style="border: 1px solid black; padding: 5px;">@{{ item.obj[21002699] }}</td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid black; padding: 5px; text-align: center;">4</td>
                                    <td style="border: 1px solid black; padding: 5px;">@{{ item.obj[21002700] }}</td>
                                    <td style="border: 1px solid black; padding: 5px;">@{{ item.obj[21002701] }}</td>
                                    <td style="border: 1px solid black; padding: 5px;">@{{ item.obj[21002702] }}</td>
                                    <td style="border: 1px solid black; padding: 5px;">@{{ item.obj[21002703] }}</td>
                                    <td style="border: 1px solid black; padding: 5px;">@{{ item.obj[21002704] }}</td>
                                    <td style="border: 1px solid black; padding: 5px;">@{{ item.obj[21002705] }}</td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid black; padding: 5px; text-align: center;">5</td>
                                    <td style="border: 1px solid black; padding: 5px;">@{{ item.obj[21002706] }}</td>
                                    <td style="border: 1px solid black; padding: 5px;">@{{ item.obj[21002707] }}</td>
                                    <td style="border: 1px solid black; padding: 5px;">@{{ item.obj[21002708] }}</td>
                                    <td style="border: 1px solid black; padding: 5px;">@{{ item.obj[21002709] }}</td>
                                    <td style="border: 1px solid black; padding: 5px;">@{{ item.obj[21002710] }}</td>
                                    <td style="border: 1px solid black; padding: 5px;">@{{ item.obj[21002711] }}</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>

                <table width="100%" style="margin-top: 10px;">
                    <tr>
                        <td width="50%" colspan="4">
                            <font style="font-size: 11pt;font-weight: bold;" color="#000000" ><b>3. RIWAYAT OBSTETRI</b></font>
                        </td>
                    </tr>
                    <tr>
                        <td width="100%" colspan="4" style="padding: 5pt 10pt">
                            <b>A. Menarche :</b>
                            <div style="padding: 5pt">
                                <label>Umur</label>
                                <input type="text" style="width: 20%;" value="@{{ item.obj[21002712] }}" /> tahun
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="100%" colspan="4" style="padding: 5pt 10pt">
                            <b>Menstruasi</b>
                            <div style="padding: 5pt">
                                <input type="checkbox" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002713') checked @endif @endforeach /> Teratur, Siklus
                                <input type="text" style="width: 15%; margin-left: 0.3cm;" value="@{{ item.obj[21002714] }}" /> hari
                                <input type="checkbox" style="margin-left: 1cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002715') checked @endif @endforeach /> Tidak Teratur, Siklus
                                <input type="text" style="width: 15%; margin-left: 0.3cm;" value="@{{ item.obj[21002716] }}" /> hari
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="100%" colspan="4" style="padding: 5pt 10pt">
                            <b>Sakit saat menstruasi</b>
                            <div style="padding: 5pt">
                                <input type="checkbox" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002717') checked @endif @endforeach /> Tidak
                                <input type="checkbox" style="margin-left: 1cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002718') checked @endif @endforeach /> Ya
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="100%" colspan="4" style="padding: 5pt 10pt">
                            <div style="padding: 5pt">
                                <label>Menikah yang ke</label>
                                <input type="text" style="width: 15%; margin-left: 0.3cm;" value="@{{ item.obj[21002719] }}" /> kali
                                <label style="margin-left: 1cm;">Lama pernikahan</label>
                                <input type="text" style="width: 15%; margin-left: 0.3cm;" value="@{{ item.obj[21002720] }}" /> bulan/tahun
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="100%" colspan="4" style="padding: 5pt 10pt">
                            <div style="padding: 5pt">
                                <label>Kontrasepsi yang pernah digunakan</label>
                                <input type="text" style="width: 25%; margin-left: 0.3cm;" value="@{{ item.obj[21002721] }}" />
                                <label style="margin-left: 1cm;">Lamanya</label>
                                <input type="text" style="width: 20%; margin-left: 0.3cm;" value="@{{ item.obj[21002722] }}" />
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="100%" colspan="4" style="padding: 5pt 10pt">
                            <b>B. Riwayat Imunisasi</b>
                            <div style="padding: 5pt">
                                <input type="checkbox" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002723') checked @endif @endforeach /> TT 1
                                <input type="checkbox" style="margin-left: 1cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002724') checked @endif @endforeach /> TT 2
                            </div>
                        </td>
                    </tr>
                </table>

                <table width="100%" style="margin-top: 10px;">
                    <tr>
                        <td width="50%" colspan="4">
                            <font style="font-size: 11pt;font-weight: bold;" color="#000000" ><b>4. DATA KEHAMILAN SEKARANG</b></font>
                        </td>
                    </tr>
                    <tr>
                        <td width="100%" colspan="4" style="padding: 5pt 10pt">
                            <div style="padding: 5pt">
                                <label>G</label>
                                <input type="text" style="width: 10%; margin-left: 0.3cm;" value="@{{ item.obj[21002725] }}" />
                                <label style="margin-left: 0.5cm;">P</label>
                                <input type="text" style="width: 10%; margin-left: 0.3cm;" value="@{{ item.obj[21002726] }}" />
                                <label style="margin-left: 0.5cm;">A</label>
                                <input type="text" style="width: 10%; margin-left: 0.3cm;" value="@{{ item.obj[21002727] }}" />
                                <label style="margin-left: 0.5cm;">Hari Pertama Haid Terakhir</label>
                                <input type="text" style="width: 20%; margin-left: 0.3cm;" value="@{{ item.obj[21002728] }}" />
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="100%" colspan="4" style="padding: 5pt 10pt">
                            <b>Tanggal harapan lahir</b>
                            <div style="padding: 5pt">
                                <input type="text" style="width: 40%;" value="@{{ item.obj[21002729] }}" />
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="100%" colspan="4" style="padding: 5pt 10pt">
                            <b>Keluhan yang dirasakan selama hamil ini</b>
                            <div style="padding: 5pt">
                                <input type="text" style="width: 95%;" value="@{{ item.obj[21002730] }}" />
                            </div>
                        </td>
                    </tr>
                </table>

                <table width="100%" style="margin-top: 10px;">
                    <tr>
                        <td width="50%" colspan="4">
                            <font style="font-size: 11pt;font-weight: bold;" color="#000000" ><b>5. PEMERIKSAAN FISIK</b></font>
                        </td>
                    </tr>
                    <tr>
                        <td width="100%" colspan="4" style="padding: 5pt 10pt">
                            <div style="padding: 5pt">
                                <label>Keadaan Umum</label>
                                <input type="text" style="width: 25%; margin-left: 0.3cm;" value="@{{ item.obj[21002731] }}" />
                                <label style="margin-left: 1cm;">Kesadaran</label>
                                <input type="text" style="width: 25%; margin-left: 0.3cm;" value="@{{ item.obj[21002732] }}" />
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="100%" colspan="4" style="padding: 5pt 10pt">
                            <div style="padding: 5pt">
                                <label>Berat Badan</label>
                                <input type="text" style="width: 20%; margin-left: 0.3cm;" value="@{{ item.obj[21002733] }}" /> kg
                                <label style="margin-left: 1cm;">Tinggi Badan</label>
                                <input type="text" style="width: 20%; margin-left: 0.3cm;" value="@{{ item.obj[21002734] }}" /> cm
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="100%" colspan="4" style="padding: 5pt 10pt">
                            <div style="padding: 5pt">
                                <label>Suhu</label>
                                <input type="text" style="width: 20%; margin-left: 0.3cm;" value="@{{ item.obj[21002735] }}" /> °C
                                <label style="margin-left: 1cm;">Tekanan Darah</label>
                                <input type="text" style="width: 20%; margin-left: 0.3cm;" value="@{{ item.obj[21002736] }}" /> mmHg
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="100%" colspan="4" style="padding: 5pt 10pt">
                            <div style="padding: 5pt">
                                <label>Nadi</label>
                                <input type="text" style="width: 15%; margin-left: 0.3cm;" value="@{{ item.obj[21002737] }}" /> x/menit
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002738') checked @endif @endforeach /> Teratur
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002739') checked @endif @endforeach /> Tidak Teratur
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="100%" colspan="4" style="padding: 5pt 10pt">
                            <div style="padding: 5pt">
                                <label>Pernafasan</label>
                                <input type="text" style="width: 15%; margin-left: 0.3cm;" value="@{{ item.obj[21002740] }}" /> x/menit
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002741') checked @endif @endforeach /> Teratur
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002742') checked @endif @endforeach /> Tidak Teratur
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="100%" colspan="4" style="padding: 5pt 10pt">
                            <div style="padding: 5pt">
                                <b>Nyeri</b>
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002743') checked @endif @endforeach /> Tidak
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002744') checked @endif @endforeach /> Ya, Score
                                <input type="text" style="width: 15%; margin-left: 0.3cm;" value="@{{ item.obj[21002745] }}" disabled />
                            </div>
                        </td>
                    </tr>
                </table>

                <table width="100%" style="margin-top: 10px;">
                    <tr>
                        <td width="50%" colspan="4">
                            <font style="font-size: 11pt;font-weight: bold;" color="#000000"><b>6. STATUS BIO - PSIKO - SOSIO - SPIRITUAL - KULTURAL</b></font>
                        </td>
                    </tr>
                    <tr>
                        <td width="100%" colspan="4" style="padding: 5pt 10pt">
                            <b>Status Biologis</b>
                            <div style="padding: 5pt">
                                <label>Pola Makan: </label>
                                <input type="text" style="width: 20%; margin-left: 0.3cm;" value="@{{ item.obj[21002746] }}" disabled /> x/hari
                            </div>
                            <div style="padding: 5pt">
                                <label>Pola Minum: </label>
                                <input type="text" style="width: 20%; margin-left: 0.3cm;" value="@{{ item.obj[21002747] }}" disabled /> cc/hari
                            </div>
                            <div style="padding: 5pt">
                                <label>BAK: </label>
                                <input type="text" style="width: 20%; margin-left: 0.3cm;" value="@{{ item.obj[21002748] }}" disabled /> x/hari
                            </div>
                            <div style="padding: 5pt">
                                <label>BAB: </label>
                                <input type="text" style="width: 20%; margin-left: 0.3cm;" value="@{{ item.obj[21002749] }}" disabled /> x/hari
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="100%" colspan="4" style="padding: 5pt 10pt">
                            <b>Status Psikologis</b>
                            <div style="padding: 5pt">
                                <input type="checkbox" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002750') checked @endif @endforeach /> Cemas
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002751') checked @endif @endforeach /> Takut
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002752') checked @endif @endforeach /> Marah
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002753') checked @endif @endforeach /> Sedih
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002754') checked @endif @endforeach /> Kecendrungan bunuh diri
                            </div>
                            <div style="padding: 5pt">
                                <label>dll: </label>
                                <input type="text" style="width: 85%; margin-left: 0.3cm;" value="@{{ item.obj[21002755] }}" disabled />
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="100%" colspan="4" style="padding: 5pt 10pt">
                            <b>Status Sosial</b>
                            <div style="padding: 5pt">
                                <label><b>Pekerjaan</b></label><br>
                                <input type="checkbox" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002756') checked @endif @endforeach /> Wiraswasta
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002757') checked @endif @endforeach /> Pegawai Negeri
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002758') checked @endif @endforeach /> Pegawai Swasta
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002759') checked @endif @endforeach /> Tidak Bekerja
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002760') checked @endif @endforeach /> Siswa/Mahasiswa
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002761') checked @endif @endforeach /> Pensiun
                            </div>
                            <div style="padding: 5pt">
                                <label>Alamat Rumah: </label>
                                <input type="text" style="width: 85%; margin-left: 0.3cm;" value="@{{ item.obj[21002762] }}" disabled />
                            </div>
                            <div style="padding: 5pt">
                                <label>No. Telepon: </label>
                                <input type="text" style="width: 40%; margin-left: 0.3cm;" value="@{{ item.obj[21002763] }}" disabled />
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="100%" colspan="4" style="padding: 5pt 10pt">
                            <b>Spiritual dan Kultural</b>
                            <div style="padding: 5pt">
                                <label><b>Agama</b></label><br>
                                <input type="checkbox" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002764') checked @endif @endforeach /> Islam
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002765') checked @endif @endforeach /> Protestan
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002766') checked @endif @endforeach /> Katolik
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002767') checked @endif @endforeach /> Hindu
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002768') checked @endif @endforeach /> Budha
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002769') checked @endif @endforeach /> Konghucu
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002770') checked @endif @endforeach /> Lain-lain
                                <input type="text" style="width: 20%; margin-left: 0.3cm;" value="@{{ item.obj[21002771] }}" disabled />
                            </div>
                            <div style="padding: 5pt">
                                <label><b>Kegiatan Spiritual dan nilai-nilai kepercayaan yang dilakukan</b></label><br>
                                <input type="checkbox" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002772') checked @endif @endforeach /> Ada, Sebutkan
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002773') checked @endif @endforeach /> Tidak ada
                                <input type="text" style="width: 50%; margin-left: 0.5cm;" value="@{{ item.obj[21002774] }}" disabled />
                            </div>
                            <div style="padding: 5pt">
                                <label><b>Bahasa sehari-hari</b></label><br>
                                <input type="checkbox" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002775') checked @endif @endforeach /> Indonesia
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002776') checked @endif @endforeach /> Inggris
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002777') checked @endif @endforeach /> Daerah
                                <label style="margin-left: 0.5cm;">Lain-lain: </label>
                                <input type="text" style="width: 30%; margin-left: 0.3cm;" value="@{{ item.obj[21002778] }}" disabled />
                            </div>
                        </td>
                    </tr>
                </table>

                <table width="100%" style="margin-top: 10px;">
                    <tr>
                        <td width="50%" colspan="4">
                            <font style="font-size: 11pt;font-weight: bold;" color="#000000"><b>7. STATUS EKONOMI</b></font>
                        </td>
                    </tr>
                    <tr>
                        <td width="100%" colspan="4" style="padding: 5pt 10pt">
                            <div style="padding: 5pt">
                                <label><b>Cara Pembayaran</b></label><br>
                                <input type="checkbox" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002779') checked @endif @endforeach /> Pribadi
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002780') checked @endif @endforeach /> Perusahaan
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002781') checked @endif @endforeach /> Asuransi
                            </div>
                            <div style="padding: 5pt">
                                <label><b>Pendapatan</b></label><br>
                                <input type="checkbox" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002782') checked @endif @endforeach /> &lt; UMR /rp
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002783') checked @endif @endforeach /> UMR s/d 5 juta rp
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002784') checked @endif @endforeach /> 5 s/d 10 juta rp
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002785') checked @endif @endforeach /> 10 s/d 15 juta rp
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002786') checked @endif @endforeach /> &gt; 15 juta rp
                            </div>
                        </td>
                    </tr>
                </table>

                <table width="100%" style="margin-top: 10px;">
                    <tr>
                        <td width="50%" colspan="4">
                            <font style="font-size: 11pt;font-weight: bold;" color="#000000"><b>8. RIWAYAT ALERGI</b></font>
                        </td>
                    </tr>
                    <tr>
                        <td width="100%" colspan="4" style="padding: 5pt 10pt">
                            <div style="padding: 5pt">
                                <input type="checkbox" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002787') checked @endif @endforeach /> Ya, Sebutkan:
                                <input type="checkbox" style="margin-left: 1cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002788') checked @endif @endforeach /> Tidak
                            </div>
                            <div style="padding: 5pt">
                                <input type="text" style="width: 95%;" value="@{{ item.obj[21002789] }}" disabled />
                            </div>
                            <div style="padding: 5pt">
                                <input type="checkbox" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002790') checked @endif @endforeach /> Sticker tanda alergi dipasang (warna merah)
                            </div>
                            <div style="padding: 5pt">
                                <input type="text" style="width: 95%;" value="@{{ item.obj[21002791] }}" disabled />
                            </div>
                        </td>
                    </tr>
                </table>

                <table width="100%" style="margin-top: 10px;">
                    <tr>
                        <td width="50%" colspan="4">
                            <font style="font-size: 11pt;font-weight: bold;" color="#000000"><b>9. ASSESMEN NYERI</b></font>
                        </td>
                    </tr>
                    <tr>
                        <td width="100%" colspan="4" style="padding: 5pt 10pt; text-align: center;">
                            <b>INTENSITAS NYERI "WONG BAKER FACES PAIN RATING SCALE" DAN "NUMERIC RATING SCALE (NRS)" <br> UNTUK ANAK > 6 TAHUN DAN DEWASA</b>
                        </td>
                    </tr>
                    <tr>
                        <td width="100%" colspan="4" style="padding: 5pt 10pt">
                            <div style="padding: 5pt">
                                <input type="checkbox" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002792') checked @endif @endforeach /> 0 = Tidak ada Nyeri<br>
                                <input type="checkbox" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002793') checked @endif @endforeach /> 1 - 3 = Nyeri Ringan<br>
                                <input type="checkbox" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002794') checked @endif @endforeach /> 4 - 6 = Nyeri Sedang<br>
                                <input type="checkbox" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002795') checked @endif @endforeach /> 7 - 10 = Nyeri Berat
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="100%" colspan="4" style="padding: 5pt 10pt">
                            <b>Penilaian Nyeri</b>
                            <div style="padding: 5pt">
                                <label><b>Provokatif</b></label><br>
                                <input type="checkbox" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002796') checked @endif @endforeach /> Ruda paksa
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002797') checked @endif @endforeach /> Benturan
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002798') checked @endif @endforeach /> Sayatan
                                <label style="margin-left: 0.5cm;">dll</label>
                                <input type="text" style="width: 30%; margin-left: 0.3cm;" value="@{{ item.obj[21002799] }}" disabled />
                            </div>
                            <div style="padding: 5pt">
                                <label><b>Quality</b></label><br>
                                <input type="checkbox" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002800') checked @endif @endforeach /> Tertusuk
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002801') checked @endif @endforeach /> Tertekan/tertindih
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002802') checked @endif @endforeach /> Diiris-iris
                                <label style="margin-left: 0.5cm;">dll</label>
                                <input type="text" style="width: 30%; margin-left: 0.3cm;" value="@{{ item.obj[21002803] }}" disabled />
                            </div>
                            <div style="padding: 5pt">
                                <label><b>Regional</b></label><br>
                                <input type="checkbox" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002804') checked @endif @endforeach /> Lokasi
                                <input type="text" style="width: 40%; margin-left: 0.3cm;" value="@{{ item.obj[21002805] }}" disabled />
                            </div>
                            <div style="padding: 5pt">
                                <label><b>Menjalar</b></label><br>
                                <input type="checkbox" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002806') checked @endif @endforeach /> Tidak
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002807') checked @endif @endforeach /> Ya, Ke :
                                <input type="text" style="width: 40%; margin-left: 0.3cm;" value="@{{ item.obj[21002808] }}" disabled />
                            </div>
                            <div style="padding: 5pt">
                                <label><b>Scala</b></label><br>
                                <input type="text" style="width: 30%; margin-left: 0.3cm;" value="@{{ item.obj[21002809] }}" disabled />
                            </div>
                            <div style="padding: 5pt">
                                <label><b>Time</b></label><br>
                                <input type="checkbox" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002810') checked @endif @endforeach /> Jarang
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002811') checked @endif @endforeach /> Hilang timbul
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002812') checked @endif @endforeach /> Terus menerus
                            </div>
                        </td>
                    </tr>
                </table>

                <table width="100%" style="margin-top: 10px;">
                    <tr>
                        <td width="50%" colspan="4">
                            <font style="font-size: 11pt;font-weight: bold;" color="#000000"><b>10. RESIKO JATUH GET UP AND GO</b></font>
                        </td>
                    </tr>
                    <tr>
                        <td width="100%" colspan="4" style="padding: 10pt">
                            <table style="width:100%; border: 1px solid black; border-collapse: collapse;">
                                <tr>
                                    <th colspan="4" style="border: 1px solid black; padding: 5px; font-weight: bold; text-align: center;">PENGKAJIAN</th>
                                </tr>
                                <tr>
                                    <th style="border: 1px solid black; padding: 5px; font-weight: bold;">No</th>
                                    <th style="border: 1px solid black; padding: 5px; font-weight: bold;">Penilaian/Pengkajian</th>
                                    <th style="border: 1px solid black; padding: 5px; font-weight: bold;">Ya</th>
                                    <th style="border: 1px solid black; padding: 5px; font-weight: bold;">Tidak</th>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid black; padding: 5px; text-align: center;">A</td>
                                    <td style="border: 1px solid black; padding: 5px;">Cara Bejalan Pasien (salah satu atau lebih) <br> 1. Tidak seimbang/sempoyongan/limbung <br> 2. Jalan dengan menggunakan alat bantu (kruk, tripot, kursi roda, orang lain)</td>
                                    <td style="border: 1px solid black; padding: 5px; text-align: center;">
                                        <input type="checkbox" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002813') checked @endif @endforeach />
                                    </td>
                                    <td style="border: 1px solid black; padding: 5px; text-align: center;">
                                        <input type="checkbox" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002814') checked @endif @endforeach />
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid black; padding: 5px; text-align: center;">B</td>
                                    <td style="border: 1px solid black; padding: 5px;">Menopang saat akan duduk : tampak memegang pinggiran kursi atau meja/benda lain sebagai penopang saat akan duduk.</td>
                                    <td style="border: 1px solid black; padding: 5px; text-align: center;">
                                        <input type="checkbox" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002815') checked @endif @endforeach />
                                    </td>
                                    <td style="border: 1px solid black; padding: 5px; text-align: center;">
                                        <input type="checkbox" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002816') checked @endif @endforeach />
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td width="100%" colspan="4" style="padding: 10pt">
                            <table style="width:100%; border: 1px solid black; border-collapse: collapse;">
                                <tr>
                                    <th colspan="4" style="border: 1px solid black; padding: 5px; font-weight: bold; text-align: center;">HASIL</th>
                                </tr>
                                <tr>
                                    <th style="border: 1px solid black; padding: 5px; font-weight: bold; text-align: center;">No</th>
                                    <th style="border: 1px solid black; padding: 5px; font-weight: bold;">Hasil</th>
                                    <th style="border: 1px solid black; padding: 5px; font-weight: bold;">Penilaian/Pengkajian</th>
                                    <th style="border: 1px solid black; padding: 5px; font-weight: bold;">Keterangan</th>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid black; padding: 5px; text-align: center;">1.</td>
                                    <td style="border: 1px solid black; padding: 5px;">Tidak Beresiko</td>
                                    <td style="border: 1px solid black; padding: 5px;">Tidak ditemukan A & B</td>
                                    <td style="border: 1px solid black; padding: 5px;">
                                        <textarea style="width: 95%; height: 60px;">@{{ item.obj[21002817] }}</textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid black; padding: 5px; text-align: center;">2.</td>
                                    <td style="border: 1px solid black; padding: 5px;">Risiko Rendah</td>
                                    <td style="border: 1px solid black; padding: 5px;">Ditemukan salah satu A/B</td>
                                    <td style="border: 1px solid black; padding: 5px;">
                                        <textarea style="width: 95%; height: 60px;">@{{ item.obj[21002818] }}</textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid black; padding: 5px; text-align: center;">3.</td>
                                    <td style="border: 1px solid black; padding: 5px;">Risiko tinggi</td>
                                    <td style="border: 1px solid black; padding: 5px;">Ditemukan A & B</td>
                                    <td style="border: 1px solid black; padding: 5px;">
                                        <textarea style="width: 95%; height: 60px;">@{{ item.obj[21002819] }}</textarea>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td width="100%" colspan="4" style="padding: 10pt">
                            <table style="width:100%; border: 1px solid black; border-collapse: collapse;">
                                <tr>
                                    <th colspan="6" style="border: 1px solid black; padding: 5px; font-weight: bold; text-align: center;">TINDAKAN</th>
                                </tr>
                                <tr>
                                    <th style="border: 1px solid black; padding: 5px; font-weight: bold; text-align: center;">No</th>
                                    <th style="border: 1px solid black; padding: 5px; font-weight: bold;">Hasil</th>
                                    <th style="border: 1px solid black; padding: 5px; font-weight: bold;">Tindakan</th>
                                    <th style="border: 1px solid black; padding: 5px; font-weight: bold;">Ya</th>
                                    <th style="border: 1px solid black; padding: 5px; font-weight: bold;">Tidak</th>
                                    <th style="border: 1px solid black; padding: 5px; font-weight: bold;">Nama Petugas</th>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid black; padding: 5px; text-align: center;">1.</td>
                                    <td style="border: 1px solid black; padding: 5px;">Tidak beresiko</td>
                                    <td style="border: 1px solid black; padding: 5px;">Tidak ada tindakan</td>
                                    <td style="border: 1px solid black; padding: 5px; text-align: center;">
                                        <input type="checkbox" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002820') checked @endif @endforeach />
                                    </td>
                                    <td style="border: 1px solid black; padding: 5px; text-align: center;">
                                        <input type="checkbox" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002821') checked @endif @endforeach />
                                    </td>
                                    <td style="border: 1px solid black; padding: 5px;">
                                        <input type="text" style="width: 95%;" value="@{{ item.obj[21002822] }}" disabled />
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid black; padding: 5px; text-align: center;">2.</td>
                                    <td style="border: 1px solid black; padding: 5px;">Resiko rendah</td>
                                    <td style="border: 1px solid black; padding: 5px;">Edukasi</td>
                                    <td style="border: 1px solid black; padding: 5px; text-align: center;">
                                        <input type="checkbox" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002823') checked @endif @endforeach />
                                    </td>
                                    <td style="border: 1px solid black; padding: 5px; text-align: center;">
                                        <input type="checkbox" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002824') checked @endif @endforeach />
                                    </td>
                                    <td style="border: 1px solid black; padding: 5px;">
                                        <input type="text" style="width: 95%;" value="@{{ item.obj[21002825] }}" disabled />
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid black; padding: 5px; text-align: center;">3.</td>
                                    <td style="border: 1px solid black; padding: 5px;">Resiko tinggi</td>
                                    <td style="border: 1px solid black; padding: 5px;">Pasang pita/stiker resiko jatuh</td>
                                    <td style="border: 1px solid black; padding: 5px; text-align: center;">
                                        <input type="checkbox" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002826') checked @endif @endforeach />
                                    </td>
                                    <td style="border: 1px solid black; padding: 5px; text-align: center;">
                                        <input type="checkbox" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002827') checked @endif @endforeach />
                                    </td>
                                    <td style="border: 1px solid black; padding: 5px;">
                                        <input type="text" style="width: 95%;" value="@{{ item.obj[21002828] }}" disabled />
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid black; padding: 5px; text-align: center;"></td>
                                    <td style="border: 1px solid black; padding: 5px;"></td>
                                    <td style="border: 1px solid black; padding: 5px;">Edukasi</td>
                                    <td style="border: 1px solid black; padding: 5px; text-align: center;">
                                        <input type="checkbox" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002829') checked @endif @endforeach />
                                    </td>
                                    <td style="border: 1px solid black; padding: 5px; text-align: center;">
                                        <input type="checkbox" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002830') checked @endif @endforeach />
                                    </td>
                                    <td style="border: 1px solid black; padding: 5px;">
                                        <input type="text" style="width: 95%;" value="@{{ item.obj[21002831] }}" disabled />
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>

                <table width="100%" style="margin-top: 10px;">
                    <tr>
                        <td width="50%" colspan="4">
                            <font style="font-size: 11pt;font-weight: bold;" color="#000000"><b>11. ASSESMEN FUNGSIONAL</b></font>
                        </td>
                    </tr>
                    <tr>
                        <td width="100%" colspan="4" style="padding: 5pt 10pt">
                            <b>Sensorik</b>
                            <div style="padding: 5pt">
                                <label><b>Penglihatan</b></label><br>
                                <input type="checkbox" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002832') checked @endif @endforeach /> Normal
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002833') checked @endif @endforeach /> Kabur
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002834') checked @endif @endforeach /> Kacamata
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002835') checked @endif @endforeach /> Lensa kotak
                            </div>
                            <div style="padding: 5pt">
                                <label><b>Penciuman</b></label><br>
                                <input type="checkbox" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002836') checked @endif @endforeach /> Normal
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002837') checked @endif @endforeach /> Tidak
                            </div>
                            <div style="padding: 5pt">
                                <label><b>Pendengaran</b></label><br>
                                <input type="checkbox" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002838') checked @endif @endforeach /> Normal
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002839') checked @endif @endforeach /> Tuli kanan/kiri
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002840') checked @endif @endforeach /> Alat bantu dengan kanan/kiri
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="100%" colspan="4" style="padding: 5pt 10pt">
                            <b>Kognitif</b>
                            <div style="padding: 5pt">
                                <input type="checkbox" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002841') checked @endif @endforeach /> Orientasi penuh
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002842') checked @endif @endforeach /> Pelupa
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002843') checked @endif @endforeach /> Bingung
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002844') checked @endif @endforeach /> Tidak dapat dimengerti
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="100%" colspan="4" style="padding: 5pt 10pt">
                            <b>Motorik</b>
                            <div style="padding: 5pt">
                                <label><b>Aktifitas sehari-hari</b></label><br>
                                <input type="checkbox" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002845') checked @endif @endforeach /> Mandiri
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002846') checked @endif @endforeach /> Bantuan Minimal
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002847') checked @endif @endforeach /> Bantuan Sebagian
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002848') checked @endif @endforeach /> Ketergantungan Total
                            </div>
                            <div style="padding: 5pt">
                                <label><b>Berjalan</b></label><br>
                                <input type="checkbox" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002849') checked @endif @endforeach /> Tidak ada kesulitan
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002850') checked @endif @endforeach /> Perlu bantuan
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002851') checked @endif @endforeach /> Sering Jatuh
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002852') checked @endif @endforeach /> Kelumpuhan
                            </div>
                        </td>
                    </tr>
                </table>

                <table width="100%" style="margin-top: 10px;">
                    <tr>
                        <td width="50%" colspan="4">
                            <font style="font-size: 11pt;font-weight: bold;" color="#000000"><b>12. RESIKO NUTRISIONAL</b></font>
                        </td>
                    </tr>
                    <tr>
                        <td width="100%" colspan="4" style="padding: 5pt 10pt">
                            <b>Malnutrition Screening Tools (MST)</b>
                        </td>
                    </tr>
                    <tr>
                        <td width="100%" colspan="4" style="padding: 10pt">
                            <table style="width:100%; border: 1px solid black; border-collapse: collapse;">
                                <tr>
                                    <th style="border: 1px solid black; padding: 5px; font-weight: bold; text-align: center; width: 5%;">NO</th>
                                    <th style="border: 1px solid black; padding: 5px; font-weight: bold; text-align: center; width: 75%;">PARAMETER</th>
                                    <th style="border: 1px solid black; padding: 5px; font-weight: bold; text-align: center; width: 20%;">POIN</th>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid black; padding: 5px; text-align: center; vertical-align: top;">1</td>
                                    <td style="border: 1px solid black; padding: 5px; vertical-align: top;">
                                        <b>Apakah ada penurunan berat badan yang tidak diinginkan selama 6 bulan terakhir ?</b><br><br>
                                        <input type="checkbox" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002853') checked @endif @endforeach /> a. Tidak<br>
                                        <input type="checkbox" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002854') checked @endif @endforeach /> b. Tidak Yakin<br>
                                        <label>(Tanda: ukuran baju atau celana menjadi lebih longgar)</label><br>
                                        <input type="checkbox" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002855') checked @endif @endforeach /> c. Ya, 1-5 Kg<br>
                                        <input type="checkbox" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002856') checked @endif @endforeach /> 6-10 Kg<br>
                                        <input type="checkbox" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002857') checked @endif @endforeach /> 11-15 Kg<br>
                                        <input type="checkbox" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002858') checked @endif @endforeach /> &gt; 15 Kg
                                    </td>
                                    <td style="border: 1px solid black; padding: 5px; vertical-align: top;">
                                        0<br>
                                        2<br><br>
                                        1<br>
                                        2<br>
                                        3<br>
                                        4
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid black; padding: 5px; text-align: center; vertical-align: top;">2</td>
                                    <td style="border: 1px solid black; padding: 5px; vertical-align: top;">
                                        <b>Apakah asupan makan menurun yang dikarenakan adanya penurunan nafsu makan/kesulitan menerima makan ?</b><br><br>
                                        <input type="checkbox" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002859') checked @endif @endforeach /> Tidak<br>
                                        <input type="checkbox" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002860') checked @endif @endforeach /> Tidak yakin
                                    </td>
                                    <td style="border: 1px solid black; padding: 5px; vertical-align: top;">
                                        <br><br>
                                        0<br>
                                        1
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td width="100%" colspan="4" style="padding: 5pt 10pt">
                            <div style="text-align: right;">
                                <label><b>TOTAL SCORE: </b></label>
                                <input type="text" style="width: 15%; margin-left: 0.3cm;" value="@{{ item.obj[21002861] }}" disabled />
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="100%" colspan="4" style="padding: 5pt 10pt">
                            <b>Keterangan</b>
                            <div style="padding: 5pt">
                                <label>Skor 0 - 1 : tidak beresiko</label><br>
                                <label>Skor 2 - 3 : berisiko (Asuhan Gizi oleh Dietisen)</label><br>
                                <label>Skor &gt; 4 : Malnutrisi (Asuhan Gizi oleh Dietisen)</label>
                            </div>
                        </td>
                    </tr>
                </table>

                <table width="100%" style="margin-top: 10px;">
                    <tr>
                        <td width="50%" colspan="4">
                            <font style="font-size: 11pt;font-weight: bold;" color="#000000"><b>13. KEBUTUHAN EDUKASI</b></font>
                        </td>
                    </tr>
                    <tr>
                        <td width="100%" colspan="4" style="padding: 5pt 10pt">
                            <b>A. Terdapat hambatan dalam pembelajaran</b>
                            <div style="padding: 5pt">
                                <input type="checkbox" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002862') checked @endif @endforeach /> Tidak
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002863') checked @endif @endforeach /> Ya
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="100%" colspan="4" style="padding: 5pt 10pt">
                            <b>B. Jika ya, sebutkan hambatan (bisa dipilih lebih dari satu) :</b>
                            <div style="padding: 5pt">
                                <input type="checkbox" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002864') checked @endif @endforeach /> Pendengaran
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002865') checked @endif @endforeach /> Penglihatan
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002866') checked @endif @endforeach /> Kognitif
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002867') checked @endif @endforeach /> Fisik
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002868') checked @endif @endforeach /> Budaya<br>
                                <input type="checkbox" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002869') checked @endif @endforeach /> Agama
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002870') checked @endif @endforeach /> Emosi
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002871') checked @endif @endforeach /> Bahasa
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002872') checked @endif @endforeach /> Lain-lain
                                <input type="text" style="width: 30%; margin-left: 0.3cm;" value="@{{ item.obj[21002873] }}" disabled />
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="100%" colspan="4" style="padding: 5pt 10pt">
                            <b>C. Dibutuhkan penerjemah</b>
                            <div style="padding: 5pt">
                                <input type="checkbox" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002874') checked @endif @endforeach /> Tidak
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002875') checked @endif @endforeach /> Ya, jika ya sebutkan
                                <input type="text" style="width: 40%; margin-left: 0.3cm;" value="@{{ item.obj[21002876] }}" disabled />
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="100%" colspan="4" style="padding: 5pt 10pt">
                            <b>D. Kebutuhan pembelajaran pasien (pilih topik pembelajaran pada kotak yang tersedia)</b>
                            <div style="padding: 5pt">
                                <input type="checkbox" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002877') checked @endif @endforeach /> Diagnosa & Manajemen
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002878') checked @endif @endforeach /> Obat-obtan
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002879') checked @endif @endforeach /> Perawatan Luka<br>
                                <input type="checkbox" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002880') checked @endif @endforeach /> Rehabilitasi
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002881') checked @endif @endforeach /> Manajemen nyeri
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002882') checked @endif @endforeach /> Diet dan nutrisi<br>
                                <input type="checkbox" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002883') checked @endif @endforeach /> Lain-lainnya
                                <input type="text" style="width: 50%; margin-left: 0.3cm;" value="@{{ item.obj[21002884] }}" disabled />
                            </div>
                        </td>
                    </tr>
                </table>

                <table width="100%" style="margin-top: 10px;">
                    <tr>
                        <td width="50%" colspan="4">
                            <font style="font-size: 11pt;font-weight: bold;" color="#000000"><b>14. PERENCANAAN PULANG</b></font>
                        </td>
                    </tr>
                    <tr>
                        <td width="100%" colspan="4" style="padding: 5pt 10pt">
                            <b>Kriteria Discharge Planning :</b>
                            <div style="padding: 5pt">
                                <label><b>A. Umur &gt; 65</b></label><br>
                                <input type="checkbox" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002885') checked @endif @endforeach /> Ya
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002886') checked @endif @endforeach /> Tidak
                            </div>
                            <div style="padding: 5pt">
                                <label><b>B. Keterbatasan mobilitas</b></label><br>
                                <input type="checkbox" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002887') checked @endif @endforeach /> Ya
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002888') checked @endif @endforeach /> Tidak
                            </div>
                            <div style="padding: 5pt">
                                <label><b>C. Perawatan atau pengobatan lanjutan</b></label><br>
                                <input type="checkbox" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002889') checked @endif @endforeach /> Ya
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002890') checked @endif @endforeach /> Tidak
                            </div>
                            <div style="padding: 5pt">
                                <label><b>D. Bantuan untuk melakukan aktifitas sehari - hari</b></label><br>
                                <input type="checkbox" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002891') checked @endif @endforeach /> Ya
                                <input type="checkbox" style="margin-left: 0.5cm;" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002892') checked @endif @endforeach /> Tidak
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="100%" colspan="4" style="padding: 5pt 10pt">
                            <b>Bila salah satu jawaban 'Ya' dari kriteria perencanaan pulang diatas, maka akan dilanjutkan dengan perencanaan pulang sebagai berikut :</b>
                            <div style="padding: 5pt">
                                <input type="checkbox" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002893') checked @endif @endforeach /> Perawatan diri (mandi, BAB, BAK)<br>
                                <input type="checkbox" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002894') checked @endif @endforeach /> Latihan fisik lanjutan<br>
                                <input type="checkbox" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002895') checked @endif @endforeach /> Pemantauan pemberian obat<br>
                                <input type="checkbox" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002896') checked @endif @endforeach /> Pendampingan tenaga khusus di rumah<br>
                                <input type="checkbox" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002897') checked @endif @endforeach /> Pemantauan diet<br>
                                <input type="checkbox" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002898') checked @endif @endforeach /> Bantuan medis/perawat di rumah (home care)<br>
                                <input type="checkbox" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002899') checked @endif @endforeach /> Perawatan luka<br>
                                <input type="checkbox" @foreach ($res['d'] as $item) @if ($item->emrdfk == '21002900') checked @endif @endforeach /> Bantuan untuk melakukan aktifitas fisik (kursi roda, alat bantu jalan)
                            </div>
                        </td>
                    </tr>
                </table>

                <table width="100%" style="margin-top: 10px;">
                    <tr>
                        <td width="50%" colspan="4">
                            <font style="font-size: 11pt;font-weight: bold;" color="#000000"><b>15. RIWAYAT PENGGUNAAN OBAT</b></font>
                        </td>
                    </tr>
                    <tr>
                        <td width="100%" colspan="4" style="padding: 5pt 10pt">
                            <textarea style="width: 95%; height: 80px;">@{{ item.obj[21002901] }}</textarea>
                        </td>
                    </tr>
                </table>

                <table width="100%" style="margin-top: 10px;">
                    <tr>
                        <td width="50%" colspan="4">
                            <font style="font-size: 11pt;font-weight: bold;" color="#000000"><b>16. DIAGNOSA KEPERAWATAN</b></font>
                        </td>
                    </tr>
                    <tr>
                        <td width="100%" colspan="4" style="padding: 5pt 10pt">
                            <textarea style="width: 95%; height: 80px;">@{{ item.obj[21002902] }}</textarea>
                        </td>
                    </tr>
                </table>

                <table width="100%" style="margin-top: 10px;">
                    <tr>
                        <td width="50%" colspan="4">
                            <font style="font-size: 11pt;font-weight: bold;" color="#000000"><b>17. RENCANA ASUHAN KEPERAWATAN</b></font>
                        </td>
                    </tr>
                    <tr>
                        <td width="100%" colspan="4" style="padding: 5pt 10pt">
                            <textarea style="width: 95%; height: 80px;">@{{ item.obj[21002903] }}</textarea>
                        </td>
                    </tr>
                </table>

                <table width="100%" style="margin-top: 10px;">
                    <tr>
                        <td width="50%" colspan="4">
                            <font style="font-size: 11pt;font-weight: bold;" color="#000000"><b>18. TINDAKAN</b></font>
                        </td>
                    </tr>
                    <tr>
                        <td width="100%" colspan="4" style="padding: 10pt">
                            <table style="width:100%; border: 1px solid black; border-collapse: collapse;">
                                <tr>
                                    <th style="border: 1px solid black; padding: 5px; font-weight: bold; width: 180px;">Pukul</th>
                                    <th style="border: 1px solid black; padding: 5px; font-weight: bold;">Tindakan</th>
                                    <th style="border: 1px solid black; padding: 5px; font-weight: bold; width: 200px;">Nama</th>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid black; padding: 5px;">@{{ item.obj[21002904] }}</td>
                                    <td style="border: 1px solid black; padding: 5px;">
                                        <input type="text" style="width: 95%;" value="@{{ item.obj[21002905] }}" disabled />
                                    </td>
                                    <td style="border: 1px solid black; padding: 5px;">
                                        <input type="text" style="width: 95%;" value="@{{ item.obj[21002906] }}" disabled />
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid black; padding: 5px;">@{{ item.obj[21002907] }}</td>
                                    <td style="border: 1px solid black; padding: 5px;">
                                        <input type="text" style="width: 95%;" value="@{{ item.obj[21002908] }}" disabled />
                                    </td>
                                    <td style="border: 1px solid black; padding: 5px;">
                                        <input type="text" style="width: 95%;" value="@{{ item.obj[21002909] }}" disabled />
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid black; padding: 5px;">@{{ item.obj[21002910] }}</td>
                                    <td style="border: 1px solid black; padding: 5px;">
                                        <input type="text" style="width: 95%;" value="@{{ item.obj[21002911] }}" disabled />
                                    </td>
                                    <td style="border: 1px solid black; padding: 5px;">
                                        <input type="text" style="width: 95%;" value="@{{ item.obj[21002912] }}" disabled />
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid black; padding: 5px;">@{{ item.obj[21002913] }}</td>
                                    <td style="border: 1px solid black; padding: 5px;">
                                        <input type="text" style="width: 95%;" value="@{{ item.obj[21002914] }}" disabled />
                                    </td>
                                    <td style="border: 1px solid black; padding: 5px;">
                                        <input type="text" style="width: 95%;" value="@{{ item.obj[21002915] }}" disabled />
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>

                <table width="100%" style="margin-top: 10px;">
                    <tr>
                        <td width="50%" colspan="4">
                            <font style="font-size: 11pt;font-weight: bold;" color="#000000"><b>Yang Melakukan Pengkajian</b></font>
                        </td>
                    </tr>
                    <tr>
                        <td width="100%" colspan="4" style="padding: 5pt 10pt">
                            <div style="padding: 5pt">
                                <label><b>Tanggal & Jam</b></label><br>
                                <label>@{{ item.obj[21002916] }}</label>
                            </div>
                            <div style="padding: 5pt">
                                <label><b>Nama Perawat</b></label><br>
                                <input type="text" style="width: 50%;" value="@{{ item.obj[21002917] }}" disabled />
                            </div>
                        </td>
                    </tr>
                </table>
</section>
</body>

<script type="text/javascript">
    var baseUrl =
            {!! json_encode(url('/')) !!}
    var angular = angular.module('angularApp', [], function ($interpolateProvider) {
            $interpolateProvider.startSymbol('@{{');
            $interpolateProvider.endSymbol('}}');
        }).factory('httpService', function ($http, $q) {
            return {
                get: function (url) {
                    // $("#showLoading").show()
                    var deffer = $q.defer();
                    $http.get(baseUrl + '/' + url, {
                        headers: {
                            'Content-Type': 'application/json',
                        }
                    }).then(function successCallback(response) {
                        deffer.resolve(response);
                        // $("#showLoading").hide()
                    }, function errorCallback(response) {
                        deffer.reject(response);
                        // $("#showLoading").hide()
                    });
                    return deffer.promise;
                },
            }
        })

    angular.controller('cetakAsesmenAwalKeperawatanIGDCtrl', function ($scope, $http, httpService) {
        $scope.item = {
            obj: []
        }
        var dataLoad = {!! json_encode($res['d'] )!!};
        for (var i = 0; i <= dataLoad.length - 1; i++) {

            if (dataLoad[i].type == "textbox") {
                $scope.item.obj[dataLoad[i].emrdfk] = dataLoad[i].value
            }

            if (dataLoad[i].type == "textbox2") {
                $scope.item.obj[dataLoad[i].emrdfk] = dataLoad[i].value
            }

            if (dataLoad[i].type == "checkbox") {
                var chekedd = false
                if (dataLoad[i].value == '1') {
                    var chekedd = true
                }
                $scope.item.obj[dataLoad[i].emrdfk] = chekedd

            }
            if (dataLoad[i].type == "JalanNafasBebasCheckbox") {
                var chekedd = false
                if (dataLoad[i].value == '1') {
                    var chekedd = true
                }
                $scope.item.obj[dataLoad[i].emrdfk] = chekedd

            }

            if (dataLoad[i].type == "radio") {
                $scope.item.obj[dataLoad[i].emrdfk] = dataLoad[i].value
            }

            if (dataLoad[i].type == "datetime") {
                $scope.item.obj[dataLoad[i].emrdfk] = dataLoad[i].value
            }
            if (dataLoad[i].type == "time") {
                $scope.item.obj[dataLoad[i].emrdfk] = dataLoad[i].value
            }
            if (dataLoad[i].type == "date") {
                $scope.item.obj[dataLoad[i].emrdfk] = dataLoad[i].value
            }

            if (dataLoad[i].type == "checkboxtextbox") {
                $scope.item.obj[dataLoad[i].emrdfk] = dataLoad[i].value
                $scope.item.obj2[dataLoad[i].emrdfk] = true
            }
            if (dataLoad[i].type == "textarea") {
                $scope.item.obj[dataLoad[i].emrdfk] = dataLoad[i].value
            }
            if (dataLoad[i].type == "combobox") {
                var str = dataLoad[i].value
                var res = str.split("~");
                $scope.item.obj[dataLoad[i].emrdfk] = res[1]

            }
            if (dataLoad[i].type == "combobox2") {
                var str = dataLoad[i].value
                var res = str.split("~");
                $scope.item.obj[dataLoad[i].emrdfk] = res[1]

            }

            if (dataLoad[i].emrdfk == '3100553' ) {
                $scope.tglemr = dataLoad[i].value
            }

            if (dataLoad[i].emrdfk == '3100511' ) {
                $scope.tglLahir = dataLoad[i].value
            }

            if (dataLoad[i].emrdfk == '3100518' ) {
                $scope.tglLahirPasien = dataLoad[i].value
            }



        }
    })

    $(document).ready(function () {
        window.print();
    });



</script>
</body>

</html>
