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
    return view('front-end.index');
});

Auth::routes();

Route::get('/index', function () {
    return view('front-end.index');
})->name('beranda');

Route::get('/berita', function () {
    return view('front-end.berita_front');
})->name('berita_front');

Route::get('/data-guru', function () {
    return view('front-end.data_guru');
})->name('data_guru');

Route::get('/data-siswa', function () {
    return view('front-end.data_siswa');
})->name('data_siswa');

Route::get('/hubungi-kami', function () {
    return view('front-end.hubungi_kami');
})->name('hubungi_kami');

//Route::get('/admin/pesan', function () {
//    return view('pages.pesan.pesan');
//})->name('pesan');

//Route::get('/admin', function () {
//    return view('pages.dashboard');
//})->name('dashboard');

//Route::get('/admin/detail', function () {
//    return view('pages.pesan.detail_pesan');
//})->name('detail');

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', 'HomeController@index')->name('admin.dashboard');
    Route::get('/', 'HomeController@index')->name('admin.dashboard');

    Route::get('/berita', 'BeritaController@index')->name('admin.berita');
    Route::get('/berita-create', 'BeritaController@create')->name('admin.berita.create');
    Route::get('/berita-edit', 'BeritaController@edit')->name('admin.berita.edit');

    Route::get('/user', 'UserController@index')->name('admin.user');
    Route::get('/user-create', 'UserController@create')->name('admin.user.create');
    Route::get('/user-edit', 'UserController@edit')->name('admin.user.edit');

    Route::get('/guru', 'GuruController@index')->name('admin.guru');
    Route::get('/guru-create', 'GuruController@create')->name('admin.guru.create');
    Route::get('/guru-edit', 'GuruController@edit')->name('admin.guru.edit');

    Route::get('/siswa', 'SiswaController@index')->name('admin.siswa');
    Route::get('/siswa-create', 'SiswaController@create')->name('admin.siswa.create');
    Route::get('/siswa-edit', 'SiswaController@edit')->name('admin.siswa.edit');


    Route::get('/pesan', 'HomeController@pesan')->name('admin.pesan');
});