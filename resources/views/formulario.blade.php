<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="/formulario">
    <!--para conseguir enviar info no formulario-->
    @csrf
        <input type="text" name="nome" id="">
        <input type="number" name="idade" id="">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>