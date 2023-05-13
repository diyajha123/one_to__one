<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//  Route::resource('/course',CourseController::class)->except(['create']);
//  Route::resource('/course',CourseController::class)->only(['create']);
//  Route::resource('/course',CourseController::class);
 Route::resource('/phone',PhoneController::class);
Route::resource('/course',CourseController::class);
Route::resource('/data',IndexController::class);

