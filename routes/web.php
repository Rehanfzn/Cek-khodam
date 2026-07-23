<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'landing');
Route::view('/cek-khodam', 'welcome');
Route::view('/tentang', 'about');
Route::view('/jodoh', 'jodoh');
Route::view('/weton', 'weton');
