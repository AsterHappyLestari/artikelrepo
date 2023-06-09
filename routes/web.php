<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

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
    return view('public.masterpublic');
});

// Route::get('/admin', function () {
//             return view('master');
//          });

// Route::group(['middleware' => ['auth','ceklevel:admin']], function (){
//     Route::get('/admin', function () {
//         return view('master');
//     });

// });

Route::group(['middleware' => ['auth:user','ceklevel:admin']], function (){ 
    Route::get('/dashboard','DashboardController@index')->name('dashboard.index');
    Route::resource('dosen', 'DosenController');
    Route::resource('mahasiswa', 'MahasiswaController');
    Route::get('mahasiswa/destroy/{id_mhs}', 'MahasiswaController@destroy')->name('mahasiswa.destroy');

    Route::resource('jurnal', 'JurnalController');

    Route::get('jurnal/edit/{id_jurnal}', 'JurnalController@edit')->name('jurnal.edit');
    Route::put('jurnal/update/{id_jurnal}', 'JurnalController@update')->name('jurnal.update');

    Route::get('jurnal/download', 'JurnalController@download')->name('jurnal.download');
    Route::get('jurnal/destroy/{id_jurnal}', 'JurnalController@destroy')->name('jurnal.destroy');
    Route::post('jurnal/search', 'JurnalController@search')->name('jurnal.search');
});

Route::group(['middleware' => ['auth:mahasiswa','ceklevel:mhs']], function (){ 
    Route::get('/halaman','JurnalController@indexmhs');
    Route::get('/halaman','JurnalController@indexuser');
    route::get('/halaman-satu','JurnalController@indexmhs')->name('halaman-satu');
    route::get('/halaman-dua','JurnalController@indexuser')->name('halaman-dua');
});

//user berarti url di user
//usercontroller index diambil dari usercontroller, dimana fungsi yg dipakai bernama index

Route::get('/login', function () {
    return view('login.index');
})->name('login');
Route::post('postlogin','LoginController@postlogin')->name('postlogin');
Route::get('logout','LoginController@logout')->name('logout');
Route::get('profil','LoginController@tampilprofil')->name('profil');

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

// Route::resource('biodata','BiodataController');
// Route::resource('dashboard','DashboardController');

//sementara
// Route::resource('dosen', 'DosenController');
// Route::resource('mahasiswa', 'MahasiswaController');
// Route::get('mahasiswa/destroy/{id_mhs}', 'MahasiswaController@destroy')->name('mahasiswa.destroy');

// Route::resource('jurnal', 'JurnalController');
// Route::get('jurnal/download', 'JurnalController@download')->name('jurnal.download');
// Route::get('jurnal/destroy/{id_jurnal}', 'JurnalController@destroy')->name('jurnal.destroy');
// Route::post('jurnal/search', 'JurnalController@search')->name('jurnal.search');







// Route::get('mahasiswa/index', 'MahasiswaController@index')->name('mahasiswa.index');
// Route::get('mahasiswa/edit/{id}', 'MahasiswaController@edit')->name('mahasiswa.edit');
// Route::put('mahasiswa/update/{id}', 'MahasiswaController@update')->name('mahasiswa.update');
// Route::get('mahasiswa/create', 'MahasiswaController@create')->name('mahasiswa.create');
// Route::post('mahasiswa/store', 'MahasiswaController@store')->name('mahasiswa.store');
// Route::delete('mahasiswa/destroy/{id}', 'MahasiswaController@destroy')->name('mahasiswa.destroy');


