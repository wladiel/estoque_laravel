<!DOCTYPE html>
<html lang="pt-br">
<html>
<head>
    <title>@yield('titulo')</title>
    <style>
        .menu {
            padding: 10px;
            text-align: center;
            background-color: #f0f0f0;
        }
        .menu a {
            text-decoration: none;
            padding: 0 10px;
            color: #000;
        }
        .link_editar {
            color: blue;
        }
        .link_excluir {
            color: red;
        }
        .content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="menu">
        <a href="/produtos/">Produtos</a>
        <a href="/categorias/">Categorias</a>
        <a href="/produtos/create" >Cadastrar produto</a>
        <a href="/categorias/create" >Cadastrar categoria</a>
    </div>
    <div class="content">
        @yield('conteudo')
    </div>
    
</body>
</html>