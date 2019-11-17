<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.dashboard');
});

Route::get('listbuku', function () {
    return view('pages.buku.list');
});

Route::get('formbuku', function () {
    return view('pages.buku.form');
});

Route::get('permintaan', function () {
    return view('pages.peminjaman.permintaan');
});

Route::get('listpinjam', function () {
    return view('pages.peminjaman.listpinjam');
});
