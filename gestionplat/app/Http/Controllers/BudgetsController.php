<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;


class BudgetsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $budgets = Budget::all();
        return view('budgets.index')->with([
            'budgets' => $budgets
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('budgets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
                    
                    'exercice' => 'required',
                    'gestfplat' => 'required',
                    'aidempj' => 'required',
                    'entrjeu' => 'required',
                    'soutess' => 'required',
                    'foraccje' => 'required'
            ]);
        $budget = new Budget();
        $budget->exercice = $request->exercice;
        $budget->gestfplat = $request->gestfplat;
        $budget->aidempj = $request->aidempj;
        $budget->entrjeu = $request->entrjeu;
        $budget->soutess = $request->soutess;
        $budget->foraccje = $request->foraccje;
        $budget->save();
        return redirect()->route('budgets.index')->with([
            'success' => "Budget added successfully"
        
        ]);
    }


    /**
     * Display the specified resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show(string $id)
    {
        //
        $budget = Budget::find($id);
        return view('budgets.show')->with([
            'budget' => $budget
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $budget = Budget::find($id);
        return view('budgets.edit')->with([
            'budget' => $budget
        ]);


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $this->validate($request,[
                        
                    'exercice' => 'required',
                    'gestfplat' => 'required',
                    'aidempj' => 'required',
                    'entrjeu' => 'required',
                    'soutess' => 'required',
                    'foraccje' => 'required'
            ]);
        $budget = Budget::find($id);
        $budget->exercice = $request->exercice;
        $budget->gestfplat = $request->gestfplat;
        $budget->aidempj = $request->aidempj;
        $budget->entrjeu = $request->entrjeu;
        $budget->soutess = $request->soutess;
        $budget->foraccje = $request->foraccje;
        $budget->save();
        return redirect()->route('budgets.index')->with([
            'success' => "Budget updated successfully"
        
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $budget = Budget::find($id);
        $budget->delete();
        return redirect()->route('budgets.index')->with([
            'success' => "Budget deleted successfully"
        
        ]);

    }
}
