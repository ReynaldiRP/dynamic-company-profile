<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoredCompanyExcellence;
use App\Models\CompanyExcellence;
use App\Services\CompanyExcellenceService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class CompanyExcellenceController extends Controller
{
    public function __construct(private CompanyExcellenceService $companyExcellenceService)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companyExcellence = CompanyExcellence::all();
        return view('company_exellences.index', ['companyExcellence' => $companyExcellence]);
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
    public function store(StoredCompanyExcellence $request): RedirectResponse
    {
        try {
            $this->companyExcellenceService->createCompanyExcellence($request->validated());
            return redirect()->back();
        } catch (ValidationException $th) {
            return redirect()->back()
                ->withErrors($th->validator)
                ->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(CompanyExcellence $companyExcellence)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CompanyExcellence $companyExcellence)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CompanyExcellence $companyExcellence)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CompanyExcellence $companyExcellence)
    {
        //
    }
}
