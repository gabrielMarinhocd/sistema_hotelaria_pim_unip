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
    {{-- @includeWhen(auth()->user()->admin, 'elements/menu_admin')
    @includeWhen(auth()->user()->gerente, 'elements/menu_gerente')
    @includeWhen(auth()->user()->atendente, 'elements/menu_atendente')
    @includeWhen(auth()->user()->hospede, 'elements/menu_hospede') --}}
  <h1>Inserir reserva_servicos</h1>
  <form method="POST" action="{{ route('servicos_reserva_store') }}">
    @csrf
    <input id="reserva_id" type="text" name="reserva_id">
    <input id="servico_id" type="text" name="servico_id">
    <button type="submit">Inserir</button>
  </form>
</body>

</html>
