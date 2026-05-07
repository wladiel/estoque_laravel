@extends('layout')

@section('titulo')
    Cadastro de Produtos
@endsection

@section('conteudo')
    <style>
        .form-container {
            width: 200px;
            text-align: center;
        }
        .form-fieldset {
            padding: 40px;
            border: 2px solid #000;
        }
    </style>
    <div>
        <h2>Novo Produto</h2>
    </div>
    <form action="{{route('produtos.store')}}" method="post" class="form-container">
        <fieldset class="form-fieldset">
            @csrf
            <input type="text" name="nome" placeholder="Nome do produto"><br><br>
            <input type="text" name="descricao" placeholder="Descrição do produto"><br><br>
            <input type="text" name="preco" placeholder="Preço do produto"><br><br>
            <input type="text" name="quantidade" id="quantidade" placeholder="Quantidade do produto"><br><br>
            <button type="submit">Salvar</button>
        </fieldset>
    </form>
@endsection