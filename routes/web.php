<?php

use Illuminate\Support\Facades\Route;

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



Route::get('/login', function () {
    return view('Pengguna.login');
})->name('login');

Route::get('/login', function () {
    if (Auth::user()) {
        return redirect('/dashboard');
    }
    return view('Pengguna.login');
});


Route::post('/postlogin', 'LoginController@postlogin')->name('postlogin');
Route::get('/logout', 'LoginController@logout')->name('logout');



Route::group(['middleware' => ['auth', 'CekLevel:admin']], function () {
    Route::get('/beranda', 'BerandaController@index');
    
    Route::get('/penimbangan', 'PenimbanganController@penimbangan')->name('penimbangan');
    Route::get('/addpenimbangan', 'PenimbanganController@addpenimbangan')->name('addpenimbangan');
    Route::get('/dashboard', 'BerandaController@dashboard')->name('dashboard');
    Route::post('/simpan-penimbangan','PenimbanganController@store')->name('simpan-penimbangan');
    Route::get('/editpenimbangan/{id}','PenimbanganController@editpenimbangan')->name('editpenimbangan');
    Route::post('/updatepenimbangan/{id}','PenimbanganController@update')->name('updatepenimbangan');
    Route::get('/deletepenimbangan/{id}','PenimbanganController@destroy')->name('deletepenimbangan');

    Route::get('/register', 'RegistrasibalitaController@register')->name('register');
    Route::get('/addregisterbalita', 'RegistrasibalitaController@addregisterbalita')->name('addregisterbalita');
    Route::post('/simpan-registerbalita','RegistrasibalitaController@store')->name('simpan-registerbalita');
    Route::get('/detailregister/{id}','RegistrasibalitaController@show')->name('detailregister');
    Route::get('/editregister/{id}','RegistrasibalitaController@edit')->name('editregister');
    Route::post('/updateregister/{id}','RegistrasibalitaController@update')->name('updateregister');
    Route::get('/deleteregister/{id}','RegistrasibalitaController@destroy')->name('deleteregister');


    
});


Route::group(['middleware' => ['auth', 'CekLevel:admin,user']], function () {
    Route::get('/beranda', 'BerandaController@index');
    Route::get('/penimbangan', 'PenimbanganController@penimbangan')->name('penimbangan');
});
