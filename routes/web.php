<?php

use App\Http\Controllers\Report\ReportController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('report')->group(function () {
    Route::get('cetakAsesmenAwalKeperawatanIGD', [ReportController::class, 'cetakAsesmenAwalKeperawatanIGD']);
});
