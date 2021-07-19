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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'frontendCOntroller@index')->name('frontend');

Route::prefix('admin')->group(function () {

    Route::get('/dashboard', 'dashboardController@index')->name('dashboard.index');

    Route::prefix('profile')->group(function () {
        Route::get('/', 'profileController@index')->name('profile.index');
        Route::get('/create', 'profileController@create')->name('profile.create');
        Route::post('/', 'profileController@store')->name('profile.store');
        Route::get('/edit/{id}', 'profileController@edit')->name('profile.edit');
        Route::put('/{id}', 'profileController@update')->name('profile.update');
        Route::put('/delete', 'profileController@delete')->name('profile.delete');
        Route::delete('/{id}', 'profileController@destroy')->name('profile.destroy');
        Route::get('/show/{id}', 'profileController@show')->name('profile.show');
    });

    
});