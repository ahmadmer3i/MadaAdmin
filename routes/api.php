<?php

use App\Http\Controllers\API\FormApplicantController;
use App\Http\Controllers\API\LogoutController;
use App\Http\Controllers\API\UserLoginController;
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
Route::post('/login', [ UserLoginController::class, 'loginUser' ]);
Route::middleware('auth:sanctum')->get('/user', static function (Request $request) {
    return $request->user();
});
Route::middleware('auth:sanctum')->group(static function () {
    Route::get('/applicants', [ FormApplicantController::class, 'index' ]);
    Route::post('/logout', [ LogoutController::class, 'logout' ]);
});

