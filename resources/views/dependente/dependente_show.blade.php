<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,
initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>hospede View</title>
</head>

<body>
    @includeWhen(auth()->user()->admin, 'elements/menu_admin')
    @includeWhen(auth()->user()->gerente, 'elements/menu_gerente')
    @includeWhen(auth()->user()->atendente, 'elements/menu_atendente')
    @includeWhen(auth()->user()->hospede, 'elements/menu_hospede')

  <h2>dependente</h2>
  <hr>
  {{$dependente->id}} <br>
  {{$dependente->nome}} <br>
  {{$dependente->cpf}} <br>
  {{$hospede->cpf}} <br>
  {{$hospede->nome}} <br>
  {{$dependente->status}}

</body>


</html>
