<?php

namespace App\Http\Controllers;

use App\Models\etudiant;
use App\Http\Requests\StoreetudiantRequest;
use App\Http\Requests\UpdateetudiantRequest;
use App\Http\Resources\Etudiant as ResourcesEtudiant;
use App\Models\inscription;
use Illuminate\Support\Facades\DB;

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
     * Store a newly created resource in storage.
     */
    public function store(StoreEtudiantRequest $request)
    {
        $tore_etudiant=etudiant::create([
            'user_id' => 1,
            'name' => $request['name'],
            'surname' => $request['surname'],
            'phone' => $request['phone'],
            'adress' => $request['adress'],
        ]);
        $etudiant=DB::table('etudiants')->where('name','=',$tore_etudiant);
        // dd($etudiant);
        // inscription::create([
        //     'etudiant_id' => 1,
        // ]);

        return redirect('etudiants');

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
