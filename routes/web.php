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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'frontendCOntroller@index')->name('frontend');

Route::get('/pendaftaransiswa', 'datasiswaController@create')->name('datasiswa');
Route::post('/datasiswaStore', 'datasiswaController@store')->name('datasiswa.store');

Route::get('/uploadberkas', 'databerkasController@create')->name('databerkas.create');
Route::post('/uploadstore', 'databerkasController@store')->name('databerkas.store');

Route::prefix('admin')->group(function () {

    Route::get('/dashboard', 'dashboardController@index')->name('dashboard.index');

    Route::prefix('datasiswa')->group(function () {
        Route::get('/', 'datasiswaController@index')->name('datasiswa.index');
        Route::get('cari', 'datasiswaController@cari')->name('datasiswa.cari');
        // Route::get('/create', 'datasiswaController@create')->name('datasiswa.create');
        // Route::post('/', 'datasiswaController@store')->name('datasiswa.store');
        Route::get('/edit/{id}', 'datasiswaController@edit')->name('datasiswa.edit');
        Route::put('/{id}', 'datasiswaController@update')->name('datasiswa.update');
        Route::put('/delete', 'datasiswaController@delete')->name('datasiswa.delete');
        Route::delete('/{id}', 'datasiswaController@destroy')->name('datasiswa.destroy');
        Route::get('/show/{id}', 'datasiswaController@show')->name('datasiswa.show');

        Route::get('/cetak_pdf', 'datasiswaController@cetak_pdf')->name('datasiswa.cetak');
        Route::get('/export_excel', 'datasiswaController@export_excel')->name('export_excel');
    });

    Route::prefix('databerkas')->group(function () {
        Route::get('/', 'databerkasController@index')->name('databerkas.index');
        // Route::get('/create', 'databerkasController@create')->name('databerkas.create');
        // Route::post('/', 'databerkasController@store')->name('databerkas.store');
        Route::get('/edit/{id}', 'databerkasController@edit')->name('databerkas.edit');
        Route::put('/{id}', 'databerkasController@update')->name('databerkas.update');
        Route::put('/delete', 'databerkasController@delete')->name('databerkas.delete');
        Route::delete('/{id}', 'databerkasController@destroy')->name('databerkas.destroy');
        Route::get('/show/{id}', 'databerkasController@show')->name('databerkas.show');
    });

    Route::prefix('manageAccount')->group(function () {
        Route::get('/', 'manageAccountController@index')->name('manageAccount.index');
        Route::get('/add_create', 'manageAccountController@add_create')->name('manageAccount.add_create');
        // Route::post('/', 'manageAccountController@create')->name('manageAccount.create');
        Route::post('/', 'manageAccountController@store')->name('manageAccount.store');
        // Route::get('/edit/{id}', 'manageAccountController@edit')->name('manageAccount.edit');
        // Route::put('/{id}', 'manageAccountController@update')->name('manageAccount.update');
        // Route::put('/delete', 'manageAccountController@delete')->name('manageAccount.delete');
        Route::delete('/{id}', 'manageAccountController@destroy')->name('manageAccount.destroy');
        // Route::get('/show/{id}', 'manageAccountController@show')->name('manageAccount.show');
    });

    Route::prefix('profile')->group(function () {
        Route::get('/', 'profileController@index')->name('profile.index');
        Route::put('/{id}', 'profileController@update')->name('profile.update');
    });
});
