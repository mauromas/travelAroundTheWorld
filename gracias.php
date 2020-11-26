<?php

//LLamando a los Campos
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['email'];
$mensaje = $_POST['mensaje'];


//Datos para el Correo
$destinatario = "mauro.mas.1997@gmail.com";
$asunto = "Contacto";

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Consulta: $mensaje";


//Enviando Correo
mail($destinatario, $asunto, $carta);






?> 
<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <title>Travel Around The world</title>
</head>

<body data-spy="scroll" data-target="#navbar" data-offset="40">

    <!-- header -->
    <nav id="header" class="navbar navbar-expand-lg navbar-dark fondo sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="img/logo1.jpg" alt="logo"> Viaja y Disfruta!
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Volver</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>
    <!-- /header -->




    <!-- Formulario-->
    <section id="formulario" class="pb-4 pt-4">
        <div class="container">
            </div>
            <div class="row">
                <div class="col col-md-10 offset-md-1 col-lg-8 offset-lg-2 pt-2">
                    <form action="gracias.php" method="POST">
                        <h2 class="text-center">Mensaje Enviado</h2>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--/Formulario-->

    <footer class="mb-0">
        <div class="row">
            <div class="col-xs-12 col-md-4 col-lg-4 ">
                <p class="text-center mt-4">Derechos reservados &COPY;</p>
            </div>

            <div class="col-xs-12 col-md-4  col-lg-4 text-center">
                <p class="text-uppercase text-center mt-4 ml-2">Travel Around the World = <button class="btn btn-dark boton"><a target="_blank" href="nosotros.html">Sobre Nosotros</a></button></p>

            </div>
            <div class="col-xs-12 col-md-4 col-lg-4">
                <p class="text-center mt-4">M.M 2020</p>
            </div>
        </div>
    </footer>



    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="js/script.js"></script>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>

