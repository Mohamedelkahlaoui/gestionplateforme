<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commune;

class CommuneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $communes = Commune::all();
        return view('communes.index')->with([
            'communes' => $communes,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('communes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
            'adresse' => 'required',
        ]);
        $commune = new Commune();
        $commune->name = $request->name;
        $commune->adresse = $request->adresse;
        $commune->save();
        return redirect()->route('communes.index')->with(
            'success', 'Commune ajoutée avec succès'
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $commune = Commune::find($id);
        return view('communes.show')->with([
            'commune' => $commune,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $commune = Commune::find($id);
        return view('communes.edit')->with([
            'commune' => $commune,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'name' => 'required',
            'adresse' => 'required',
        ]);
        $commune = Commune::find($id);
        $commune->name = $request->name;
        $commune->adresse = $request->adresse;
        $commune->save();
        return redirect()->route('communes.index')->with(
            'success', 'Commune modifiée avec succès'
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $commune = Commune::find($id);
        $commune->delete();
        return redirect()->route('communes.index')->with(
            'success', 'Commune supprimée avec succès'
        );
    }
}
