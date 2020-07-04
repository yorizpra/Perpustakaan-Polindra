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

// Route::get('/', function () {
//     $nama = 'Yoga Rizki Pratama';
//     return view('index', ['nama' => $nama]);
// });

// Route::get('/users/ReadUser', function () {
//     return view('ReadUser');
// });
Route::get('/', function () {
    return view('index');
});

// Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin');
// Route::get('/index', 'PagesController@home');
Route::get('/admin', 'PagesController@admin');
Route::get('/user', 'PagesController@user');
Route::get('/about', 'PagesController@about');


// admin melihat hasil rekap peminjaman buku yang dilakukan mahasiswa
Route::get('/rekap_pbm', 'PinjambarangmhsController@indexKajur');

// admin mengubah status pinjam menjadi kembali pada peminjaman buku yang dilakukan oleh mahasiswa
Route::get('/admin_pbm', 'PinjambarangmhsController@indexAdmin');
Route::get('/admin_pbm/{data}', 'PinjambarangmhsController@edit');
Route::patch('/admin_pbm/Edit/{data}', 'PinjambarangmhsController@update');

// Peminjaman buku yang dilakukan oleh mahasiswa
Route::get('/pinjambarangmhs/create', 'PinjambarangmhsController@create');
Route::get('/pinjambarangmhs', 'PinjambarangmhsController@index');
Route::post('/pinjambarangmhs','PinjambarangmhsController@store');


///======================LOGIN MAHASISWA=======================
Route::get('/dashboard_mahasiswa', 'LoginController@indexMahasiswa');
Route::get('/loginmahasiswa', 'LoginController@loginmahasiswa');
Route::post('/loginmahasiswaPost', 'LoginController@loginmahasiswaPost');

///======================REGISTER MAHASISWA=======================
Route::get('/registermahasiswa', 'LoginController@registermahasiswa');
Route::post('/registermahasiswaPost', 'LoginController@registermahasiswaPost');
Route::get('/logoutmahasiswa', 'LoginController@logoutmahasiswa');

// Mahasiswa
Route::get('/users/Create', 'PenggunaController@create');
Route::get('/users', 'PenggunaController@index');
Route::post('/users', 'PenggunaController@store');
Route::delete('/users/{usr}', 'PenggunaController@destroy');
Route::get('/users/{usr}', 'PenggunaController@edit');
Route::patch('/users/Edit/{usr}', 'PenggunaController@update');
// Route::resource('users', 'PenggunaController');


///======================LOGIN ADMIN=======================
Route::get('/home', 'LoginController@indexAdmin');
Route::get('/loginadmin', 'LoginController@loginadmin');
Route::post('/loginadminPost', 'LoginController@loginadminPost');

///======================REGISTER ADMIN=======================
Route::get('/registeradmin', 'LoginController@registeradmin');
Route::post('/registeradminPost', 'LoginController@registeradminPost');
Route::get('/logoutadmin', 'LoginController@logoutadmin');

// Admin
Route::get('/admins/Create', 'AdminsController@create');
Route::get('/admins', 'AdminsController@index');
Route::post('/admins', 'AdminsController@store');
Route::delete('/admins/{admin}', 'AdminsController@destroy');
Route::get('/admins/{admin}', 'AdminsController@edit');
Route::patch('/admins/Edit/{admin}', 'AdminsController@update');

// Buku
Route::get('/items/Create', 'ItemsController@create');
Route::get('/items', 'ItemsController@index');
Route::post('/items', 'ItemsController@store');
Route::delete('/items/{item}', 'ItemsController@destroy');
Route::get('/items/{item}', 'ItemsController@edit');
Route::patch('/items/Edit/{item}', 'ItemsController@update');