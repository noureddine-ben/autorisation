<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autorisation extends Model
{
    use HasFactory;
    protected $fillable = [
        'reference',
        'date_autorisation',
        'type_beneficiaire',
        'nom',
        'prenom',
        'nom_ar',
        'prenom_ar',
        'type_etablissment_o',
        'etablissment_o',
        'etablissment_o_ar',
        'type_etablissment_c',
        'etablissment_c',
        'etablissment_c_ar',
        'date_debut',
        'date_fin',
        'etablissment_o',
        'annees_univ',
        'periode',
        'etat_sous_ordon',
        'date_signature_sous_ordon',
        'etat_ordon',
        'date_signature_ordon',
        'type_autorisation',



        
    ];
    public function emplois()
    {
        return $this->hasMany(Emploi::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
