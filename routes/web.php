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

Route::get('/admin/pesan', function () {
    return view('pages.pesan.pesan');
})->name('pesan');

Route::get('/admin', function () {
    return view('pages.dashboard');
})->name('dashboard');

Route::get('/admin/detail', function () {
    return view('pages.pesan.detail_pesan');
})->name('detail');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/berita', 'BeritaController@index')->name('berita');
Route::get('/admin/berita-create', 'BeritaController@create')->name('berita.create');
Route::get('/admin/berita-edit', 'BeritaController@edit')->name('berita.edit');

Route::get('/admin/guru', 'GuruController@index')->name('guru');
Route::get('/admin/guru-create', 'GuruController@create')->name('guru.create');
Route::get('/admin/guru-edit', 'GuruController@edit')->name('guru.edit');

Route::get('/admin/siswa', 'SiswaController@index')->name('siswa');
Route::get('/admin/siswa-create', 'SiswaController@create')->name('siswa.create');
Route::get('/admin/siswa-edit', 'SiswaController@edit')->name('siswa.edit');

Route::get('/admin/user', 'UserController@index')->name('user');
Route::get('/admin/user-create', 'UserController@create')->name('user.create');
Route::get('/admin/user-edit', 'UserController@edit')->name('user.edit');