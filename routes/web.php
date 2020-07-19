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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', 'PenjualanController@index')
//     ->name('penjualan');

Route::prefix('admin')
    ->namespace('Admin')
    // ->middleware(['auth', 'admin'])
    ->group(function () {

        Route::get('/penjualan', 'PenjualanController@index')
            ->name('penjualan');
    });
