<?php

namespace App\Http\Controllers;

use App\Http\Resources\Inscription as ResourcesInscription;
use App\Models\classe;
use App\Models\etudiant;
use App\Models\inscription;
use App\Models\matiere;
use App\Models\note;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function classe()
    {
        return view('classe.nouvelle',[
            
        ]);
    }

    public function classes()
    {
        $classes=classe::all();
        return view('classe.liste',[
            'classes'=>$classes
        ]);
    }

    public function matiere()
    {
        return view('matiere.nouvelle',[
        ]);
    }
    
    public function matieres()
    {
        $matieres=matiere::all();
        
        return view('matiere.liste',[
            'matieres'=>$matieres
        
        ]);
    }

    public function etudiant()
    {
        $classes=classe::all();
        return view('etudiant.nouvel',[
            'classes'=>$classes
        ]);
    }

    public function etudiants()
    {
        $etudiants=etudiant::all();
        return view('etudiant.liste',[
            'etudiants'=>$etudiants
        ]);
    }

    public function inscription()
    {
        $inscriptions = inscription::with('etudiant','classe')->get();
        
        return view('etudiant.inscription',[
            'etudiant'=>$inscriptions
        ]);
    }

    public function note()
    {
        $matieres=matiere::all();
        $etudiants=etudiant::all();
        $classes=classe::all();
        return view('notes.nouvelle',[
            'matieres'=>$matieres,
            'etudiants'=>$etudiants,
            'classes'=>$classes
        ]);
    }

    public function notes()
    {
        $notes=note::with('etudiants','matieres','appreciations')->get();
        // echo $notes;
        return view('note.index',[
            'notes'=>$notes,
        ]);
    }

}
