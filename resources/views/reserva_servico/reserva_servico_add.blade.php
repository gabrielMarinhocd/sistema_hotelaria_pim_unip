<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,
initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>reserva_servico View</title>
</head>

<body>
  <h1>Inserir reserva_servicos</h1>
  <form method="POST" action="{{ route('reserva_servico_store') }}">
    @csrf
    <input id="id_reserva" type="text" name="id_reserva">
    <input id="id_servico" type="text" name="id_servico">
    <button type="submit">Inserir</button>
  </form>
</body>

</html>
