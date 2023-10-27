<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\WorkFieldsController;
use App\Http\Controllers\API\SubWorkFieldsController;
use App\Http\Controllers\API\DepartmentController;
use App\Http\Controllers\API\OfficeController;
use App\Http\Controllers\API\LicenceController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('WorkFields', WorkFieldsController::class);
Route::apiResource('SubWorkFields', SubWorkFieldsController::class);
Route::apiResource('Departments', DepartmentController::class);
Route::apiResource('Offices', OfficeController::class);
Route::apiResource('Licences', LicenceController::class);


Route::get('work-fields/{work_field_id}/sub-work-fields', [WorkFieldsController::class, 'getSubWorkFields']);
Route::get('sub-work-fields/{sub_work_field_id}/work-fields', [SubWorkFieldsController::class, 'getWorkFieldName']);
Route::get('licences/{licence_id}/offices', [LicenceController::class ,'getLicenseOffices']);
Route::get('offices/{office_id}/licences', [OfficeController::class ,'getOfficeLicences']);
Route::get('offices/{office_id}/work-fields',  [OfficeController::class ,'getOfficeWorkFields']);
Route::get('work-fields/{work_field_id}/offices', [WorkFieldsController::class, 'getWorkFieldOffices']);
Route::get('license/{license_id}/department', [LicenceController::class ,'getLicenseDepartment']);
Route::get('department/{department_id}/licences', [DepartmentController::class ,'getDepartmentLicences']);