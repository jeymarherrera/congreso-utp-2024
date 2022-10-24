<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Congreso UTP - 2024</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <!-- Logos UTP -->
  <link href="public/img/logo-utp-white.png" rel="icon">
  <link href="public/img/logo-utp-white.png" rel="icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">
  <!-- Bootstrap -->
  <link href="public/css/bootstrap/bootstrap.css" rel="stylesheet">
  <link href="public/css/bootstrap/bootstrap.min.css" rel="stylesheet">
  <!-- Librarias CSS -->
  <script src="https://kit.fontawesome.com/3f6fcc0d63.js" crossorigin="anonymous"></script>
  <link href="public/css/font-awesome/font-awesome.css" rel="stylesheet">
  <link href="public/css/font-awesome/font-awesome.min.css" rel="stylesheet">
  <link href="public/css/animate/animate.min.css" rel="stylesheet">
  <link href="public/css/venobox/venobox.css" rel="stylesheet">
  <link href="public/css/owlcarousel/owl.carousel.min.css" rel="stylesheet">
  <!-- CSS -->
  <link href="public/css/style.css" rel="stylesheet">
</head>

<?php

/*if (count($_POST)!=0) {
  $_ADM->verify($_POST["email"], $_POST["password"]);
}*/
?>
<body>
  <!-- Header -->
  



   <!-- Login -->
    <section id="schedule" class="section-with-bg">
  <div class="container-fluid h-custom">

    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <!-- CAMBIAR EL TIPO DE METODO AL GUARDAR EN LA BASE -->
        <form method="POST" action="./?op=panel">
        <h1 class="h3 mb-3 fw-normal t" style="text-align:center">Acceder al sistema</h1>
          <!-- AREA CORREO -->
          <div class="form-outline mb-4">
    <!-- Cambiar tipo luego de la presentacion -->         
    <input type="text" id="form3Example3" 
            name="correo" class="form-control form-control-lg"
              placeholder="Email" />
          </div>

          <!-- AREA CONTRASENA -->
          <div class="form-outline mb-3">
            <input type="password" id="form3Example4" class="form-control form-control-lg"
            name="password" placeholder="password" />
              <div class="text-center text-lg-start mt-4 pt-2">
              <button class="w-100 btn btn-lg btn-primary" type="submit">Entrar</button>
    <div class="d-flex justify-content-center links">
      <a href="?op=Olvido">¿Olvido su contraseña?</a>
    </div>

          </div>
          </div>
          
          </div>
        
          </div>
          </div> 

        </form> 

      </div>
    </div>
</div>

</section>

 <!-- Footer -->

 <?php
require_once 'view/template/footer.php';
?>
  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
  <!-- JavaScript Librarias -->
  <script src="public/js/jquery/jquery.min.js"></script>
  <script src="public/js/jquery/jquery-migrate.min.js"></script>
  <script src="public/js/bootstrap/bootstrap.min.js"></script>
  <script src="public/js/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="public/js/easing/easing.min.js"></script>
  <script src="public/js/superfish/hoverIntent.js"></script>
  <script src="public/js/superfish/superfish.min.js"></script>
  <script src="public/js/wow/wow.min.js"></script>
  <script src="public/js/venobox/venobox.min.js"></script>
  <script src="public/js/owlcarousel/owl.carousel.min.js"></script>
  <!-- Contactos -->
  <script src="public/js/contactform.js"></script>
  <!-- JS -->
  <script src="public/js/main.js"></script>

</body>
</html>