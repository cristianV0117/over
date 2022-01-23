<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Src\Home\Controllers\HomeController;

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

Route::group(['prefix' => 'v1'], function () {

});
