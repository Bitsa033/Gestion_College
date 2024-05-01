<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreclasseRequest;
use App\Models\matiere;
use App\Http\Requests\StorematiereRequest;
use App\Http\Requests\UpdatematiereRequest;
use App\Http\Resources\Matiere as ResourcesMatiere;

class MatiereController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = matiere::all();
        return new ResourcesMatiere($data);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StorematiereRequest $request)
    {
        matiere::create([
            'name' => $request->get('name'),
        ]);

        return redirect('matieres');

    }

    /**
     * Display the specified resource.
     */
    public function show(matiere $matiere)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(matiere $matiere)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatematiereRequest $request, matiere $matiere)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(matiere $matiere)
    {
        //
    }
}
