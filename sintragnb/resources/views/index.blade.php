<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/educaciongrande.jpg') }}">
    <link rel="stylesheet" href="{{ asset('assets/viviendagrande.jpg') }}">
    <title>SintraGNB</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">SINTRAGNB</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">

        <div class="dropdown" >
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="true" >

            </a>

            <div class="dropdown-menu" >
                <a class="dropdown-item" href="#">Texto Convencional</a>
                <a class="dropdown-item" href="#">Póliza exequial</a>
                <a class="dropdown-item" href="#">Cuadro de beneficios economicos</a>
                <a class="dropdown-item" href="#">Seguros</a>
            </div>
        </div>

        <li class="nav-item" class="pb-4 pt-4">
          <a class="nav-link" href="#">Educacion</a>
        </li>
        <li class="nav-item" class="pb-4 pt-4">
          <a class="nav-link" href="#">Vivienda</a>
        </li>
        <li class="nav-item" class="pb-4 pt-4">
          <a class="nav-link" href="#">Auxilios</a>
        </li>
        <li class="nav-item" class="pb-4 pt-4">
          <a class="nav-link" href="#">Primas</a>
        </li>
        <li class="nav-item" class="pb-4 pt-4">
          <a class="nav-link" href="#">Permisos</a>
        </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>
  </div>
</nav>
    <!--/Nabvar -->

    <!-- main -->
<main id= "main">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-pause="false">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <span>Educacion</span>
                <img id="menu"  src="assets/educaciongrande.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">


                </div>
                <div class="carousel-item">
                    <span>vivienda</span>
                    <img src="assets/viviendagrande.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </button>
        </div>

</main>

     <!--/ main -->

    <!--footer-->
       <footer class="pb-4 pt-4">
            <div class="container">
                <div class="row text-center">
                    <div class="col-12 col-lg">
                        <a href="#">Preguntas frecuentes</a>
                    </div>
                    <div class="col-12 col-lg">
                        <a href="#">Contactanos</a>
                    </div>
                </div>
            </div>
       </footer>

    <!--/footer-->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
-->
  </body>
</html>
