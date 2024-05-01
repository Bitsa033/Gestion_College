<?php

namespace App\Http\Controllers;

use App\Models\classe;
use App\Http\Requests\StoreclasseRequest;
use App\Http\Requests\UpdateclasseRequest;
use App\Http\Resources\Classe as ResourcesClasse;

class ClasseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        dd('toto');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreclasseRequest $request)
    {
        classe::create([
            'name' => $request->get('name'),
        ]);

        return redirect('classes');

    }

    /**
     * Display the specified resource.
     */
    public function show(classe $classe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(classe $classe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateclasseRequest $request, classe $classe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(classe $classe)
    {
        //
    }
}
