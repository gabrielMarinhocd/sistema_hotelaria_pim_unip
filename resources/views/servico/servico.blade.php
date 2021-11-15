<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,
initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Servico View</title>
</head>

<body>
    @includeWhen(auth()->user()->admin, 'elements/menu_admin')
    @includeWhen(auth()->user()->gerente, 'elements/menu_gerente')
    @includeWhen(auth()->user()->atendente, 'elements/menu_atendente')
    @includeWhen(auth()->user()->hospede, 'elements/menu_hospede')
  <h1>servicos</h1>

  <h2>servicos</h2>
  @foreach ($servicos as $servico)
  {{$servico->categoria}} <br>
  {{$servico->nome}} <br>
  {{$servico->preco}} <br>
  {{$servico->descricao}} <br>
  {{$servico->status}} <br>
  @endforeach

</body>

</html>
