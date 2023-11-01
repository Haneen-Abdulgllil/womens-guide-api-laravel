<?php

use Illuminate\Support\Facades\Route;
// Admin
use App\Http\Controllers\API\WorkFieldsController;
use App\Http\Controllers\API\SubWorkFieldsController;
use App\Http\Controllers\API\DepartmentController;
use App\Http\Controllers\API\OfficeController;
use App\Http\Controllers\API\LicenceController;
use App\Http\Controllers\API\CoursesController;
use App\Http\Controllers\API\ConsultantsController;
use App\Http\Controllers\API\BeneficiariesController;

// APP
use App\Http\Controllers\APPAPI\AppWorkFieldsController;
use App\Http\Controllers\APPAPI\AppSubWorkFieldsController;
use App\Http\Controllers\APPAPI\AppDepartmentsController;
use App\Http\Controllers\APPAPI\AppOfficesController;
use App\Http\Controllers\APPAPI\AppLicencesController;
use App\Http\Controllers\APPAPI\AppCoursesController;
use App\Http\Controllers\APPAPI\AppConsultantsController;
use App\Http\Controllers\APPAPI\AppBeneficiariesController;


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
    return view('welcome');
});

// Admin
Route::resource('WorkFields', AppWorkFieldsController::class);
Route::resource('SubWorkFields', SubWorkFieldsController::class);
Route::resource('Departments', DepartmentController::class);
Route::resource('Offices', OfficeController::class);
Route::resource('Licences', LicenceController::class);
Route::resource('Courses', CoursesController::class);
Route::resource('Consultants', ConsultantsController::class);
Route::resource('Beneficiaries', BeneficiariesController::class);

// App 

Route::resource('AppWorkFields', WorkFieldsController::class);
Route::resource('AppSubWorkFields', AppSubWorkFieldsController::class);
Route::resource('AppDepartments', AppDepartmentsController::class);
Route::resource('AppOffices', AppOfficesController::class);
Route::resource('AppLicences', AppLicencesController::class);
Route::resource('AppCourses', AppCoursesController::class);
Route::resource('AppConsultants', AppConsultantsController::class);
Route::resource('AppBeneficiaries', AppBeneficiariesController::class);