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

    public function etudiant()
    { 
        return $this->belongsTo(etudiant::class); 
    }
    public function inscription()
    { 
        return $this->hasOne(inscription::class,'etudiant_id'); 
    }

    public function matiere()
    { 
        return $this->belongsTo(matiere::class); 
    }
    public function appreciation()
    { 
        return $this->belongsTo(appreciation::class); 
    }
}
