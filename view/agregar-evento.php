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
    <script href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-  datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
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
            <h6 class="mb-4">Ingrese los datos del nuevo evento</h6>
            <form name="registro" method="POST" action="?op=CrearEvento">
                <div class="mb-3">
                    <label for="name" class="form-label">Titulo</label>
                    <input type="name" class="form-control" id="name" name="titulo" required>
                </div>
                <div class="mb-3">
                    <label for="hours" class="form-label">Horas Minimas</label>
                    <input type="number" class="form-control" id="hours" name="horas" required>
                </div>
                <div class="mb-3">
                    <label for="quantity" class="form-label">Cantidad de Ponencias</label>
                    <input type="number" class="form-control" id="quantity" name="cantidad" required>
                </div>
                <div class="mb-3">
                    <label for="startDate">Seleccione la fecha de iniciacion</label>
                    <input id="startDate" class="form-control" type="date" name="fecha_inicio" required />
                </div>
                <label for="finishDate">Seleccione la fecha de culminacion</label>
                <input id="finishDate" class="form-control" type="date" name="fecha_fin" required />

                <br><label for="pais" class="form-label">Sala</label>
                <select class="form-select mb-3" aria-label="Default select example" id="sala" name="sala" required>
                    <option selected>Seleccione una opción</option>
                    <?php foreach ($sala as $s) { ?>
                        <option value="<?php echo $s->id_sala; ?>"><?php echo $s->num_sala; ?></option>
                    <?php } ?>
                </select>
                
                <label for="pais" class="form-label">Congreso</label>
                <select class="form-select mb-3" aria-label="Default select example" id="congreso" name="congreso" required>
                <option selected>Seleccione una opción</option>
                    <?php foreach ($congreso as $c) { ?>
                        <option value="<?php echo $c->id_congreso; ?>"><?php echo $c->titulo; ?></option>
                    <?php } ?>
                </select>
                <br><button type="submit" class="btn btn-primary">Agregar</button>
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

</html>