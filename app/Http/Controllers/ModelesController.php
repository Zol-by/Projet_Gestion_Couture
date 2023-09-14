<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\modeles;


class ModelesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $modele = modeles::all();
        return view('Modeles.Modeles', compact('modele'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create_modele()
    {

        return view('Modeles.new_modele');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $modele = new modeles();

        $modele->libele_modele= $request->libele_modele;
        $modele->type_modele = $request->type_modele;
        $modele->prix_couture = $request->prix_couture;
        $modele->duree_couture = $request->duree_couture;
        // $modele->photo_model = $request->photo_model->store('photo', 'public');

        $modele->save();

        return redirect()->route('create_modele')->with('status', 'Modele a été bien enregistré avec succès !');
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
