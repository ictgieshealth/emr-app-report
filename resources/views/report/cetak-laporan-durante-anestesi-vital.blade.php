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

<body class="A4" style="font-family:Tahoma;height: auto;" ng-controller="cetakDuranteAnestesiVitalCtrl">
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
                        <span style="font-size: 16px"><u>DURANTE ANESTESI VITAL</u></span>
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

        <div id="chart"></div>
        <div id="chartTekananDarah"></div>

        <table border="1" cellspacing="0" width="100%">
            <tbody>
                <tr style="background-color: #dedfe2d3;">
                    <td style="min-width: 5px; padding: 4px;">Waktu</td>
                    <td style="min-width: 5px; padding: 4px;">@{{ item.obj[21022624] }}</td>
                    <td style="min-width: 5px; padding: 4px;">@{{ item.obj[21022625] }}</td>
                    <td style="min-width: 5px; padding: 4px;">@{{ item.obj[21022626] }}</td>
                    <td style="min-width: 5px; padding: 4px;">@{{ item.obj[21022627] }}</td>
                    <td style="min-width: 5px; padding: 4px;">@{{ item.obj[21022628] }}</td>
                    <td style="min-width: 5px; padding: 4px;">@{{ item.obj[21022629] }}</td>
                    <td style="min-width: 5px; padding: 4px;">@{{ item.obj[21022630] }}</td>
                    <td style="min-width: 5px; padding: 4px;">@{{ item.obj[21022631] }}</td>
                    <td style="min-width: 5px; padding: 4px;">@{{ item.obj[21022632] }}</td>
                    <td style="min-width: 5px; padding: 4px;">@{{ item.obj[21022633] }}</td>
                </tr>
                <tr>
                    <td style="min-width: 5px; padding: 4px;">
                        Suhu
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21022672] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21022673] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21022674] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21022675] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21022676] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21022677] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21022678] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21022679] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21022680] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21022681] }}<br />
                    </td>
                </tr>
                <tr>
                    <td style="min-width: 5px; padding: 4px;">
                        Pernapasan
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21022720] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21022721] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21022722] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21022723] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21022724] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21022725] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21022726] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21022727] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21022728] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21022729] }}<br />
                    </td>
                </tr>
                <tr>
                    <td style="min-width: 5px; padding: 4px;">
                        Nadi	
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21022768] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21022769] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21022770] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21022771] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21022772] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21022773] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21022774] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21022775] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21022776] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21022777] }}<br />
                    </td>
                </tr>
                <tr>
                    <td style="min-width: 5px; padding: 4px;">
                        Tekanan Darah	
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21022816] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21022817] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21022818] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21022819] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21022820] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21022821] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21022822] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21022823] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21022824] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[21022825] }}<br />
                    </td>
                </tr>
                <tr>
                    <td style="min-width: 5px; padding: 4px;">
                        SaturasiO2	
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[22034782] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[22034783] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[22034784] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[22034785] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[22034786] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[22034787] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[22034788] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[22034789] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[22034790] }}<br />
                    </td>
                    <td style="min-width: 5px; padding: 4px;">
                        @{{ item.obj[22034791] }}<br />
                    </td>
                </tr>
            </tbody>
        </table>

        <table width="100%">
            <tr>
                <td style="display: flex; justify-content: space-between; margin-top: 3px;">
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
                        <b><font style="font-size: 11pt;" color="#000000">@{{ item.obj[22042515] }}</font></b>
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
                        <b><font style="font-size: 11pt;" color="#000000">@{{ item.obj[22042516] }}</font></b>
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

    angular.controller('cetakDuranteAnestesiVitalCtrl', function ($scope, $http, $timeout, httpService) {
        let ArrayTime = [21022624,21022625,21022626,21022627,21022628,21022629,21022630,21022631,21022632,21022633,21022634,21022635,21022636,21022637,21022638,21022639,21022640,21022641,21022642,21022643,21022644,21022645,21022646,21022647,21022648,21022649,21022650,21022651,21022652,21022653,21022654,21022655,21022656,21022657,21022658,21022659,21022660,21022661,21022662,21022663,21022664,21022665,21022666,21022667,21022668,21022669,21022670,21022671]
        let ArraySuhu = [21022672,21022673,21022674,21022675,21022676,21022677,21022678,21022679,21022680,21022681,21022682,21022683,21022684,21022685,21022686,21022687,21022688,21022689,21022690,21022691,21022692,21022693,21022694,21022695,21022696,21022697,21022698,21022699,21022700,21022701,21022702,21022703,21022704,21022705,21022706,21022707,21022708,21022709,21022710,21022711,21022712,21022713,21022714,21022715,21022716,21022717,21022718,21022719]
        let arrayPernafasan = [21022720,21022721,21022722,21022723,21022724,21022725,21022726,21022727,21022728,21022729,21022730,21022731,21022732,21022733,21022734,21022735,21022736,21022737,21022738,21022739,21022740,21022741,21022742,21022743,21022744,21022745,21022746,21022747,21022748,21022749,21022750,21022751,21022752,21022753,21022754,21022755,21022756,21022757,21022758,21022759,21022760,21022761,21022762,21022763,21022764,21022765,21022766,21022767]
        let arrayNadi = [21022768,21022769,21022770,21022771,21022772,21022773,21022774,21022775,21022776,21022777,21022778,21022779,21022780,21022781,21022782,21022783,21022784,21022785,21022786,21022787,21022788,21022789,21022790,21022791,21022792,21022793,21022794,21022795,21022796,21022797,21022798,21022799,21022800,21022801,21022802,21022803,21022804,21022805,21022806,21022807,21022808,21022809,21022810,21022811,21022812,21022813,21022814,21022815]
        let arraySaturasi = [22034782,22034783,22034784,22034785,22034786,22034787,22034788,22034789,22034790,22034791,22034792,22034793,22034794,22034795,22034796,22034797,22034798,22034799,22034800,22034801,22034802,22034803,22034804,22034805,22034806,22034807,22034808,22034809,22034810,22034811,22034812,22034813,22034814,22034815,22034816,22034817,22034818,22034819,22034820,22034821,22034822,22034823,22034824,22034825,22034826,22034827,22034828,22034829]
        let arrayTekananDarah = [21022816,21022817,21022818,21022819,21022820,21022821,21022822,21022823,21022824,21022825,21022826,21022827,21022828,21022829,21022830,21022831,21022832,21022833,21022834,21022835,21022836,21022837,21022838,21022839,21022840,21022841,21022842,21022843,21022844,21022845,21022846,21022847,21022848,21022849,21022850,21022851,21022852,21022853,21022854,21022855,21022856,21022857,21022858,21022859,21022860,21022861,21022862,21022863]

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
                
                td = td.split('/')
                if (td.length == 2) {
                    arraySis[index] = td[0]
                    arrayDis[index] = td[1]
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
                height: 300,
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
                height: 300,
                // width: '50%',
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
