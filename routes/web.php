<?php

use App\Http\Controllers\Admin\DashboardController;
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

// Menuju halamana utama website
Route::get('/', function () {
    return view('welcome');
});


Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth', 'admin'])
    ->group(function () {

        // Menuju halaman utama admin
        Route::get('/', 'DashboardController@index')
            ->name('dashboard');

        // Menuju halaman kelola mading
        Route::resource('kelola-mading', 'KelolaMadingController');



        // Route::get('/kelola-kategori', 'KelolaKategoriController@index')
        //     ->name('kelola-kategori');
    });

Auth::routes(['verify => true']);
