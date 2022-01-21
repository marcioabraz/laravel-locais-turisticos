<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Locais</title>
</head>
<body>
    <h1>Editar Locais</h1>
    <a href="/places/delete/{{$place->id}}">Deletar</a>
        <form action="/places/update/{{$place->id}}" method="POST">
        @csrf
            <input type="text" name="name" placeholder="Nome" value="{{$place->name}}"><br><br>
            <input type="text" name="description" placeholder="Descrição" value="{{$place->description}}"><br><br>
            <input type="text" name="address" placeholder="Endereço" value="{{$place->address}}"><br><br>
            <button type="submit">Enviar</button>
        </form>
    </h1>
</body>
</html>