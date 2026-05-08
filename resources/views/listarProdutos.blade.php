
@extends('layout')

@section('titulo')
    Produtos
@endsection

@section('conteudo')
    <h2>Produtos</h2>
    <table cellpadding="10" cellspacing="0" border="1">
        <tr style="background-color: #f0f0f0;">
            <th>Nome</th>
            <th>Categoria</th>
            <th>Descrição</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
        @if(isset($produtos))
            @foreach($produtos as $produto)
                <tr>
                    <td>{{ $produto->nome }}</td>
                    <td>{{ $categorias->find($produto->categoria_id)->nome }}</td>
                    <td>{{ $produto->descricao }}</td>
                    <td>{{ $produto->preco }}</td>
                    <td>{{ $produto->quantidade }}</td>
                    <td>
                        <form action="{{route('produtos.edit', $produto->id)}}" method="GET">
                            @csrf
                            <input type="submit" class="link_editar" value="Editar">
                        </form>
                    </td>
                    <td>
                        <form action="{{route('produtos.destroy', $produto->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="link_excluir" value="Excluir">
                        </form>
                    </td>
                </tr>
            @endforeach
        @endif
    </table>
    <br><br>
    
    <form action="{{route('produtos.create')}}" >
        <button type="submit">+ Novo</button>
    </form>
@endsection