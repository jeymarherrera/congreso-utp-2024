<?php
if ($_SESSION["acceso"] != true) {
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


    <!-- Mensajes recientes -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Mensajes Recientes</h6>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col">No</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Asunto</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Mensaje</th>
                            <th scope="col">Ver</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>10046</td>
                            <td>25/09/2024 10:31:12</td>
                            <td>Metodo de Pago</td>
                            <td>Aron Alvarez</td>
                            <td>alvares12@gmail.com</td>
                            <td>Sera que no cuentan con otros metodos...</td>
                            <td><a class="btn btn-sm btn-primary" href="#">Detalles</a></td>
                        </tr>
                        <tr>
                            <td>10045</td>
                            <td>25/09/2024 9:25:12</td>
                            <td>Estudiante UTP</td>
                            <td>Marlon Sosa</td>
                            <td>marlonso1@gmail.com</td>
                            <td>Tengo un descuento del 15% por...</td>
                            <td><a class="btn btn-sm btn-primary" href="#">Detalles</a></td>
                        </tr>
                        <tr>
                            <td>10044</td>
                            <td>25/09/2024 9:15:12</td>
                            <td>Error de Registro</td>
                            <td>Maria Camila</td>
                            <td>camim@gmail.com</td>
                            <td>Buen dia, necesito ayuda con el registro...</td>
                            <td><a class="btn btn-sm btn-primary" href="#">Detalles</a></td>
                        </tr>
                        <tr>
                            <td>10043</td>
                            <td>25/09/2024 9:06:12</td>
                            <td>Articulo</td>
                            <td>Fernanda Cordoba</td>
                            <td>fercordoba@gmail.com</td>
                            <td>Como puedo registrar mi art..</td>
                            <td><a class="btn btn-sm btn-primary" href="#">Detalles</a></td>
                        </tr>
                        <tr>
                            <td>10042</td>
                            <td>25/09/2024 8:59:12</td>
                            <td>Error al Iniciar en la App</td>
                            <td>Camille Seqhez</td>
                            <td>cmlegj@gmail.com</td>
                            <td>I have a problem with the app...</td>
                            <td><a class="btn btn-sm btn-primary" href="#">Detalles</a></td>
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