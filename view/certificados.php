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
                <button class="btn btn-primary w-100 m-2" type="button">Enviar Certificados</button>
            </div>
        </div>
    </div>
    <!-- congresos -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Certificados por paticipación del Congreso de Profesionales</h6>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Buscar">
                </form>
            </div>

            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col">ID</th>
                            <th scope="col">Profesional</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Congreso</th>
                            <th scope="col">Total de Horas</th>
                            <th scope="col">Finalizacion</th>
                            <th scope="col">Certificado</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        foreach ($listaProfesionales as $lista) {
                        ?>
                            <tr>
                                <td><?php echo $lista->id_profesional; ?></td>
                                <td><?php echo $lista->nombre; ?></td>
                                <td><?php echo $lista->correo; ?></td>
                                <td><?php echo $lista->titulo; ?></td>
                                <td><?php echo $lista->total_horas; ?></td>
                                <td><?php echo $lista->fecha_fin; ?></td>
                                <td><a class="btn btn-sm btn-primary" href="<?php echo 'index.php?id='.$lista->id_profesional.'&op=verCertificado'?>">Ver</a></td>
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
                <h6 class="mb-0">Certificados por paticipación del Congreso de Estudiantes</h6>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Buscar">
                </form>
            </div>

            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col">ID</th>
                            <th scope="col">Estudiante</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Congreso</th>
                            <th scope="col">Total de Horas</th>
                            <th scope="col">Finalizacion</th>
                            <th scope="col">Certificado</th>
                        </tr>
                    </thead>

                    <tbody>
                    

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Certificados por paticipación en Eventos del Congreso de Profesionales</h6>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Buscar">
                </form>
            </div>

            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col">ID</th>
                            <th scope="col">Profesional</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Evento</th>
                            <th scope="col">Total de Horas</th>
                            <th scope="col">Finalizacion</th>
                            <th scope="col">Certificado</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        foreach ($listaProfesionalesEv as $lista) {
                        ?>
                            <tr>
                                <td><?php echo $lista->id_profesional; ?></td>
                                <td><?php echo $lista->nombre; ?></td>
                                <td><?php echo $lista->correo; ?></td>
                                <td><?php echo $lista->titulo; ?></td>
                                <td><?php echo $lista->total_horas; ?></td>
                                <td><?php echo $lista->fecha_fin; ?></td>
                                <td><a class="btn btn-sm btn-primary" href="?op=VerCertificados">Ver</a></td>
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
                <h6 class="mb-0">Certificados por paticipación en Eventos del Congreso de Estudiantes</h6>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Buscar">
                </form>
            </div>

            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col">ID</th>
                            <th scope="col">Profesional</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Evento</th>
                            <th scope="col">Total de Horas</th>
                            <th scope="col">Finalizacion</th>
                            <th scope="col">Certificado</th>
                        </tr>
                    </thead>

                    <tbody>
                    <?php
                        foreach ($listaEstudianteEv as $lista) {
                        ?>
                            <tr>
                                <td><?php echo $lista->id_estudiante; ?></td>
                                <td><?php echo $lista->nombre; ?></td>
                                <td><?php echo $lista->correo; ?></td>
                                <td><?php echo $lista->titulo; ?></td>
                                <td><?php echo $lista->total_horas; ?></td>
                                <td><?php echo $lista->fecha_fin; ?></td>
                                <td><a class="btn btn-sm btn-primary" href="?op=VerCertificados">Ver</a></td>
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