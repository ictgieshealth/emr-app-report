<?php

namespace App\Http\Controllers\Report;

use Carbon\Carbon;
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

    public static function getVitalSigns($noRegistrasi = null, $idEmr = 147, $objectidAwal = 4241, $objectidAkhir = 4246)
    {
        $query = "SELECT epd.value, epd.emrdfk
                  FROM emrpasiend_t as epd
                  INNER JOIN emrpasien_t as ep ON ep.noemr = epd.emrpasienfk
                  WHERE epd.kdprofile = :kdprofile";

        $params = ['kdprofile' => 44];

        if (!empty($idEmr)) {
            $query .= " AND epd.emrfk = :emrfk";
            $params['emrfk'] = $idEmr;
        }

        if (!empty($noRegistrasi)) {
            $query .= " AND ep.noregistrasifk = :noregistrasi";
            $params['noregistrasi'] = $noRegistrasi;
        }

        if (!empty($objectidAwal) && !empty($objectidAkhir)) {
            $query .= " AND epd.emrdfk BETWEEN :objectidawal AND :objectidakhir";
            $params['objectidawal'] = $objectidAwal;
            $params['objectidakhir'] = $objectidAkhir;
        }

        $query .= " AND epd.statusenabled = true ORDER BY epd.emrdfk";

        $data = DB::select($query, $params);

        return $data;
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
                $z->value = Carbon::parse($z->value)
                    ->setTimezone('Asia/Jakarta')
                    ->format('Y-m-d H:i:s');
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

    public function cetakAsesmenAwalKebidananRawatJalan(Request $request)
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
            'emrfk' => 21035,
        ]);

        foreach ($data as $z) {
            if (($z->type ?? null) === 'datetime' && !empty($z->value)) {
                $z->value = Carbon::parse($z->value)
                    ->setTimezone('Asia/Jakarta')
                    ->format('Y-m-d H:i:s');
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
            ->where('emrp.emrfk', 21035)
            ->get();

        return view('report.cetakAsesmenAwalKebidananRawatJalan', compact('res', 'pageWidth', 'dataimg'));
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
                $z->value = Carbon::parse($z->value)
                    ->setTimezone('Asia/Jakarta')
                    ->format('Y-m-d H:i:s');
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
                $z->value = Carbon::parse($z->value)
                    ->setTimezone('Asia/Jakarta')
                    ->format('Y-m-d H:i:s');
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

        foreach ($data as $z) {
            if (($z->type ?? null) === 'datetime' && !empty($z->value)) {
                $z->value = Carbon::parse($z->value)
                    ->setTimezone('Asia/Jakarta')
                    ->format('Y-m-d H:i:s');
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

        $vitalSigns = self::getVitalSigns(
            $noRegistrasi = $data[0]->noregistrasi,
        );
        // dd($data[0]->noregistrasi);

        return view('report.cetakTriageKeseluruhan', compact('res', 'pageWidth', 'dataimg', 'vitalSigns'));
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
                $z->value = Carbon::parse($z->value)
                    ->setTimezone('Asia/Jakarta')
                    ->format('Y-m-d H:i:s');
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
                $z->value = Carbon::parse($z->value)
                    ->setTimezone('Asia/Jakarta')
                    ->format('Y-m-d H:i:s');
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
                $z->value = Carbon::parse($z->value)
                    ->setTimezone('Asia/Jakarta')
                    ->format('Y-m-d H:i:s');
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
                $z->value = Carbon::parse($z->value)
                    ->setTimezone('Asia/Jakarta')
                    ->format('Y-m-d H:i:s');
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


    public function cetakResumeMedisRI(Request $r)
    {
        $res['profile'] = DB::table('profile_m')->where('id', 44)->first();
        $data = DB::table('resumemedis_t as rm')
            ->select(
                'pd.tglregistrasi',
                'pd.tglpulang',
                'rm.norec',
                'rm.tglresume',
                'ru.namaruangan',
                'pg.namalengkap as namadokter',
                'rm.ringkasanriwayatpenyakit',
                'rm.pemeriksaanfisik',
                'rm.pemeriksaanpenunjang',
                'rm.hasilkonsultasi',
                'rm.terapi',
                'rm.diagnosisawal',
                'rm.diagnosissekunder',
                'rm.tindakanprosedur',
                // 'rm.diagnosismasuk', 'rm.diagnosistambahan', 'rm.alasandirawat',
                'rm.kddiagnosisawal',
                'rm.diagnosismasuk',
                'rm.kddiagnosismasuk',
                'rm.diagnosistambahan',
                'rm.kddiagnosistambahan',
                'rm.kddiagnosistambahan2',
                'rm.kddiagnosistambahan3',
                'rm.kddiagnosistambahan4',
                'rm.alasandirawat',
                'dg1.kddiagnosa as kddiagnosa1',
                'dg1.namadiagnosa as namadiagnosa1',
                'dg2.kddiagnosa as kddiagnosa2',
                'dg2.namadiagnosa as namadiagnosa2',
                'dg3.kddiagnosa as kddiagnosa3',
                'dg3.namadiagnosa as namadiagnosa3',
                'dg4.kddiagnosa as kddiagnosa4',
                'dg4.namadiagnosa as namadiagnosa4',
                'dg5.kddiagnosa as kddiagnosa5',
                'dg5.namadiagnosa as namadiagnosa5',
                'dg6.kddiagnosa as kddiagnosa6',
                'dg6.namadiagnosa as namadiagnosa6',
                'rm.tglkontrolpoli',
                'rm.rumahsakittujuan',
                'rm.alergi',
                'rm.diet',
                'rm.instruksianjuran',
                'rm.hasillab',
                'rm.kondisiwaktukeluar',
                'rm.pengobatandilanjutkan',
                'rm.koderesume',
                'rm.pegawaifk',
                'pd.noregistrasi',
                'pd.tglregistrasi',
                'ps.nocm',
                'rm.noregistrasifk',
                'ps.namapasien',
                'kp.kelompokpasien',
                'ru.namaruangan',
                'jk.jeniskelamin',
                'ps.tgllahir',
                'ept.noemr'
            )
            ->Join('antrianpasiendiperiksa_t as apd', 'apd.norec', '=', 'rm.noregistrasifk')
            ->Join('pasiendaftar_t as pd', 'pd.norec', '=', 'apd.noregistrasifk')
            ->Join('kelompokpasien_m as kp', 'kp.id', '=', 'pd.objectkelompokpasienlastfk')
            ->Join('pasien_m as ps', 'ps.id', '=', 'pd.nocmfk')
            ->Join('jeniskelamin_m as jk', 'jk.id', '=', 'ps.objectjeniskelaminfk')
            ->leftJoin('ruangan_m as ru', 'ru.id', '=', 'apd.objectruanganfk')
            ->leftJoin('pegawai_m as pg', 'pg.id', '=', 'pd.objectpegawaifk')
            ->leftJoin('diagnosa_m as dg1', 'dg1.id', '=', 'rm.kddiagnosismasuk')
            ->leftJoin('diagnosa_m as dg2', 'dg2.id', '=', 'rm.kddiagnosisawal')
            ->leftJoin('diagnosa_m as dg3', 'dg3.id', '=', 'rm.kddiagnosistambahan')
            ->leftJoin('diagnosa_m as dg4', 'dg4.id', '=', 'rm.kddiagnosistambahan2')
            ->leftJoin('diagnosa_m as dg5', 'dg5.id', '=', 'rm.kddiagnosistambahan3')
            ->leftJoin('diagnosa_m as dg6', 'dg6.id', '=', 'rm.kddiagnosistambahan4')
            ->leftJoin('emrpasien_t as ept', 'ept.noregistrasifk', '=', 'pd.noregistrasi')
            ->leftJoin('emrfoto_t as efo', 'efo.noemrpasienfk', '=', 'ept.noemr')
            ->where('rm.kdprofile', 44)
            ->where('rm.statusenabled', true)
            ->where('rm.norec',  $r['norec'])
            ->where('rm.keteranganlainnya', 'RawatInap');

        $data = $data->first();

        $dataimg = DB::table('emrfoto_t as emrp')
            ->select('emrp.*')
            ->where('emrp.kdprofile', 44)
            ->where('emrp.noemrpasienfk', $data->noemr)
            ->where('emrp.emrfk', "25000")
            ->get();

        $item = $data;
        $details = DB::select(
            "
                select * from resumemedisdetail_t
                where resumefk=:norec
            ",
            array(
                'norec' => $item->norec,
            )
        );
        $diagnosistambahanarray = array($item->kddiagnosa3, $item->kddiagnosa4, $item->kddiagnosa5, $item->kddiagnosa6);
        $diagnosistambahan = [];
        $no = 0;
        foreach ($diagnosistambahanarray as $tambahan) {
            if ($tambahan != "") {
                $diagnosistambahan[$no] = $tambahan;
                $no++;
            }
        }

        $result = array(
            'norec' => $item->norec,
            'tglregistrasi' => $item->tglregistrasi,
            'tglpulang' => $item->tglpulang,
            'kelompokpasien' => $item->kelompokpasien,
            'tglresume' => $item->tglresume,
            'namaruangan' => $item->namaruangan,
            'namadokter' => $item->namadokter,
            'ringkasanriwayatpenyakit' => $item->ringkasanriwayatpenyakit,
            'pemeriksaanfisik' => $item->pemeriksaanfisik,
            'pemeriksaanpenunjang' => $item->pemeriksaanpenunjang,
            'hasilkonsultasi' => $item->hasilkonsultasi,
            'terapi' => $item->terapi,
            'diagnosismasuk' => $item->diagnosismasuk,
            'kddiagnosismasuk' => array($item->kddiagnosismasuk  != null ? $item->kddiagnosismasuk : '-', $item->kddiagnosa1, $item->namadiagnosa1 != null ? $item->namadiagnosa1 : '-'),
            'diagnosisawal' => $item->diagnosisawal,
            'kddiagnosisawal' => array($item->kddiagnosisawal, $item->kddiagnosa2,  $item->namadiagnosa2),
            'diagnosistambahan' => $item->diagnosistambahan,
            'kddiagnosistambahan' => array($item->kddiagnosistambahan, $item->kddiagnosa3,  $item->namadiagnosa3),
            'kddiagnosistambahan2' => array($item->kddiagnosistambahan2, $item->kddiagnosa4,  $item->namadiagnosa4),
            'kddiagnosistambahan3' => array($item->kddiagnosistambahan3, $item->kddiagnosa5,  $item->namadiagnosa5),
            'kddiagnosistambahan4' => array($item->kddiagnosistambahan4, $item->kddiagnosa6,  $item->namadiagnosa6),
            'namadiagnosa3' => $item->namadiagnosa3,
            'namadiagnosa4' => $item->namadiagnosa4,
            'namadiagnosa5' => $item->namadiagnosa5,
            'namadiagnosa6' => $item->namadiagnosa6,
            'kddiagnosistambahanall' => implode(", ", $diagnosistambahan),
            'diagnosissekunder' => $item->diagnosissekunder,
            'tglkontrolpoli' => $item->tglkontrolpoli,
            'rumahsakittujuan' => $item->rumahsakittujuan,
            'tindakanprosedur' => $item->tindakanprosedur,
            'alasandirawat' => $item->alasandirawat,
            'alergi' => $item->alergi,
            'diet' => $item->diet,
            'instruksianjuran' => $item->instruksianjuran,
            'hasillab' => $item->hasillab,
            'kondisiwaktukeluar' => $item->kondisiwaktukeluar,
            'pengobatandilanjutkan' => $item->pengobatandilanjutkan,
            'koderesume' => $item->koderesume,
            'pegawaifk' => $item->pegawaifk,
            'noregistrasi' => $item->noregistrasi,
            'nocm' => $item->nocm,
            'namapasien' => $item->namapasien,
            'noregistrasifk' => $item->noregistrasifk,
            'jeniskelamin' => $item->jeniskelamin,
            'tgllahir' => $item->tgllahir,
            'details' => $details,
        );
        $res['terapi'][] = array('tera' => 'asas');
        $res['d'] = $result;
        $username = 'asa';
        return view('report.resume-medis', compact('res', 'username', 'dataimg'));
    }


    public function cetakResumeMedisRJ(Request $r)
    {
        $res['profile'] = DB::table('profile_m')->where('id', 44)->first();

        $data = DB::table('resumemedis_t as rm')
            ->select(
                'pd.tglregistrasi',
                'pd.tglpulang',
                'rm.norec',
                'rm.tglresume',
                'ru.namaruangan',
                'pg.namalengkap as namadokter',
                'rm.ringkasanriwayatpenyakit',
                'rm.pemeriksaanfisik',
                'rm.pemeriksaanpenunjang',
                'rm.hasilkonsultasi',
                'rm.terapi',
                'rm.diagnosisawal',
                'rm.diagnosissekunder',
                'rm.tindakanprosedur',
                'rm.anamnesa',
                'rm.pemeriksaan',
                'rm.tindakanterapi',
                'rm.diagnosacppt',
                'rk.namarekanan',
                'rm.kddiagnosisawal',
                'rm.diagnosismasuk',
                'rm.kddiagnosismasuk',
                'rm.diagnosistambahan',
                'rm.kddiagnosistambahan',
                'rm.kddiagnosistambahan2',
                'rm.kddiagnosistambahan3',
                'rm.kddiagnosistambahan4',
                'rm.alasandirawat',
                'rm.diagnosacombo',
                'dg1.kddiagnosa as kddiagnosa1',
                'dg1.namadiagnosa as namadiagnosa1',
                'dg2.kddiagnosa as kddiagnosa2',
                'dg2.namadiagnosa as namadiagnosa2',
                'dg3.kddiagnosa as kddiagnosa3',
                'dg3.namadiagnosa as namadiagnosa3',
                'dg4.kddiagnosa as kddiagnosa4',
                'dg4.namadiagnosa as namadiagnosa4',
                'dg5.kddiagnosa as kddiagnosa5',
                'dg5.namadiagnosa as namadiagnosa5',
                'dg6.kddiagnosa as kddiagnosa6',
                'dg6.namadiagnosa as namadiagnosa6',
                'rm.tglkontrolpoli',
                'rm.rumahsakittujuan',
                'rm.alergi',
                'rm.diet',
                'rm.instruksianjuran',
                'rm.hasillab',
                'rm.kondisiwaktukeluar',
                'rm.pengobatandilanjutkan',
                'rm.koderesume',
                'rm.pegawaifk',
                'pd.noregistrasi',
                'pd.tglregistrasi',
                'ps.nocm',
                'rm.noregistrasifk',
                'ps.namapasien',
                'kp.kelompokpasien',
                'ru.namaruangan',
                'jk.jeniskelamin',
                'ps.tgllahir'
            )
            ->Join('antrianpasiendiperiksa_t as apd', 'apd.norec', '=', 'rm.noregistrasifk')
            ->Join('pasiendaftar_t as pd', 'pd.norec', '=', 'apd.noregistrasifk')
            ->Join('kelompokpasien_m as kp', 'kp.id', '=', 'pd.objectkelompokpasienlastfk')
            ->Join('pasien_m as ps', 'ps.id', '=', 'pd.nocmfk')
            ->Join('jeniskelamin_m as jk', 'jk.id', '=', 'ps.objectjeniskelaminfk')
            ->leftJoin('rekanan_m as rk', 'rk.id', '=', 'pd.objectrekananfk')
            ->leftJoin('ruangan_m as ru', 'ru.id', '=', 'apd.objectruanganfk')
            ->leftJoin('pegawai_m as pg', 'pg.id', '=', 'pd.objectpegawaifk')
            ->leftJoin('diagnosa_m as dg1', 'dg1.id', '=', 'rm.kddiagnosismasuk')
            ->leftJoin('diagnosa_m as dg2', 'dg2.id', '=', 'rm.kddiagnosisawal')
            ->leftJoin('diagnosa_m as dg3', 'dg3.id', '=', 'rm.kddiagnosistambahan')
            ->leftJoin('diagnosa_m as dg4', 'dg4.id', '=', 'rm.kddiagnosistambahan2')
            ->leftJoin('diagnosa_m as dg5', 'dg5.id', '=', 'rm.kddiagnosistambahan3')
            ->leftJoin('diagnosa_m as dg6', 'dg6.id', '=', 'rm.kddiagnosistambahan4')
            ->where('rm.kdprofile', 44)
            ->where('rm.statusenabled', true)
            ->where('rm.norec',  $r['norec'])
            ->where('rm.keteranganlainnya', 'RawatJalan');

        $data = $data->first();
        $item = $data;
        $dataimg=null;
        $diagnosistambahan = [];
        $no = 0;
        $result = array(
            'norec' => $item->norec,
            'tglregistrasi' => $item->tglregistrasi,
            'tglpulang' => $item->tglpulang,
            'kelompokpasien' => $item->kelompokpasien,
            'tglresume' => $item->tglresume,
            'namaruangan' => $item->namaruangan,
            'namarekanan' => $item->namarekanan,
            'namadokter' => $item->namadokter,
            'ringkasanriwayatpenyakit' => $item->ringkasanriwayatpenyakit,
            'pemeriksaanfisik' => $item->pemeriksaanfisik,
            'pemeriksaanpenunjang' => $item->pemeriksaanpenunjang,
            'hasilkonsultasi' => $item->hasilkonsultasi,
            'terapi' => $item->terapi,
            'diagnosismasuk' => $item->diagnosismasuk,
            'kddiagnosismasuk' => array($item->kddiagnosismasuk  != null ? $item->kddiagnosismasuk : '-', $item->kddiagnosa1, $item->namadiagnosa1 != null ? $item->namadiagnosa1 : '-'),
            'diagnosisawal' => $item->diagnosisawal,
            'kddiagnosisawal' => array($item->kddiagnosisawal, $item->kddiagnosa2,  $item->namadiagnosa2),
            'diagnosistambahan' => $item->diagnosistambahan,
            'kddiagnosistambahan' => array($item->kddiagnosistambahan, $item->kddiagnosa3,  $item->namadiagnosa3),
            'kddiagnosistambahan2' => array($item->kddiagnosistambahan2, $item->kddiagnosa4,  $item->namadiagnosa4),
            'kddiagnosistambahan3' => array($item->kddiagnosistambahan3, $item->kddiagnosa5,  $item->namadiagnosa5),
            'kddiagnosistambahan4' => array($item->kddiagnosistambahan4, $item->kddiagnosa6,  $item->namadiagnosa6),
            'kddiagnosistambahanall' => implode(", ", $diagnosistambahan),
            'diagnosissekunder' => $item->diagnosissekunder,
            'tglkontrolpoli' => $item->tglkontrolpoli,
            'rumahsakittujuan' => $item->rumahsakittujuan,
            'tindakanprosedur' => $item->tindakanprosedur,
            'alasandirawat' => $item->alasandirawat,
            'alergi' => $item->alergi,
            'diet' => $item->diet,
            'instruksianjuran' => $item->instruksianjuran,
            'hasillab' => $item->hasillab,
            'kondisiwaktukeluar' => $item->kondisiwaktukeluar,
            'pengobatandilanjutkan' => $item->pengobatandilanjutkan,
            'koderesume' => $item->koderesume,
            'pegawaifk' => $item->pegawaifk,
            'noregistrasi' => $item->noregistrasi,
            'nocm' => $item->nocm,
            'namapasien' => $item->namapasien,
            'noregistrasifk' => $item->pemeriksaan,
            'jeniskelamin' => $item->jeniskelamin,
            'tgllahir' => $item->tgllahir,
            'anamnesa' => $item->anamnesa,
            'pemeriksaan' => $item->pemeriksaan,
            'diagnosacppt' => $item->diagnosacppt,
            'terapitindakan' => $item->tindakanterapi,
            'diagnosacombo' => $item->diagnosacombo ? '| '.$item->diagnosacombo : '',
        );
        $res['terapi'][] = array('tera' => 'asas');
        $res['d'] = $result;
        $username = 'asa';
        $pageWidth = 1090;
        $tgl = Carbon::now()->format('F j, Y');
        return view(
            'report.resume-medis-RJ',
            compact('data', 'pageWidth', 'r', 'res', 'tgl','dataimg')
        );
    }
}
