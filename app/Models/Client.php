<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use APP\Models\commandes;
use APP\Models\facture;

class Client extends Model
{
    protected $fillabe =[
        'nom_prenom',
        'adresse',
        'telephone',
        'sexe',
    ];
    function commande(){
        return $this->hasOne(commande::class);
    }
    function facture(){
        return $this->hasOne(facture::class);
    }
}
