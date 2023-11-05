<?php

namespace App\Http\Controllers;

use App\Models\CompanyProfile;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FrontEnd extends Controller
{
    public function index(): View
    {
        $companyProfile = CompanyProfile::all();
        return view('app', compact('companyProfile'));
    }
}
