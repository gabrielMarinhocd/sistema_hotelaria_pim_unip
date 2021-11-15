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

  <h1>reservas</h1>

  <h2>reservas</h2>
  @foreach ($reservas as $reserva)
  {{$reserva->data}} <br>
  {{$reserva->valor}} <br>
  {{$reserva->registro_saida}} <br>
  {{$reserva->registro_entrada}} <br>
  {{$reserva->hospede_id}} <br>
  {{$reserva->status}}
  @endforeach

</body>

</html>



