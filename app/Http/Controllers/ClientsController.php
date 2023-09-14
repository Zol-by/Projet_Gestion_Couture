<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     */



    public function index()
    {
        $clients = Client::all();
        return view('Clients.clients', compact('clients'));
    }


    /**
     * Display a listing of the resource.
     */
    public function create_client()
    {
        return view('Clients.new_client');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $client = new Client();

        $client->nom_prenom = $request->nom_prenom;
        $client->adresse = $request->adresse;
        $client->telephone = $request->telephone;
        $client->sexe = $request->sexe;

        $client->save();

        return redirect()->route('create_client')->with('status', 'Le client a été bien enregistré avec succès !');
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
        $client = $Client::fied($id);
        $client->delete();

        return redirect()->route('clients')->with('status', 'Le client a été bien supprimer avec succès !');

    }
}
