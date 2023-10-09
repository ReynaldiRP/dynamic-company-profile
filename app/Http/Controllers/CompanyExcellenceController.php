<?php

namespace App\Http\Controllers;

use App\Models\CompanyExcellence;
use Illuminate\Http\Request;

class CompanyExcellenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('CompanyExellence.index');
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
    public function show(CompanyExcellence $companyExcellence)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CompanyExcellence $companyExcellence)
    {
        //
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
