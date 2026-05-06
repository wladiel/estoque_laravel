
@extends('layout')

@section('titulo')
    Produtos
@endsection

@section('conteudo')
    <h2>Produtos</h2>
    <table cellpadding="10" cellspacing="0" border="1">
        <tr style="background-color: #f0f0f0;">
            <th>Nome</th>
            <th>Descrição</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
        @foreach($produtos as $produto)
            <tr>
                <td>{{ $produto->nome }}</td>
                <td>{{ $produto->descricao }}</td>
                <td>{{ $produto->preco }}</td>
                <td>{{ $produto->quantidade }}</td>
                <td>
                    <a class="link_editar" href="{{route('produtos.edit', $produto)}}">Editar</a>
                </td>
                <td>
                    <a class="link_excluir" href="{{ route('produtos.delete', ['id' => $produto->id]) }}">Excluir</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection