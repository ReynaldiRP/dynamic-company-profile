<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\CompanyHistory;
use App\Models\CompanyProfile;
use App\Models\CompanyService;
use App\Models\CompanyExcellence;
use App\Models\CompanyProject;

class FrontEnd extends Controller
{
    public function index(): View
    {
        $companyProfile = CompanyProfile::all();
        $companyHistory = CompanyHistory::all();
        $companyExcellence = CompanyExcellence::all();
        $companyService = CompanyService::all();
        $companyProject = CompanyProject::all();

        return view('landing-page', compact(
            'companyProfile',
            'companyHistory',
            'companyExcellence',
            'companyService',
            'companyProject'
        ));
    }
}
