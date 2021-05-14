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
    Route::get('/register', 'BerandaController@register')->name('register');
    Route::get('/penimbangan', 'PenimbanganController@penimbangan')->name('penimbangan');
    Route::get('/addpenimbangan', 'PenimbanganController@addpenimbangan')->name('addpenimbangan');
    Route::get('/dashboard', 'BerandaController@dashboard')->name('dashboard');
    Route::post('/simpan-penimbangan','PenimbanganController@store')->name('simpan-penimbangan');
    
});


Route::group(['middleware' => ['auth', 'CekLevel:admin,user']], function () {
    Route::get('/beranda', 'BerandaController@index');
    Route::get('/penimbangan', 'PenimbanganController@penimbangan')->name('penimbangan');
});
