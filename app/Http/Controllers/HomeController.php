<?php

namespace App\Http\Controllers;

use App\Models\classe;
use App\Models\etudiant;
use App\Models\matiere;
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

    public function acceuil()
    {
        return view('acceuil.acceuil');
    }

    public function classe()
    {
        $data=classe::all();
        return view('classe.index',[
            'classes'=>$data
        ]);
    }

    public function matiere()
    {
        $data=matiere::all();
        // dd($data);
        return view('matiere.index',[
            'matieres'=>$data
        ]);
    }

    public function coefficient()
    {
        return view('coefficient.index');
    }

    public function etudiant ()
    {
        $etudiants=etudiant::all();
        return view('etudiant.index',[
            'etudiants'=>$etudiants
        ]);
    }

    public function notes()
    {
        return view('notes.index');
    }
}
