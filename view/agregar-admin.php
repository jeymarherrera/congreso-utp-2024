<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel - Congreso UTP 2024</title>
    <!-- Logos -->
    <link href="public/img/logo-utp-white.png" rel="icon">
    <link href="public/img/logo-utp-white.png" rel="icon">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="public/css/owlcarousel/owl.carousel.min.css" rel="stylesheet">
    <link href="public/css/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <!-- Customized Bootstrap Stylesheet -->
    <link href="public/css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="public/css/dashboard.css" rel="stylesheet">
</head>

<body>

    <?php
    require_once 'view/template/dashboard-header.php';
    ?>

    <!-- formulario -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Ingrese los datos del nuevo usuario</h6>
            <form name="registro" method="POST" action="?op=registrarAdmin">
                <div class="mb-3">
                    <label for="id" class="form-label">Cedula</label>
                    <input type="id" class="form-control" id="id" name="cedula">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="name" class="form-control" id="name" name="nombre">
                </div>
                <div class="mb-3">
                    <label for="lastname" class="form-label">Apellido</label>
                    <input type="lstname" class="form-control" id="lastname" name="apellido">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Telefono</label>
                    <input type="phone" class="form-control" id="phone" name="telefono">
                </div>
                <p>Seleccione su sexo</p>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sexo" id="male" value="male">
                    <label class="form-check-label" for="male">Masculino</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sexo" id="female" value="female">
                    <label class="form-check-label" for="female">Femenino</label>
                </div>
                <div class="mb-3">
                    <br><label for="email" class="form-label">Correo</label>
                    <input type="email" class="form-control" id="email" name="correo">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="contrasena">
                </div>
                <label for="pais" class="form-label">País de Residencia</label>

                <select class="form-select mb-3" aria-label="Default select example" name="pais" id="pais" onchange="SelectProvincia()">
                    <?php foreach ($pais as $p) { ?>
                        <option value="<?php echo $p->id_pais; ?>"><?php echo $p->nombre_pais; ?></option>
                    <?php } ?>
                </select>

                <label for="pais" class="form-label">Ciudad</label>
                <select class="form-select mb-3" aria-label="Default select example" name="ciudad">
                    
                </select>

                <label for="pais" class="form-label">Provincia</label>
                <select class="form-select mb-3" aria-label="Default select example" name="provincia">
                    
                </select>
                <div class="mb-3">
                    <label for="ocupacion" class="form-label">Ocupacion</label>
                    <input type="text" class="form-control" id="ocupacion" name="ocupacion">
                </div>
                <div class="mb-3">
                    <label for="entidad" class="form-label">Entidad/Institución/Empresa</label>
                    <input type="text" class="form-control" id="entidad" name="entidad">
                </div>
                <p>¿Es miembro de la IEEE?</p>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="member" id="ieee-si" value="si">
                    <label class="form-check-label" for="positive">Sí</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="member" id="ieee-no" value="no">
                    <label class="form-check-label" for="negative">No</label><br>
                </div>
                <p>¿Es miembro de la WPA?</p>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="member2" id="wpa-si" value="si">
                    <label class="form-check-label" for="positive">Sí</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="member2" id="wpa-no" value="no">
                    <label class="form-check-label" for="negative">No</label>
                </div><br><br>
                <button type="submit" class="btn btn-primary">Agregar</button>
            </form>
        </div>
    </div>

    <?php
    require_once 'view/template/dashboard-footer.php';
    ?>

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="public/js/chart/chart.min.js"></script>
    <script src="public/js/easing/easing.min.js"></script>
    <script src="public/js/waypoints/waypoints.min.js"></script>
    <script src="public/js/owlcarousel/owl.carousel.min.js"></script>
    <script src="public/js/tempusdominus/js/moment.min.js"></script>
    <script src="public/js/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="public/js/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="public/js/main.js"></script>
</body>

<script>
    var arrayIdProvincia = new Array();
    var arrayNomProvincia = new Array();
    var arrayIdPais = new Array();
    var i = 1;
    // Inicializamos 3 arreglos con los datos de los Ids de las provincias y distritos; ademas, del nombre de los distritos
    <?php
    $n = 0;
    foreach ($provincia as $p) {
        echo "arrayIdProvincia[$n]=$p->id_provincia;";
        echo "arrayNomProvincia[$n]='$p->nom_provincia';";
        echo "arrayIdPais[$n]=$p->id_pais;";
        $n++;
    }
    ?>
    var n = "<?php echo $n; ?>"; //total de registros

    function SelectProvincia() {
        var indice = 0;
        var valor = 0;
        //asignamos a la variable valor el valor de la lista de menú seleccionado
        valor = document.registro.pais.value;
        document.registro.provincia.length = 0; //Limpiamos la lista de menu distrito
        for (x = 0; x < n; x++) {

            if (valor == arrayIdPais[x]) {
                //asigna a la lista de menú sub_areas los nuevos valores segun la selección del menú areas
                document.registro.provincia[indice] = new Option(arrayNomProvincia[x], arrayIdProvincia[x]);
                indice = indice + 1;
            }
        }

    }
</script>

</html>