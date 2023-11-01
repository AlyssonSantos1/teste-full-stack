<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listagem de Cervejas</title>
</head>
    <body>
    <label for="">Nome da Cerveja</label>
    <input type="text" disabled placeholder="Nome da Cerveja" name="nome_cerveja" value="{{$cerveja->nome}}">
    <br><br>
    <label for="">Tipo de Cerveja</label>
    <input type="text" disabled placeholder="Tipo de Cerveja" name="tipo_cerveja" value="{{$cerveja->tipo}}">
    <br><br>
    <label for="">Teor Alcolico</label>
    <input type="text" disabled placeholder="Teor Alcolico" name="teor_cerveja" value="{{$cerveja->teoralcolico}}">
    <br><br>
    <label for="">Preco</label>
    <input type="text" disabled placeholder="Preco" name="preco_cerveja" value="{{$cerveja->preco}}">
    <br><br>
    <label for="">Quantidade em Estoque</label>
    <input type="text" disabled placeholder="Quantidade em Estoque" name="estoque_cerveja" value="{{$cerveja->quantidade}}">
    <br><br>
    </body>

</html>
