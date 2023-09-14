<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\commandes;

class FacturesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Factures.factures');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create_facture()
    {
        $commande = commandes::all();
        $clients = Client::all();

        return view('Factures.new_facture', compact('commande','clients'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
