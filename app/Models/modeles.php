<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use APP\Models\commandes;

class modeles extends Model
{
    protected $fillabe =[
        'libele_modele',
        'type_modele',
        'prix_couture',
        'duree_couture',
        // 'photo_model',
    ];
    function commande(){
        return $this->hasOne(commande::class);
    }
}
