<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Houraire extends Model
{
    use HasFactory;
    protected $fillable = [
        'nbre_heure',
        'autorisation_id',
        'mois',
    ];
}
