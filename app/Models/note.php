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
}
