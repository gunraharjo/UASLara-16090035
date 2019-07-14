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
    return view('welcome');
});



Route::get('edit', function () {
    return view('admin.table.edit_penduduk');
});
Route::get('sensus', function () {
    return view('admin.data_sensus.sensus');
});

Route::get('penduduk', function () {
    return view('admin.partials.menu');
});

//
// Route::get('home', function () {
//     return view('admin.partials.menu_dashboard');
// });



//Route::resource('penduduk','PendudukController');
//new
Route::get('admin', function () {
    return view('admin.dashboard');
});
Route::get('dashboard', function () {
    return view('admin.partials.menu_dashboard');
});
//Route::resource('dashboard','RumahController');


// Route::get('create', function () {
//     return view('admin.table.create_penduduk');
// });
//kependudukan
Route::resource('/penduduk','PendudukController');
//menu info desa
Route::resource('/visimisi','VisiMisiController');
Route::resource('/profil','ProfilDesaController');
Route::resource('/sejarah','SejarahDesaController');
Route::resource('/tentang','TentangDesaController');
//kegiatandesa
Route::resource('/blog','BlogController');




Route::get('daftar_penduduk', function () {
    return view('admin.table.penduduk_table');
});
//frontend
Route::get('/user', function () {
    return view('frontend.default');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
