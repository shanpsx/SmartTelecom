<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plano;

class PlanoController extends Controller
{
    
    public function index()
    {
        $planos = Plano::all();
        return view('planos.index', compact('planos'));
    }

    public function show($id)
    {
        $plano = Plano::findOrFail($id);
        return view('planos.show', compact('plano'));
    }

    public function create()
    {
        return view('planos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'preco' => 'required|numeric',
            'descricao' => 'nullable|string',
        ]);

        Plano::create([
            'nome' => $request->nome,
            'preco' => $request->preco,
            'descricao' => $request->descricao,
        ]);

        return redirect()->route('dashboard')->with('success', 'Plano adicionado com sucesso!');
    }

    public function edit(Plano $plano)
    {
        return view('planos.edit', compact('plano'));
    }

    public function update(Request $request, $id)
    {

    dd($request->all());
    Log::info('Método update chamado.');
    $plano = Plano::findOrFail($id);
    
    // Atribuição direta dos valores dos campos do formulário aos atributos do modelo
    $plano->nome = $request->input('nome');
    $plano->preco = $request->input('preco');
    $plano->descricao = $request->input('descricao');
    $plano->fill($request->all());
    
    $plano->save();

    return redirect()->route('dashboard')->with('success', 'Plano atualizado com sucesso!');
    }

    public function escolher()
    {
        $planos = Plano::all();
        return view('planos.escolher', compact('planos'));
    }

    public function destroy($id)
    {
        $plano = Plano::findOrFail($id);
        $plano->delete();

        return redirect()->route('dashboard')->with('success', 'Plano excluído com sucesso!');
    }
    
}