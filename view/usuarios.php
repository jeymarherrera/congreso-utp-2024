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
                <a href="?op=newInvitado"><button class="btn btn-primary w-100 m-2" type="button">Agregar Conferencista Invitado</button></a>
            </div>
        </div>
    </div>
    <!-- conferencistas -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Conferencistas Registrados</h6>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Buscar">
                </form>
            </div>

            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col">Cedula</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Sexo</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Pais de Residencia</th>
                            <th scope="col">Ciudad</th>
                            <th scope="col">Provincia</th>
                            <th scope="col">Ocupacion</th>
                            <th scope="col">Entidad</th>
                            <th scope="col">Miembro IEEE</th>
                            <th scope="col">Miembro WPA</th>
                            <th scope="col">Areas de Interes</th>
                            <th scope="col">Notificar</th>
                            <th scope="col">Gafete</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Eliminar</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $n = 1;
                        foreach ($listaConferencista as $lista) {
                        ?>
                            <tr>
                                <td><?php echo $lista->cedula; ?></td>
                                <td><?php echo $lista->nombre; ?></td>
                                <td><?php echo $lista->apellido; ?></td>
                                <td><?php echo $lista->telefono; ?></td>
                                <td><?php echo $lista->sexo; ?></td>
                                <td><?php echo $lista->correo; ?></td>
                                <td><?php echo $lista->pais; ?></td>
                                <td><?php echo $lista->ciudad; ?></td>
                                <td><?php echo $lista->provincia; ?></td>
                                <td><?php echo $lista->ocupacion; ?></td>
                                <td><?php echo $lista->entidad; ?></td>
                                <td><?php echo $lista->iee; ?></td>
                                <td><?php echo $lista->wpa; ?></td>
                                <td><?php echo $lista->areas; ?></td>
                                <td><a class="btn btn-sm btn-primary" href="">Notificar</a></td>
                                <td><a class="btn btn-sm btn-primary" href="?op=verGafete">Ver</a></td>
                                <td><a class="btn btn-sm btn-primary" href="">Editar</a></td>
                                <td><a class="btn btn-sm btn-primary" href="?op=eliminarConferencista">Eliminar</a></td>
                                <td><span class="text-success"><?php ?></span></td>
                            </tr>
                        <?php
                            $n++;
                        }
                        ?>
                    </tbody>

                    <tbody>
                        <tr>
                            <td>20-70-5165</td>
                            <td>Jeymar</td>
                            <td>Herrera</td>
                            <td>6044-1464</td>
                            <td>Femenino</td>
                            <td>jeymarherrera@gmail.com</td>
                            <td>Panama</td>
                            <td>Panama</td>
                            <td>Panama</td>
                            <td>Funcionario UTP</td>
                            <td>Universidad Tecnologica de Panama</td>
                            <td>Si</td>
                            <td>No</td>
                            <td>Tecnologia</td>
                            <td><a class="btn btn-sm btn-primary" href="">Notificar</a></td>
                            <td><a class="btn btn-sm btn-primary" href="">Ver</a></td>
                            <td><a class="btn btn-sm btn-primary" href="">Editar</a></td>
                            <td><a class="btn btn-sm btn-primary" href="">Eliminar</a></td>
                        </tr>
                        <tr>
                            <td>20-70-4534</td>
                            <td>Jeymar</td>
                            <td>Herrera</td>
                            <td>6044-1464</td>
                            <td>Femenino</td>
                            <td>jey@gmail.com</td>
                            <td>Panama</td>
                            <td>Panama</td>
                            <td>Panama</td>
                            <td>Funcionario UTP</td>
                            <td>Universidad Tecnologica de Panama</td>
                            <td>Si</td>
                            <td>No</td>
                            <td>Tecnologia</td>
                            <td><a class="btn btn-sm btn-primary" href="">Notificar</a></td>
                            <td><a class="btn btn-sm btn-primary" href="">Ver</a></td>
                            <td><a class="btn btn-sm btn-primary" href="">Editar</a></td>
                            <td><a class="btn btn-sm btn-primary" href="">Eliminar</a></td>
                        </tr>
                        <tr>
                            <td>20-70-6546</td>
                            <td>Jeymar</td>
                            <td>Herrera</td>
                            <td>6044-1464</td>
                            <td>Femenino</td>
                            <td>jherrera@gmail.com</td>
                            <td>Panama</td>
                            <td>Panama</td>
                            <td>Panama</td>
                            <td>Funcionario UTP</td>
                            <td>Universidad Tecnologica de Panama</td>
                            <td>Si</td>
                            <td>No</td>
                            <td>Tecnologia</td>
                            <td><a class="btn btn-sm btn-primary" href="">Notificar</a></td>
                            <td><a class="btn btn-sm btn-primary" href="">Ver</a></td>
                            <td><a class="btn btn-sm btn-primary" href="">Editar</a></td>
                            <td><a class="btn btn-sm btn-primary" href="">Eliminar</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- autores -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Autores Registrados</h6>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Buscar">
                </form>
            </div>

            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col">Cedula</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Sexo</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Pais de Residencia</th>
                            <th scope="col">Ciudad</th>
                            <th scope="col">Provincia</th>
                            <th scope="col">Ocupacion</th>
                            <th scope="col">Entidad</th>
                            <th scope="col">Miembro IEEE</th>
                            <th scope="col">Miembro WPA</th>
                            <th scope="col">Areas de Interes</th>
                            <th scope="col">Gafete</th>
                            <th scope="col">Articulos</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Eliminar</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $n = 1;
                        foreach ($listaAutores as $lista) {
                        ?>
                            <tr>
                                <td><?php echo $lista->cedula; ?></td>
                                <td><?php echo $lista->nombre; ?></td>
                                <td><?php echo $lista->apellido; ?></td>
                                <td><?php echo $lista->telefono; ?></td>
                                <td><?php echo $lista->sexo; ?></td>
                                <td><?php echo $lista->correo; ?></td>
                                <td><?php echo $lista->pais; ?></td>
                                <td><?php echo $lista->ciudad; ?></td>
                                <td><?php echo $lista->provincia; ?></td>
                                <td><?php echo $lista->ocupacion; ?></td>
                                <td><?php echo $lista->entidad; ?></td>
                                <td><?php echo $lista->iee; ?></td>
                                <td><?php echo $lista->wpa; ?></td>
                                <td><?php echo $lista->areas; ?></td>
                                <td><a class="btn btn-sm btn-primary" href="?op=verGafeteAutor">Ver</a></td>
                                <td><a class="btn btn-sm btn-primary" href="">Ver</a></td>
                                <td><a class="btn btn-sm btn-primary" href="">Editar</a></td>
                                <td><a class="btn btn-sm btn-primary" href="?op=eliminarAutor">Eliminar</a></td>
                                <td><span class="text-success"><?php ?></span></td>
                            </tr>
                        <?php
                            $n++;
                        }
                        ?>
                    </tbody>

                    <tbody>
                        <tr>
                            <td>20-70-5165</td>
                            <td>Jeymar</td>
                            <td>Herrera</td>
                            <td>6044-1464</td>
                            <td>Femenino</td>
                            <td>jeymarherrera@gmail.com</td>
                            <td>Panama</td>
                            <td>Panama</td>
                            <td>Panama</td>
                            <td>Funcionario UTP</td>
                            <td>Universidad Tecnologica de Panama</td>
                            <td>Si</td>
                            <td>No</td>
                            <td>Tecnologia</td>
                            <td><a class="btn btn-sm btn-primary" href="">Ver</a></td>
                            <td><a class="btn btn-sm btn-primary" href="">Ver</a></td>
                            <td><a class="btn btn-sm btn-primary" href="">Editar</a></td>
                            <td><a class="btn btn-sm btn-primary" href="">Eliminar</a></td>
                        </tr>
                        <tr>
                            <td>20-70-4534</td>
                            <td>Jeymar</td>
                            <td>Herrera</td>
                            <td>6044-1464</td>
                            <td>Femenino</td>
                            <td>jey@gmail.com</td>
                            <td>Panama</td>
                            <td>Panama</td>
                            <td>Panama</td>
                            <td>Funcionario UTP</td>
                            <td>Universidad Tecnologica de Panama</td>
                            <td>Si</td>
                            <td>No</td>
                            <td>Tecnologia</td>
                            <td><a class="btn btn-sm btn-primary" href="">Ver</a></td>
                            <td><a class="btn btn-sm btn-primary" href="">Ver</a></td>
                            <td><a class="btn btn-sm btn-primary" href="">Editar</a></td>
                            <td><a class="btn btn-sm btn-primary" href="">Eliminar</a></td>
                        </tr>
                        <tr>
                            <td>20-70-6546</td>
                            <td>Jeymar</td>
                            <td>Herrera</td>
                            <td>6044-1464</td>
                            <td>Femenino</td>
                            <td>jherrera@gmail.com</td>
                            <td>Panama</td>
                            <td>Panama</td>
                            <td>Panama</td>
                            <td>Funcionario UTP</td>
                            <td>Universidad Tecnologica de Panama</td>
                            <td>Si</td>
                            <td>No</td>
                            <td>Tecnologia</td>
                            <td><a class="btn btn-sm btn-primary" href="">Ver</a></td>
                            <td><a class="btn btn-sm btn-primary" href="">Ver</a></td>
                            <td><a class="btn btn-sm btn-primary" href="">Editar</a></td>
                            <td><a class="btn btn-sm btn-primary" href="">Eliminar</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- profesionales -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Profesionales Registrados</h6>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Buscar">
                </form>
            </div>

            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col">Cedula</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Sexo</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Pais de Residencia</th>
                            <th scope="col">Ciudad</th>
                            <th scope="col">Provincia</th>
                            <th scope="col">Ocupacion</th>
                            <th scope="col">Entidad</th>
                            <th scope="col">Miembro IEEE</th>
                            <th scope="col">Miembro WPA</th>
                            <th scope="col">Areas de Interes</th>
                            <th scope="col">Gafete</th>
                            <th scope="col">Certificados</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Eliminar</th>
                        </tr>
                    </thead>


                    <tbody>
                        <?php
                        $n = 1;
                        foreach ($listaProfesionales as $lista) {
                        ?>
                            <tr>
                                <td><?php echo $lista->cedula; ?></td>
                                <td><?php echo $lista->nombre; ?></td>
                                <td><?php echo $lista->apellido; ?></td>
                                <td><?php echo $lista->telefono; ?></td>
                                <td><?php echo $lista->sexo; ?></td>
                                <td><?php echo $lista->correo; ?></td>
                                <td><?php echo $lista->pais; ?></td>
                                <td><?php echo $lista->ciudad; ?></td>
                                <td><?php echo $lista->provincia; ?></td>
                                <td><?php echo $lista->ocupacion; ?></td>
                                <td><?php echo $lista->entidad; ?></td>
                                <td><?php echo $lista->iee; ?></td>
                                <td><?php echo $lista->wpa; ?></td>
                                <td><?php echo $lista->areas; ?></td>
                                <td><a class="btn btn-sm btn-primary" href="?op=verGafeteProfesional">Ver</a></td>
                                <td><a class="btn btn-sm btn-primary" href="?op=verCertificadoProf">Ver</a></td>
                                <td><a class="btn btn-sm btn-primary" href="">Editar</a></td>
                                <td><a class="btn btn-sm btn-primary" href="?op=eliminarProfesional">Eliminar</a></td>
                                <td><span class="text-success"><?php ?></span></td>
                            </tr>
                        <?php
                            $n++;
                        }
                        ?>
                    </tbody>

                    <tbody>
                        <tr>
                            <td>20-70-5165</td>
                            <td>Jeymar</td>
                            <td>Herrera</td>
                            <td>6044-1464</td>
                            <td>Femenino</td>
                            <td>jeymarherrera@gmail.com</td>
                            <td>Panama</td>
                            <td>Panama</td>
                            <td>Panama</td>
                            <td>Funcionario UTP</td>
                            <td>Universidad Tecnologica de Panama</td>
                            <td>Si</td>
                            <td>No</td>
                            <td>Tecnologia</td>
                            <td><a class="btn btn-sm btn-primary" href="">Ver</a></td>
                            <td><a class="btn btn-sm btn-primary" href="">Ver</a></td>
                            <td><a class="btn btn-sm btn-primary" href="">Editar</a></td>
                            <td><a class="btn btn-sm btn-primary" href="">Eliminar</a></td>
                        </tr>
                        <tr>
                            <td>20-70-4534</td>
                            <td>Jeymar</td>
                            <td>Herrera</td>
                            <td>6044-1464</td>
                            <td>Femenino</td>
                            <td>jey@gmail.com</td>
                            <td>Panama</td>
                            <td>Panama</td>
                            <td>Panama</td>
                            <td>Funcionario UTP</td>
                            <td>Universidad Tecnologica de Panama</td>
                            <td>Si</td>
                            <td>No</td>
                            <td>Tecnologia</td>
                            <td><a class="btn btn-sm btn-primary" href="">Ver</a></td>
                            <td><a class="btn btn-sm btn-primary" href="">Ver</a></td>
                            <td><a class="btn btn-sm btn-primary" href="">Editar</a></td>
                            <td><a class="btn btn-sm btn-primary" href="">Eliminar</a></td>
                        </tr>
                        <tr>
                            <td>20-70-6546</td>
                            <td>Jeymar</td>
                            <td>Herrera</td>
                            <td>6044-1464</td>
                            <td>Femenino</td>
                            <td>jherrera@gmail.com</td>
                            <td>Panama</td>
                            <td>Panama</td>
                            <td>Panama</td>
                            <td>Funcionario UTP</td>
                            <td>Universidad Tecnologica de Panama</td>
                            <td>Si</td>
                            <td>No</td>
                            <td>Tecnologia</td>
                            <td><a class="btn btn-sm btn-primary" href="">Ver</a></td>
                            <td><a class="btn btn-sm btn-primary" href="">Ver</a></td>
                            <td><a class="btn btn-sm btn-primary" href="">Editar</a></td>
                            <td><a class="btn btn-sm btn-primary" href="">Eliminar</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Estudiantes -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Estudiantes Registrados</h6>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Buscar">
                </form>
            </div>

            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col">Cedula</th>
                            <th scope="col">Codigo</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Sexo</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Pais de Residencia</th>
                            <th scope="col">Ciudad</th>
                            <th scope="col">Provincia</th>
                            <th scope="col">Ocupacion</th>
                            <th scope="col">Entidad</th>
                            <th scope="col">Miembro IEEE</th>
                            <th scope="col">Miembro WPA</th>
                            <th scope="col">Areas de Interes</th>
                            <th scope="col">Gafete</th>
                            <th scope="col">Certificados</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Eliminar</th>
                        </tr>
                    </thead>


                    <tbody>
                        <?php
                        $n = 1;
                        foreach ($listaEstudiantes as $lista) {
                        ?>
                            <tr>
                                <td><?php echo $lista->cedula; ?></td>
                                <td><?php echo $lista->nombre; ?></td>
                                <td><?php echo $lista->apellido; ?></td>
                                <td><?php echo $lista->telefono; ?></td>
                                <td><?php echo $lista->sexo; ?></td>
                                <td><?php echo $lista->correo; ?></td>
                                <td><?php echo $lista->pais; ?></td>
                                <td><?php echo $lista->ciudad; ?></td>
                                <td><?php echo $lista->provincia; ?></td>
                                <td><?php echo $lista->ocupacion; ?></td>
                                <td><?php echo $lista->entidad; ?></td>
                                <td><?php echo $lista->iee; ?></td>
                                <td><?php echo $lista->wpa; ?></td>
                                <td><?php echo $lista->areas; ?></td>
                                <td><a class="btn btn-sm btn-primary" href="?op=verGafeteEstudiante">Ver</a></td>
                                <td><a class="btn btn-sm btn-primary" href="?op=verCertificadoEstudiante">Ver</a></td>
                                <td><a class="btn btn-sm btn-primary" href="">Editar</a></td>
                                <td><a class="btn btn-sm btn-primary" href="?op=eliminarEstudiante">Eliminar</a></td>
                                <td><span class="text-success"><?php ?></span></td>
                            </tr>
                        <?php
                            $n++;
                        }
                        ?>
                    </tbody>

                    <tbody>
                        <tr>
                            <td>20-70-5165</td>
                            <td>210-2023-323</td>
                            <td>Jeymar</td>
                            <td>Herrera</td>
                            <td>6044-1464</td>
                            <td>Femenino</td>
                            <td>jeymarherrera@gmail.com</td>
                            <td>Panama</td>
                            <td>Panama</td>
                            <td>Panama</td>
                            <td>Funcionario UTP</td>
                            <td>Universidad Tecnologica de Panama</td>
                            <td>Si</td>
                            <td>No</td>
                            <td>Tecnologia</td>
                            <td><a class="btn btn-sm btn-primary" href="">Ver</a></td>
                            <td><a class="btn btn-sm btn-primary" href="">Ver</a></td>
                            <td><a class="btn btn-sm btn-primary" href="">Editar</a></td>
                            <td><a class="btn btn-sm btn-primary" href="">Eliminar</a></td>
                        </tr>
                        <tr>
                            <td>20-70-4534</td>
                            <td>210-6456-645</td>
                            <td>Jeymar</td>
                            <td>Herrera</td>
                            <td>6044-1464</td>
                            <td>Femenino</td>
                            <td>jey@gmail.com</td>
                            <td>Panama</td>
                            <td>Panama</td>
                            <td>Panama</td>
                            <td>Funcionario UTP</td>
                            <td>Universidad Tecnologica de Panama</td>
                            <td>Si</td>
                            <td>No</td>
                            <td>Tecnologia</td>
                            <td><a class="btn btn-sm btn-primary" href="">Ver</a></td>
                            <td><a class="btn btn-sm btn-primary" href="">Ver</a></td>
                            <td><a class="btn btn-sm btn-primary" href="">Editar</a></td>
                            <td><a class="btn btn-sm btn-primary" href="">Eliminar</a></td>
                        </tr>
                        <tr>
                            <td>20-70-6546</td>
                            <td>210-4534-455</td>
                            <td>Jeymar</td>
                            <td>Herrera</td>
                            <td>6044-1464</td>
                            <td>Femenino</td>
                            <td>jherrera@gmail.com</td>
                            <td>Panama</td>
                            <td>Panama</td>
                            <td>Panama</td>
                            <td>Funcionario UTP</td>
                            <td>Universidad Tecnologica de Panama</td>
                            <td>Si</td>
                            <td>No</td>
                            <td>Tecnologia</td>
                            <td><a class="btn btn-sm btn-primary" href="">Ver</a></td>
                            <td><a class="btn btn-sm btn-primary" href="">Ver</a></td>
                            <td><a class="btn btn-sm btn-primary" href="">Editar</a></td>
                            <td><a class="btn btn-sm btn-primary" href="">Eliminar</a></td>
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