<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Demande;


class DemandeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $demandes = Demande::all();
        return view('demandes.index')->with([
            'demandes' => $demandes,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('demandes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'type' => 'required',
            'description' => 'required',
            'statut' => 'required',
        ]);
        $demande = new Demande();
        $demande->type = $request->type;
        $demande->description = $request->description;
        $demande->statut = $request->statut;
        $demande->save();
        return redirect()->route('demandes.index')->with([
            'success' => "Demande enregistrée avec succès"
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $demande = Demande::find($id);
        return view('demandes.show')->with([
            'demande' => $demande,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $demande = Demande::find($id);
        return view('demandes.edit')->with([
            'demande' => $demande,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'type' => 'required',
            'description' => 'required',
            'statut' => 'required',
        ]);
        $demande = Demande::find($id);
        $demande->type = $request->type;
        $demande->description = $request->description;
        $demande->statut = $request->statut;
        $demande->save();
        return redirect()->route('demandes.index')->with([
            'success' => "Demande modifiée avec succès"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $demande = Demande::find($id);
        $demande->delete();
        return redirect()->route('demandes.index')->with([
            'success' => "Demande supprimée avec succès"
        ]);
    }
}
