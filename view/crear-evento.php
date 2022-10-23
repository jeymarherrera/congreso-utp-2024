<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crear Eventos - Conferencias - 2024</title>
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
  <link href="public/css/crear-evento.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- Custom CSS -->
    <link href="public/plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
    <link rel="stylesheet" href="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css">
    <!-- Custom CSS -->
    <link href="public/css/style.min.css" rel="stylesheet">

</head>
  <body>
  <header class="topbar" data-navbarbg="skin5" style="background: #2f323e ;">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="?op=permitido">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!-- Dark Logo icon -->
                            <img src="public/img/logo-utp-white.png" alt="homepage" width="50" height="50" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                <nav id="nav-menu-container">
        <ul class="nav-menu" >
          <li><a href="?op=home">Inicio</a></li>
          <li><a href="?op=evento">Congreso</a></li>
          <li><a href="?op=panel">Panel</a></li>
        </ul>
  </nav>
                </div>
            </nav>
        </header>
<section>
        <div class="body-principal ">
            <div class="row text-center align-items-center" id="titulo-form">
                <h1>Crear Evento y conferencias</h1>
            </div>

            <form class="form-floating">
                <div class="row justify-content-center">
                    <div class="col-6">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Seleccione un tipo de evento</option>
                            <option value="#">Evento</option>
                            <option value="#">Congreso</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="nombre" placeholder="Nombre completo">
                            <label for="nombre">Nombre completo</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="cedula" placeholder="Cédula">
                            <label for="cedula">Cédula</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="correo" placeholder="Correo electrónico">
                            <label for="correo">Correo electrónico</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="titulo" placeholder="Título">
                            <label for="titulo">Título</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-floating mb-3">
                            <input type="date" class="form-control" id="fecha" placeholder="Fecha de presentación">
                            <label for="fecha">Fecha de presentación</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="horas" placeholder="Horas">
                            <label for="horas">Horas</label>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-4">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="aula" placeholder="Aula de presentación">
                            <label for="aula">Aula de presentación</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <button type="button" class="btn-guardar">Guardar</button>
                </div>
            </form>
        </div>
        </section>
  <!-- Footer -->
  <footer>
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
  </footer>
  </body>
</html>