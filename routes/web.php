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
    
    //User
    Route::prefix('user')->group(function ()
    {
        Route::get('/', 'UserController@index')->name('user');
    });
    
    //Coworker
    Route::prefix('coworker')->group(function ()
    {
        Route::get('/', 'CoworkerController@index')->name('coworker');
        Route::get('/create', 'CoworkerController@create')->name('coworker.create');
        Route::post('/store', 'CoworkerController@store')->name('coworker.store');
        Route::get('/edit/{id}', 'CoworkerController@create')->name('coworker.edit');
        Route::post('/update/{id}', 'CoworkerController@update')->name('coworker.update');
        Route::delete('/delete/{id}', 'CoworkerController@delete')->name('coworker.delete');
    });
    
    //Venue
    Route::prefix('venue')->group(function ()
    {
        Route::get('/', 'VenueController@index')->name('venue');
    });
    
    //Facility
    Route::prefix('facility')->group(function ()
    {
        Route::get('/', 'FacilityController@index')->name('facility');
    });
    
    //Procedure
    Route::prefix('procedure')->group(function ()
    {
        Route::get('/', 'ProcedureController@index')->name('procedure');
    });
    
    //Master
    Route::prefix('master')->group(function ()
    {
        Route::get('/', 'MasterController@index')->name('master');
    });
});