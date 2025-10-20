<!DOCTYPE html >
<html lang="en" ng-app="angularApp">

<head>
    <meta charset="utf-8">
    <title>Cetak</title>

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

        @media print {
            .section-title {
                background-color: #f4e28d !important; 
                -webkit-print-color-adjust: exact; 
                color-adjust: exact; 
            }
        }

        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        td {
            padding: 8px;
            vertical-align: top;
        }
        .section-title {
            background-color: #f4e28d;
            font-weight: bold;
        }
        input[type="text"], textarea {
            width: 100%;
            box-sizing: border-box;
        }
        .checkbox-group input {
            margin-right: 10px;
        }
        .checkbox-group label {
            margin-right: 15px;
        }
        tr.no-border td {
            border: none;
        }
    </style>
</head>

<body class="A4" style="font-family:Tahoma;height: auto" ng-controller="cetakAsesmenPraAnestesiCtrl">
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
                        <span style="font-size: 16px"><u>ASESMEN PRA SEDASI / PRA ANESTESI</u></span>
                    </b>
                </td>                
            </tbody>
        </table>
        <table cellspacing="0" cellpadding="0" border="0" width="100%">
            <tbody>
                <tr> 
                    <td width="10%" style="text-align: justify; border: 1px solid black; vertical-align: top; padding: 5px; font-size: 9pt;">
                        <b>No. RM</b>
                        <p style="font-size: 9pt; display: inline; margin: 0.5cm;"><b>: {!! $res['d'][0]->nocm !!}</b></b></p><br>     
                        <b>Nama</b>
                        <p style="font-size: 9pt; display: inline; margin: 0.5cm;"><b>: {!! $res['d'][0]->namapasien !!}</b></p><br>       
                        <b>Jenis Kelamin</b>
                        <p style="font-size: 9pt; display: inline; margin: 0.5cm;"><b>: {!! $res['d'][0]->jeniskelamin !!}</b></p><br>       
                        <b>Umur</b>
                        <p style="font-size: 9pt; display: inline; margin: 0.5cm;"><b>: {!! $res['d'][0]->umur !!}</b></p><br>       
                        <b>Ruangan</b>
                        <p style="font-size: 9pt; display: inline; margin: 0.5cm;"><b>: {!! $res['d'][0]->namaruangan !!}</b></p>
                    </td>  
                </tr>             
            </tbody>
        </table>

        <div class="grid_4" style="margin-top:10px;">
            <div class="grid_12">
                <label c-label item="item" style="font-size: 10pt; margin-top: 3px;"><b>Tanggal Asesmen:</b> @{{ item.obj[21000213] }}</label>
            </div>
            <div class="grid_12">
                <label c-label item="item" style="font-size: 10pt; margin-top: 3px;"><b>Riwayat Penyakit Dahulu:</b> @{{ item.obj[21000214] }}</label>
            </div>
            <div class="grid_12">
                <label c-label item="item" style="font-size: 10pt; margin-top: 3px;"><b>Riwayat Penyakit Keluarga:</b> @{{ item.obj[21000215] }}</label>
            </div>
            <div class="grid_12">
                <label c-label item="item" style="font-size: 10pt; margin-top: 3px;"><b>Riwayat anastesi:</b> @{{ item.obj[21000216] }}</label>
            </div>
            <div class="grid_12">
                <label c-label item="item" style="font-size: 10pt; margin-top: 3px;"><b>Riwayat Penyakit Pernafasan:</b> @{{ item.obj[21000217] }}</label>
            </div>
            <div class="grid_12">
                <label c-label item="item" style="font-size: 10pt; margin-top: 3px;"><b>Riwayat Alergi:</b></label>
                <input type="radio" name="Ya" ng-model="item.obj[21000218]" value="1" /><font style="font-size: 10pt;" color="#000000" >Ya</font>
                <input type="radio" name="Tidak" ng-model="item.obj[21000218]" value="2" /><font style="font-size: 10pt;" color="#000000" >Tidak</font>,
                Jenis: @{{ item.obj[21000220] }}
            </div>
            <div class="grid_12">
                <label c-label item="item" style="font-size: 10pt; margin-top: 3px;"><b>Riwayat Merokok:</b></label>
                <input type="radio" name="Ya" ng-model="item.obj[21000221]" value="1" /><font style="font-size: 10pt;" color="#000000" >Ya</font>
                <input type="radio" name="Tidak" ng-model="item.obj[21000221]" value="2" /><font style="font-size: 10pt;" color="#000000" >Tidak</font>,
                Jumlah/Hari: @{{ item.obj[21000223] }}
            </div>
            <div class="grid_12">
                <label c-label item="item" style="font-size: 10pt; margin-top: 3px;"><b>Makan Terakhir, Jam:</b> @{{item.obj[21000224]}} </label>
            </div>
            <div class="grid_12">
                <label c-label item="item" style="font-size: 10pt; margin-top: 3px;"><b>Minum Terakhir, Jam:</b> @{{item.obj[21000225]}} </label>
            </div>
        </div>

        <div class="grid_12">
            <label c-label item="item" style="font-size: 10pt; margin-top: 3px;"><b>Pemeriksaan Fisik:</b> </label>
        </div>
        <div class="grid_12">
            <label item="item" style="font-size: 10pt; margin-top: 3px; margin-left: 7px;"><b>Gigi:</b> @{{ item.obj[21000226] }}</label><br>
            <label item="item" style="font-size: 10pt; margin-top: 3px; margin-left: 7px;"><b>Jalan Nafas:</b> @{{ item.obj[21000227] }}</label><br>
            <label item="item" style="font-size: 10pt; margin-top: 3px; margin-left: 7px;"><b>Jantung:</b> @{{ item.obj[21000228] }}</label><br>
            <label item="item" style="font-size: 10pt; margin-top: 3px; margin-left: 7px;"><b>Paru:</b> @{{ item.obj[21000229] }}</label><br>
            <label item="item" style="font-size: 10pt; margin-top: 3px; margin-left: 7px;"><b>Ekstermitas:</b> @{{ item.obj[21000230] }}</label><br>
            <label item="item" style="font-size: 10pt; margin-top: 3px; margin-left: 7px;"><b>Lain-Lain:</b> @{{ item.obj[21000231] }}</label>
        </div>

        <div class="grid_12">
            <label c-label item="item" style="font-size: 10pt; margin-top: 3px;"><b>Pemeriksaan Tanda Vital:</b> </label>
        </div>
        <div class="grid_12">
            <label item="item" style="font-size: 10pt; margin-top: 3px; margin-left: 7px;"><b>Tekanan Darah:</b> @{{ item.obj[21000232] }}</label><br>
            <label item="item" style="font-size: 10pt; margin-top: 3px; margin-left: 7px;"><b>Suhu:</b> @{{ item.obj[21000233] }}</label><br>
            <label item="item" style="font-size: 10pt; margin-top: 3px; margin-left: 7px;"><b>Nadi:</b> @{{ item.obj[21000234] }}</label><br>
            <label item="item" style="font-size: 10pt; margin-top: 3px; margin-left: 7px;"><b>Pernafasan:</b> @{{ item.obj[21000235] }}</label><br>
            <label item="item" style="font-size: 10pt; margin-top: 3px; margin-left: 7px;"><b>Skor Nyeri:</b> @{{ item.obj[21000236] }}</label><br>
            <label item="item" style="font-size: 10pt; margin-top: 3px; margin-left: 7px;"><b>TB / BB:</b> @{{ item.obj[21000237] }}</label>
        </div>

        <div class="grid_12">
            <label c-label item="item" style="font-size: 10pt; margin-top: 3px;"><b>Pemeriksaan Penunjang:</b> </label>
        </div>
        <div class="grid_12">
            <label item="item" style="font-size: 10pt; margin-top: 3px; margin-left: 7px;"><b>Laboratorium:</b> @{{ item.obj[21000238] }}</label><br>
            <label item="item" style="font-size: 10pt; margin-top: 3px; margin-left: 7px;"><b>EKG:</b> @{{ item.obj[21000239] }}</label><br>
            <label item="item" style="font-size: 10pt; margin-top: 3px; margin-left: 7px;"><b>Radiologi:</b> @{{ item.obj[21000240] }}</label><br>
            <label item="item" style="font-size: 10pt; margin-top: 3px; margin-left: 7px;"><b>Lain-lain:</b> @{{ item.obj[21000241] }}</label><br>
            <label item="item" style="font-size: 10pt; margin-top: 3px; margin-left: 7px;"><b>Klasifikasi ASA:</b> @{{ item.obj[21000242] }}</label><br>
            <label item="item" style="font-size: 10pt; margin-top: 3px; margin-left: 7px;">
                <b>Rencana Anastesi:</b>
                <input type="checkbox" 
                    @foreach ($res['d'] as $item)                                        
                    @if ($item->emrdfk == '21000243')
                        checked 
                    @endif                                                                          
                    @endforeach 
                    ng-model="item.obj[21000243]"/>Sedasi
                <input type="checkbox" 
                    @foreach ($res['d'] as $item)                                        
                    @if ($item->emrdfk == '21000244')
                        checked 
                    @endif                                                                          
                    @endforeach 
                    ng-model="item.obj[21000244]"/>Moderat
                <input type="checkbox" 
                    @foreach ($res['d'] as $item)                                        
                    @if ($item->emrdfk == '21000245')
                        checked 
                    @endif                                                                          
                    @endforeach 
                    ng-model="item.obj[21000245]"/>Dalam
                <input type="checkbox" 
                    @foreach ($res['d'] as $item)                                        
                    @if ($item->emrdfk == '21000246')
                        checked 
                    @endif                                                                          
                    @endforeach 
                    ng-model="item.obj[21000246]"/>Umum
                <input type="checkbox" 
                    @foreach ($res['d'] as $item)                                        
                    @if ($item->emrdfk == '21000247')
                        checked 
                    @endif                                                                          
                    @endforeach 
                    ng-model="item.obj[21000247]"/>Inhalasi
                <input type="checkbox" 
                    @foreach ($res['d'] as $item)                                        
                    @if ($item->emrdfk == '21000248')
                        checked 
                    @endif                                                                          
                    @endforeach 
                    ng-model="item.obj[21000248]"/>TIVA
                <input type="checkbox" 
                    @foreach ($res['d'] as $item)                                        
                    @if ($item->emrdfk == '21000249')
                        checked 
                    @endif                                                                          
                    @endforeach 
                    ng-model="item.obj[21000249]"/>Regional, Jenis @{{item.obj[21000250]}}
            </label><br>
            <label item="item" style="font-size: 10pt; margin-top: 3px; margin-left: 7px;"><b>Obat yang digunakan:</b> @{{ item.obj[21000251] }}</label><br>
            <label item="item" style="font-size: 10pt; margin-top: 3px; margin-left: 7px;"><b>Puasa:</b> @{{ item.obj[21000252] }}</label><br>
            <label item="item" style="font-size: 10pt; margin-top: 3px; margin-left: 7px;"><b>Kebutuhan Darah:</b> @{{ item.obj[21000253] }}</label><br>
            <label item="item" style="font-size: 10pt; margin-top: 3px; margin-left: 7px;">
                <b>Kebutuhan Ruang ICU:</b>
                <input type="radio" name="riwayatAlergi" ng-model="item.obj[21000039]" value="1" /><font style="font-size: 10pt;" color="#000000" >Ya</font>
                <input type="radio" name="riwayatAlergi" ng-model="item.obj[21000039]" value="2" /><font style="font-size: 10pt;" color="#000000" >Tidak</font>
            </label><br>
            <label item="item" style="font-size: 10pt; margin-top: 3px; margin-left: 7px;"><b>Catatan Khusus:</b> @{{ item.obj[21000256] }}</label>
        </div>

        <div style="display: flex; justify-content: space-between;">
            <div style="width: 30%; text-align: center; margin-right: 20px;">
                
            </div>

            <div style="width: 30%; text-align: center; border: 1px solid black;">
                <b><font style="font-size: 11pt;" color="#000000"><i>Dokter</i></font></b>
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
                <b><font style="font-size: 11pt;" color="#000000">@{{ item.obj[21000257] }}</font></b>
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

    angular.controller('cetakAsesmenPraAnestesiCtrl', function ($scope, $http, httpService) {
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

            if (dataLoad[i].type == "radio") {
                $scope.item.obj[dataLoad[i].emrdfk] = dataLoad[i].value
                console.log(dataLoad[i].emrdfk, dataLoad[i].value);
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

    // $(document).ready(function () {
    //     window.print();
    // });
    
</script>
</body>

</html>
