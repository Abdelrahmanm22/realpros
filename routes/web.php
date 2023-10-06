<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\PopupController;
use App\Http\Controllers\PricingContactController;
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
    return view('index');
});
Route::get('/pricing-plans', function () {
    return view('index');
});


// Auth::routes(['register' => false]);
// Auth::routes();
Auth::routes(['login' => false, 'register' => false]);
Route::group(['prefix' => 'balo'], function () {
    // Route::get('/nigol', function () {
    //     return view('auth.login');
    // });
    // Route::get('nigol', 'Auth\LoginController@showLoginForm')->name('login');
    Route::get('nigol',[LoginController::class,'showLoginForm']);
    Route::post('signin', [LoginController::class,'login'])->name('login');

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/addAdmin', [App\Http\Controllers\HomeController::class, 'addAdmin'])->name('addAdmin');
    Route::post('/postAdmin', [App\Http\Controllers\HomeController::class, 'postAdmin'])->name('postAdmin');
    Route::get('/updatePass', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePass');
    Route::post('/postPass', [App\Http\Controllers\HomeController::class, 'postPass'])->name('postPass');


    //==============================Routes For Plan=====================
    Route::get('/editPlan/{id}', [PlanController::class, 'edit'])->name('Edit.Plan');
    Route::post('/update/{id}', [PlanController::class, 'update'])->name('update.Plan');
    //==============================Routes For Plan=====================


    //==============================Routes For Contact=====================
    Route::get('/contact', [ContactController::class, 'index'])->name('contact');
    //==============================Routes For Contact=====================


    //==============================Routes For PopUp Contact=====================
    Route::get('/popup', [PopupController::class, 'index'])->name('popup');
    //==============================Routes For PopUp Contact=====================

    //==============================Routes For PopUp Contact=====================
    Route::get('/pricingContact', [PricingContactController::class, 'index'])->name('pricing');
    //==============================Routes For PopUp Contact=====================

});
