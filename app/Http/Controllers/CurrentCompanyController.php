<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CurrentCompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Set all other companies' is_current to false for the current user in a single query
        Company::where('user_id', auth()->user()->id)
               ->update(['is_current' => false]);
    
        // Set this company is_current to true
        $compid = $request->query('compid');
        $company = Company::find($compid);
        
        if (!$company) {
            return redirect()->back()->with('error', 'Company not found.');
        }
    
        $company->is_current = true;  // Set the current company to true
        $company->save();
        
        return view('current_company.index', ['company' => $company]);
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
