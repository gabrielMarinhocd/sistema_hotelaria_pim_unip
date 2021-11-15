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
  <h1>funcionarios</h1>

  <h2>funcionario</h2>
  @foreach ($funcionarios as $funcionario)
  {{$funcionario->id}} <br>
  {{$funcionario->nome}} <br>
  {{$funcionario->cpf}} <br>
  {{$funcionario->celular}}<br>
  {{$funcionario->id_user}}<br>
  {{$funcionario->status}}

  @endforeach

</body>

</html>
