<?php

use App\Http\Controllers\Report\ReportController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('report')->group(function () {
    Route::get('cetakAsesmenAwalKeperawatanIGD', [ReportController::class, 'cetakAsesmenAwalKeperawatanIGD']);
    Route::get('cetakAsesmenAwalKeperawatanRJ', [ReportController::class, 'cetakAsesmenAwalKeperawatanRJ']);
    Route::get('cetak-asesmen-pra-anestesi', [ReportController::class, 'cetakAsesmenPraAnestesi']);
    Route::get('cetak-laporan-durante-anestesi-vital', [ReportController::class, 'cetakLaporanDuranteAnestesiVital']);
    Route::get('cetak-laporan-durante-anestesi-pemantauan', [ReportController::class, 'cetakLaporanDuranteAnestesiPemantauan']);
    Route::get('cetak-laporan-durante-anestesi-observasi-pemulihan', [ReportController::class, 'cetakLaporanDuranteAnestesiObservasiPemulihan']);
    Route::get('cetak-keluar-ruangan-pemulihan', [ReportController::class, 'cetakKeluarRuanganPemulihan']);
    Route::get('cetak-laporan-operasi', [ReportController::class, 'cetakLaporanOperasi']);
    Route::get('cetakTriageKeseluruhan', [ReportController::class, 'cetakTriageKeseluruhan']);
    Route::get('cetakCatatanPemakaianCairanInfus', [ReportController::class, 'cetakCatatanPemakaianCairanInfus']);
});
