<?php

namespace App\Http\Controllers;

use App\Models\note;
use App\Http\Requests\StorenoteRequest;
use App\Http\Requests\UpdatenoteRequest;
use App\Http\Resources\Note as ResourcesNote;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = note::all();
        return new ResourcesNote($data);
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
    public function store(StorenoteRequest $request)
    {
        $check_array = $_POST['matiere'];
        foreach ($_POST['matiere'] as $key => $value) {
            if (in_array($_POST['matiere'][$key], $check_array)) {

                note::create([
                    'etudiant_id'=>$request->get('etudiant'),
                    'matiere_id'=>$_POST['matiere'][$key],
                    'moyenne'=>$_POST['moyenne'][$key],
                    'appreciation_id'=>1,
                    'created_at'=>now(),
                    'updated_at'=>now()
                ]);
            }
        }


        return redirect('notes');
    }

    /**
     * Display the specified resource.
     */
    public function show(note $note)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(note $note)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatenoteRequest $request, note $note)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(note $note)
    {
        //
    }
}
