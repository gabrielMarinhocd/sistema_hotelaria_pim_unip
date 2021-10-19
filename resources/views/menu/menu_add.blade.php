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
  <h1>Inserir Menus</h1>
  <form method="POST" action="{{ route('menu_store') }}">
    @csrf
    <input id="nome" type="text" name="nome">
    <input id="descricao" type="text" name="descricao">
    <button type="submit">Inserir</button>
  </form>
</body>

</html>