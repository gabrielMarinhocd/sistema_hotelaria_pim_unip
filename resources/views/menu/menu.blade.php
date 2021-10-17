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
  <h1>Menus</h1>

  <h2>Menu</h2>
  @foreach ($menus as $menu)
  {{$menu->id}} <br>
  {{$menu->nome}} <br>
  {{$menu->descricao}}<br>
  {{$menu->status}}
  @endforeach

</body>

</html>
