        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="?op=panel" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><img class="rounded-circle" src="public/img/utp.svg" alt="" style="width: 40px; height: 40px;"> UTP ADMIN</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">

                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"><?php echo $_SESSION["user"] ?></h6>
                        <!-- <span>Admin</span> -->
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="?op=panel" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Panel</a>
                    <a href="?op=congresos" class="nav-item nav-link"><i class="fa fa-calendar me-2"></i>Congresos</a>
                    <a href="?op=conferencias" class="nav-item nav-link"><i class="fa fa-calendar me-2"></i>Conferencias</a>
                    <a href="?op=eventos" class="nav-item nav-link"><i class="fa fa-calendar me-2"></i>Eventos</a>
                    <a href="?op=areas" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Áreas</a>
                    <a href="?op=salas" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Salas</a>                    
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-user me-2"></i>Usuarios</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="?op=admin" class="dropdown-item">Administradores</a>
                            <a href="?op=invitados" class="dropdown-item">Usuarios Registrados</a>
                        </div>
                    </div>
                    <a href="?op=articulos" class="nav-item nav-link"><i class="fa fa-file me-2"></i>Articulos</a>
                    <a href="?op=membresias" class="nav-item nav-link"><i class="fa fa-file me-2"></i>Membresias</a>
                    <a href="?op=certificados" class="nav-item nav-link"><i class="fa fa-file me-2"></i>Certificados</a>
                    <a href="?op=reportes" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Reportes</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Mensajes</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jeymar Herrera te ha enviado un mensaje</h6>
                                        <small>hace 15 minutos</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jeymar Herrera te ha enviado un mensaje</h6>
                                        <small>hace 15 minutos</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jeymar Herrera te ha enviado un mensaje</h6>
                                        <small>hace 15 minutos</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">Ver todos los mensajes.</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-user me-lg-2"></i>
                            
                            <!-- <span class="d-none d-lg-inline-flex">Admin</span> -->
                            <span class="d-none d-lg-inline-flex"><?php echo $_SESSION["user"] ?></span></a>

                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">Configurar</a>
                            <a href="?op=salir" class="dropdown-item">Cerrar Sesión</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->