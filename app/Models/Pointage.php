<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pointage extends Model
{
    use HasFactory;
    protected $fillable = [
        'jours',
        'creneau_horaire',
        'heure_debut',
        'heure_fin',
        'total',
        'autorisation_id',
        

    ];
}
