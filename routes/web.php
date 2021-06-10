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

    Route::get('/registeribuhamil', 'RegisterIbuHamilController@registerhamil')->name('registerhamil');
    Route::get('/addregisteribuhamil', 'RegisterIbuHamilController@create')->name('addregisterhamil');
    Route::get('/detailibuhamil/{id}', 'RegisterIbuHamilController@show')->name('detailibuhamil');
    Route::post('/simpan-registeribuhamil', 'RegisterIbuHamilController@store')->name('simpan-registeribuhamil');
    Route::get('/deleteregisteribuhamil/{id}', 'RegisterIbuHamilController@destroy')->name('deleteregisteribuhamil');
    Route::post('/updateregisterbumil/{id}', 'RegisterIbuHamilController@update')->name('updateregisterbumil');
    Route::get('/editregisterbumil/{id}','RegisterIbuHamilController@edit')->name('editregisterbumil');
    
    Route::get('/registerlansia', 'RegisterLansiaController@registerlansia')->name('registerlansia');
    Route::get('/addregisterlansia','RegisterLansiaController@create')->name('addregisterlansia');
    Route::get('/detailregisterlansia/{id}', 'RegisterLansiaController@show')->name('detailregisterlansia');
    Route::post('/simpan-registerlansia', 'RegisterLansiaController@store')->name('simpan-lansia');
    Route::get('/delete-registerlansia/{id}', 'RegisterLansiaController@destroy')->name('hapus-lansia');
    Route::post('/updateregisterlansia/{id}', 'RegisterLansiaController@update')->name('update-lansia');
    Route::get('/editregisterlansia/{id}', 'RegisterLansiaController@edit')->name('edit-lansia');



    
});


Route::group(['middleware' => ['auth', 'CekLevel:admin,user']], function () {
    Route::get('/beranda', 'BerandaController@index');
    Route::get('/penimbangan', 'PenimbanganController@penimbangan')->name('penimbangan');
});
