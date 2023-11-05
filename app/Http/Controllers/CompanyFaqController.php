<?php

namespace App\Http\Controllers;

use App\Models\CompanyFaq;
use App\Services\CompanyFaqService;
use Illuminate\Http\Request;

class CompanyFaqController extends Controller
{

    public function __construct(private CompanyFaqService $companyFaq)
    {
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companyFaq = CompanyFaq::all();
        return view('company_faqs.index', compact('companyFaq'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CompanyFaq $companyFaq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CompanyFaq $companyFaq)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CompanyFaq $companyFaq)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CompanyFaq $companyFaq)
    {
        //
    }
}
