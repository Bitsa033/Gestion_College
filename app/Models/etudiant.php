<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class etudiant extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'surname',
        'phone',
        'adress',
        'user_id',
    ];

    public function inscriptions()
    { 
        return $this->belongsTo(inscription::class); 
    }

    public function notes()
    { 
        return $this->belongsTo(note::class); 
    }

    public function classes()
    { 
        return $this->belongsTo(inscription::class); 
    }
}
