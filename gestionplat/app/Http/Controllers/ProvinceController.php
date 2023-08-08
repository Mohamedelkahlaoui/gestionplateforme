<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Province;

class ProvinceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $provinces = Province::all();
        return view('provinces.index')->with([
            'provinces' => $provinces,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('provinces/create');
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
        $province = new Province();
        $province->name = $request->name;
        $province->adresse = $request->adresse;
        $province->save();
        return redirect()->route('provinces.index')->with([
            'message' => 'Province created successfully!'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $province = Province::find($id);
        return view('provinces.show')->with([
            'province' => $province,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $province = Province::find($id);
        return view('provinces.edit')->with([
            'province' => $province,
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
        $province = Province::find($id);
        $province->name = $request->name;
        $province->adresse = $request->adresse;
        $province->save();
        return redirect()->route('provinces.index')->with([
            'message' => 'Province updated successfully!'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $province = Province::find($id);
        $province->delete();
        return redirect()->route('provinces.index')->with([
            'message'=>'Province deleted successfully!'
        ]);
    }
}
