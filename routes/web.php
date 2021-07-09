<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\KelolaMadingController;
use GuzzleHttp\Middleware;
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

Route::get('/masuk', function () {
    return view('pages.admin.masuk');
});



// Menuju halamana utama website
Route::get('/', 'HomeController@index')
    ->name('home');
Route::get('/mading/{id}', 'DetailMadingController@index');

// login as sender page
Route::get('auth/login', function () {
    return view('authv2.login');
})->name('login_view');

// auth handler
Route::prefix('auth')
    ->namespace('Auth')
    ->group(function() {

        Route::post('/login/request','AuthController@login')->name('login_request');
        Route::get('/logout', 'AuthController@logout')->name('logout_request')->middleware('auth');

});

Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth', 'admin'])
    ->group(function () {
        
        // Menuju halaman utama admin
        Route::get('/', 'DashboardController@index')
            ->name('dashboard');

        // Menuju halaman kelola kategori
        Route::resource('kelola-kategori', 'KelolaKategoriController');

        // Menuju halaman kelola mading
        Route::resource('kelola-mading', 'KelolaMadingController');

        Route::put('verifyMading/{id}','KelolaMadingController@verifyMading');
    });

    Route::prefix('user')
    ->namespace('User')
    ->middleware(['sender'])
    ->group(function () {

        Route::get('/mading/create', 'KelolaMadingSenderController@create')->name('upload_mading_view');
        Route::post('/mading/store', 'KelolaMadingSenderController@store')->name('upload_mading');

    });

Auth::routes(['verify' => true]);