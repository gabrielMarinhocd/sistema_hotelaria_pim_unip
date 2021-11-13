<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,
initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>dependente View</title>
</head>

<body>
  <h1>Inserir dependentes</h1>
    <form method="POST" action="{{ route('dependente_store') }}">
    @csrf
    <input id="nome" type="text" name="nome" placeholder="nome"><br/>
    <input id="cpf" type="text" name="cpf" placeholder="cpf"><br/>
    <input id="idade" type="text" name="idade" placeholder="idade"><br/>
    <input id="hospede_id" type="text" name="hospede_id" placeholder="hospede_id"><br/>
    <button type="submit">Inserir</button>
  </form>

</body>

</html>
