<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use APP\Models\commandes;

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
}
