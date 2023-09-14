<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\modeles;
use App\Models\Client;
use App\Models\commandes;

class CommandesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('Commandes.commandes');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create_commande()
    {
        $modele = modeles::all();
        $clients = Client::all();

        return view('Commandes.new_commande', compact('modele','clients'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $commande = new commandes();

        $commande->id_client = $request->id_client;
        $commande->id_modele = $request->id_modele;
        $commande->mes_tete = $request->mes_tete;
        $commande->mes_cou = $request->mes_cou;
        $commande->mes_epaule = $request->mes_epaule;
        $commande->mes_longueur_bras = $request->mes_longueur_bras;
        $commande->mes_poitrine = $request->mes_poitrine;
        $commande->mes_dessous_poitrine = $request->mes_dessous_poitrine;
        $commande->mes_tour_taille = $request->mes_tour_taille;
        $commande->mes_os_iliaque = $request->mes_os_iliaque;
        $commande->mes_manches = $request->mes_manches;
        $commande->mes_cuisse = $request->mes_cuisse;
        $commande->mes_genou = $request->mes_genou;
        $commande->mes_mollet = $request->mes_mollet;
        $commande->mes_cheville = $request->mes_cheville;
        $commande->mes_biceps = $request->mes_biceps;
        $commande->mes_zoude = $request->mes_zoude;
        $commande->mes_avant_bras = $request->mes_avant_bras;
        $commande->mes_poignet = $request->mes_poignet;
        $commande->mes_poignet_coude = $request->mes_poignet_coude;
        $commande->mes_genou_cheville = $request->mes_genou_cheville;
        $commande->mes_entrejambe = $request->mes_entrejambe;
        $commande->mes_couture_exterieure = $request->mes_couture_exterieure;
        $commande->mes_hauteur_totale = $request->mes_hauteur_totale;
        $commande->observation = $request->observation;

        $commande->save();

        return redirect()->route('create_commande')->with('status', 'La commande a été bien enregistré avec succès !');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
