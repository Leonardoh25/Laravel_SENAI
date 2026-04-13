<!DOCTYPE html>
<html lang="{{str_replace('_','-', app()->getLocale())}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro Biblioteca</title>
</head>
<body>
    <h1>Cadastro Biblioteca</h1>

    @if(session('success'))
    <p style="color:green">{{session('success')}}</p>
@endif

<form action="{{route('produto.salvar')}}"method="pOST">
    @csrf

        <label>Nome:</label>
        <input type="text" name="nome" required value="{{ old('nome') }}">
        <br><br>

        <label>Autor:</label>
        <input type="text" name="autor" required value="{{ old('autor') }}">
        <br><br>

        <label>Descrição:</label>
        <input type="text" name="descricao" required value="{{ old('descricao') }}">
        <br><br>

        <label>Publicação:</label>
        <input type="date" name="publicacao" required value="{{ old('publicacao') }}">
        <br><br>

        <label>Setores:</label>
        <input type="text" name="setores" required value="{{ old('setores') }}">
        <br><br>

        <label>Custo:</label>
        <input type="number" step="0.01" nome="custo" value="{{ old('custo') }}">
        <br><br>

        <label>Preço:</label>
        <input type="number" step="0.01" name="preco" value="{{ old('preco') }}">
        <br><br>

        <label>Inposto:</label>
        <input type="number" step="0.01" name="inposto" value="{{ old('inposto') }}">
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