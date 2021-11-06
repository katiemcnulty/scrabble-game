<?php

use App\Http\Controllers\MemberController;
use App\Http\Controllers\GameController;
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
    return view('app');
});

Route::get('/members', [MemberController::class, 'index']);

Route::prefix('/member')->group(function () 
    {
        Route::post('/store', [MemberController::class, 'store']);
        Route::put('{id}', [MemberController::class, 'update']);
        Route::delete('/{id}', [MemberController::class, 'destroy']);

    }
);

Route::get('/games', [GameController::class, 'index']);

Route::prefix('/game')->group(function () 
    {
        Route::post('/store', [GameController::class, 'store']);
        
    }
);
