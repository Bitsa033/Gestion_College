<?php

namespace App\Http\Controllers;

use App\Models\etudiant;
use App\Http\Requests\StoreetudiantRequest;
use App\Http\Requests\UpdateetudiantRequest;
use App\Http\Resources\Etudiant as ResourcesEtudiant;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = etudiant::all();
        return new ResourcesEtudiant($data);
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
    public function store(StoreEtudiantRequest $request)
    {
        etudiant::create([
            'user_id' => $request->get('user'),
        ]);

        return redirect('etudiant');

    }

    /**
     * Display the specified resource.
     */
    public function show(etudiant $etudiant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(etudiant $etudiant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateetudiantRequest $request, etudiant $etudiant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(etudiant $etudiant)
    {
        //
    }
}
