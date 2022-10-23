<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crear Evento</title>
    <link href="public/css/crear-evento.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <header>
        <!--Importar header principal-->
        <?php
      require_once 'view/template/header.php';
      ?>
    </header>

        <div class="body-principal ">
            <div class="row text-center align-items-center" id="titulo-form">
                <h1>Crear Evento y conferencias</h1>
            </div>

            <form class="form-floating">
                <div class="row justify-content-center">
                    <div class="col-6">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Seleccione un tipo de evento</option>
                            <option value="#">Evento</option>
                            <option value="#">Congreso</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="nombre" placeholder="Nombre completo">
                            <label for="nombre">Nombre completo</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="cedula" placeholder="Cédula">
                            <label for="cedula">Cédula</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="correo" placeholder="Correo electrónico">
                            <label for="correo">Correo electrónico</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="titulo" placeholder="Título">
                            <label for="titulo">Título</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-floating mb-3">
                            <input type="date" class="form-control" id="fecha" placeholder="Fecha de presentación">
                            <label for="fecha">Fecha de presentación</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="horas" placeholder="Horas">
                            <label for="horas">Horas</label>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-4">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="aula" placeholder="Aula de presentación">
                            <label for="aula">Aula de presentación</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <button type="button" class="btn-guardar">Guardar</button>
                </div>
            </form>
        </div>

    <footer>
        <!--Importar footer principal-->

        <?php
      require_once 'view/template/footer.php';
      ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>