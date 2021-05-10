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



Route::get('/login',function () {
    return view('Pengguna.login');
})->name('login');

Route::get('/login', function () {
    if (Auth::user()) {
        return redirect('/beranda');
    }
    return view('Pengguna.login');
});


Route::post('/postlogin','LoginController@postlogin')->name('postlogin');
Route::get('/logout','LoginController@logout')->name('logout');

Route::group(['middleware' => ['auth', 'CekLevel:admin']], function (){
    Route::get('/beranda','BerandaController@index');
    Route::get('/halaman-satu','BerandaController@halamansatu')->name('halaman-satu');
    Route::get('/halaman-dua','BerandaController@halamandua')->name('halaman-dua');
});


Route::group(['middleware' => ['auth', 'CekLevel:admin,user']], function (){
    Route::get('/beranda','BerandaController@index');
    Route::get('/halaman-dua','BerandaController@halamandua')->name('halaman-dua');
   
});


