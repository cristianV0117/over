<?php

use Illuminate\Support\Facades\Route;
use Src\Home\Infrastructure\Controllers\HomeController;
use Src\System\Infrastructure\Controllers\StatusController;
use Src\CategoryTask\Infrastructure\Controllers\{ShowController, IndexController};

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

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::get('/', function () {
    return redirect('api/v1');
});

Route::get('v1', [HomeController::class, '__invoke']);
Route::get('v1/status', [StatusController::class, '__invoke']);

Route::group(['prefix' => 'v1'], function () {
    // CATEGORIES TASKS //
    Route::get('categories-tasks', [IndexController::class, '__invoke']);
    Route::get('categories-tasks/{id}', [ShowController::class, '__invoke']);
});
