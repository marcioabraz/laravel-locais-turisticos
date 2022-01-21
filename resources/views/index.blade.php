<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Locais</title>
</head>
<body>
    <h1>Locais</h1>
    <form action="places/create" method ='GET'>
    <p><a href="places/create">Criar local</a></p>
    <hr>
    @csrf
    @foreach ($places as $place)
         <a href="places/show/{{$place-> id}}"> 
            {{$place-> name}}</a>
    @endforeach 
    </form>
</body>
</html>


