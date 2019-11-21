<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cidades</title>
</head>
<body>
  <h1>Página Cidades</h1>

  @foreach($listaCidades as $cidade)
    <h4>{{$cidade->nome}}</h4>
  @endforeach

</body>
</html>