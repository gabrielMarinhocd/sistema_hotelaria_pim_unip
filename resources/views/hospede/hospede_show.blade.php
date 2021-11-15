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
  <h2>hospede</h2>
  <hr>
  {{$hospede->id}} <br>
  {{$hospede->nome}} <br>
  {{$hospede->cpf}} <br>
  {{$hospede->email}}<br>
  {{$hospede->senha}}<br>
  {{$hospede->celular}}<br>
  {{$hospede->endereco}}<br>
  {{$hospede->cep}}<br>
  {{$hospede->telefone}}
  {{$hospede->status}}

</body>


</html>
