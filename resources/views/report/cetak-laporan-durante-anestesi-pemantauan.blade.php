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

        /* @media print{
            @page {size: landscape}
        } */

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

<body class="A4" style="font-family:Tahoma;height: auto" ng-controller="cetakDuranteAnestesiPemantauanCtrl">
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
                        <span style="font-size: 16px"><u>DURANTE ANESTESI PEMANTAUAN</u></span>
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

        <table border="1" cellspacing="0" width="100%">
            <tbody>
                <tr>
                    <td style="min-width: 10px; padding: 10px;">Pemantauan</td>
                    <td style="min-width: 10px; padding: 10px;">@{{ item.obj[21023057] }}</td>
                    <td style="min-width: 10px; padding: 10px;">@{{ item.obj[21023058] }}</td>
                    <td style="min-width: 10px; padding: 10px;">@{{ item.obj[21023059] }}</td>
                    <td style="min-width: 10px; padding: 10px;">@{{ item.obj[21023060] }}</td>
                    <td style="min-width: 10px; padding: 10px;">@{{ item.obj[21023061] }}</td>
                    <td style="min-width: 10px; padding: 10px;">@{{ item.obj[21023062] }}</td>
                    <td style="min-width: 10px; padding: 10px;">@{{ item.obj[21023063] }}</td>
                    <td style="min-width: 10px; padding: 10px;">@{{ item.obj[21023064] }}</td>
                    <td style="min-width: 10px; padding: 10px;">@{{ item.obj[21023065] }}</td>
                    <td style="min-width: 10px; padding: 10px;">@{{ item.obj[21023066] }}</td>
                </tr>
                <tr>
                    <td style="min-width: 10px; padding: 10px;">
                        Cairan Infus (ml)
                    </td>
                    <td style="min-width: 10px; padding: 10px;">
                        @{{ item.obj[21022865] }}<br />
                    </td>
                    <td style="min-width: 10px; padding: 10px;">
                        @{{ item.obj[21022866] }}<br />
                    </td>
                    <td style="min-width: 10px; padding: 10px;">
                        @{{ item.obj[21022867] }}<br />
                    </td>
                    <td style="min-width: 10px; padding: 10px;">
                        @{{ item.obj[21022868] }}<br />
                    </td>
                    <td style="min-width: 10px; padding: 10px;">
                        @{{ item.obj[21022869] }}<br />
                    </td>
                    <td style="min-width: 10px; padding: 10px;">
                        @{{ item.obj[21022870] }}<br />
                    </td>
                    <td style="min-width: 10px; padding: 10px;">
                        @{{ item.obj[21022871] }}<br />
                    </td>
                    <td style="min-width: 10px; padding: 10px;">
                        @{{ item.obj[21022872] }}<br />
                    </td>
                    <td style="min-width: 10px; padding: 10px;">
                        @{{ item.obj[21022873] }}<br />
                    </td>
                    <td style="min-width: 10px; padding: 10px;">
                        @{{ item.obj[21022874] }}<br />
                    </td>
                </tr>
                <tr>
                    <td style="min-width: 10px; padding: 10px;">
                        Darah masuk (ml)
                    </td>
                    <td style="min-width: 10px; padding: 10px;">
                        @{{ item.obj[21022913] }}<br />
                    </td>
                    <td style="min-width: 10px; padding: 10px;">
                        @{{ item.obj[21022914] }}<br />
                    </td>
                    <td style="min-width: 10px; padding: 10px;">
                        @{{ item.obj[21022915] }}<br />
                    </td>
                    <td style="min-width: 10px; padding: 10px;">
                        @{{ item.obj[21022916] }}<br />
                    </td>
                    <td style="min-width: 10px; padding: 10px;">
                        @{{ item.obj[21022917] }}<br />
                    </td>
                    <td style="min-width: 10px; padding: 10px;">
                        @{{ item.obj[21022918] }}<br />
                    </td>
                    <td style="min-width: 10px; padding: 10px;">
                        @{{ item.obj[21022919] }}<br />
                    </td>
                    <td style="min-width: 10px; padding: 10px;">
                        @{{ item.obj[21022920] }}<br />
                    </td>
                    <td style="min-width: 10px; padding: 10px;">
                        @{{ item.obj[21022921] }}<br />
                    </td>
                    <td style="min-width: 10px; padding: 10px;">
                        @{{ item.obj[21022922] }}<br />
                    </td>
                </tr>
                <tr>
                    <td style="min-width: 10px; padding: 10px;">
                        Urin (ml)	
                    </td>
                    <td style="min-width: 10px; padding: 10px;">
                        @{{ item.obj[21022961] }}<br />
                    </td>
                    <td style="min-width: 10px; padding: 10px;">
                        @{{ item.obj[21022962] }}<br />
                    </td>
                    <td style="min-width: 10px; padding: 10px;">
                        @{{ item.obj[21022963] }}<br />
                    </td>
                    <td style="min-width: 10px; padding: 10px;">
                        @{{ item.obj[21022964] }}<br />
                    </td>
                    <td style="min-width: 10px; padding: 10px;">
                        @{{ item.obj[21022965] }}<br />
                    </td>
                    <td style="min-width: 10px; padding: 10px;">
                        @{{ item.obj[21022966] }}<br />
                    </td>
                    <td style="min-width: 10px; padding: 10px;">
                        @{{ item.obj[21022967] }}<br />
                    </td>
                    <td style="min-width: 10px; padding: 10px;">
                        @{{ item.obj[21022968] }}<br />
                    </td>
                    <td style="min-width: 10px; padding: 10px;">
                        @{{ item.obj[21022969] }}<br />
                    </td>
                    <td style="min-width: 10px; padding: 10px;">
                        @{{ item.obj[21022970] }}<br />
                    </td>
                </tr>
                <tr>
                    <td style="min-width: 10px; padding: 10px;">
                        Pendarahan (ml)
                    </td>
                    <td style="min-width: 10px; padding: 10px;">
                        @{{ item.obj[21023009] }}<br />
                    </td>
                    <td style="min-width: 10px; padding: 10px;">
                        @{{ item.obj[21023010] }}<br />
                    </td>
                    <td style="min-width: 10px; padding: 10px;">
                        @{{ item.obj[21023011] }}<br />
                    </td>
                    <td style="min-width: 10px; padding: 10px;">
                        @{{ item.obj[21023012] }}<br />
                    </td>
                    <td style="min-width: 10px; padding: 10px;">
                        @{{ item.obj[21023013] }}<br />
                    </td>
                    <td style="min-width: 10px; padding: 10px;">
                        @{{ item.obj[21023014] }}<br />
                    </td>
                    <td style="min-width: 10px; padding: 10px;">
                        @{{ item.obj[21023015] }}<br />
                    </td>
                    <td style="min-width: 10px; padding: 10px;">
                        @{{ item.obj[21023016] }}<br />
                    </td>
                    <td style="min-width: 10px; padding: 10px;">
                        @{{ item.obj[21023017] }}<br />
                    </td>
                    <td style="min-width: 10px; padding: 10px;">
                        @{{ item.obj[21023018] }}<br />
                    </td>
                </tr>
            </tbody>
        </table>

        <table cellspacing="0" width="100%">
            <tr>
                <td>Tanggal: @{{ item.obj[22043498] }}</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Mulai Pembiusan Pkl: @{{ item.obj[21023104] }}</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Selesai Pembiusan Pkl:  @{{ item.obj[21023105] }}</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Lama Pembiusan <br>
                    Jam: @{{ item.obj[21023107] }}<br>
                    Menit: @{{ item.obj[21023108] }}
                </td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>
                    Mulai Pembedahan Pkl: @{{ item.obj[21023109] }}
                </td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>
                    Selesai Pembedahan Pkl: @{{ item.obj[21023110] }}
                </td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>
                    Lama Pembedahan <br>
                    Jam: @{{ item.obj[21023112] }}<br>
                    Menit: @{{ item.obj[21023113] }}
                </td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>
                    Catatan:
                    @{{ item.obj[21023114] }}
                </td>
                <td></td>
                <td></td>
            </tr>
        </table>


        <div style="display: flex; justify-content: space-between; margin-top: 3px;">
            <div style="width: 30%; text-align: center; border: 1px solid black; margin-right: 20px;">
                <b><font style="font-size: 11pt;" color="#000000"><i>Penata Anestesi </i></font></b>
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
                <b><font style="font-size: 11pt;" color="#000000">@{{ item.obj[21023115] }}</font></b>
            </div>

            <div style="width: 30%; text-align: center; border: 1px solid black;">
                <b><font style="font-size: 11pt;" color="#000000"><i>Dokter Anestesi</i></font></b>
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
                <b><font style="font-size: 11pt;" color="#000000">@{{ item.obj[21023116] }}</font></b>
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

    angular.controller('cetakDuranteAnestesiPemantauanCtrl', function ($scope, $http, httpService) {
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
