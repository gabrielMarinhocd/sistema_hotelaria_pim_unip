<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,
initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>dependente View</title>
</head>

<body>
  <h1>Editar dependente</h1>
  <form method="POST" action="{{ url('dependente_update') }}/{{
$dependente->id }}">
    @csrf
    <input id="nome" type="text" name="nome"  value="{{$dependente->nome}}"><br/>
    <input id="cpf" type="text" name="cpf"  value="{{$dependente->cpf}}"><br/>
    <input id="idade" type="text" name="idade"  value="{{$dependente->idade}}"><br/>
    <button type="submit" class="btn btnprimary">Editar</button>
  </form>
</body>

</html>
