<?php

namespace App\Http\Controllers;

use App\Models\MuralModel;
use Illuminate\Http\Request;

class MuralController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $itens = Mural::all(); 
        return view('dashboardsmural.index', compact('itens'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboardsmural.registermural');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
     
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descricao' => 'required|string',
        ]);

        MuralModel::create(request()->all());

        return redirect()->route('dashboardsmural.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $mural = MuralModel::findOrFail($id);
        return view('dashboardsmural.show', compact('mural'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       $mural = MuralModel::find($id);
        return view('dashboardsmural.edit', compact('mural'));

        
        if(!$mural)
        {
            return redirect()->route('dashboardsmural.index')->with('error', 'Mural not found');
        }

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descricao' => 'required|string',
        ]);

        $mural = MuralModel::find($id);
        $mural->update($request->all());

        return redirect()->route('dashboardsmural.index')->with('success', 'Mural updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mural = MuralModel::find($id);

        if (!$mural) {
            return redirect()->route('dashboardsmural.index')->with('error', 'Mural not found');
        }

        $mural->delete();

        return redirect()->route('dashboardsmural.index')->with('success', 'Mural deleted successfully');
    }
}
