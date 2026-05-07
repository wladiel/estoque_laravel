@extends('layout')

@section('titulo')
    Cadastro de Produtos
@endsection

@section('conteudo')
    <div>
        <h2>Nova Categoria</h2>
    </div>
    <form action="{{route('categorias.store')}}" method="post" style="width: 300px; text-align: center;">
        <fieldset style="padding: 40px; border: 2px solid #000;">
            @csrf
            <input type="text" name="nome" placeholder="Nome da categoria"><br><br>
            <button type="submit">Salvar</button>
        </fieldset>
    </form>
@endsection