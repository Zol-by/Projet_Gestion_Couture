<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modeles extends Model
{
    protected $fillabe =[
        'libele_modele',
        'type_modele',
        'prix_couture',
        'duree_couture',
        // 'photo_model',
    ];
    use HasFactory;
}
