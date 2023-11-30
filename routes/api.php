<?php

use Illuminate\Http\Request;
use App\Models\User;
// Admin
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\OfficeController;
use App\Http\Controllers\API\CoursesController;
use App\Http\Controllers\API\FundersController;
use App\Http\Controllers\API\LicenceController;
use App\Http\Controllers\API\SettingsController;
use App\Http\Controllers\API\ContactUsController;
use App\Http\Controllers\API\DepartmentController;
use App\Http\Controllers\API\WorkFieldsController;
use App\Http\Controllers\API\ConsultantsController;
use App\Http\Controllers\API\BeneficiariesController;
use App\Http\Controllers\API\SubWorkFieldsController;



// 
use App\Http\Controllers\AUTH\AuthController;
use App\Http\Controllers\AUTH\ForgotPasswordController;

// APP
use App\Http\Controllers\APPAPI\AppCoursesController;
use App\Http\Controllers\APPAPI\AppFundersController;
use App\Http\Controllers\APPAPI\AppOfficesController;
use App\Http\Controllers\APPAPI\AppLicencesController;
use App\Http\Controllers\APPAPI\AppSettingsController;
use App\Http\Controllers\API\FunderResourcesController;
use App\Http\Controllers\APPAPI\AppContactUsController;
use App\Http\Controllers\APPAPI\AppWorkFieldsController;
use App\Http\Controllers\APPAPI\AppConsultantsController;
use App\Http\Controllers\APPAPI\AppDepartmentsController;
use App\Http\Controllers\APPAPI\AppBeneficiariesController;
use App\Http\Controllers\APPAPI\AppSubWorkFieldsController;
use App\Http\Controllers\APPAPI\AppFunderResourceController;
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

Route::middleware('auth:sanctum')->group(function(){
    // return $request->user();
    // Route::apiResource('WorkFields', WorkFieldsController::class);
});
    
   
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return Auth::user();
});

Route::get('users',function(){
    return User::all();
});

Route::post('/login', [AuthController::class , 'login']);
Route::post('/logout', [AuthController::class , 'logout'])->middleware('auth:api');
Route::post('/forgotpassword', [ForgotPasswordController::class , 'forgotPassword']);
Route::post('/resetpassword', [ForgotPasswordController::class , 'resetPassword']);

// Route::group(['middleware' => ['auth:api']], function() { 
    // // Admin
    //     Route::apiResource('WorkFields', WorkFieldsController::class);//
    //     Route::apiResource('SubWorkFields', SubWorkFieldsController::class);//
    //     Route::apiResource('Departments', DepartmentController::class);//
    //     Route::apiResource('Offices', OfficeController::class);//
    //     Route::apiResource('Licences', LicenceController::class);//
    //     Route::apiResource('Courses', CoursesController::class);
    //     Route::apiResource('Consultants', ConsultantsController::class);
    //     Route::apiResource('Beneficiaries', BeneficiariesController::class);
    //     Route::apiResource('ContactUs', ContactUsController::class);
    //     Route::apiResource('Settings', SettingsController::class);
    //     Route::apiResource('FunderResources', FunderResourcesController::class);
    //     Route::apiResource('Funders', FundersController::class);


    //     Route::get('work-fields/{work_field_id}/sub-work-fields', [WorkFieldsController::class, 'getSubWorkFields']);
    //     Route::get('work-fields/{work_field_id}/offices', [WorkFieldsController::class, 'getWorkFieldOffices']);
    //     Route::get('sub-work-fields/{sub_work_field_id}/work-fields', [SubWorkFieldsController::class, 'getWorkFieldName']);
    //     Route::get('offices/{office_id}/licences', [OfficeController::class ,'getOfficeLicences']);
    //     Route::get('offices/{office_id}/work-fields',  [OfficeController::class ,'getOfficeWorkFields']);
    //     Route::get('licences/{licence_id}/offices', [LicenceController::class ,'getLicenseOffices']);
    //     Route::get('license/{license_id}/department', [LicenceController::class ,'getLicenseDepartment']);
    //     Route::get('department/{department_id}/licences', [DepartmentController::class ,'getDepartmentLicences']);
    //     Route::delete('delete-licence-offices/{id}', [LicenceController::class ,'deleteLicenceOffices']);
    //     Route::delete('delete-workfield-offices/{id}', [WorkFieldsController::class ,'deleteWorkFieldOffices']);
    //     Route::get('work-fields/{work_field_id}/beneficiaries', [WorkFieldsController::class ,'getWorkFieldBeneficiaries']);
    //     Route::get('funder-resource/{funder_resource_id}/funders', [FunderResourcesController::class ,'getFunders']);

    //     // change status api
    //     Route::post('CourseChangeStatus/{id}', [CoursesController::class, 'destroy']);
    //     Route::post('ConsultantChangeStatus/{id}', [ConsultantsController::class, 'destroy']);
    //     Route::post('DepartmentChangeStatus/{id}', [DepartmentController::class, 'destroy']);
    //     Route::post('LicenceChangeStatus/{id}', [LicenceController::class, 'destroy']);
    //     Route::post('OfficeChangeStatus/{id}', [OfficeController::class, 'destroy']);
    //     Route::post('SubWorkFieldChangeStatus/{id}', [SubWorkFieldsController::class, 'destroy']);
    //     Route::post('WorkFieldChangeStatus/{id}', [WorkFieldsController::class, 'destroy']);
// });


// Admin
Route::apiResource('WorkFields', WorkFieldsController::class);//
Route::apiResource('SubWorkFields', SubWorkFieldsController::class);//
Route::apiResource('Departments', DepartmentController::class);//
Route::apiResource('Offices', OfficeController::class);//
Route::apiResource('Licences', LicenceController::class);//
Route::apiResource('Courses', CoursesController::class);
Route::apiResource('Consultants', ConsultantsController::class);
Route::apiResource('Beneficiaries', BeneficiariesController::class);
Route::apiResource('ContactUs', ContactUsController::class);
Route::apiResource('Settings', SettingsController::class);
Route::apiResource('FunderResources', FunderResourcesController::class);
Route::apiResource('Funders', FundersController::class);


Route::get('work-fields/{work_field_id}/sub-work-fields', [WorkFieldsController::class, 'getSubWorkFields']);
Route::get('work-fields/{work_field_id}/offices', [WorkFieldsController::class, 'getWorkFieldOffices']);
Route::get('sub-work-fields/{sub_work_field_id}/work-fields', [SubWorkFieldsController::class, 'getWorkFieldName']);
Route::get('offices/{office_id}/licences', [OfficeController::class ,'getOfficeLicences']);
Route::get('offices/{office_id}/work-fields',  [OfficeController::class ,'getOfficeWorkFields']);
Route::get('licences/{licence_id}/offices', [LicenceController::class ,'getLicenseOffices']);
Route::get('license/{license_id}/department', [LicenceController::class ,'getLicenseDepartment']);
Route::get('department/{department_id}/licences', [DepartmentController::class ,'getDepartmentLicences']);
Route::delete('delete-licence-offices/{id}', [LicenceController::class ,'deleteLicenceOffices']);
Route::delete('delete-workfield-offices/{id}', [WorkFieldsController::class ,'deleteWorkFieldOffices']);
Route::get('work-fields/{work_field_id}/beneficiaries', [WorkFieldsController::class ,'getWorkFieldBeneficiaries']);
Route::get('funder-resource/{funder_resource_id}/funders', [FunderResourcesController::class ,'getFunders']);
Route::get('office/{office_id}/depatrtments', [OfficeController::class ,'getOfficedepartments']);

// change status api
Route::post('CourseChangeStatus/{id}', [CoursesController::class, 'destroy']);
Route::post('ConsultantChangeStatus/{id}', [ConsultantsController::class, 'destroy']);
Route::post('DepartmentChangeStatus/{id}', [DepartmentController::class, 'destroy']);
Route::post('LicenceChangeStatus/{id}', [LicenceController::class, 'destroy']);
Route::post('OfficeChangeStatus/{id}', [OfficeController::class, 'destroy']);
Route::post('SubWorkFieldChangeStatus/{id}', [SubWorkFieldsController::class, 'destroy']);
Route::post('WorkFieldChangeStatus/{id}', [WorkFieldsController::class, 'destroy']);



// app api
Route::apiResource('AppWorkFields', AppWorkFieldsController::class);
Route::apiResource('AppSubWorkFields', AppSubWorkFieldsController::class);
Route::apiResource('AppDepartments', AppDepartmentsController::class);
Route::apiResource('AppOffices', AppOfficesController::class);
Route::apiResource('AppLicences', AppLicencesController::class);
Route::apiResource('AppCourses', AppCoursesController::class);
Route::apiResource('AppConsultants', AppConsultantsController::class);
Route::apiResource('AppBeneficiaries', AppBeneficiariesController::class);
Route::apiResource('AppContactUs', AppContactUsController::class);
Route::apiResource('AppSettings', AppSettingsController::class);
Route::apiResource('AppFunderResources', AppFunderResourceController::class);
Route::apiResource('AppFunders', AppFundersController::class);


Route::get('app-work-fields/{work_field_id}/sub-work-fields', [AppWorkFieldsController::class, 'getSubWorkFields']);
Route::get('app-work-fields/{work_field_id}/offices', [AppWorkFieldsController::class, 'getWorkFieldOffices']);
Route::get('app-sub-work-fields/{sub_work_field_id}/work-fields', [AppSubWorkFieldsController::class, 'getWorkFieldName']);
Route::get('app-offices/{office_id}/licences', [AppOfficesController::class ,'getOfficeLicences']);
Route::get('app-offices/{office_id}/work-fields',  [AppOfficesController::class ,'getOfficeWorkFields']);
Route::get('app-licences/{licence_id}/offices', [AppLicencesController::class ,'getLicenseOffices']);
Route::get('app-license/{license_id}/department', [AppLicencesController::class ,'getLicenseDepartment']);
Route::get('app-department/{department_id}/licences', [AppDepartmentsController::class ,'getDepartmentLicences']);
Route::get('app-funder-resource/{funder_resource_id}/funders', [AppFunderResourceController::class ,'getFunders']);
Route::get('app-office/{office_id}/depatrtments', [AppOfficesController::class ,'getOfficedepartments']);

//check created new records AppApi
Route::get('check-new-WorkField', [AppWorkFieldsController::class, 'checkAdded']);
Route::get('check-new-SubWorkField', [AppSubWorkFieldsController::class, 'checkAdded']);
Route::get('check-new-Department', [AppDepartmentsController::class, 'checkAdded']);
Route::get('check-new-Office', [AppOfficesController::class, 'checkAdded']);
Route::get('check-new-Licence', [AppLicencesController::class, 'checkAdded']);
Route::get('check-new-Course', [AppCoursesController::class, 'checkAdded']);
Route::get('check-new-Consultant', [AppConsultantsController::class, 'checkAdded']);
Route::get('check-new-FunderResource', [AppFunderResourceController::class, 'checkAdded']);
Route::get('check-new-Funder', [AppFundersController::class, 'checkAdded']);


//check update records AppApi
Route::get('check-update-WorkField', [AppWorkFieldsController::class, 'checkUpdated']);
Route::get('check-update-SubWorkField', [AppSubWorkFieldsController::class, 'checkUpdated']);
Route::get('check-update-Department', [AppDepartmentsController::class, 'checkUpdated']);
Route::get('check-update-Office', [AppOfficesController::class, 'checkUpdated']);
Route::get('check-update-Licence', [AppLicencesController::class, 'checkUpdated']);
Route::get('check-update-Course', [AppCoursesController::class, 'checkUpdated']);
Route::get('check-update-Consultant', [AppConsultantsController::class, 'checkUpdated']);
Route::get('check-update-FunderResource', [AppFunderResourceController::class, 'checkUpdated']);
Route::get('check-update-Funder', [AppFundersController::class, 'checkUpdated']);
Route::get('check-update-Setting', [AppSettingsController::class, 'checkUpdated']);