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
  <title>Hunip Hotel Quartos</title>
  <style>
    body{
      background-color: black;
    }
    #navigation-bar{
      width: 100%;
      z-index: 100;
    }
    #section-quartos h2{
      padding-top: 15rem;
      padding-bottom: 5rem;
      font-family: 'Poppins';
      font-weight: 800;
      font-size: 2rem;
    }
    #section-quartos .line-quartos{
      display: flex;
      flex-direction: row;
      justify-content: space-around;
    }
    #section-quartos .line-quartos .card{
      margin-bottom: 2rem !important;
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
            <a href="{{route('quartos')}}" class="nav-link active" target="_self" style="font-family:'Poppins';font-weight:500;font-size:1rem;">QUARTOS</a>
          </li>
          <li class="nav-item">
            <a href="{{route('about')}}" class="nav-link" target="_self" style="font-family:'Poppins';font-weight:500;font-size:1rem;">SOBRE-NÓS</a>
          </li>
          <li class="nav-item">
            <a href="{{route('reservas')}}" class="nav-link" target="_self" style="font-family:'Poppins';font-weight:500;font-size:1rem;">RESERVAS</a>
          </li>
        </ul>
      </div>

    </div>
    
  </nav>
  <main>
    <!--OS CARDS AINDA NÃO ESTÃO RESPONSIVOS, PRECISA FAZER UM BREAKPOINT PARA DISPOSITIVOS MENORES-->
    <!--TROCANDO O FLEX-DIRECTION PARA COLUNAS E ALINHANDO OS CARDS NO CENTRO-->
    <section id="section-quartos" class="container">
      <h2 class="text-white">QUARTOS</h2>
      <div class="cards-quartos container">
        <div class="line-quartos container">
          <div class="card mb-3" style="max-width: 500px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{asset('images/premium-room.jpg')}}" class="img-fluid rounded-start" style="width: 100%; height: 100%;object-fit:cover;" alt="foto do quarto premium">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <a class="card-title" style="font-family:'Poppins';font-weight:800;font-size:1.1rem;color:#B8891F;text-decoration:none;">QUARTO PREMIUM</a>
                  <p class="card-text" style="font-family:'Poppins';font-weight:600;">O Quarto Luxo Premium oferece acomodações 5 estrelas com varandas privativas.</p>
                  <p class="card-text"><small class="text-muted" style="font-size:.8rem">Casais particularmente gostam da localização eles deram nota 9,7 para viagem a dois. </small></p>
                </div>
              </div>
            </div>
          </div>

          <div class="card mb-3" style="max-width: 500px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="..." class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
          </div>

        </div>
        
        <div class="line-quartos container">
          <div class="card mb-3" style="max-width: 500px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="..." class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
          </div>

          <div class="card mb-3" style="max-width: 500px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="..." class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
          </div>
          
        </div>

        <div class="line-quartos container">
          <div class="card mb-3" style="max-width: 500px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="..." class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
          </div>

          <div class="card mb-3" style="max-width: 500px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="..." class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
          </div>
          
        </div>
        
        
      </div>
      
    </section>
  </main>
  
  <script src="{{url(mix('HunipHotel/bootstrap.js'))}}"></script>
</body>
</html>