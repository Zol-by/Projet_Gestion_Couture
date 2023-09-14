<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class commandes extends Model
{
    protected $fillabe =[
        
        'id_client',
        'id_modele',
        'mes_tete',
        'mes_cou',
        'mes_epaule',
        'mes_longueur_bras',
        'mes_poitrine',
        'mes_dessous_poitrine',
        'mes_tour_taille',
        'mes_os_iliaque',
        'mes_manches',
        'mes_cuisse',
        'mes_genou',
        'mes_mollet',
        'mes_cheville',
        'mes_biceps',
        'mes_zoude',
        'mes_avant_bras',
        'mes_poignet',
        'mes_poignet_coude',
        'mes_genou_cheville',
        'mes_entrejambe',
        'mes_couture_exterieure',
        'mes_hauteur_totale',
        'observation',
    ];
    use HasFactory;
}

























