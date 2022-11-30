<?php
if ($_SESSION["acceso"] != true)
{
    header('Location: ?op=error');
}
?>

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
                <a href="?op=newConferencia"><button class="btn btn-primary w-100 m-2" type="button">Crear nueva conferencia</button></a>
                <a href="?op=newPonenciaPro"><button class="btn btn-primary w-100 m-2" type="button">Crear nueva ponencia</button></a>
            </div>
        </div>
    </div>

    <p class="text-center m-4 <?php if (isset($_GET['msg'])) echo $_GET['t']; ?>"> <?php if (isset($_GET['msg'])) echo $_GET['msg']; ?> </p>


    <!-- congresos -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Conferencias Creadas</h6>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col">ID</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">Cantidad de Ponencias</th>
                            <th scope="col">Fecha y Hora de Inicio</th>
                            <th scope="col">Fecha y Hora de Finalización</th>
                            <th scope="col">Sala</th>
                            <th scope="col">Congreso</th>
                            <!-- <th scope="col">Areas de Interes</th> -->
                            <th scope="col">Editar</th>
                            <th scope="col">Eliminar</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        foreach ($listaConferencia as $lista) {
                        ?>
                            <tr>
                                <td><?php echo $lista->id_conferencia; ?></td>
                                <td><?php echo $lista->titulo; ?></td>
                                <td><?php echo $lista->cantidad_ponencias; ?></td>
                                <td><?php echo $lista->fecha_inicio; ?></td>
                                <td><?php echo $lista->fecha_fin; ?></td>
                                <td><?php echo $lista->num_sala; ?></td>
                                <td><?php echo $lista->congreso ?></td>
                                <td><a class="btn btn-sm btn-primary" href="?op=error">Editar</a></td>
                                <td id="id_conferencia"><a class="btn btn-sm btn-primary" href="<?php echo 'index.php?id='.$lista->id_conferencia.'&op=eliminarConferencia' ?>">Eliminar</a></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Ponencias Creadas</h6>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col">Conferencista</th>
                            <th scope="col">Título</th>
                            <th scope="col">Fecha y Hora de Inicio</th>
                            <th scope="col">Fecha y Hora de Finalización</th>
                            <th scope="col">Conferencia a presentar</th>
                            <!-- <th scope="col">Areas de Interes</th> -->
                            <th scope="col">Editar</th>
                            <th scope="col">Eliminar</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        foreach ($listaPonencias as $lista) {
                        ?>
                            <tr>
                                <td><?php echo $lista->Nombre; ?></td>
                                <td><?php echo $lista->ponencia; ?></td>
                                <td><?php echo $lista->fecha_inicio; ?></td>
                                <td><?php echo $lista->fecha_fin; ?></td>
                                <td><?php echo $lista->titulo; ?></td>
                                <td><a class="btn btn-sm btn-primary" href="?op=error">Editar</a></td>
                                <td id="id_ponencia"><a class="btn btn-sm btn-primary" href="<?php echo 'index.php?id='.$lista->ponencia.'&op=eliminarPonencia' ?>">Eliminar</a></td>
                            </tr>
                        <?php
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

</html>