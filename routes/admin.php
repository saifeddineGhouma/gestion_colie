<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\Offer\OfferController;
use App\Http\Controllers\Admin\Transitaire\CompanyController;
use App\Http\Controllers\Admin\Transitaire\TransitaireController;
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

/*------------------------------------------------------------------
--------------------------------------------------------------------
      Dashboard  Admin
--------------------------------------------------------------------
-------------------------------------------------------------------*/
Route::group([
    'middleware'=>'admin'
], function () {
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

           /*----------------------------
           ------------------------------
                    transiataire route
           ----------------------------
           ------------------------------*/
            Route::group(['prefix'=>'transiataire','as'=>'transiataire.'], function(){
            Route::get('company/index', [CompanyController::class, 'index'])->name('company.index');
            Route::get('company/create', [CompanyController::class, 'create'])->name('company.create');
            Route::post('company/store', [CompanyController::class, 'store'])->name('company.store');
            Route::get('agent/index', [TransitaireController::class, 'index'])->name('agent.index');
            Route::get('agent/create', [TransitaireController::class, 'create'])->name('agent.create');
            Route::post('agent/store', [TransitaireController::class, 'store'])->name('agent.store');
            });

            /*----------------------------
           ------------------------------
                    offers route
           ----------------------------
           ------------------------------*/
    Route::group(['prefix' => 'offers', 'as' => 'offer.'], function () {
        Route::get('index', [OfferController::class, 'index'])->name('index');
        Route::get('create', [OfferController::class, 'create'])->name('create');
        Route::get('edit/{offer}', [OfferController::class, 'edit'])->name('edit');
        Route::post('store', [OfferController::class, 'store'])->name('store');
        Route::post('update/{offer}', [OfferController::class, 'update'])->name('update');

     }
    );


});
