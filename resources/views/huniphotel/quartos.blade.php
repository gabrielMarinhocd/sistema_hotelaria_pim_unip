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
    #section-quartos h2{
      padding-top: 15rem;
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
      margin-top: 1.5rem;
      margin-bottom: 2rem !important;
      box-shadow: 0px 0px 12px rgba(0, 0, 0, 0.09);
    }
    #section-quartos .line-quartos .card a.card-title{
      transition: color .2s;
    }
    #section-quartos .line-quartos .card a.card-title:hover{
      color: #735B22 !important;
    }
    @media (max-width: 1200px){
      #section-quartos .line-quartos{
        flex-direction: column;
      }
      #section-quartos .line-quartos .card{
        margin-bottom: 1rem !important;
      }
    }
    @media (max-width: 991px){
      #section-quartos .line-quartos{
        align-items: center;
      }
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
      <h2 class="text-black">QUARTOS E SUÍTES</h2>
      <hr>
      <div class="cards-quartos container">
        <div class="line-quartos container">
          <div class="card mb-3" style="max-width: 500px; max-height: 194.4px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{asset('images/premium-room.jpg')}}" class="img-fluid rounded-start" style="width: 100%; height: 100%;object-fit:cover;" alt="foto do quarto premium">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <a href="{{route('quarto-premium-casal')}}" target="_self" class="card-title" style="font-family:'Poppins';font-weight:800;font-size:1.1rem;color:#B8891F;text-decoration:none;">QUARTO PREMIUM CASAL</a>
                  <p class="card-text" style="font-family:'Poppins';font-weight:600;">O Quarto Luxo Premium oferece acomodações 5 estrelas com varandas privativas.</p>
                  <p class="card-text"><small class="text-muted" style="font-size:.8rem">Casais particularmente gostam da localização eles deram nota 9,7 para viagem a dois. </small></p>
                </div>
              </div>
            </div>
          </div>

          <div class="card mb-3" style="max-width: 500px; max-height: 194.4px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{asset('images/twinsolteiro.jpg')}}" class="img-fluid rounded-start" style="width: 100%; height: 99%;object-fit:cover;" alt="foto do quarto duplo solteiro premium">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <a href="{{route('premium-twin-solteiro')}}" target="_self" class="card-title" style="font-family:'Poppins';font-weight:800;font-size:1.1rem;color:#B8891F;text-decoration:none;">PREMIUM TWIN SOLTEIRO</a>
                  <p class="card-text" style="font-family:'Poppins';font-weight:600;">Em andares mais altos que os Master Twin Solteiros, o Premium Twin dispõe de uma bela vista e decoração nos mínimos detalhes.</p>
                  <p class="card-text"><small class="text-muted" style="font-size:.8rem">É o quarto que os hospedes mais elogiam</small></p>
                </div>
              </div>
            </div>
          </div>

        </div>
        
        <div class="line-quartos container">
          <div class="card mb-3" style="max-width: 500px; max-height: 194.4px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{asset('images/mastercasal.webp')}}" class="img-fluid rounded-start" style="width: 100%; height: 99%;object-fit:cover;" alt="foto do quarto master casal">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <a href="{{route('quarto-master-casal')}}" target="_self" class="card-title" style="font-family:'Poppins';font-weight:800;font-size:1.1rem;color:#B8891F;text-decoration:none;">QUARTO MASTER CASAL</a>
                  <p class="card-text" style="font-family:'Poppins';font-weight:600;">A Suíte Master Casal é ideal para clientes que querem uma viajem mais tranquila e aconchegante.</p>
                  <p class="card-text" ><small class="text-muted" style="font-size:.8rem">O quarto é muito reinvindicado por casais para passar o ano novo</small></p>
                </div>
              </div>
            </div>
          </div>

          <div class="card mb-3" style="max-width: 500px; max-height: 194.4px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{asset('images/mastertwinsolteiro.jpg')}}" class="img-fluid rounded-start" style="width: 100%; height: 99%;object-fit:cover;" alt="foto do quarto duplo solteiro master">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <a href="{{route('master-solteiro')}}" target="_self" class="card-title" style="font-family:'Poppins';font-weight:800;font-size:1.1rem;color:#B8891F;text-decoration:none;">MASTER SOLTEIRO</a>
                  <p class="card-text" style="font-family:'Poppins';font-weight:600;">O quarto Master Solteiro um apartamento que cuida do seu descanso com conforto e praticidade.</p>
                  <p class="card-text" ><small class="text-muted" style="font-size:.8rem">O quarto mais pedido do hotel</small></p>
                </div>
              </div>
            </div>
          </div>
          
        </div>

        <div class="line-quartos container">
          <div class="card mb-3" style="max-width: 500px; max-height: 194.4px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{asset('images/standartcasal.webp')}}" class="img-fluid rounded-start" style="width: 100%; height: 100%;object-fit:cover;" alt="foto do quarto standart casal">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <a href="{{route('quarto-standart-casal')}}" target="_self" class="card-title" style="font-family:'Poppins';font-weight:800;font-size:1.1rem;color:#B8891F;text-decoration:none;">QUARTO STANDART CASAL</a>
                  <p class="card-text" style="font-family:'Poppins';font-weight:600;">Para quem busca um quarto funcional, mas com padrão internacional de hospedagem e conforto.</p>
                  <p class="card-text" ><small class="text-muted" style="font-size:.8rem">O quarto mais reinvindicado por casais</small></p>
                </div>
              </div>
            </div>
          </div>

          <div class="card mb-3" style="max-width: 500px; max-height: 194.4px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{asset('images/standarttwinsolteiro.webp')}}" class="img-fluid rounded-start" style="width: 100%; height: 66%;object-fit:cover;" alt="foto do quarto duplo solteiro standart">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <a href="{{route('standart-twin-solteiro')}}" target="_self" class="card-title" style="font-family:'Poppins';font-weight:800;font-size:1.1rem;color:#B8891F;text-decoration:none;">STANDART TWIN SOLTEIRO</a>
                  <p class="card-text" style="font-family:'Poppins';font-weight:600;">Para quem busca um quarto confortável, mas com design clean para maior concentração no trabalho.</p>
                  <p class="card-text"><small class="text-muted" style="font-size:.8rem">É o quarto mais ultilizado por viagens á trabalho</small></p>
                </div>
              </div>
            </div>
          </div>
          
        </div>
        
        
      </div>
      
    </section>
  </main>
  
  <script src="{{url(mix('huniphotel/bootstrap.js'))}}"></script>
</body>
</html>