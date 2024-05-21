<?php

namespace App\Http\Controllers;

use App\Models\note;
use App\Http\Requests\StorenoteRequest;
use App\Http\Requests\UpdatenoteRequest;
use App\Http\Resources\Note as ResourcesNote;
use App\Models\appreciation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
session_start();

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
     * Data for classe, sequence, eleve in session
     */
    public function note_session(Request $request)
    {
        $classe=$request->get('classe');
        $sequence=$request->get('sequence');
        $matiere=$request->get('matiere');
        $classe_session=$request->session()->get('classe');
        $sequence_session=$request->session()->get('sequence');
        $matiere_session=$request->session()->get('matiere');

        $_SESSION['matiere']=$matiere;

        
        $data = $_SESSION['matiere'];
        return redirect('note');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorenoteRequest $request)
    {
        $cote=null;
        // $request->session()->flash('status', 'Task was successful!');
        $check_array = $_POST['eleveId'];
        $matiere=$_SESSION['matiere'];
        // $db_m=DB::table('matieres')->where('id','=',$data_matiere)->first();
        
        foreach ($_POST['eleve'] as $key => $value) {
            if (in_array($_POST['eleve'][$key], $check_array)) {
                $etudiant=$_POST['eleve'][$key];
                $moy=$_POST['moyenne'][$key];

                if ($moy<=10) {
                    $cote= "NA";
                }
                elseif ($moy<=14) {
                    $cote= "ECA";
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
                    'etudiant_id'=>$etudiant,
                    'matiere_id'=>$matiere,
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
