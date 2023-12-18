<?php

namespace App\Http\Controllers;

use App\Models\CompanyHistory;
use App\Models\CompanyProfile;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FrontEnd extends Controller
{
    public function index(): View
    {
        $companyProfile = CompanyProfile::all();
        $companyHistory = CompanyHistory::all();
        return view('landing-page', compact('companyProfile', 'companyHistory'));
    }
}
