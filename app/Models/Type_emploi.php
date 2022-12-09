<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type_emploi extends Model
{
    use HasFactory;
    protected $fillable = [
        'type_emploi',
    ];
}
