<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = Company::get();
        return view('company.index',[
            'companies'=>$companies
        ])->layout('layouts.main');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('company.create')->layout('layouts.main');
    }

    /**
     * Store a newly created resource in storage.
     */
    
    public function store(StoreCompanyRequest $request)
    {
        // Start a database transaction
        DB::beginTransaction();
        
        try {
            // Extract data from request
            $data = $request->only([
                'name',
                'tpin',
                'email',
                'type',
                'restrict',
                'phone',
                'phone2',
                'address',
                'address2',
                'address3',
                'country',
                'province',
                'city',
                'report-option'
            ]);
    
            // Add the user ID to the data
            $data['user_id'] = auth()->id();
    
            // If avatar is present, handle avatar upload
            if ($request->hasFile('avatar')) {
                $avatarPath = $request->file('avatar')->store('logos', 'public');
                $data['logo'] = $avatarPath;
            }
    
            // Create the new company
            Company::create($data);
    
            // Commit the transaction
            DB::commit();
    
            // Set success flash message
            Session::flash('success', 'Company created successfully!');
    
            // Redirect to the appropriate page
            return redirect()->route('companies.index');
    
        } catch (\Exception $e) {
            // Rollback the transaction if an error occurs
            DB::rollBack();
    
            // Log the error for further debugging
            Log::error('Error creating company: '.$e->getMessage());
    
            // Set error flash message
            Session::flash('error', 'There was an error creating the company. Please try again later.');
    
            // Redirect back with input so the user doesn't lose the filled-out form data
            return redirect()->back()->withInput();
        }
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCompanyRequest $request, Company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        //
    }
}
