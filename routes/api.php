<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccessTokenController;
use App\Http\Controllers\MovieController;

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

Route::post('login', [AccessTokenController::class, 'login']);
// Route::post('login', 'Laravel\Passport\Http\Controllers\AccessTokenController@issueToken');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Routes that require authentication (POST, PUT, DELETE) will go through the auth:api middleware
Route::middleware('auth:api')->group(function () {
    Route::apiResource('movies', MovieController::class)->except(['index', 'show']);
});

// Allow unauthenticated access to GET routes (index and show)
Route::get('movies', [MovieController::class, 'index']);
Route::get('movies/{movie}', [MovieController::class, 'show']);
Route::post('comment/{movie}', [MovieController::class, 'comment']);