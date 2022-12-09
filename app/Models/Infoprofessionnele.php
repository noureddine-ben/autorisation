<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infoprofessionnele extends Model
{
    use HasFactory;
    protected $fillable = [
        'fonction',
        'personnelle_id',
        
    ];
}
