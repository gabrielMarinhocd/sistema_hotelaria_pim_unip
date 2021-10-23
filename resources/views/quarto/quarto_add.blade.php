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
  <h1>Inserir quartos</h1>
    <form method="POST" action="{{ route('quarto_store') }}">
    @csrf

    <input id="numero" type="text" name="numero" placeholder="numero"><br/>
    <input id="camas" type="number" name="camas" placeholder="camas"><br/>
    <input id="andar" type="number" name="andar" placeholder="andar"><br/>
    <input id="tv" type="number" name="tv" placeholder="tv"><br/>
    <input id="arcondicionado" type="number" name="arcondicionado" placeholder="arcondicionado"><br/>
    <input id="descricao" type="text" name="descricao" placeholder="descricao"><br/>
    <input id="img" type="text" name="img" placeholder="img"><br/>
    <button type="submit">Inserir</button>
  </form>
</body>

</html>
