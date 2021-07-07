<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login-mobile', 'API\AuthController@login');
Route::get('/user-mobile', 'API\AuthController@user');

Route::get('/ibu-hamil', 'API\IbuHamilController@ibuHamil');
Route::get('/ibu-hamil/{id}', 'API\IbuHamilController@detailIbuHamil');

Route::get('/balita', 'API\BalitaController@balita');
Route::get('/balita/{id}', 'API\BalitaController@detailBalita');
