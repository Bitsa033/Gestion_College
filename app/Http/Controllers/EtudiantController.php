<?php

namespace App\Http\Controllers;

use App\Models\etudiant;
use App\Models\inscription;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name= $request->get('name');
        $surname= $request->get('surname');
        $phone= $request->get('phone');
        $adress= $request->get('adress');
        $user= DB::table('users')->where('id','=',1)->first('id');
        $classe= $request->get('classe');
        // dd($user);
       $etudiant= etudiant::create([
            'name'=>$name,
            'surname'=>$surname,
            'phone'=>$phone,
            'adress'=>$adress,
            'user_id'=>1
        ]);

        // inscription::create([
        //     'etudiant_id'=>$etudiant,
        //     'classe_id'=>$classe,
        //     'created_at'=>'20241010',
        //     'updated_at'=>'20241010'
        // ]);
        return redirect('etudiants');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
