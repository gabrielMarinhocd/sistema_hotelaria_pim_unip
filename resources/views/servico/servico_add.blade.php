<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,
initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>servico View</title>
</head>

<body>
  <h1>Inserir servicos</h1>
    <form method="POST" action="{{ route('servico_store') }}">
    @csrf
    <input id="categoria" type="text" name="categoria" placeholder="categoria"><br/>
    <input id="nome" type="text" name="nome" placeholder="nome"><br/>
    <input id="preco" type="text" name="preco" placeholder="preco"><br/>
    <input id="descricao" type="text" name="descricao" placeholder="descricao"><br/>
    <button type="submit">Inserir</button>
  </form>
</body>

</html>
