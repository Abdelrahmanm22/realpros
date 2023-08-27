<?php

use App\Http\Controllers\Api\ContactController;
use App\Http\Controllers\Api\PlanController;
use App\Http\Controllers\Api\PopupcontactController;
use App\Http\Controllers\Api\PricingContactController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/plans',[PlanController::class,'index']);
Route::post('/earth',[PlanController::class,'earth']);
Route::post('/mars',[PlanController::class,'mars']);
Route::post('/jupiter',[PlanController::class,'jupiter']);
Route::post('/contact',[ContactController::class,'store']);
Route::post('/pricingContact',[PricingContactController::class,'store']);
Route::post('/popup',[PopupcontactController::class,'store']);
