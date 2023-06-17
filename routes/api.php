<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dummyTest;
use App\Http\Controllers\LaboratoryTestController;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Protected Routes
// Route::middleware('auth')->group(function () {
//     Route::get('/laboratory-tests', [LaboratoryTestController::class, 'index']);
//     Route::post('/form-submission', [LaboratoryTestController::class, 'store']);
// });

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['middleware' => 'auth:sanctum'], function(){
    //All secure URL's
    Route::get('laboratory-tests', [LaboratoryTestController::class, "index"]);
    Route::post('save-laboratory-tests', [LaboratoryTestController::class, "store"]);
});

Route::get('data', [dummyTest::class, "getDummyData"]);
Route::post("login",[UserController::class,'index']);
