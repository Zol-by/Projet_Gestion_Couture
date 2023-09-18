<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

use Illuminate\Databasse\Eloquent\Relations\BelongsTo;

class commandes extends Model
{
    protected $guarded =[

    ];
    use HasFactory;

    function Client (){
        return $this->belongsTo(Client::class,'id_client');
    }

    function modeles (){
        return $this->belongsTo(modeles::class,'id_modele');
    }
    function facture(){
        return $this->hasOne(facture::class);
    }
}

























