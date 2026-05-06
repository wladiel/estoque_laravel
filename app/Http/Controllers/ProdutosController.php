<?php

namespace App\Http\Controllers;

use App\Models\produtos;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produtos = Produtos::all();
        return view('listarProdutos', compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formCreateProduto');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Produtos::create($request->all());
        return redirect()->route('produtos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(produtos $produto)
    {
        return view('formEditProduto', compact('produto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, produtos $produto)
    {
    $produtoFind = Produtos::find($produto->id);    
    
        $produtoFind->nome = $request->nome;
        $produtoFind->descricao = $request->descricao;
        $produtoFind->preco = $request->preco;
        $produtoFind->quantidade = $request->quantidade;
        $produtoFind->update($produtoFind->toArray());
        return redirect()->route('produtos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        Produtos::destroy($id);
        return redirect()->route('produtos.index');
    }
}
