<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Personnel;

class PersonnelsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $modele = modeles::all();
        // return view('Modeles.Modeles', compact('modele'));

        $personnel = Personnel::all();
        return view('Personnels.personnels', compact('personnel'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create_personnel()
    {
        return view('Personnels.new_personnel');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $personnel = new Personnel();

        $personnel->nom_prenom = $request->nom_prenom;
        $personnel->sexe = $request->sexe;
        $personnel->adresse = $request->adresse;
        $personnel->telephone = $request->telephone;
        $personnel->fonction = $request->fonction;
        $personnel->salaire = $request->salaire;

        $personnel->save();

        return redirect()->route('create_personnel')->with('status', 'Le personnel a été bien enregistré avec succès !');
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
