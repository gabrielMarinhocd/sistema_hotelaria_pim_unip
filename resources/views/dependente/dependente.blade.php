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
  <h1>dependentes</h1>

  <h2>dependente</h2>
  @foreach ($dependentes as $dependente)
  {{$dependente->id}}<br>
  {{$dependente->nome}}<br>
  {{$dependente->cpf}}<br>
  {{$dependente->idade}}<br>
  {{$dependente->status}}<br>
  {{$hospede->nome}}<br>
  {{$hospede->cpf}}<br>
  @endforeach

</body>

</html>
