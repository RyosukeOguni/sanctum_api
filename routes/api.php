<?php

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
/*
手順書になかった設定
https://wonwon-eater.com/laravel-sanctum-vue/
*/
// 'auth:api'を'auth:sanctum'に修正
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
  return $request->user();
});

Route::prefix('auth')->group(function () {
  Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
  Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']);
});
