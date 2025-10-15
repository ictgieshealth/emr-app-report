<?php

namespace App\Http\Controllers\Report;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController
{
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
}
