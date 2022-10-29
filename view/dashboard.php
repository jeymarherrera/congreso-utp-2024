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

    <!-- reportes -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-6 col-xl-3">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-chart-line fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Ingresos del Día</p>
                        <h6 class="mb-0">$1664</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-chart-bar fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Total de Ingresos</p>
                        <h6 class="mb-0">$11664</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-chart-area fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Registros del Día</p>
                        <h6 class="mb-0">16</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-chart-pie fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Total de Registros</p>
                        <h6 class="mb-0">166</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Registros recientes -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Registros Recientes</h6>
                <a href="">Mostrar Todo</a>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col">Fecha</th>
                            <th scope="col">No. Factura</th>
                            <th scope="col">Cliente</th>
                            <th scope="col">Monto</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Información</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01 Oct 2024</td>
                            <td>INV-0123</td>
                            <td>Carlos Medina</td>
                            <td>$166</td>
                            <td>Estudiante</td>
                            <td><a class="btn btn-sm btn-primary" href="">Detalles</a></td>
                        </tr>
                        <tr>
                            <td>01 Oct 2024</td>
                            <td>INV-0123</td>
                            <td>Ariel Torres</td>
                            <td>$166</td>
                            <td>Estudiante</td>
                            <td><a class="btn btn-sm btn-primary" href="">Detalles</a></td>
                        </tr>
                        <tr>
                            <td>01 Oct 2024</td>
                            <td>INV-0123</td>
                            <td>Fernando Restrepo</td>
                            <td>$166</td>
                            <td>Estudiante</td>
                            <td><a class="btn btn-sm btn-primary" href="">Detalles</a></td>
                        </tr>
                        <tr>
                            <td>01 Oct 2024</td>
                            <td>INV-0123</td>
                            <td>Mickael Santos</td>
                            <td>$166</td>
                            <td>Estudiante</td>
                            <td><a class="btn btn-sm btn-primary" href="">Detalles</a></td>
                        </tr>
                        <tr>
                            <td>01 Oct 2024</td>
                            <td>INV-0123</td>
                            <td>Joe King</td>
                            <td>$166</td>
                            <td>Estudiante</td>
                            <td><a class="btn btn-sm btn-primary" href="">Detalles</a></td>
                        </tr>
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