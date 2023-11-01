<?php

use App\Http\Controllers\CompanyExcellenceController;
use App\Http\Controllers\CompanyFaqController;
use App\Http\Controllers\CompanyHistoryController;
use App\Http\Controllers\CompanyProfileController;
use App\Http\Controllers\CompanyProjectController;
use App\Http\Controllers\CompanyTeamController;
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
    return view('company_profiles.index');
});

Route::resource('company_profiles', CompanyProfileController::class);
Route::resource('company_excellences', CompanyExcellenceController::class);
Route::resource('company_faqs', CompanyFaqController::class);
Route::resource('company_histories', CompanyHistoryController::class);
Route::resource('company_projects', CompanyProjectController::class);
Route::resource('company_teams', CompanyTeamController::class);



Route::get('CompanyExcellence', [CompanyExcellenceController::class, 'index'])->name('Keunggulan Perusahaan');
