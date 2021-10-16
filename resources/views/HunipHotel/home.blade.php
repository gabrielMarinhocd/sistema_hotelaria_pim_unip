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
  <link rel="stylesheet" href="{{url(mix('HunipHotel/style.css'))}}">
  <title>Hunip Hotel</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a href="{{route('home')}}" class="navbar-brand" style="font-family:'Poppins';font-weight:800;font-size:1rem;">HUNIP HOTEL</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav justify-content-around">
          <li class="nav-item">
            <a href="{{route('home')}}" class="nav-link active" style="font-family:'Poppins';font-weight:500;font-size:1rem;">HOME</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link" style="font-family:'Poppins';font-weight:500;font-size:1rem;">QUARTOS</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link" style="font-family:'Poppins';font-weight:500;font-size:1rem;">SOBRE-NÓS</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link" style="font-family:'Poppins';font-weight:500;font-size:1rem;">RESERVAS</a>
          </li>
        </ul>
      </div>
      
    </div>
    
  </nav>
  <script src="{{url(mix('HunipHotel/jquery.js'))}}"></script>
  <script src="{{url(mix('HunipHotel/bootstrap.js'))}}"></script>
</body>
</html>