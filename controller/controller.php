<?php
session_start(); // Comienzo de la sesión

require_once 'model/Aplicacion/usuario.php';
require_once 'model/Panel/Usuarios.php';
require_once 'model/Panel/Salas.php';
require_once 'model/Panel/Eventos.php';
require_once 'model/Panel/Congreso.php';
require_once 'model/Panel/Conferencias.php';
require_once 'model/Panel/Certificados.php';
require_once 'model/Panel/Areas.php';
require_once 'model/Inicio/Itinerario.php';
require_once 'model/Inicio/Registro.php';
require_once 'model/Panel/Articulos.php';
require_once 'model/Panel/Ubicacion.php';
require_once 'model/Panel/Entidades.php';

class Controller
{
    private $modelUsuario1;
    private $modelUsuario2;
    private $modelUsuario3;
    private $modelCongreso;
    private $modelConferencia1;
    private $modelConferencia2;
    private $modelEvento;
    private $modelArea1;
    private $modelSala1;
    private $modelArticulo;
    private $modelUbicacion;
    private $modelEntidad;

    public function __CONSTRUCT()
    {
        $this->modelUsuario1 = new Registro();
        $this->modelUsuario2 = new Usuarios();
        $this->modelUsuario3 = new usuario();
        $this->modelCongreso = new Congreso();
        $this->modelConferencia1 = new Conferencias();
        $this->modelConferencia2 = new Conferencias();
        $this->modelEvento = new Eventos();
        $this->modelArea1 = new Areas();
        $this->modelSala1 = new Salas();
        $this->modelArticulo = new Articulos();
        $this->modelUbicacion = new Ubicacion();
        $this->modelEntidad = new Entidades();
    }

    public function Index()
    {
        //Le paso los datos a la vista
        require("view/home.php");
    }

    public function Conferencista()
    {
        require("view/speakers.php");
    }

    public function Itinerario()
    {
        require("view/schedule.php");
    }

    public function ECA()
    {
        require("view/eca.php");
    }

    public function CrearCuenta()
    {
        $listaEntidad = new Entidades();
        $listaEntidad = $this->modelEntidad->ObtenerTodasLasEntidades();

        $listaOcupacion = new Entidades();
        $listaOcupacion = $this->modelEntidad->ObtenerTodasLasOcupacion();

        $listaPais = new Ubicacion();
        $listaPais = $this->modelUbicacion->ConsultarPais();

        $listaProvincia = new Ubicacion();
        $listaProvincia = $this->modelUbicacion->ConsultarProvincia();

        $listaCiudad = new Ubicacion();
        $listaCiudad = $this->modelUbicacion->ConsultarCiudad();
        require("view/registro.php");
    }

    public function Pagar()
    {
        require_once("view/pagoRegistro.php");
    }

    public function RegistrarUsuario()
    {
        $usuario = new Usuario();

        $usuario->tipo_usuario = $_REQUEST['tipoUsuario'];
        $usuario->nombre = $_REQUEST['nombre'];
        $usuario->apellido  = $_REQUEST['apellido'];
        $usuario->cedula = $_REQUEST['cedula'];
        $usuario->contrasena = $_REQUEST['contrasena'];
        $usuario->id_ieee = $_REQUEST['mem'];
        $usuario->id_wpa = $_REQUEST['wpa'];

        // $usuario->telefono  = $_REQUEST['paper1'];
        // $usuario->sexo  = $_REQUEST['paper_2'];
        // $usuario->correo = $_REQUEST['paper_3'];
        $usuario->sexo  = $_REQUEST['sexo'];
        $usuario->telefono  = $_REQUEST['telefono'];
        $usuario->id_pais  = $_REQUEST['pais'];
        $usuario->id_provincia  = $_REQUEST['provincia'];
        $usuario->id_ciudad = $_REQUEST['ciudad'];
        $usuario->correo = $_REQUEST['correo'];
        $usuario->id_ocupacion = $_REQUEST['ocupacion'];
        $usuario->id_entidad = $_REQUEST['institucion'];
        $usuario->cod_estudiante = $_REQUEST['idEst'];


        //$usuario->id_pago = $_REQUEST['tipoPago'];
        //$usuario->fecha = $_REQUEST['fecha'];
        $usuario->metodo = $_REQUEST['tipoPago'];
        //$usuario->descuento = $_REQUEST[''];
        $usuario->cena = $_REQUEST['cenas'];
        $usuario->comision = 75;
        $usuario->comision_pago = 3.75;
        $usuario->monto_total = 79.25;
        $usuario->estado = 1;



        /* if (!isset($_GET['tiposuario'])) {
            $tipoUsuario = $_GET['tipoUsuario'];

            if ($tipoUsuario == "Autor") {
                $usuario->tipo_usuario = $_REQUEST['tipoUsuario'];
                $usuario->nombre = $_REQUEST['nombre'];
                $usuario->apellido  = $_REQUEST['apellido'];

                // $usuario->telefono  = $_REQUEST['paper1'];
                // $usuario->sexo  = $_REQUEST['paper_2'];
                // $usuario->correo = $_REQUEST['paper_3'];

                $usuario->telefono  = $_REQUEST['telefono'];
                $usuario->sexo  = $_REQUEST['sexo'];
                $usuario->correo = $_REQUEST['correo'];

                $usuario->id_ocupacion = $_REQUEST['ocupacion'];
                $usuario->id_entidad = $_REQUEST['institucion'];
                $usuario->id_ieee = $_REQUEST['memb'];
                $usuario->id_wpa = $_REQUEST['wpa'];
                $usuario->id_pago = $_REQUEST['tipoPago'];
                $usuario->fecha = $_REQUEST['fecha'];
                //$usuario->id_tipo = $_REQUEST['nombreTarj'];
                $usuario->metodo = $_REQUEST['tipoPago'];
                $usuario->descuento = $_REQUEST[''];
                $usuario->cena = $_REQUEST['cenas'];
                $usuario->comision = 75;
                $usuario->comision_pago = 3.75;
                $usuario->monto_total = 79.25;
                $usuario->estado = $_REQUEST[''];


                $usuario->gafete = $_REQUEST[''];
                $usuario->id_residencia = $_REQUEST[''];

                $this->resp = $this->modelUsuario1->RegistrarAutor($usuario);

                header('Location: ?op=crear&msg=' . $this->resp);

            } elseif ($tipoUsuario == "Estudiante UTP" || "Estudiante nacional" || "Estudiante internacional") {
                $usuario->tipo_usuario = $_REQUEST['tipoUsuario'];
                $usuario->nombre = $_REQUEST['nombre'];
                $usuario->apellido  = $_REQUEST['apellido'];
                $usuario->telefono  = $_REQUEST['telefono'];
                $usuario->cod_estudiante  = $_REQUEST['cedula'];
                $usuario->sexo  = $_REQUEST['sexo'];
                $usuario->correo = $_REQUEST['correo'];
                $usuario->id_ocupacion = $_REQUEST['ocupacion'];
                $usuario->id_entidad = $_REQUEST['institucion'];
                $usuario->id_ieee = $_REQUEST['memb'];
                $usuario->id_wpa = $_REQUEST['wpa'];
                $usuario->id_pago = $_REQUEST['tipoPago'];
                $usuario->fecha = $_REQUEST['fecha'];
                //$usuario->id_tipo = $_REQUEST['nombreTarj'];
                $usuario->metodo = $_REQUEST['tipoPago'];
                $usuario->descuento = $_REQUEST[''];
                $usuario->cena = $_REQUEST['cenas'];
                $usuario->comision = 75;
                $usuario->comision_pago = 3.75;
                $usuario->monto_total = 79.25;
                $usuario->estado = $_REQUEST[''];


                $usuario->gafete = $_REQUEST[''];
                $usuario->id_residencia = $_REQUEST[''];
            }
        } */

        /*  $usuario->id_estudiante = $_REQUEST['idEst'];
        $usuario->cod_estudiante = $_REQUEST[''];
        $usuario->tipo_usuario = $_REQUEST['tipoUsuario'];
        $usuario->nombre = $_REQUEST['nombre'];
        $usuario->apellido  = $_REQUEST['apellido'];
        $usuario->telefono  = $_REQUEST['telefono'];
        $usuario->sexo  = $_REQUEST['sexo'];
        $usuario->correo = $_REQUEST['correo'];
        $usuario->gafete = $_REQUEST[''];
        $usuario->id_residencia = $_REQUEST[''];
        $usuario->id_ocupacion = $_REQUEST['ocupacion'];
        $usuario->id_entidad = $_REQUEST['institucion'];
        $usuario->id_ieee = $_REQUEST['memb'];
        $usuario->id_wpa = $_REQUEST['wpa'];
        $usuario->id_pago = $_REQUEST['tipoPago']; */

        $this->resp = $this->modelUsuario1->Registro($usuario);

        header('Location: ?op=crear&msg=' . $this->resp);
    }

    public function Login()
    {
        require("view/signin.php");
    }

    public function Ingresar()
    {
        $ingresarUsuario = new usuario();

        $ingresarUsuario->correo = $_REQUEST['correo'];
        $ingresarUsuario->contrasena = $_REQUEST['contrasena'];

        //Verificamos si existe en la base de datos
        if ($resultado = $this->modelUsuario3->ObtenerTodosLosAdmin($ingresarUsuario)) {
            $_SESSION["acceso"] = true;
            $_SESSION["id"] = $resultado->id_administrador;
            //$_SESSION["nivel"] = $resultado->nivel;
            $_SESSION["user"] = $resultado->nombre . " " . $resultado->apellido;

            echo '<meta http-equiv="refresh" content="0;url=?op=permitido">';
            //header('Location:https://fisc-ds7.000webhostapp.com/?op=permitido');

        } else {
            header('Location: ?op=login&msg=Su contraseña o usuario está incorrecto');
        }
    }

    public function Recover()
    {
        require("view/recover.php");
    }

    public function Panel()
    {

        $listaUsuario = new Usuarios();
        $listaRegistros = new Usuarios();
        $listaRegistros = $this->modelUsuario2->ObtenerTodosLosRegistros();

        require("view/dashboard.php");
    }
    public function CrearCongreso()
    {
        $listaCongresos = new Congreso();
        $listaCongresos = $this->modelCongreso->ObtenerTodosLosCongresos();
        require("view/congreso.php");
    }

    public function EliminarCongreso($id_congreo)
    {
        $this->resp = $this->modelCongreso->EliminarCongreso($id_congreo);

        header('Location: ?op=congresos&msg=' . $this->resp);
    }

    public function CrearConferencia()
    {
        $listaConferencia = new Conferencias();
        $listaConferencia = $this->modelConferencia1->ObtenerTodasLasConferencias();

        $listaPonencias = new Conferencias();
        $listaPonencias = $this->modelConferencia2->ObtenerTodasLasPonencias();
        require("view/conferencia.php");
    }

    public function RegistrarConferencia()
    {
        $conferencia = new Conferencias();

        $conferencia->titulo = $_REQUEST['titulo'];
        $conferencia->cantidad_ponencias = $_REQUEST['cantidad'];
        $conferencia->fecha_inicio = $_REQUEST['fechaIni'];
        $conferencia->fecha_fin = $_REQUEST['fechaFin'];
        $conferencia->id_sala = $_REQUEST['sala'];
        $conferencia->id_congreso = $_REQUEST['congreso'];

        $this->resp = $this->modelConferencia1->CrearConferencia($conferencia);

        header('Location: ?op=conferencias&msg=' . $this->resp);
    }

    public function eliminarConferencia($id)
    {
        $this->resp = $this->modelConferencia1->EliminarConferencia($id);

        header('Location: ?op=conferencias&msg=' . $this->resp);
    }

    public function RegistrarPonenciaProfesional()
    {
        $ponencia = new Conferencias();

        $ponencia->id_conferencista = $_REQUEST['ponente'];
        $ponencia->titulo = $_REQUEST['titulo'];
        $ponencia->fecha_inicio = $_REQUEST['fecha_inicio'];
        $ponencia->fecha_fin = $_REQUEST['fecha_fin'];
        $ponencia->id_conferencia = $_REQUEST['id_conferencia'];

        $this->resp = $this->modelConferencia2->CrearPonencia($ponencia);

        header('Location: ?op=conferencias&msg=' . $this->resp);
    }

    

    public function RegistrarPonenciaAutor()
    {
        $ponencia = new Conferencias();

        $ponencia->ponente = $_REQUEST['ponente'];
        $ponencia->titulo = $_REQUEST['titulo'];
        $ponencia->fechaIni = $_REQUEST['fechaIni'];
        $ponencia->fechaFin = $_REQUEST['fechaFin'];
        $ponencia->cantidad = $_REQUEST['conferencia'];

        $this->resp = $this->modelConferencia2->CrearPonencia($ponencia);

        header('Location: ?op=conferencias&msg=' . $this->resp);
    }

    public function CrearEvento()
    {
        require("view/evento.php");
    }

    public function AgregarArea()
    {
        $listaAreas = new Areas();
        $listaAreas = $this->modelArea1->ObtenerTodasLasAreas();
        require("view/areas.php");
    }

    public function EliminarArea($id_area)
    {
        $this->resp = $this->modelArea1->EliminarArea($id_area);

        // echo '<meta http-equiv="refresh" content="0;url=?op=areas">';
        header('Location: ?op=areas&msg=' . $this->resp);
    }

    public function RegistrarArea()
    {
        $area = new Areas();

        $area->nombre = $_REQUEST['titulo'];

        $this->resp = $this->modelArea1->crearArea($area);

        header('Location: ?op=areas&msg=' . $this->resp);
    }

    public function AgregarSala()
    {
        $listaSalas = new Salas();
        $listaSalas = $this->modelSala1->ObtenerTodasLasSalas();
        require("view/salas.php");
    }

    public function nuevaSala()
    {
        require("view/agregar-sala.php");
    }

    public function RegistrarSala()
    {

        $sala = new Salas();
        $sala2 = new Salas();

        $sala2 = $this->modelSala1->ObtenerTodasLasSalas();


        $sala->num_sala = $_REQUEST['numero'];
        $sala->cantidad_asientos = $_REQUEST['cantidad'];

        $this->resp = $this->modelSala1->RegistrarSala($sala);

        header('Location: ?op=salas&msg=' . $this->resp);
    }

    public function EliminarSala($id)
    {
        $this->resp = $this->modelSala1->EliminarSala($id);

        header('Location: ?op=salas&msg=' . $this->resp);
    }

    public function GenerarReportes()
    {
        require("view/reportes.php");
    }

    public function GenerarCertificados()
    {
        $listaCertificados = new Usuarios();
        $listaCertificados = $this->modelUsuario2->ObtenerUsuariosCertificado();
        require("view/certificados.php");
    }

    public function AgregarAdmin()
    {
        $listaAdmin = new Usuarios();
        $listaAdmin = $this->modelUsuario2->ObtenerTodosLosAdmin();
        require("view/administradores.php");
    }

    public function nuevoAdministrador()
    {
        $pais = new Ubicacion();
        $pais = $this->modelUbicacion->ConsultarPais();

        $listaProvincia = new Ubicacion();
        $listaProvincia = $this->modelUbicacion->ConsultarProvincia();

        $listaCiudad = new Ubicacion();
        $listaCiudad = $this->modelUbicacion->ConsultarCiudad();

        $listaEntidad = new Entidades();
        $listaEntidad = $this->modelEntidad->ObtenerTodasLasEntidades();

        $listaOcupacion = new Entidades();
        $listaOcupacion = $this->modelEntidad->ObtenerTodasLasOcupacion();
        require("view/agregar-admin.php");
    }

    public function RegistrarAdmin()
    {
        $admin = new Usuario();

        $admin->id_administrador = $_REQUEST['cedula'];
        $admin->nombre = $_REQUEST['nombre'];
        $admin->apellido = $_REQUEST['apellido'];
        $admin->telefono = $_REQUEST['telefono'];
        $admin->sexo = $_REQUEST['sexo'];
        $admin->correo = $_REQUEST['correo'];
        $admin->contrasena = $_REQUEST['contrasena'];
        $admin->id_pais = $_REQUEST['pais'];
        $admin->id_ciudad = $_REQUEST['ciudad'];
        $admin->id_provincia = $_REQUEST['provincia'];
        $admin->id_ocupacion = $_REQUEST['ocupacion'];
        $admin->id_entidad = $_REQUEST['entidad'];

        $this->resp = $this->modelUsuario2->RegistrarAdmin($admin);

        header('Location: ?op=admin&msg=' . $this->resp);
    }

    public function EliminarAdmin($id_admin)
    {
        $this->resp = $this->modelUsuario2->EliminarAdmin($id_admin);

        header('Location: ?op=admin&msg=' . $this->resp);
    }

    public function AgregarInvitado()
    {
        $listaConferencista = new Usuarios();
        $listaConferencista = $this->modelUsuario2->ObtenerTodosLosConferencistas();
        $listaAutores = new Usuarios();
        $listaAutores = $this->modelUsuario2->ObtenerTodosLosAutores();
        $listaProfesionales = new Usuarios();
        $listaProfesionales = $this->modelUsuario2->ObtenerTodosLosProfesionales();
        $listaEstudiantes = new Usuarios();
        $listaEstudiantes = $this->modelUsuario2->ObtenerTodosLosEstudiantes();
        require("view/usuarios.php");
    }

    public function RegistrarConferencista()
    {
        $conferencista = new Conferencias();

        $conferencista->id_conferencista = $_REQUEST['cedula'];
        $conferencista->nombre = $_REQUEST['nombre'];
        $conferencista->apellido = $_REQUEST['apellido'];
        $conferencista->telefono = $_REQUEST['telefono'];
        $conferencista->sexo = $_REQUEST['sexo'];
        $conferencista->correo = $_REQUEST['correo'];
        $conferencista->contraseña = $_REQUEST['contrasena'];
        $conferencista->id_pais = $_REQUEST['pais'];
        $conferencista->id_ciudad = $_REQUEST['ciudad'];
        $conferencista->id_provincia = $_REQUEST['provincia'];
        $conferencista->id_ocupacion = $_REQUEST['ocupacion'];
        $conferencista->id_entidad = $_REQUEST['entidad'];
        // $conferencista->member = $_REQUEST['member'];
        // $conferencista->member2 = $_REQUEST['member2'];

        $this->resp = $this->modelUsuario2->RegistrarConferencista($conferencista);

        header('Location: ?op=invitados&msg=' . $this->resp);
    }

    public function EliminarConferencista($id)
    {
        $this->resp = $this->modelUsuario2->EliminarConferencista($id);

        header('Location: ?op=invitados&msg=' . $this->resp);
    }

    public function verGafete()
    {
        $conferencista = new Usuario();

        $conferencista->id_administrador = $_REQUEST['cedula'];

        $this->resp = $this->modelUsuario2->ObtenerGafete($conferencista);

        header('Location: ?op=invitados&msg=' . $this->resp);
    }

    public function EliminarAutor($id)
    {
        $this->resp = $this->modelUsuario2->EliminarAutor($id);

        header('Location: ?op=invitados&msg=' . $this->resp);
    }

    public function verGafeteAutor()
    {
        $autor = new Usuario();

        $autor->id_autor = $_REQUEST['cedula'];

        $this->resp = $this->modelUsuario2->ObtenerGafeteAutor($autor);

        header('Location: ?op=invitados&msg=' . $this->resp);
    }

    public function EliminarProfesional($id)
    {
        $this->resp = $this->modelUsuario2->EliminarProfesional($id);

        header('Location: ?op=invitados&msg=' . $this->resp);
    }

    public function verGafeteProfesional()
    {
        $profesional = new Usuario();

        $profesional->id_profesional = $_REQUEST['cedula'];

        $this->resp = $this->modelUsuario2->ObtenerGafeteProfesional($profesional);

        header('Location: ?op=invitados&msg=' . $this->resp);
    }

    public function verCertificadoProfesional()
    {
        $profesional = new Usuario();

        $profesional->id_profesional = $_REQUEST['cedula'];

        $this->resp = $this->modelUsuario2->ObtenerCertificadoProfesional($profesional);

        header('Location: ?op=invitados&msg=' . $this->resp);
    }

    public function EliminarEstudiante($id)
    {
        $this->resp = $this->modelUsuario2->EliminarEstudiante($id);

        header('Location: ?op=invitados&msg=' . $this->resp);
    }

    public function verGafeteEstudiante()
    {
        $estudiante = new Usuario();

        $estudiante->id_estudiante = $_REQUEST['cedula'];

        $this->resp = $this->modelUsuario2->ObtenerGafeteEstudiante($estudiante);

        header('Location: ?op=invitados&msg=' . $this->resp);
    }

    public function verCertificadoEstudiante()
    {
        $estudiante = new Usuario();

        $estudiante->id_estudiante = $_REQUEST['cedula'];

        $this->resp = $this->modelUsuario2->ObtenerCertificadoEstudiante($estudiante);

        header('Location: ?op=invitados&msg=' . $this->resp);
    }

    public function AgregarArticulo()
    {
        $listaArticulos = new Articulos();
        $listaArticulos = $this->modelArticulo->ObtenerTodosLosArticulos();
        require("view/articulos.php");
    }

    public function nuevoInvitado()
    {
        $listaPais = new Ubicacion();
        $listaPais = $this->modelUbicacion->ConsultarPais();

        $listaProvincia = new Ubicacion();
        $listaProvincia = $this->modelUbicacion->ConsultarProvincia();

        $listaCiudad = new Ubicacion();
        $listaCiudad = $this->modelUbicacion->ConsultarCiudad();

        $listaEntidad = new Entidades();
        $listaEntidad = $this->modelEntidad->ObtenerTodasLasEntidades();

        $listaOcupacion = new Entidades();
        $listaOcupacion = $this->modelEntidad->ObtenerTodasLasOcupacion();
        require("view/agregar-usuario.php");
    }


    public function nuevoCongreso()
    {
        require("view/agregar-congreso.php");
    }

    public function RegistrarCongreso()
    {
        $congreso = new Congreso();

        $congreso->titulo = $_REQUEST['titulo'];
        $congreso->cantidad_boletos = $_REQUEST['cantidad'];
        $congreso->horas_minimas = $_REQUEST['horas'];
        $congreso->fecha_inicio = $_REQUEST['fechaIni'];
        $congreso->fecha_fin = $_REQUEST['fechaFin'];

        $this->resp = $this->modelCongreso->CrearCongreso($congreso);

        header('Location: ?op=congresos&msg=' . $this->resp);
    }

    public function nuevaConferencia()
    {
        $sala = new Salas();
        $sala = $this->modelSala1->ObtenerTodasLasSalas();

        $congreso = new Congreso();
        $congreso = $this->modelCongreso->ObtenerTodosLosCongresos();

        require("view/agregar-conferencia.php");
    }

    public function nuevoEvento()
    {
        require("view/agregar-evento.php");
    }

    public function nuevaPonencia()
    {
        require("view/agregar-ponencias-autor.php");
    }

    public function NuevaPonenciaPro()
    {
        $listaPonente = new Conferencias();
        $listaPonente = $this->modelConferencia1->ObtenerTodosLosPonentes();

        $listaConferencia = new Conferencias();
        $listaConferencia = $this->modelConferencia2->ObtenerTodasLasConferencias();

        require("view/agregar-ponencias-profesional.php");
    }

    public function eliminarPonenciaPro($id)
    {
        $this->resp = $this->modelConferencia1->EliminarPonenteProf($id);

        header('Location: ?op=conferencias&msg=' . $this->resp);
    }

    public function nuevaArea()
    {
        require("view/agregar-area.php");
    }

}
