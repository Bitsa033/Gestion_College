<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inscription extends Model
{
    use HasFactory;

    protected $fillable = [
        'etudiant_id',
        'classe_id',
        'created_at',
        'updated_at',
    ];

    public function etudiant()
    { 
        return $this->belongsTo(etudiant::class); 
    }
    
    public function classe()
    { 
        return $this->belongsTo(classe::class); 
    }

    public function matieres()
    { 
        return $this->belongsTo(matiere::class); 
    }
    public function notes()
    { 
        return $this->belongsTo(note::class); 
    }
}
