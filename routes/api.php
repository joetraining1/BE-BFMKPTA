<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TypeController;
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

Route::prefix('auth')->group(function(){
    Route::controller(AuthController::class)->group(function () {
        Route::post('login', 'login');
        Route::post('register', 'register');
        Route::post('logout', 'logout');
        Route::post('refresh', 'refresh');
        Route::post('me', 'me');
        Route::put('user-update/{id}', 'update');
        Route::delete('user-delete/{id}', 'destroy');
        Route::get('user/{id}', 'show');
    });
    
    Route::controller(TypeController::class)->group(function () {
        Route::get('types', 'index');
        Route::get('type/{id}', 'show');
        Route::post('type', 'store');
        Route::put('type/{id}', 'update');
        Route::delete('type/{id}', 'destroy');
    });
});
