<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formation;

class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $formations = Formation::all();
        return view('formations.index')->with([
            'formations' => $formations
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'titre' => 'required',
            'description' => 'required',
            'type' => 'required',
            'dateDebut' => 'required',
            'dateFin' => 'required',
        ]);
        $formation = new Formation();
        $formation->titre = $request->titre;
        $formation->description = $request->description;
        $formation->type = $request->type;
        $formation->dateDebut = $request->dateDebut;
        $formation->dateFin = $request->dateFin;
        $formation->save();
        return redirect()->route('formations.index')->with([
            'success' => "Formation ajoutée avec succès"
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $formation = Formation::find($id);
        return view('formations.show')->with([
            'formation' => $formation
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $formation = Formation::find($id);
        return view('formations.edit')->with([
            'formation' => $formation
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'titre' => 'required',
            'description' => 'required',
            'type' => 'required',
            'dateDebut' => 'required',
            'dateFin' => 'required',
        ]);
        $formation = Formation::find($id);
        $formation->titre = $request->titre;
        $formation->description = $request->description;
        $formation->type = $request->type;
        $formation->dateDebut = $request->dateDebut;
        $formation->dateFin = $request->dateFin;
        $formation->save();
        return redirect()->route('formations.index')->with([
            'success' => "Formation modifiée avec succès"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $formation = Formation::find($id);
        $formation->delete();
        return redirect()->route('formations.index')->with([
            'success' => "Formation supprimée avec succès"
        ]);
    }
}
