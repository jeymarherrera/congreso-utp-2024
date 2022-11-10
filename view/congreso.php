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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script><!-- jQuery -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script><!-- Bootstrap -->
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
               <a href="?op=newCongreso"><button class="btn btn-primary w-100 m-2" type="button">Crear nuevo congreso</button></a>
            </div>
        </div>
    </div>
    <!-- congresos -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Congresos Creados</h6>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col">ID</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">Cantidad de Boletos</th>
                            <th scope="col">Horas Minímas de Estadia</th>
                            <th scope="col">Fecha de Inicio</th>
                            <th scope="col">Fecha de Finalización</th>
                            <th scope="col">Areas de Interes</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Eliminar</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        /* $n = 1;
                        foreach ($listaRegistros as $lista) {
                        ?>
                            <tr>
                                <td><?php echo $lista->id; ?></td>
                                <td><?php echo $lista->titulo; ?></td>
                                <td><?php echo $lista->cantidad; ?></td>
                                <td><?php echo $lista->hotaMin; ?></td>
                                <td><?php echo $lista->fechaIni; ?></td>
                                <td><?php echo $lista->FechaFin; ?></td>
                                <td><?php echo $lista->Areas; ?></td>
                                <td><span class="text-success"><?php ?></span></td>
                            </tr>
                        <?php
                            $n++;
                        } */
                        ?>
                    </tbody>

                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>Congreso Internacional de Ingeniería, Ciencias y Tecnología </td>
                            <td>500</td>
                            <td>3</td>
                            <td>01/10/2024 12:08:47 AM</td>
                            <td>03/10/2024 5:08:45 PM</td>
                            <td>Tecnologia <br>Ciencias <br>Ingenieria</td>
                            <td><a class="btn btn-sm btn-primary" href="">Editar</a></td>
                            <td><a class="btn btn-sm btn-primary" href="" data-toggle="modal" data-target="#modalDelete">Eliminar</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <?php
    require_once 'view/template/modal-delete.php';
    ?>

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

</html>