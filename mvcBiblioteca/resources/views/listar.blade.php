<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Relatorio da Biblioteca</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>AUTOR</th>
                <th>DESCRICAO</th>
                <th>PAGINAS</th>
                <th>PUBLICACAO</th>
                <th>SETORES</th>
                <th>CUSTO</th>
                <th>PRECO</th>
                <th>INPOSTO</th>
            </tr>
        </thead>
        <tbody>
            @forelse($bibiotecas as $biblioteca)
            <tr>
                <td>{{$biblioteca->id}}</td>
                <td>{{$biblioteca->nome}}</td>
                <td>{{$biblioteca->autor}}</td>
                <td>{{$biblioteca->descricao}}</td>
                <td>{{$biblioteca->paginas}}</td>
                <td>{{$biblioteca->publicacao}}</td>
                <td>{{$biblioteca->setores}}</td>
                <td>{{$biblioteca->custo}}</td>
                <td>{{$biblioteca->preco}}</td>
                <td>{{$biblioteca->inposto}}</td>
                <td>
                    <a href="{{route('biblioteca.atualizar', 1)}}">Atualizar</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3">Nenhum Livro encontrado</td>
            </tr>
        @endforelse
        </tbody>
    </table>
</body>
</html>