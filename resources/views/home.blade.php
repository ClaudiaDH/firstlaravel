<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Home</title>
</head>
<body>
  <h1>Página Home</h1>

  @foreach($listaUsuarios as $usuario)
    <h4>{{$usuario->nome}}</h4>
  @endforeach

</body>
</html>