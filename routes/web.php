<?php

use App\Http\Controllers\Report\ReportController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('report')->group(function () {
    Route::get('cetakAsesmenAwalKeperawatanIGD', [ReportController::class, 'cetakAsesmenAwalKeperawatanIGD']);
    Route::get('cetakAsesmenAwalKeperawatanRJ', [ReportController::class, 'cetakAsesmenAwalKeperawatanRJ']);
    Route::get('cetakResumeMedisRJ', [ReportController::class, 'cetakResumeMedisRJ']);
    Route::get('cetakAsesmenAwalKebidananRawatJalan', [ReportController::class, 'cetakAsesmenAwalKebidananRawatJalan']);
    Route::get('cetak-asesmen-pra-anestesi', [ReportController::class, 'cetakAsesmenPraAnestesi']);
    Route::get('cetak-laporan-durante-anestesi-vital', [ReportController::class, 'cetakLaporanDuranteAnestesiVital']);
    Route::get('cetak-laporan-durante-anestesi-pemantauan', [ReportController::class, 'cetakLaporanDuranteAnestesiPemantauan']);
    Route::get('cetak-laporan-durante-anestesi-observasi-pemulihan', [ReportController::class, 'cetakLaporanDuranteAnestesiObservasiPemulihan']);
    Route::get('cetak-keluar-ruangan-pemulihan', [ReportController::class, 'cetakKeluarRuanganPemulihan']);
    Route::get('cetak-laporan-operasi', [ReportController::class, 'cetakLaporanOperasi']);
    Route::get('cetakTriageKeseluruhan', [ReportController::class, 'cetakTriageKeseluruhan']);
    Route::get('cetakCatatanPemakaianCairanInfus', [ReportController::class, 'cetakCatatanPemakaianCairanInfus']);
    Route::get('cetakSignInBedah', [ReportController::class, 'cetakSignInBedah']);
    Route::get('cetakTimeOutBedah', [ReportController::class, 'cetakTimeOutBedah']);
    Route::get('cetakSignOutBedah', [ReportController::class, 'cetakSignOutBedah']);
    Route::get('cetakResumeMedisRI', [ReportController::class, 'cetakResumeMedisRI']);
    Route::get('storage/berkaspasien/{nocm}/{filename}', function ($nocm, $filename)
    {
        $path = public_path('BerkasPasien/'.$nocm.'/' . $filename);

        if (!File::exists($path)) {
            abort(404, 'File tidak ditemukan');
        }

        $file = File::get($path);
        $type = File::mimeType($path);

        $response = Response::make($file, 200);
        $response->header("Content-Type", $type);

        return $response;
    });
});

