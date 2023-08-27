<?php

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
    return view('progress');
});
// Route::get('/pricing-plans', function () {
//     return view('index');
// });


// // Auth::routes(['register' => false]);
// Auth::routes();
// Route::group(['prefix' => 'balo'], function () {
//     Route::get('/nigol', function () {
//         return view('auth.login');
//     });


//     Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//     Route::get('/addAdmin', [App\Http\Controllers\HomeController::class, 'addAdmin'])->name('addAdmin');
//     Route::post('/postAdmin', [App\Http\Controllers\HomeController::class, 'postAdmin'])->name('postAdmin');



//     //==============================Routes For Plan=====================
//     Route::get('/editPlan/{id}', [PlanController::class, 'edit'])->name('Edit.Plan');
//     Route::post('/update/{id}', [PlanController::class, 'update'])->name('update.Plan');
//     //==============================Routes For Plan=====================


//     //==============================Routes For Contact=====================
//     Route::get('/contact', [ContactController::class, 'index'])->name('contact');
//     //==============================Routes For Contact=====================


//     //==============================Routes For PopUp Contact=====================
//     Route::get('/popup', [PopupController::class, 'index'])->name('popup');
//     //==============================Routes For PopUp Contact=====================

//     //==============================Routes For PopUp Contact=====================
//     Route::get('/pricingContact', [PricingContactController::class, 'index'])->name('pricing');
//     //==============================Routes For PopUp Contact=====================

// });
