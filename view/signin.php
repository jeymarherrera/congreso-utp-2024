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
  <link href="public/css/dashboard.css" rel="stylesheet">
</head>


<body>
  <!-- Header -->

  <!-- Login -->
  <section id="schedule" class="section-with-bg">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
          <!-- <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp" class="img-fluid" alt="Sample image"> -->
          <img src="public/img/login.webp" class="img-fluid" alt="Sample image">

        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
          <!-- CAMBIAR EL TIPO DE METODO AL GUARDAR EN LA BASE -->
          <form method="POST" action="./?op=acceder">
            <div class="section-header">
              <h2 style="text-align:center">Accede al Sistema</h2>
            </div>
            <p class="text-center m-4 <?php if (isset($_GET['msg'])) echo $_GET['t']; ?>"> <?php if (isset($_GET['msg'])) echo $_GET['msg']; ?> </p>


            <!-- AREA CORREO -->
            <div class="form-outline mb-4">
              <!-- Cambiar tipo luego de la presentacion -->
              <input type="text" id="form3Example3" name="correo" class="form-control form-control-lg" placeholder="Correo" />
            </div>

            <!-- AREA CONTRASENA -->
            <div class="form-outline mb-3">
              <input type="password" id="form3Example4" class="form-control form-control-lg" name="contrasena" placeholder="Contraseña" />
              <div class="text-center text-lg-start mt-4 pt-2">
                <button class="btn btn-lg btn-primary w-100 m-2" type="submit">Entrar</button>
                <div class="d-flex justify-content-center links">
                  <a style="color:#000" href="?op=recuperar">¿Olvidó su contraseña?</a>
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