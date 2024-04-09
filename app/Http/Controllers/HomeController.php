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

    public function index2($slug = null)
    {
        $query = $slug ? User::whereSlug($slug)->firstOrFail()->films() : etudiant::query();
        $films = $query->withTrashed()->oldest('title')->paginate(5);
        $categories = User::all();
        return view('index', compact('films', 'categories', 'slug'));
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

    public function inscriptions()
    {
        $inscriptions = inscription::with('etudiant','classe')->get();
        
        return view('etudiant.inscriptions',[
            'etudiants'=>$inscriptions
        ]);
    }

    public function create_etudiant()
    {
        return view('etudiant.new');
    }

    public function create_inscription()
    {
        $data=etudiant::all();
        return view('etudiant.inscription',[
            'inscriptions'=>$data
        ]);
    }

    public function notes()
    {
        $notes=note::with('etudiant','matiere')->get();
        return view('note.index',[
            'notes'=>$notes,
        ]);
    }

    public function create_note()
    {
        $data=matiere::all();
        $etudiants=inscription::with('etudiant')->get();
        return view('note.new',[
            'matieres'=>$data,
            'etudiants'=>$etudiants
        ]);
    }
}
