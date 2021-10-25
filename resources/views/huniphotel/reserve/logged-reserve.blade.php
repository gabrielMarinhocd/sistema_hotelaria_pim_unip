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
    <h2 style="text-align:center;padding-top:5rem;font-family:'Poppins';font-weight:800;">RESERVA</h2>
    <hr>
    <div class="container reserva-input">
      <form action="">
        <fieldset style="display:flex;flex-direction:column;align-items:center">
          <label for="date-input">Data</label>
          <input type="date" name="date-input" id="date-input">
          <label for="number-peoples-input">Numero de pessoas</label>
          <input type="number" name="number-peoples-input" id="number-peoples-input">
          <label for="payment-type-input">Tipo de pagamento</label>
          <div id="payment-type-input">
            <input type="checkbox" name="visa-payment" id="visa-payment">Visa
            <input type="checkbox" name="" id="">MasterCard
            <input type="checkbox" name="" id="">Boleto
            <input type="checkbox" name="" id="">PIX
          </div>
          <button type="submit" style="margin-top:1rem;">Reservar</button>
        </fieldset>
        <a href="" data-bs-toggle="modal" data-bs-target="#reserveModal">Reserva Feita.</a>
      </form>
    </div>
    <!--Modal-->
    <div class="modal fade" id="reserveModal" tabindex="-1" aria-labelledby="reserveModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="ReserveModalLabel">Reservas</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Sua reserva foi efetuada com sucesso !!</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary">OK</button>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="{{url(mix('huniphotel/bootstrap.js'))}}"></script>
</body>
</html>