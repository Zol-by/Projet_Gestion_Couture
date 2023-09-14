<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class depenses extends Model
{

    use HasFactory;

    protected $fillabe =[
        'nom_personnel',
        'somme_depense',
        'description',

    ];
}
