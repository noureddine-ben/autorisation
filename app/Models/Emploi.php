<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emploi extends Model
{
    use HasFactory;
    protected $fillable = [
        'jours',
        'creneau_horaire',
        'heure_debut',
        'heure_fin',
        'section',
        'groupe',
        'type_emplois',
        'type_intervention',
        'matieres',
        'autorisation_id',


    ];
    public function autorisation()
    {
        return $this->belongsTo(Autorisation::class);
    }
}
