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
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <style>
        @page {
            size: A4;
        }

        @media print {
            html, body {
                /* border: 1px solid white;
                height: 99%; */
                page-break-after: avoid;
                page-break-before: avoid;
            }
        }
    </style>
</head>

<body class="A4" style="font-family:Tahoma;height: auto;" ng-controller="cetakDuranteAnestesiObservasiRuanganCtrl">
<section class="sheet padding-10mm" style="font-family:Tahoma;height: auto;">

        <table cellspacing="0" cellpadding="0" border="0" width="90%">
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
                        <span style="font-size: 16px"><u>OBSERVASI DI RUANG PEMULIHAN</u></span>
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

        <div class="container">
            <div class="row">
                <!-- Left Column -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label"><b>Masuk Ruang Pemulihan Pukul:</b> @{{ item.obj[21020420] }}</label>
                    </div>
                    <div class="form-group">
                        <label class="form-label"><b>TD:</b> @{{ item.obj[21020421] }}</label>
                        <label class="form-label"><b>N:</b> @{{ item.obj[21020422] }}</label>
                        <label class="form-label"><b>RR:</b> @{{ item.obj[21020423] }}</label>
                        <label class="form-label"><b>SpO2:</b> @{{ item.obj[21020424] }}</label>
                    </div>
                    <div class="form-group checkbox">
                        <label class="form-label"><b>Jalan Nafas:</b></label>
                        <label class="form-label">
                            <input type="checkbox" 
                                @foreach ($raw as $item)                                        
                                @if ($item->emrdfk == '21020426')
                                    checked 
                                @endif                                                                          
                                @endforeach 
                                ng-model="item.obj[21020426]"/>Tidak ada masalah 
                        </label><br>
                        <label class="form-label"><b>Pernapasan:</b></label>
                        <label class="form-label">
                            <input type="checkbox" 
                                @foreach ($raw as $item)                                        
                                @if ($item->emrdfk == '21020426')
                                    checked 
                                @endif                                                                          
                                @endforeach 
                                ng-model="item.obj[21020426]"/>Spontan
                        </label>
                        <label class="form-label">
                            <input type="checkbox" 
                                @foreach ($raw as $item)                                        
                                @if ($item->emrdfk == '21020426')
                                    checked 
                                @endif                                                                          
                                @endforeach 
                                ng-model="item.obj[21020426]"/>Dibantu
                        </label>
                    </div>
                    <div class="form-group checkbox">
                        <label class="form-label"><b>Bila Spontan:</b></label>
                        <label class="form-label">
                            <input type="checkbox" 
                                @foreach ($raw as $item)                                        
                                @if ($item->emrdfk == '21020426')
                                    checked 
                                @endif                                                                          
                                @endforeach 
                                ng-model="item.obj[21020426]"/>Adekuat Bersuara 
                        </label><br>
                        <label class="form-label"><b>Pernapasan:</b></label>
                        <label class="form-label">
                            <input type="checkbox" 
                                @foreach ($raw as $item)                                        
                                @if ($item->emrdfk == '21020426')
                                    checked 
                                @endif                                                                          
                                @endforeach 
                                ng-model="item.obj[21020426]"/>Penyumbatan
                        </label>
                        <label class="form-label">
                            <input type="checkbox" 
                                @foreach ($raw as $item)                                        
                                @if ($item->emrdfk == '21020426')
                                    checked 
                                @endif                                                                          
                                @endforeach 
                                ng-model="item.obj[21020426]"/>Membutuhkan bantuan alat
                        </label>
                    </div>
                    <div class="form-group checkbox">
                        <label class="form-label"><b>Kesadaran:</b></label>
                        <label class="form-label">
                            <input type="checkbox" 
                                @foreach ($raw as $item)                                        
                                @if ($item->emrdfk == '21020426')
                                    checked 
                                @endif                                                                          
                                @endforeach 
                                ng-model="item.obj[21020426]"/>Sadar Betul 
                        </label><br>
                        <label class="form-label"><b>Pernapasan:</b></label>
                        <label class="form-label">
                            <input type="checkbox" 
                                @foreach ($raw as $item)                                        
                                @if ($item->emrdfk == '21020426')
                                    checked 
                                @endif                                                                          
                                @endforeach 
                                ng-model="item.obj[21020426]"/>Belum sadar betul
                        </label>
                        <label class="form-label">
                            <input type="checkbox" 
                                @foreach ($raw as $item)                                        
                                @if ($item->emrdfk == '21020426')
                                    checked 
                                @endif                                                                          
                                @endforeach 
                                ng-model="item.obj[21020426]"/>Tidur dalam
                        </label>
                    </div>
                    <div class="form-group checkbox">
                        <label class="form-label"><b>Konversi Anestesi:</b></label>
                        <label class="form-label">
                            <input type="checkbox" 
                                @foreach ($raw as $item)                                        
                                @if ($item->emrdfk == '21020426')
                                    checked 
                                @endif                                                                          
                                @endforeach 
                                ng-model="item.obj[21020426]"/>Tidak 
                        </label><br>
                    </div>
                    <div class="form-group">
                        <label class="form-label"><b>Diagnosis Paskah Bedah:</b> @{{ item.obj[21020438] }} </label>
                    </div>
                </div>
            </div>
        </div>

        <div id="chart" style="margin-top: 50px;"></div>
        <div id="chartTekananDarah"></div>

        <div style="margin-top: 100px;"></div>
        <table border="1" cellspacing="0" width="100%">
            <tbody>
                <tr style="background-color: #dedfe2d3;">
                    <td style="min-width: 5px; padding: 4px;">Waktu</td>
                    <td style="min-width: 5px; padding: 4px;">@{{ item.obj[21021712] }}</td>
                    <td style="min-width: 5px; padding: 4px;">@{{ item.obj[21021713] }}</td>
                    <td style="min-width: 5px; padding: 4px;">@{{ item.obj[21021714] }}</td>
                    <td style="min-width: 5px; padding: 4px;">@{{ item.obj[21021715] }}</td>
                    <td style="min-width: 5px; padding: 4px;">@{{ item.obj[21021716] }}</td>
                    <td style="min-width: 5px; padding: 4px;">@{{ item.obj[21021717] }}</td>
                    <td style="min-width: 5px; padding: 4px;">@{{ item.obj[21021718] }}</td>
                    <td style="min-width: 5px; padding: 4px;">@{{ item.obj[21021719] }}</td>
                    <td style="min-width: 5px; padding: 4px;">@{{ item.obj[21021720] }}</td>
                    <td style="min-width: 5px; padding: 4px;">@{{ item.obj[21021721] }}</td>
                </tr>
                <tr>
                    <td style="min-width: 5px; padding: 4px;">
                        Suhu
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21021760] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21021761] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21021762] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21021763] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21021764] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21021765] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21021766] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21021767] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21021768] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21021769] }}<br />
                    </td>
                </tr>
                <tr>
                    <td style="min-width: 5px; padding: 4px;">
                        Pernapasan
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21021808] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21021809] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21021810] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21021811] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21021812] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21021813] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21021814] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21021815] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21021816] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21021817] }}<br />
                    </td>
                </tr>
                <tr>
                    <td style="min-width: 5px; padding: 4px;">
                        Nadi	
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21021856] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21021857] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21021858] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21021859] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21021860] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21021861] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21021862] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21021863] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21021864] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21021865] }}<br />
                    </td>
                </tr>
                <tr>
                    <td style="min-width: 5px; padding: 4px;">
                        Tekanan Darah	
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21021904] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21021905] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21021906] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21021907] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21021908] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21021909] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21021910] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21021911] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21021912] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21021913] }}<br />
                    </td>
                </tr>
                <tr>
                    <td style="min-width: 5px; padding: 4px;">
                        SaturasiO2	
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[22034734] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[22034735] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[22034736] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[22034737] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[22034738] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[22034739] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[22034740] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[22034741] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[22034742] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[22034743] }}<br />
                    </td>
                </tr>
            </tbody>
        </table>

        <table width="100%">
            <tr>
                <td style="display: flex; justify-content: space-between; margin-top: 3px;">
                    <div style="width: 30%; text-align: center; border: 1px solid black; margin-right: 20px;">
                        <b><font style="font-size: 11pt;" color="#000000"><i>Perawat Recovery Room </i></font></b>
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
                        <b><font style="font-size: 11pt;" color="#000000">@{{ item.obj[22042517] }}</font></b>
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
                        <b><font style="font-size: 11pt;" color="#000000">@{{ item.obj[22042518] }}</font></b>
                    </div>
                </td>
            </tr>
        </table>

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
                    Email : {!! $res['profile']->alamatemail !!}
                </td>
            </tr>
        </table>
</section>
</body>


<script>
        
</script>
<script type="text/javascript">
    var baseUrl =
            {!! json_encode(url('/')) !!}
    var angular = angular.module('angularApp', [], function ($interpolateProvider) {
            $interpolateProvider.startSymbol('@{{');
            $interpolateProvider.endSymbol('}}');
        }).factory('httpService', function ($http, $q) {
            return {
                get: function (url) {
                    var deffer = $q.defer();
                    $http.get(baseUrl + '/' + url, {
                        headers: {
                            'Content-Type': 'application/json',
                        }
                    }).then(function successCallback(response) {
                        deffer.resolve(response);
                    }, function errorCallback(response) {
                        deffer.reject(response);
                    });
                    return deffer.promise;
                },
            }
        })

    angular.controller('cetakDuranteAnestesiObservasiRuanganCtrl', function ($scope, $http, $timeout, httpService) {
        let ArrayTime = [21021712,21021713,21021714,21021715,21021716,21021717,21021718,21021719,21021720,21021721,21021722,21021723,21021724,21021725,21021726,21021727,21021728,21021729,21021730,21021731,21021732,21021733,21021734,21021735,21021736,21021737,21021738,21021739,21021740,21021741,21021742,21021743,21021744,21021745,21021746,21021747,21021748,21021749,21021750,21021751,21021752,21021753,21021754,21021755,21021756,21021757,21021758,21021759]
        let ArraySuhu = [21021760,21021761,21021762,21021763,21021764,21021765,21021766,21021767,21021768,21021769,21021770,21021771,21021772,21021773,21021774,21021775,21021776,21021777,21021778,21021779,21021780,21021781,21021782,21021783,21021784,21021785,21021786,21021787,21021788,21021789,21021790,21021791,21021792,21021793,21021794,21021795,21021796,21021797,21021798,21021799,21021800,21021801,21021802,21021803,21021804,21021805,21021806,21021807]
        let arrayPernafasan = [21021808,21021809,21021810,21021811,21021812,21021813,21021814,21021815,21021816,21021817,21021818,21021819,21021820,21021821,21021822,21021823,21021824,21021825,21021826,21021827,21021828,21021829,21021830,21021831,21021832,21021833,21021834,21021835,21021836,21021837,21021838,21021839,21021840,21021841,21021842,21021843,21021844,21021845,21021846,21021847,21021848,21021849,21021850,21021851,21021852,21021853,21021854,21021855]
        let arrayNadi = [21021856,21021857,21021858,21021859,21021860,21021861,21021862,21021863,21021864,21021865,21021866,21021867,21021868,21021869,21021870,21021871,21021872,21021873,21021874,21021875,21021876,21021877,21021878,21021879,21021880,21021881,21021882,21021883,21021884,21021885,21021886,21021887,21021888,21021889,21021890,21021891,21021892,21021893,21021894,21021895,21021896,21021897,21021898,21021899,21021900,21021901,21021902,21021903]
        let arrayTekananDarah = [21021904,21021905,21021906,21021907,21021908,21021909,21021910,21021911,21021912,21021913,21021914,21021915,21021916,21021917,21021918,21021919,21021920,21021921,21021922,21021923,21021924,21021925,21021926,21021927,21021928,21021929,21021930,21021931,21021932,21021933,21021934,21021935,21021936,21021937,21021938,21021939,21021940,21021941,21021942,21021943,21021944,21021945,21021946,21021947,21021948,21021949,21021950,21021951]
        let arraySaturasi = [22034734,22034735,22034736,22034737,22034738,22034739,22034740,22034741,22034742,22034743,22034744,22034745,22034746,22034747,22034748,22034749,22034750,22034751,22034752,22034753,22034754,22034755,22034756,22034757,22034758,22034759,22034760,22034761,22034762,22034763,22034764,22034765,22034766,22034767,22034768,22034769,22034770,22034771,22034772,22034773,22034774,22034775,22034776,22034777,22034778,22034779,22034780,22034781]

        let arrayTimeFix = []
        let arraySuhuFix = []
        let arrayPernafasanFix = []
        let arrayNadiFix = []
        let arraySaturasiFix = []
        let arraySis = []
        let arrayDis = []
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

        ArrayTime.forEach( function(element, index) {
            arrayTimeFix.push($scope.item.obj[element])  
        })

        ArraySuhu.forEach(function(itemSuhu) {
            if ($scope.item.obj[itemSuhu] !== undefined && $scope.item.obj[itemSuhu] !== null) {
                arraySuhuFix.push($scope.item.obj[itemSuhu]);
            }
        });

        arrayPernafasan.forEach( function(itemNapas) {
            if ($scope.item.obj[itemNapas] !== undefined && $scope.item.obj[itemNapas] !== null) {
                arrayPernafasanFix.push($scope.item.obj[itemNapas])                  
            }
        })

        arrayNadi.forEach( function(itemNadi) {
            if ($scope.item.obj[itemNadi] !== undefined && $scope.item.obj[itemNadi] !== null) {
                arrayNadiFix.push($scope.item.obj[itemNadi])                  
            }
        })

        arraySaturasi.forEach( function(itemSaturasi) {
            if ($scope.item.obj[itemSaturasi] !== undefined && $scope.item.obj[itemSaturasi] !== null) {
                arraySaturasiFix.push($scope.item.obj[itemSaturasi])                  
            }
        })

        arrayTekananDarah.forEach( function(item, index) {
            if ($scope.item.obj[item] !== undefined && $scope.item.obj[item] !== null) {
                var td = $scope.item.obj[parseFloat(item)]
                console.log(td);
                
                td = td.split('/')
                if (td.length == 2) {
                    arraySis[index] = td[0]
                    arrayDis[index] = td[1]
                    console.log(td[0]);
                    console.log(td[1]);
                }                
            }
        })

        var options = {
            series: [
                {
                    name: 'Suhu',
                    data: arraySuhuFix,
                    color: '#edf067'
                },
                {
                    name: 'Pernafasan',
                    data: arrayPernafasanFix,
                    color: '#f763f2'
                },
                {
                    name: 'Nadi',
                    data: arrayNadiFix,
                    color: '#71f575'
                },
                {
                    name: 'Saturasi O2',
                    data: arraySaturasiFix,
                    color: '#67b7f0'
                }
            ],
            chart: {
                height: 350,
                type: 'line',
                zoom: {
                enabled: false
                }
            },
            dataLabels: {
                enabled: true,
                style: {
                    fontSize: '11px',
                    colors: ['#304758']
                }
            },           
            stroke: {
                curve: 'straight'
            },
            title: {
                text: 'Grafik Tanda Vital',
                align: 'left'
            },
            grid: {
                row: {
                colors: ['#f3f3f3', 'transparent'],
                opacity: 0.5
                },
            },
            xaxis: {
                categories: arrayTimeFix,
            },
            tooltip: {
                enabled: true,
                shared: true,
                intersect: false,
                y: {
                    formatter: function (val) {
                        return val ? val : "No data"; 
                    }
                }
            },
            markers: {
                size: 3, 
                hover: {
                    sizeOffset: 3 
                }
            }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();


        var optionsTekananDarah = {
            series: [
                {
                    name: 'Sistolik',
                    data: arraySis,
                    color: '#FF0000'
                },
                {
                    name: 'Diastolik',
                    data: arrayDis,
                    color: '#5c96f2'
                }
            ],
            chart: {
                height: 350,
                type: 'line',
                zoom: {
                enabled: false
                }
            },
            colors: ['red'],
            dataLabels: {
                enabled: true,
                style: {
                    fontSize: '11px',
                    colors: ['#304758']
                }
            },           
            stroke: {
                curve: 'straight'
            },
            title: {
                text: 'Grafik Tekanan Darah',
                align: 'left'
            },
            grid: {
                row: {
                colors: ['#f3f3f3', 'transparent'],
                opacity: 0.5
                },
            },
            xaxis: {
                categories: arrayTimeFix, // ini untuk abel untuk sumbu X berdasarkan jam yang diinput
            },
            tooltip: {
                enabled: true,
                shared: true,
                intersect: false,
                y: {
                    formatter: function (val) {
                        return val ? val : "No data"; 
                    }
                }
            },
            markers: {
                size: 3, 
                hover: {
                    sizeOffset: 3 
                }
            }
        };

        var chartTekananDarah = new ApexCharts(document.querySelector("#chartTekananDarah"), optionsTekananDarah);
        chartTekananDarah.render();

    })

    
</script>
</body>

</html>
