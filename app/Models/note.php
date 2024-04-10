<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class note extends Model
{
    use HasFactory;

    protected $fillable = [
        'etudiant_id',
        'matiere_id',
        'moyenne',
        'appreciation_id',
    ];

    public function etudiants()
    { 
        return $this->belongsTo(etudiant::class,'etudiant_id'); 
    }

    public function matieres()
    { 
        return $this->belongsTo(matiere::class,'matiere_id'); 
    }
    public function appreciations()
    { 
        return $this->belongsTo(appreciation::class,'appreciation_id'); 
    }
}
