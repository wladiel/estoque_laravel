
@extends('layout')

@section('titulo')
    Categorias
@endsection

@section('conteudo')
    <h2>Categorias</h2>
    <table cellpadding="10" cellspacing="0" border="1">
        <tr style="background-color: #f0f0f0;">
            <th>Nome</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
        @foreach($categorias as $categoria)
            <tr>
                <td>{{ $categoria->nome }}</td>
                <td>
                    <form action="{{ route('categorias.edit', $categoria) }}" method="GET">
                        @csrf
                        <input type="submit" class="link_editar" value="Editar">
                    </form>
                </td>
                <td>
                    <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="link_excluir" value="Excluir">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <form action="{{ route('categorias.create') }}" method="GET"><br>
        <button type="submit">+ Nova</button>
    </form>
@endsection