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

<body class="A4" style="font-family:Tahoma;height: auto" ng-controller="cetakSignInBedahInfusCtrl">
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

        <!-- Sign In -->
        <br>
        <div style="margin-top: 10px;">
            <fieldset style="margin-top: 10px;border-radius: 10px;">
                <legend style="font-size: 11pt; font-weight: bold;">TIME OUT</legend>
                <div ng-repeat="list in listTimeOut" style="margin-top: 10px;">
                    <b><font style="font-size: 10pt;" ng-bind="list.nama"></font></b>
                    <div ng-repeat="jawab in list.detail" style="margin-top: 5px;">
                        <div ng-switch on="jawab.type">
                            <div ng-switch-when="checkbox" style="display: inline-block; margin-right: 20px;">
                                <input type="checkbox" class="k-checkbox"
                                    ng-checked="item.obj[jawab.id]"
                                    ng-model="item.obj[jawab.id]">
                                <label class="k-checkbox-label" style="font-size: 10pt;" ng-bind="jawab.nama"></label>
                            </div>
                            <div ng-switch-when="checkbox2" style="display: block; margin-top: 5px;">
                                <input type="checkbox" class="k-checkbox"
                                    ng-checked="item.obj[jawab.id]"
                                    ng-model="item.obj[jawab.id]">
                                <label class="k-checkbox-label" style="font-size: 10pt;" ng-bind="jawab.nama"></label>
                            </div>
                            <div ng-switch-when="textbox" style="display: inline-block; margin-left: 10px; vertical-align: middle;">
                                <label style="font-size: 10pt;" ng-bind="item.obj[jawab.id]"></label>
                            </div>
                            <div ng-switch-when="datetime" style="display: block; margin-top: 5px;">
                                <label style="font-size: 10pt;" ng-bind="item.obj[jawab.id]"></label>
                                <label style="font-size: 10pt;">@{{ item.obj[21001202] }}</label>
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>
        </div>
        <div style="clear: both;"></div>

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

    angular.controller('cetakSignInBedahInfusCtrl', function($scope, $http, httpService) {
        $scope.item = {
            obj: []
        }

        $scope.listTimeOut = [
            {
                "id": 1, "nama": "Apakah semua anggota tim dikonfirmasi nama dan perannya ?",
                "detail": [
                    { "id": 21001322, "nama": "Ya", "type": "checkbox" },
                ]
            },
            {
                "id": 1, "nama": "Dokter Operator, Anestesi dan Perawat secara verbal memberi konfirmasi :",
                "detail": [
                    { "id": 21001323, "nama": "Siapa Nama Pasien", "type": "checkbox" },
                    { "id": 21001324, "nama": "Apa tindakan, tempat dan posisi yang digunakan", "type": "checkbox" },
                ]
            },
        ]

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
                if (dataLoad[i].value == '1' || dataLoad[i].value == 1 || dataLoad[i].value === true) {
                    chekedd = true
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
