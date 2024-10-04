<?php

namespace App\Http\Controllers;

use App\Models\Integration;
use App\Http\Requests\StoreIntegrationRequest;
use App\Http\Requests\UpdateIntegrationRequest;

class IntegrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('integration.index')->layout('layouts.main');
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
    public function store(StoreIntegrationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Integration $integration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Integration $integration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateIntegrationRequest $request, Integration $integration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Integration $integration)
    {
        //
    }
}
