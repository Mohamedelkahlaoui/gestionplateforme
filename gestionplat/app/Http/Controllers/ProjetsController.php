<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projet;
use App\Models\Province;
use App\Models\Commune;
use App\Models\Partenaire;


class ProjetsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $provinces = Province::all();
        $projets = Projet::all();
        foreach($projets as $projet){
            $provs_id = $projet->provinces->name;
        }
        $communes = Commune::all();
        foreach($projets as $projet){
            $comm_id = $projet->communes->name;
        }
        $partenaires = Partenaire::all();
        foreach($projets as $projet){
            $part_id = $projet->partenaires->name;
        }

        
        // foreach($provinces as $province){
        //     $provs_id = $provinces->projet->name;
        // }
        return view('projets.index')->with([
            'projets' => $projets,
            'provinces' => $provinces,
            'communes' => $communes,
            'partenaires' => $partenaires
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $projet = Projet::all();
        $provinces = Province::all();
        $communes = Commune::all();
        $partenaires = Partenaire::all();
        return view('projets.create',[
            'projet' => $projet,
            'provinces' => $provinces,
            'communes' => $communes,
            'partenaires' => $partenaires
        ]);


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'provs_id' =>'required|exists:provinces,id',
            'comm_id' =>'required|exists:communes,id',
            'anneeprog' => 'required',
            'reference' => 'required',
            'intitule' => 'required',
            'couttotal' => 'required',
            'partIndh' =>'required',
            'part_id' =>'required|exists:partenaires,id',
            'delaireal' => 'required',   
        ]);
        $projet = new Projet();
        $projet->provs_id = $request->provs_id;
        $projet->comm_id = $request->comm_id;
        $projet->anneeprog = $request->anneeprog;
        $projet->reference = $request->reference;
        $projet->intitule = $request->intitule;
        $projet->couttotal = $request->couttotal;
        $projet->partIndh= $request->partIndh;
        $projet->part_id = $request->part_id;
        $projet->delaireal = $request->delaireal;
        $projet->save();
        return redirect()->route('projets.index')->with('success','Projet created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $projet = Projet::find($id);
        return view('projets.show')->with([
            'projet' => $projet,
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $projet = Projet::find($id);
        $province=Province::all();
        $commune=Commune::all();
        $partenaire=Partenaire::all();
        return view('projets.edit')->with([
            'projet' => $projet,
            'province'=>  $province,
            'commune'=>  $commune,
            'partenaire'=>  $partenaire
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'provs_id' =>'required',
            'comm_id' =>'required',
            'anneeprog' => 'required',
            'reference' => 'required',
            'intitule' => 'required',
            'couttotal' => 'required',
            'partIndh' =>'required',
            'part_id' =>'required',
            'delaireal' => 'required',   
        ]);

        $projet = Projet::find($id);
        $projet->provs_id = $request->provs_id;
        $projet->comm_id = $request->comm_id;
        $projet->anneeprog = $request->anneeprog;
        $projet->reference = $request->reference;
        $projet->intitule = $request->intitule;
        $projet->couttotal = $request->couttotal;
        $projet->partIndh = $request->partIndh;
        $projet->part_id = $request->part_id;
        $projet->delaireal = $request->delaireal;
        $projet->save();
        return redirect()->route('projets.index')->with([
            'success' => 'Projet updated successfully.'
        ]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        
        $projet = Projet::find($id);
        $projet->delete();
        return redirect()->route('projets.index')->with([
            'success' => 'Projet deleted successfully.'
        ]);

    }
    // public function find(Request $request){
    //     $name=$request->input('name');
    //     $province=Province::where('name','like',"%$name%")->get();
    //     return view('provinces.index',[
    //         'provinces' => $provinces
    //     ]);
    // }



    // private static function get_project_by_region() : Collection{
    //     $projets = DB::table('projets')
    //     ->join('provinces', 'projets.provs_id', '=', 'provinces.id')
    //     ->select('provinces.id', 'provinces.nom', DB::raw('count(*) as total'))
    //     ->groupBy('provinces.id', 'provinces.nom')
    //     ->get();
    //     return $projets;
    // }
    // private static function get_project_by_commune() : Collection{
    //     $projets = DB::table('projets')
    //     ->join('communes', 'projets.comm_id', '=', 'communes.id')
    //     ->select('communes.id', 'communes.nom', DB::raw('count(*) as total'))
    //     ->groupBy('communes.id', 'communes.nom')
    //     ->get();
    //     return $projets;
    // }
    // private static function get_project_by_partenaire() : Collection{
    //     $projets = DB::table('projets')
    //     ->join('partenaires', 'projets.part_id', '=', 'partenaires.id')
    //     ->select('partenaires.id', 'partenaires.nom', DB::raw('count(*) as total'))
    //     ->groupBy('partenaires.id', 'partenaires.nom')
    //     ->get();
    //     return $projets;
    // }
    // public function get_project_by_region_chart(){
    //     $projets = $this->get_project_by_region();
    //     $data = [];
    //     foreach($projets as $projet){
    //         $data[$projet->nom] = $projet->total;
    //     }
    //     return view('projets.chart')->with([
    //         'data' => $data
    //     ]);
    // }
    // public function get_project_by_commune_chart(){
    //     $projets = $this->get_project_by_commune();
    //     $data = [];
    //     foreach($projets as $projet){
    //         $data[$projet->nom] = $projet->total;
    //     }
    //     return view('projets.chart')->with([
    //         'data' => $data
    //     ]);
    // }
    // public function get_project_by_partenaire_chart(){
    //     $projets = $this->get_project_by_partenaire();
    //     $data = [];
    //     foreach($projets as $projet){
    //         $data[$projet->nom] = $projet->total;
    //     }
    //     return view('projets.chart')->with([
    //         'data' => $data
    //     ]);
    // }

}
