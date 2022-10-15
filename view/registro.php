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

            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="index.html">Inicio</a></li>
                    <li><a href="#about">Congreso</a></li>
                    <li><a href="#gallery">Áreas de Interés</a></li>
                    <li><a href="#speakers">Conferencistas</a></li>
                    <li><a href="#schedule">Cronograma</a></li>
                    <li><a href="#schedule">ECA</a></li>
                    <li><a href="https://iniciacioncientifica.utp.ac.pa/" target="_blank">JIC</a></li>
                    <li><a href="https://utp.ac.pa/world-pendulum-alliance-international-conference" target="_blank">WPA</a></li>
                    <li class="buy-tickets"><a href="#buy-tickets">Registro</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container py-5 h-100">
        <h1 style="margin-top:15%; margin-bottom:3%; text-align: center;">Registro</h1>
        <div class="card shadow-2-strong well well-sm mb-5 " style="border-radius: 1rem;  align-self: center; ">
            <form style="background-color: #EAEDF1;" id="registro" name="registro" class="form-horizontal card-body p-5" method="post" action="./?op=registrar" onSubmit="">
                <div style="background-color: white; margin:-15px;" id="tipoUsuario">
                    <div class="alert alert-info mt-">
                        <i class="fa fa-info-circle"></i>
                        <strong>Importante: </strong><br>Por favor cerciórese de usar el tipo de ticket que le corresponde.<br><strong>* Cada usuario tiene un costo diferente.</strong>
                    </div>
                    <div>
                        <select style="height: 40px; width: 250px; margin-left:20px; margin-bottom:20px;" name="tipoUsuario" id="tipos" value="" class="chosen-select" onchange='SelectChanged();' required>
                            <option value="">Soy un...</option>
                            <option id="tipoUsuario" value="Autor">Autor</option>
                            <option id="estudiante1" value="Estudiante UTP">Estudiante UTP</option>
                            <option id="estudiante2" value="Estudiante nacional">Estudiante nacional</option>
                            <option id="estudiante3" value="Estudiante internacional">Estudiante internacional</option>
                            <option id="funcionario" value="Funcionario UTP">Funcionario UTP</option>
                            <option id="profesional1" value="Profesional nacional">Profesional nacional</option>
                            <option id="profesional2" value="Profesional internacional">Profesional internacional</option>
                        </select>
                    </div>
                    <div>
                    </div>
                </div>
                <fieldset name="fieldset" style="background-color: white; " class="py-5 mt-5 row">
                    <p class="<?php if (isset($_GET['msg'])) echo $_GET['t']; ?>"> <?php if (isset($_GET['msg'])) echo $_GET['msg']; ?> </p>

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
                        <select style="height: 40px; width: 400px;" name="IEEE" id="IEEE" value="" class="chosen-select col-10" onchange="codigos()" required>
                            <option id="no" value="no">Miembro IEEE: Descuento 15% *</option>
                            <option id="si" value="si">Sí</option>
                            <option id="no" value="no">No</option>
                        </select>
                        <div>
                            <input id="MEM" name="cedula" type="text" placeholder="Código de membresia*" class="form-control  col-10" style="width: 400px; display:none;" required>
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
                            <input id="paper1" name="paper1" type="text" placeholder="Código paper aprobado *" class="form-control  col-10" style="width: 400px;" required>
                        </div>
                    </div>

                    <div class="form-group mb-2 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <select style="height: 40px; width: 400px;" name="paper2" id="paper2" value="" class="chosen-select col-10" onchange="codigos()" required>
                            <option id="no" value="no">Segundo paper aprobado *</option>
                            <option id="si" value="si">Sí</option>
                            <option id="no" value="no">No</option>
                        </select>
                        <div>
                            <input id="paper2_" name="paper2_" type="text" placeholder="Código segundo paper aprobado *" class="form-control  col-10" style="width: 400px; display:none;" required>
                        </div>
                    </div>

                    <div class="form-group mb-2 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <select style="height: 40px; width: 400px;" name="paper3" id="paper3" value="" class="chosen-select col-10" onchange="codigos()" required>
                            <option id="no" value="no">Tercer paper aprobado *</option>
                            <option id="si" value="si">Sí</option>
                            <option id="no" value="no">No</option>
                        </select>
                        <div>
                            <input id="paper3_" name="paper3_" type="text" placeholder="Código tercer paper aprobado *" class="form-control  col-10" style="width: 400px; display:none;" required>
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
                        <select style="height: 40px; width: 400px;" name="pais" id="pais" value="" class="chosen-select  col-10" required>
                            <option value="Elegir" id="">Pais</option>
                            <option value="Afganistán" id="AF">Afganistán</option>
                            <option value="Albania" id="AL">Albania</option>
                            <option value="Alemania" id="DE">Alemania</option>
                            <option value="Andorra" id="AD">Andorra</option>
                            <option value="Angola" id="AO">Angola</option>
                            <option value="Anguila" id="AI">Anguila</option>
                            <option value="Antártida" id="AQ">Antártida</option>
                            <option value="Antigua y Barbuda" id="AG">Antigua y Barbuda</option>
                            <option value="Antillas holandesas" id="AN">Antillas holandesas</option>
                            <option value="Arabia Saudí" id="SA">Arabia Saudí</option>
                            <option value="Argelia" id="DZ">Argelia</option>
                            <option value="Argentina" id="AR">Argentina</option>
                            <option value="Armenia" id="AM">Armenia</option>
                            <option value="Aruba" id="AW">Aruba</option>
                            <option value="Australia" id="AU">Australia</option>
                            <option value="Austria" id="AT">Austria</option>
                            <option value="Azerbaiyán" id="AZ">Azerbaiyán</option>
                            <option value="Bahamas" id="BS">Bahamas</option>
                            <option value="Bahrein" id="BH">Bahrein</option>
                            <option value="Bangladesh" id="BD">Bangladesh</option>
                            <option value="Barbados" id="BB">Barbados</option>
                            <option value="Bélgica" id="BE">Bélgica</option>
                            <option value="Belice" id="BZ">Belice</option>
                            <option value="Benín" id="BJ">Benín</option>
                            <option value="Bermudas" id="BM">Bermudas</option>
                            <option value="Bhután" id="BT">Bhután</option>
                            <option value="Bielorrusia" id="BY">Bielorrusia</option>
                            <option value="Birmania" id="MM">Birmania</option>
                            <option value="Bolivia" id="BO">Bolivia</option>
                            <option value="Bosnia y Herzegovina" id="BA">Bosnia y Herzegovina</option>
                            <option value="Botsuana" id="BW">Botsuana</option>
                            <option value="Brasil" id="BR">Brasil</option>
                            <option value="Brunei" id="BN">Brunei</option>
                            <option value="Bulgaria" id="BG">Bulgaria</option>
                            <option value="Burkina Faso" id="BF">Burkina Faso</option>
                            <option value="Burundi" id="BI">Burundi</option>
                            <option value="Cabo Verde" id="CV">Cabo Verde</option>
                            <option value="Camboya" id="KH">Camboya</option>
                            <option value="Camerún" id="CM">Camerún</option>
                            <option value="Canadá" id="CA">Canadá</option>
                            <option value="Chad" id="TD">Chad</option>
                            <option value="Chile" id="CL">Chile</option>
                            <option value="China" id="CN">China</option>
                            <option value="Chipre" id="CY">Chipre</option>
                            <option value="Ciudad estado del Vaticano" id="VA">Ciudad estado del Vaticano</option>
                            <option value="Colombia" id="CO">Colombia</option>
                            <option value="Comores" id="KM">Comores</option>
                            <option value="Congo" id="CG">Congo</option>
                            <option value="Corea" id="KR">Corea</option>
                            <option value="Corea del Norte" id="KP">Corea del Norte</option>
                            <option value="Costa del Marfíl" id="CI">Costa del Marfíl</option>
                            <option value="Costa Rica" id="CR">Costa Rica</option>
                            <option value="Croacia" id="HR">Croacia</option>
                            <option value="Cuba" id="CU">Cuba</option>
                            <option value="Dinamarca" id="DK">Dinamarca</option>
                            <option value="Djibouri" id="DJ">Djibouri</option>
                            <option value="Dominica" id="DM">Dominica</option>
                            <option value="Ecuador" id="EC">Ecuador</option>
                            <option value="Egipto" id="EG">Egipto</option>
                            <option value="El Salvador" id="SV">El Salvador</option>
                            <option value="Emiratos Arabes Unidos" id="AE">Emiratos Arabes Unidos</option>
                            <option value="Eritrea" id="ER">Eritrea</option>
                            <option value="Eslovaquia" id="SK">Eslovaquia</option>
                            <option value="Eslovenia" id="SI">Eslovenia</option>
                            <option value="España" id="ES">España</option>
                            <option value="Estados Unidos" id="US">Estados Unidos</option>
                            <option value="Estonia" id="EE">Estonia</option>
                            <option value="c" id="ET">Etiopía</option>
                            <option value="Ex-República Yugoslava de Macedonia" id="MK">Ex-República Yugoslava de Macedonia</option>
                            <option value="Filipinas" id="PH">Filipinas</option>
                            <option value="Finlandia" id="FI">Finlandia</option>
                            <option value="Francia" id="FR">Francia</option>
                            <option value="Gabón" id="GA">Gabón</option>
                            <option value="Gambia" id="GM">Gambia</option>
                            <option value="Georgia" id="GE">Georgia</option>
                            <option value="Georgia del Sur y las islas Sandwich del Sur" id="GS">Georgia del Sur y las islas Sandwich del Sur</option>
                            <option value="Ghana" id="GH">Ghana</option>
                            <option value="Gibraltar" id="GI">Gibraltar</option>
                            <option value="Granada" id="GD">Granada</option>
                            <option value="Grecia" id="GR">Grecia</option>
                            <option value="Groenlandia" id="GL">Groenlandia</option>
                            <option value="Guadalupe" id="GP">Guadalupe</option>
                            <option value="Guam" id="GU">Guam</option>
                            <option value="Guatemala" id="GT">Guatemala</option>
                            <option value="Guayana" id="GY">Guayana</option>
                            <option value="Guayana francesa" id="GF">Guayana francesa</option>
                            <option value="Guinea" id="GN">Guinea</option>
                            <option value="Guinea Ecuatorial" id="GQ">Guinea Ecuatorial</option>
                            <option value="Guinea-Bissau" id="GW">Guinea-Bissau</option>
                            <option value="Haití" id="HT">Haití</option>
                            <option value="Holanda" id="NL">Holanda</option>
                            <option value="Honduras" id="HN">Honduras</option>
                            <option value="Hong Kong R. A. E" id="HK">Hong Kong R. A. E</option>
                            <option value="Hungría" id="HU">Hungría</option>
                            <option value="India" id="IN">India</option>
                            <option value="Indonesia" id="ID">Indonesia</option>
                            <option value="Irak" id="IQ">Irak</option>
                            <option value="Irán" id="IR">Irán</option>
                            <option value="Irlanda" id="IE">Irlanda</option>
                            <option value="Isla Bouvet" id="BV">Isla Bouvet</option>
                            <option value="Isla Christmas" id="CX">Isla Christmas</option>
                            <option value="Isla Heard e Islas McDonald" id="HM">Isla Heard e Islas McDonald</option>
                            <option value="Islandia" id="IS">Islandia</option>
                            <option value="Islas Caimán" id="KY">Islas Caimán</option>
                            <option value="Islas Cook" id="CK">Islas Cook</option>
                            <option value="Islas de Cocos o Keeling" id="CC">Islas de Cocos o Keeling</option>
                            <option value="Islas Faroe" id="FO">Islas Faroe</option>
                            <option value="Islas Fiyi" id="FJ">Islas Fiyi</option>
                            <option value="Islas Malvinas Islas Falkland" id="FK">Islas Malvinas Islas Falkland</option>
                            <option value="Islas Marianas del norte" id="MP">Islas Marianas del norte</option>
                            <option value="Islas Marshall" id="MH">Islas Marshall</option>
                            <option value="Islas menores de Estados Unidos" id="UM">Islas menores de Estados Unidos</option>
                            <option value="Islas Palau" id="PW">Islas Palau</option>
                            <option value="Islas Salomón" d="SB">Islas Salomón</option>
                            <option value="Islas Tokelau" id="TK">Islas Tokelau</option>
                            <option value="Islas Turks y Caicos" id="TC">Islas Turks y Caicos</option>
                            <option value="Islas Vírgenes EE.UU." id="VI">Islas Vírgenes EE.UU.</option>
                            <option value="Islas Vírgenes Reino Unido" id="VG">Islas Vírgenes Reino Unido</option>
                            <option value="Israel" id="IL">Israel</option>
                            <option value="Italia" id="IT">Italia</option>
                            <option value="Jamaica" id="JM">Jamaica</option>
                            <option value="Japón" id="JP">Japón</option>
                            <option value="Jordania" id="JO">Jordania</option>
                            <option value="Kazajistán" id="KZ">Kazajistán</option>
                            <option value="Kenia" id="KE">Kenia</option>
                            <option value="Kirguizistán" id="KG">Kirguizistán</option>
                            <option value="Kiribati" id="KI">Kiribati</option>
                            <option value="Kuwait" id="KW">Kuwait</option>
                            <option value="Laos" id="LA">Laos</option>
                            <option value="Lesoto" id="LS">Lesoto</option>
                            <option value="Letonia" id="LV">Letonia</option>
                            <option value="Líbano" id="LB">Líbano</option>
                            <option value="Liberia" id="LR">Liberia</option>
                            <option value="Libia" id="LY">Libia</option>
                            <option value="Liechtenstein" id="LI">Liechtenstein</option>
                            <option value="Lituania" id="LT">Lituania</option>
                            <option value="Luxemburgo" id="LU">Luxemburgo</option>
                            <option value="Macao R. A. E" id="MO">Macao R. A. E</option>
                            <option value="Madagascar" id="MG">Madagascar</option>
                            <option value="Malasia" id="MY">Malasia</option>
                            <option value="Malawi" id="MW">Malawi</option>
                            <option value="Maldivas" id="MV">Maldivas</option>
                            <option value="Malí" id="ML">Malí</option>
                            <option value="Malta" id="MT">Malta</option>
                            <option value="Marruecos" id="MA">Marruecos</option>
                            <option value="Martinica" id="MQ">Martinica</option>
                            <option value="Mauricio" id="MU">Mauricio</option>
                            <option value="Mauritania" id="MR">Mauritania</option>
                            <option value="Mayotte" id="YT">Mayotte</option>
                            <option value="México" id="MX">México</option>
                            <option value="Micronesia" id="FM">Micronesia</option>
                            <option value="Moldavia" id="MD">Moldavia</option>
                            <option value="Mónaco" id="MC">Mónaco</option>
                            <option value="Mongolia" id="MN">Mongolia</option>
                            <option value="Montserrat" id="MS">Montserrat</option>
                            <option value="Mozambique" id="MZ">Mozambique</option>
                            <option value="Namibia" id="NA">Namibia</option>
                            <option value="Nauru" id="NR">Nauru</option>
                            <option value="Nepal" id="NP">Nepal</option>
                            <option value="Nicaragua" id="NI">Nicaragua</option>
                            <option value="Níger" id="NE">Níger</option>
                            <option value="Nigeria" id="NG">Nigeria</option>
                            <option value="Niue" id="NU">Niue</option>
                            <option value="Norfolk" id="NF">Norfolk</option>
                            <option value="Noruega" id="NO">Noruega</option>
                            <option value="Nueva Caledonia" id="NC">Nueva Caledonia</option>
                            <option value="Nueva Zelanda" id="NZ">Nueva Zelanda</option>
                            <option value="Omán" id="OM">Omán</option>
                            <option value="Panamá" id="PA">Panamá</option>
                            <option value="Papua Nueva Guinea" id="PG">Papua Nueva Guinea</option>
                            <option value="Paquistán" id="PK">Paquistán</option>
                            <option value="Paraguay" id="PY">Paraguay</option>
                            <option value="Perú" id="PE">Perú</option>
                            <option value="Pitcairn" id="PN">Pitcairn</option>
                            <option value="Polinesia francesa" id="PF">Polinesia francesa</option>
                            <option value="Polonia" id="PL">Polonia</option>
                            <option value="Portugal" id="PT">Portugal</option>
                            <option value="Puerto Rico" id="PR">Puerto Rico</option>
                            <option value="Qatar" id="QA">Qatar</option>
                            <option value="Reino Unido" id="UK">Reino Unido</option>
                            <option value="República Centroafricana" id="CF">República Centroafricana</option>
                            <option value="República Checa" id="CZ">República Checa</option>
                            <option value="República de Sudáfrica" id="ZA">República de Sudáfrica</option>
                            <option value="República Democrática del Congo Zaire" id="CD">República Democrática del Congo Zaire</option>
                            <option value="República Dominicana" id="DO">República Dominicana</option>
                            <option value="Reunión" id="RE">Reunión</option>
                            <option value="Ruanda" id="RW">Ruanda</option>
                            <option value="Rumania" id="RO">Rumania</option>
                            <option value="Rusia" id="RU">Rusia</option>
                            <option value="Samoa" id="WS">Samoa</option>
                            <option value="Samoa occidental" id="AS">Samoa occidental</option>
                            <option value="San Kitts y Nevis" id="KN">San Kitts y Nevis</option>
                            <option value="San Marino" id="SM">San Marino</option>
                            <option value="San Pierre y Miquelon" id="PM">San Pierre y Miquelon</option>
                            <option value="San Vicente e Islas Granadinas" id="VC">San Vicente e Islas Granadinas</option>
                            <option value="Santa Helena" id="SH">Santa Helena</option>
                            <option value="Santa Lucía" id="LC">Santa Lucía</option>
                            <option value="Santo Tomé y Príncipe" id="ST">Santo Tomé y Príncipe</option>
                            <option value="Senegal" id="SN">Senegal</option>
                            <option value="Serbia y Montenegro" id="YU">Serbia y Montenegro</option>
                            <option value="Sychelles" id="SC">Seychelles</option>
                            <option value="Sierra Leona" id="SL">Sierra Leona</option>
                            <option value="Singapur" id="SG">Singapur</option>
                            <option value="Siria" id="SY">Siria</option>
                            <option value="Somalia" id="SO">Somalia</option>
                            <option value="Sri Lanka" id="LK">Sri Lanka</option>
                            <option value="Suazilandia" id="SZ">Suazilandia</option>
                            <option value="Sudán" id="SD">Sudán</option>
                            <option value="Suecia" id="SE">Suecia</option>
                            <option value="Suiza" id="CH">Suiza</option>
                            <option value="Surinam" id="SR">Surinam</option>
                            <option value="Svalbard" id="SJ">Svalbard</option>
                            <option value="Tailandia" id="TH">Tailandia</option>
                            <option value="Taiwán" id="TW">Taiwán</option>
                            <option value="Tanzania" id="TZ">Tanzania</option>
                            <option value="Tayikistán" id="TJ">Tayikistán</option>
                            <option value="Territorios británicos del océano Indico" id="IO">Territorios británicos del océano Indico</option>
                            <option value="Territorios franceses del sur" id="TF">Territorios franceses del sur</option>
                            <option value="Timor Oriental" id="TP">Timor Oriental</option>
                            <option value="Togo" id="TG">Togo</option>
                            <option value="Tonga" id="TO">Tonga</option>
                            <option value="Trinidad y Tobago" id="TT">Trinidad y Tobago</option>
                            <option value="Túnez" id="TN">Túnez</option>
                            <option value="Turkmenistán" id="TM">Turkmenistán</option>
                            <option value="Turquía" id="TR">Turquía</option>
                            <option value="Tuvalu" id="TV">Tuvalu</option>
                            <option value="Ucrania" id="UA">Ucrania</option>
                            <option value="Uganda" id="UG">Uganda</option>
                            <option value="Uruguay" id="UY">Uruguay</option>
                            <option value="Uzbekistán" id="UZ">Uzbekistán</option>
                            <option value="Vanuatu" id="VU">Vanuatu</option>
                            <option value="Venezuela" id="VE">Venezuela</option>
                            <option value="Vietnam" id="VN">Vietnam</option>
                            <option value="Wallis y Futuna" id="WF">Wallis y Futuna</option>
                            <option value="Yemen" id="YE">Yemen</option>
                            <option value="Zambia" id="ZM">Zambia</option>
                            <option value="Zimbabue" id="ZW">Zimbabue</option>
                        </select>
                    </div>

                    <div class="form-group mb-2 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <select style="height: 40px; width: 400px;" name="provincia" id="provincia" value="" class="chosen-select  col-10" required>
                            <option value="">Provincia *</option>
                            <option value="Bocas del Toro">Bocas del Toro</option>
                            <option value="Coclé">Coclé</option>
                            <option value="Colón">Colón</option>
                            <option value="Chiriquí">Chiriquí</option>
                            <option value="Darién">Darién</option>
                            <option value="Herrera">Herrera</option>
                            <option value="Los Santos">Los Santos</option>
                            <option value="Panamá">Panamá</option>
                            <option value="Veraguas">Veraguas</option>
                            <option value="Panamá Oeste">Panamá Oeste</option>
                            <option value="Emberá-Wounaan">Emberá-Wounaan</option>
                            <option value="Guna Yala">Guna Yala</option>
                            <option value="Naso Tjër Di">Naso Tjër Di</option>
                            <option value="Ngäbe-Buglé">Ngäbe-Buglé</option>
                        </select>
                    </div>

                    <div class="form-group mb-2 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div>
                            <input id="ciudad" name="ciudad" type="text" placeholder="Ciudad *" class="form-control col-10" style="width: 400px;" required>
                        </div>
                    </div>

                    <div class="form-group mb-2 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div>
                            <input id="institucion" name="institucion" type="" placeholder="Institución/Entidad/Universidad*" value="" class="form-control col-10" style="width: 400px;" required>
                        </div>
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
                            <input id="idEst" name="idEst" type="text" placeholder="ID estudiante *" class="form-control col-10" style="width: 400px;" required>
                        </div>
                    </div>

                    <div class="form-group mb-2 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div>
                            <input id="email" name="correo" type="text" placeholder="Correo electrónico *" class="form-control col-10" style="width: 400px;" required>
                        </div>
                    </div>

                    <div class="form-group mb-2 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <select style="height: 40px; width: 400px;" name="ocupacion" id="ocupacion" value="" class="chosen-select  col-10" required="">
                            <option value="">Ocupación *</option>
                            <option value="Docente">Docente</option>
                            <option value="Investigador">Investigador</option>
                            <option value="Profesional">Profesional</option>
                            <option value="Estudiante">Estudiante</option>
                            <option value="Administrativo">Administrativo</option>
                        </select>
                    </div>

                    <div class="form-group mb-2 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                        <div>
                            <input type="radio" id="cena" name="cenas" value="Asistiré a la cena de clausura + $ 10.00 US">
                            <label for="Asistiré a la cena de clausura + $ 10.00 US">Asistiré a la cena de clausura + $ 10.00 US</label>
                        </div>
                    </div>

                    <div class="form-group mb-2 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                        <div>
                            <input type="radio" id="cena2" name="cenas" value="Asistiré a la cena de clausura + $ 10.00 US">
                            <label for="Asistiré con un acompañante a la cena de clausura + $ 50.00 US">Asistiré con un acompañante a la cena de clausura + $ 50.00 US</label>
                        </div>
                    </div>
                    <div class="col-md-12  campo-form"><label>Áreas de Interés </label>
                        <div class="checkbox">
                            <label><input type="checkbox" autocomplete="off" name="areas" id="areas" value="Ciencia e Ingeniería de Materiales, Ciencias Básicas y Espaciales" required> Ciencia e Ingeniería de Materiales, Ciencias Básicas y Espaciales</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" autocomplete="off" name="areas" id="areas" value="Biociencias, Biotecnología, Biomedicina y Agroindustrias"> Biociencias, Biotecnología, Biomedicina y Agroindustrias</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" autocomplete="off" name="areas" id="areas" value="Robótica, Percepción e Inteligencia Artificial"> Robótica, Percepción e Inteligencia Artificial</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" autocomplete="off" name="areas" id="areas" value="Energía y Ambiente"> Energía y Ambiente</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" autocomplete="off" name="areas" id="areas" value="Educación en Ingeniería y Ciencias Sociales"> Educación en Ingeniería y Ciencias Sociales</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" autocomplete="off" name="areas" id="areas" value="Infraestructura, Construcción y Edificaciones"> Infraestructura, Construcción y Edificaciones</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" autocomplete="off" name="areas" id="areas" value="Logística, Innovación y Ciencias Empresariales"> Logística, Innovación y Ciencias Empresariales</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" autocomplete="off" name="areas" id="areas" value="Sistemas Inteligentes y TIC"> Sistemas Inteligentes y TIC</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" autocomplete="off" name="areas" id="areas_otros" value="Otro(s)"> Otro(s)</label>
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
                                    <span id="subtotal" value="89" class="subtotal val col-sm-6 col-md-6 col-lg-4 col-xl-4">USD 75</span><br>
                                </div>

                                <div id="0_pp" class="row">
                                    <span class="desc col-sm-6 col-md-6 col-lg-8 col-xl-8">Comisión procesamiento pago 5%</span>
                                    <span id="porcentaje" class="val col-sm-6 col-md-6 col-lg-4 col-xl-4">USD 3.75</span><br>
                                </div>
                                <div id="0_pv" class="row">
                                    <span class="desc col-sm-6 col-md-6 col-lg-8 col-xl-8">Comisión procesamiento pago</span>
                                    <span id="procesamiento" class="val col-sm-6 col-md-6 col-lg-4 col-xl-4">USD 0.50</span><br>
                                </div>
                                <div class="row">
                                    <span class="total tit col-sm-6 col-md-6 col-lg-8 col-xl-8">TOTAL</span>
                                    <span id="total" class="total val col-sm-6 col-md-6 col-lg-4 col-xl-4">USD <span class="number">79.25</span></span>
                                </div>
                        </div>
                    </div>
        </div>
        </fieldset>

        <div class="alert alert-success">
            <i class="fa fa-info-circle"></i>
            <span id="mensaje_precompra">Haga click en Inscribirme y Pagar, seguido ingrese la información de su tarjeta. Al terminar haga click en Pagar.<br><strong>Recuerde:</strong>Su registro sólo será efectivo cuando confirmemos su pago.</span>
        </div>
        <div class="form-group mt-5 mb-2">
            <div class="col-md-12 text-center">
                <button style="text-align: center;" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="btnRegistrar" type="submit">Inscribirme y pagar</button>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog ">
                    <div class="modal-content">
                        <div class="modal-header" style="background: #B766C4;">
                            <h5 class="modal-title" id="staticBackdropLabel">Pago de registro</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body row">
                            <form action="">
                                <div class="text-center mb-5">
                                    <img src="public/img/visalogo.png" alt="" width="100">
                                    <img src="public/img/masterc.png" alt="" width="100">
                                </div>

                                <div class="form-group mb-2 col-sm-2 col-md-2 col-lg-6 col-xl-6">
                                    <div>
                                        <label for="nombre">Nombre de Propietario</label><br>
                                        <input id="nombreTarjeta" name="nombre" type="text" placeholder="Maria Mariano" class="form-control col-10" required>
                                    </div>
                                </div>

                                <div class="form-group mb-2 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                    <div>
                                        <label for="NumTarjeta">Número de la Tarjeta</label><br>
                                        <input id="numTarjeta" name="NumTarjeta" type="number" placeholder="Ej: 0000111122223333" class="form-control col-10" required>
                                    </div>
                                </div>


                                <div class="form-group mb-2 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                    <div>
                                        <label for="cvv">Número de CVV</label><br>
                                        <input type="number" name="cvv" id="cvv" placeholder="Ej: 123" class="form-control col-10" required>
                                    </div>
                                </div>

                                <div class="form-group mb-2 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                    <div>
                                        <label for="fecha">Fecha de Vencimiento</label><br>
                                        <input type="month" name="fecha" id="fechaVencimiento" class="form-control col-10" required>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer row m-2 align-items-center">
                            <div class="row col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <button type="button" class="btn btn-danger btn-lg" data-bs-dismiss="modal">Cancelar</button>
                            </div>
                            <div class="row col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <a href="?op=">
                                    <button type="button" class="btn btn-primary btn-lg">Pagar</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
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
    <script src="/public/js/main.js"></script>
</body>

</html>