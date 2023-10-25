<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\WorkFieldsController;
use App\Http\Controllers\API\SubWorkFieldsController;
use App\Http\Controllers\API\DepartmentController;
use App\Http\Controllers\API\OfficeController;
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

Route::resource('WorkFields', WorkFieldsController::class);
Route::resource('SubWorkFields', SubWorkFieldsController::class);
Route::resource('Departments', DepartmentController::class);
Route::resource('Offices', OfficeController::class);
