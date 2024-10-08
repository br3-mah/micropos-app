<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Http\Requests\StoreBranchRequest;
use App\Http\Requests\UpdateBranchRequest;
use App\Models\Company;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('branches.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBranchRequest $request)
    {
        // Start a database transaction
        DB::beginTransaction();
                
        try {
            // Extract data from request
            $data = $request->only([
                'name',
                'code',
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
            $data['company_id'] = Company::currentCompany()->id;

            // Create the new company
            Branch::create($data);

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
    public function show(Branch $branch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Branch $branch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBranchRequest $request, Branch $branch)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Branch $branch)
    {
        //
    }
}
