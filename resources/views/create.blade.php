<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Locais</title>
</head>
<body>
    <form action="/places/store" method="POST"> @csrf
        <input type="text" name='name' placeholder="Nome">
        <input type="text" name='description' placeholder="Descrição">
        <input type="text" name='address' placeholder="Endereço">
        <input type="submit" name='submit' placeholder="Enviar">
    </form>
</body>
</html>