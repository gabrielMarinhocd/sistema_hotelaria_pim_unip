<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,
initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>servico View</title>
</head>

<body>
  <h1>Editar servico</h1>
  <form method="POST" action="{{ url('servico_update') }}/{{
$servico->id }}">
    @csrf
     <input id="categoria" type="text" name="categoria"value="{{$servico->categoria}}"><br/>
    <input id="nome" type="text" name="nome"value={{$servico->nome}}><br/>
    <input id="preco" type="text" name="preco"value="{{$servico->preco}}"><br/>
    <input id="descricao" type="text" name="descricao"value="{{$servico->descricao}}"><br/>
    <button type="submit" class="btn btnprimary">Editar</button>
  </form>
</body>

</html>
