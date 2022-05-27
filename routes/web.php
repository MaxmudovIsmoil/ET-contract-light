<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\TemplateController;


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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();


Route::middleware(['auth', 'isAdmin'])->group(function () {


    /******************** Template ***********************/
    Route::group(['prefix' => '/'], function() {
        Route::get('/template1', [TemplateController::class, 'template1'])->name('template1');
        Route::get('/template2', [TemplateController::class, 'template2'])->name('template2');
        Route::get('/template3', [TemplateController::class, 'template3'])->name('template3');
        Route::get('/template4', [TemplateController::class, 'template4'])->name('template4');
        Route::get('/template5', [TemplateController::class, 'template5'])->name('template5');

        Route::post('/template-store', [TemplateController::class, 'store'])->name('templates.store');
    });
    /******************** ./Template *********************/


    /******************** Contract ***********************/
    Route::group(['prefix' => '/'], function() {
        Route::resource('/contract', ContractController::class)->except(['create', 'store']);
        Route::get('/contract/get-contracts/', [ContractController::class, 'getContracts'])->name('contract.getContracts');
//        Route::get('/contract/one-contract/{id}', [ContractController::class, 'oneContract'])->name('contract.oneContract');

        Route::post('/contract/update_status/', [ContractController::class, 'update_status'])->name('contract.update_status');
    });
    /******************** ./Contract *********************/



    /******************** Users ***********************/
    Route::group(['prefix' => '/'], function() {
        Route::resource('/user', UsersController::class)->except(['create', 'edit', 'show']);
        Route::get('/user/one-user/{id}', [UsersController::class, 'oneUser'])->name('user.oneUser');
        Route::get('/user-profile-show/', [UsersController::class, 'user_profile_show'])->name('user.user_profile_show');
        Route::put('/user/user-profile-update/{id}', [UsersController::class, 'user_profile_update'])->name('user.user_profile_update');
    });
    /******************** Users ***********************/

});


//Route::get('create',[DocumentController::class, 'create'])->name('document.create');
//Route::post('store',[DocumentController::class, 'store']);



