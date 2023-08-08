<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partenaire;

class PartenaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $partenaires = Partenaire::all();
        return view('partenaires.index')->with([
            'partenaires' => $partenaires
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('partenaires.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
        $partenaire = new Partenaire();
        $partenaire->name = $request->name;
        $partenaire->description = $request->description;
        $partenaire->save();
        return redirect()->route('partenaires.index')->with
            ('message', 'Partenaire created successfully!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $partenaire = Partenaire::find($id);
        return view('partenaires.show')->with([
            'partenaire' => $partenaire,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // 
        $partenaire = Partenaire::find($id);
        return view('partenaires.edit')->with([
            'partenaire' => $partenaire,
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
            'description' => 'required',
        ]);
        $partenaire = Partenaire::find($id);
        $partenaire->name = $request->name;
        $partenaire->description = $request->description;
        $partenaire->save();
        return redirect()->route('partenaires.index')->with
            ('message', 'Partenaire updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $partenaire = Partenaire::find($id);
        $partenaire->delete();
        return redirect()->route('partenaires.index')->with
            ('message', 'Partenaire deleted successfully!');
    }
}
