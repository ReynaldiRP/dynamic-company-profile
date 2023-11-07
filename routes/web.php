<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyFaqController;
use App\Http\Controllers\CompanyTeamController;
use App\Http\Controllers\CompanyHistoryController;
use App\Http\Controllers\CompanyProfileController;
use App\Http\Controllers\CompanyProjectController;
use App\Http\Controllers\CompanyExcellenceController;

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

Route::resource('company_profiles', CompanyProfileController::class);
Route::resource('company_excellences', CompanyExcellenceController::class);
Route::resource('company_faqs', CompanyFaqController::class);
Route::resource('company_histories', CompanyHistoryController::class);
Route::resource('company_projects', CompanyProjectController::class);
Route::resource('company_teams', CompanyTeamController::class);


Route::get('/', [CompanyProfileController::class, 'index'])->name('Profil Perusahaan');
Route::get('CompanyProfile', [CompanyProfileController::class, 'index'])->name('Profil Perusahaan');
Route::get('CompanyExcellence', [CompanyExcellenceController::class, 'index'])->name('Profil Perusahaan');
Route::get('CompanyFaq', [CompanyFaqController::class, 'index'])->name('Profil Perusahaan');
Route::get('CompanyHistory', [CompanyHistoryController::class, 'index'])->name('Profil Perusahaan');
Route::get('CompanyProject', [CompanyProjectController::class, 'index'])->name('Profil Perusahaan');
Route::get('CompanyTeam', [CompanyTeamController::class, 'index'])->name('Profil Perusahaan');
