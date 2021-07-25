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

    Route::prefix('form')->group(function () {
        Route::get('/', 'formController@index')->name('form.index');
        Route::get('/create', 'formController@create')->name('form.create');
        Route::post('/', 'formController@store')->name('form.store');
        Route::get('/edit/{id}', 'formController@edit')->name('form.edit');
        Route::put('/{id}', 'formController@update')->name('form.update');
        Route::put('/delete', 'formController@delete')->name('form.delete');
        Route::delete('/{id}', 'formController@destroy')->name('form.destroy');
        Route::get('/show/{id}', 'formController@show')->name('form.show');
    });

    Route::prefix('profile')->group(function () {
        Route::get('/', 'profileController@index')->name('profile.index');
        Route::put('/{id}', 'profileController@update')->name('profile.update');
    });

    
});