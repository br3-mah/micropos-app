<?php

namespace App\Http\Controllers;

use App\Models\ApiKey;
use App\Http\Requests\StoreApiKeyRequest;
use App\Http\Requests\UpdateApiKeyRequest;

class ApiKeyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('api-key.index')->layout('layouts.main');
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
    public function store(StoreApiKeyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ApiKey $apiKey)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ApiKey $apiKey)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateApiKeyRequest $request, ApiKey $apiKey)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ApiKey $apiKey)
    {
        //
    }
}
