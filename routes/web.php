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


Route::get('/Ensaj', 'App\Http\Controllers\SiteController@index');

Route::get('/Filieres', 'App\Http\Controllers\SiteController@afficFilieres');
Route::post('/Filieres', 'App\Http\Controllers\SiteController@storeFilieres');

Route::get('/Etudiants', 'App\Http\Controllers\SiteController@show');
Route::post('/Etudiants', 'App\Http\Controllers\SiteController@store');
Route::get('/search','App\Http\Controllers\SiteController@search');
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
 