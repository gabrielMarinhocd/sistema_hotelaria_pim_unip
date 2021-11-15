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
  <h1>Inserir hospedes</h1>
    <form method="POST" action="{{ route('hospede_store') }}">
    @csrf
    <input id="nome" type="text" name="nome" placeholder="nome"><br/>
    <input id="cpf" type="text" name="cpf" placeholder="cpf"><br/>
    <input id="celular" type="text" name="celular" placeholder="celular"><br/>
    <input id="endereco" type="text" name="endereco" placeholder="endereco"><br/>
    <input id="cep" type="text" name="cep" placeholder="cep"><br/>
    <input id="telefone" type="text" name="telefone" placeholder="telefone"><br/>
    <button type="submit">Inserir</button>
  </form>

</body>

</html>
