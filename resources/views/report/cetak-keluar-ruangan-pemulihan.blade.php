<!DOCTYPE html >
<html lang="en" ng-app="angularApp">

<head>
    <meta charset="utf-8">
    <title>Report</title>

    @if(stripos(\Request::url(), 'localhost') !== FALSE)
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

<body class="A4" style="font-family:Tahoma;height: auto" ng-controller="cetakKeluarRuanganPemulihanCtrl">
<section class="sheet padding-10mm" style="font-family:Tahoma;height: auto">

        <table cellspacing="0" cellpadding="0" border="0" width="100%">
            <tbody>
            <tr>
                <td width="10%" style="padding: 5px">
                @if(stripos(\Request::url(), 'localhost') !== FALSE)
                    <img src="{{ asset('img/logo_triadipa.jpeg') }}" alt="" style="width: 90px;">
                @else
                    <img src="{{ asset('service/img/logo_triadipa.jpeg') }}" alt="" style="width: 90px;">
                @endif
                </td>
                <td style="text-align: center">
                    <b>
                        <span style="font-size: 16px"><u>KELUAR RUANGAN PEMULIHAN</u></span>
                    </b>
                </td>
                
            </tbody>
        </table>
        <table cellspacing="0" cellpadding="0" border="0" width="100%">
            <tbody>
            <tr> 
                <td width="10%" style="text-align: justify; border: 1px solid black; vertical-align: top; padding: 5px; font-size: 9pt;">
                    <b>No. RM</b>
                    <p style="font-size: 9pt; display: inline; margin: 0.5cm;"><b>: {!! $identitas->nocm !!}</b></b></p><br>     
                    <b>Nama</b>
                    <p style="font-size: 9pt; display: inline; margin: 0.5cm;"><b>: {!! $identitas->namapasien !!}</b></p><br>       
                    <b>Tgl. Lahir</b>
                    <p style="font-size: 9pt; display: inline; margin: 0.5cm;"><b>: {!! $identitas->tgllahir !!}</b></p><br>
                    <b>Jenis Kelamin</b>
                    <p style="font-size: 9pt; display: inline; margin: 0.5cm;"><b>: {!! $identitas->jeniskelamin !!}</b></p><br>
                </td>   
                
            </tbody>
        </table>

        <div class="grid_12" style="margin-top: 30px;"></div>
        <table border="1" cellspacing="0" width="100%" >
            <thead>
                <tr>
                    <th>ALDRETE SKOR</th>
                    <th>Aktivitas</th>
                    <th>Sirkulasi</th>
                    <th>Pernafasan</th>
                    <th>Kesadaran</th>
                    <th>Warna Kulit</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Saat Masuk Ruang Pemulihan</td>
                    <td>@{{ item.obj[21020326] }}</td>
                    <td>@{{ item.obj[21020327] }}</td>
                    <td>@{{ item.obj[21020328] }}</td>
                    <td>@{{ item.obj[21020329] }}</td>
                    <td>@{{ item.obj[21020330] }}</td>
                    <td>@{{ item.obj[21020331] }}</td>
                </tr>
                <tr>
                    <td>Saat Keluar Ruang Pemulihan</td>
                    <td>@{{ item.obj[21020332] }}</td>
                    <td>@{{ item.obj[21020333] }}</td>
                    <td>@{{ item.obj[21020334] }}</td>
                    <td>@{{ item.obj[21020335] }}</td>
                    <td>@{{ item.obj[21020336] }}</td>
                    <td>@{{ item.obj[21020337] }}</td>
                </tr>
            </tbody>
        </table>

        <table cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th colspan="3">KELUAR RUANG PULIH</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <b>Pasien sudah bisa pindah ke</b> : @{{ item.obj[21020338] }} <br>
                        <b>Keluar Ruang Pulih Pukul</b> : @{{ item.obj[21020339] }}
                    </td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th colspan="3">TANDA-TANDA VITAL</th>
                </tr>
                <tr>
                    <td>
                        <b>TD</b> : @{{ item.obj[21020340] }} <br>
                        <b>N</b> : @{{ item.obj[21020341] }} <br>
                        <b>SpO2</b> : @{{ item.obj[21020343] }} <br>
                        <b>RR</b> : @{{ item.obj[21020342] }}
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td><b>Catatan Khusus</b> : @{{ item.obj[21020344] }}</td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <div style="display: flex; justify-content: space-between; margin-top: 30px;">
            <div style="width: 30%; text-align: center; border: 1px solid black; margin-right: 20px;">
                <b><font style="font-size: 11pt;" color="#000000"><i>Petugas RR</i></font></b>
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
                <b><font style="font-size: 11pt;" color="#000000">@{{ item.obj[21020345] }}</font></b>
            </div>

            <div style="width: 30%; text-align: center; border: 1px solid black;">
                <b><font style="font-size: 11pt;" color="#000000"><i>Nama & TTD DPJP</i></font></b>
                <br>
                @forelse($dataimg as $d)
                    @if($d->emrdfk == 2)
                        <img src="{{ $d->image }}" width="75" height="75" alt="TTD" />
                    @break    
                    @endif   
                @empty
                    <div style="height:75px"></div>
                @endforelse
                <br>
                <b><font style="font-size: 11pt;" color="#000000">@{{ item.obj[21020346] }}</font></b>
            </div>
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

    angular.controller('cetakKeluarRuanganPemulihanCtrl', function ($scope, $http, httpService) {
        $scope.item = {
            obj: []
        }
        var dataLoad = {!! json_encode($raw )!!};
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
