<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jeune;


class JeuneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $jeunes = Jeune::all();
        return view('jeunes.index')->with([
            'jeunes' => $jeunes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('jeunes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required',
            'datenaissance' => 'required',
            'adresse' => 'required',
        ]);
        $jeune = new Jeune();
        $jeune->nom = $request->nom;
        $jeune->prenom = $request->prenom;
        $jeune->email = $request->email;
        $jeune->datenaissance = $request->datenaissance;
        $jeune->adresse = $request->adresse;
        $jeune->save();
        return redirect()->route('jeunes.index')->with
            ('success','Jeune created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $jeune = Jeune::find($id);
        return view('jeunes.show')->with([
            'jeune' => $jeune
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $jeune = Jeune::find($id);
        return view('jeunes.edit')->with([
            'jeune' => $jeune
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required',
            'datenaissance' => 'required',
            'adresse' => 'required',
        ]);
        $jeune = Jeune::find($id);
        $jeune->nom = $request->nom;
        $jeune->prenom = $request->prenom;
        $jeune->email = $request->email;
        $jeune->datenaissance = $request->datenaissance;
        $jeune->adresse = $request->adresse;
        $jeune->save();
        return redirect()->route('jeunes.index')->with
            ('success','Jeune updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $jeune = Jeune::find($id);
        $jeune->delete();
        return redirect()->route('jeunes.index')->with
            ('success','Jeune deleted successfully.');
    }
}
