<?php

namespace App\Http\Controllers;

use App\Models\note;
use App\Http\Requests\StorenoteRequest;
use App\Http\Requests\UpdatenoteRequest;
use App\Http\Resources\Note as ResourcesNote;
use App\Models\appreciation;
use Illuminate\Support\Facades\DB;

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
     * Store a newly created resource in storage.
     */
    public function store(StorenoteRequest $request)
    {
        $cote=null;

        $check_array = $_POST['cour'];
        foreach ($_POST['matiere'] as $key => $value) {
            if (in_array($_POST['matiere'][$key], $check_array)) {
                $etu=$request->get('etudiant');
                $mat=$_POST['matiere'][$key];
                $moy=$_POST['moyenne'][$key];

                if ($moy<=10) {
                    $cote= "NA";
                }
                elseif ($moy<=14) {
                    $cote= "EA";
                }
                elseif ($moy<=16) {
                    $cote= "A";
                }
                elseif ($moy<=20) {
                    $cote= "A+";
                }
                $appreciation=DB::table('appreciations')->where('code','=',$cote)->first();
                // echo $moy,$cote;
                $appreciation_id= $appreciation->id;

                note::create([
                    'etudiant_id'=>$etu,
                    'matiere_id'=>$mat,
                    'moyenne'=>$moy,
                    'appreciation_id'=>$appreciation_id,
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
