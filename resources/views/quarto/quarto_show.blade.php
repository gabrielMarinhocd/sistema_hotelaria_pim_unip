<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,
initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>quarto View</title>
</head>

<body>
    @includeWhen(auth()->user()->admin, 'elements/menu_admin')
    @includeWhen(auth()->user()->gerente, 'elements/menu_gerente')
    @includeWhen(auth()->user()->atendente, 'elements/menu_atendente')
    @includeWhen(auth()->user()->hospede, 'elements/menu_hospede')

  <h2>quarto</h2>
  <hr>
  <p> {{$quarto->id}} </p>
  <p>{{$quarto->nome}} </p>
  <p>{{$quarto->descricao}}</p>
  <p>{{$quarto->status}}</p>

</body>


</html>
