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
  <h1>hospedes</h1>

  <h2>hospede</h2>
  @foreach ($hospedes as $hospede)
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

  @endforeach

</body>

</html>
