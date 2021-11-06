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

  <h2>funcionario</h2>
  <hr>
  {{$funcionario->id}} <br>
  {{$funcionario->nome}} <br>
  {{$funcionario->cpf}} <br>
  {{$user->email}}<br>
  {{$user->password}}<br>
  {{$perfil}}<br>
  {{$funcionario->status}}

</body>


</html>
