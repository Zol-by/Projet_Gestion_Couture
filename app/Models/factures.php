<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\relation\Hasmany;

use Illuminate\Database\Eloquent\Model;

class factures extends Model
{
    protected $guarded =[

    ];
    use HasFactory;

    function Client (){
        return $this->belongsTo(Client::class,'id_client');
    }

    function Commande (){
        return $this->belongsTo(Commande::class,'id_commande');
    }
}

