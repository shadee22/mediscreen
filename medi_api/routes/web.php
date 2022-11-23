<?php

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

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PersonalDetailsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\JsonResponse;


Route::get('/', function(){
    return view('app');
});

Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
Route::post('/save_all_details' , [PersonalDetailsController::class , 'save_all_user_details']);

