<?php

use App\Http\Controllers\Transitaire\DashboardController;
use App\Http\Controllers\Transitaire\LoginController;
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
/*------------------------------------------------------------------
--------------------------------------------------------------------
      Auth  Admin
--------------------------------------------------------------------
-------------------------------------------------------------------*/
Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('authenticate');

Route::group([
    'middleware'=>'transitaire'
    ], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/search', [DashboardController::class, 'searchOffer'])->name('search.offer');
   // Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});
