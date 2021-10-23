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
  <h1>Editar hospede</h1>
  <form method="POST" action="{{ url('hospede_update') }}/{{
$hospede->id }}">
    @csrf
    <input id="nome" type="text" name="nome"  value="{{$hospede->nome}}"><br/>
    <input id="cpf" type="text" name="cpf"  value="{{$hospede->cpf}}"><br/>
    <input id="email" type="text" name="email"  value="{{$hospede->email}}"><br/>
    <input id="senha" type="text" name="senha"  value="{{$hospede->senha}}"><br/>
    <input id="celular" type="text" name="celular"  value="{{$hospede->celular}}"><br/>
    <input id="endereco" type="text" name="endereco"  value="{{$hospede->endereco}}"><br/>
    <input id="cep" type="text" name="cep"  value="{{$hospede->cep}}"><br/>
    <input id="telefone" type="text" name="telefone"  value="{{$hospede->telefone}}"><br/>
    <button type="submit" class="btn btnprimary">Editar</button>
  </form>
</body>

</html>
