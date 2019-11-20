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
    return view('pages.login');
});

Route::get('login', function () {
    return view('pages.dashboard');
})->name("login");

Route::get('register', function () {
    return view('pages.register');
});

Route::get('listbuku', function () {
    return view('pages.buku.list');
});

Route::get('formbuku', function () {
    return view('pages.buku.form');
});

Route::get('datapinjam', function () {
    return view('pages.pinjaman.datapinjam');
});

Route::get('listpinjam', function () {
    return view('pages.pinjaman.listpinjam');
});

Route::get('listrequest', function () {
    return view('pages.Request.listrequest');
});

Route::get('request', function () {
    return view('pages.Request.request');
});

Route::get('listgenre', function () {
    return view('pages.genre.list');
});

Route::get('formgenre', function () {
    return view('pages.genre.form');
});

Route::get('formpenerbit', function () {
    return view('pages.penerbit.form');
});

Route::get('listpenerbit', function () {
    return view('pages.penerbit.list');
});

Route::get('listmember', function () {
    return view('pages.member.list');
});

Route::get('formmember', function () {
    return view('pages.member.form');
});