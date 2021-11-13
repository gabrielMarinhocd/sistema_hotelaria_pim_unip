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
  <h1>reserva_servicos</h1>

  <h2>reserva_servicos</h2>
  @foreach ($reserva_servicos as $reserva_servico)
  {{$reserva_servico->reserva_id}} <br>
  {{$reserva_servico->servico_id}} <br>

  @endforeach

</body>

</html>
