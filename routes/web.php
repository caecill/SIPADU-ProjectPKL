<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('landingpage'); 
});

Route::get('/login', function () {
    return view ('login');
})->name('login');

Route::get('/signup', function () {
    return view ('signup');
})->name('signup');

Route::get('/beranda', function () {
    return view('beranda');
})->name('beranda');
Route::get('/arsip', function () {
    return view('arsip');
})->name('arsip');

Route::get('/test-db', function () {
    try {
        DB::connection()->getPdo();
        return '✅ Koneksi ke database berhasil!';
    } catch (\Exception $e) {
        return '❌ Gagal konek ke database: '.$e->getMessage();
    }
});