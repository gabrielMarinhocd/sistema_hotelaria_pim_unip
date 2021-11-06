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
  <h1>Inserir funcionarios</h1>
    <form method="POST" action="{{ route('funcionario_store') }}">
    @csrf

    <input id="nome" type="text" name="nome" placeholder="nome"><br/>
    <input id="cpf" type="text" name="cpf" placeholder="cpf"><br/>
    <input id="email" type="text" name="email" placeholder="email"><br/>
    <input id="password" type="text" name="password" placeholder="password"><br/>
    <button type="submit">Inserir</button>
  </form>
</body>

</html>

