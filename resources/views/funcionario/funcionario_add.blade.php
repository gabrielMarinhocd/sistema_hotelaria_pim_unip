<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,
initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>funcionario View</title>
</head>

<body>
    @includeWhen(auth()->user()->admin, 'elements/menu_admin')
    @includeWhen(auth()->user()->gerente, 'elements/menu_gerente')
    @includeWhen(auth()->user()->atendente, 'elements/menu_atendente')
    @includeWhen(auth()->user()->hospede, 'elements/menu_hospede')
  <h1>Inserir funcionarios</h1>
    <form method="POST" action="{{ route('funcionario_store') }}">
    @csrf

    <input id="nome" type="text" name="nome" placeholder="nome"><br/>
    <input id="cpf" type="text" name="cpf" placeholder="cpf"><br/>
    <input id="email" type="text" name="email" placeholder="email"><br/>
    <input id="password" type="text" name="password" placeholder="password"><br/>
    <input id="perfil" type="text" name="perfil" placeholder="perfil"><br/>
    <button type="submit">Inserir</button>
  </form>
</body>

</html>

