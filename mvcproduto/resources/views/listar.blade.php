<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Relatorio de Produtos</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>nome</th>
                <th>QUANTIDADE</th>
                <th>PRECO</th>
            </tr>
        </thead>
        <tbody>
            @forelse($produtos as $produto)
            <tr>
                <td>{{$produto->nome}}</td>
                <td>{{$produto->quantidade}}</td>
                <td>{{$produto->preco}}</td>
                <td>
                    <a href="{{route('produto.atualizar', $produto->id)}}">Atualizar</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3">Nenhum Produto encontrado</td>
            </tr>
        @endforelse
        </tbody>
    </table>
</body>
</html>