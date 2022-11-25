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
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light rounded h-100 p-4">
            <div class="m-n2">
                <a href="?op=newArea"><button class="btn btn-primary w-100 m-2" type="button">Agregar nueva área de interés</button></a>
            </div>
        </div>
    </div>

    <p class="text-center mt-4 <?php if (isset($_GET['msg'])) echo $_GET['t']; ?>"> <?php if (isset($_GET['msg'])) echo $_GET['msg']; ?> </p>


    <!-- congresos -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Áreas de Interés agregadas</h6>
            </div>
            <div class="table-responsive">
                <table id="areas" class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col">ID</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">Eliminar</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $n = 1;
                        foreach ($listaAreas as $lista) {
                        ?>
                            <tr>
                                <td id="id_area"><?php echo $lista->id_area ?></td>
                                <td><?php echo $lista->nombre; ?></td>
                                 <td id="id_area"><a class="btn btn-sm btn-primary" href="<?php echo 'index.php?id='.$lista->id_area.'&op=eliminarArea' ?>">Eliminar</a></td>
                            </tr>
                        <?php
                            $n++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
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


<script type="text/javascript">
/* function obtener_id() {
    if (!document.getElementsByTagName || !document.createTextNode) return;
    var rows = document.getElementById('areas').getElementsByTagName('tr');
    for (i = 0; i < rows.length; i++) {
        rows[i].onclick = function() {
		var result = this.getElementsByTagName('td')[0].innerHTML;
        // header(window.location.href = window.location.ref + "?proceso=" + $_Proceso);

            alert(result);
        }
    }
}

function obtener() {
    var rows = document.getElementById('areas').getElementsByTagName('tr');
    var idArea;
    for (i = 0; i < rows.length; i++) {
        rows[i].onclick = function() {
		var id_area = this.getElementsByTagName('td')[0].innerHTML;
        idArea = id_area;
            alert(id_area);
        }
    }
    return idArea;
}*/

</script>

<script> //var Var_JavaScript = obtener();    // declaración de la variable </script>  
    <?php
        //$var_PHP = "<script> document.writeln(Var_JavaScript); </script>"; // igualar el valor de la variable JavaScript a PHP 

    //echo $var_PHP   // muestra el resultado 

    ?> 



</html>