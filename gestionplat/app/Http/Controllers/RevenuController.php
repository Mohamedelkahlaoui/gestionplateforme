<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Revenu;

class RevenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $revenus = Revenu::all();
        return view('revenus.index')->with([
            'revenus' => $revenus
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('revenus.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
                
            'montant' => 'required',
            'description' => 'required',
            'dateRev' => 'required',
        ]);
        $revenu = new Revenu();
        $revenu->montant = $request->montant;
        $revenu->description = $request->description;
        $revenu->dateRev = $request->dateRev;
        $revenu->save();
        return redirect()->route('revenus.index')->with([
            'success' => "Revenu enregistré avec succès"
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $revenu = Revenu::find($id);
        return view('revenus.show')->with([
            'revenu' => $revenu
        ]);
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $revenu = Revenu::find($id);
        return view('revenus.edit')->with([
            'revenu' => $revenu
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $this->validate($request,[
                
            'montant' => 'required',
            'description' => 'required',
            'dateRev' => 'required',
        ]);
        $revenu = Revenu::find($id);
        $revenu->montant = $request->montant;
        $revenu->description = $request->description;
        $revenu->dateRev = $request->dateRev;
        $revenu->save();
        return redirect()->route('revenus.index')->with([
            'success' => "Revenu modifié avec succès"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $revenu = Revenu::find($id);
        $revenu->delete();
        return redirect()->route('revenus.index')->with([
            'success' => "Revenu supprimé avec succès"
        ]);
    }
}
