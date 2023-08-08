<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidature;

class CandidatureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $candidatures = Candidature::all();
        return view('candidatures.index')->with([
            'candidatures' => $candidatures
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('candidatures.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'cnie' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'genre' => 'required',
            'dateNaissance' => 'required',
            'profession' => 'required',
            'tele' => 'required',
            'email' => 'required',
            'niveau' => 'required',

        ]);
        $candidature = new Candidature();
        $candidature->cnie = $request->cnie;
        $candidature->nom = $request->nom;
        $candidature->prenom = $request->prenom;
        $candidature->genre = $request->genre;
        $candidature->dateNaissance = $request->dateNaissance;
        $candidature->profession = $request->profession;
        $candidature->tele = $request->tele;
        $candidature->email = $request->email;
        $candidature->niveau = $request->niveau;
        $candidature->save();
        return redirect()->route('candidatures.index')->with
        ('success','Candidature created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $candidature = Candidature::find($id);
        return view('candidatures.show')->with([
            'candidature' => $candidature
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $candidature = Candidature::find($id);
        return view('candidatures.edit')->with([
            'candidature' => $candidature
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'cnie' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'genre' => 'required',
            'dateNaissance' => 'required',
            'profession' => 'required',
            'tele' => 'required | size:13',
            'email' => 'required',
            'niveau' => 'required',
        ]);
        $candidature = Candidature::find($id);
        $candidature->cnie = $request->cnie;
        $candidature->nom = $request->nom;
        $candidature->prenom = $request->prenom;
        $candidature->genre = $request->genre;
        $candidature->dateNaissance = $request->dateNaissance;
        $candidature->profession = $request->profession;
        $candidature->tele = $request->tele;
        $candidature->email = $request->email;
        $candidature->niveau = $request->niveau;
        $candidature->save();
        return redirect()->route('candidatures.index')->with
        ('success','Candidature updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $candidature = Candidature::find($id);
        $candidature->delete();
        return redirect()->route('candidatures.index')->with
        ('success','Candidature deleted successfully.');
    }
}
