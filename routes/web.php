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
})->name('home');

Route::get('login', 'AuthController@login')->name('login');
Route::get('regist', 'AuthController@regist')->name('regist');
Route::post('store_login', 'AuthController@store_login');
Route::post('store_regist', 'AuthController@store_regist');
Route::post('logout', 'AuthController@logout')->name('logout');

//Route Prefix Dashboard
Route::prefix('dashboard')->middleware(['auth', 'dashboard'])->group(function () {
    //Dashboard
    Route::get('/', 'HomeController@dashboard')->name('dashboard');
    
    //Coworker
    Route::prefix('coworker')->group(function ()
    {
        Route::get('/', 'CoworkerController@index')->name('coworker');
    });
});