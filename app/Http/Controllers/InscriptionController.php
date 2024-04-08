<?php

namespace App\Http\Controllers;

use App\Models\inscription;
use App\Http\Requests\StoreinscriptionRequest;
use App\Http\Requests\UpdateinscriptionRequest;
use App\Http\Resources\Inscription as ResourcesInscription;
use App\Models\etudiant;

class InscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = inscription::with('etudiant','classe')->get();
        return new ResourcesInscription($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreinscriptionRequest $request)
    {
        $check_array = $_POST['etudiant'];
        foreach ($_POST['etudiant'] as $key => $value) {
            if (in_array($_POST['etudiant'][$key], $check_array)) {

                inscription::create([
                    'etudiant_id'=>$_POST['etudiant'][$key],
                    'classe_id'=>$_POST['classe'][$key],
                    'created_at'=>now(),
                    'updated_at'=>now()
                ]);
            }
        }

        return redirect('inscriptions');
    }

    /**
     * Display the specified resource.
     */
    public function show(inscription $inscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(inscription $inscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateinscriptionRequest $request, inscription $inscription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(inscription $inscription)
    {
        //
    }
}
