
@extends('template.template-emr')
@section('content-body')
    {{--<hr--}}
    <tr>

        <td bordercolor="#808080" height="13">
            <font style="font-size: 11pt" face="Arial" color="#000000">
                    <span style="font-weight: 700;font-size: 12pt">
                        LAPORAN PEMBEDAHAN
                    </span>
            </font>
        </td>
    </tr>
    <tr>
        <td bordercolor="#808080" height="13"></td>
    </tr>
    <tr>
        <td bordercolor="#808080" height="13">
            <table cellspacing="0" cellpadding="0" border="0" width="100%">
                <tbody>
                <tr>
                    <td width="150">
                        <font style="font-size: 11pt" face="Arial">Operator</font>
                    </td>
                    <td width="5">
                        :
                    </td>
                    <td width="300"><font style="font-size: 11pt" face="Arial">
                    @foreach ($raw as $item)
                        @if ($item->emrdfk == '21020001')
                            {{$item->split}}
                        @endif
                    @endforeach
                    </font></td>
                    <td width="150">
                        <font style="font-size: 11pt" face="Arial">Asisten Operator</font>
                    </td>
                    <td>:</td>
                    <td><font style="font-size: 11pt" face="Arial">
                    @foreach ($raw as $item)
                        @if ($item->emrdfk == '21020002')
                            {{$item->value}}
                        @endif
                    @endforeach
                    </font></td>

                </tr>
                <tr>
                    <td width="150">
                        <font style="font-size: 11pt" face="Arial">Anestesi</font>
                    </td>
                    <td width="5">:</td>
                    <td width="150"><font style="font-size: 11pt" face="Arial">
                        @foreach ($raw as $item)
                            @if ($item->emrdfk == '21020004')
                                {{$item->split}}
                            @endif
                        @endforeach
                    </font></td>
                    <td width="150">
                        <font style="font-size: 11pt" face="Arial">Perawatan Instrumen</font>
                    </td>
                    <td>:</td>
                    <td><font style="font-size: 11pt" face="Arial">
                    @foreach ($raw as $item)
                        @if ($item->emrdfk == '21020003' || $item->emrdfk == '22034930')
                            {{$item->value}}
                        @endif
                    @endforeach
                    </font></td>

                </tr>
                <tr>
                    <td width="150">
                        <font style="font-size: 11pt" face="Arial">Diagnosis Prabedah</font>
                    </td>
                    <td>:</td>
                    <td width="150"><font style="font-size: 11pt" face="Arial">
                    @foreach ($raw as $item)
                        @if ($item->emrdfk == '21020007')
                            {{$item->split}}
                        @endif
                    @endforeach
                    </font></td>
                    <td width="150">
                        <font style="font-size: 11pt" face="Arial">Penata Anastesi</font>
                    </td>
                    <td>:</td>
                    <td><font style="font-size: 11pt" face="Arial">
                    @foreach ($raw as $item)
                        @if ($item->emrdfk == '21020005' || $item->emrdfk == '22034933')
                            {{$item->value}}
                        @endif
                    @endforeach
                    </font></td>

                </tr>
                <tr>
                    <td width="150">
                        <font style="font-size: 11pt" face="Arial">Diagnosis Pasca Bedah</font>
                    </td>
                    <td>:</td>
                    <td width="150"><font style="font-size: 11pt" face="Arial">
                    @foreach ($raw as $item)
                         @if ($item->emrdfk == '21020014' ) {{--|| $item->emrdfk == '22034933' --}}
                            {{$item->value}}
                        @endif
                    @endforeach
                    </font></td>
                    <td width="150">
                        <font style="font-size: 11pt" face="Arial"></font>
                    </td>
                    <td></td>
                    <td><b><font style="font-size: 11pt" face="Arial"></font></b></td>

                </tr>
                <tr>
                    <td width="150">
                        <font style="font-size: 11pt" face="Arial">Jam Operasi Dimulai</font>
                    </td>
                    <td>:</td>
                    <td width="150"><font style="font-size: 11pt" face="Arial">
                    @foreach ($raw as $item)
                        @if ($item->emrdfk == '21020026')
                        {{ date('Y-m-d', strtotime($item->value)) }}
                        @endif
                        @if ($item->emrdfk == '21020027')
                        {{ date('H:i', strtotime($item->value)) }}
                        @endif
                    @endforeach</font></td>
                    <td width="150">
                        <font style="font-size: 11pt" face="Arial"></font>
                    </td>
                    <td></td>
                    <td><font style="font-size: 11pt" face="Arial"></td>

                </tr>
                <tr>
                    <td width="150">
                        <font style="font-size: 11pt" face="Arial">Jam Operasi Selesai</font>
                    </td>
                    <td>:</td>
                    <td width="150"><font style="font-size: 11pt" face="Arial">
                    @foreach ($raw as $item)
                    @if ($item->emrdfk == '21020026')
                    {{ date('Y-m-d', strtotime($item->value)) }}
                    @endif
                    @if ($item->emrdfk == '21020028')
                    {{ date('H:i', strtotime($item->value)) }}
                    @endif
                    @endforeach</font></td></font></td>
                    <td width="150">
                        <font style="font-size: 11pt" face="Arial"></font>
                    </td>
                    <td></td>
                    <td><b><font style="font-size: 11pt" face="Arial"></font></b></td>

                </tr>
                <tr>
                    <td width="150">
                        <font style="font-size: 11pt" face="Arial">Lama Operasi</font>
                    </td>
                    <td>:</td>
                    <td width="150"><font style="font-size: 11pt" face="Arial">
                    @foreach ($raw as $item)
                        @if ($item->emrdfk == '21020029')
                            {{$item->value}}
                        @endif
                    @endforeach
                    </font></td>
                    <td width="150">
                        <font style="font-size: 11pt" face="Arial"></font>
                    </td>
                    <td></td>
                    <td><b><font style="font-size: 11pt" face="Arial"></font></b></td>

                </tr>
                <tr>
                    <td width="150">
                        <font style="font-size: 11pt" face="Arial">Jenis Tindakan Operasi</font>
                    </td>
                    <td>:</td>
                    <td width="150"><font style="font-size: 11pt" face="Arial">
                    @foreach ($raw as $item)
                        @if ($item->emrdfk == '21020009' || $item->emrdfk == '21020010' || $item->emrdfk == '21020011' || $item->emrdfk == '21020012' || $item->emrdfk == '21020013' || $item->emrdfk == '21020014')
                            {{$item->caption}}
                        @endif
                    @endforeach
                    </font></td>
                    <td width="150">
                        <font style="font-size: 11pt" face="Arial"></font>
                    </td>
                    <td></td>
                    <td><b><font style="font-size: 11pt" face="Arial"></font></b></td>

                </tr>
            </table>
            <table>
                <tr>
                    <td width="150">
                        <font style="font-size: 11pt" face="Arial">Laporan Operasi</font>
                    </td>
                    <td width="5">:</td>

                    <td width="500">
                        <textarea style="font-size: 11pt;border: none;" face="Arial" name="" id="" cols="80" rows="20" readonly>
                            @foreach ($raw as $item)
                                @if ($item->emrdfk == '21021711')
                                    {{$item->value}}
                                @endif
                            @endforeach
                        </textarea>
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td width="150">
                        <font style="font-size: 11pt" face="Arial">Jaringan di Patalogi </font>
                    </td>
                    <td>: <font style="font-size: 11pt" face="Arial">
                    @foreach ($raw as $item)
                        {{-- @if ($item->emrdfk == '21020016' || $item->emrdfk == '21020017')  --}}
                        @if ($item->emrdfk == '21009277' && $item->value == '1')
                            {{$item->caption}}
                        @elseif ($item->emrdfk == '21009278' && $item->value == '1')
                            {{$item->caption}}
                        @endif
                    @endforeach</font></td>
                </tr>
                </tbody>
            </table>
            <table width="100%" cellspacing="0" cellpadding="0" style="padding-top: 15px;">
                <tr>
                   <td width="50%"></td>
                <td width="50%" align="center">
                    <font style="font-size: 11pt;" color="#000000" >
                        Jakarta,&nbsp;
                        @php
                            $bulan = ['','Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'];
                        @endphp
                        {{ date('d') }} {{ $bulan[intval(date('m'))] }} {{ date('Y') }}
                    </font>
                </td>
               </tr>
               <tr>
                   <td width="50%" align="center"><font style="font-size: 11pt;" color="#000000" ></font></td>
                   <td width="50%" align="center" ><font style="font-size: 11pt;" color="#000000" >Dokter Penanggung Jawab</font></td>
               </tr>
               <tr>
                    <td width="50%"></td>
                    <td width="50%" style="text-align: center; vertical-align: middle;">
                        <div style="width: 100%; text-align: center; margin-right: 20px;">
                            <br>
                            @forelse($dataimg as $d)
                                @if($d->emrdfk == 1)
                                    <img src="{{ $d->image }}" width="95" height="95" alt="TTD" />
                                @break
                                @endif
                            @empty
                                <div style="height:95px"></div>
                            @endforelse
                            <br>
                        </div>
                    </td>
               </tr>
               <tr>
                   <td width="50%" align="center"><font style="font-size: 11pt;" color="#000000" ></font></td>
                   <td width="50%" align="center" ><font style="font-size: 11pt;" color="#000000" ><br /><br /></font></td>
               </tr>
               <tr>
                   <td width="50%"></td>
                   <td height="50" valign="bottom" width="50%"  align="center"><font style="font-size: 11pt;" color="#000000" >
                @foreach ($raw as $item)
                    @if ($item->emrdfk == '21020001')
                        {{$item->split}}
                    @endif
                @endforeach
                </font></td>
               </tr>
           </table>
        </td>
    </tr>
    <tr>
        <td bordercolor="#808080" height="13"></td>
    </tr>



@endsection
