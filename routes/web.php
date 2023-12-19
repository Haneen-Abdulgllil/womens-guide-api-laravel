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
use App\Http\Controllers\API\ContactUsController;
use App\Http\Controllers\API\SettingsController;
use App\Http\Controllers\API\FunderResourcesController;
use App\Http\Controllers\API\FundersController;

// APP
use App\Http\Controllers\APPAPI\AppWorkFieldsController;
use App\Http\Controllers\APPAPI\AppSubWorkFieldsController;
use App\Http\Controllers\APPAPI\AppDepartmentsController;
use App\Http\Controllers\APPAPI\AppOfficesController;
use App\Http\Controllers\APPAPI\AppLicencesController;
use App\Http\Controllers\APPAPI\AppCoursesController;
use App\Http\Controllers\APPAPI\AppConsultantsController;
use App\Http\Controllers\APPAPI\AppBeneficiariesController;
use App\Http\Controllers\APPAPI\AppContactUsController;
use App\Http\Controllers\APPAPI\AppSettingsController;
use App\Http\Controllers\APPAPI\AppFunderResourceController;

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

// Route::get('/home', function () {
//     return view('welcome');
// });


Route::get('/{any}', function () {
    return view('index');
   })->where('any', '^(?!api).*$');

