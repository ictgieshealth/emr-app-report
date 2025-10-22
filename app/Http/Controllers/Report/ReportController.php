<?php

namespace App\Http\Controllers\Report;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController
{
    public static function getProfile()
    {
        $d =  DB::table('profile_m')->where('statusenabled', true)->first();
        $res['namaprofile'] = $d->namalengkap;
        $res['alamat'] = $d->alamatlengkap . ", " . $d->kodepos;
        $res['phone'] = $d->fixedphone;
        $res['namakota'] = $d->namakota;
        $res['email'] = "Email. " . ($d->alamatemail == null ? "-" : $d->alamatemail);
        $res['website'] = "Website " . ($d->website == null ? "-" : $d->website);
        return $res;
    }

    public function cetakAsesmenAwalKeperawatanIGD(Request $request)
    {
        $norec  = $request->string('norec');

        $sql = <<<SQL
            SELECT
                epd.emrdfk,
                ep.noemr,
                ed.type, -- Postgres lipat ke lowercase
                pa.namapasien,
                pa.tgllahir,
                pa.nohp,
                pa.nocm,
                ep.jeniskelamin,
                ep.umur,
                al.alamatlengkap,
                ep.noregistrasifk as noregistrasi,
                epd.value,
                ep.namaruangan,
                pg.namalengkap as namadokter,
                epd.tgl,
                epd.index
            FROM emrpasien_t AS ep
            JOIN emrpasiend_t AS epd ON ep.noemr = epd.emrpasienfk
            JOIN emrd_t AS ed ON epd.emrdfk = ed.id
            JOIN antrianpasiendiperiksa_t AS pd ON pd.norec = ep.norec_apd
            LEFT JOIN pegawai_m AS pg ON pg.id = pd.objectpegawaifk
            LEFT JOIN pasien_m AS pa ON ep.nocm = pa.nocm
            LEFT JOIN alamat_m AS al ON pa.id = al.nocmfk
            WHERE ep.norec = :norec
            AND epd.statusenabled = TRUE
            AND epd.emrfk = :emrfk
            ORDER BY ed.nourut
            SQL;

        $data = DB::select($sql, [
            'norec' => $norec,
            'emrfk' => 149,
        ]);

        foreach ($data as $z) {
            if (($z->type ?? null) === 'datetime' && !empty($z->value)) {
                $z->value = date('Y-m-d H:i:s', strtotime($z->value));
            }
        }

        $pageWidth = 500;
        $res['profile'] = DB::table('profile_m')->where('id', 44)->first();
        $res['d'] = $data;
        if (count($data) == 0) {
            echo '
                <script language="javascript">
                    window.alert("Data tidak ada.");
                    window.close()
                </script>
            ';
            die;
        }
        $dataimg = DB::table('emrfoto_t as emrp')
            ->select('emrp.*')
            ->where('emrp.statusenabled', true)
            ->where('emrp.noemrpasienfk', $data[0]->noemr)
            ->where('emrp.emrfk', 149)
            ->get();

        return view('report.cetakAsesmenAwalKeperawatanIGD', compact('res', 'pageWidth', 'dataimg'));
    }

    public function cetakAsesmenAwalKeperawatanRJ(Request $request)
    {
        $norec  = $request->string('norec');

        $sql = <<<SQL
            SELECT
                epd.emrdfk,
                ep.noemr,
                ed.type, -- Postgres lipat ke lowercase
                pa.namapasien,
                pa.tgllahir,
                pa.nohp,
                pa.nocm,
                ep.jeniskelamin,
                ep.umur,
                al.alamatlengkap,
                ep.noregistrasifk as noregistrasi,
                epd.value,
                ep.namaruangan,
                pg.namalengkap as namadokter,
                epd.tgl,
                epd.index
            FROM emrpasien_t AS ep
            JOIN emrpasiend_t AS epd ON ep.noemr = epd.emrpasienfk
            JOIN emrd_t AS ed ON epd.emrdfk = ed.id
            JOIN antrianpasiendiperiksa_t AS pd ON pd.norec = ep.norec_apd
            LEFT JOIN pegawai_m AS pg ON pg.id = pd.objectpegawaifk
            LEFT JOIN pasien_m AS pa ON ep.nocm = pa.nocm
            LEFT JOIN alamat_m AS al ON pa.id = al.nocmfk
            WHERE ep.norec = :norec
            AND epd.statusenabled = TRUE
            AND epd.emrfk = :emrfk
            ORDER BY ed.nourut
            SQL;

        $data = DB::select($sql, [
            'norec' => $norec,
            'emrfk' => 196,
        ]);

        foreach ($data as $z) {
            if (($z->type ?? null) === 'datetime' && !empty($z->value)) {
                $z->value = date('Y-m-d H:i:s', strtotime($z->value));
            }
        }

        $pageWidth = 500;
        $res['profile'] = DB::table('profile_m')->where('id', 44)->first();
        $res['d'] = $data;
        if (count($data) == 0) {
            echo '
                <script language="javascript">
                    window.alert("Data tidak ada.");
                    window.close()
                </script>
            ';
            die;
        }
        $dataimg = DB::table('emrfoto_t as emrp')
            ->select('emrp.*')
            ->where('emrp.statusenabled', true)
            ->where('emrp.noemrpasienfk', $data[0]->noemr)
            ->where('emrp.emrfk', 196)
            ->get();

        return view('report.cetakAsesmenAwalKeperawatanRJ', compact('res', 'pageWidth', 'dataimg'));
    }

    public function cetakAsesmenPraAnestesi(Request $request)
    {
        $norec = $request->string('norec');
        $emrfk = $request->input('emrfk');

        $sql = <<<SQL
            SELECT
                epd.emrdfk,
                ep.noemr,
                ed.type, -- Postgres lipat ke lowercase
                pa.namapasien,
                pa.tgllahir,
                pa.nohp,
                pa.nocm,
                ep.jeniskelamin,
                ep.umur,
                al.alamatlengkap,
                ep.noregistrasifk as noregistrasi,
                epd.value,
                ep.namaruangan,
                pg.namalengkap as namadokter,
                epd.tgl,
                epd.index
            FROM emrpasien_t AS ep
            JOIN emrpasiend_t AS epd ON ep.noemr = epd.emrpasienfk
            JOIN emrd_t AS ed ON epd.emrdfk = ed.id
            JOIN antrianpasiendiperiksa_t AS pd ON pd.norec = ep.norec_apd
            LEFT JOIN pegawai_m AS pg ON pg.id = pd.objectpegawaifk
            LEFT JOIN pasien_m AS pa ON ep.nocm = pa.nocm
            LEFT JOIN alamat_m AS al ON pa.id = al.nocmfk
            WHERE ep.norec = :norec
            AND epd.statusenabled = TRUE
            AND epd.emrfk = :emrfk
            ORDER BY ed.nourut
            SQL;

        $data = DB::select($sql, [
            'norec' => $norec,
            'emrfk' => 210004,
        ]);

        foreach ($data as $z) {
            if (($z->type ?? null) === 'datetime' && !empty($z->value)) {
                $z->value = date('Y-m-d H:i:s', strtotime($z->value));
            }
        }
        $pageWidth = 500;
        $res['profile'] = DB::table('profile_m')->where('id', 44)->first();
        $res['d'] = $data;
        if (count($data) == 0) {
            echo '
                <script language="javascript">
                    window.alert("Data tidak ada.");
                    window.close()
                </script>
            ';
            die;
        }
        $dataimg = DB::table('emrfoto_t as emrp')
            ->select('emrp.*')
            ->where('emrp.statusenabled', true)
            ->where('emrp.noemrpasienfk', $data[0]->noemr)
            ->where('emrp.emrfk', $emrfk)
            ->get();

        return view('report.cetak-asesmen-pra-anestesi', compact('res', 'pageWidth', 'dataimg'));
    }

    public function cetakLaporanDuranteAnestesiVital(Request $request)
    {
        $norec = $request->string('norec');
        $emrfk = $request->input('emrfk', 210043);
        $kdprofile = $request->input('kdprofile', 44);
        $emr = $request->input('emr');

        $sqlRaw = <<<SQL
            SELECT
                split_part(emrdp.value, '~', 2) as split,
                emrdp.*,
                emrd.caption,
                emrd.type,
                emrd.nourut,
                emrdp.emrfk,
                emrd.reportdisplay,
                emrd.kodeexternal AS kodeex,
                emrd.satuan,
                pg.namalengkap
            FROM emrpasiend_t AS emrdp
            LEFT JOIN emrpasien_t AS emrp ON emrp.noemr = emrdp.emrpasienfk
            LEFT JOIN emrd_t AS emrd ON emrd.id = emrdp.emrdfk
            LEFT JOIN pegawai_m AS pg ON pg.id = emrdp.pegawaifk
            WHERE emrdp.statusenabled = TRUE
            AND emrdp.kdprofile = :kdprofile
            AND emrdp.value IS NOT NULL
            AND emrp.norec = :norec
            AND emrdp.emrfk = :emrfk
            ORDER BY emrd.nourut ASC
            SQL;

        $raw = collect(DB::select($sqlRaw, [
            'norec' => $norec,
            'emrfk' => $emrfk,
            'kdprofile' => $kdprofile,
        ]));

        $sqlIdentitas = <<<SQL
            SELECT
                ps.nocm,
                ps.namapasien,
                jk.jeniskelamin,
                emr.noemr,
                to_char(ps.tgllahir, 'DD-MM-YYYY') as tgllahir
            FROM emrpasien_t as emr
            JOIN pasiendaftar_t as pd ON pd.noregistrasi = emr.noregistrasifk
            JOIN pasien_m as ps ON ps.id = pd.nocmfk
            JOIN jeniskelamin_m as jk ON jk.id = ps.objectjeniskelaminfk
            WHERE emr.norec = :norec
            SQL;

        $identitas = collect(DB::select($sqlIdentitas, [
            'norec' => $norec,
        ]))->first();

        $res['profile'] = DB::table('profile_m')->where('id', $kdprofile)->first();

        $dataimg = DB::table('emrfoto_t as emrp')
            ->select('emrp.*')
            ->where('emrp.statusenabled', true)
            ->where('emrp.noemrpasienfk', $identitas->noemr)
            ->where('emrp.emrfk', $emrfk)
            ->get();

        foreach ($raw as $row) {
            if (($row->type ?? null) === 'time' && !empty($row->value)) {
                $row->value = date('H:i', strtotime($row->value));
            }
        }

        $pageWidth = 950;
        return view(
            'report.cetak-laporan-durante-anestesi-vital',
            compact('raw', 'res', 'identitas', 'pageWidth', 'request', 'dataimg')
        );
    }

    public function cetakLaporanDuranteAnestesiPemantauan(Request $request)
    {
        $norec = $request->string('norec');
        $kdprofile = $request->input('kdprofile', 44);
        $emrfk = $request->input('emrfk', 210045);

        $sqlRaw = <<<SQL
            SELECT
                split_part(emrdp.value, '~', 2) as split,
                emrdp.*,
                emrd.caption,
                emrd.type,
                emrd.nourut,
                emrdp.emrfk,
                emrd.reportdisplay,
                emrd.kodeexternal AS kodeex,
                emrd.satuan,
                pg.namalengkap
            FROM emrpasiend_t AS emrdp
            LEFT JOIN emrpasien_t AS emrp ON emrp.noemr = emrdp.emrpasienfk
            LEFT JOIN emrd_t AS emrd ON emrd.id = emrdp.emrdfk
            LEFT JOIN pegawai_m AS pg ON pg.id = emrdp.pegawaifk
            WHERE emrdp.statusenabled = TRUE
            AND emrdp.kdprofile = :kdprofile
            AND emrdp.value IS NOT NULL
            AND emrp.norec = :norec
            AND emrdp.emrfk = :emrfk
            ORDER BY emrd.nourut ASC
            SQL;

        $raw = collect(DB::select($sqlRaw, [
            'norec' => $norec,
            'emrfk' => 210045,
            'kdprofile' => $kdprofile,
        ]));

        $sqlIdentitas = <<<SQL
            SELECT
                ps.nocm,
                ps.namapasien,
                jk.jeniskelamin,
                emr.noemr,
                to_char(ps.tgllahir, 'DD-MM-YYYY') as tgllahir
            FROM emrpasien_t as emr
            JOIN pasiendaftar_t as pd ON pd.noregistrasi = emr.noregistrasifk
            JOIN pasien_m as ps ON ps.id = pd.nocmfk
            JOIN jeniskelamin_m as jk ON jk.id = ps.objectjeniskelaminfk
            WHERE emr.norec = :norec
            SQL;

        $identitas = collect(DB::select($sqlIdentitas, [
            'norec' => $norec,
        ]))->first();

        $res['profile'] = DB::table('profile_m')->where('id', $kdprofile)->first();

        $dataimg = DB::table('emrfoto_t as emrp')
            ->select('emrp.*')
            ->where('emrp.statusenabled', true)
            ->where('emrp.noemrpasienfk', $identitas->noemr)
            ->where('emrp.emrfk', $emrfk)
            ->get();

        foreach ($raw as $row) {
            if (($row->type ?? null) === 'time' && !empty($row->value)) {
                $row->value = date('H:i', strtotime($row->value));
            }
            if (($row->type ?? null) === 'date' && !empty($row->value)) {
                $row->value = date('Y-m-d', strtotime($row->value));
            }
        }

        $pageWidth = 950;
        return view(
            'report.cetak-laporan-durante-anestesi-pemantauan',
            compact('raw', 'res', 'identitas', 'pageWidth', 'request', 'dataimg')
        );
    }

    public function cetakLaporanDuranteAnestesiObservasiPemulihan(Request $request)
    {
        $norec = $request->string('norec');
        $emrfk = $request->input('emrfk', 210024);
        $kdprofile = $request->input('kdprofile', 44);

        $sqlRaw = <<<SQL
            SELECT
                split_part(emrdp.value, '~', 2) as split,
                emrdp.*,
                emrd.caption,
                emrd.type,
                emrd.nourut,
                emrdp.emrfk,
                emrd.reportdisplay,
                emrd.kodeexternal AS kodeex,
                emrd.satuan,
                pg.namalengkap
            FROM emrpasiend_t AS emrdp
            LEFT JOIN emrpasien_t AS emrp ON emrp.noemr = emrdp.emrpasienfk
            LEFT JOIN emrd_t AS emrd ON emrd.id = emrdp.emrdfk
            LEFT JOIN pegawai_m AS pg ON pg.id = emrdp.pegawaifk
            WHERE emrdp.statusenabled = TRUE
            AND emrdp.kdprofile = :kdprofile
            AND emrdp.value IS NOT NULL
            AND emrp.norec = :norec
            AND emrdp.emrfk = :emrfk
            ORDER BY emrd.nourut ASC
            SQL;

        $raw = collect(DB::select($sqlRaw, [
            'norec' => $norec,
            'emrfk' => $emrfk,
            'kdprofile' => $kdprofile,
        ]));

        $sqlIdentitas = <<<SQL
            SELECT
                ps.nocm,
                ps.namapasien,
                jk.jeniskelamin,
                emr.noemr,
                to_char(ps.tgllahir, 'DD-MM-YYYY') as tgllahir
            FROM emrpasien_t as emr
            JOIN pasiendaftar_t as pd ON pd.noregistrasi = emr.noregistrasifk
            JOIN pasien_m as ps ON ps.id = pd.nocmfk
            JOIN jeniskelamin_m as jk ON jk.id = ps.objectjeniskelaminfk
            WHERE emr.norec = :norec
            SQL;

        $identitas = collect(DB::select($sqlIdentitas, [
            'norec' => $norec,
        ]))->first();

        $res['profile'] = DB::table('profile_m')->where('id', $kdprofile)->first();

        $dataimg = DB::table('emrfoto_t as emrp')
            ->select('emrp.*')
            ->where('emrp.statusenabled', true)
            ->where('emrp.noemrpasienfk', $identitas->noemr)
            ->where('emrp.emrfk', $emrfk)
            ->get();

        foreach ($raw as $row) {
            if (($row->type ?? null) === 'time' && !empty($row->value)) {
                $row->value = date('H:i', strtotime($row->value));
            }
        }

        $pageWidth = 950;
        return view(
            'report.cetak-laporan-durante-anestes-observasi-ruang-pemulihan',
            compact('raw', 'res', 'identitas', 'pageWidth', 'request', 'dataimg')
        );
    }

    public function cetakKeluarRuanganPemulihan(Request $request)
    {
        $norec = $request->string('norec');
        $emrfk = $request->input('emrfk', 210025);
        $kdprofile = $request->input('kdprofile', 44);

        $sqlRaw = <<<SQL
            SELECT
                split_part(emrdp.value, '~', 2) as split,
                emrdp.*,
                emrd.caption,
                emrd.type,
                emrd.nourut,
                emrdp.emrfk,
                emrd.reportdisplay,
                emrd.kodeexternal AS kodeex,
                emrd.satuan,
                pg.namalengkap
            FROM emrpasiend_t AS emrdp
            LEFT JOIN emrpasien_t AS emrp ON emrp.noemr = emrdp.emrpasienfk
            LEFT JOIN emrd_t AS emrd ON emrd.id = emrdp.emrdfk
            LEFT JOIN pegawai_m AS pg ON pg.id = emrdp.pegawaifk
            WHERE emrdp.statusenabled = TRUE
            AND emrdp.kdprofile = :kdprofile
            AND emrdp.value IS NOT NULL
            AND emrp.norec = :norec
            AND emrdp.emrfk = :emrfk
            ORDER BY emrd.nourut ASC
            SQL;

        $raw = collect(DB::select($sqlRaw, [
            'norec' => $norec,
            'emrfk' => $emrfk,
            'kdprofile' => $kdprofile,
        ]));

        $sqlIdentitas = <<<SQL
            SELECT
                ps.nocm,
                ps.namapasien,
                jk.jeniskelamin,
                emr.noemr,
                to_char(ps.tgllahir, 'DD-MM-YYYY') as tgllahir
            FROM emrpasien_t as emr
            JOIN pasiendaftar_t as pd ON pd.noregistrasi = emr.noregistrasifk
            JOIN pasien_m as ps ON ps.id = pd.nocmfk
            JOIN jeniskelamin_m as jk ON jk.id = ps.objectjeniskelaminfk
            WHERE emr.norec = :norec
            SQL;

        $identitas = collect(DB::select($sqlIdentitas, [
            'norec' => $norec,
        ]))->first();

        $res['profile'] = DB::table('profile_m')->where('id', $kdprofile)->first();

        $dataimg = DB::table('emrfoto_t as emrp')
            ->select('emrp.*')
            ->where('emrp.statusenabled', true)
            ->where('emrp.noemrpasienfk', $identitas->noemr ?? null)
            ->where('emrp.emrfk', $emrfk)
            ->get();

        foreach ($raw as $row) {
            if (($row->type ?? null) === 'time' && !empty($row->value)) {
                $row->value = date('H:i', strtotime($row->value));
            }
        }

        $pageWidth = 950;
        return view(
            'report.cetak-keluar-ruangan-pemulihan',
            compact('raw', 'res', 'identitas', 'pageWidth', 'request', 'dataimg')
        );
    }

    public function cetakLaporanOperasi(Request $request)
    {
        $norec = $request->string('norec');
        $emrfk = $request->input('emrfk', 210029);
        $kdprofile = $request->input('kdprofile', 44);

        $sqlRaw = <<<SQL
            SELECT
                split_part(emrdp.value, '~', 2) as split,
                emrdp.*,
                emrd.caption,
                emrd.type,
                emrd.nourut,
                emrdp.emrfk,
                emrd.reportdisplay,
                emrd.kodeexternal AS kodeex,
                emrd.satuan,
                pg.namalengkap
            FROM emrpasiend_t AS emrdp
            LEFT JOIN emrpasien_t AS emrp ON emrp.noemr = emrdp.emrpasienfk
            LEFT JOIN emrd_t AS emrd ON emrd.id = emrdp.emrdfk
            LEFT JOIN pegawai_m AS pg ON pg.id = emrdp.pegawaifk
            WHERE emrdp.statusenabled = TRUE
            AND emrdp.kdprofile = :kdprofile
            AND emrdp.value IS NOT NULL
            AND emrp.norec = :norec
            AND emrdp.emrfk = :emrfk
            ORDER BY emrd.nourut ASC
            SQL;

        $raw = collect(DB::select($sqlRaw, [
            'norec' => $norec,
            'emrfk' => $emrfk,
            'kdprofile' => $kdprofile,
        ]));

        $sqlIdentitas = <<<SQL
            SELECT
                ps.nocm,
                ps.namapasien,
                jk.jeniskelamin,
                emr.noemr,
                to_char(ps.tgllahir, 'DD-MM-YYYY') as tgllahir
            FROM emrpasien_t as emr
            JOIN pasiendaftar_t as pd ON pd.noregistrasi = emr.noregistrasifk
            JOIN pasien_m as ps ON ps.id = pd.nocmfk
            JOIN jeniskelamin_m as jk ON jk.id = ps.objectjeniskelaminfk
            WHERE emr.norec = :norec
            SQL;

        $identitas = collect(DB::select($sqlIdentitas, [
            'norec' => $norec,
        ]))->first();
        $profile = DB::table('profile_m')->where('id', $kdprofile)->first();

        $dataimg = DB::table('emrfoto_t as emrp')
            ->select('emrp.*')
            ->where('emrp.statusenabled', true)
            ->where('emrp.noemrpasienfk', $identitas->noemr ?? null)
            ->where('emrp.emrfk', $emrfk)
            ->get();

        $pageWidth = 950;
        return view(
            'report.laporan-operasi',
            compact('raw', 'identitas', 'pageWidth', 'request', 'dataimg', 'profile')
        );
    }

    public function cetakTriageKeseluruhan(Request $request)
    {
        $norec  = $request->string('norec');

        $sql = <<<SQL
            SELECT
                epd.emrdfk,
                ep.noemr,
                ed.type,
                pa.namapasien,
                pa.tgllahir,
                pa.nohp,
                pa.nocm,
                ep.jeniskelamin,
                ep.umur,
                al.alamatlengkap,
                ep.noregistrasifk as noregistrasi,
                epd.value,
                ep.namaruangan,
                pg.namalengkap as namadokter,
                epd.tgl,
                epd.index
            FROM emrpasien_t AS ep
            JOIN emrpasiend_t AS epd ON ep.noemr = epd.emrpasienfk
            JOIN emrd_t AS ed ON epd.emrdfk = ed.id
            JOIN antrianpasiendiperiksa_t AS pd ON pd.norec = ep.norec_apd
            LEFT JOIN pegawai_m AS pg ON pg.id = pd.objectpegawaifk
            LEFT JOIN pasien_m AS pa ON ep.nocm = pa.nocm
            LEFT JOIN alamat_m AS al ON pa.id = al.nocmfk
            WHERE ep.norec = :norec
            AND epd.statusenabled = TRUE
            AND epd.emrfk = :emrfk
            ORDER BY ed.nourut
            SQL;

        $data = DB::select($sql, [
            'norec' => $norec,
            'emrfk' => 290011,
        ]);
        // dd($data);

        foreach ($data as $z) {
            if (($z->type ?? null) === 'datetime' && !empty($z->value)) {
                $z->value = date('Y-m-d H:i:s', strtotime($z->value));
            }
        }

        $pageWidth = 500;
        $res['profile'] = DB::table('profile_m')->where('id', 44)->first();
        $res['d'] = $data;
        if (count($data) == 0) {
            echo '
                <script language="javascript">
                    window.alert("Data tidak ada.");
                    window.close()
                </script>
            ';
            die;
        }
        $dataimg = DB::table('emrfoto_t as emrp')
            ->select('emrp.*')
            ->where('emrp.statusenabled', true)
            ->where('emrp.noemrpasienfk', $data[0]->noemr)
            ->where('emrp.emrfk', 149)
            ->get();

        return view('report.cetakTriageKeseluruhan', compact('res', 'pageWidth', 'dataimg'));
    }

    public function cetakCatatanPemakaianCairanInfus(Request $request)
    {
        $norec  = $request->string('norec');

        $sql = <<<SQL
            SELECT
                epd.emrdfk,
                ep.noemr,
                ed.type,
                pa.namapasien,
                pa.tgllahir,
                pa.nohp,
                pa.nocm,
                ep.jeniskelamin,
                ep.umur,
                al.alamatlengkap,
                ep.noregistrasifk as noregistrasi,
                epd.value,
                ep.namaruangan,
                pg.namalengkap as namadokter,
                epd.tgl,
                epd.index
            FROM emrpasien_t AS ep
            JOIN emrpasiend_t AS epd ON ep.noemr = epd.emrpasienfk
            JOIN emrd_t AS ed ON epd.emrdfk = ed.id
            JOIN antrianpasiendiperiksa_t AS pd ON pd.norec = ep.norec_apd
            LEFT JOIN pegawai_m AS pg ON pg.id = pd.objectpegawaifk
            LEFT JOIN pasien_m AS pa ON ep.nocm = pa.nocm
            LEFT JOIN alamat_m AS al ON pa.id = al.nocmfk
            WHERE ep.norec = :norec
            AND epd.statusenabled = TRUE
            AND epd.emrfk = :emrfk
            ORDER BY ed.nourut
            SQL;

        $data = DB::select($sql, [
            'norec' => $norec,
            'emrfk' => 210061,
        ]);

        foreach ($data as $z) {
            if (($z->type ?? null) === 'datetime' && !empty($z->value)) {
                $z->value = date('Y-m-d H:i:s', strtotime($z->value));
            }
        }

        $pageWidth = 500;
        $res['profile'] = DB::table('profile_m')->where('id', 44)->first();
        $res['d'] = $data;
        if (count($data) == 0) {
            echo '
                <script language="javascript">
                    window.alert("Data tidak ada.");
                    window.close()
                </script>
            ';
            die;
        }
        $dataimg = DB::table('emrfoto_t as emrp')
            ->select('emrp.*')
            ->where('emrp.statusenabled', true)
            ->where('emrp.noemrpasienfk', $data[0]->noemr)
            ->where('emrp.emrfk', 149)
            ->get();

        return view('report.cetakCatatanPemakaianCairanInfus', compact('res', 'pageWidth', 'dataimg'));
    }

    public function cetakSignInBedah(Request $request)
    {
        $norec  = $request->string('norec');

        $sql = <<<SQL
            SELECT
                epd.emrdfk,
                ep.noemr,
                ed.type,
                pa.namapasien,
                pa.tgllahir,
                pa.nohp,
                pa.nocm,
                ep.jeniskelamin,
                ep.umur,
                al.alamatlengkap,
                ep.noregistrasifk as noregistrasi,
                epd.value,
                ep.namaruangan,
                pg.namalengkap as namadokter,
                epd.tgl,
                epd.index
            FROM emrpasien_t AS ep
            JOIN emrpasiend_t AS epd ON ep.noemr = epd.emrpasienfk
            JOIN emrd_t AS ed ON epd.emrdfk = ed.id
            JOIN antrianpasiendiperiksa_t AS pd ON pd.norec = ep.norec_apd
            LEFT JOIN pegawai_m AS pg ON pg.id = pd.objectpegawaifk
            LEFT JOIN pasien_m AS pa ON ep.nocm = pa.nocm
            LEFT JOIN alamat_m AS al ON pa.id = al.nocmfk
            WHERE ep.norec = :norec
            AND epd.statusenabled = TRUE
            AND epd.emrfk = :emrfk
            ORDER BY ed.nourut
            SQL;

        $data = DB::select($sql, [
            'norec' => $norec,
            'emrfk' => 210017,
        ]);
        // dd($data);

        foreach ($data as $z) {
            if (($z->type ?? null) === 'datetime' && !empty($z->value)) {
                $z->value = date('Y-m-d H:i:s', strtotime($z->value));
            }
        }

        $pageWidth = 500;
        $res['profile'] = DB::table('profile_m')->where('id', 44)->first();
        $res['d'] = $data;
        if (count($data) == 0) {
            echo '
                <script language="javascript">
                    window.alert("Data tidak ada.");
                    window.close()
                </script>
            ';
            die;
        }
        $dataimg = DB::table('emrfoto_t as emrp')
            ->select('emrp.*')
            ->where('emrp.statusenabled', true)
            ->where('emrp.noemrpasienfk', $data[0]->noemr)
            ->where('emrp.emrfk', 149)
            ->get();

        return view('report.cetakSignInBedah', compact('res', 'pageWidth', 'dataimg'));
    }

    public function cetakTimeOutBedah(Request $request)
    {
        $norec  = $request->string('norec');

        $sql = <<<SQL
            SELECT
                epd.emrdfk,
                ep.noemr,
                ed.type,
                pa.namapasien,
                pa.tgllahir,
                pa.nohp,
                pa.nocm,
                ep.jeniskelamin,
                ep.umur,
                al.alamatlengkap,
                ep.noregistrasifk as noregistrasi,
                epd.value,
                ep.namaruangan,
                pg.namalengkap as namadokter,
                epd.tgl,
                epd.index
            FROM emrpasien_t AS ep
            JOIN emrpasiend_t AS epd ON ep.noemr = epd.emrpasienfk
            JOIN emrd_t AS ed ON epd.emrdfk = ed.id
            JOIN antrianpasiendiperiksa_t AS pd ON pd.norec = ep.norec_apd
            LEFT JOIN pegawai_m AS pg ON pg.id = pd.objectpegawaifk
            LEFT JOIN pasien_m AS pa ON ep.nocm = pa.nocm
            LEFT JOIN alamat_m AS al ON pa.id = al.nocmfk
            WHERE ep.norec = :norec
            AND epd.statusenabled = TRUE
            AND epd.emrfk = :emrfk
            ORDER BY ed.nourut
            SQL;

        $data = DB::select($sql, [
            'norec' => $norec,
            'emrfk' => 210018,
        ]);
        // dd($data);

        foreach ($data as $z) {
            if (($z->type ?? null) === 'datetime' && !empty($z->value)) {
                $z->value = date('Y-m-d H:i:s', strtotime($z->value));
            }
        }

        $pageWidth = 500;
        $res['profile'] = DB::table('profile_m')->where('id', 44)->first();
        $res['d'] = $data;
        if (count($data) == 0) {
            echo '
                <script language="javascript">
                    window.alert("Data tidak ada.");
                    window.close()
                </script>
            ';
            die;
        }
        $dataimg = DB::table('emrfoto_t as emrp')
            ->select('emrp.*')
            ->where('emrp.statusenabled', true)
            ->where('emrp.noemrpasienfk', $data[0]->noemr)
            ->where('emrp.emrfk', 149)
            ->get();

        return view('report.cetakTimeOutBedah', compact('res', 'pageWidth', 'dataimg'));
    }

    public function cetakSignOutBedah(Request $request)
    {
        $norec  = $request->string('norec');

        $sql = <<<SQL
            SELECT
                epd.emrdfk,
                ep.noemr,
                ed.type,
                pa.namapasien,
                pa.tgllahir,
                pa.nohp,
                pa.nocm,
                ep.jeniskelamin,
                ep.umur,
                al.alamatlengkap,
                ep.noregistrasifk as noregistrasi,
                epd.value,
                ep.namaruangan,
                pg.namalengkap as namadokter,
                epd.tgl,
                epd.index
            FROM emrpasien_t AS ep
            JOIN emrpasiend_t AS epd ON ep.noemr = epd.emrpasienfk
            JOIN emrd_t AS ed ON epd.emrdfk = ed.id
            JOIN antrianpasiendiperiksa_t AS pd ON pd.norec = ep.norec_apd
            LEFT JOIN pegawai_m AS pg ON pg.id = pd.objectpegawaifk
            LEFT JOIN pasien_m AS pa ON ep.nocm = pa.nocm
            LEFT JOIN alamat_m AS al ON pa.id = al.nocmfk
            WHERE ep.norec = :norec
            AND epd.statusenabled = TRUE
            AND epd.emrfk = :emrfk
            ORDER BY ed.nourut
            SQL;

        $data = DB::select($sql, [
            'norec' => $norec,
            'emrfk' => 210020,
        ]);
        // dd($data);

        foreach ($data as $z) {
            if (($z->type ?? null) === 'datetime' && !empty($z->value)) {
                $z->value = date('Y-m-d H:i:s', strtotime($z->value));
            }
        }

        $pageWidth = 500;
        $res['profile'] = DB::table('profile_m')->where('id', 44)->first();
        $res['d'] = $data;
        if (count($data) == 0) {
            echo '
                <script language="javascript">
                    window.alert("Data tidak ada.");
                    window.close()
                </script>
            ';
            die;
        }
        $dataimg = DB::table('emrfoto_t as emrp')
            ->select('emrp.*')
            ->where('emrp.statusenabled', true)
            ->where('emrp.noemrpasienfk', $data[0]->noemr)
            ->where('emrp.emrfk', 149)
            ->get();

        return view('report.cetakSignOutBedah', compact('res', 'pageWidth', 'dataimg'));
    }
}
