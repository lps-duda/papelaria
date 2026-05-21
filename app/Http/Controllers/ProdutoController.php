<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Http\Requests\ProdutoRequest;
use Illuminate\Support\Facades\Storage;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::all();
        return view('produtos.index', compact('produtos'));
    }

    public function create()
    {
        return view('produtos.create');
    }

    public function store(ProdutoRequest $request)
    {
        $dados = $request->validated();

        if ($request->hasFile('imagem')) {
            $dados['imagem'] = $request->file('imagem')->store('produtos', 'public');
        }

        Produto::create($dados);

        return redirect()->route('produtos.index')
            ->with('sucesso', 'Produto cadastrado com sucesso!');
    }

    public function show(Produto $produto)
    {
        return view('produtos.show', compact('produto'));
    }

    public function edit(Produto $produto)
    {
        return view('produtos.edit', compact('produto'));
    }

    public function update(ProdutoRequest $request, Produto $produto)
    {
        $dados = $request->validated();

        if ($request->hasFile('imagem')) {
            if ($produto->imagem) {
                Storage::disk('public')->delete($produto->imagem);
            }
            $dados['imagem'] = $request->file('imagem')->store('produtos', 'public');
        }

        $produto->update($dados);

        return redirect()->route('produtos.index')
            ->with('sucesso', 'Produto atualizado com sucesso!');
    }

    public function destroy(Produto $produto)
    {
        if ($produto->imagem) {
            Storage::disk('public')->delete($produto->imagem);
        }

        $produto->delete();

        return redirect()->route('produtos.index')
            ->with('sucesso', 'Produto excluído com sucesso!');
    }
}