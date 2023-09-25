<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Cervejas </title>
</head>
<body>
    <form action="/atualizar-cervejas/{{ $cerveja->id }}" method="POST">
        @csrf
        @method("PUT")
        <label for="">Nome da Cerveja</label>
        <input type="text" placeholder="Nome da Cerveja" name="nome_cerveja" value="{{$cerveja->nome}}">
        <br><br>
        <label for="">Tipo de Cerveja</label>
        <input type="text" placeholder="Tipo de Cerveja" name="tipo_cerveja" value="{{$cerveja->tipo}}">
        <br><br>
        <label for="">Teor Alcolico</label>
        <input type="text" placeholder="Teor Alcolico" name="teor_cerveja" value="{{$cerveja->teoralcolico}}">
        <br><br>
        <label for="">Preco</label>
        <input type="text" placeholder="Preco" name="preco_cerveja" value="{{$cerveja->preco}}">
        <br><br>
        <label for="">Quantidade em Estoque</label>
        <input type="text" placeholder="Quantidade em Estoque" name="estoque_cerveja" value="{{$cerveja->quantidade}}">
        <br><br>
        <button>Enviar</button>
    </form>

</body>
</html>
