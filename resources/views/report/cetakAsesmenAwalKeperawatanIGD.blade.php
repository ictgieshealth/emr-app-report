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
                    <b>Nuangan</b>
                    <p style="font-size: 11pt; display: inline; margin: 1.4cm;"><b>: {!! $res['d'][0]->namaruangan !!}</b></p>
                </td>


            </tbody>
        </table>

        <td style="vertical-align: text-top">

                <table width="100%">
                    <tr>
                        <td width="50%" colspan="4">
                            <font style="font-size: 11pt;font-weight: bold" color="#000000" ><b>Asesmen Awal Keperawatan I G D</b></font>
                        </td>
                    </tr>
                    <tr>
                        <td width="50%" colspan="4" height="10"></td>
                    </tr>
                    <tr>
                        <td width="24%"><font style="font-size: 11pt;" color="#000000" >Tanggal dan Jam Datang</font></td>
                        <td width="1%"><font style="font-size: 11pt;" color="#000000" >:</font></td>
                        <td width="75%"><font style="font-size: 11pt;" color="#000000" >@{{ item.obj[21003003] }}</font></td>

                    </tr>
                    <tr>
                        <td width="24%"><font style="font-size: 11pt;" color="#000000" >Tanggal dan Jam Pengkajian</font></td>
                        <td width="1%"><font style="font-size: 11pt;" color="#000000" >:</font></td>
                        <td width="75%"><font style="font-size: 11pt;" color="#000000" >@{{ item.obj[21003004] }}</font></td>

                    </tr>
                    <tr>
                        <td width="24%"><font style="font-size: 11pt;" color="#000000" >Masuk Ruangan</font></td>
                        <td width="1%"><font style="font-size: 11pt;" color="#000000" >:</font></td>
                        <td width="75%"><font style="font-size: 11pt;" color="#000000" >@{{ item.obj[21003005] }}</font></td>

                    </tr>
                    <tr>
                        <td width="24%"><font style="font-size: 11pt;" color="#000000" >Anamnesa</font></td>
                        <td width="1%"><font style="font-size: 11pt;" color="#000000" >:</font></td>
                        <td width=75%>
                        <span >
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003007') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003007]"/><font style="font-size: 11pt;" color="#000000">Auto Anamnesa

                            <input style="margin-left: 1cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003008') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003008]"/><font style="font-size: 11pt;" color="#000000">Allo Anamnesa

                            <input style="margin-left: 1cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003009') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003009]"/><font style="font-size: 11pt;" color="#000000">Keluarga

                            <input style="margin-left: 1cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003010') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003010]"/><font style="font-size: 11pt;" color="#000000">Penerjemah Bahasa <br>

                                <div style="display: flex; align-items: center;">
                                    <input type="checkbox"
                                        @foreach ($res['d'] as $item)
                                        @if ($item->emrdfk == '21003011') checked @endif
                                        @endforeach
                                        ng-model="item.obj[21003011]" /> <font style="font-size: 11pt; color: #000000;">Orang Lain</font>
                                    <label style="margin-left: 1cm;">Nama</label>
                                    <label >:</label><br>
                                    <input style="margin-left: 0.2cm; width: 4cm;" type="textbox" ng-model="item.obj[21003012]"
                                        @if ($item->emrdfk == '21003012') value="" @endif>
                                    <label style="margin-left: 1cm; display: flex; align-items: center;">Hubungan</label>
                                    <label >:</label><br>
                                    <input style="margin-left: 0.2cm; width: 4cm;" type="textbox" ng-model="item.obj[21003013]"
                                        @if ($item->emrdfk == '21003013') value="" @endif>
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
                                @if ($item->emrdfk == '21003015') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003015]"/><font style="font-size: 11pt;" color="#000000">Jalan Tanpa Bantuan

                            <input style="margin-left: 1cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003016') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003016]"/><font style="font-size: 11pt;" color="#000000">Jalan Dengan Bantuan <br>

                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003017') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003017]"/><font style="font-size: 11pt;" color="#000000">Tempat Tidur Dorong

                            <input style="margin-left: 0.9cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003018') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003018]"/><font style="font-size: 11pt;" color="#000000">

                            <input style="width: 30%;" type="textbox" ng-model="item.obj[21003019]" @if ($item->emrdfk == '21003019') value="Your Text Value" @endif>

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
                                @if ($item->emrdfk == '21003021') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003021]"/><font style="font-size: 11pt;" color="#000000">Non Rujukan

                            <input style="margin-left: 0.9cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003022') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003022]"/><font style="font-size: 11pt;" color="#000000">Rujukan

                            <input style="width: 30%;" type="textbox" ng-model="item.obj[21003023]" @if ($item->emrdfk == '21003023') value="Your Text Value" @endif>

                        </span>
                        </td>
                    </tr>
                </table>

                <table>
                    <tbody>
                    <tr>
                        <td width="50%" style="text-align: justify;border: 1px solid black;vertical-align: top;padding: 5px;">
                            <p style="font-size: 11pt;">
                                <b>Alasan Masuk :</b> <p style="font-size: 10pt;">
                                @{{ item.obj[21003024] }}
                                </p>
                            </p>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <table width="100%" style="margin-top: 5px;">
                    <tr>
                        <td width="50%" colspan="4">
                            <font style="font-size: 11pt;font-weight: bold;" color="#000000" ><b>1. STATUS FISIK</b></font>
                        </td>
                    </tr>
                <!-- Tanda Pital -->
                <table>
                    <tbody>
                    <tr>
                        <td width="10%" style="text-align: justify; font-size: 11pt;">
                            <p>
                                <b>Tanda Pital</b> <br>
                                Tekanan Darah
                                 <br>
                                Nadi
                                 <br>
                                Rr
                                 <br>
                                Suhu
                                 <br>
                                Pernafasan
                            </p>
                        </td>
                        <td width="20%" style="text-align: justify; font-size: 11pt;">
                            <p>
                            <br>
                                 : @{{ item.obj[21003026] }} mmHg<br>
                                 : @{{ item.obj[21003027] }} x/min<br>
                                 : @{{ item.obj[21003028] }} x/min<br>
                                 : @{{ item.obj[21003029] }} C<br>
                                 : @{{ item.obj[21003030] }} x/min<br>

                            </p>
                        </td>

                        <td width="5%" style="text-align: justify; font-size: 11pt;">
                            <p>
                                Spo 2
                                 <br>
                                Ews
                                 <br>
                                Bb
                                 <br>
                                Tb
                            </p>
                        </td>
                        <td width="20%" style="text-align: justify; font-size: 11pt;">
                            <p>
                                : @{{ item.obj[21003031] }} <br>
                                : @{{ item.obj[21003032] }} <br>
                                : @{{ item.obj[21003033] }} Kg<br>
                                : @{{ item.obj[21003034] }} Cm
                            </p>
                        </td>
                    </tr>
                    </tbody>
                </table>
                </table>

                <!-- Kesadaran -->
                <table>
                    <tbody>
                    <tr>
                        <td width="8%" style="text-align: justify; font-size: 11pt;">
                            <p>
                                <b>Kesadaran</b> <br>
                                GCS: E <br>
                                V <br>
                                M <br>
                                Skor
                            </p>
                        </td>
                        <td width="12%" style="text-align: justify; font-size: 11pt;">
                            <p>
                            <br>
                                 : @{{ item.obj[21003036] }}<br>
                                 : @{{ item.obj[21003037] }}<br>
                                 : @{{ item.obj[21003038] }}<br>
                                 : @{{ item.obj[21009267] }}<br>
                            </p>
                        </td>
                        <td width="13%" style="text-align: justify; font-size: 11pt;">
                            <p>
                                <br>
                                Reflek Cahaya : Ka <br>
                                Reflek Cahaya : Ki <br>
                                Ukuran Pupil : ka  <br>
                                Ukuran Pupil : ka
                            </p>
                        </td>
                        <td width="20%" style="text-align: justify; font-size: 11pt;">
                            <p>
                                <br>
                                : @{{ item.obj[21003039] }}<br>
                                : @{{ item.obj[21003040] }}<br>
                                : @{{ item.obj[21003041] }}<br>
                                : @{{ item.obj[21003042] }}<br>
                            </p>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <!-- Sirkulasi -->
                <table width="100%">
                    <tr>
                        <td width="16%"><font style="font-size: 11pt;" color="#000000" >Sirkulasi</font></td>
                        <td width="1%"><font style="font-size: 11pt;" color="#000000" >:</font></td>
                        <td width=75%>
                        <span >
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003044') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003044]"/><font style="font-size: 11pt;" color="#000000">Normal

                            <input style="margin-left: 1cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003045') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003045]"/><font style="font-size: 11pt;" color="#000000">Pusing

                            <input style="margin-left: 1cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003046') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003046]"/><font style="font-size: 11pt;" color="#000000">Sakit Kepala

                            <input style="margin-left: 1cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003047') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003047]"/><font style="font-size: 11pt;" color="#000000">Sycope <br>

                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003048') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003048]"/><font style="font-size: 11pt;" color="#000000">Palpitasi

                            <input style="margin-left: 0.8cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003049') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003049]"/><font style="font-size: 11pt;" color="#000000">Cyanosis

                            <input style="margin-left: 0.7cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003050') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003050]"/><font style="font-size: 11pt;" color="#000000">Nyeri Dada

                            <input style="margin-left: 1.2cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003051') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003051]"/><font style="font-size: 11pt;" color="#000000">Nyeri Ditungkai/Betis
                        </span>
                        </td>
                    </tr>
                </table>

                <!-- Capilari refill -->
                <table width="100%">
                    <tr>
                        <td width="16%"><font style="font-size: 11pt;" color="#000000" >Capilari Refill</font></td>
                        <td width="1%"><font style="font-size: 11pt;" color="#000000" >:</font></td>
                        <td width=75%>
                        <span >
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003053') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003053]"/><font style="font-size: 11pt;" color="#000000">Baik

                            <input style="margin-left: 1.2cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003054') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003054]"/><font style="font-size: 11pt;" color="#000000">Lambat

                            <input style="margin-left: 0.5cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003055') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003055]"/><font style="font-size: 11pt;" color="#000000"><=2 Detik

                            <input style="margin-left: 0.5cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003056') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003056]"/><font style="font-size: 11pt;" color="#000000">>=2 Detik
                        </span>
                        </td>
                    </tr>
                </table>

                <!-- Ekstermitas -->
                <table width="100%">
                    <tr>
                        <td width="16%"><font style="font-size: 11pt;" color="#000000" >Ekstermitas</font></td>
                        <td width="1%"><font style="font-size: 11pt;" color="#000000" >:</font></td>
                        <td width=75%>
                        <span >
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003058') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003058]"/><font style="font-size: 11pt;" color="#000000">Hangat

                            <input style="margin-left: 0.7cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003059') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003059]"/><font style="font-size: 11pt;" color="#000000">Dingin

                            <input style="margin-left: 0.7cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003060') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003060]"/><font style="font-size: 11pt;" color="#000000">Basah

                            <input style="margin-left: 0.7cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003061') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003061]"/><font style="font-size: 11pt;" color="#000000">Kering

                            <input style="margin-left: 0.7cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003062') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003062]"/><font style="font-size: 11pt;" color="#000000">Dll ex: Faktur, Combustio
                        </span>
                        </td>
                    </tr>
                </table>

                <!-- Kulit -->
                <table width="100%">
                    <tr>
                        <td width="16%"><font style="font-size: 11pt;" color="#000000" >Kulit</font></td>
                        <td width="1%"><font style="font-size: 11pt;" color="#000000" >:</font></td>
                        <td width=75%>
                        <span >
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003064') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003064]"/><font style="font-size: 11pt;" color="#000000">Utuh

                            <input style="margin-left: 1.1cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003065') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003065]"/><font style="font-size: 11pt;" color="#000000">Memar

                            <input style="margin-left: 0.6cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003066') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003066]"/><font style="font-size: 11pt;" color="#000000">Kering

                            <input style="margin-left: 0.7cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003067') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003067]"/><font style="font-size: 11pt;" color="#000000">Lembab

                            <input style="margin-left: 0.4cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003068') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003068]"/><font style="font-size: 11pt;" color="#000000">Bersisik <br>

                                <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003069') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003069]"/><font style="font-size: 11pt;" color="#000000">Petechiae

                            <input style="margin-left: 0.3cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003070') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003070]"/><font style="font-size: 11pt;" color="#000000">Pucat

                            <input style="margin-left: 0.8cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003071') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003071]"/><font style="font-size: 11pt;" color="#000000">Ikterik

                            <input style="margin-left: 0.7cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003072') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003072]"/><font style="font-size: 11pt;" color="#000000">Kemerahan
                        </span>
                        </td>
                    </tr>
                </table>

                <!-- Luka Gangren -->
                <table width="100%">
                    <tr>
                        <td width="16%"><font style="font-size: 11pt;" color="#000000" >Luka Gangren</font></td>
                        <td width="1%"><font style="font-size: 11pt;" color="#000000" >:</font></td>
                        <td width=75%>
                        <span >
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003074') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003074]"/><font style="font-size: 11pt;" color="#000000">Baik

                                <input style="margin-left: 1.2cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003075') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003075]"/><font style="font-size: 11pt;" color="#000000">Ada, Lokasi

                            <input style="width: 30%;" type="textbox" ng-model="item.obj[21003076]" @if ($item->emrdfk == '21003076') value="Your Text Value" @endif>
                        </span>
                        </td>
                    </tr>
                </table>

                <!-- Turgor -->
                <table width="100%">
                    <tr>
                        <td width="16%"><font style="font-size: 11pt;" color="#000000" >Turgor</font></td>
                        <td width="1%"><font style="font-size: 11pt;" color="#000000" >:</font></td>
                        <td width=75%>
                        <span >
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003078') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003078]"/><font style="font-size: 11pt;" color="#000000">Baik

                                <input style="margin-left: 1.2cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003079') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003079]"/><font style="font-size: 11pt;" color="#000000">Sedang

                                <input style="margin-left: 1.2cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003080') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003080]"/><font style="font-size: 11pt;" color="#000000">Jelek
                        </span>
                        </td>
                    </tr>
                </table>

                <!-- Obsteri dan ginkelogi -->
                <table width="100%">
                    <tr>
                        <label style="font-size: 11pt;"><b>Obsteri dan Ginkelogi</b></label>
                        <td width="5%"><font style="font-size: 11pt;" color="#000000" >Hamil</font></td>
                        <td width="1%"><font style="font-size: 11pt;" color="#000000" >:</font></td>
                        <td width=75%>
                        <span >
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003082') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003082]"/><font style="font-size: 11pt;" color="#000000">Ya

                                <input style="margin-left: 0.3cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003083') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003083]"/><font style="font-size: 11pt;" color="#000000">Tidak

                                <input style="margin-left: 1.2cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003085') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003085]"/><font style="font-size: 11pt;" color="#000000">Keluhan Menstrubasi

                                <tr>
                                    <td width="24%"><font style="font-size: 11pt;" color="#000000" >HpHt</font></td>
                                    <td width="1%"><font style="font-size: 11pt;" color="#000000" >:</font></td>
                                    <td width="75%"><font style="font-size: 11pt;" color="#000000" >@{{ item.obj[21003084] }}</font></td>
                                </tr>
                        </span>
                        </td>
                    </tr>
                </table>

                <table width="100%" style="margin-top: 8px;">
                    <tr>
                        <td width="50%" colspan="4">
                            <font style="font-size: 11pt;font-weight: bold;" color="#000000" ><b>2. STATUS BIO - PSIKO - SOSIO - SPIRITUAL - KULTURAL</b></font>
                        </td>
                    </tr>
                <!-- Status Biologis -->
                <table>
                    <tbody>
                    <tr>
                        <td width="10%" style="text-align: justify; font-size: 11pt;">
                            <p>
                                <b>Status Biologis</b> <br>
                                Pola Makan
                                 <br>
                                Pola Minum
                                 <br>
                                BAK
                                 <br>
                                BAB
                            </p>
                        </td>
                        <td width="15%" style="text-align: justify; font-size: 11pt;">
                            <p>
                            <br>
                                 : @{{ item.obj[21003087] }} x/hari<br>
                                 : @{{ item.obj[21003089] }} cc/hari<br>
                                 : @{{ item.obj[21003091] }} x/hari<br>
                                 : @{{ item.obj[21003094] }} x/hari<br>
                            </p>
                        </td>

                        <td width="6%" style="text-align: justify; font-size: 11pt;">
                            <p>
                                <br>
                                Terakhir Jam
                                 <br>
                                Terakhir Jam
                                 <br>
                                Terakhir Jam
                                 <br>
                                Terakhir Jam
                            </p>
                        </td>
                        <td width="20%" style="text-align: justify; font-size: 11pt;">
                            <p>
                                <br>
                                : @{{ item.obj[21003088] }} <br>
                                : @{{ item.obj[210030890] }} <br>
                                : @{{ item.obj[21003092] }}
                                  Warna : @{{ item.obj[21003093] }} <br>
                                : @{{ item.obj[21003095] }}
                            </p>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <!-- Status Psikologis -->
                <table>
                    <tbody>
                    <tr>
                        <td width="24%"><font style="font-size: 11pt;" color="#000000" >Status Psikologis</font></td>
                        <td width="1%"><font style="font-size: 11pt;" color="#000000" >:</font></td>
                        <td width=75%>
                        <span >
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003097') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003097]"/><font style="font-size: 11pt;" color="#000000">Cemas

                            <input style="margin-left: 1cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003098') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003098]"/><font style="font-size: 11pt;" color="#000000">Takut

                            <input style="margin-left: 1cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003099') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003099]"/><font style="font-size: 11pt;" color="#000000">Marah

                            <input style="margin-left: 1cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003100') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003100]"/><font style="font-size: 11pt;" color="#000000"> Sedih <br>

                                <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003101') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003101]"/><font style="font-size: 11pt;" color="#000000">Kecenderungan Bunuh Diri

                                <label style="margin-left: 1cm;" for="">Lain-lain</label>
                            <input style="width: 30%;" type="textbox" ng-model="item.obj[21003102]" @if ($item->emrdfk == '21003102') value="Your Text Value" @endif>

                        </span>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <!-- Status Sosial -->
                <table>
                    <tbody>
                    <tr>
                    <label style="font-size: 11pt;"><b>Status Sosial</b></label>
                        <td width="5%"><font style="font-size: 11pt;" color="#000000" >Pekerjaan</font></td>
                        <td width="1%"><font style="font-size: 11pt;" color="#000000" >:</font></td>
                        <td width=75%>
                        <span >
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003105') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003105]"/><font style="font-size: 11pt;" color="#000000">Wiraswasta

                            <input style="margin-left: 0.5cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003106') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003106]"/><font style="font-size: 11pt;" color="#000000">Pegawai Negeri

                            <input style="margin-left: 0.5cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003107') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003107]"/><font style="font-size: 11pt;" color="#000000">Pegawai Swasta

                            <input style="margin-left: 0.5cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003108') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003108]"/><font style="font-size: 11pt;" color="#000000"> Tidak Bekerja <br>

                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003109') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003109]"/><font style="font-size: 11pt;" color="#000000">Siswa/Mahasiswa

                                <input style="margin-left: 1cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003110') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003110]"/><font style="font-size: 11pt;" color="#000000">Pensiun <br>

                            <label for="">Alamat Rumah</label>
                            <input style="width: 30%;" type="textbox" ng-model="item.obj[21003111]" @if ($item->emrdfk == '21003111') value="Your Text Value" @endif>

                            <label style="margin-left: 1cm;" for="">No. Telepon</label>
                            <input style="width: 30%;" type="textbox" ng-model="item.obj[21003112]" @if ($item->emrdfk == '21003112') value="Your Text Value" @endif>

                        </span>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <!-- Spriritual dan Kulturasi -->
                <table>
                    <tbody>
                    <tr>
                    <label style="font-size: 11pt;"><b>Spiritual dan Kulturasi</b></label>
                        <td width="8%"><font style="font-size: 11pt;" color="#000000" >Agama</font></td>
                        <td width="1%"><font style="font-size: 11pt;" color="#000000" >:</font></td>
                        <td width=75%>
                        <span >
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003115') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003115]"/><font style="font-size: 11pt;" color="#000000">Islam

                            <input style="margin-left: 0.6cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003116') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003116]"/><font style="font-size: 11pt;" color="#000000">Protestan

                            <input style="margin-left: 0.6cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003116') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003116]"/><font style="font-size: 11pt;" color="#000000">Katolik

                            <input style="margin-left: 0.6cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003117') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003117]"/><font style="font-size: 11pt;" color="#000000"> Hindu

                            <input style="margin-left: 0.6cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003119') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003119]"/><font style="font-size: 11pt;" color="#000000">Budha

                            <input style="margin-left: 0.6cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003120') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003120]"/><font style="font-size: 11pt;" color="#000000">Konghucu <br>

                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003121') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003121]"/><font style="font-size: 11pt;" color="#000000">Lain-lain

                            <input style="width: 30%;" type="textbox" ng-model="item.obj[21003122]" @if ($item->emrdfk == '21003122') value="Your Text Value" @endif>

                        </span>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <!-- Kegiatan Spiritual dan nilai nilai kepercayaan yang dilakukan -->
                <table>
                    <tbody>
                    <tr>
                    <label width="55%"><font style="font-size: 11pt;" color="#000000" >Kegiatan Spiritual dan nilai nilai kepercayaan yang dilakukan :</font></label>
                        <td width=5%>
                        <span >
                            <input  type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003124') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003124]"/><font style="font-size: 11pt;" color="#000000">Tidak Ada

                            <input style="margin-left: 2cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003125') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003125]"/><font style="font-size: 11pt;" color="#000000">Ada, Sebutkan

                            <input style="width: 59%;" type="textbox" ng-model="item.obj[21003126]" @if ($item->emrdfk == '21003126') value="Your Text Value" @endif>

                        </span>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <!-- Bahasa Sehari-hari -->
                <table>
                    <tbody>
                    <tr>
                    <label width="55%"><font style="font-size: 11pt;" color="#000000" >Bahasa Sehari-hari :</font></label>
                        <td width=5%>
                        <span >
                            <input  type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003128') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003128]"/><font style="font-size: 11pt;" color="#000000">Indonesia

                            <input style="margin-left: 2cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003129') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003129]"/><font style="font-size: 11pt;" color="#000000">Inggris

                            <input style="margin-left: 2cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003130') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003130]"/><font style="font-size: 11pt;" color="#000000">Daerah

                                <label style="margin-left: 2cm;" for="">Lain-lain</label>
                            <input style="width: 27%;" type="textbox" ng-model="item.obj[21003131]" @if ($item->emrdfk == '21003131') value="Your Text Value" @endif>

                        </span>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <!-- Pendidikan -->
                <table>
                    <tbody>
                    <tr>
                    <label width="55%"><font style="font-size: 11pt; margin-top: 10px;" color="#000000" ><b>3. PENDIDIKAN</b></font></label>
                        <td width=5%>
                        <span >
                            <input  type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003133') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003133]"/><font style="font-size: 11pt;" color="#000000">Tidak Sekolah

                            <input style="margin-left: 1cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003134') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003134]"/><font style="font-size: 11pt;" color="#000000">SD

                            <input style="margin-left: 1cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003135') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003135]"/><font style="font-size: 11pt;" color="#000000">SMP

                            <input style="margin-left: 1cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003137') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003137]"/><font style="font-size: 11pt;" color="#000000">SMA
                            <input style="margin-left: 1cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003138') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003138]"/><font style="font-size: 11pt;" color="#000000">Diploma

                            <input style="margin-left: 1cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003139') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003139]"/><font style="font-size: 11pt;" color="#000000">Sarjana

                        </span>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <!-- Peerjaan -->
                <table>
                    <tbody>
                    <tr>
                    <td width="5%"><font style="font-size: 11pt;" color="#000000" >Pekerjaan</font></td>
                    <td width="1%"><font style="font-size: 11pt;" color="#000000" > :</font></td>
                        <td width=75%>
                        <span >
                            <input  type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003140') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003140]"/><font style="font-size: 11pt;" color="#000000">Bekerja

                            <input style="margin-left: 1cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003141') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003141]"/><font style="font-size: 11pt;" color="#000000">Tidak Bekerja
                        </span>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <!-- Riwayat Kesehatan -->
                <br>
                <table>
                    <tbody>
                    <tr>
                    <label width="55%"><font style="font-size: 11pt;" color="#000000" ><b>4. RIWAYAT KESEHATAN</b></font></label>
                        <td width=5%>
                            <p style="text-align: justify; font-size: 10pt;">
                                <b>Riwayat Penyakit Sekarang :</b> <p style="text-align: justify;vertical-align: top;padding: 5px; font-size: 10pt;">
                                @{{ item.obj[21003142] }}
                                </p>
                            </p>
                            <p style="text-align: justify; font-size: 10pt;">
                                <b>Riwayat Penyakit Dahulu :</b> <p style="text-align: justify;vertical-align: top;padding: 5px; font-size: 10pt;">
                                @{{ item.obj[21003143] }}
                                </p>
                            </p>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <!-- Riwayat Alergi -->
                <br>
                <table>
                    <tbody>
                    <tr>
                    <label width="55%"><font style="font-size: 11pt;" color="#000000" ><b>5. RIWAYAT ALERGI</b></font></label>
                        <td width=5%>
                        <span >
                            <input  type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003146') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003146]"/><font style="font-size: 11pt;" color="#000000">Tidak

                            <input style="margin-left: 2cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003145') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003145]"/><font style="font-size: 11pt;" color="#000000">Ya, Sebutkan

                            <input style="width: 65%;" type="textbox" ng-model="item.obj[21003147]" @if ($item->emrdfk == '21003147') value="Your Text Value" @endif>

                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003148') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003148]"/><font style="font-size: 11pt;" color="#000000">Sticker tanda alergi dipasang (warna merah)

                            <input style="width: 65%;" type="textbox" ng-model="item.obj[21003149]" @if ($item->emrdfk == '21003149') value="Your Text Value" @endif>

                        </span>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <!-- Assesmen Nyeri -->
                <br>
                <table>
                    <tbody>
                    <tr>
                    <label width="55%"><font style="font-size: 11pt;" color="#000000" ><b>6. ASSESMEN NYERI</b></font></label>
                        <td width=5%>
                        <span >
                            <input  type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003150') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003150]"/><font style="font-size: 11pt;" color="#000000">0 = Tidak Ada Nyeri

                            <input style="margin-left: 0.5cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003151') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003151]"/><font style="font-size: 11pt;" color="#000000">1 - 3 = Nyeri Ringan

                                <input style="margin-left: 0.5cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003152') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003152]"/><font style="font-size: 11pt;" color="#000000">4 - 6 = Nyeri Ringan

                                <input style="margin-left: 0.5cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003153') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003153]"/><font style="font-size: 11pt;" color="#000000">7 - 10 = Nyeri Berat

                        </span>
                        </td>
                    </tr>
                    <tr>
                        <td width=5%>
                            <p style="text-align: justify; font-size: 10pt;">
                                <b>SCALA FLACC Untuk Anak < 6 Tahun :</b>
                            </p>
                        </td>
                    </tr>

                    </tbody>
                    <table  style="width:100%;color: #4c5356;border: 1px solid black;">
                            <tr>
                                <th style="border: 1px solid black; width: 15%;font-weight: bold; text-align: center;">Pengkajian</th>
                                <th style="border: 1px solid black;font-weight: bold;text-align: center;">0</th>
                                <th style="border: 1px solid black;font-weight: bold;text-align: center;">1</th>
                                <th style="border: 1px solid black;font-weight: bold;text-align: center;">2</th>
                                <th style="border: 1px solid black;font-weight: bold;text-align: center;">Nilai</th>
                                    </tr>
                            <tr>
                                <td style="border: 1px solid black;">Wajah</td>

                                <td style="border: 1px solid black;">
                                <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003155') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003155]"/> Tersenyum/tidak ada ekspresi khusus
                                </td>

                                <td style="border: 1px solid black;">
                                <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003156') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003156]"/> Terkadang merintis/menarik diri
                                </td>

                                <td style="border: 1px solid black;">
                                <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003157') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003157]"/> sering menggetarkan dagu mengatupkan rahang
                                </td>

                                <td style="border: 1px solid black;">
                                <input style="width: 90%;text-align: center;" type="text" ng-model="item.obj[21003158]" @if ($item->emrdfk == '21003158') value="Your Text Value" @endif>
                                </td>
                            </tr>
                            <tr>
                            <td style="border: 1px solid black;">Kaki</td>
                                <td style="border: 1px solid black;">
                                    <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003160') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003160]"/> Gerakan normal/relaksasi
                                </td>

                                <td style="border: 1px solid black;">
                                <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003161') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003161]"/> Tidak tenang/tegang
                                </td>

                                <td style="border: 1px solid black;">
                                <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003162') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003162]"/> Kaki dibuat menendang/menarik diri
                                </td>

                                <td style="border: 1px solid black;">
                                <input style="width: 90%;text-align: center;" type="text" ng-model="item.obj[21003163]" @if ($item->emrdfk == '21003163') value="Your Text Value" @endif>
                                </td>
                            </tr>
                            <tr>
                            <td style="border: 1px solid black;">Aktivitas</td>
                                <td style="border: 1px solid black;">
                                    <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003165') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003165]"/> Tidur posisi normal, mudah bergerak
                                </td>

                                <td style="border: 1px solid black;">
                                    <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003166') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003166]"/> Gerakan menggeliat, berguling, kaku
                                </td>

                                <td style="border: 1px solid black;">
                                    <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003167') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003167]"/> Melengkungkan punggung/kaki/menghentak
                                </td>

                                <td style="border: 1px solid black;">
                                <input style="width: 90%;text-align: center;" type="text" ng-model="item.obj[21003168]" @if ($item->emrdfk == '21003168') value="Your Text Value" @endif>
                                </td>
                            </tr>
                            <tr>
                            <td style="border: 1px solid black;">Menangis</td>
                                <td style="border: 1px solid black;">
                                <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003170') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003170]"/> Tidak menangis (bangun/tidur)
                                </td>

                                <td style="border: 1px solid black;">
                                <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003171') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003171]"/> Menggerang, merengek-rengek
                                </td>

                                <td style="border: 1px solid black;">
                                    <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003172') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003172]"/> Menangis terus menerus, terhisak, menjerit

                                <td style="border: 1px solid black;">
                                <input style="width: 90%;text-align: center;" type="text" ng-model="item.obj[21003173]" @if ($item->emrdfk == '21003173') value="Your Text Value" @endif>
                                </td>
                            </tr>
                            <tr>
                            <td style="border: 1px solid black;">Bersuara</td>
                                <td style="border: 1px solid black;">
                                    <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003175') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003175]"/> Bersuara, normal, tenang
                                </td>

                                <td style="border: 1px solid black;">
                                    <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003176') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003176]"/> Tenang bila dipeluk, digendong atau diajak bicara
                                </td>

                                <td style="border: 1px solid black;">
                                    <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003177') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003177]"/> Kaki dibuat menendang/menarik diri
                                </td>

                                <td style="border: 1px solid black;">
                                <input style="width: 90%;text-align: center;" type="text" ng-model="item.obj[21003178]" @if ($item->emrdfk == '21003178') value="Your Text Value" @endif>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" style="border: 1px solid black;">Total Skor</td>
                                <td colspan="3" style="border: 1px solid black;">
                                <input style="text-align: center;width: 98%; " type="text" ng-model="item.obj[21003179]" @if ($item->emrdfk == '21003179') value="Your Text Value" @endif>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="5">
                                    <div style="display: flex; justify-content: space-between;">
                                        <p>0 = Nyaman</p>
                                        <p>1 - 3 = Kurang Nyaman</p>
                                        <p>4 - 6 = Nyeri Sedang</p>
                                        <p>7 - 10 = Nyeri Berat</p>
                                    </div>
                                </td>
                            </tr>
                            </tr>
                            </th>
                        </table>

                        <tr>
                    </tr>
                </table>

                <!-- Penilaian Nyeri -->
                <br>
                <table>
                    <tbody>
                    <tr>
                    <label style="font-size: 11pt;"><b>Penilaian Nyeri</b></label>
                        <td width="8%"><font style="font-size: 11pt;" color="#000000" >Provokatif</font></td>
                        <td width="1%"><font style="font-size: 11pt;" color="#000000" >:</font></td>
                        <td width=75%>
                        <span >
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003186') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003186]"/><font style="font-size: 11pt;" color="#000000">Ruda Paksa

                            <input style="margin-left: 0.6cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003187') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003187]"/><font style="font-size: 11pt;" color="#000000">Benturan

                            <input style="margin-left: 0.6cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003188') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003188]"/><font style="font-size: 11pt;" color="#000000">Sayatan

                            <label  style="margin-left: 0.6cm;">Dll</label>
                            <input style="width: 30%;" type="textbox" ng-model="item.obj[21003189]" @if ($item->emrdfk == '21003189') value="Your Text Value" @endif>
                        </span>
                        </td>
                    </tr>

                    <tr>
                        <td width="8%"><font style="font-size: 11pt;" color="#000000" >Quality</font></td>
                        <td width="1%"><font style="font-size: 11pt;" color="#000000" >:</font></td>
                        <td width=75%>
                        <span >
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003191') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003191]"/><font style="font-size: 11pt;" color="#000000">Tertusuk

                            <input style="margin-left: 0.6cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003192') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003192]"/><font style="font-size: 11pt;" color="#000000">Tertekan/tertindih

                            <input style="margin-left: 0.6cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003193') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003193]"/><font style="font-size: 11pt;" color="#000000">Diiris-iris

                            <label  style="margin-left: 0.6cm;">Dll</label>
                            <input style="width: 30%;" type="textbox" ng-model="item.obj[21003194]" @if ($item->emrdfk == '21003194') value="Your Text Value" @endif>
                        </span>
                        </td>
                    </tr>

                    <tr>
                        <td width="8%"><font style="font-size: 11pt;" color="#000000" >Time</font></td>
                        <td width="1%"><font style="font-size: 11pt;" color="#000000" >:</font></td>
                        <td width=75%>
                        <span >
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003205') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003205]"/><font style="font-size: 11pt;" color="#000000">Jarang

                            <input style="margin-left: 0.6cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003206') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003206]"/><font style="font-size: 11pt;" color="#000000">Hilang timbul

                            <input style="margin-left: 0.6cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003207') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003207]"/><font style="font-size: 11pt;" color="#000000">Terus menerus
                        </span>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <!-- Resiko Jatuh -->
                <br>
                <table>
                    <tbody>
                    <tr>
                    <label width="55%"><font style="font-size: 11pt;" color="#000000" ><b>7. RESIKO JATUH</b></font></label>
                    </tr>
                    </tbody>
                    <table  style="width:100%;color: #4c5356;border: 1px solid black; margin-top:10px;">
                    <tr>
                        <th colspan="5">
                            <b>PENGKAJIAN SKOR JATUH PASIEN ANAK</b>
                        </th>
                    </tr>
                            <tr>
                                <th style="border: 1px solid black; width: 3%;font-weight: bold; text-align: center;">No</th>
                                <th style="border: 1px solid black;font-weight: bold;text-align: center;">Parameter</th>
                                <th style="border: 1px solid black;font-weight: bold;text-align: center;">Kriteria</th>
                                <th style="border: 1px solid black;font-weight: bold;text-align: center;">Nilai</th>
                                <th style="border: 1px solid black;font-weight: bold;text-align: center;">Skor</th>
                                    </tr>
                            <tr>
                                <td rowspan="4" style="border: 1px solid black; text-align: center;">1</td>
                                <td rowspan="4" style="border: 1px solid black; text-align: center;">Umur</td>

                                <td style="border: 1px solid black;">
                                <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003210') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003210]"/> 1. < 3 Tahun
                                </td>

                                <td style="border: 1px solid black; text-align: center;">4</td>

                                <td rowspan="4" style="border: 1px solid black;">
                                <textarea style="width: 91%;text-align: center;" type="text" ng-model="item.obj[21003214]" @if ($item->emrdfk == '21003214') value="Your Text Value" @endif></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid black;">
                                    <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003211') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003211]"/> 2. 3 - 7 Tahun
                                </td>

                                <td style="border: 1px solid black; text-align: center;">3</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid black;">
                                    <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003212') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003212]"/> 3. 8 - 13 Tahun
                                </td>

                                <td style="border: 1px solid black; text-align: center;">2</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid black;">
                                <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003213') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003213]"/> 4. 14 - 18 Tahun
                                </td>

                                <td style="border: 1px solid black; text-align: center;">1</td>
                            </tr>

                            <tr>
                                <td rowspan="2" style="border: 1px solid black; text-align: center;">2</td>
                                <td rowspan="2" style="border: 1px solid black; text-align: center;">Jenis Kelamin</td>

                                <td style="border: 1px solid black;">
                                <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003216') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003216]"/> 1. Laki-Laki
                                </td>

                                <td style="border: 1px solid black; text-align: center;">2</td>

                                <td rowspan="2" style="border: 1px solid black;">
                                <textarea style="width: 91%;text-align: center;" type="text" ng-model="item.obj[21003218]" @if ($item->emrdfk == '21003218') value="Your Text Value" @endif></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid black;">
                                    <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003217') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003217]"/> 2. Perempuan
                                </td>

                                <td style="border: 1px solid black; text-align: center;">1</td>
                            </tr>

                            <tr>
                                <td rowspan="4" style="border: 1px solid black; text-align: center;">3</td>
                                <td rowspan="4" style="border: 1px solid black; text-align: center;">Diagnosa</td>

                                <td style="border: 1px solid black;">
                                <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003220') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003220]"/> 1. Kelainan
                                </td>

                                <td style="border: 1px solid black; text-align: center;">4</td>

                                <td rowspan="4" style="border: 1px solid black;">
                                <textarea style="width: 91%;text-align: center;" type="text" ng-model="item.obj[21003224]" @if ($item->emrdfk == '21003224') value="Your Text Value" @endif></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid black;">
                                    <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003221') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003221]"/> 2. Fangguan Oksigenasi (Pernafasan, anemia, dehidrasi, anoreksia, sinkope, sakit kepala)
                                </td>

                                <td style="border: 1px solid black; text-align: center;">3</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid black;">
                                    <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003222') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003222]"/> 3. Kelemahan fisik / kelainan psikologis
                                </td>

                                <td style="border: 1px solid black; text-align: center;">2</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid black;">
                                <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003223') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003223]"/> 4. Diagnosa lain
                                </td>

                                <td style="border: 1px solid black; text-align: center;">1</td>
                            </tr>

                            <tr>
                                <td rowspan="3" style="border: 1px solid black; text-align: center;">4</td>
                                <td rowspan="3" style="border: 1px solid black; text-align: center;">Gangguan kognitif memori</td>

                                <td style="border: 1px solid black;">
                                <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003226') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003226]"/> 1. Tidak memahami keterbatasan
                                </td>

                                <td style="border: 1px solid black; text-align: center;">3</td>

                                <td rowspan="3" style="border: 1px solid black;">
                                <textarea style="width: 91%;text-align: center;" type="text" ng-model="item.obj[21003229]" @if ($item->emrdfk == '21003229') value="Your Text Value" @endif></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid black;">
                                    <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003227') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003227]"/> 2. Lupa Keterbatasan
                                </td>

                                <td style="border: 1px solid black; text-align: center;">2</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid black;">
                                    <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003228') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003228]"/> 3. Orientasi Terhadap Kelemahan
                                </td>

                                <td style="border: 1px solid black; text-align: center;">1</td>
                            </tr>

                            <tr>
                                <td rowspan="4" style="border: 1px solid black; text-align: center;">5</td>
                                <td rowspan="4" style="border: 1px solid black; text-align: center;">Lingkungan</td>

                                <td style="border: 1px solid black;">
                                <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003231') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003231]"/> 1. Riwayat jatuh dari tempat tidur saat bayi - anak
                                </td>

                                <td style="border: 1px solid black; text-align: center;">4</td>

                                <td rowspan="4" style="border: 1px solid black;">
                                <textarea style="width: 91%;text-align: center;" type="text" ng-model="item.obj[21003235]" @if ($item->emrdfk == '21003235') value="Your Text Value" @endif></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid black;">
                                    <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003232') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003232]"/> 2. Menggunakan alat bantu (Box/Mebel)
                                </td>

                                <td style="border: 1px solid black; text-align: center;">3</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid black;">
                                    <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003233') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003233]"/> 3. Pasien berada ditempat tidur
                                </td>

                                <td style="border: 1px solid black; text-align: center;">2</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid black;">
                                <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003234') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003234]"/> 4. Pasien berada di area ruang
                                </td>

                                <td style="border: 1px solid black; text-align: center;">1</td>
                            </tr>

                            <tr>
                                <td rowspan="3" style="border: 1px solid black; text-align: center;">6</td>
                                <td rowspan="3" style="border: 1px solid black; text-align: center;">Respon operasi/obat penenang/efek anesthesi</td>

                                <td style="border: 1px solid black;">
                                <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003237') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003237]"/> 1. < 24 Jam
                                </td>

                                <td style="border: 1px solid black; text-align: center;">3</td>

                                <td rowspan="3" style="border: 1px solid black;">
                                <textarea style="width: 91%;text-align: center;" type="text" ng-model="item.obj[21003240]" @if ($item->emrdfk == '21003240') value="Your Text Value" @endif></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid black;">
                                    <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003238') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003238]"/> 2. < 48 Jam
                                </td>

                                <td style="border: 1px solid black; text-align: center;">2</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid black;">
                                    <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003239') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003239]"/> 3. > 48
                                </td>

                                <td style="border: 1px solid black; text-align: center;">1</td>
                            </tr>

                            <tr>
                                <td rowspan="3" style="border: 1px solid black; text-align: center;">7</td>
                                <td rowspan="3" style="border: 1px solid black; text-align: center;">Penggunaan Obat</td>

                                <td style="border: 1px solid black;">
                                <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003242') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003242]"/> 1. Obat sedative (kecuali pasien di NICU/PICU yang menggunakan sedasi dan paraiisis), hipotinik, barbiturate dan phenotiazin, antidepresan, laksative diuretic, narcotice/metodon
                                </td>

                                <td style="border: 1px solid black; text-align: center;">3</td>

                                <td rowspan="3" style="border: 1px solid black;">
                                <textarea style="width: 91%;text-align: center;" type="text" ng-model="item.obj[21003245]" @if ($item->emrdfk == '21003245') value="Your Text Value" @endif></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid black;">
                                    <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003243') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003243]"/> 2. Salah satu obat diatas
                                </td>

                                <td style="border: 1px solid black; text-align: center;">2</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid black;">
                                    <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003244') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003244]"/> 3. Pengobatan lain
                                </td>

                                <td style="border: 1px solid black; text-align: center;">1</td>
                            </tr>
                            <tr>
                                <td colspan="2" style="border: 1px solid black; text-align: center;">Jumlah Skor</td>
                                <td colspan="3" style="border: 1px solid black;">
                                    <input style="width: 99%;text-align: center;" type="text" ng-model="item.obj[21003246]" @if ($item->emrdfk == '21003246') value="Your Text Value" @endif>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" style="border: 1px solid black; text-align: center;">Nama</td>
                                <td colspan="3" style="border: 1px solid black;">
                                    <input style="width: 99%;text-align: center;" type="text" ng-model="item.obj[21003178]" @if ($item->emrdfk == '21003178') value="Your Text Value" @endif>
                                </td>
                            </tr>
                            <tr>
                                <td><b>KETERANGAN</b></td>
                            </tr>
                            <tr>
                                <td colspan="5">
                                    <div style="display: flex; justify-content: space-between;">
                                        <p>Skor 7 - 11: Resiko Rendah untuk Jatuh</p>
                                        <p>Skor > 12: Resiko Tinggi Untuk Jatuh</p>
                                        <p>Skor Minimal 7</p>
                                        <p>Skor Maximal 23</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><b>PENGECUALIAN</b></td>
                            </tr>
                            <tr>
                                <td colspan="5">
                                    <p>Semua Pasien Pos Operasi dinyatakan resiko tinggi untuk jatuh</p>
                                </td>
                            </tr>

                        </table>

                        <tr>
                    </tr>
                </table>

                <!-- Resiko Jatuh -->
                <br>
                    <table  style="width:100%;color: #4c5356;border: 1px solid black; margin-top:10px;">
                    <tr>
                        <th colspan="4">
                            <b>PENGKAJIAN SKOR JATUH PASIEN DEWASA (MORSE)</b>
                        </th>
                    </tr>
                            <tr>
                                <th style="border: 1px solid black; width: 3%; font-weight: bold; text-align: center;">No</th>
                                <th style="border: 1px solid black; width: 64%; font-weight: bold;text-align: center;">Parameter</th>
                                <th style="border: 1px solid black; width: 10%; font-weight: bold;text-align: center;">Nilai</th>
                                <th style="border: 1px solid black;font-weight: bold;text-align: center;">Skor</th>
                            </tr>

                                <td rowspan="2" style="border: 1px solid black; text-align: center;">1</td>

                                <td rowspan="2" style="border: 1px solid black; text-align: center;">Apakah ada riwayat jatuh dalam waktu 3 bulan sebab apapun</td>

                                <td style="border: 1px solid black;">
                                <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003250') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003250]"/> Ya <br>
                                </td>

                                <td style="border: 1px solid black; text-align: center;">
                                    25
                                </td>
                            </tr>
                            <tr>
                            <td style="border: 1px solid black;">
                                <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003251') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003251]"/> Tidak
                                </td>

                                <td style="border: 1px solid black; text-align: center;">
                                    0
                                </td>
                            </tr>

                            <tr>
                                <td rowspan="2" style="border: 1px solid black; text-align: center;">2</td>
                                <td rowspan="2" style="border: 1px solid black; text-align: center;">Apakah mempunyai penyakit penyerta atau diagnosa skunder</td>

                                <td style="border: 1px solid black;">
                                    <input type="checkbox"
                                    @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '21003253') checked
                                    @endif
                                    @endforeach
                                    ng-model="item.obj[21003253]"/> Ya <br>
                                </td>
                                <td style="border: 1px solid black; text-align: center;">15</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid black;">
                                    <input type="checkbox"
                                    @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '21003254') checked
                                    @endif
                                    @endforeach
                                    ng-model="item.obj[21003254]"/> Tidak
                                </td>
                                <td style="border: 1px solid black; text-align: center;">15</td>
                            </tr>

                            <tr>
                                <td style="border: 1px solid black; text-align: center;">3</td>
                                <td colspan="3" style="border: 1px solid black;"><b>Alat Bantu Kerja :</b></td>
                            </tr>

                            <tr>
                                <td style="border: 1px solid black; text-align: center;"></td>
                                <td style="border: 1px solid black; text-align: center;">Dibantu perawat/tidak menggunakan alat bantu</td>

                                <td style="border: 1px solid black;">
                                    <input type="checkbox"
                                    @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '21003257') checked
                                    @endif
                                    @endforeach
                                    ng-model="item.obj[21003257]"/> Ya <br>
                                </td>
                                <td style="border: 1px solid black; text-align: center;">0</td>
                            </tr>

                            <tr>
                                <td style="border: 1px solid black; text-align: center;"></td>
                                <td style="border: 1px solid black; text-align: center;">Menggunakan alat bantu kruck/tongkat, kursi roda</td>

                                <td style="border: 1px solid black;">
                                    <input type="checkbox"
                                    @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '21003259') checked
                                    @endif
                                    @endforeach
                                    ng-model="item.obj[21003259]"/> Ya <br>
                                </td>

                                <td style="border: 1px solid black; text-align: center;">15</td>
                            </tr>

                            <tr>
                                <td style="border: 1px solid black; text-align: center;"></td>
                                <td style="border: 1px solid black; text-align: center;">Merambat dengan pergelangan pada meja, kursi (furniture)</td>

                                <td style="border: 1px solid black;">
                                    <input type="checkbox"
                                    @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '21003261') checked
                                    @endif
                                    @endforeach
                                    ng-model="item.obj[21003261]"/> Ya <br>
                                </td>

                                <td style="border: 1px solid black; text-align: center;">30</td>
                            </tr>
                            <tr>
                                <td rowspan="2" style="border: 1px solid black; text-align: center;">4</td>
                                <td rowspan="2" style="border: 1px solid black; text-align: center;">Apakah terpasang infuse/pemberian anticoagulant (heparin). Obat lain yang mempunyai efek jatuh</td>

                                <td style="border: 1px solid black;">
                                    <input type="checkbox"
                                    @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '21003263') checked
                                    @endif
                                    @endforeach
                                    ng-model="item.obj[21003263]"/> Ya <br>
                                </td>
                                <td style="border: 1px solid black; text-align: center;">20</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid black;">
                                    <input type="checkbox"
                                    @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '21003264') checked
                                    @endif
                                    @endforeach
                                    ng-model="item.obj[21003264]"/> Tidak
                                </td>
                                <td style="border: 1px solid black; text-align: center;">0</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid black; text-align: center;">5</td>
                                <td colspan="3" style="border: 1px solid black;"><b>Kondisi untuk melakukan gerakan berpindah/ mobilisasi :</b></td>
                            </tr>

                            <tr>
                                <td style="border: 1px solid black; text-align: center;"></td>
                                <td style="border: 1px solid black; text-align: center;">Dibantu perawat/tidak menggunakan alat bantu</td>

                                <td style="border: 1px solid black;">
                                    <input type="checkbox"
                                    @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '21003267') checked
                                    @endif
                                    @endforeach
                                    ng-model="item.obj[21003267]"/> Ya <br>
                                </td>

                                <td style="border: 1px solid black; text-align: center;">0</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid black; text-align: center;"></td>
                                <td style="border: 1px solid black; text-align: center;">Menggunakan alat bantu kruck/tongkat, kursi roda</td>

                                <td style="border: 1px solid black;">
                                    <input type="checkbox"
                                    @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '21003269') checked
                                    @endif
                                    @endforeach
                                    ng-model="item.obj[21003269]"/> Ya <br>
                                </td>

                                <td style="border: 1px solid black; text-align: center;">10</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid black; text-align: center;"></td>
                                <td style="border: 1px solid black; text-align: center;">Merambat dengan berpegangan pada meja, kursi (furniture)</td>

                                <td style="border: 1px solid black;">
                                    <input type="checkbox"
                                    @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '21003271') checked
                                    @endif
                                    @endforeach
                                    ng-model="item.obj[21003271]"/> Ya <br>
                                </td>

                                <td style="border: 1px solid black; text-align: center;">20</td>
                            </tr>

                            <tr>
                                <td style="border: 1px solid black; text-align: center;">6</td>
                                <td colspan="3" style="border: 1px solid black;"><b>Kondisi status mental :</b></td>
                            </tr>

                            <tr>
                                <td style="border: 1px solid black; text-align: center;"></td>
                                <td style="border: 1px solid black; text-align: center;">Menyadari kelemahannya</td>

                                <td style="border: 1px solid black;">
                                    <input type="checkbox"
                                    @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '21003274') checked
                                    @endif
                                    @endforeach
                                    ng-model="item.obj[21003274]"/> Ya <br>
                                </td>

                                <td style="border: 1px solid black; text-align: center;">0</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid black; text-align: center;"></td>
                                <td style="border: 1px solid black; text-align: center;">Tidak menyadari kelemahannya</td>

                                <td style="border: 1px solid black;">
                                    <input type="checkbox"
                                    @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '21003276') checked
                                    @endif
                                    @endforeach
                                    ng-model="item.obj[21003276]"/> Ya <br>
                                </td>

                                <td style="border: 1px solid black; text-align: center;">15</td>
                            </tr>
                            <tr>
                                <td colspan="1" style="border: 1px solid black; text-align: center;">Jumlah Skor</td>
                                <td colspan="3" style="border: 1px solid black;">
                                    <input style="width: 99%;text-align: center;" type="text" ng-model="item.obj[21003277]" @if ($item->emrdfk == '21003277') value="Your Text Value" @endif>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="1" style="border: 1px solid black; text-align: center;">Nama</td>
                                <td colspan="3" style="border: 1px solid black;">
                                    <input style="width: 99%;text-align: center;" type="text" ng-model="item.obj[21003178]" @if ($item->emrdfk == '21003178') value="Your Text Value" @endif>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><b>KETERANGAN</b></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div style="display: flex; justify-content: space-between;">
                                        <p>1. Skor Resiko jatuh > 45 Resiko Tinggi untung jatuh</p>
                                        <p>2. Skor 25-44 Resiko Sedang untuk jatuh</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    <p>3. Skor 0-24 Resiko Rendah untuk jatuh</p>
                                </td>
                            </tr>

                            <tr>
                                <td></td>
                            </tr>
                            <tr>
                                <td><b>PENGECUALIAN</b></td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    <p>Semua Pasien Pos Operasi dinyatakan resiko tinggi untuk jatuh</p>
                                </td>
                            </tr>
                        </table>

                <!-- Assesmen Fungsional -->
                <br>
                <label><font style="font-size: 11pt;" color="#000000" ><b>8. ASSESMEN FUNGSIONAL</b></font></label> <br>
                <!-- Penglihatan -->
                <table>
                    <tbody>
                    <tr>
                        <label style="font-size: 11pt;"><b>Sensorik</b></label>
                        <td width="12%"><font style="font-size: 11pt;" color="#000000" >Penglihatan</font></td>
                        <td width="1%"><font style="font-size: 11pt;" color="#000000" >:</font></td>
                        <td width=75%>
                        <span >
                            <input  type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003281') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003281]"/><font style="font-size: 11pt;" color="#000000">Normal

                            <input style="margin-left: 2cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003282') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003282]"/><font style="font-size: 11pt;" color="#000000">Kabur

                            <input style="margin-left: 2cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003283') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003283]"/><font style="font-size: 11pt;" color="#000000">Kacamata

                            <input style="margin-left: 2cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003284') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003284]"/><font style="font-size: 11pt;" color="#000000">Lensa Kotak


                        </span>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <!-- Penciuman -->
                <table>
                    <tbody>
                    <tr>
                        <td width="12%"><font style="font-size: 11pt;" color="#000000" >Penciuman</font></td>
                        <td width="1%"><font style="font-size: 11pt;" color="#000000" >:</font></td>
                        <td width=75%>
                        <span >
                            <input  type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003286') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003286]"/><font style="font-size: 11pt;" color="#000000">Normal

                            <input style="margin-left: 2cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003287') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003287]"/><font style="font-size: 11pt;" color="#000000">Tidak
                        </span>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <!-- Pendengaran -->
                <table>
                    <tbody>
                    <tr>
                        <td width="8%"><font style="font-size: 11pt;" color="#000000" >Pendengaran</font></td>
                        <td width="1%"><font style="font-size: 11pt;" color="#000000" >:</font></td>
                        <td width=75%>
                        <span >
                            <input  type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003289') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003289]"/><font style="font-size: 11pt;" color="#000000">Normal

                            <input style="margin-left: 2cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003290') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003290]"/><font style="font-size: 11pt;" color="#000000">Tuli Kanan/Kiri

                            <input style="margin-left: 2cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003291') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003291]"/><font style="font-size: 11pt;" color="#000000">Alat bantu dengan kanan/kiri
                        </span>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <!-- Kognitif -->
                <table>
                    <tbody>
                    <tr>
                        <td width="12%"><font style="font-size: 11pt;" color="#000000" >Kognitif</font></td>
                        <td width="1%"><font style="font-size: 11pt;" color="#000000" >:</font></td>
                        <td width=75%>
                        <span >
                            <input  type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003293') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003293]"/><font style="font-size: 11pt;" color="#000000">Orientasi penuh

                            <input style="margin-left: 2cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003294') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003294]"/><font style="font-size: 11pt;" color="#000000">Pelupa

                            <input style="margin-left: 2cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003295') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003295]"/><font style="font-size: 11pt;" color="#000000">Bingung

                            <input style="margin-left: 2cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003296') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003296]"/><font style="font-size: 11pt;" color="#000000">Tidak dapat dimengerti
                        </span>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <!-- Aktivitas Sehari-sehari -->
                <table>
                    <tbody>
                    <tr>
                        <label style="font-size: 11pt;"><b>Motorik</b></label>
                        <td width="20%"><font style="font-size: 11pt;" color="#000000" >Aktivitas Sehari-hari</font></td>
                        <td width="1%"><font style="font-size: 11pt;" color="#000000" >:</font></td>
                        <td width=75%>
                        <span >
                            <input  type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003299') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003299]"/><font style="font-size: 11pt;" color="#000000">Mandiri

                            <input style="margin-left: 0.5cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003300') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003300]"/><font style="font-size: 11pt;" color="#000000">Bantuan Minimal

                            <input style="margin-left: 0.5cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003301') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003301]"/><font style="font-size: 11pt;" color="#000000">Bantuan Sebagian

                            <input style="margin-left: 0.5cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003302') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003302]"/><font style="font-size: 11pt;" color="#000000">Ketergantungan Total
                        </span>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <!-- Berjalan -->
                <table>
                    <tbody>
                    <tr>
                    <td width="20%"><font style="font-size: 11pt;" color="#000000" >Berjalan</font></td>
                        <td width="1%"><font style="font-size: 11pt;" color="#000000" >:</font></td>
                        <td width=75%>
                        <span >
                            <input  type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003304') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003304]"/><font style="font-size: 11pt;" color="#000000">Tidak ada kesulitan

                            <input style="margin-left: 0.5cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003305') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003305]"/><font style="font-size: 11pt;" color="#000000">Perlu bantuan

                            <input style="margin-left: 0.5cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003306') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003306]"/><font style="font-size: 11pt;" color="#000000">Sering jatuh

                            <input style="margin-left: 0.5cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003307') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003307]"/><font style="font-size: 11pt;" color="#000000">Kelumpuhan
                        </span>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <!-- Resiko Nutrisional -->
                <br>
                <label><font style="font-size: 11pt;" color="#000000" ><b>9. RESIKO NUTRISIONAL</b></font></label> <br>
                <label><font style="font-size: 10pt;" color="#000000" ><b>Malnutrition Screening Tools (MST)</b></font></label>
                <table style="border: 1px solid black; ">
                    <tbody>
                        <th style="font-weight: bold; text-align: center;">NO</th>
                        <th style="width:40%;font-weight: bold;text-align: center;">PARAMETER</th>
                        <th style="font-weight: bold;text-align: center;"></th>
                        <th style="font-weight: bold;text-align: center;">POINT</th>

                        <tr>
                            <td>
                                <b>1</b>
                            </td>
                            <td>
                                <b>Apakah ada penurunan berat badan yang tidak diinginkan selama 6 bulan terakhir ?</b>
                            </td>
                            <td>
                            <input type="checkbox"
                            @foreach ($res['d'] as $item)
                            @if ($item->emrdfk == '21003310') checked
                            @endif
                            @endforeach
                            ng-model="item.obj[21003310]"/>a. Tidak <br>

                            <input type="checkbox"
                            @foreach ($res['d'] as $item)
                            @if ($item->emrdfk == '21003311') checked
                            @endif
                            @endforeach
                            ng-model="item.obj[21003311]"/>b. Tidak Yakin <br>

                            <label for="">(Tanda : Ukuran baju atau celana menjadi lebih longgar)</label> <br>

                            <input type="checkbox"
                            @foreach ($res['d'] as $item)
                            @if ($item->emrdfk == '21003313') checked
                            @endif
                            @endforeach
                            ng-model="item.obj[21003313]"/>c. Ya, 1-5 Kg <br>

                            <input type="checkbox"
                            @foreach ($res['d'] as $item)
                            @if ($item->emrdfk == '21003314') checked
                            @endif
                            @endforeach
                            ng-model="item.obj[21003314]"/> 6-10 Kg <br>

                            <input type="checkbox"
                            @foreach ($res['d'] as $item)
                            @if ($item->emrdfk == '21003315') checked
                            @endif
                            @endforeach
                            ng-model="item.obj[21003315]"/> 11-15 Kg <br>

                            <input type="checkbox"
                            @foreach ($res['d'] as $item)
                            @if ($item->emrdfk == '21003316') checked
                            @endif
                            @endforeach
                            ng-model="item.obj[21003316]"/> > 15 Kg <br>
                            </td>
                            <td style="text-align: center;">
                                <label type="text">0</label><br>
                                <label type="text">2</label><br>
                                <label></label><br>
                                <label type="text">1</label><br>
                                <label type="text">2</label><br>
                                <label type="text">3</label><br>
                                <label type="text">4</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>2</b>
                            </td>
                            <td>
                                <b>Apakah asupan makan menurun yang dikarenakan adanya penurunan nafsu makan/kesulitan menerima makan ?</b>
                            </td>
                            <td>
                            <input type="checkbox"
                            @foreach ($res['d'] as $item)
                            @if ($item->emrdfk == '21003318') checked
                            @endif
                            @endforeach
                            ng-model="item.obj[21003318]"/>a. Tidak <br>

                            <input type="checkbox"
                            @foreach ($res['d'] as $item)
                            @if ($item->emrdfk == '21003319') checked
                            @endif
                            @endforeach
                            ng-model="item.obj[21003319]"/>b. Tidak Yakin <br>
                        </td>
                        <td style="text-align: center;">
                            <label type="text">0</label><br>
                            <label type="text">1</label>
                        </td>
                        </tr>
                        <tr>
                            <td style="text-align: center;"></td>
                            <td style="text-align: center;"></td>
                            <td style="text-align: center;"></td>
                            <td>
                                <label><b>TOTAL SCORE</b></label><br>
                                <input style="text-align: center;" type="text" ng-model="item.obj[21003320]" @if ($item->emrdfk == '21003320') value="Your Text Value" @endif>
                             </td>
                        </tr>
                        <table style="border: 1px solid black;">
                            <tbody>
                            <tr>
                            <th style="font-size: 10pt; text-align: left;">
                                <b>Keterangan</b>
                            </th>

                            </tr>
                            <tr>
                                <td>
                                    Skor 0 -1 : Tidak Beresiko <br>

                                    Skor 2 - 3 : Beresiko (Asuhan Gizi oleh Dietisen) <br>

                                    Skor > 4 : Malnutrisi (Asuhan Gizi oleh Dietisien)
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </tbody>
                </table>

                <!-- Kebutuhan Edukasi -->
                <br>
                <table>
                    <tbody>
                    <tr>
                        <label style="font-size: 11pt;"><b>10. KEBUTUHAN EDUKASI</b></label>
                        <td width="43%"><font style="font-size: 11pt;" color="#000000" ><b>A. Terdapat hambatan dalam pembelajaran :</b></font></td>
                    </tr>
                    <tr>
                        <td>
                        <span >
                            <input  type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003322') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003322]"/><font style="font-size: 11pt;" color="#000000">Tidak

                            <input style="margin-left: 1cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003323') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003323]"/><font style="font-size: 11pt;" color="#000000">Ya
                        </span>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <table>
                    <tbody>
                    <tr>
                        <td width="80%"><font style="font-size: 11pt;" color="#000000" ><b>B. Jika ya, sebutkan hambatan (bisa dipilih lebih dari satu) :</b></font></td>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <span >
                            <input  type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003325') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003325]"/><font style="font-size: 11pt;" color="#000000">Pendengaran

                            <input style="margin-left: 0.4cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003326') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003326]"/><font style="font-size: 11pt;" color="#000000">Penglihatan

                            <input style="margin-left: 0.4cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003327') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003327]"/><font style="font-size: 11pt;" color="#000000">Kognitif

                            <input style="margin-left: 0.4cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003328') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003328]"/><font style="font-size: 11pt;" color="#000000">Fisik

                            <input style="margin-left: 0.4cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003329') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003329]"/><font style="font-size: 11pt;" color="#000000">Budaya

                            <input style="margin-left: 0.4cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003330') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003330]"/><font style="font-size: 11pt;" color="#000000">Agama

                            <input style="margin-left: 0.4cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003331') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003331]"/><font style="font-size: 11pt;" color="#000000">Emosi

                            <input style="margin-left: 0.4cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003332') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003332]"/><font style="font-size: 11pt;" color="#000000">Bahasa <br>

                            <input  type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003333') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003333]"/><font style="font-size: 11pt;" color="#000000">Lain-lain
                            <input type="text" ng-model="item.obj[21003334]" @if ($item->emrdfk == '21003334') value="Your Text Value" @endif>
                        </span>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <table>
                    <tbody>
                    <tr>
                        <td width="80%"><font style="font-size: 11pt;" color="#000000" ><b>C. Dibutuhkan Penerjemah :</b></font></td>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <span >
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003336') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003336]"/><font style="font-size: 11pt;" color="#000000">Tidak

                            <input style="margin-left: 1cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003337') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003337]"/><font style="font-size: 11pt;" color="#000000">Ya, jika ya sebutkan
                            <input type="text" ng-model="item.obj[21003338]" @if ($item->emrdfk == '21003338') value="Your Text Value" @endif>
                        </span>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <table>
                    <tbody>
                    <tr>
                        <td width="80%"><font style="font-size: 11pt;" color="#000000" ><b>D. Kebutuhan pembelajaran pasien (pilih topik pembelajaran pada kotak yang tersedia) :</b></font></td>
                    </tr>
                    <tr>
                        <td>
                        <span >
                            <input  type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003340') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003340]"/><font style="font-size: 11pt;" color="#000000">Diagnosa & Manajemen

                            <input style="margin-left: 0.5cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003341') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003341]"/><font style="font-size: 11pt;" color="#000000">Obat-obatan

                            <input style="margin-left: 0.5cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003342') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003342]"/><font style="font-size: 11pt;" color="#000000">Perawatan luka

                            <input style="margin-left: 0.5cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003343') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003343]"/><font style="font-size: 11pt;" color="#000000">Rehabilitasi

                            <input style="margin-left: 0.5cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003344') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003344]"/><font style="font-size: 11pt;" color="#000000">Manajemen nyeri

                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003345') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003345]"/><font style="font-size: 11pt;" color="#000000">Diet dan nutrisi

                            <input style="margin-left: 1cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003346') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003346]"/><font style="font-size: 11pt;" color="#000000">Lain-lain
                            <input type="text" ng-model="item.obj[21003347]" @if ($item->emrdfk == '21003347') value="Your Text Value" @endif>
                        </span>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <!-- Kebutuhan Edukasi -->
                <br>
                <table>
                    <tbody>
                    <tr>
                        <label style="font-size: 11pt;"><b>11. PERENCANAAN PULANG</b></label>
                        <label style="font-size: 11pt;"><b>Kriteria Discharge Planning :</b></label>
                        <td width="43%"><font style="font-size: 11pt;" color="#000000" >A. Keterbatasan Mobilitas</font></td>
                    </tr>
                    <tr>
                        <td>
                        <span >
                            <input  type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003353') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003353]"/><font style="font-size: 11pt;" color="#000000">Ya

                            <input style="margin-left: 1cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003354') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003354]"/><font style="font-size: 11pt;" color="#000000">Tidak
                        </span>
                        </td>
                    </tr>

                    <tr>
                        <td width="43%"><font style="font-size: 11pt;" color="#000000" >B. Perawatan atau Pengobatan Lanjutan</font></td>
                    </tr>
                    <tr>
                        <td>
                        <span >
                            <input  type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003356') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003356]"/><font style="font-size: 11pt;" color="#000000">Ya

                            <input style="margin-left: 1cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003357') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003357]"/><font style="font-size: 11pt;" color="#000000">Tidak
                        </span>
                        </td>
                    </tr>

                    <tr>
                        <td width="43%"><font style="font-size: 11pt;" color="#000000" >C. Bantuan untuk melakukan aktifitas sehari - hari</font></td>
                    </tr>
                    <tr>
                        <td>
                        <span >
                            <input  type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003359') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003359]"/><font style="font-size: 11pt;" color="#000000">Ya

                            <input style="margin-left: 1cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003360') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003360]"/><font style="font-size: 11pt;" color="#000000">Tidak
                        </span>
                        </td>
                    </tr>

                    <tr>
                        <td width="43%"><font style="font-size: 11pt;" color="#000000" ><b>Bila salah satu jawaban 'Ya' dari kriteria perencanaan pulang diatas, maka akan dilanjutkan dengan perencanaan pulang sebagai berikut :</b></font></td>
                    </tr>
                    <tr>
                        <td>
                        <span>
                            <input  type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003362') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003362]"/><font style="font-size: 11pt;" color="#000000">Perawatan diri (mandi, BAB, BAK)

                            <input style="margin-left: 0.5cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003363') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003363]"/><font style="font-size: 11pt;" color="#000000">Latihan fisik lanjutan  <br>

                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003364') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003364]"/><font style="font-size: 11pt;" color="#000000">Pemantauan pemberian obat

                            <input style="margin-left: 1.3cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003365') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003365]"/><font style="font-size: 11pt;" color="#000000">Pendampingan tenaga khusus dirumah  <br>

                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003366') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003366]"/><font style="font-size: 11pt;" color="#000000">Pemantauan diet

                            <input style="margin-left: 3.3cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003367') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003367]"/><font style="font-size: 11pt;" color="#000000">Bantuan medis/perawat dirumah (home care)  <br>

                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003368') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003368]"/><font style="font-size: 11pt;" color="#000000">Perawatan luka

                            <input style="margin-left: 3.5cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003369') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003369]"/><font style="font-size: 11pt;" color="#000000">Bantuan untuk melakukan aktivitas fisik (krsi roda, alat bantu jalan)
                        </span>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <!-- Riwayat Penggunaan Obat -->
                <br>
                <table>
                    <tbody>
                    <tr>
                        <label style="font-size: 11pt;"><b>12. RIWAYAT PENGGUNAAN OBAT</b></label>
                    </tr>
                        <td rowspan="6" style="border: 1px solid black;">
                                <textarea style="width: 99%; height:5cm; text-align: left;" type="text" ng-model="item.obj[21003214]" @if ($item->emrdfk == '21003214') value="Your Text Value" @endif></textarea>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <!-- Diagnosa Keperawatan -->
                <br>
                <table>
                    <tbody>
                    <tr>
                        <label style="font-size: 11pt;"><b>13. DIAGNOSA KEPERAWATAN</b></label>
                    </tr>
                    <tr>
                        <td>
                        <span>
                            <input  type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003371') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003371]"/><font style="font-size: 11pt;" color="#000000">Bersihkan Jalan Nafas Tidak Efektif

                            <input style="margin-left: 1.5cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003372') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003372]"/><font style="font-size: 11pt;" color="#000000">Kerusakan Pertukaran Gas  <br>

                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003373') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003373]"/><font style="font-size: 11pt;" color="#000000">Pola Nafas Tidak Efektif

                            <input style="margin-left: 3.4cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003374') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003374]"/><font style="font-size: 11pt;" color="#000000">Nyeri<br>

                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003375') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003375]"/><font style="font-size: 11pt;" color="#000000">Penurunan Curah Jantung

                            <input style="margin-left: 3cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003376') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003376]"/><font style="font-size: 11pt;" color="#000000">Intuleransi Aktivitas<br>

                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003377') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003377]"/><font style="font-size: 11pt;" color="#000000">Koping Individu Tidak Efektif

                            <input style="margin-left: 2.5cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003378') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003378]"/><font style="font-size: 11pt;" color="#000000">Kelebihan/Kekurangan Volume Cairan <br>

                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003379') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003379]"/><font style="font-size: 11pt;" color="#000000">Perubahan Perfungsi Jaringan Jantung Paru/Jaringan Otak/Perifer <br>

                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003380') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003380]"/><font style="font-size: 11pt;" color="#000000">Pendarahan

                            <input style="margin-left: 5.4cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003381') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003381]"/><font style="font-size: 11pt;" color="#000000">Keseimbangan Cairan & Elektrolit <br>

                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003382') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003382]"/><font style="font-size: 11pt;" color="#000000">Risiko Komplikasi Syok Anafilatik

                            <input style="margin-left: 1.9cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003383') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003383]"/><font style="font-size: 11pt;" color="#000000">Hipertermia/Hipotermia <br>

                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003384') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003384]"/><font style="font-size: 11pt;" color="#000000">Gangguan Integritas Kulit/Jaringan

                            <input style="margin-left: 1.5cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003385') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003385]"/><font style="font-size: 11pt;" color="#000000">Gangguan Komunikasi Verbal <br>

                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003386') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003386]"/><font style="font-size: 11pt;" color="#000000">Inkontenisia

                            <input style="margin-left: 5.4cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003387') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003387]"/><font style="font-size: 11pt;" color="#000000">Retensia Urin <br>

                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003388') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003388]"/><font style="font-size: 11pt;" color="#000000">Diagnosa Kebidanan
                            <input style="width: 5.5cm;" type="text" ng-model="item.obj[21003178]" @if ($item->emrdfk == '21003178') value="Your Text Value" @endif>

                            <input style="margin-left: 1.1cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003389') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003389]"/><font style="font-size: 11pt;" color="#000000">Lain-lain
                            <input style="width: 5.5cm;" type="text" ng-model="item.obj[21003390]" @if ($item->emrdfk == '21003390') value="Your Text Value" @endif>
                        </span>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <!-- Rencana Asuhan Keperawatan -->
                <br>
                <table>
                    <tbody>
                    <tr>
                        <label style="font-size: 11pt;"><b>14. RENCANA ASUHAN KEPERAWATAN</b></label>
                    </tr>
                    <tr>
                        <td>
                            <div style="display: flex; align-items: center;">
                                <input type="checkbox"
                                    @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '21003392') checked
                                    @endif
                                    @endforeach
                                    ng-model="item.obj[21003392]"/>
                                    <font style="font-size: 11pt; margin-left: 5px;" color="#000000">Atur Posisi</font>

                                <input style="margin-left: 7.5cm;" type="checkbox"
                                    @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '21003393') checked
                                    @endif
                                    @endforeach
                                    ng-model="item.obj[21003393]"/>
                                    <font style="font-size: 11pt; margin-left: 5px;" color="#000000">Pasang IV Line, Lokasi</font>

                                <div style="position: relative; width: 6cm; margin-left: 0.2cm;">
                                    <input style="width: calc(100% - 20px); box-sizing: border-box;" type="text" ng-model="item.obj[21003394]" @if ($item->emrdfk == '21003394') value="Your Text Value" @endif>
                                    <span style="position: absolute; right: 5px; top: 50%; transform: translateY(-50%);">L/menit</span>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                                <input  type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003395') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003395]"/><font style="font-size: 11pt;" color="#000000">Ukur Tanda Vital

                            <input style="margin-left: 6.2cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003396') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003396]"/><font style="font-size: 11pt;" color="#000000">
                                <input style="width: 5.5cm;" type="text" ng-model="item.obj[21003397]" @if ($item->emrdfk == '21003397') value="Your Text Value" @endif><br>

                                <input  type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003398') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003398]"/><font style="font-size: 11pt;" color="#000000">Pengembalian Sample Lab

                            <input style="margin-left: 4.5cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003399') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003399]"/><font style="font-size: 11pt;" color="#000000">
                                <input style="width: 5.5cm;" type="text" ng-model="item.obj[21003400]" @if ($item->emrdfk == '21003400') value="Your Text Value" @endif><br>

                                <input  type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003401') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003401]"/><font style="font-size: 11pt;" color="#000000">Rekam EKG/Monitor EKG

                            <input style="margin-left: 4.7cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21003402') checked
                                @endif
                                @endforeach
                                ng-model="item.obj[21003402]"/><font style="font-size: 11pt;" color="#000000">
                                <input style="width: 5.5cm;" type="text" ng-model="item.obj[21003403]" @if ($item->emrdfk == '21003403') value="Your Text Value" @endif><br>

                                <div style="display: flex; align-items: center;">
                                <input type="checkbox"
                                    @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '21003404') checked
                                    @endif
                                    @endforeach
                                    ng-model="item.obj[21003404]"/>
                                    <font style="font-size: 11pt; margin-left: 5px;" color="#000000">Berikan Oksigen</font>

                                <div style="position: relative; width: 6cm; margin-left: 0.2cm;">
                                    <input style="width: calc(100% - 20px); box-sizing: border-box;" type="text" ng-model="item.obj[21003405]" @if ($item->emrdfk == '21003405') value="Your Text Value" @endif>
                                    <span style="position: absolute; right: 5px; top: 50%; transform: translateY(-50%);">L/menit</span>
                                </div>

                                <input style="margin-left: 0.2cm;" type="checkbox"
                                    @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '21003406') checked
                                    @endif
                                    @endforeach
                                    ng-model="item.obj[21003406]"/><font style="font-size: 11pt;" color="#000000">
                                <input style="width: 5.5cm;" type="text" ng-model="item.obj[21003407]" @if ($item->emrdfk == '21003407') value="Your Text Value" @endif> <br>
                            </div>

                        </td>
                    </tr>
                    </tbody>
                </table>

                <!-- Tindakan -->
                <br>
                <table style="border: 1px solid black; ">
                    <tbody style="font-size: 11pt;">
                    <tr>
                        <label style="font-size: 11pt;"><b>15. TINDAKAN</b></label>
                    </tr>
                    <tr style="font-size: 11pt;">
                        <th><b>Pukul</b>
                        </th>
                        <th>
                            <b>Tindakan</b>
                        </th>
                        <th>
                            <b>Nama</b>
                        </th>
                    </tr>
                    <tr>
                        <td>@{{ item.obj[21003408] }}</td>
                        <td>@{{ item.obj[21003409] }}</td>
                        <td>@{{ item.obj[21003410] }}</td>
                    </tr>
                    <tr>
                        <td>@{{ item.obj[21003411] }}</td>
                        <td>@{{ item.obj[21003412] }}</td>
                        <td>@{{ item.obj[21003413] }}</td>
                    </tr>
                    <tr>
                        <td>@{{ item.obj[21003414] }}</td>
                        <td>@{{ item.obj[21003415] }}</td>
                        <td>@{{ item.obj[21003416] }}</td>
                    </tr>
                    <tr>
                        <td>@{{ item.obj[21003420] }}</td>
                        <td>@{{ item.obj[21003421] }}</td>
                        <td>@{{ item.obj[21003422] }}</td>
                    </tr>
                    <tr>
                        <td>@{{ item.obj[21009232] }}</td>
                        <td>@{{ item.obj[21009233] }}</td>
                        <td>@{{ item.obj[21009234] }}</td>
                    </tr>
                    <tr>
                        <td>@{{ item.obj[21009235] }}</td>
                        <td>@{{ item.obj[21009236] }}</td>
                        <td>@{{ item.obj[21009237] }}</td>
                    </tr>
                    <tr>
                        <td>@{{ item.obj[21009238] }}</td>
                        <td>@{{ item.obj[21009239] }}</td>
                        <td>@{{ item.obj[21009240] }}</td>
                    </tr>
                    <tr>
                        <td>@{{ item.obj[21009241] }}</td>
                        <td>@{{ item.obj[21009242] }}</td>
                        <td>@{{ item.obj[21009243] }}</td>
                    </tr>
                    <tr>
                        <td>@{{ item.obj[21009244] }}</td>
                        <td>@{{ item.obj[21009245] }}</td>
                        <td>@{{ item.obj[21009246] }}</td>
                    </tr>
                    <tr>
                        <td>@{{ item.obj[21009247] }}</td>
                        <td>@{{ item.obj[21009248] }}</td>
                        <td>@{{ item.obj[21009249] }}</td>
                    </tr>
                    <tr>
                        <td>@{{ item.obj[21009250] }}</td>
                        <td>@{{ item.obj[21009251] }}</td>
                        <td>@{{ item.obj[21009252] }}</td>
                    </tr>
                    <tr>
                        <td>@{{ item.obj[21009253] }}</td>
                        <td>@{{ item.obj[21009254] }}</td>
                        <td>@{{ item.obj[21009255] }}</td>
                    </tr>
                    <tr>
                        <td>@{{ item.obj[21009256] }}</td>
                        <td>@{{ item.obj[21009257] }}</td>
                        <td>@{{ item.obj[21009258] }}</td>
                    </tr>
                    <tr>
                        <td>@{{ item.obj[21009259] }}</td>
                        <td>@{{ item.obj[21009260] }}</td>
                        <td>@{{ item.obj[21009261] }}</td>
                    </tr>
                    <tr>
                        <td>@{{ item.obj[21009262] }}</td>
                        <td>@{{ item.obj[21009263] }}</td>
                        <td>@{{ item.obj[21009264] }}</td>
                    </tr>
                    </tbody>
                </table>
                <div style="text-align: right;margin-top: 10px; margin-left: auto;margin-right: 0;">
                <b><font style="font-size: 10pt;">Yang Melakukan Pengkajian :</font></b><br>
                <b><font style="font-size: 10pt;">@{{ item.obj[21003417] }}</font></b>
                </div>
                        <div style="width: 30%;text-align: center;margin-top: 10px; margin-left: auto;margin-right: 0;border: 1px solid black">
                            <b><font style="font-size: 11pt;" color="#000000" ><i>Perawat / Bidan RS Tria Dipa</i></font></b>
                                <br>
                                    @forelse($dataimg as $d)
                                        @if($d->emrdfk == 1)
                                            <img src="{{ $d->image }}" width="75" height="75" alt="TTD" />
                                        @break
                                        @endif
                                    @empty
                                        <div style="height:75px"></div>
                                    @endforelse
                                <br>
                            <b><font style="font-size: 11pt;" color="#000000" >@{{ item.obj[21003418] }}</font></b>
                        </div>

                <hr style="border:2px solid #000;margin-bottom:0px">
                <table width="100%">
                    <tr>
                        <td style="text-align: center">
                            <font style="font-size: 11px;" color="#000000" ><b>PT. TRIA DIPA MEDIKA</b></font>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: center">
                            {!! $res['profile']->alamatlengkap !!}, Telp. {!! $res['profile']->fixedphone !!},
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: center">
                            Email : {!! $res['profile']->alamatemail !!}
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
