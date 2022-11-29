<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="public/css/style.css" rel="stylesheet">
    <link href="public/css/registro.css" rel="stylesheet">


    <link href="public/img/logo-utp-white.png" rel="icon">
    <link href="public/img/logo-utp-white.png" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="public/css/bootstrap/bootstrap.css" rel="stylesheet">
    <link href="public/css/bootstrap/bootstrap.min.css" rel="stylesheet">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Librarias CSS -->
    <script src="https://kit.fontawesome.com/3f6fcc0d63.js" crossorigin="anonymous"></script>
    <link href="public/css/font-awesome/font-awesome.css" rel="stylesheet">
    <link href="public/css/font-awesome/font-awesome.min.css" rel="stylesheet">
    <link href="public/css/animate/animate.min.css" rel="stylesheet">
    <link href="public/css/venobox/venobox.css" rel="stylesheet">
    <link href="public/css/owlcarousel/owl.carousel.min.css" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Registro - congreso UTP</title>
</head>

<body>
    <!-- Header -->
    <header id="header" style="background: rgba(6, 12, 34, 0.98);">
        <div class="container">
            <div id="logo" class="pull-left">
                <a href="index.html" class="scrollto"><img src="public/img/logo-utp-white.png" alt="UTP" title=""></a>
            </div>

            <?php
            require_once 'view/template/header.php';
            ?>
        </div>
    </header>

    <div class="container py-5 h-100">
        <h1 style="margin-top:15%; margin-bottom:3%; text-align: center;">Registro</h1>


        <p class="text-center mt-4 <?php if (isset($_GET['msg'])) echo $_GET['t']; ?>"> <?php if (isset($_GET['msg'])) echo $_GET['msg']; ?> </p>


        <div class="card shadow-2-strong well well-sm mb-5 " style="border-radius: 1rem;  align-self: center; ">
            <form style="background-color: #EAEDF1;" id="registro" name="registro" class="form-horizontal card-body p-5" method="POST" action="?op=registrar">
                <div style="background-color: white; margin:-15px;" id="tipoUsuario">
                    <div class="alert alert-info mt-">
                        <i class="fa fa-info-circle"></i>
                        <strong>Importante: </strong><br>Por favor cerciórese de usar el tipo de ticket que le corresponde.<br><strong>* Cada usuario tiene un costo diferente.</strong>
                    </div>
                    <div>
                        <select style="height: 40px; width: 250px; margin-left:20px; margin-bottom:20px;" name="tipoUsuario" id="tipos" class="chosen-select"  onchange='SelectChanged();' required>
                            <option disable>Soy un...</option>
                            <option id="tipoUsuario" value="Autor">Autor</option>
                            <option id="estudiante1" value="Estudiante UTP">Estudiante UTP</option>
                            <option id="estudiante2" value="Estudiante nacional">Estudiante nacional</option>
                            <option id="estudiante3" value="Estudiante internacional">Estudiante internacional</option>
                            <option id="funcionario"  value="Funcionario UTP">Funcionario UTP</option>
                            <option id="profesional1" value="Profesional nacional">Profesional nacional</option>
                            <option id="profesional2" value="Profesional internacional">Profesional internacional</option>
                        </select>
                    </div>
                    <div>
                    </div>
                </div>
                <fieldset name="fieldset" style="background-color: white; " class="py-5 mt-5 row">

                    <div class="form-group mb-2 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div>
                            <input id="fname" name="nombre" type="text" placeholder="Nombre(s) *" class="form-control  col-10" style="width: 400px;" required>
                        </div>
                    </div>

                    <div class="form-group mb-2 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div>
                            <input id="lname" name="apellido" type="text" placeholder="Apellido(s) *" class="form-control  col-10" style="width: 400px;" required>
                        </div>
                    </div>

                    <div class="form-group mb-2 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div>
                            <input id="cedula" name="cedula" type="text" placeholder="Identificación(Cédula/Pasaporte)*" class="form-control  col-10" style="width: 400px;" required>
                        </div>
                    </div>

                    <div class="form-group mb-2 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div>
                            <input id="contrasena" name="contrasena" type="password" placeholder="Contraseña *" class="form-control  col-10" style="width: 400px;" required>
                        </div>
                    </div>

                    <div class="form-group mb-2 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <select style="height: 40px; width: 400px;" name="IEEE" id="IEEE" value="" class="chosen-select col-10" required>
                            <option id="no" value="no">Miembro IEEE: Descuento 15% *</option>
                            <option id="si" value="si">Sí</option>
                            <option id="no" value="no">No</option>
                        </select>
                        <div>
                            <input id="MEM" name="mem" type="text" placeholder="Código de membresia*" class="form-control  col-10" style="width: 400px; display:none;">
                        </div>
                    </div>

                    <div class="form-group mb-2 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <select style="height: 40px; width: 400px;" name="wpa" id="wpa" value="" class="chosen-select col-10" required>
                            <option id="no" value="no">Miembro de WPA *</option>
                            <option id="si" value="si">Sí</option>
                            <option id="no" value="no">No</option>
                        </select>
                    </div>

                    <div class="form-group mb-2 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div>
                            <input id="paper1" name="paper1" type="text" placeholder="Código paper aprobado *" class="form-control  col-10" style="width: 400px;">
                        </div>
                    </div>

                    <div class="form-group mb-2 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <select style="height: 40px; width: 400px;" name="paper2" id="paper2" value="" class="chosen-select col-10" required>
                            <option id="no" value="no">Segundo paper aprobado *</option>
                            <option id="si" value="si">Sí</option>
                            <option id="no" value="no">No</option>
                        </select>
                        <div>
                            <input id="paper2_" name="paper2_" type="text" placeholder="Código segundo paper aprobado *" class="form-control  col-10" style="width: 400px; display:none;">
                        </div>
                    </div>

                    <div class="form-group mb-2 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <select style="height: 40px; width: 400px;" name="paper3" id="paper3" value="" class="chosen-select col-10" required>
                            <option id="no" value="no">Tercer paper aprobado *</option>
                            <option id="si" value="si">Sí</option>
                            <option id="no" value="no">No</option>
                        </select>
                        <div>
                            <input id="paper3_" name="paper3_" type="text" placeholder="Código tercer paper aprobado *" class="form-control  col-10" style="width: 400px; display:none;">
                        </div>
                    </div>

                    <div class="form-group mb-2 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <select style="height: 40px; width: 400px;" name="sexo" id="sexo" value="" class="chosen-select col-10" required>
                            <option value="">Sexo *</option>
                            <option id="M" value="M">M</option>
                            <option id="F" value="F">F</option>
                        </select>
                    </div>

                    <div class="form-group mb-2 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div>
                            <input id="cell" name="telefono" type="text" placeholder="Télefono *" class="form-control  col-10" style="width: 400px;" required>
                        </div>
                    </div>

                    <div class="form-group mb-2 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <select style="height: 40px; width: 400px;" name="pais" id="pais" class="chosen-select  col-10" required="">
                            <option>Seleccione su país</option>
                            <?php foreach ($listaPais as $p) { ?>
                                <option value="<?php echo $p->id_pais; ?>"><?php echo $p->nombre_pais; ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group mb-2 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <select style="height: 40px; width: 400px;" name="provincia" id="provincia" class="chosen-select  col-10" required="">
                            <option>Seleccione su provincia</option>
                            <?php foreach ($listaProvincia as $p) { ?>
                                <option value="<?php echo $p->id_provincia; ?>"><?php echo $p->nombre; ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group mb-2 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div>
                            <input name="ciudad" id="ciudad" type="text" placeholder="Ciudad *" class="form-control  col-10" style="width: 400px;" required>
                        </div>
                    </div>            


                    <div class="form-group mb-2 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <select style="height: 40px; width: 400px;" name="institucion" id="institucion" class="chosen-select  col-10" required>
                        <option value="">Seleccione su entidad</option>
                            <?php foreach ($listaEntidad as $e) { ?>
                                <option value="<?php echo $e->id_entidad; ?>"><?php echo $e->nombre; ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group mb-2 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <select style="height: 40px; width: 400px;" name="facultad" id="facultades" value="" class="chosen-select  col-10" required="">
                            <option value="">Departamento/Facultad *</option>
                            <option value="Facultad de Ingeniería Civil">Facultad de Ingeniería Civil</option>
                            <option value="Facultad de Ingeniería Eléctrica">Facultad de Ingeniería Eléctrica</option>
                            <option value="Facultad de Ingeniería Industrial">Facultad de Ingeniería Industrial</option>
                            <option value="Facultad de Ingeniería Mecánica">Facultad de Ingeniería Mecánica</option>
                            <option value="Facultad de Ingeniería de Sistemas Computacionales">Facultad de Ingeniería de Sistemas Computacionales</option>
                            <option value="Facultad de Ciencias y Tecnología">Facultad de Ciencias y Tecnología</option>
                        </select>
                    </div>

                    <div class="form-group mb-2 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div>
                            <input id="idEst" name="idEst" type="text" placeholder="ID estudiante *" class="form-control col-10" style="width: 400px;">
                        </div>
                    </div>

                    <div class="form-group mb-2 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div>
                            <input id="email" name="correo" type="text" placeholder="Correo electrónico *" class="form-control col-10" style="width: 400px;" required>
                        </div>
                    </div>


                    <div class="form-group mb-2 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <select style="height: 40px; width: 400px;" name="ocupacion" id="ocupacion" class="chosen-select  col-10" required="">
                            <option>Seleccione su ocupación</option>
                            <?php foreach ($listaOcupacion as $o) { ?>
                                <option value="<?php echo $o->id_ocupacion; ?>"><?php echo $o->nombre; ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group mb-2 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                        <div>
                            <input value="10" type="radio" id="cena" name="cena" value="10.00">
                            <label for="Asistiré a la cena de clausura + $ 10.00 US">Asistiré a la cena de clausura + $ 10.00 US</label>
                        </div>
                    </div>

                    <div class="form-group mb-2 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                        <div>
                            <input value="50" type="radio" id="cena2" name="cena" value="50.00">
                            <label for="Asistiré con un acompañante a la cena de clausura + $ 50.00 US">Asistiré con un acompañante a la cena de clausura + $ 50.00 US</label>
                        </div>
                    </div>
                    <div class="col-md-12  campo-form"><label>Áreas de Interés </label>
                        <div class="checkbox">
                            <label><input type="checkbox" autocomplete="off" name="areas1" value="Ciencia e Ingeniería de Materiales, Ciencias Básicas y Espaciales"> Ciencia e Ingeniería de Materiales, Ciencias Básicas y Espaciales</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" autocomplete="off" name="areas2" value="Biociencias, Biotecnología, Biomedicina y Agroindustrias"> Biociencias, Biotecnología, Biomedicina y Agroindustrias</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" autocomplete="off" name="areas3" value="Robótica, Percepción e Inteligencia Artificial"> Robótica, Percepción e Inteligencia Artificial</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" autocomplete="off" name="areas4" value="Energía y Ambiente"> Energía y Ambiente</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" autocomplete="off" name="areas5" value="Educación en Ingeniería y Ciencias Sociales"> Educación en Ingeniería y Ciencias Sociales</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" autocomplete="off" name="areas6" value="Infraestructura, Construcción y Edificaciones"> Infraestructura, Construcción y Edificaciones</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" autocomplete="off" name="areas7" value="Logística, Innovación y Ciencias Empresariales"> Logística, Innovación y Ciencias Empresariales</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" autocomplete="off" name="areas8" value="Sistemas Inteligentes y TIC"> Sistemas Inteligentes y TIC</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" autocomplete="off" name="areas9" id="areas_otros" value="Otro(s)"> Otro(s)</label>
                        </div>
                    </div>
                    <script>
                        (function() {
                            select3 = document.getElementById('areas_otros').parentElement;
                            checkbox3 = document.getElementById('areas_otros');
                            checkbox3.onchange = function() {
                                if (checkbox3.checked) {
                                    var str = '<div class="areas_otros " id="areas_otros_campo"><div class="col-md-12 campo-form"><label>Especifique*</label><input type="text" placeholder="Especifique" maxlength="200" class="form-control" name="texto28" id="texto28" value="" required=""></div></div>';
                                    select3.parentElement.insertAdjacentHTML('afterend', str);

                                } else {

                                    if (document.getElementById("areas_otros_campo")) {
                                        document.getElementById('areas_otros_campo').remove();
                                    }
                                    if (document.getElementById("areas_otros_campo")) {
                                        document.getElementById('areas_otros_campo').remove();
                                    }
                                }
                            };
                        })();
                    </script>

                    <div id="acordion1" class="panel panel-default tipo-ticket p-2" style="background: #EAEDF1;">
                        <div class="panel-heading ">
                            <h4 class="panel-title">
                                <a class="nombre-tiquete" data-toggle="collapse" data-parent="#accordion" href="#acordion0">
                                    <i class="fa fa-check"></i>
                                    <strong id="TipoEstudiante"></strong>
                                </a>
                            </h4>
                        </div>
                    </div>


                    <div class="panel-body row mt-3">
                        <div style="color: white;" id="fechaFinal" class="col-sm-2 col-md-2 col-lg-6 col-xl-6">
                            <p style="background-color: #7A1C79; border-radius: 1rem; width:max-content; padding:5px" ;>Hasta 18 de ocutbre, 2022</p>
                        </div>
                        <div style="color: #7A1C79;" id="" class="col-sm-2 col-md-2 col-lg-6 col-xl-6">
                            <span class="price styleSecondColor" display:="" block="">
                                <div class="row ">
                                    <span class="subtotal tit col-sm-6 col-md-6 col-lg-8 col-xl-8">SUBTOTAL</span>
                                    <span id="subtotal" class="subtotal val col-sm-6 col-md-6 col-lg-4 col-xl-4"></span><br>
                                </div>
                                <div id="0_pp" class="row">
                                    <span class="desc col-sm-6 col-md-6 col-lg-8 col-xl-8">Comisión procesamiento pago 5%</span>
                                    <span id="porcentaje" class="val col-sm-6 col-md-6 col-lg-4 col-xl-4"></span><br>
                                </div>
                                <div id="0_pv" class="row">
                                    <span class="desc col-sm-6 col-md-6 col-lg-8 col-xl-8">Comisión procesamiento pago</span>
                                    <span id="procesamiento" class="val col-sm-6 col-md-6 col-lg-4 col-xl-4"></span><br>
                                </div>
                                <div class="row">
                                    <span class="total tit col-sm-6 col-md-6 col-lg-8 col-xl-8">TOTAL</span>
                                    <span id="total" class="total val col-sm-6 col-md-6 col-lg-4 col-xl-4"><span class="number"></span></span>
                                </div>
                        </div>
                    </div>
        </div>
        </fieldset>

        <div class="form-horizontal card-body p-5" style="background-color: #EAEDF1;">
            <div style="background-color: whhite;">
                <div id="tipoPago">
                    <div class="alert alert-info mt-">
                        <i class="fa fa-info-circle"></i>
                        <strong>Importante: </strong><br>Por favor seleccione una forma de pago.<br><strong>* Al terminar haga click en Inscribirme y Pagar para finalizar su inscripción..</strong>
                    </div>
                    <div>
                        <select style="height: 40px; width: 250px; margin-left:20px; margin-bottom:20px;" name="tipoPago" id="opcionPago" class="chosen-select" required="">
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
                            <input id="nombreTarjeta" name="nombreTarj" type="text" placeholder="Maria Mariano" class="form-control col-10">
                        </div>

                        <div class="col-md-6 col-lg-6 col-xl-6">
                            <label for="NumTarjeta">Número de la Tarjeta</label><br>
                            <input id="numTarjeta" name="numTarjeta" type="number" placeholder="Ej: 0000111122223333" class="form-control col-10">
                        </div>


                        <div class="col-md-6 col-lg-6 col-xl-6">
                            <label for="cvv">Número de CVV</label><br>
                            <input type="number" name="cvv" id="cvv" placeholder="Ej: 123" class="form-control col-10">
                        </div>

                        <div class="col-md-6 col-lg-6 col-xl-6">
                            <label for="fecha">Fecha de Vencimiento</label><br>
                            <input type="month" name="fecha" id="fechaVencimiento" class="form-control col-10">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group mt-5 mb-2">
            <div class="col-md-12 text-center">
                <button style="text-align: center;" data-bs-target="#staticBackdrop" id="btnRegistrar" type="submit">Inscribirme y pagar</button>
            </div>
        </div>
        </form>
    </div>
    </div>
    <!-- Footer -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 footer-info">
                        <img src="public/img/logo-utp-white.png" alt="UTP">
                        <p>Universidad Tecnológica de Panamá - 2022 <br>
                            Dirección: Avenida Universidad Tecnológica de Panamá, Vía Puente Centenario,
                            Campus Metropolitano Víctor Levi Sasso. <br>
                            Teléfono. (507) 560-3000 <br>
                            Correo electrónico: buzondesugerencias@utp.ac.pa <br>
                            311 Centro de Atención Ciudadana <br>
                            Políticas de Privacidad</p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <ul>
                            <li><i class="fa fa-angle-right"></i> <a href="#">Inicio</a></li>
                            <li><i class="fa fa-angle-right"></i> <a href="#">Sobre el Congreso</a></li>
                            <li><i class="fa fa-angle-right"></i> <a href="#">Lugar de Encuentro</a></li>
                            <li><i class="fa fa-angle-right"></i> <a href="#">Áreas de Interés</a></li>
                            <li><i class="fa fa-angle-right"></i> <a href="#">Contáctanos</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <ul>
                            <li><i class="fa fa-angle-right"></i> <a href="#">ECA</a></li>
                            <li><i class="fa fa-angle-right"></i> <a href="#">JIC</a></li>
                            <li><i class="fa fa-angle-right"></i> <a href="#">WPA</a></li>
                            <li><i class="fa fa-angle-right"></i> <a href="#">UTP</a></li>
                            <li><i class="fa fa-angle-right"></i> <a href="#">Mapa de Ubicación</a></li>
                        </ul>

                        <div class="social-links">
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; 2024 Copyright <strong>Universidad Tecnológica de Panamá | </strong> All Rights Reserved by UTP.
            </div>
            <div class="credits">
            </div>
        </div>
    </footer>
    </div>

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