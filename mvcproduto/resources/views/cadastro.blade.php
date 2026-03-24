<!DOCTYPE html>
<html lang="{{ str_replace('_','-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro Produtos</title>
</head>
<body>
    <h1>Cadastro Produtos</h1>

    @if(session('success'))
    <p style="color: green">{{ session('success') }}</p>
@endif

<form action="{{ route('produto.salvar') }}" method="POST">
    @csrf

        <label>Nome:</label>
        <input type="text" name="nome" required value="{{ old('nome') }}">
        <br><br>

        <label>Quantidade:</label>
        <input type="number" name="quantidade" required value="{{ old('quantidade') }}">
        <br><br>

        <label>Preço:</label>
        <input type="number" step="0.01" name="preco" value="{{ old('preco') }}">
        <br><br>

        <input type="submit" value="Cadastrar">
    </form>

    @if($errors->any())
        <div style="color: red">
            <ul>
                @foreach ($errors->all() as $erro)
                    <li>{{$erro}}</li>   
                @endforeach
            </ul>
        </div>
    @endif
</body>
</html>