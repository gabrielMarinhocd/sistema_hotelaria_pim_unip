<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,
initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>perfil View</title>
</head>

<body>
  <h1>Editar perfil</h1>
  <form method="POST" action="{{ url('perfil_update') }}/{{
$perfil->id }}">
    @csrf<input id="nome" type="text" name="nome" value="{{$perfil->nome}}">
    <input id="descriacao" type="text" name="descricao" value="{{$perfil->descricao}}">
    <button type="submit" class="btn btnprimary">Editar</button>
  </form>
</body>


</html>
