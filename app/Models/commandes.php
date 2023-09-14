<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use APP\Models\Client;
use APP\Models\modeles;
use Illuminate\Databasse\Eloquent\Relations\BelongsTo;

class commandes extends Model
{
    protected $guarded =[

    ];
    use HasFactory;

    function create_client (){
        return $this->belongsTo(Client::class,'id_client');
    }

    function create_modele (){
        return $this->belongsTo(Client::class,'id1_modele');
    }
}

























