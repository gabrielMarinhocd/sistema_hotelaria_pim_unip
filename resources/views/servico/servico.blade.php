<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,
initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Servico View</title>
</head>

<body>
  <h1>servicos</h1>

  <h2>servicos</h2>
  @foreach ($servicos as $servico)
  {{$servico->categoria}} <br>
  {{$servico->nome}} <br>
  {{$servico->preco}} <br>
  {{$servico->descriacao}} <br>
  {{$servico->status}} <br>
  @endforeach

</body>

</html>
