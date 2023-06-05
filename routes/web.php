<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ScannerController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/scan', [ScannerController::class, 'index']);
Route::post('/scan', [ScannerController::class, 'save']);
