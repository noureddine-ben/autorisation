<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infopersonnelle extends Model
{
    use HasFactory;
    protected $fillable = [
        'cine',
        'matricule',
        'nom_fr',
        'nom_ar',
        'prenom_fr',
        'prenom_ar',
    ];
}
