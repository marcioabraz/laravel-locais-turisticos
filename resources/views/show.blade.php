<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Locais</title>
</head>
<body>@csrf
    <h1>Detalhes do Local</h1>
    <a href="/places/edit/{{$place->id}}">Editar</a>
    <h2>{{$place->name}}/</h2>
    <h4>{{$place->description}}</h4>
    <p>{{$place->address}}</p>
</body>
</html>