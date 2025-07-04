<?php

namespace App\Http\Controllers;

use App\Models\MuralModel;
use Illuminate\Http\Request;

class MuralController extends Controller
{
 public function index()
{
    $avisos = MuralModel::all(); 
    return view('dashboardsmural.vermural', compact('avisos'));
}

    public function create()
{
    return view('dashboardsmural.escrevermural');  
}

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descricao' => 'required|string',
        ]);

        return redirect()->route('dashboardsmural.mural')->with('success', 'Mural criado.');
    }

    public function show(string $id)
    {
        $mural = [
            'titulo' => 'Exemplo de aviso',
            'descricao' => 'Conteúdo do aviso exibido.',
        ];
        return view('dashboardsmural.show', compact('mural'));
    }

    public function edit(string $id)
    {
        $mural = [
            'titulo' => 'Exemplo para edição',
            'descricao' => 'Conteúdo editável.',
        ];
        return view('dashboardsmural.edit', compact('mural'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descricao' => 'required|string',
        ]);

        return redirect()->route('dashboardsmural.mural')->with('success', 'Mural atualizado.');
    }

    public function destroy(string $id)
    {
        return redirect()->route('dashboardsmural.mural')->with('success', 'Mural excluído.');
    }
}