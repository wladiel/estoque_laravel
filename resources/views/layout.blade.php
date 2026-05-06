<!DOCTYPE html>
<html>
<head>
    <title>@yield('titulo')</title>
    <style>
        a {
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
    </style>
</head>
<body>
    <div style="padding: 10px; text-align: center; background-color: #f0f0f0;">
        <a href="/produtos/create" >Cadastrar</a>
        <a href="/produtos/">Produtos</a>
    </div>
    <div style="display: flex; flex-direction: column; justify-content: center; align-items: center; " >
        @yield('conteudo')
    </div>
    
</body>
</html>