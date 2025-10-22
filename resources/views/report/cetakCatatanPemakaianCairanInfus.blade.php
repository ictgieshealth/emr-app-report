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

<body class="A4" style="font-family:Tahoma;height: auto" ng-controller="cetakCatatanPemakaianCairanInfusCtrl">
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


        <!-- Catatan Pemakaian Cairan Infus -->
        <br>
        <div style="margin-top: 10px;">
            <fieldset style="margin-top: 10px;">
                <legend style="font-size: 11pt; font-weight: bold;">CATATAN PEMAKAIAN CAIRAN INFUS</legend>
                <div style="margin-top: 10px;">
                    <table style="width:100%; color: #4c5356; border-collapse: collapse; border: 1px solid black;">
                        <thead>
                            <tr>
                                <th style="border: 1px solid black; text-align: center; padding: 5px; font-weight: bold; width: 300px;">
                                    <font style="font-size: 10pt;">TGL</font>
                                </th>
                                <th style="border: 1px solid black; text-align: center; padding: 5px; font-weight: bold; width: 200px;">
                                    <font style="font-size: 10pt;">INTRUKSI DOKTER</font>
                                </th>
                                <th style="border: 1px solid black; text-align: center; padding: 5px; font-weight: bold; width: 100px;">
                                    <font style="font-size: 10pt;">KOLF</font>
                                </th>
                                <th style="border: 1px solid black; text-align: center; padding: 5px; font-weight: bold; width: 200px;">
                                    <font style="font-size: 10pt;">ISI</font>
                                </th>
                                <th style="border: 1px solid black; text-align: center; padding: 5px; font-weight: bold; width: 100px;">
                                    <font style="font-size: 10pt;">DIMULAI PUKUL</font>
                                </th>
                                <th style="border: 1px solid black; text-align: center; padding: 5px; font-weight: bold; width: 200px;">
                                    <font style="font-size: 10pt;">NAMA JELAS</font>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="list in listCatatanPemakaianCairanInfus1">
                                <td ng-repeat="jawab in list.detail" style="border: 1px solid black; text-align: center; padding: 5px; vertical-align: top;">
                                    <div ng-switch on="jawab.type">
                                        <div ng-switch-when="label">
                                            <label style="font-size: 10pt;">@{{ jawab.nama }}</label>
                                        </div>
                                        <div ng-switch-when="datetime" style="margin-top: 5px;">
                                            <label style="font-size: 10pt;">@{{ item.obj[jawab.id] }}</label>
                                        </div>
                                        <div ng-switch-when="textarea" style="margin-top: 5px;">
                                            <textarea cols="6" rows="3" type="input" class="k-textbox" ng-model="item.obj[jawab.id]" style="width: 95%;">@foreach ($res['d'] as $item)@if ($item->emrdfk == '@{{jawab.id}}'){{ $item->value }}@endif @endforeach</textarea>
                                        </div>
                                        <div ng-switch-when="textbox" style="margin-top: 5px;">
                                            <label style="font-size: 10pt;">@{{ item.obj[jawab.id] }}</label>
                                        </div>
                                        <div ng-switch-when="time" style="margin-top: 5px;">
                                            <label style="font-size: 10pt;">@{{ item.obj[jawab.id] ? item.obj[jawab.id].substring(11,16) : '' }}</label>
                                        </div>
                                        <div style="margin-top: 5px;" ng-switch-when="combobox">
                                            <label style="font-size: 10pt;">@{{ item.obj[jawab.id] }}</label>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </fieldset>
        </div>

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

    angular.controller('cetakCatatanPemakaianCairanInfusCtrl', function($scope, $http, httpService) {
        $scope.item = {
            obj: []
        }

        // Data untuk Catatan Pemakaian Cairan Infus
        $scope.listCatatanPemakaianCairanInfus1 = [
            {
                "id": 1, "nama": "",
                "detail": [
                    { "id": 21007373, "nama": "", "type": "datetime" },
                    { "id": 21007374, "nama": "", "type": "textarea" },
                    { "id": 21007375, "nama": "Ke - 1", "type": "label" },
                    { "id": 21007376, "nama": "", "type": "textbox" },
                    { "id": 21007377, "nama": "", "type": "time" },
                    { "id": 21007378, "nama": "", "type": "combobox" },
                ]
            },
            {
                "id": 1, "nama": "",
                "detail": [
                    { "id": 21008829, "nama": "", "type": "datetime" },
                    { "id": 21008830, "nama": "", "type": "textarea" },
                    { "id": 21007379, "nama": "Ke - 2", "type": "label" },
                    { "id": 21007380, "nama": "", "type": "textbox" },
                    { "id": 21007381, "nama": "", "type": "time" },
                    { "id": 21007382, "nama": "", "type": "combobox" },
                ]
            },
            {
                "id": 1, "nama": "",
                "detail": [
                    { "id": 21008831, "nama": "", "type": "datetime" },
                    { "id": 21008832, "nama": "", "type": "textarea" },
                    { "id": 21007383, "nama": "Ke - 3", "type": "label" },
                    { "id": 21007384, "nama": "", "type": "textbox" },
                    { "id": 21007385, "nama": "", "type": "time" },
                    { "id": 21007386, "nama": "", "type": "combobox" },
                ]
            },
            {
                "id": 1, "nama": "",
                "detail": [
                    { "id": 21008833, "nama": "", "type": "datetime" },
                    { "id": 21008834, "nama": "", "type": "textarea" },
                    { "id": 21007387, "nama": "Ke - 4", "type": "label" },
                    { "id": 21007388, "nama": "", "type": "textbox" },
                    { "id": 21007389, "nama": "", "type": "time" },
                    { "id": 21007390, "nama": "", "type": "combobox" },
                ]
            },
            {
                "id": 1, "nama": "",
                "detail": [
                    { "id": 21008835, "nama": "", "type": "datetime" },
                    { "id": 21008836, "nama": "", "type": "textarea" },
                    { "id": 21007391, "nama": "Ke - 5", "type": "label" },
                    { "id": 21007392, "nama": "", "type": "textbox" },
                    { "id": 21007393, "nama": "", "type": "time" },
                    { "id": 21007394, "nama": "", "type": "combobox" },
                ]
            },
            {
                "id": 1, "nama": "",
                "detail": [
                    { "id": 21008837, "nama": "", "type": "datetime" },
                    { "id": 21008838, "nama": "", "type": "textarea" },
                    { "id": 21007395, "nama": "Ke - 6", "type": "label" },
                    { "id": 21007396, "nama": "", "type": "textbox" },
                    { "id": 21007397, "nama": "", "type": "time" },
                    { "id": 21007398, "nama": "", "type": "combobox" },
                ]
            },
            {
                "id": 1, "nama": "",
                "detail": [
                    { "id": 21008839, "nama": "", "type": "datetime" },
                    { "id": 21008840, "nama": "", "type": "textarea" },
                    { "id": 21007399, "nama": "Ke - 7", "type": "label" },
                    { "id": 21007400, "nama": "", "type": "textbox" },
                    { "id": 21007401, "nama": "", "type": "time" },
                    { "id": 21007402, "nama": "", "type": "combobox" },
                ]
            },
            {
                "id": 1, "nama": "",
                "detail": [
                    { "id": 21008841, "nama": "", "type": "datetime" },
                    { "id": 21008842, "nama": "", "type": "textarea" },
                    { "id": 21007403, "nama": "Ke - 8", "type": "label" },
                    { "id": 21007404, "nama": "", "type": "textbox" },
                    { "id": 21007405, "nama": "", "type": "time" },
                    { "id": 21007406, "nama": "", "type": "combobox" },
                ]
            },
            {
                "id": 1, "nama": "",
                "detail": [
                    { "id": 21008843, "nama": "", "type": "datetime" },
                    { "id": 21008844, "nama": "", "type": "textarea" },
                    { "id": 21007407, "nama": "Ke - 9", "type": "label" },
                    { "id": 21007408, "nama": "", "type": "textbox" },
                    { "id": 21007409, "nama": "", "type": "time" },
                    { "id": 21007410, "nama": "", "type": "combobox" },
                ]
            },
            {
                "id": 1, "nama": "",
                "detail": [
                    { "id": 21008845, "nama": "", "type": "datetime" },
                    { "id": 21008846, "nama": "", "type": "textarea" },
                    { "id": 21007411, "nama": "Ke - 10", "type": "label" },
                    { "id": 21007412, "nama": "", "type": "textbox" },
                    { "id": 21007413, "nama": "", "type": "time" },
                    { "id": 21007414, "nama": "", "type": "combobox" },
                ]
            },
            {
                "id": 1, "nama": "",
                "detail": [
                    { "id": 21008847, "nama": "", "type": "datetime" },
                    { "id": 21008848, "nama": "", "type": "textarea" },
                    { "id": 21007415, "nama": "Ke - 11", "type": "label" },
                    { "id": 21007416, "nama": "", "type": "textbox" },
                    { "id": 21007417, "nama": "", "type": "time" },
                    { "id": 21007418, "nama": "", "type": "combobox" },
                ]
            },
            {
                "id": 1, "nama": "",
                "detail": [
                    { "id": 21008849, "nama": "", "type": "datetime" },
                    { "id": 21008850, "nama": "", "type": "textarea" },
                    { "id": 21007419, "nama": "Ke - 12", "type": "label" },
                    { "id": 21007420, "nama": "", "type": "textbox" },
                    { "id": 21007421, "nama": "", "type": "time" },
                    { "id": 21007422, "nama": "", "type": "combobox" },
                ]
            },
            {
                "id": 1, "nama": "",
                "detail": [
                    { "id": 21008851, "nama": "", "type": "datetime" },
                    { "id": 21008852, "nama": "", "type": "textarea" },
                    { "id": 21007423, "nama": "Ke - 13", "type": "label" },
                    { "id": 21007424, "nama": "", "type": "textbox" },
                    { "id": 21007425, "nama": "", "type": "time" },
                    { "id": 21007426, "nama": "", "type": "combobox" },
                ]
            },
            {
                "id": 1, "nama": "",
                "detail": [
                    { "id": 21008853, "nama": "", "type": "datetime" },
                    { "id": 21008854, "nama": "", "type": "textarea" },
                    { "id": 21007427, "nama": "Ke - 14", "type": "label" },
                    { "id": 21007428, "nama": "", "type": "textbox" },
                    { "id": 21007429, "nama": "", "type": "time" },
                    { "id": 21007430, "nama": "", "type": "combobox" },
                ]
            },
            {
                "id": 1, "nama": "",
                "detail": [
                    { "id": 21008855, "nama": "", "type": "datetime" },
                    { "id": 21008856, "nama": "", "type": "textarea" },
                    { "id": 21007431, "nama": "Ke - 15", "type": "label" },
                    { "id": 21007432, "nama": "", "type": "textbox" },
                    { "id": 21007433, "nama": "", "type": "time" },
                    { "id": 21007434, "nama": "", "type": "combobox" },
                ]
            },
            {
                "id": 1, "nama": "",
                "detail": [
                    { "id": 21008857, "nama": "", "type": "datetime" },
                    { "id": 21008858, "nama": "", "type": "textarea" },
                    { "id": 21007435, "nama": "Ke - 16", "type": "label" },
                    { "id": 21007436, "nama": "", "type": "textbox" },
                    { "id": 21007437, "nama": "", "type": "time" },
                    { "id": 21007438, "nama": "", "type": "combobox" },
                ]
            },
            {
                "id": 1, "nama": "",
                "detail": [
                    { "id": 21008859, "nama": "", "type": "datetime" },
                    { "id": 21008860, "nama": "", "type": "textarea" },
                    { "id": 21007439, "nama": "Ke - 17", "type": "label" },
                    { "id": 21007440, "nama": "", "type": "textbox" },
                    { "id": 21007441, "nama": "", "type": "time" },
                    { "id": 21007442, "nama": "", "type": "combobox" },
                ]
            },
            {
                "id": 1, "nama": "",
                "detail": [
                    { "id": 21008861, "nama": "", "type": "datetime" },
                    { "id": 21008862, "nama": "", "type": "textarea" },
                    { "id": 21007443, "nama": "Ke - 18", "type": "label" },
                    { "id": 21007444, "nama": "", "type": "textbox" },
                    { "id": 21007445, "nama": "", "type": "time" },
                    { "id": 21007446, "nama": "", "type": "combobox" },
                ]
            },
            {
                "id": 1, "nama": "",
                "detail": [
                    { "id": 21008863, "nama": "", "type": "datetime" },
                    { "id": 21008864, "nama": "", "type": "textarea" },
                    { "id": 21007447, "nama": "Ke - 19", "type": "label" },
                    { "id": 21007448, "nama": "", "type": "textbox" },
                    { "id": 21007449, "nama": "", "type": "time" },
                    { "id": 21007450, "nama": "", "type": "combobox" },
                ]
            },
            {
                "id": 1, "nama": "",
                "detail": [
                    { "id": 21008865, "nama": "", "type": "datetime" },
                    { "id": 21008866, "nama": "", "type": "textarea" },
                    { "id": 21007451, "nama": "Ke - 20", "type": "label" },
                    { "id": 21007452, "nama": "", "type": "textbox" },
                    { "id": 21007453, "nama": "", "type": "time" },
                    { "id": 21007454, "nama": "", "type": "combobox" },
                ]
            },
            {
                "id": 1, "nama": "",
                "detail": [
                    { "id": 21008867, "nama": "", "type": "datetime" },
                    { "id": 21008868, "nama": "", "type": "textarea" },
                    { "id": 21007455, "nama": "Ke - 21", "type": "label" },
                    { "id": 21007456, "nama": "", "type": "textbox" },
                    { "id": 21007457, "nama": "", "type": "time" },
                    { "id": 21007458, "nama": "", "type": "combobox" },
                ]
            },
            {
                "id": 1, "nama": "",
                "detail": [
                    { "id": 21008869, "nama": "", "type": "datetime" },
                    { "id": 21008870, "nama": "", "type": "textarea" },
                    { "id": 21007459, "nama": "Ke - 22", "type": "label" },
                    { "id": 21007460, "nama": "", "type": "textbox" },
                    { "id": 21007461, "nama": "", "type": "time" },
                    { "id": 21007462, "nama": "", "type": "combobox" },
                ]
            },
            {
                "id": 1, "nama": "",
                "detail": [
                    { "id": 21007463, "nama": "", "type": "datetime" },
                    { "id": 21007464, "nama": "", "type": "textarea" },
                    { "id": 21007465, "nama": "Ke - 23", "type": "label" },
                    { "id": 21007466, "nama": "", "type": "textbox" },
                    { "id": 21007467, "nama": "", "type": "time" },
                    { "id": 21007468, "nama": "", "type": "combobox" },
                ]
            },
            {
                "id": 1, "nama": "",
                "detail": [
                    { "id": 21008871, "nama": "", "type": "datetime" },
                    { "id": 21008872, "nama": "", "type": "textarea" },
                    { "id": 21007469, "nama": "Ke - 24", "type": "label" },
                    { "id": 21007470, "nama": "", "type": "textbox" },
                    { "id": 21007471, "nama": "", "type": "time" },
                    { "id": 21007472, "nama": "", "type": "combobox" },
                ]
            },
            {
                "id": 1, "nama": "",
                "detail": [
                    { "id": 21008873, "nama": "", "type": "datetime" },
                    { "id": 21008874, "nama": "", "type": "textarea" },
                    { "id": 21007473, "nama": "Ke - 25", "type": "label" },
                    { "id": 21007474, "nama": "", "type": "textbox" },
                    { "id": 21007475, "nama": "", "type": "time" },
                    { "id": 21007476, "nama": "", "type": "combobox" },
                ]
            },
            {
                "id": 1, "nama": "",
                "detail": [
                    { "id": 21008875, "nama": "", "type": "datetime" },
                    { "id": 21008876, "nama": "", "type": "textarea" },
                    { "id": 21007477, "nama": "Ke - 26", "type": "label" },
                    { "id": 21007478, "nama": "", "type": "textbox" },
                    { "id": 21007479, "nama": "", "type": "time" },
                    { "id": 21007480, "nama": "", "type": "combobox" },
                ]
            },
            {
                "id": 1, "nama": "",
                "detail": [
                    { "id": 21008877, "nama": "", "type": "datetime" },
                    { "id": 21008878, "nama": "", "type": "textarea" },
                    { "id": 21007481, "nama": "Ke - 27", "type": "label" },
                    { "id": 21007482, "nama": "", "type": "textbox" },
                    { "id": 21007483, "nama": "", "type": "time" },
                    { "id": 21007484, "nama": "", "type": "combobox" },
                ]
            },
            {
                "id": 1, "nama": "",
                "detail": [
                    { "id": 21008879, "nama": "", "type": "datetime" },
                    { "id": 21008880, "nama": "", "type": "textarea" },
                    { "id": 21007485, "nama": "Ke - 28", "type": "label" },
                    { "id": 21007486, "nama": "", "type": "textbox" },
                    { "id": 21007487, "nama": "", "type": "time" },
                    { "id": 21007488, "nama": "", "type": "combobox" },
                ]
            },
            {
                "id": 1, "nama": "",
                "detail": [
                    { "id": 21008881, "nama": "", "type": "datetime" },
                    { "id": 21008882, "nama": "", "type": "textarea" },
                    { "id": 21007489, "nama": "Ke - 29", "type": "label" },
                    { "id": 21007490, "nama": "", "type": "textbox" },
                    { "id": 21007491, "nama": "", "type": "time" },
                    { "id": 21007492, "nama": "", "type": "combobox" },
                ]
            },
            {
                "id": 1, "nama": "",
                "detail": [
                    { "id": 21008883, "nama": "", "type": "datetime" },
                    { "id": 21008884, "nama": "", "type": "textarea" },
                    { "id": 21007493, "nama": "Ke - 30", "type": "label" },
                    { "id": 21007494, "nama": "", "type": "textbox" },
                    { "id": 21007495, "nama": "", "type": "time" },
                    { "id": 21007496, "nama": "", "type": "combobox" },
                ]
            },
            {
                "id": 1, "nama": "",
                "detail": [
                    { "id": 21008885, "nama": "", "type": "datetime" },
                    { "id": 21008886, "nama": "", "type": "textarea" },
                    { "id": 21007497, "nama": "Ke - 31", "type": "label" },
                    { "id": 21007498, "nama": "", "type": "textbox" },
                    { "id": 21007499, "nama": "", "type": "time" },
                    { "id": 21007500, "nama": "", "type": "combobox" },
                ]
            },
            {
                "id": 1, "nama": "",
                "detail": [
                    { "id": 21008887, "nama": "", "type": "datetime" },
                    { "id": 21008888, "nama": "", "type": "textarea" },
                    { "id": 21007501, "nama": "Ke - 32", "type": "label" },
                    { "id": 21007502, "nama": "", "type": "textbox" },
                    { "id": 21007503, "nama": "", "type": "time" },
                    { "id": 21007504, "nama": "", "type": "combobox" },
                ]
            },
            {
                "id": 1, "nama": "",
                "detail": [
                    { "id": 21008889, "nama": "", "type": "datetime" },
                    { "id": 21008890, "nama": "", "type": "textarea" },
                    { "id": 21007505, "nama": "Ke - 33", "type": "label" },
                    { "id": 21007506, "nama": "", "type": "textbox" },
                    { "id": 21007507, "nama": "", "type": "time" },
                    { "id": 21007508, "nama": "", "type": "combobox" },
                ]
            },
            {
                "id": 1, "nama": "",
                "detail": [
                    { "id": 21008891, "nama": "", "type": "datetime" },
                    { "id": 21008892, "nama": "", "type": "textarea" },
                    { "id": 21007509, "nama": "Ke - 34", "type": "label" },
                    { "id": 21007510, "nama": "", "type": "textbox" },
                    { "id": 21007511, "nama": "", "type": "time" },
                    { "id": 21007512, "nama": "", "type": "combobox" },
                ]
            },
            {
                "id": 1, "nama": "",
                "detail": [
                    { "id": 21008893, "nama": "", "type": "datetime" },
                    { "id": 21008894, "nama": "", "type": "textarea" },
                    { "id": 21007513, "nama": "Ke - 35", "type": "label" },
                    { "id": 21007514, "nama": "", "type": "textbox" },
                    { "id": 21007515, "nama": "", "type": "time" },
                    { "id": 21007516, "nama": "", "type": "combobox" },
                ]
            },
            {
                "id": 1, "nama": "",
                "detail": [
                    { "id": 21008895, "nama": "", "type": "datetime" },
                    { "id": 21008896, "nama": "", "type": "textarea" },
                    { "id": 21007517, "nama": "Ke - 36", "type": "label" },
                    { "id": 21007518, "nama": "", "type": "textbox" },
                    { "id": 21007519, "nama": "", "type": "time" },
                    { "id": 21007520, "nama": "", "type": "combobox" },
                ]
            },
            {
                "id": 1, "nama": "",
                "detail": [
                    { "id": 21008897, "nama": "", "type": "datetime" },
                    { "id": 21008898, "nama": "", "type": "textarea" },
                    { "id": 21007521, "nama": "Ke - 37", "type": "label" },
                    { "id": 21007522, "nama": "", "type": "textbox" },
                    { "id": 21007523, "nama": "", "type": "time" },
                    { "id": 21007524, "nama": "", "type": "combobox" },
                ]
            },
            {
                "id": 1, "nama": "",
                "detail": [
                    { "id": 21008899, "nama": "", "type": "datetime" },
                    { "id": 21008900, "nama": "", "type": "textarea" },
                    { "id": 21007525, "nama": "Ke - 38", "type": "label" },
                    { "id": 21007526, "nama": "", "type": "textbox" },
                    { "id": 21007527, "nama": "", "type": "time" },
                    { "id": 21007528, "nama": "", "type": "combobox" },
                ]
            },
            {
                "id": 1, "nama": "",
                "detail": [
                    { "id": 21008901, "nama": "", "type": "datetime" },
                    { "id": 21008902, "nama": "", "type": "textarea" },
                    { "id": 21007529, "nama": "Ke - 39", "type": "label" },
                    { "id": 21007530, "nama": "", "type": "textbox" },
                    { "id": 21007531, "nama": "", "type": "time" },
                    { "id": 21007532, "nama": "", "type": "combobox" },
                ]
            },
            {
                "id": 1, "nama": "",
                "detail": [
                    { "id": 21008903, "nama": "", "type": "datetime" },
                    { "id": 21008904, "nama": "", "type": "textarea" },
                    { "id": 21007533, "nama": "Ke - 40", "type": "label" },
                    { "id": 21007534, "nama": "", "type": "textbox" },
                    { "id": 21007535, "nama": "", "type": "time" },
                    { "id": 21007536, "nama": "", "type": "combobox" },
                ]
            },
            {
                "id": 1, "nama": "",
                "detail": [
                    { "id": 21008905, "nama": "", "type": "datetime" },
                    { "id": 21008906, "nama": "", "type": "textarea" },
                    { "id": 21007537, "nama": "Ke - 41", "type": "label" },
                    { "id": 21007538, "nama": "", "type": "textbox" },
                    { "id": 21007539, "nama": "", "type": "time" },
                    { "id": 21007540, "nama": "", "type": "combobox" },
                ]
            },
            {
                "id": 1, "nama": "",
                "detail": [
                    { "id": 21008907, "nama": "", "type": "datetime" },
                    { "id": 21008908, "nama": "", "type": "textarea" },
                    { "id": 21007541, "nama": "Ke - 42", "type": "label" },
                    { "id": 21007542, "nama": "", "type": "textbox" },
                    { "id": 21007543, "nama": "", "type": "time" },
                    { "id": 21007544, "nama": "", "type": "combobox" },
                ]
            },
            {
                "id": 1, "nama": "",
                "detail": [
                    { "id": 21008909, "nama": "", "type": "datetime" },
                    { "id": 21008910, "nama": "", "type": "textarea" },
                    { "id": 21007545, "nama": "Ke - 43", "type": "label" },
                    { "id": 21007546, "nama": "", "type": "textbox" },
                    { "id": 21007547, "nama": "", "type": "time" },
                    { "id": 21007548, "nama": "", "type": "combobox" },
                ]
            },
            {
                "id": 1, "nama": "",
                "detail": [
                    { "id": 21008911, "nama": "", "type": "datetime" },
                    { "id": 21008912, "nama": "", "type": "textarea" },
                    { "id": 21007549, "nama": "Ke - 44", "type": "label" },
                    { "id": 21007550, "nama": "", "type": "textbox" },
                    { "id": 21007551, "nama": "", "type": "time" },
                    { "id": 21007552, "nama": "", "type": "combobox" },
                ]
            },
        ];
        var dataLoad = {!! json_encode($res['d']) !!};
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



        }
    })

    $(document).ready(function() {
        window.print();
    });
</script>
</body>

</html>
