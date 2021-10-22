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
  <h1>Editar Menu</h1>
  <form method="POST" action="{{ url('menu_update') }}/{{
$menu->id }}">
    @csrf<input id="nome" type="text" name="nome" value="{{$menu->nome}}">
    <input id="ra" type="text" name="link" value="{{$menu->link}}">
    <button type="submit" class="btn btnprimary">Editar</button>
  </form>
</body>


</html>
