<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LuasPersegiController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/luas-persegi', function () {
    return view('luas_persegi_form');
});

Route::post('/luas-persegi', [LuasPersegiController::class, 'hitungLuas']);
