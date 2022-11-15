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
    <?php
    // require_once 'view/template/header.php';
    ?>
    <!-- Login -->
    <section class="section-with-bg">
        <div class="container-fluid h-custom bg-black">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form style="background-color: white; margin-top:40px; margin-bottom:40px; padding:20px;" name="pago" class="" method="POST" action="">
                        <div style=" margin:15px; margin-bottom:10px;" id="tipoPago">
                            <div class="alert alert-info mt-">
                                <i class="fa fa-info-circle"></i>
                                <strong>Importante: </strong><br>Seleccione una forma de pago.<br><strong></strong>
                            </div>
                            <div>
                                <select style="height: 40px; width: 250px; margin-left:20px; margin-bottom:20px;" name="tipoPago" id="tipos" value="" class="chosen-select" onchange='TipoPago();' required>
                                    <option>Forma de pago</option>
                                    <option id="tarjeta" value="tarjeta">Tarjeta débito / crédito</option>
                                    <option id="efectivo" value="efectivo">Efectivo</option>
                                </select>
                            </div>
                        </div>
                        <div style="margin: 0 auto; display: flex; flex-direction: column; justify-content: center; align-items: center;">
                            <div class="text-center mt-5 mb-4">
                                <img src="public/img/visalogo.png" alt="" width="100">
                                <img src="public/img/masterc.png" alt="" width="100">
                            </div>

                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-xl-6">
                                    <label for="nombre">Nombre de Propietario</label><br>
                                    <input id="nombreTarjeta" name="nombre" type="text" placeholder="Maria Mariano" class="form-control col-10" required>
                                </div>

                                <div class="col-md-6 col-lg-6 col-xl-6">
                                    <label for="NumTarjeta">Número de la Tarjeta</label><br>
                                    <input id="numTarjeta" name="NumTarjeta" type="number" placeholder="Ej: 0000111122223333" class="form-control col-10" required>
                                </div>


                                <div class="col-md-6 col-lg-6 col-xl-6">
                                    <label for="cvv">Número de CVV</label><br>
                                    <input type="number" name="cvv" id="cvv" placeholder="Ej: 123" class="form-control col-10" required>
                                </div>

                                <div class="col-md-6 col-lg-6 col-xl-6">
                                    <label for="fecha">Fecha de Vencimiento</label><br>
                                    <input type="month" name="fecha" id="fechaVencimiento" class="form-control col-10" required>
                                </div>
                            </div>

                        </div>


                        <div class="row m-5 align-items-center">
                            <div class="row col-sm-6 col-md-6 col-lg-6 col-xl-6 mr-3">
                                <button type="button" class="btn btn-danger btn-lg">Cancelar</button>
                            </div>
                            <div class="row col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <button type="button" class="btn btn-primary btn-lg">Pagar</button>
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