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
    return view('auth.login'); 
});


Route::group(['middleware' => ['auth']], function() {

Route::get('dashboard','controldashboard@index');
 //anggota
Route::get('/anggota','anggotaControl@index');
Route::get('/anggota/input','anggotacontrol@input');
Route::get('/anggota/delete/{id}','anggotacontrol@delete');
Route::get('/anggota/form/edit/{id}','anggotacontrol@edit');
Route::post('/anggota/update','anggotacontrol@update');
Route::post('/anggota/save','anggotacontrol@save');
//Route::get('/anggota/input','anggotacontrol@postImages');

    //buku
Route::get('/buku','controlbuku@index');
Route::get('/buku/input','controlbuku@input');
Route::get('/buku/delete/{id}','controlbuku@delete');
Route::get('/buku/form/edit/{id}','controlbuku@edit');
Route::post('/buku/update','controlbuku@update');
Route::post('/buku/save','controlbuku@save');

    //koleksi_buku
Route::get('/koleksi','controlkoleksi@index');
Route::get('/koleksi/input','controlkoleksi@input');
Route::post('/koleksi/save','controlkoleksi@save');
Route::get('/koleksi/delete/{id}','controlkoleksi@delete');
Route::get('/koleksi/edit/{id}','controlkoleksi@edit');

    //kategori
Route::get('/kategori','controlkategori@index');
Route::get('/kategori/input','controlkategori@input');
Route::post('/kategori/save','controlkategori@save');
Route::get('/kategori/delete/{id}','controlkategori@delete');
Route::post('/kategori/update','controlkategori@update');
Route::get('/kategori/edit/{id}','controlkategori@edit');
    //Penerbit
Route::get('/penerbit','controlpenerbit@index');
Route::get('/penerbit/input','controlpenerbit@input');
Route::post('/penerbit/save','controlpenerbit@save');
Route::get('/penerbit/delete/{id}','controlpenerbit@delete');
Route::post('/penerbit/update','controlpenerbit@update');
Route::get('/penerbit/edit/{id}','controlpenerbit@edit');

    //pengarang
Route::get('/pengarang','controlpengarang@index');
Route::get('/pengarang/input','controlpengarang@input');
Route::post('/pengarang/save','controlpengarang@save');
Route::get('/pengarang/delete/{id}','controlpengarang@delete');
Route::post('/pengarang/update','controlpengarang@update');
Route::get('/pengarang/edit/{id}','controlpengarang@edit');
    //Rak
Route::get('/rak','controlrak@index');
Route::get('/rak/input','controlrak@input');
Route::post('/rak/save','controlrak@save');
Route::get('/rak/delete/{id}','controlrak@delete');
Route::post('/rak/update','controlrak@update');
Route::get('/rak/edit/{id}','controlrak@edit');
    // Transaksi
Route::post('/trans/peminjaman','transcontrol@peminjaman');
Route::get('/trans/peminjaman','transcontrol@peminjaman');
Route::post('/trans/peminjaman/simpan_pinjam','transcontrol@simpan_pinjam');
Route::post('/trans/pengembalian','transcontrol@pengembalian');
Route::get('/trans/pengembalian','transcontrol@pengembalian');
Route::post('/trans/pengembalian/save','transcontrol@save_pengembalian');
    //user
Route::get('/user','controluser@index');
Route::get('/user/input','controluser@input');
Route::post('/user/save','controluser@save');
Route::get('/user/delete/{id}','controluser@delete');
Route::post('/user/update','controluser@update');
Route::get('/user/edit/{id}','controluser@edit');
    // Report
Route::get('/report/anggota','controlreport@report_anggota');
Route::get('/report/qrcode','controlreport@report_qrcode');

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// mobile server
Route::get('/mobile/get_buku','mobilecontrol@get_Buku');
Route::get('/mobile/get_koleksi/{kd_buku}','mobilecontrol@get_Koleksi');
Route::post('/mobile/registrasi','mobilecontrol@registrasi');
Route::post('/mobile/login','mobilecontrol@login');
Route::post('/mobile/get_pinjam/{status}','mobilecontrol@get_pinjam');