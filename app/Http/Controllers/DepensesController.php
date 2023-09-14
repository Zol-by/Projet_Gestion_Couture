<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\depenses;


class DepensesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $depenses = depenses::all();
        return view('Depenses.depenses', compact('depenses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create_depense()
    {
        return view('Depenses.new_depense');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $depense = new Depenses();

        $depense->nom_personnel = $request->nom_personnel ;
        $depense->somme_depense = $request->somme_depense ;
        $depense->description = $request->description;
        $depense->save();

        return redirect()->route('create_depense')->with('status', 'L\'enregistrement de la depense ont été fait avec succès !');


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
