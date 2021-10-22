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
  <h1>Inserir perfils</h1>
    <form method="POST" action="{{ route('perfil_store') }}">
    @csrf
    <input id="nome" type="text" name="nome">
    <input id="descricao" type="text" name="descricao">
    <button type="submit">Inserir</button>
  </form>
</body>

</html>
