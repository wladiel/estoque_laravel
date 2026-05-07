@extends('layout')

@section('titulo')
    Editar categoria
@endsection

@section('conteudo')
    <div>
        <h2>Editar categoria</h2>
    </div>
    <form action="{{route('categorias.update', ['categoria' => $categoria])}}" method="post" style="width: 300px; text-align: center;">
        <fieldset style="padding: 40px; border: 2px solid #000;">
            @csrf
            @method('PUT')
            <input type="text" name="nome" id="nome" value="{{ $categoria->nome }}"><br><br>
            <button type="submit">Salvar</button>
        </fieldset>
    </form>
@endsection