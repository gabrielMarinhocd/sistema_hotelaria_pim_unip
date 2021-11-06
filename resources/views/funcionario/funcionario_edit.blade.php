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
  <h1>Editar funcionario</h1>
  <form method="POST" action="{{ url('funcionario_update') }}/{{
$funcionario->id }}">
    @csrf
    <input id="nome" type="text" name="nome"  value="{{$funcionario->nome}}"><br/>
    <input id="cpf" type="text" name="cpf"  value="{{$funcionario->cpf}}"><br/>
    <input id="email" type="text" name="email"  value="{{$user->email}}"><br/>
    <input id="password" type="text" name="password"  value="{{$user->password}}"><br/>
    <?php
    $perfil = '';
    if ($user->admin == 1){
        $perfil = 'admin';
    }else if ($user->atendente == 1){
        $perfil = 'atendente';
    }else if ($user->hospede == 1){
        $perfil = 'hospede';
    }
    ?>
    <input id="perfil" type="text" name="perfil"  value="{{$perfil}}"><br/>
    <button type="submit" class="btn btnprimary">Editar</button>
  </form>
</body>

</html>
