<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,
initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>quarto View</title>
</head>

<body>
  <h1>Editar quarto</h1>
  <form method="POST" action="{{ url('quarto_update') }}/{{
$quarto->id }}">
    @csrf
    <input id="numero" type="text" name="numero" value="{{$quarto->numero}}"><br/>
    <input id="camas" type="number" name="camas" value="{{$quarto->camas}}"><br/>
    <input id="andar" type="number" name="andar" value="{{$quarto->andar}}"><br/>
    <input id="tv" type="number" name="tv" value="{{$quarto->tv}}"><br/>
    <input id="arcondicionado" type="number" name="arcondicionado" value="{{$quarto->arcondicionado}}"><br/>
    <input id="descricao" type="text" name="descricao" value="{{$quarto->descricao}}"><br/>
    <button type="submit" class="btn btnprimary">Editar</button>
  </form>
</body>

</html>
