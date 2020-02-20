<?php
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
//ketika admin berhasil login maka akan redirect ke halaman home admin
Auth::routes();

// Routing PERTAMA http://localhost:8000/
Route::get('/','utamaController@utama') ;

//Routing Ke Halaman Login
Route::get('/YesusKeselamatanku', function(){
    return view('auth.login');
    });

//Routing Ke Halaman Register
Route::get('/YesusBaik', function(){
    return view('auth.register');
    });

//Routing Didalam Administrator
Route::get('/dashboard', function()
{return view('layouts.layout');})->middleware('auth');
//jadwal
Route::get('/jadwal','jadwalController@index')->middleware('auth');
Route::get('/jadwal/create','jadwalController@vcreate')->middleware('auth');
Route::post('/jadwal/create','jadwalController@create')->middleware('auth');
Route::get('/jadwal/delete/{id}','jadwalController@delete')->middleware('auth');
Route::get('/jadwal/edit/{id}','jadwalController@vedit')->middleware('auth');
Route::post('/jadwal/edit/{id}','jadwalController@edit')->middleware('auth');

 //warta
Route::get('/warta','wartaController@index')->middleware('auth');
Route::get('/warta/show/{id}','wartaController@Show')->middleware('auth');
Route::get('/warta/create','wartaController@vcreate')->middleware('auth');
Route::post('/warta/create', 'wartaController@create')->middleware('auth');
Route::get('/warta/delete/{id}','wartaController@delete')->middleware('auth');
Route::get('/warta/edit/{id}','wartaController@vedit')->middleware('auth');
Route::post('/warta/edit/{id}','wartaController@edit')->middleware('auth');

//profil
Route::get('/profil','profilController@index')->middleware('auth');
Route::get('/profil/create','profilController@vcreate')->middleware('auth');
Route::post('/profil/create','profilController@create')->middleware('auth');
Route::get('/profil/edit','profilController@vedit')->middleware('auth');
Route::post('/profil/edit','profilController@edit')->middleware('auth');
Route::get('/profil/cpendeta','profilController@vCPendeta')->middleware('auth');
Route::post('/profil/cpendeta','profilController@cPendeta')->middleware('auth');
Route::get('/profil/spendeta/{id}','profilController@sPendeta')->middleware('auth');
Route::get('/profil/ependeta/{id}','profilController@vEPendeta')->middleware('auth');
Route::post('/profil/ependeta/{id}','profilController@ePendeta')->middleware('auth');
Route::get('/profil/dpendeta/{id}','profilController@dPendeta')->middleware('auth');

//kegiatan
Route::get('/kegiatan','kegiatanController@index')->middleware('auth');
Route::get('/kegiatan/create','kegiatanController@vcreate')->middleware('auth');
Route::post('/kegiatan/create','kegiatanController@create')->middleware('auth');
Route::get('/kegiatan/edit/{id}','kegiatanController@vedit')->middleware('auth');
Route::post('/kegiatan/edit/{id}','kegiatanController@edit')->middleware('auth');
Route::get('/kegiatan/delete/{id}','kegiatanController@delete')->middleware('auth');
Route::get('kegiatan/addfoto','kegiatanController@VFcreate')->middleware('auth');
Route::post('kegiatan/addfoto','kegiatanController@Fcreate')->middleware('auth');
Route::get('/kegiatan/show/{id}','kegiatanController@show')->middleware('auth');
Route::get('/kegiatan/fdelete/{id}','kegiatanController@Fdelete')->middleware('auth');

//utama
Route::get('/utama/1','utamaController@utama');
Route::get('/utama/2','utamaController@warta');
Route::get('/utama/pendeta','utamaController@pendeta');
Route::get('/utama/swarta/{id}','utamaController@showWarta');
Route::get('/uprofil','utamaController@profil'); 
Route::get('/utama/kegiatan','utamaController@showKegiatan');
Route::get('/utama/foto/{id}','utamaController@showFoto');