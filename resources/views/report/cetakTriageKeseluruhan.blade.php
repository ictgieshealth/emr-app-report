<!DOCTYPE html>
<html lang="en" ng-app="angularApp">

<head>
    <meta charset="utf-8">
    <title>Triage Keseluruhan</title>

    @if (stripos(\Request::url(), 'localhost') !== false || stripos(\Request::url(), '192.168.75.233:8080') !== false)
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
        <div class=""></div>
        <table cellspacing="0" cellpadding="0" border="0" width="100%">
            <tbody>
                <tr>
                    <td width="10%" style="padding: 5px">
                        @if (stripos(\Request::url(), 'localhost') !== false || stripos(\Request::url(), '192.168.75.233:8080') !== false)
                            <img src="{{ asset('img/logo_triadipa.jpeg') }}" alt="" style="width: 90px;">
                        @else
                            <img src="{{ asset('service/img/logo_triadipa.jpeg') }}" alt=""
                                style="width: 90px;">
                        @endif
                    </td>

                    <td width="15%"
                        style="text-align: justify; border: 1px solid black; vertical-align: top; padding: 5px; font-size: 11pt;">
                        <b>No. RM</b>
                        <p style="font-size: 11pt; display: inline; margin: 1.8cm;"><b>: {!! $res['d'][0]->nocm !!}</b></b>
                        </p><br>
                        <b>Nama</b>
                        <p style="font-size: 11pt; display: inline; margin: 2.1cm;"><b>: {!! $res['d'][0]->namapasien !!}</b></p>
                        <br>
                        <b>Jenis Kelamin</b>
                        <p style="font-size: 11pt; display: inline; margin: 0.5cm;"><b>: {!! $res['d'][0]->jeniskelamin !!}</b></p>
                        <br>
                        <b>Umur</b>
                        <p style="font-size: 11pt; display: inline; margin: 2.1cm;"><b>: {!! $res['d'][0]->umur !!}</b></p>
                        <br>
                        <b>Ruangan</b>
                        <p style="font-size: 11pt; display: inline; margin: 1.4cm;"><b>: {!! $res['d'][0]->namaruangan !!}</b></p>
                    </td>


            </tbody>
        </table>
        <hr style="border:2px solid #000;margin-bottom:0px">

        <!-- Hasil Pemeriksaan -->
        <table>
            <tbody>
                <tr>
                    <td colspan="4">
                        <label style="font-size: 11pt;"><b>HASIL PEMERIKSAAN</b></label>
                    </td>
                </tr>
                <tr>
                    <td width="25%">
                        <font style="font-size: 11pt;" color="#000000">Tanggal/Waktu Kedatangan</font>
                    </td>
                    <td width="1%">
                        <font style="font-size: 11pt;" color="#000000">:</font>
                    </td>
                    <td width="74%">
                        <label style="font-size: 10pt;" ng-bind="item.obj[1000150]"></label>
                    </td>
                </tr>
                <tr>
                    <td colspan="4">
                        <label style="font-size: 11pt;"><b>Tanda Vital</b></label>
                    </td>
                </tr>
                <tr>
                    <td width="25%">
                        <font style="font-size: 11pt;" color="#000000">Tekanan Darah</font>
                    </td>
                    <td width="1%">
                        <font style="font-size: 11pt;" color="#000000">:</font>
                    </td>
                    <td width="74%">
                        <label style="font-size: 10pt;" ng-bind="item.obj[1000152]"></label>
                        <font style="font-size: 11pt; margin-left: 5px;" color="#000000">mmHg</font>
                    </td>
                </tr>
                <tr>
                    <td width="25%">
                        <font style="font-size: 11pt;" color="#000000">Suhu</font>
                    </td>
                    <td width="1%">
                        <font style="font-size: 11pt;" color="#000000">:</font>
                    </td>
                    <td width="74%">
                        <label style="font-size: 10pt;" ng-bind="item.obj[1000155]"></label>
                        <font style="font-size: 11pt; margin-left: 5px;" color="#000000">°C</font>
                    </td>
                </tr>
                <tr>
                    <td width="25%">
                        <font style="font-size: 11pt;" color="#000000">Frek Nadi</font>
                    </td>
                    <td width="1%">
                        <font style="font-size: 11pt;" color="#000000">:</font>
                    </td>
                    <td width="74%">

                        <label style="font-size: 10pt;" ng-bind="item.obj[1000153]"></label>
                        <font style="font-size: 11pt; margin-left: 5px;" color="#000000">x/menit</font>
                    </td>
                </tr>
                <tr>
                    <td width="25%">
                        <font style="font-size: 11pt;" color="#000000">Frek Nafas</font>
                    </td>
                    <td width="1%">
                        <font style="font-size: 11pt;" color="#000000">:</font>
                    </td>
                    <td width="74%">
                        <label style="font-size: 10pt;" ng-bind="item.obj[1000154]"></label>
                        <font style="font-size: 11pt; margin-left: 5px;" color="#000000">x/menit</font>
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- Kriteria Triage -->
        <br>
        <table style="width:100%; border-collapse: collapse; border: 1px solid black; margin-top: 10px;">
            <thead>
                <tr>
                    <th style="border: 1px solid black; text-align: center; padding: 5px; font-weight: bold;">
                        KRITERIA TRIAGE
                    </th>
                    <th
                        style="border: 1px solid black; text-align: center; padding: 5px; font-weight: bold; background-color: #ff6b6b; color: white;">
                        ATS 1
                    </th>
                    <th
                        style="border: 1px solid black; text-align: center; padding: 5px; font-weight: bold; background-color: #ff6b6b; color: white;">
                        ATS 2
                    </th>
                    <th
                        style="border: 1px solid black; text-align: center; padding: 5px; font-weight: bold; background-color: #ffd93d; color: black;">
                        ATS 3
                    </th>
                    <th
                        style="border: 1px solid black; text-align: center; padding: 5px; font-weight: bold; background-color: #ffd93d; color: black;">
                        ATS 4
                    </th>
                    <th
                        style="border: 1px solid black; text-align: center; padding: 5px; font-weight: bold; background-color: #6bcf7f; color: white;">
                        ATS 5
                    </th>
                </tr>
                <tr>
                    <th style="border: 1px solid black; text-align: center; padding: 5px; font-weight: bold;">
                        KRITERIA
                    </th>
                    <th
                        style="border: 1px solid black; text-align: center; padding: 5px; font-weight: bold; background-color: #ff6b6b; color: white;">
                        RESUSITASI
                    </th>
                    <th
                        style="border: 1px solid black; text-align: center; padding: 5px; font-weight: bold; background-color: #ff6b6b; color: white;">
                        EMERGENCY
                    </th>
                    <th
                        style="border: 1px solid black; text-align: center; padding: 5px; font-weight: bold; background-color: #ffd93d; color: black;">
                        URGENT
                    </th>
                    <th
                        style="border: 1px solid black; text-align: center; padding: 5px; font-weight: bold; background-color: #ffd93d; color: black;">
                        SEMI URGENT
                    </th>
                    <th
                        style="border: 1px solid black; text-align: center; padding: 5px; font-weight: bold; background-color: #6bcf7f; color: white;">
                        FALSE EMERGENCY
                    </th>
                </tr>
            </thead>
            <tbody>
                <!-- AIRWAY (A) -->
                <tr>
                    <td style="border: 1px solid black; padding: 5px; font-weight: bold;">AIRWAY (A)</td>
                    <td style="border: 1px solid black; padding: 5px;">
                        <input type="checkbox"
                            @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '1000156') checked @endif @endforeach
                            ng-model="item.obj[1000156]" />
                        <font style="font-size: 10pt;">Sumbatan</font>
                    </td>
                    <td style="border: 1px solid black; padding: 5px;">
                        <input type="checkbox"
                            @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '1000157') checked @endif @endforeach
                            ng-model="item.obj[1000157]" />
                        <font style="font-size: 10pt;">Stridor/Distres</font>
                    </td>
                    <td style="border: 1px solid black; padding: 5px;">
                        <input type="checkbox"
                            @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '1000158') checked @endif @endforeach
                            ng-model="item.obj[1000158]" />
                        <font style="font-size: 10pt;">Bebas</font>
                    </td>
                    <td style="border: 1px solid black; padding: 5px;">
                        <input type="checkbox"
                            @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '1000159') checked @endif @endforeach
                            ng-model="item.obj[1000159]" />
                        <font style="font-size: 10pt;">Bebas</font>
                    </td>
                    <td style="border: 1px solid black; padding: 5px;">
                        <input type="checkbox"
                            @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '1000160') checked @endif @endforeach
                            ng-model="item.obj[1000160]" />
                        <font style="font-size: 10pt;">Bebas</font>
                    </td>
                </tr>

                <!-- BREATHING (B) -->
                <tr>
                    <td style="border: 1px solid black; padding: 5px; font-weight: bold; vertical-align: top;">
                        BREATHING (B)</td>
                    <td style="border: 1px solid black; padding: 5px; vertical-align: top;">
                        <div style="margin-bottom: 5px;">
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '1000161') checked @endif @endforeach
                                ng-model="item.obj[1000161]" />
                            <font style="font-size: 10pt;">Henti Nafas</font>
                        </div>
                        <div style="margin-bottom: 5px;">
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '1000162') checked @endif @endforeach
                                ng-model="item.obj[1000162]" />
                            <font style="font-size: 10pt;">Nafas 10x/m</font>
                        </div>
                        <div style="margin-bottom: 5px;">
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '1000163') checked @endif @endforeach
                                ng-model="item.obj[1000163]" />
                            <font style="font-size: 10pt;">Sianosis</font>
                        </div>
                        <div style="margin-bottom: 5px;">
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '1000164') checked @endif @endforeach
                                ng-model="item.obj[1000164]" />
                            <font style="font-size: 10pt;">Distres pernafasan (Nafas >= 32/m)</font>
                        </div>
                    </td>
                    <td style="border: 1px solid black; padding: 5px; vertical-align: top;">
                        <div style="margin-bottom: 5px;">
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '1000165') checked @endif @endforeach
                                ng-model="item.obj[1000165]" />
                            <font style="font-size: 10pt;">Disres pernafasan (Nafas >= 32/m)</font>
                        </div>
                        <div style="margin-bottom: 5px;">
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '1000166') checked @endif @endforeach
                                ng-model="item.obj[1000166]" />
                            <font style="font-size: 10pt;">Wheezing</font>
                        </div>
                    </td>
                    <td style="border: 1px solid black; padding: 5px; vertical-align: top;">
                        <div style="margin-bottom: 5px;">
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '1000167') checked @endif @endforeach
                                ng-model="item.obj[1000167]" />
                            <font style="font-size: 10pt;">Nafas 24-32x/m</font>
                        </div>
                        <div style="margin-bottom: 5px;">
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '1000168') checked @endif @endforeach
                                ng-model="item.obj[1000168]" />
                            <font style="font-size: 10pt;">Wheezing</font>
                        </div>
                    </td>
                    <td style="border: 1px solid black; padding: 5px; vertical-align: top;">
                        <div style="margin-bottom: 5px;">
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '1000169') checked @endif @endforeach
                                ng-model="item.obj[1000169]" />
                            <font style="font-size: 10pt;">Nafas Normal: 21-24x/m</font>
                        </div>
                    </td>
                    <td style="border: 1px solid black; padding: 5px; vertical-align: top;">
                        <div style="margin-bottom: 5px;">
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '1000170') checked @endif @endforeach
                                ng-model="item.obj[1000170]" />
                            <font style="font-size: 10pt;">Nafas Normal: 12-20/m</font>
                        </div>
                    </td>
                </tr>

                <!-- CIRCULATION (C) -->
                <tr>
                    <td style="border: 1px solid black; padding: 5px; font-weight: bold; vertical-align: top;">
                        CIRCULATION</td>
                    <td style="border: 1px solid black; padding: 5px; vertical-align: top;">
                        <div style="margin-bottom: 5px;">
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '1000171') checked @endif @endforeach
                                ng-model="item.obj[1000171]" />
                            <font style="font-size: 10pt;">Henti Jantung</font>
                        </div>
                        <div style="margin-bottom: 5px;">
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '1000172') checked @endif @endforeach
                                ng-model="item.obj[1000172]" />
                            <font style="font-size: 10pt;">Nadi tidak teraba</font>
                        </div>
                        <div style="margin-bottom: 5px;">
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '1000173') checked @endif @endforeach
                                ng-model="item.obj[1000173]" />
                            <font style="font-size: 10pt;">Pucat/Akral dingin</font>
                        </div>
                        <div style="margin-bottom: 5px;">
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '1000174') checked @endif @endforeach
                                ng-model="item.obj[1000174]" />
                            <font style="font-size: 10pt;">Kejang berkepanjangan</font>
                        </div>
                    </td>
                    <td style="border: 1px solid black; padding: 5px; vertical-align: top;">
                        <div style="margin-bottom: 5px;">
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '1000175') checked @endif @endforeach
                                ng-model="item.obj[1000175]" />
                            <font style="font-size: 10pt;">Nadi teraba lemah</font>
                        </div>
                        <div style="margin-bottom: 5px;">
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '1000176') checked @endif @endforeach
                                ng-model="item.obj[1000176]" />
                            <font style="font-size: 10pt;">Nadi < 50x/m</font>
                        </div>
                        <div style="margin-bottom: 5px;">
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '1000177') checked @endif @endforeach
                                ng-model="item.obj[1000177]" />
                            <font style="font-size: 10pt;">Nadi > 150x/m</font>
                        </div>
                        <div style="margin-bottom: 5px;">
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '1000178') checked @endif @endforeach
                                ng-model="item.obj[1000178]" />
                            <font style="font-size: 10pt;">Nadi teraba lemah</font>
                        </div>
                        <div style="margin-bottom: 5px;">
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '1000179') checked @endif @endforeach
                                ng-model="item.obj[1000179]" />
                            <font style="font-size: 10pt;">Pucat/Akral dingin</font>
                        </div>
                        <div style="margin-bottom: 5px;">
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '1000180') checked @endif @endforeach
                                ng-model="item.obj[1000180]" />
                            <font style="font-size: 10pt;">Hemiparese/afasia</font>
                        </div>
                        <div style="margin-bottom: 5px;">
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '1000181') checked @endif @endforeach
                                ng-model="item.obj[1000181]" />
                            <font style="font-size: 10pt;">CRT > 2 detik</font>
                        </div>
                        <div style="margin-bottom: 5px;">
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '1000182') checked @endif @endforeach
                                ng-model="item.obj[1000182]" />
                            <font style="font-size: 10pt;">TD sistolik < 100 mmHg</font>
                        </div>
                        <div style="margin-bottom: 5px;">
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '1000183') checked @endif @endforeach
                                ng-model="item.obj[1000183]" />
                            <font style="font-size: 10pt;">TD diastolik < 60 mmHg</font>
                        </div>
                        <div style="margin-bottom: 5px;">
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '1000184') checked @endif @endforeach
                                ng-model="item.obj[1000184]" />
                            <font style="font-size: 10pt;">Nyeri akut (> 8)</font>
                        </div>
                        <div style="margin-bottom: 5px;">
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '1000185') checked @endif @endforeach
                                ng-model="item.obj[1000185]" />
                            <font style="font-size: 10pt;">Perdarahan akut</font>
                        </div>
                        <div style="margin-bottom: 5px;">
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '1000186') checked @endif @endforeach
                                ng-model="item.obj[1000186]" />
                            <font style="font-size: 10pt;">Multiple trauma/Fraktur</font>
                        </div>
                        <div style="margin-bottom: 5px;">
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '1000187') checked @endif @endforeach
                                ng-model="item.obj[1000187]" />
                            <font style="font-size: 10pt;">Suhu > 39 C</font>
                        </div>
                    </td>
                    <td style="border: 1px solid black; padding: 5px; vertical-align: top;">
                        <div style="margin-bottom: 5px;">
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '1000188') checked @endif @endforeach
                                ng-model="item.obj[1000188]" />
                            <font style="font-size: 10pt;">Nadi: 120-150x/m</font>
                        </div>
                        <div style="margin-bottom: 5px;">
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '1000189') checked @endif @endforeach
                                ng-model="item.obj[1000189]" />
                            <font style="font-size: 10pt;">TD sistolik > 160 mmHg</font>
                        </div>
                        <div style="margin-bottom: 5px;">
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '1000190') checked @endif @endforeach
                                ng-model="item.obj[1000190]" />
                            <font style="font-size: 10pt;">TD diastolik > 100 mmHg</font>
                        </div>
                        <div style="margin-bottom: 5px;">
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '1000191') checked @endif @endforeach
                                ng-model="item.obj[1000191]" />
                            <font style="font-size: 10pt;">Perdarahan sedang</font>
                        </div>
                        <div style="margin-bottom: 5px;">
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '1000192') checked @endif @endforeach
                                ng-model="item.obj[1000192]" />
                            <font style="font-size: 10pt;">Muntah persisten</font>
                        </div>
                        <div style="margin-bottom: 5px;">
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '1000193') checked @endif @endforeach
                                ng-model="item.obj[1000193]" />
                            <font style="font-size: 10pt;">Dehidrasi</font>
                        </div>
                        <div style="margin-bottom: 5px;">
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '1000194') checked @endif @endforeach
                                ng-model="item.obj[1000194]" />
                            <font style="font-size: 10pt;">Kejang tapi sadar</font>
                        </div>
                        <div style="margin-bottom: 5px;">
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '1000195') checked @endif @endforeach
                                ng-model="item.obj[1000195]" />
                            <font style="font-size: 10pt;">Nyeri sedang sampai berat</font>
                        </div>
                    </td>
                    <td style="border: 1px solid black; padding: 5px; vertical-align: top;">
                        <div style="margin-bottom: 5px;">
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '1000196') checked @endif @endforeach
                                ng-model="item.obj[1000196]" />
                            <font style="font-size: 10pt;">Nadi: 100 - < 120x/m</font>
                        </div>
                        <div style="margin-bottom: 5px;">
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '1000197') checked @endif @endforeach
                                ng-model="item.obj[1000197]" />
                            <font style="font-size: 10pt;">TD sistolik >= 120 - 140 mmHg</font>
                        </div>
                        <div style="margin-bottom: 5px;">
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '1000198') checked @endif @endforeach
                                ng-model="item.obj[1000198]" />
                            <font style="font-size: 10pt;">TD diastolik >= 80 - 100 mmHg</font>
                        </div>
                        <div style="margin-bottom: 5px;">
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '1000199') checked @endif @endforeach
                                ng-model="item.obj[1000199]" />
                            <font style="font-size: 10pt;">Perdarahan dingin</font>
                        </div>
                        <div style="margin-bottom: 5px;">
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '1000200') checked @endif @endforeach
                                ng-model="item.obj[1000200]" />
                            <font style="font-size: 10pt;">Cedera kepala ringan</font>
                        </div>
                        <div style="margin-bottom: 5px;">
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '1000201') checked @endif @endforeach
                                ng-model="item.obj[1000201]" />
                            <font style="font-size: 10pt;">Nyeri ringan sampai sedang</font>
                        </div>
                        <div style="margin-bottom: 5px;">
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '1000202') checked @endif @endforeach
                                ng-model="item.obj[1000202]" />
                            <font style="font-size: 10pt;">Muntah/diare tanpa dehidrasi</font>
                        </div>
                    </td>
                    <td style="border: 1px solid black; padding: 5px; vertical-align: top;">
                        <div style="margin-bottom: 5px;">
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '1000203') checked @endif @endforeach
                                ng-model="item.obj[1000203]" />
                            <font style="font-size: 10pt;">Nadi Normal: 60-100x/m</font>
                        </div>
                        <div style="margin-bottom: 5px;">
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '1000204') checked @endif @endforeach
                                ng-model="item.obj[1000204]" />
                            <font style="font-size: 10pt;">TD Normal (sistolik 120, diastolik 80 mmHg)</font>
                        </div>
                        <div style="margin-bottom: 5px;">
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '1000205') checked @endif @endforeach
                                ng-model="item.obj[1000205]" />
                            <font style="font-size: 10pt;">Luka ringan</font>
                        </div>
                    </td>
                </tr>

                <!-- DISSABILITY (D) -->
                <tr>
                    <td style="border: 1px solid black; padding: 5px; font-weight: bold; vertical-align: top;">
                        DISSABILITY (D)</td>
                    <td style="border: 1px solid black; padding: 5px; vertical-align: top;">
                        <div style="margin-bottom: 5px;">
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '1000206') checked @endif @endforeach
                                ng-model="item.obj[1000206]" />
                            <font style="font-size: 10pt;">GCS < 9</font>
                        </div>
                    </td>
                    <td style="border: 1px solid black; padding: 5px; vertical-align: top;">
                        <div style="margin-bottom: 5px;">
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '1000207') checked @endif @endforeach
                                ng-model="item.obj[1000207]" />
                            <font style="font-size: 10pt;">GCS 9 - 12</font>
                        </div>
                    </td>
                    <td style="border: 1px solid black; padding: 5px; vertical-align: top;">
                        <div style="margin-bottom: 5px;">
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '1000208') checked @endif @endforeach
                                ng-model="item.obj[1000208]" />
                            <font style="font-size: 10pt;">GCS > 12</font>
                        </div>
                    </td>
                    <td style="border: 1px solid black; padding: 5px; vertical-align: top;">
                        <div style="margin-bottom: 5px;">
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '1000209') checked @endif @endforeach
                                ng-model="item.obj[1000209]" />
                            <font style="font-size: 10pt;">GCS 15</font>
                        </div>
                    </td>
                    <td style="border: 1px solid black; padding: 5px; vertical-align: top;">
                        <div style="margin-bottom: 5px;">
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '1000210') checked @endif @endforeach
                                ng-model="item.obj[1000210]" />
                            <font style="font-size: 10pt;">GCS 15</font>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

        <div style="text-align: right;margin-top: 10px; margin-left: auto;margin-right: 0;">
            <b>
                <font style="font-size: 10pt;">Yang Melakukan Pengkajian :</font>
            </b><br>
            <b>
                <font style="font-size: 10pt;">@{{ item.obj[1000150] }}</font>
            </b>
        </div>
        <div
            style="width: 30%;text-align: center;margin-top: 10px; margin-left: auto;margin-right: 0;border: 1px solid black">
            <b>
                <font style="font-size: 11pt;" color="#000000"><i>Perawat / Bidan RS Tria Dipa</i></font>
            </b>
            <br>
            @forelse($dataimg as $d)
                @if ($d->emrdfk == 1)
                    <img src="{{ $d->image }}" width="75" height="75" alt="TTD" />
                    @break
                @endif
            @empty
                <div style="height:75px"></div>
            @endforelse
            <br>
            <b>
                <font style="font-size: 11pt;" color="#000000">@{{ item.obj[1000211] }}</font>
            </b>
        </div>

        <hr style="border:2px solid #000;margin-bottom:0px">
        <table width="100%">
            <tr>
                <td style="text-align: center">
                    <font style="font-size: 11px;" color="#000000"><b>PT. TRIA DIPA MEDIKA</b></font>
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
    var angular = angular.module('angularApp', [], function($interpolateProvider) {
        $interpolateProvider.startSymbol('@{{ ');
$interpolateProvider.endSymbol(' }}');
    }).factory('httpService', function($http, $q) {
        return {
            get: function(url) {
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

    angular.controller('cetakAsesmenAwalKeperawatanIGDCtrl', function($scope, $http, httpService) {
        $scope.item = {
            obj: []
        }
        var dataLoad = {!! json_encode($res['d']) !!};
        var dataVS = {!! json_encode($vitalSigns) !!};
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

            if (dataLoad[i].emrdfk == '3100553') {
                $scope.tglemr = dataLoad[i].value
            }

            if (dataLoad[i].emrdfk == '3100511') {
                $scope.tglLahir = dataLoad[i].value
            }

            if (dataLoad[i].emrdfk == '3100518') {
                $scope.tglLahirPasien = dataLoad[i].value
            }

            if ($scope.item.obj[1000152]==undefined) {
                for (let i = 0; i < dataVS.length; i++) {
                    const element = dataVS[i];
                    if (element.emrdfk == 4241) {
                        $scope.item.obj[1000152] = element.value //Tekanan Darah
                        break;
                    }
                }
            }
            if ($scope.item.obj[1000155]==undefined) {
                for (let i = 0; i < dataVS.length; i++) {
                    const element = dataVS[i];
                    if (element.emrdfk == 4244) {
                        $scope.item.obj[1000155] = element.value //Suhu
                        break;
                    }
                }
            }
            if ($scope.item.obj[1000153]==undefined) {
                for (let i = 0; i < dataVS.length; i++) {
                    const element = dataVS[i];
                    if (element.emrdfk == 4245) {
                        $scope.item.obj[1000153] = element.value //nadi
                        break;
                    }
                }
            }
            if ($scope.item.obj[1000154]==undefined) {
                for (let i = 0; i < dataVS.length; i++) {
                    const element = dataVS[i];
                    if (element.emrdfk == 4246) {
                        $scope.item.obj[1000154] = element.value //Pernapasan
                        break;
                    }
                }
            }


        }
    })

    $(document).ready(function() {
        window.print();
    });
</script>
</body>

</html>
