<!DOCTYPE html>
<html lang="en" ng-app="angularApp">

<head>
    <meta charset="utf-8">
    <title>Asesmen Awal Keperawatan I G D</title>

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
                        <b>Nuangan</b>
                        <p style="font-size: 11pt; display: inline; margin: 1.4cm;"><b>: {!! $res['d'][0]->namaruangan !!}</b></p>
                    </td>


            </tbody>
        </table>

        <td style="vertical-align: text-top">

            <table width="100%">
                <tr>
                    <td width="50%" colspan="4">
                        <font style="font-size: 11pt;font-weight: bold" color="#000000"><b>Asesmen Awal Keperawatan
                                Rawat Jalan</b></font>
                    </td>
                </tr>
                <tr>
                    <td width="50%" colspan="4" height="10"></td>
                </tr>
                <tr>
                    <td width="24%">
                        <font style="font-size: 11pt;" color="#000000">Masuk RS tanggal</font>
                    </td>
                    <td width="1%">
                        <font style="font-size: 11pt;" color="#000000">:</font>
                    </td>
                    <td width="75%">
                        <font style="font-size: 11pt;" color="#000000">@{{ item.obj[21020464] }}</font>
                    </td>

                </tr>
                <tr>
                    <td width="24%">
                        <font style="font-size: 11pt;" color="#000000">Pengkajian tanggal</font>
                    </td>
                    <td width="1%">
                        <font style="font-size: 11pt;" color="#000000">:</font>
                    </td>
                    <td width="75%">
                        <font style="font-size: 11pt;" color="#000000">@{{ item.obj[21020465] }}</font>
                    </td>

                </tr>
                <tr>
                    <td width="24%">
                        <font style="font-size: 11pt;" color="#000000">Masuk Poli klinik</font>
                    </td>
                    <td width="1%">
                        <font style="font-size: 11pt;" color="#000000">:</font>
                    </td>
                    <td width="75%">
                        <font style="font-size: 11pt;" color="#000000">@{{ item.obj[21020466] }}</font>
                    </td>

                </tr>
                <tr>
                    <td width="24%">
                        <font style="font-size: 11pt;" color="#000000">Anamnesa</font>
                    </td>
                    <td width="1%">
                        <font style="font-size: 11pt;" color="#000000">:</font>
                    </td>
                    <td width=75%>
                        <span>
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020467') checked
                                @endif @endforeach
                                ng-model="item.obj[21020467]" />
                            <font style="font-size: 11pt;" color="#000000">Auto Anamnesa

                                <input style="margin-left: 1cm;" type="checkbox"
                                    @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020468') checked
                                @endif @endforeach
                                    ng-model="item.obj[21020468]" />
                                <font style="font-size: 11pt;" color="#000000">Allo Anamnesa

                                    <input style="margin-left: 1cm;" type="checkbox"
                                        @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020469') checked
                                @endif @endforeach
                                        ng-model="item.obj[21020469]" />
                                    <font style="font-size: 11pt;" color="#000000">Keluarga

                                        <input style="margin-left: 1cm;" type="checkbox"
                                            @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020470') checked
                                @endif @endforeach
                                            ng-model="item.obj[21020470]" />
                                        <font style="font-size: 11pt;" color="#000000">Penerjemah Bahasa <br>

                                            <div style="display: flex; align-items: center;">
                                                <input type="checkbox"
                                                    @foreach ($res['d'] as $item)
                                        @if ($item->emrdfk == '21020471') checked @endif @endforeach
                                                    ng-model="item.obj[21020471]" />
                                                <font style="font-size: 11pt; color: #000000;">Orang Lain</font>
                                                <label style="margin-left: 1cm;">Nama</label>
                                                <label>:</label><br>
                                                <input style="margin-left: 0.2cm; width: 4cm;" type="textbox"
                                                    ng-model="item.obj[21020472]"
                                                    @if ($item->emrdfk == '21020472') value="" @endif>
                                                <label
                                                    style="margin-left: 1cm; display: flex; align-items: center;">Hubungan</label>
                                                <label>:</label><br>
                                                <input style="margin-left: 0.2cm; width: 4cm;" type="textbox"
                                                    ng-model="item.obj[21020473]"
                                                    @if ($item->emrdfk == '21020473') value="" @endif>
                                            </div>


                        </span>
                    </td>
                </tr>
                <tr>
                    <td width="24%">
                        <font style="font-size: 11pt;" color="#000000">Cara Masuk</font>
                    </td>
                    <td width="1%">
                        <font style="font-size: 11pt;" color="#000000">:</font>
                    </td>
                    <td width=75%>
                        <span>
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020474') checked
                                @endif @endforeach
                                ng-model="item.obj[21020474]" />
                            <font style="font-size: 11pt;" color="#000000">Jalan Tanpa Bantuan

                                <input style="margin-left: 1cm;" type="checkbox"
                                    @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020475') checked
                                @endif @endforeach
                                    ng-model="item.obj[21020475]" />
                                <font style="font-size: 11pt;" color="#000000">Jalan Dengan Bantuan <br>

                                    <input type="checkbox"
                                        @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020476') checked
                                @endif @endforeach
                                        ng-model="item.obj[21020476]" />
                                    <font style="font-size: 11pt;" color="#000000">Tempat Tidur Dorong

                                        <input style="margin-left: 0.9cm;" type="checkbox"
                                            @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020477') checked
                                @endif @endforeach
                                            ng-model="item.obj[21020477]" />
                                        <font style="font-size: 11pt;" color="#000000">

                                            <input style="width: 30%;" type="textbox" ng-model="item.obj[21020478]"
                                                @if ($item->emrdfk == '21020478') value="Your Text Value" @endif>

                        </span>
                    </td>
                </tr>
            </table>

            <table width="100%" style="margin-top: 5px;">
                <tr>
                    <td width="50%" colspan="4">
                        <font style="font-size: 11pt;font-weight: bold;" color="#000000"><b>1. STATUS FISIK</b></font>
                    </td>
                </tr>
                <!-- Tanda Pital -->
                <table>
                    <tbody>
                        <tr>
                            <td width="10%" style="text-align: justify; font-size: 11pt;">
                                <p>
                                    <b>Tanda Vital</b> <br>
                                    TD
                                    <br>
                                    S
                                    <br>
                                    N
                                    <br>
                                    R
                                    <br>
                                </p>
                            </td>
                            <td width="20%" style="text-align: justify; font-size: 11pt;">
                                <p>
                                    <br>
                                    : @{{ item.obj[21020481] }} mmHg<br>
                                    : @{{ item.obj[21020482] }} C<br>
                                    : @{{ item.obj[21020483] }} x/min<br>
                                    : @{{ item.obj[21020484] }} x/min<br>

                                </p>
                            </td>

                            <td width="5%" style="text-align: justify; font-size: 11pt;">
                                <p>
                                    <br>
                                    BB
                                    <br>
                                    TB
                                    <br>
                                </p>
                            </td>
                            <td width="20%" style="text-align: justify; font-size: 11pt;">
                                <p>
                                    <br>
                                    : @{{ item.obj[21020485] }} Kg<br>
                                    : @{{ item.obj[21020486] }} Cm
                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <!-- Obstetri dan Ginekologi -->
                <table width="100%" style="margin-top: 10px;">
                    <tr>
                        <td colspan="4">
                            <label style="font-size: 11pt;"><b>Obstetri dan Ginekologi</b></label>
                        </td>
                    </tr>
                    <tr>
                        <td width="10%">
                            <font style="font-size: 11pt;" color="#000000">Hamil</font>
                        </td>
                        <td width="1%">
                            <font style="font-size: 11pt;" color="#000000">:</font>
                        </td>
                        <td width="15%">
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020487') checked
                                @endif @endforeach
                                ng-model="item.obj[21020487]" />
                            <font style="font-size: 11pt;" color="#000000"> Ya
                                <input style="margin-left: 0.5cm;" type="checkbox"
                                    @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020488') checked
                                @endif @endforeach
                                    ng-model="item.obj[21020488]" />
                                <font style="font-size: 11pt;" color="#000000"> Tidak
                        </td>
                        <td width="10%">
                            <font style="font-size: 11pt;" color="#000000">HPHT</font>
                        </td>
                        <td width="1%">
                            <font style="font-size: 11pt;" color="#000000">:</font>
                        </td>
                        <td width="20%">
                            <font style="font-size: 11pt;" color="#000000">@{{ item.obj[21020489] }}</font>
                        </td>
                    </tr>
                    <tr>
                        <td width="10%">
                            <font style="font-size: 11pt;" color="#000000">Keluhan Mestruasi</font>
                        </td>
                        <td width="1%">
                            <font style="font-size: 11pt;" color="#000000">:</font>
                        </td>
                        <td width="15%">
                            <font style="font-size: 11pt;" color="#000000">@{{ item.obj[21020490] }}</font>
                        </td>
                    </tr>
                </table>

                <table width="100%" style="margin-top: 8px;">
                    <tr>
                        <td width="50%" colspan="4">
                            <font style="font-size: 11pt;font-weight: bold;" color="#000000"><b>2. STATUS BIO - PSIKO
                                    - SOSIO - SPIRITUAL - KULTURAL</b></font>
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
                                        : @{{ item.obj[21020491] }} x/hari<br>
                                        : @{{ item.obj[21020492] }} cc/hari<br>
                                        : @{{ item.obj[21020493] }} x/hari<br>
                                        : @{{ item.obj[21020494] }} x/hari<br>
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- Status Psikologis -->
                    <table>
                        <tbody>
                            <tr>
                                <td width="24%">
                                    <font style="font-size: 11pt;" color="#000000">Status Psikologis</font>
                                </td>
                                <td width="1%">
                                    <font style="font-size: 11pt;" color="#000000">:</font>
                                </td>
                                <td width=75%>
                                    <span>
                                        <input type="checkbox"
                                            @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020495') checked
                                @endif @endforeach
                                            ng-model="item.obj[21020495]" />
                                        <font style="font-size: 11pt;" color="#000000">Cemas

                                            <input style="margin-left: 1cm;" type="checkbox"
                                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020496') checked
                                @endif @endforeach
                                                ng-model="item.obj[21020496]" />
                                            <font style="font-size: 11pt;" color="#000000">Takut

                                                <input style="margin-left: 1cm;" type="checkbox"
                                                    @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020497') checked
                                @endif @endforeach
                                                    ng-model="item.obj[21020497]" />
                                                <font style="font-size: 11pt;" color="#000000">Marah

                                                    <input style="margin-left: 1cm;" type="checkbox"
                                                        @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020498') checked
                                @endif @endforeach
                                                        ng-model="item.obj[21020498]" />
                                                    <font style="font-size: 11pt;" color="#000000"> Sedih <br>

                                                        <input type="checkbox"
                                                            @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020499') checked
                                @endif @endforeach
                                                            ng-model="item.obj[21020499]" />
                                                        <font style="font-size: 11pt;" color="#000000">Kecenderungan
                                                            Bunuh Diri
                                                            <input type="checkbox"
                                                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '22035619') checked
                                @endif @endforeach
                                                                ng-model="item.obj[22035619]" />
                                                            <font style="font-size: 11pt;" color="#000000">Tenang

                                                                <label style="margin-left: 1cm;"
                                                                    for="">Lain-lain</label>
                                                                <input style="width: 30%;" type="textbox"
                                                                    ng-model="item.obj[21020500]"
                                                                    @if ($item->emrdfk == '21020500') value="Your Text Value" @endif>

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
                                <td width="5%">
                                    <font style="font-size: 11pt;" color="#000000">Pekerjaan</font>
                                </td>
                                <td width="1%">
                                    <font style="font-size: 11pt;" color="#000000">:</font>
                                </td>
                                <td width=75%>
                                    <span>
                                        <input type="checkbox"
                                            @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020501') checked
                                @endif @endforeach
                                            ng-model="item.obj[21020501]" />
                                        <font style="font-size: 11pt;" color="#000000">Wiraswasta

                                            <input style="margin-left: 0.5cm;" type="checkbox"
                                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020503') checked
                                @endif @endforeach
                                                ng-model="item.obj[21020503]" />
                                            <font style="font-size: 11pt;" color="#000000">Pegawai Negeri

                                                <input style="margin-left: 0.5cm;" type="checkbox"
                                                    @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020502') checked
                                @endif @endforeach
                                                    ng-model="item.obj[21020502]" />
                                                <font style="font-size: 11pt;" color="#000000">Pegawai Swasta

                                                    <input style="margin-left: 0.5cm;" type="checkbox"
                                                        @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020504') checked
                                @endif @endforeach
                                                        ng-model="item.obj[21020504]" />
                                                    <font style="font-size: 11pt;" color="#000000"> Tidak Bekerja <br>

                                                        <input type="checkbox"
                                                            @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020505') checked
                                @endif @endforeach
                                                            ng-model="item.obj[21020505]" />
                                                        <font style="font-size: 11pt;" color="#000000">Siswa/Mahasiswa

                                                            <input style="margin-left: 1cm;" type="checkbox"
                                                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020506') checked
                                @endif @endforeach
                                                                ng-model="item.obj[21020506]" />
                                                            <font style="font-size: 11pt;" color="#000000">Pensiun
                                                                <br>

                                                                <label for="">Alamat Rumah</label>
                                                                <input style="width: 30%;" type="textbox"
                                                                    ng-model="item.obj[21020507]"
                                                                    @if ($item->emrdfk == '21020507') value="Your Text Value" @endif>

                                                                <label style="margin-left: 1cm;" for="">No.
                                                                    Telepon</label>
                                                                <input style="width: 30%;" type="textbox"
                                                                    ng-model="item.obj[21020508]"
                                                                    @if ($item->emrdfk == '21020508') value="Your Text Value" @endif>

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
                                <td width="8%">
                                    <font style="font-size: 11pt;" color="#000000">Agama</font>
                                </td>
                                <td width="1%">
                                    <font style="font-size: 11pt;" color="#000000">:</font>
                                </td>
                                <td width=75%>
                                    <span>
                                        <input type="checkbox"
                                            @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020509') checked
                                @endif @endforeach
                                            ng-model="item.obj[21020509]" />
                                        <font style="font-size: 11pt;" color="#000000">Islam

                                            <input style="margin-left: 0.6cm;" type="checkbox"
                                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020510') checked
                                @endif @endforeach
                                                ng-model="item.obj[21020510]" />
                                            <font style="font-size: 11pt;" color="#000000">Protestan

                                                <input style="margin-left: 0.6cm;" type="checkbox"
                                                    @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020512') checked
                                @endif @endforeach
                                                    ng-model="item.obj[21020512]" />
                                                <font style="font-size: 11pt;" color="#000000">Katolik

                                                    <input style="margin-left: 0.6cm;" type="checkbox"
                                                        @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020511') checked
                                @endif @endforeach
                                                        ng-model="item.obj[21020511]" />
                                                    <font style="font-size: 11pt;" color="#000000"> Hindu

                                                        <input style="margin-left: 0.6cm;" type="checkbox"
                                                            @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020513') checked
                                @endif @endforeach
                                                            ng-model="item.obj[21020513]" />
                                                        <font style="font-size: 11pt;" color="#000000">Budha

                                                            <input style="margin-left: 0.6cm;" type="checkbox"
                                                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020514') checked
                                @endif @endforeach
                                                                ng-model="item.obj[21020514]" />
                                                            <font style="font-size: 11pt;" color="#000000">Konghucu
                                                                <br>

                                                                <font style="font-size: 11pt;" color="#000000">
                                                                    Lain-lain

                                                                    <input style="width: 30%;" type="textbox"
                                                                        ng-model="item.obj[21020515]"
                                                                        @if ($item->emrdfk == '21020515') value="Your Text Value" @endif>

                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- Kegiatan Spiritual dan nilai nilai kepercayaan yang dilakukan -->
                    <table>
                        <tbody>
                            <tr>
                                <label width="55%">
                                    <font style="font-size: 11pt;" color="#000000">Kegiatan Spiritual dan nilai nilai
                                        kepercayaan yang dilakukan :</font>
                                </label>
                                <td width=5%>
                                    <span>
                                        <input type="checkbox"
                                            @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020517') checked
                                @endif @endforeach
                                            ng-model="item.obj[21020517]" />
                                        <font style="font-size: 11pt;" color="#000000">Tidak Ada

                                            <input style="margin-left: 2cm;" type="checkbox"
                                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020516') checked
                                @endif @endforeach
                                                ng-model="item.obj[21020516]" />
                                            <font style="font-size: 11pt;" color="#000000">Ada, Sebutkan

                                                <input style="width: 59%;" type="textbox"
                                                    ng-model="item.obj[21020516]"
                                                    @if ($item->emrdfk == '21020516') value="Your Text Value" @endif>

                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- Bahasa Sehari-hari -->
                    <table>
                        <tbody>
                            <tr>
                                <label width="55%">
                                    <font style="font-size: 11pt;" color="#000000">Bahasa Sehari-hari :</font>
                                </label>
                                <td width=5%>
                                    <span>
                                        <input type="checkbox"
                                            @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020519') checked
                                @endif @endforeach
                                            ng-model="item.obj[21020519]" />
                                        <font style="font-size: 11pt;" color="#000000">Indonesia

                                            <input style="margin-left: 2cm;" type="checkbox"
                                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020520') checked
                                @endif @endforeach
                                                ng-model="item.obj[21020520]" />
                                            <font style="font-size: 11pt;" color="#000000">Inggris

                                                <input style="margin-left: 2cm;" type="checkbox"
                                                    @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020521') checked
                                @endif @endforeach
                                                    ng-model="item.obj[21020521]" />
                                                <font style="font-size: 11pt;" color="#000000">Daerah

                                                    <label style="margin-left: 2cm;" for="">Lain-lain</label>
                                                    <input style="width: 27%;" type="textbox"
                                                        ng-model="item.obj[21020522]"
                                                        @if ($item->emrdfk == '21020522') value="Your Text Value" @endif>

                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- Pendidikan -->
                    <table>
                        <tbody>
                            <tr>
                                <label width="55%">
                                    <font style="font-size: 11pt; margin-top: 10px;" color="#000000"><b>3.
                                            PENDIDIKAN</b></font>
                                </label>
                                <td width=5%>
                                    <span>
                                        <input type="checkbox"
                                            @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020523') checked
                                @endif @endforeach
                                            ng-model="item.obj[21020523]" />
                                        <font style="font-size: 11pt;" color="#000000">Tidak Sekolah

                                            <input style="margin-left: 1cm;" type="checkbox"
                                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020524') checked
                                @endif @endforeach
                                                ng-model="item.obj[21020524]" />
                                            <font style="font-size: 11pt;" color="#000000">SD

                                                <input style="margin-left: 1cm;" type="checkbox"
                                                    @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020525') checked
                                @endif @endforeach
                                                    ng-model="item.obj[21020525]" />
                                                <font style="font-size: 11pt;" color="#000000">SMP

                                                    <input style="margin-left: 1cm;" type="checkbox"
                                                        @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020526') checked
                                @endif @endforeach
                                                        ng-model="item.obj[21020526]" />
                                                    <font style="font-size: 11pt;" color="#000000">SMA
                                                        <input style="margin-left: 1cm;" type="checkbox"
                                                            @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020527') checked
                                @endif @endforeach
                                                            ng-model="item.obj[21020527]" />
                                                        <font style="font-size: 11pt;" color="#000000">Diploma

                                                            <input style="margin-left: 1cm;" type="checkbox"
                                                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020528') checked
                                @endif @endforeach
                                                                ng-model="item.obj[21020528]" />
                                                            <font style="font-size: 11pt;" color="#000000">Sarjana

                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- Peerjaan -->
                    <table>
                        <tbody>
                            <tr>
                                <td width="5%">
                                    <font style="font-size: 11pt;" color="#000000">Pekerjaan</font>
                                </td>
                                <td width="1%">
                                    <font style="font-size: 11pt;" color="#000000"> :</font>
                                </td>
                                <td width=75%>
                                    <span>
                                        <input type="checkbox"
                                            @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020529') checked
                                @endif @endforeach
                                            ng-model="item.obj[21020529]" />
                                        <font style="font-size: 11pt;" color="#000000">Bekerja

                                            <input style="margin-left: 1cm;" type="checkbox"
                                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020530') checked
                                @endif @endforeach
                                                ng-model="item.obj[21020530]" />
                                            <font style="font-size: 11pt;" color="#000000">Tidak Bekerja
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
                                <label width="55%">
                                    <font style="font-size: 11pt;" color="#000000"><b>4. RIWAYAT KESEHATAN</b></font>
                                </label>
                                <td width=5%>
                                    <p style="text-align: justify; font-size: 10pt;">
                                        <b>Riwayat Penyakit Sekarang :</b>
                                    <p style="text-align: justify;vertical-align: top;padding: 5px; font-size: 10pt;">
                                        @{{ item.obj[21020531] }}
                                    </p>
                                    </p>
                                    <p style="text-align: justify; font-size: 10pt;">
                                        <b>Riwayat Penyakit Dahulu :</b>
                                    <p style="text-align: justify;vertical-align: top;padding: 5px; font-size: 10pt;">
                                        @{{ item.obj[21020532] }}
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
                                <label width="55%">
                                    <font style="font-size: 11pt;" color="#000000"><b>5. RIWAYAT ALERGI</b></font>
                                </label>
                                <td width=5%>
                                    <span>
                                        <input type="checkbox"
                                            @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020535') checked
                                @endif @endforeach
                                            ng-model="item.obj[21020535]" />
                                        <font style="font-size: 11pt;" color="#000000">Tidak

                                            <input style="margin-left: 2cm;" type="checkbox"
                                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020534') checked
                                @endif @endforeach
                                                ng-model="item.obj[21020534]" />
                                            <font style="font-size: 11pt;" color="#000000">Ya, Sebutkan

                                                <input style="width: 65%;" type="textbox"
                                                    ng-model="item.obj[21020536]"
                                                    @if ($item->emrdfk == '21020536') value="Your Text Value" @endif>

                                                <input type="checkbox"
                                                    @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020537') checked
                                @endif @endforeach
                                                    ng-model="item.obj[21020537]" />
                                                <font style="font-size: 11pt;" color="#000000">Sticker tanda alergi
                                                    dipasang (warna merah)

                                                    <input style="width: 65%;" type="textbox"
                                                        ng-model="item.obj[21003149]"
                                                        @if ($item->emrdfk == '21003149') value="Your Text Value" @endif>

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
                                <label width="55%">
                                    <font style="font-size: 11pt;" color="#000000"><b>6. ASSESMEN NYERI</b></font>
                                </label>
                            </tr>
                        </tbody>
                        <table style="width:100%;color: #4c5356;border: 1px solid black;">
                            <tr>
                                <th style="border: 1px solid black; width: 15%;font-weight: bold; text-align: center;">
                                    Pengkajian</th>
                                <th style="border: 1px solid black;font-weight: bold;text-align: center;">0</th>
                                <th style="border: 1px solid black;font-weight: bold;text-align: center;">1</th>
                                <th style="border: 1px solid black;font-weight: bold;text-align: center;">2</th>
                            </tr>
                            <tr>
                                <td style="border: 1px solid black;">Wajah</td>

                                <td style="border: 1px solid black;">
                                    <input type="checkbox"
                                        @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020538') checked
                                @endif @endforeach
                                        ng-model="item.obj[21020538]" /> Tersenyum/tidak ada ekspresi khusus
                                </td>

                                <td style="border: 1px solid black;">
                                    <input type="checkbox"
                                        @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020539') checked
                                @endif @endforeach
                                        ng-model="item.obj[21020539]" /> Terkadang meringis / menarik diri
                                </td>

                                <td style="border: 1px solid black;">
                                    <input type="checkbox"
                                        @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020540') checked
                                @endif @endforeach
                                        ng-model="item.obj[21020540]" /> Sering menggetarkan dagu dan mengatupkan
                                    rahang
                                </td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid black;">Kaki</td>
                                <td style="border: 1px solid black;">
                                    <input type="checkbox"
                                        @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020541') checked
                                @endif @endforeach
                                        ng-model="item.obj[21020541]" /> Gerakan normal/relaksasi
                                </td>

                                <td style="border: 1px solid black;">
                                    <input type="checkbox"
                                        @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020542') checked
                                @endif @endforeach
                                        ng-model="item.obj[21020542]" /> Tidak tenang/tegang
                                </td>

                                <td style="border: 1px solid black;">
                                    <input type="checkbox"
                                        @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020543') checked
                                @endif @endforeach
                                        ng-model="item.obj[21020543]" /> Kaki dibuat menendang/menarik diri
                                </td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid black;">Aktivitas</td>
                                <td style="border: 1px solid black;">
                                    <input type="checkbox"
                                        @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020544') checked
                                @endif @endforeach
                                        ng-model="item.obj[21020544]" /> Tidur posisi normal, mudah bergerak
                                </td>

                                <td style="border: 1px solid black;">
                                    <input type="checkbox"
                                        @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020545') checked
                                @endif @endforeach
                                        ng-model="item.obj[21020545]" /> Gerakan menggeliat, berguling, kaku
                                </td>

                                <td style="border: 1px solid black;">
                                    <input type="checkbox"
                                        @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020546') checked
                                @endif @endforeach
                                        ng-model="item.obj[21020546]" /> Melengkungkan punggung/kaki/menghentak
                                </td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid black;">Menangis</td>
                                <td style="border: 1px solid black;">
                                    <input type="checkbox"
                                        @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020547') checked
                                @endif @endforeach
                                        ng-model="item.obj[21020547]" /> Tidak menangis (bangun/tidur)
                                </td>

                                <td style="border: 1px solid black;">
                                    <input type="checkbox"
                                        @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020548') checked
                                @endif @endforeach
                                        ng-model="item.obj[21020548]" /> Menggerang, merengek-rengek
                                </td>

                                <td style="border: 1px solid black;">
                                    <input type="checkbox"
                                        @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020549') checked
                                @endif @endforeach
                                        ng-model="item.obj[21020549]" /> Menangis terus menerus, terhisak, menjerit

                            </tr>
                            <tr>
                                <td style="border: 1px solid black;">Bersuara</td>
                                <td style="border: 1px solid black;">
                                    <input type="checkbox"
                                        @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020550') checked
                                @endif @endforeach
                                        ng-model="item.obj[21020550]" /> Bersuara, normal, tenang
                                </td>

                                <td style="border: 1px solid black;">
                                    <input type="checkbox"
                                        @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020551') checked
                                @endif @endforeach
                                        ng-model="item.obj[21020551]" /> Tenang bila dipeluk, digendong atau diajak
                                    bicara
                                </td>

                                <td style="border: 1px solid black;">
                                    <input type="checkbox"
                                        @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020552') checked
                                @endif @endforeach
                                        ng-model="item.obj[21020552]" /> Sulit untuk menenangkan
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" style="border: 1px solid black;">Total Skor</td>
                                <td colspan="3" style="border: 1px solid black;">
                                    <input style="text-align: center;width: 98%; " type="text"
                                        ng-model="item.obj[21020553]"
                                        @if ($item->emrdfk == '21020553') value="Your Text Value" @endif>
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
                                <td width=5%>
                                    <p style="text-align: justify; font-size: 10pt;">
                                        <b>Dewasa (Numeric Ranting Scale) :</b>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <!-- Penilaian Nyeri - Numeric Rating Scale sebagai kolom -->
                                <table style="width:100%; border-collapse: collapse; margin-top:8px;">
                                    <thead>
                                        <tr>
                                            <th style="border:1px solid #000; padding:6px; text-align:center;">0</th>
                                            <th style="border:1px solid #000; padding:6px; text-align:center;">1 - 3
                                            </th>
                                            <th style="border:1px solid #000; padding:6px; text-align:center;">4 - 6
                                            </th>
                                            <th style="border:1px solid #000; padding:6px; text-align:center;">7 - 10
                                            </th>
                                        </tr>
                                        <tr>
                                            <th
                                                style="border:1px solid #000; padding:6px; text-align:center; font-weight:normal;">
                                                Tidak Ada Nyeri</th>
                                            <th
                                                style="border:1px solid #000; padding:6px; text-align:center; font-weight:normal;">
                                                Nyeri Ringan</th>
                                            <th
                                                style="border:1px solid #000; padding:6px; text-align:center; font-weight:normal;">
                                                Nyeri Sedang</th>
                                            <th
                                                style="border:1px solid #000; padding:6px; text-align:center; font-weight:normal;">
                                                Nyeri Berat</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="border:1px solid #000; padding:6px; text-align:center;">
                                                <input type="checkbox"
                                                    @foreach ($res['d'] as $item)
                                                    @if ($item->emrdfk == '21020555') checked @endif @endforeach
                                                    ng-model="item.obj[21020555]" />
                                            </td>
                                            <td style="border:1px solid #000; padding:6px; text-align:center;">
                                                <input type="checkbox"
                                                    @foreach ($res['d'] as $item)
                                                    @if ($item->emrdfk == '21020556') checked @endif @endforeach
                                                    ng-model="item.obj[21020556]" />
                                            </td>
                                            <td style="border:1px solid #000; padding:6px; text-align:center;">
                                                <input type="checkbox"
                                                    @foreach ($res['d'] as $item)
                                                    @if ($item->emrdfk == '21020557') checked @endif @endforeach
                                                    ng-model="item.obj[21020557]" />
                                            </td>
                                            <td style="border:1px solid #000; padding:6px; text-align:center;">
                                                <input type="checkbox"
                                                    @foreach ($res['d'] as $item)
                                                    @if ($item->emrdfk == '21020558') checked @endif @endforeach
                                                    ng-model="item.obj[21020558]" />
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </tr>
                            <!-- Penilaian Nyeri - Wong Baker Faces sebagai kolom -->
                            <tr>
                                <table style="width:100%; border-collapse: collapse; margin-top:12px;">
                                    <thead>
                                        <tr>
                                            <th style="border:1px solid #000; padding:6px; text-align:center;">0 - 1
                                            </th>
                                            <th style="border:1px solid #000; padding:6px; text-align:center;">2 - 3
                                            </th>
                                            <th style="border:1px solid #000; padding:6px; text-align:center;">4 - 5
                                            </th>
                                            <th style="border:1px solid #000; padding:6px; text-align:center;">6 - 7
                                            </th>
                                            <th style="border:1px solid #000; padding:6px; text-align:center;">8 - 9
                                            </th>
                                            <th style="border:1px solid #000; padding:6px; text-align:center;">10</th>
                                        </tr>
                                        <tr>
                                            <th
                                                style="border:1px solid #000; padding:6px; text-align:center; font-weight:normal;">
                                                Tidak Ada Nyeri</th>
                                            <th
                                                style="border:1px solid #000; padding:6px; text-align:center; font-weight:normal;">
                                                Sedikit Nyeri</th>
                                            <th
                                                style="border:1px solid #000; padding:6px; text-align:center; font-weight:normal;">
                                                Cukup Nyeri</th>
                                            <th
                                                style="border:1px solid #000; padding:6px; text-align:center; font-weight:normal;">
                                                Lumayan Nyeri</th>
                                            <th
                                                style="border:1px solid #000; padding:6px; text-align:center; font-weight:normal;">
                                                Sangat Nyeri</th>
                                            <th
                                                style="border:1px solid #000; padding:6px; text-align:center; font-weight:normal;">
                                                Amat Sangat Nyeri</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="border:1px solid #000; padding:6px; text-align:center;">
                                                <input type="checkbox"
                                                    @foreach ($res['d'] as $item)
                                                    @if ($item->emrdfk == '21020559') checked @endif @endforeach
                                                    ng-model="item.obj[21020559]" />
                                            </td>
                                            <td style="border:1px solid #000; padding:6px; text-align:center;">
                                                <input type="checkbox"
                                                    @foreach ($res['d'] as $item)
                                                    @if ($item->emrdfk == '21020560') checked @endif @endforeach
                                                    ng-model="item.obj[21020560]" />
                                            </td>
                                            <td style="border:1px solid #000; padding:6px; text-align:center;">
                                                <input type="checkbox"
                                                    @foreach ($res['d'] as $item)
                                                    @if ($item->emrdfk == '21020561') checked @endif @endforeach
                                                    ng-model="item.obj[21020561]" />
                                            </td>
                                            <td style="border:1px solid #000; padding:6px; text-align:center;">
                                                <input type="checkbox"
                                                    @foreach ($res['d'] as $item)
                                                    @if ($item->emrdfk == '21020562') checked @endif @endforeach
                                                    ng-model="item.obj[21020562]" />
                                            </td>
                                            <td style="border:1px solid #000; padding:6px; text-align:center;">
                                                <input type="checkbox"
                                                    @foreach ($res['d'] as $item)
                                                    @if ($item->emrdfk == '21020563') checked @endif @endforeach
                                                    ng-model="item.obj[21020563]" />
                                            </td>
                                            <td style="border:1px solid #000; padding:6px; text-align:center;">
                                                <input type="checkbox"
                                                    @foreach ($res['d'] as $item)
                                                    @if ($item->emrdfk == '21020564') checked @endif @endforeach
                                                    ng-model="item.obj[21020564]" />
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </tr>
                            <tr>
                                <label style="font-size: 11pt;"><b>Penilaian Nyeri</b></label>
                                <td width="8%">
                                    <font style="font-size: 11pt;" color="#000000">Provokatif</font>
                                </td>
                                <td width="1%">
                                    <font style="font-size: 11pt;" color="#000000">:</font>
                                </td>
                                <td width=75%>
                                    <span>
                                        <input type="checkbox"
                                            @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020565') checked
                                @endif @endforeach
                                            ng-model="item.obj[21020565]" />
                                        <font style="font-size: 11pt;" color="#000000">Ruda Paksa

                                            <input style="margin-left: 0.6cm;" type="checkbox"
                                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020566') checked
                                @endif @endforeach
                                                ng-model="item.obj[21020566]" />
                                            <font style="font-size: 11pt;" color="#000000">Benturan

                                                <input style="margin-left: 0.6cm;" type="checkbox"
                                                    @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020567') checked
                                @endif @endforeach
                                                    ng-model="item.obj[21020567]" />
                                                <font style="font-size: 11pt;" color="#000000">Sayatan

                                                    <label style="margin-left: 0.6cm;">Dll</label>
                                                    <input style="width: 30%;" type="textbox"
                                                        ng-model="item.obj[21020568]"
                                                        @if ($item->emrdfk == '21020568') value="Your Text Value" @endif>
                                    </span>
                                </td>
                            </tr>

                            <tr>
                                <td width="8%">
                                    <font style="font-size: 11pt;" color="#000000">Quality</font>
                                </td>
                                <td width="1%">
                                    <font style="font-size: 11pt;" color="#000000">:</font>
                                </td>
                                <td width=75%>
                                    <span>
                                        <input type="checkbox"
                                            @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020569') checked
                                @endif @endforeach
                                            ng-model="item.obj[21020569]" />
                                        <font style="font-size: 11pt;" color="#000000">Tertusuk

                                            <input style="margin-left: 0.6cm;" type="checkbox"
                                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020570') checked
                                @endif @endforeach
                                                ng-model="item.obj[21020570]" />
                                            <font style="font-size: 11pt;" color="#000000">Tertekan/tertindih

                                                <input style="margin-left: 0.6cm;" type="checkbox"
                                                    @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020571') checked
                                @endif @endforeach
                                                    ng-model="item.obj[21020571]" />
                                                <font style="font-size: 11pt;" color="#000000">Diiris-iris

                                                    <label style="margin-left: 0.6cm;">Dll</label>
                                                    <input style="width: 30%;" type="textbox"
                                                        ng-model="item.obj[21020572]"
                                                        @if ($item->emrdfk == '21020572') value="Your Text Value" @endif>
                                    </span>
                                </td>
                            </tr>

                            <tr>
                                <td width="8%">
                                    <font style="font-size: 11pt;" color="#000000">Time</font>
                                </td>
                                <td width="1%">
                                    <font style="font-size: 11pt;" color="#000000">:</font>
                                </td>
                                <td width=75%>
                                    <span>
                                        <input type="checkbox"
                                            @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020577') checked
                                @endif @endforeach
                                            ng-model="item.obj[21020577]" />
                                        <font style="font-size: 11pt;" color="#000000">Jarang

                                            <input style="margin-left: 0.6cm;" type="checkbox"
                                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020578') checked
                                @endif @endforeach
                                                ng-model="item.obj[21020578]" />
                                            <font style="font-size: 11pt;" color="#000000">Hilang timbul

                                                <input style="margin-left: 0.6cm;" type="checkbox"
                                                    @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020579') checked
                                @endif @endforeach
                                                    ng-model="item.obj[21020579]" />
                                                <font style="font-size: 11pt;" color="#000000">Terus menerus
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
                                <label width="55%">
                                    <font style="font-size: 11pt;" color="#000000"><b>7. RESIKO JATUH GET UP AND GO</b></font>
                                </label>
                            </tr>
                        </tbody>

                        <!-- PENGKAJIAN GET UP AND GO -->
                        <table style="width:100%;color: #4c5356;border: 1px solid black; margin-top:10px;">
                            <tr>
                                <th colspan="4" style="border: 1px solid black; text-align: center;">
                                    <b>PENGKAJIAN</b>
                                </th>
                            </tr>
                            <tr>
                                <th style="border: 1px solid black; width: 5%; font-weight: bold; text-align: center;">No</th>
                                <th style="border: 1px solid black; width: 70%; font-weight: bold; text-align: center;">Penilaian/Pengkajian</th>
                                <th style="border: 1px solid black; width: 12.5%; font-weight: bold; text-align: center;">Ya</th>
                                <th style="border: 1px solid black; width: 12.5%; font-weight: bold; text-align: center;">Tidak</th>
                            </tr>
                            <tr>
                                <td style="border: 1px solid black; text-align: center;">A</td>
                                <td style="border: 1px solid black; padding: 5px;">
                                    Cara Bejalan Pasien (salah satu atau lebih)<br>
                                    1. Tidak seimbang/sempoyongan/limbung<br>
                                    2. Jalan dengan menggunakan alat bantu (kruk, tripot, kursi roda, orang lain)
                                </td>
                                <td style="border: 1px solid black; text-align: center;">
                                    <input type="checkbox"
                                        @foreach ($res['d'] as $item)
                                            @if ($item->emrdfk == '21005197') checked @endif
                                        @endforeach
                                        ng-model="item.obj[21005197]" />
                                </td>
                                <td style="border: 1px solid black; text-align: center;">
                                    <input type="checkbox"
                                        @foreach ($res['d'] as $item)
                                            @if ($item->emrdfk == '21005198') checked @endif
                                        @endforeach
                                        ng-model="item.obj[21005198]" />
                                </td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid black; text-align: center;">B</td>
                                <td style="border: 1px solid black; padding: 5px;">
                                    Menopang saat akan duduk : tampak memegang pinggiran kursi atau meja/benda lain sebagai penopang saat akan duduk.
                                </td>
                                <td style="border: 1px solid black; text-align: center;">
                                    <input type="checkbox"
                                        @foreach ($res['d'] as $item)
                                            @if ($item->emrdfk == '21005199') checked @endif
                                        @endforeach
                                        ng-model="item.obj[21005199]" />
                                </td>
                                <td style="border: 1px solid black; text-align: center;">
                                    <input type="checkbox"
                                        @foreach ($res['d'] as $item)
                                            @if ($item->emrdfk == '21005200') checked @endif
                                        @endforeach
                                        ng-model="item.obj[21005200]" />
                                </td>
                            </tr>
                        </table>

                        <!-- HASIL -->
                        <table style="width:100%;color: #4c5356;border: 1px solid black; margin-top:10px;">
                            <tr>
                                <th colspan="4" style="border: 1px solid black; text-align: center;">
                                    <b>HASIL</b>
                                </th>
                            </tr>
                            <tr>
                                <th style="border: 1px solid black; width: 5%; text-align: center;">No</th>
                                <th style="border: 1px solid black; width: 25%; text-align: center;">Hasil</th>
                                <th style="border: 1px solid black; width: 35%; text-align: center;">Penilaian/Pengkajian</th>
                                <th style="border: 1px solid black; width: 35%; text-align: center;">Keterangan</th>
                            </tr>
                            <tr>
                                <td style="border: 1px solid black; text-align: center;">1.</td>
                                <td style="border: 1px solid black; padding: 5px;">Tidak Beresiko</td>
                                <td style="border: 1px solid black; padding: 5px;">Tidak ditemukan A & B</td>
                                <td style="border: 1px solid black; padding: 5px;">
                                    <textarea style="width: 98%;" rows="3" ng-model="item.obj[21005201]"
                                        @foreach ($res['d'] as $item)
                                            @if ($item->emrdfk == '21005201') value="{{ $item->emrdva }}" @endif
                                        @endforeach></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid black; text-align: center;">2.</td>
                                <td style="border: 1px solid black; padding: 5px;">Risiko Rendah</td>
                                <td style="border: 1px solid black; padding: 5px;">Ditemukan salah satu A/B</td>
                                <td style="border: 1px solid black; padding: 5px;">
                                    <textarea style="width: 98%;" rows="3" ng-model="item.obj[21005202]"
                                        @foreach ($res['d'] as $item)
                                            @if ($item->emrdfk == '21005202') value="{{ $item->emrdva }}" @endif
                                        @endforeach></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid black; text-align: center;">3.</td>
                                <td style="border: 1px solid black; padding: 5px;">Risiko tinggi</td>
                                <td style="border: 1px solid black; padding: 5px;">Ditemukan A & B</td>
                                <td style="border: 1px solid black; padding: 5px;">
                                    <textarea style="width: 98%;" rows="3" ng-model="item.obj[21005203]"
                                        @foreach ($res['d'] as $item)
                                            @if ($item->emrdfk == '21005203') value="{{ $item->emrdva }}" @endif
                                        @endforeach></textarea>
                                </td>
                            </tr>
                        </table>

                        <!-- TINDAKAN -->
                        <table style="width:100%;color: #4c5356;border: 1px solid black; margin-top:10px;">
                            <tr>
                                <th colspan="6" style="border: 1px solid black; text-align: center;">
                                    <b>TINDAKAN</b>
                                </th>
                            </tr>
                            <tr>
                                <th style="border: 1px solid black; width: 5%; text-align: center;">No</th>
                                <th style="border: 1px solid black; width: 20%; text-align: center;">Hasil</th>
                                <th style="border: 1px solid black; width: 35%; text-align: center;">Tindakan</th>
                                <th style="border: 1px solid black; width: 10%; text-align: center;">Ya</th>
                                <th style="border: 1px solid black; width: 10%; text-align: center;">Tidak</th>
                                <th style="border: 1px solid black; width: 20%; text-align: center;">Nama Petugas</th>
                            </tr>
                            <tr>
                                <td style="border: 1px solid black; text-align: center;">1.</td>
                                <td style="border: 1px solid black; padding: 5px;">Tidak beresiko</td>
                                <td style="border: 1px solid black; padding: 5px;">Tidak ada tindakan</td>
                                <td style="border: 1px solid black; text-align: center;">
                                    <input type="checkbox"
                                        @foreach ($res['d'] as $item)
                                            @if ($item->emrdfk == '21005204') checked @endif
                                        @endforeach
                                        ng-model="item.obj[21005204]" />
                                </td>
                                <td style="border: 1px solid black; text-align: center;">
                                    <input type="checkbox"
                                        @foreach ($res['d'] as $item)
                                            @if ($item->emrdfk == '21005205') checked @endif
                                        @endforeach
                                        ng-model="item.obj[21005205]" />
                                </td>
                                <td style="border: 1px solid black; padding: 5px;">
                                    <input style="width: 98%;" type="text" ng-model="item.obj[21005206]"
                                        @foreach ($res['d'] as $item)
                                            @if ($item->emrdfk == '21005206') value="{{ $item->emrdva }}" @endif
                                        @endforeach />
                                </td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid black; text-align: center;">2.</td>
                                <td style="border: 1px solid black; padding: 5px;">Resiko rendah</td>
                                <td style="border: 1px solid black; padding: 5px;">Edukasi</td>
                                <td style="border: 1px solid black; text-align: center;">
                                    <input type="checkbox"
                                        @foreach ($res['d'] as $item)
                                            @if ($item->emrdfk == '21005207') checked @endif
                                        @endforeach
                                        ng-model="item.obj[21005207]" />
                                </td>
                                <td style="border: 1px solid black; text-align: center;">
                                    <input type="checkbox"
                                        @foreach ($res['d'] as $item)
                                            @if ($item->emrdfk == '21005208') checked @endif
                                        @endforeach
                                        ng-model="item.obj[21005208]" />
                                </td>
                                <td style="border: 1px solid black; padding: 5px;">
                                    <input style="width: 98%;" type="text" ng-model="item.obj[21005209]"
                                        @foreach ($res['d'] as $item)
                                            @if ($item->emrdfk == '21005209') value="{{ $item->emrdva }}" @endif
                                        @endforeach />
                                </td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid black; text-align: center;">3.</td>
                                <td style="border: 1px solid black; padding: 5px;">Resiko tinggi</td>
                                <td style="border: 1px solid black; padding: 5px;">Pasang pita/stiker resiko jatuh</td>
                                <td style="border: 1px solid black; text-align: center;">
                                    <input type="checkbox"
                                        @foreach ($res['d'] as $item)
                                            @if ($item->emrdfk == '21005210') checked @endif
                                        @endforeach
                                        ng-model="item.obj[21005210]" />
                                </td>
                                <td style="border: 1px solid black; text-align: center;">
                                    <input type="checkbox"
                                        @foreach ($res['d'] as $item)
                                            @if ($item->emrdfk == '21005211') checked @endif
                                        @endforeach
                                        ng-model="item.obj[21005211]" />
                                </td>
                                <td style="border: 1px solid black; padding: 5px;">
                                    <input style="width: 98%;" type="text" ng-model="item.obj[21005212]"
                                        @foreach ($res['d'] as $item)
                                            @if ($item->emrdfk == '21005212') value="{{ $item->emrdva }}" @endif
                                        @endforeach />
                                </td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid black; text-align: center;"></td>
                                <td style="border: 1px solid black; padding: 5px;"></td>
                                <td style="border: 1px solid black; padding: 5px;">Edukasi</td>
                                <td style="border: 1px solid black; text-align: center;">
                                    <input type="checkbox"
                                        @foreach ($res['d'] as $item)
                                            @if ($item->emrdfk == '21005213') checked @endif
                                        @endforeach
                                        ng-model="item.obj[21005213]" />
                                </td>
                                <td style="border: 1px solid black; text-align: center;">
                                    <input type="checkbox"
                                        @foreach ($res['d'] as $item)
                                            @if ($item->emrdfk == '21005214') checked @endif
                                        @endforeach
                                        ng-model="item.obj[21005214]" />
                                </td>
                                <td style="border: 1px solid black; padding: 5px;">
                                    <input style="width: 98%;" type="text" ng-model="item.obj[21005215]"
                                        @foreach ($res['d'] as $item)
                                            @if ($item->emrdfk == '21005215') value="{{ $item->emrdva }}" @endif
                                        @endforeach />
                                </td>
                            </tr>
                        </table>
                    </table>

                    <!-- Assesmen Fungsional -->
                    <br>
                    <label>
                        <font style="font-size: 11pt;" color="#000000"><b>8. ASSESMEN FUNGSIONAL</b></font>
                    </label> <br>
                    <!-- Penglihatan -->
                    <table>
                        <tbody>
                            <tr>
                                <label style="font-size: 11pt;"><b>Sensorik</b></label>
                                <td width="12%">
                                    <font style="font-size: 11pt;" color="#000000">Penglihatan</font>
                                </td>
                                <td width="1%">
                                    <font style="font-size: 11pt;" color="#000000">:</font>
                                </td>
                                <td width=75%>
                                    <span>
                                        <input type="checkbox"
                                            @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020600') checked
                                @endif @endforeach
                                            ng-model="item.obj[21020600]" />
                                        <font style="font-size: 11pt;" color="#000000">Normal

                                            <input style="margin-left: 2cm;" type="checkbox"
                                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020601') checked
                                @endif @endforeach
                                                ng-model="item.obj[21020601]" />
                                            <font style="font-size: 11pt;" color="#000000">Kabur

                                                <input style="margin-left: 2cm;" type="checkbox"
                                                    @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020602') checked
                                @endif @endforeach
                                                    ng-model="item.obj[21020602]" />
                                                <font style="font-size: 11pt;" color="#000000">Kacamata

                                                    <input style="margin-left: 2cm;" type="checkbox"
                                                        @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020603') checked
                                @endif @endforeach
                                                        ng-model="item.obj[21020603]" />
                                                    <font style="font-size: 11pt;" color="#000000">Lensa Kotak


                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- Penciuman -->
                    <table>
                        <tbody>
                            <tr>
                                <td width="12%">
                                    <font style="font-size: 11pt;" color="#000000">Penciuman</font>
                                </td>
                                <td width="1%">
                                    <font style="font-size: 11pt;" color="#000000">:</font>
                                </td>
                                <td width=75%>
                                    <span>
                                        <input type="checkbox"
                                            @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020604') checked
                                @endif @endforeach
                                            ng-model="item.obj[21020604]" />
                                        <font style="font-size: 11pt;" color="#000000">Normal

                                            <input style="margin-left: 2cm;" type="checkbox"
                                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020605') checked
                                @endif @endforeach
                                                ng-model="item.obj[21020605]" />
                                            <font style="font-size: 11pt;" color="#000000">Tidak
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- Pendengaran -->
                    <table>
                        <tbody>
                            <tr>
                                <td width="8%">
                                    <font style="font-size: 11pt;" color="#000000">Pendengaran</font>
                                </td>
                                <td width="1%">
                                    <font style="font-size: 11pt;" color="#000000">:</font>
                                </td>
                                <td width=75%>
                                    <span>
                                        <input type="checkbox"
                                            @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020606') checked
                                @endif @endforeach
                                            ng-model="item.obj[21020606]" />
                                        <font style="font-size: 11pt;" color="#000000">Normal

                                            <input style="margin-left: 2cm;" type="checkbox"
                                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020607') checked
                                @endif @endforeach
                                                ng-model="item.obj[21020607]" />
                                            <font style="font-size: 11pt;" color="#000000">Tuli Kanan/Kiri

                                                <input style="margin-left: 2cm;" type="checkbox"
                                                    @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020608') checked
                                @endif @endforeach
                                                    ng-model="item.obj[21020608]" />
                                                <font style="font-size: 11pt;" color="#000000">Alat bantu dengan
                                                    kanan/kiri
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- Kognitif -->
                    <table>
                        <tbody>
                            <tr>
                                <td width="12%">
                                    <font style="font-size: 11pt;" color="#000000">Kognitif</font>
                                </td>
                                <td width="1%">
                                    <font style="font-size: 11pt;" color="#000000">:</font>
                                </td>
                                <td width=75%>
                                    <span>
                                        <input type="checkbox"
                                            @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020609') checked
                                @endif @endforeach
                                            ng-model="item.obj[21020609]" />
                                        <font style="font-size: 11pt;" color="#000000">Orientasi penuh

                                            <input style="margin-left: 2cm;" type="checkbox"
                                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020611') checked
                                @endif @endforeach
                                                ng-model="item.obj[21020611]" />
                                            <font style="font-size: 11pt;" color="#000000">Pelupa

                                                <input style="margin-left: 2cm;" type="checkbox"
                                                    @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020610') checked
                                @endif @endforeach
                                                    ng-model="item.obj[21020610]" />
                                                <font style="font-size: 11pt;" color="#000000">Bingung

                                                    <input style="margin-left: 2cm;" type="checkbox"
                                                        @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020612') checked
                                @endif @endforeach
                                                        ng-model="item.obj[21020612]" />
                                                    <font style="font-size: 11pt;" color="#000000">Tidak dapat
                                                        dimengerti
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
                                <td width="20%">
                                    <font style="font-size: 11pt;" color="#000000">Aktivitas Sehari-hari</font>
                                </td>
                                <td width="1%">
                                    <font style="font-size: 11pt;" color="#000000">:</font>
                                </td>
                                <td width=75%>
                                    <span>
                                        <input type="checkbox"
                                            @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020613') checked
                                @endif @endforeach
                                            ng-model="item.obj[21020613]" />
                                        <font style="font-size: 11pt;" color="#000000">Mandiri

                                            <input style="margin-left: 0.5cm;" type="checkbox"
                                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020614') checked
                                @endif @endforeach
                                                ng-model="item.obj[21020614]" />
                                            <font style="font-size: 11pt;" color="#000000">Bantuan Minimal

                                                <input style="margin-left: 0.5cm;" type="checkbox"
                                                    @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020615') checked
                                @endif @endforeach
                                                    ng-model="item.obj[21020615]" />
                                                <font style="font-size: 11pt;" color="#000000">Bantuan Sebagian

                                                    <input style="margin-left: 0.5cm;" type="checkbox"
                                                        @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020616') checked
                                @endif @endforeach
                                                        ng-model="item.obj[21020616]" />
                                                    <font style="font-size: 11pt;" color="#000000">Ketergantungan
                                                        Total
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- Berjalan -->
                    <table>
                        <tbody>
                            <tr>
                                <td width="20%">
                                    <font style="font-size: 11pt;" color="#000000">Berjalan</font>
                                </td>
                                <td width="1%">
                                    <font style="font-size: 11pt;" color="#000000">:</font>
                                </td>
                                <td width=75%>
                                    <span>
                                        <input type="checkbox"
                                            @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020617') checked
                                @endif @endforeach
                                            ng-model="item.obj[21020617]" />
                                        <font style="font-size: 11pt;" color="#000000">Tidak ada kesulitan

                                            <input style="margin-left: 0.5cm;" type="checkbox"
                                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020618') checked
                                @endif @endforeach
                                                ng-model="item.obj[21020618]" />
                                            <font style="font-size: 11pt;" color="#000000">Perlu bantuan

                                                <input style="margin-left: 0.5cm;" type="checkbox"
                                                    @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020619') checked
                                @endif @endforeach
                                                    ng-model="item.obj[21020619]" />
                                                <font style="font-size: 11pt;" color="#000000">Sering jatuh

                                                    <input style="margin-left: 0.5cm;" type="checkbox"
                                                        @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020620') checked
                                @endif @endforeach
                                                        ng-model="item.obj[21020620]" />
                                                    <font style="font-size: 11pt;" color="#000000">Kelumpuhan
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- Resiko Nutrisional -->
                    <br>
                    <label>
                        <font style="font-size: 11pt;" color="#000000"><b>9. RESIKO NUTRISIONAL</b></font>
                    </label> <br>
                    <label>
                        <font style="font-size: 10pt;" color="#000000"><b>Malnutrition Screening Tools (MST)</b>
                        </font>
                    </label>
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
                                    <b>Apakah ada penurunan berat badan yang tidak diinginkan selama 6 bulan terakhir
                                        ?</b>
                                </td>
                                <td>
                                    <input type="checkbox"
                                        @foreach ($res['d'] as $item)
                            @if ($item->emrdfk == '21005216') checked
                            @endif @endforeach
                                        ng-model="item.obj[21005216]" />a. Tidak <br>

                                    <input type="checkbox"
                                        @foreach ($res['d'] as $item)
                            @if ($item->emrdfk == '21005217') checked
                            @endif @endforeach
                                        ng-model="item.obj[21005217]" />b. Tidak Yakin <br>

                                    <label for="">(Tanda : Ukuran baju atau celana menjadi lebih
                                        longgar)</label> <br>

                                    <input type="checkbox"
                                        @foreach ($res['d'] as $item)
                            @if ($item->emrdfk == '21005218') checked
                            @endif @endforeach
                                        ng-model="item.obj[21005218]" />c. Ya, 1-5 Kg <br>

                                    <input type="checkbox"
                                        @foreach ($res['d'] as $item)
                            @if ($item->emrdfk == '21005219') checked
                            @endif @endforeach
                                        ng-model="item.obj[21005219]" /> 6-10 Kg <br>

                                    <input type="checkbox"
                                        @foreach ($res['d'] as $item)
                            @if ($item->emrdfk == '21005220') checked
                            @endif @endforeach
                                        ng-model="item.obj[21005220]" /> 11-15 Kg <br>

                                    <input type="checkbox"
                                        @foreach ($res['d'] as $item)
                            @if ($item->emrdfk == '21005221') checked
                            @endif @endforeach
                                        ng-model="item.obj[21005221]" /> > 15 Kg <br>
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
                                    <b>Apakah asupan makan menurun yang dikarenakan adanya penurunan nafsu
                                        makan/kesulitan menerima makan ?</b>
                                </td>
                                <td>
                                    <input type="checkbox"
                                        @foreach ($res['d'] as $item)
                            @if ($item->emrdfk == '21005222') checked
                            @endif @endforeach
                                        ng-model="item.obj[21005222]" />a. Tidak <br>

                                    <input type="checkbox"
                                        @foreach ($res['d'] as $item)
                            @if ($item->emrdfk == '21005223') checked
                            @endif @endforeach
                                        ng-model="item.obj[21005223]" />b. Tidak Yakin <br>
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
                                    <input style="text-align: center;" type="text"
                                        ng-model="item.obj[21005225]"
                                        @if ($item->emrdfk == '21005225') value="Your Text Value" @endif>
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
                                <td width="43%">
                                    <font style="font-size: 11pt;" color="#000000"><b>A. Terdapat hambatan dalam
                                            pembelajaran :</b></font>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>
                                        <input type="checkbox"
                                            @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020631') checked
                                @endif @endforeach
                                            ng-model="item.obj[21020631]" />
                                        <font style="font-size: 11pt;" color="#000000">Tidak

                                            <input style="margin-left: 1cm;" type="checkbox"
                                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020632') checked
                                @endif @endforeach
                                                ng-model="item.obj[21020632]" />
                                            <font style="font-size: 11pt;" color="#000000">Ya
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <table>
                        <tbody>
                            <tr>
                                <td width="80%">
                                    <font style="font-size: 11pt;" color="#000000"><b>B. Jika ya, sebutkan hambatan
                                            (bisa dipilih lebih dari satu) :</b></font>
                                </td>
        </td>
        </tr>
        <tr>
            <td>
                <span>
                    <input type="checkbox"
                        @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020633') checked
                                @endif @endforeach
                        ng-model="item.obj[21020633]" />
                    <font style="font-size: 11pt;" color="#000000">Pendengaran

                        <input style="margin-left: 0.4cm;" type="checkbox"
                            @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020634') checked
                                @endif @endforeach
                            ng-model="item.obj[21020634]" />
                        <font style="font-size: 11pt;" color="#000000">Penglihatan

                            <input style="margin-left: 0.4cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020635') checked
                                @endif @endforeach
                                ng-model="item.obj[21020635]" />
                            <font style="font-size: 11pt;" color="#000000">Kognitif

                                <input style="margin-left: 0.4cm;" type="checkbox"
                                    @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020636') checked
                                @endif @endforeach
                                    ng-model="item.obj[21020636]" />
                                <font style="font-size: 11pt;" color="#000000">Fisik

                                    <input style="margin-left: 0.4cm;" type="checkbox"
                                        @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020637') checked
                                @endif @endforeach
                                        ng-model="item.obj[21020637]" />
                                    <font style="font-size: 11pt;" color="#000000">Budaya

                                        <input style="margin-left: 0.4cm;" type="checkbox"
                                            @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020638') checked
                                @endif @endforeach
                                            ng-model="item.obj[21020638]" />
                                        <font style="font-size: 11pt;" color="#000000">Agama

                                            <input style="margin-left: 0.4cm;" type="checkbox"
                                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020639') checked
                                @endif @endforeach
                                                ng-model="item.obj[21020639]" />
                                            <font style="font-size: 11pt;" color="#000000">Emosi

                                                <input style="margin-left: 0.4cm;" type="checkbox"
                                                    @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020640') checked
                                @endif @endforeach
                                                    ng-model="item.obj[21020640]" />
                                                <font style="font-size: 11pt;" color="#000000">Bahasa <br>

                                                    <input type="checkbox"
                                                        @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020641') checked
                                @endif @endforeach
                                                        ng-model="item.obj[21020641]" />
                                                    <font style="font-size: 11pt;" color="#000000">Lain-lain
                                                        <input type="text" ng-model="item.obj[21020641]"
                                                            @if ($item->emrdfk == '21020641') value="Your Text Value" @endif>
                </span>
            </td>
        </tr>
        </tbody>
        </table>

        <table>
            <tbody>
                <tr>
                    <td width="80%">
                        <font style="font-size: 11pt;" color="#000000"><b>C. Dibutuhkan Penerjemah :</b></font>
                    </td>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020643') checked
                                @endif @endforeach
                                ng-model="item.obj[21020643]" />
                            <font style="font-size: 11pt;" color="#000000">Tidak

                                <input style="margin-left: 1cm;" type="checkbox"
                                    @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020642') checked
                                @endif @endforeach
                                    ng-model="item.obj[21020642]" />
                                <font style="font-size: 11pt;" color="#000000">Ya, jika ya sebutkan
                                    <input type="text" ng-model="item.obj[21020644]"
                                        @if ($item->emrdfk == '21020644') value="Your Text Value" @endif>
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>

        <table>
            <tbody>
                <tr>
                    <td width="80%">
                        <font style="font-size: 11pt;" color="#000000"><b>D. Kebutuhan pembelajaran pasien (pilih
                                topik pembelajaran pada kotak yang tersedia) :</b></font>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020645') checked
                                @endif @endforeach
                                ng-model="item.obj[21020645]" />
                            <font style="font-size: 11pt;" color="#000000">Diagnosa & Manajemen

                                <input style="margin-left: 0.5cm;" type="checkbox"
                                    @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020646') checked
                                @endif @endforeach
                                    ng-model="item.obj[21020646]" />
                                <font style="font-size: 11pt;" color="#000000">Obat-obatan

                                    <input style="margin-left: 0.5cm;" type="checkbox"
                                        @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020647') checked
                                @endif @endforeach
                                        ng-model="item.obj[21020647]" />
                                    <font style="font-size: 11pt;" color="#000000">Perawatan luka

                                        <input style="margin-left: 0.5cm;" type="checkbox"
                                            @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020648') checked
                                @endif @endforeach
                                            ng-model="item.obj[21020648]" />
                                        <font style="font-size: 11pt;" color="#000000">Rehabilitasi

                                            <input style="margin-left: 0.5cm;" type="checkbox"
                                                @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020649') checked
                                @endif @endforeach
                                                ng-model="item.obj[21020649]" />
                                            <font style="font-size: 11pt;" color="#000000">Manajemen nyeri

                                                <input type="checkbox"
                                                    @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020650') checked
                                @endif @endforeach
                                                    ng-model="item.obj[21020650]" />
                                                <font style="font-size: 11pt;" color="#000000">Diet dan nutrisi

                                                    <input style="margin-left: 1cm;" type="checkbox"
                                                        @foreach ($res['d'] as $item)
                                @if ($item->emrdfk == '21020651') checked
                                @endif @endforeach
                                                        ng-model="item.obj[21020651]" />
                                                    <font style="font-size: 11pt;" color="#000000">Lain-lain
                                                        <input type="text" ng-model="item.obj[21020651]"
                                                            @if ($item->emrdfk == '21020651') value="Your Text Value" @endif>
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- Perencanaan Pulang -->
        <br>
        <table>
            <tbody>
                <tr>
                    <td colspan="2">
                        <label style="font-size: 11pt;"><b>11. PERENCANAAN PULANG</b></label>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <label style="font-size: 11pt;"><b>Kriteria Discharge Planning :</b></label>
                    </td>
                </tr>

                <!-- A. Umur > 65 tahun -->
                <tr>
                    <td width="50%">
                        <font style="font-size: 11pt;" color="#000000"><b>A. Umur > 65 tahun</b></font>
                    </td>
                    <td width="50%">
                        <span>
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '21020652') checked @endif
                                @endforeach
                                ng-model="item.obj[21020652]" />
                            <font style="font-size: 11pt;" color="#000000">Ya

                            <input style="margin-left: 1cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '21020653') checked @endif
                                @endforeach
                                ng-model="item.obj[21020653]" />
                            <font style="font-size: 11pt;" color="#000000">Tidak
                        </span>
                    </td>
                </tr>

                <!-- B. Keterbatasan mobilitas -->
                <tr>
                    <td width="50%">
                        <font style="font-size: 11pt;" color="#000000"><b>B. Keterbatasan mobilitas</b></font>
                    </td>
                    <td width="50%">
                        <span>
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '21020654') checked @endif
                                @endforeach
                                ng-model="item.obj[21020654]" />
                            <font style="font-size: 11pt;" color="#000000">Ya

                            <input style="margin-left: 1cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '21020655') checked @endif
                                @endforeach
                                ng-model="item.obj[21020655]" />
                            <font style="font-size: 11pt;" color="#000000">Tidak
                        </span>
                    </td>
                </tr>

                <!-- C. Perawatan dan Pengobatan lanjutan -->
                <tr>
                    <td width="50%">
                        <font style="font-size: 11pt;" color="#000000"><b>C. Perawatan dan Pengobatan lanjutan</b></font>
                    </td>
                    <td width="50%">
                        <span>
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '21020656') checked @endif
                                @endforeach
                                ng-model="item.obj[21020656]" />
                            <font style="font-size: 11pt;" color="#000000">Ya

                            <input style="margin-left: 1cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '21020657') checked @endif
                                @endforeach
                                ng-model="item.obj[21020657]" />
                            <font style="font-size: 11pt;" color="#000000">Tidak
                        </span>
                    </td>
                </tr>

                <!-- D. Bantuan untuk melakukan Aktifitas sehari-hari -->
                <tr>
                    <td width="50%">
                        <font style="font-size: 11pt;" color="#000000"><b>D. Bantuan untuk melakukan Aktifitas sehari-hari</b></font>
                    </td>
                    <td width="50%">
                        <span>
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '21020658') checked @endif
                                @endforeach
                                ng-model="item.obj[21020658]" />
                            <font style="font-size: 11pt;" color="#000000">Ya

                            <input style="margin-left: 1cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '21020659') checked @endif
                                @endforeach
                                ng-model="item.obj[21020659]" />
                            <font style="font-size: 11pt;" color="#000000">Tidak
                        </span>
                    </td>
                </tr>

                <!-- Bila salah satu Jawaban Ya -->
                <tr>
                    <td colspan="2">
                        <font style="font-size: 11pt;" color="#000000"><b>Bila salah satu Jawaban Ya, maka lakukan Prencanaan lanjutan</b></font>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <span>
                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '21020660') checked @endif
                                @endforeach
                                ng-model="item.obj[21020660]" />
                            <font style="font-size: 11pt;" color="#000000">Perawatan diri (Mandi, BAK,BAB)

                            <input style="margin-left: 0.5cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '21020661') checked @endif
                                @endforeach
                                ng-model="item.obj[21020661]" />
                            <font style="font-size: 11pt;" color="#000000">Pemantauan pemberian obat <br>

                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '21020662') checked @endif
                                @endforeach
                                ng-model="item.obj[21020662]" />
                            <font style="font-size: 11pt;" color="#000000">Pemantauan diet

                            <input style="margin-left: 2.7cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '21020663') checked @endif
                                @endforeach
                                ng-model="item.obj[21020663]" />
                            <font style="font-size: 11pt;" color="#000000">Perawatan Luka <br>

                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '21020664') checked @endif
                                @endforeach
                                ng-model="item.obj[21020664]" />
                            <font style="font-size: 11pt;" color="#000000">Latihan Fisik Lanjutan

                            <input style="margin-left: 0.5cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '21020665') checked @endif
                                @endforeach
                                ng-model="item.obj[21020665]" />
                            <font style="font-size: 11pt;" color="#000000">Pendampingan tenaga khusus dirumah <br>

                            <input type="checkbox"
                                @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '21020666') checked @endif
                                @endforeach
                                ng-model="item.obj[21020666]" />
                            <font style="font-size: 11pt;" color="#000000">Bantuan medis/perawatan di rumah (Homecare)

                            <input style="margin-left: 0.5cm;" type="checkbox"
                                @foreach ($res['d'] as $item)
                                    @if ($item->emrdfk == '21020667') checked @endif
                                @endforeach
                                ng-model="item.obj[21020667]" />
                            <font style="font-size: 11pt;" color="#000000">Bantuan untuk melakukan Aktifitas fisik (kursi roda, alat bantu jalan)
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
                    <textarea style="width: 99%; height:5cm; text-align: left;" type="text" ng-model="item.obj[21020668]"
                        @if ($item->emrdfk == '21020668') value="Your Text Value" @endif></textarea>
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
                        <textarea style="width: 99%; height:5cm; text-align: left;" type="text" ng-model="item.obj[21020669]"
                            @if ($item->emrdfk == '21020669') value="Your Text Value" @endif></textarea>
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
                        <textarea style="width: 99%; height:5cm; text-align: left;" type="text" ng-model="item.obj[21020670]"
                            @if ($item->emrdfk == '21020670') value="Your Text Value" @endif></textarea>
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
                    <td>@{{ item.obj[21020671] }}</td>
                    <td>@{{ item.obj[21020672] }}</td>
                    <td>@{{ item.obj[21020673] }}</td>
                </tr>
                <tr>
                    <td>@{{ item.obj[21020674] }}</td>
                    <td>@{{ item.obj[21020675] }}</td>
                    <td>@{{ item.obj[21020676] }}</td>
                </tr>
                <tr>
                    <td>@{{ item.obj[21020677] }}</td>
                    <td>@{{ item.obj[21020678] }}</td>
                    <td>@{{ item.obj[21020679] }}</td>
                </tr>
            </tbody>
        </table>
        <div style="text-align: right;margin-top: 10px; margin-left: auto;margin-right: 0;">
            <b>
                <font style="font-size: 10pt;">Yang Melakukan Pengkajian :</font>
            </b><br>
            <b>
                <font style="font-size: 10pt;">@{{ item.obj[21020680] }}</font>
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
                <font style="font-size: 11pt;" color="#000000">@{{ item.obj[21020681] }}</font>
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
