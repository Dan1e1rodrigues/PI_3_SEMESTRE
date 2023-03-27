<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <ul>
        @foreach ($produtos as $produto)
            <li>{{$produto -> PRODUTO_NOME}} - {{$produto->PRODUTO_PRECO}}</li>
        @endforeach
    </ul>
</body>
</html>
