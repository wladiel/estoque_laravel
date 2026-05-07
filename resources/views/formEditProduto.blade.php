@extends('layout')

@section('titulo')
    Editar produto
@endsection

@section('conteudo')
    <div>
        <h2>Editar Produto</h2>
    </div>
    <form action="{{route('produtos.update',['produto' => $produto])}}" method="post" style="width: 300px; text-align: center;">
        <fieldset style="padding: 40px; border: 2px solid #000;">
            @csrf
            @method('PUT')
            <input type="text" name="nome" id="nome" value="{{ $produto->nome }}"><br><br>
            <input type="text" name="descricao" id="descricao" value="{{ $produto->descricao }}"><br><br>
            <input type="text" name="preco" id="preco" value="{{ $produto->preco }}"><br><br>
            <input type="text" name="quantidade" id="quantidade" value="{{ $produto->quantidade }}"><br><br>
            <button type="submit">Salvar</button>
        </fieldset>
    </form>
@endsection