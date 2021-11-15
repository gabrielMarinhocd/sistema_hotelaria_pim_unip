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
    @includeWhen(auth()->user()->admin, 'elements/menu_admin')
    @includeWhen(auth()->user()->gerente, 'elements/menu_gerente')
    @includeWhen(auth()->user()->atendente, 'elements/menu_atendente')
    @includeWhen(auth()->user()->hospede, 'elements/menu_hospede')
  <h1>Quartos</h1>

  <h2>Quartos</h2>
  @foreach ($quartos as $quarto)
  {{$quarto->id}} <br>
  {{$quarto->numero}} <br>
  {{$quarto->andar}} <br>
  {{$quarto->camas}} <br>
  {{$quarto->tv}} <br>
  {{$quarto->descricao}}<br>
  {{$quarto->img}}<br>
  {{$quarto->status}}
  @endforeach

</body>

</html>
