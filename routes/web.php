<?php

use App\Http\Controllers\CompanyExcellenceController;
use App\Http\Controllers\CompanyProfileController;
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

Route::resource('company_profiles', CompanyProfileController::class);
Route::resource('company_excellences', CompanyExcellenceController::class);
