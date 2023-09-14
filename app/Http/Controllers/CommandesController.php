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
        $commande = commandes::all();
        return view('Commandes.commandes', compact('commande'));
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
        commandes::create($request->all());

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
