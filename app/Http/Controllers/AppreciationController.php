<?php

namespace App\Http\Controllers;

use App\Models\appreciation;
use App\Http\Requests\StoreappreciationRequest;
use App\Http\Requests\UpdateappreciationRequest;
use App\Http\Resources\Appreciation as ResourcesAppreciation;

class AppreciationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = appreciation::all();
        return new ResourcesAppreciation($data);
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
    public function store(StoreappreciationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(appreciation $appreciation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(appreciation $appreciation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateappreciationRequest $request, appreciation $appreciation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(appreciation $appreciation)
    {
        //
    }
}
