<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,
initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Menu View</title>
</head>

<body>
  <h1>Perfiss</h1>

  <h2>Perfis</h2>
  @foreach ($perfils as $perfil)
  {{$perfil->id}} <br>
  {{$perfil->nome}} <br>
  {{$perfil->descricao}}<br>
  {{$perfil->status}}
  @endforeach

</body>

</html>
