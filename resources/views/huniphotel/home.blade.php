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
  <style>
    #navigation-bar{
      width: 100%;
      z-index: 100;
    }
    #presentation h2{
      font-family: 'Poppins';
      font-weight: 800;
      font-size: 3.5rem;
      top: 18rem;
      left: 4rem;
    }
    #presentation p{
      font-family: 'Poppins';
      font-weight: 500;
      font-size: .9rem;
      top: 27rem;
      left: 5rem;
    }
    #imagem-hotel{
      z-index: -1;
      height: 100vh;
      width: 100vw;
    }
  </style>
  <title>Hunip Hotel</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark position-fixed" id="navigation-bar">
    <div class="container">
      <a href="{{route('home')}}" target="_self" class="navbar-brand" style="font-family:'Poppins';font-weight:800;font-size:1rem;">HUNIP <span style="color:#B8891F">HOTEL</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav justify-content-around">
          <li class="nav-item">
            <a href="{{route('home')}}" class="nav-link active" target="_self" style="font-family:'Poppins';font-weight:500;font-size:1rem;">HOME</a>
          </li>
          <li class="nav-item">
            <a href="{{route('rooms')}}" class="nav-link" target="_self" style="font-family:'Poppins';font-weight:500;font-size:1rem;">QUARTOS</a>
          </li>
          <li class="nav-item">
            <a href="{{route('about')}}" class="nav-link" target="_self" style="font-family:'Poppins';font-weight:500;font-size:1rem;">SOBRE-NÓS</a>
          </li>
          <li class="nav-item">
            <a href="{{route('reserves')}}" class="nav-link" target="_self" style="font-family:'Poppins';font-weight:500;font-size:1rem;">RESERVAS</a>
          </li>
        </ul>
      </div>

    </div>
    
  </nav>
  <main>
    <section id="presentation">
      <img id="imagem-hotel" src="{{asset('images/hotel-photo.png')}}" alt="imagem de frente do hotel" class="img-fluid position-absolute">
      <h2 class="text-white position-absolute">O MELHOR HOTEL<br>DO MUNDO</h2>
      <p class="text-white position-absolute">Esse hotel faz parte de um projeto da faculdade<br> logo não existe</p>
    </section>
    
  </main>
  <script src="{{url(mix('huniphotel/jquery.js'))}}"></script>
  <script src="{{url(mix('huniphotel/bootstrap.js'))}}"></script>
</body>
</html>