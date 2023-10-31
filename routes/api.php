<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// Admin
use App\Http\Controllers\API\WorkFieldsController;
use App\Http\Controllers\API\SubWorkFieldsController;
use App\Http\Controllers\API\DepartmentController;
use App\Http\Controllers\API\OfficeController;
use App\Http\Controllers\API\LicenceController;
// APP
use App\Http\Controllers\APPAPI\AppWorkFieldsController;
use App\Http\Controllers\APPAPI\AppSubWorkFieldsController;
use App\Http\Controllers\APPAPI\AppDepartmentsController;
use App\Http\Controllers\APPAPI\AppOfficesController;
use App\Http\Controllers\APPAPI\AppLicencesController;
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

Route::middleware('auth:sanctum')->get('/admin', function (Request $request) {
    // Route::apiResource('WorkFields', WorkFieldsController::class);
    return $request->user();
});
// Admin
Route::apiResource('WorkFields', WorkFieldsController::class);
Route::apiResource('SubWorkFields', SubWorkFieldsController::class);
Route::apiResource('Departments', DepartmentController::class);
Route::apiResource('Offices', OfficeController::class);
Route::apiResource('Licences', LicenceController::class);


Route::get('work-fields/{work_field_id}/sub-work-fields', [WorkFieldsController::class, 'getSubWorkFields']);
Route::get('work-fields/{work_field_id}/offices', [WorkFieldsController::class, 'getWorkFieldOffices']);
Route::get('sub-work-fields/{sub_work_field_id}/work-fields', [SubWorkFieldsController::class, 'getWorkFieldName']);
Route::get('offices/{office_id}/licences', [OfficeController::class ,'getOfficeLicences']);
Route::get('offices/{office_id}/work-fields',  [OfficeController::class ,'getOfficeWorkFields']);
Route::get('licences/{licence_id}/offices', [LicenceController::class ,'getLicenseOffices']);
Route::get('license/{license_id}/department', [LicenceController::class ,'getLicenseDepartment']);
Route::get('department/{department_id}/licences', [DepartmentController::class ,'getDepartmentLicences']);



// app api
Route::apiResource('AppWorkFields', AppWorkFieldsController::class);
Route::apiResource('AppSubWorkFields', AppSubWorkFieldsController::class);
Route::apiResource('AppDepartments', AppDepartmentsController::class);
Route::apiResource('AppOffices', AppOfficesController::class);
Route::apiResource('AppLicences', AppLicencesController::class);

Route::get('app-work-fields/{work_field_id}/sub-work-fields', [AppWorkFieldsController::class, 'getSubWorkFields']);
Route::get('app-work-fields/{work_field_id}/offices', [AppWorkFieldsController::class, 'getWorkFieldOffices']);
Route::get('app-sub-work-fields/{sub_work_field_id}/work-fields', [AppSubWorkFieldsController::class, 'getWorkFieldName']);
Route::get('app-offices/{office_id}/licences', [AppOfficesController::class ,'getOfficeLicences']);
Route::get('app-offices/{office_id}/work-fields',  [AppOfficesController::class ,'getOfficeWorkFields']);
Route::get('app-licences/{licence_id}/offices', [AppLicencesController::class ,'getLicenseOffices']);
Route::get('app-license/{license_id}/department', [AppLicencesController::class ,'getLicenseDepartment']);
Route::get('app-department/{department_id}/licences', [AppDepartmentsController::class ,'getDepartmentLicences']);
