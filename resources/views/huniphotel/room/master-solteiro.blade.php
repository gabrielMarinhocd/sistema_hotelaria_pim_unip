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
  <title>Hunip Hotel Quartos</title>
  <style>
    body{
      background-color: whitesmoke;
    }
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
            <a href="{{route('rooms')}}" class="nav-link active" target="_self" style="font-family:'Poppins';font-weight:500;font-size:1rem;">QUARTOS</a>
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
    <section id="section-quarto" class="container">
      <h2 style="text-align: center;">QUARTO PREMIUM CASAL</h2>
      <hr>
      <div class="box-1" style="display:flex;">
        <div class="imagem-quarto container">
          <img src="{{asset('images/premium-room.jpg')}}" alt="foto do quarto premium" class="img-fluid">
        </div>
        <div class="dados-quarto container" style="border: 1px solid #dddddd; border-radius: 10px; color: #888888;">
          <h3 style="text-align: center; margin-top: 0.5rem;font-weight: 800;">RECURSOS</h3><hr>
          <p>TV DE TELA PLANA</p>
          <p>AR CONDICIONADO</p>
          <p>CANAIS POR SATÉLITE</p>
          <p>COFRE PORTÁTIL</p>
          <p>CANAIS A CABO</p>
          <p>ESPAÇO PARA PASSAR ROUPA</p>
        </div>
      </div>
      <div class="container text-quarto" style="margin-top: 2rem; margin-bottom: 2rem; text-align: center;">
        <h3 style="font-weight: 800;">DESCRIÇÃO</h3>
        <p>
          Para quem busca um quarto funcional, mas com padrão internacional de hospedagem, tem como opção o Quarto Premium Casal. Equipado com cama de casal Queen Size, o apartamento leva consigo uma decoração moderna e enxoval sofisticado.
        </p>
        <p>
          A segurança é um ponto muito trabalhado nas acomodações do Hotel. Aqui você estará seguro, pois o hotel conta com fechaduras magnéticas por cartão, cofre no quarto, alarmes de incêndio e informações emergenciais disponíveis para os hóspedes.
        </p>
        <p>
          Aproveite tudo o que a Avenida Paulista pode oferecer em um dos hotéis mais bem avaliados de São Paulo, o Hunip Hotel.
        </p>
        <a href="{{route('selected-reserve')}}" class="btn btn-warning button-reserve" style="width: 100%; margin-top: 2rem;">Reserve-já</a>
      </div>
    </section>
  </main>
  <script src="{{url(mix('huniphotel/bootstrap.js'))}}"></script>
</body>
</html>