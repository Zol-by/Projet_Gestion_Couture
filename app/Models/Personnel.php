<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    protected $fillabe =[
        'nom_prenom',
        'sexe',
        'adresse',
        'telephone',
        'fonction',
        'salaire',
    ];
    use HasFactory;
}
