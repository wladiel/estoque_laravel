@extends('layout')

@section('titulo')
    Cadastro de Produtos
@endsection

@section('conteudo')
    <div>
        <h2>Cadastro de Produtos</h2>
    </div>
    <form action="{{route('produtos.update',['produto' => $produto])}}" method="post" style="width: 300px; text-align: center;">
        <fieldset style="padding: 40px; border: 2px solid #000;">
            @csrf
            @method('PUT')
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" value="{{ $produto->nome }}"><br><br>
            <label for="descricao">Descrição</label>
            <input type="text" name="descricao" id="descricao" value="{{ $produto->descricao }}"><br><br>
            <label for="preco">Preço</label>
            <input type="text" name="preco" id="preco" value="{{ $produto->preco }}"><br><br>
            <label for="quantidade">Quantidade</label>
            <input type="text" name="quantidade" id="quantidade" value="{{ $produto->quantidade }}"><br><br>
            <button type="submit">Salvar</button>
        </fieldset>
    </form>
@endsection