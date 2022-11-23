<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LaboDetailsController;
use App\Http\Controllers\MedicalDetailsController;
use App\Http\Controllers\MedicalInputsController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\PersonalDetailsController;
use App\Http\Controllers\PersonalInputsController;
use App\Http\Controllers\ProductController;
use App\Models\PersonalDetail;
use Faker\Provider\ar_EG\Person;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use PHPUnit\Util\Json;
use SebastianBergmann\Environment\Console;

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

Route::get('/test', [ProductController::class, 'show']);
Route::post('/test/delete', [ProductController::class, 'delete']);
Route::post('/test', [ProductController::class, 'posting']);
Route::put('/test', [ProductController::class, 'edit']);

Route::get('/medi/all_personal_inputs' , [PersonalInputsController::class , 'index']);
Route::post('/medi/add_personal_input' , [PersonalInputsController::class , 'create']);
Route::get('/medi/all_medical_inputs' , [MedicalInputsController::class , 'index']);
Route::post('/medi/add_medical_input' , [MedicalInputsController::class , 'create']);

Route::post('/medi/save_personal_detail' , [PersonalDetailsController::class , 'create']);
Route::post('/medi/save_medical_detail' , [MedicalDetailsController::class , 'create']);
Route::post('/medi/save_labo_detail' , [LaboDetailsController::class , 'create']);

// Route::middleware('auth:sanctum')->post('/save_all_details' , [PersonalDetailsController::class , 'save_all_user_details']);


Route::get('/medi/testing' , [PersonalDetailsController::class , 'testing']);
Route::get('/medi/testing' , [PersonalDetailsController::class , 'testing']);
Route::get('/get_all_patients_details', [PersonalDetailsController::class,'get_all_patients']);
Route::post('/delete_selected_patient', [PersonalDetailsController::class,'delete_selected_patient']);
Route::post('/get_edit_selected_patient_data', [PersonalDetailsController::class,'edit_selected_patient']);
Route::post('/update_data', [PersonalDetailsController::class,'update_data']);


Route::get('/user', [AuthController::class, 'me'])->middleware('auth:sanctum');


// Route::post('/medi/add_medical_input' , [MedicalInputsController::class , 'create']);
// Route::post('/medi/add_medical_input' , [MedicalInputsController::class , 'create']);
// Route::post('/medi/add_medical_input' , [MedicalInputsController::class , 'create']);

// Route::get('/medi/add_input' , [PersonalDetailsController::class , 'index']);
// Route::get('/medi/add_input' , [PersonalDetailsController::class , 'index']);
// Route::get('/medi/add_input' , [PersonalDetailsController::class , 'index']);


Route::middleware('api')->group(function () {
    Route::resource('product/', ProductController::class );

});

