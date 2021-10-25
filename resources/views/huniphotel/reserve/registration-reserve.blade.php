<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--Fonts-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  <!--Style-->
  <link rel="stylesheet" href="{{url(mix('huniphotel/style.css'))}}">
  <title>Hunip Hotel Reservas</title>
  <style>
    #navigation-bar{
      width: 100%;
      z-index: 100;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark position-fixed" id="navigation-bar">
    <div class="container">
      <a href="{{route('home')}}" class="navbar-brand" style="font-family:'Poppins';font-weight:800;font-size:1rem;">HUNIP <span style="color:#B8891F">HOTEL</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav justify-content-around">
          <li class="nav-item">
            <a href="{{route('home')}}" class="nav-link" target="_self" style="font-family:'Poppins';font-weight:500;font-size:1rem;">HOME</a>
          </li>
          <li class="nav-item">
            <a href="{{route('rooms')}}" class="nav-link" target="_self" style="font-family:'Poppins';font-weight:500;font-size:1rem;">QUARTOS</a>
          </li>
          <li class="nav-item">
            <a href="{{route('about')}}" class="nav-link" target="_self" style="font-family:'Poppins';font-weight:500;font-size:1rem;">SOBRE-NÓS</a>
          </li>
          <li class="nav-item">
            <a href="{{route('reserves')}}" class="nav-link active" target="_self" style="font-family:'Poppins';font-weight:500;font-size:1rem;">RESERVAS</a>
          </li>
        </ul>
      </div>

    </div>
    
  </nav>
  <main>
    <h2 style="text-align:center;padding-top:5rem;font-family:'Poppins';font-weight:800;">CADASTRO</h2>
    <hr>
    <div class="container inputs-registration">
      <form action="">
        <fieldset style="display:flex;flex-direction:column;align-items:center">
          <label for="">Nome Completo</label>
          <input type="text" name="name-input" id="name-input">
          <label for="">Idade</label>
          <input type="number" name="age-input" id="age-input">
          <label for="">Email</label>
          <input type="email" name="email-input" id="email-input">
          <label for="">Senha</label>
          <input type="password" name="password-input" id="password-input">
          <label for="">Confirme a Senha</label>
          <input type="password" name="confirm-password-input" id="confirm-password-input">
          <button type="submit" style="margin-top:1rem;">Cadastre-se</button>
        </fieldset>
      </form>
    </div>
    <hr>
    <p style="text-align:center;margin-top:2rem;">Agora que se cadastrou faça o login</p>
    <div class="botao" style="display:flex;justify-content:center;width:auto;">
      <a href="{{route('login-reserve')}}" class="btn btn-primary button-reserve" style="width: 20%; margin-top: 1rem;font-family:'Poppins';">Login</a>
    </div>
    
  </main>
  <script src="{{url(mix('huniphotel/bootstrap.js'))}}"></script>
</body>
</html>