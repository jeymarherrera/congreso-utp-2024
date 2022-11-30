<?php
session_start(); // Comienzo de la sesión

//Librería para enviar email
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'public/phpmailer/src/Exception.php';
require 'public/phpmailer/src/PHPMailer.php';
require 'public/phpmailer/src/SMTP.php';
//-
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
    private $modelUsuario4;
    private $modelCongreso;
    private $modelConferencia1;
    private $modelConferencia2;
    private $modelEvento;
    private $modelArea1;
    private $modelSala1;
    private $modelArticulo;
    private $modelUbicacion;
    private $modelEntidad;
    private $modelCertificado;

    public function __CONSTRUCT()
    {
        $this->modelUsuario1 = new Registro();
        $this->modelUsuario2 = new Usuarios();
        $this->modelUsuario4 = new Usuarios();
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
        $this->modelCertificado = new Certificados();
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

        $tipo = $usuario->tipo_usuario = $_REQUEST['tipoUsuario'];
        $usuario->nombre = $_REQUEST['nombre'];
        $usuario->apellido  = $_REQUEST['apellido'];
        $usuario->cedula = $_REQUEST['cedula'];
        $usuario->contrasena = md5($_REQUEST['contrasena']);
        if ($_REQUEST['IEEE'] == "no") {
            $usuario->id_ieee = null;
        }else {
            $usuario->id_ieee = intval($_REQUEST['id_ieee']);
        }
            
        $usuario->id_wpa = $_REQUEST['wpa'];
        $usuario->telefono  = $_REQUEST['paper1'];
        $usuario->sexo  = $_REQUEST['paper2_'];
        $usuario->correo = $_REQUEST['paper3_'];
        $usuario->sexo  = $_REQUEST['sexo'];
        $usuario->telefono  = $_REQUEST['telefono'];
        $usuario->id_pais  = $_REQUEST['pais'];
        if ($_REQUEST['provincia'] == 'Seleccione su provincia') {
            $usuario->id_provincia  = NULL;
        } else {
            $usuario->id_provincia  = $_REQUEST['provincia'];

        }
        $usuario->ciudad = $_REQUEST['ciudad'];
        $usuario->correo = $_REQUEST['correo'];
        $usuario->id_ocupacion = $_REQUEST['ocupacion'];
        if (isset($_REQUEST['institucion'])) {
            $usuario->id_entidad = $_REQUEST['institucion'];
        }
        $usuario->cod_estudiante = $_REQUEST['idEst'];
        $usuario->id_tipo = '2';
        $usuario->metodo = $_REQUEST['tipoPago'];
        $usuario->descuento = 0.00;
        if (isset($_REQUEST['cena'])) {
            $cena = $usuario->cena = $_REQUEST['cena'];
        } else {
            $cena = $usuario->cena = 0.00;
        }
        $monto = $usuario->monto = 75;
        $comision = $usuario->comision = 0.50;
        $comisionPago = $usuario->comision_pago = 3.75;
        $usuario->monto_total = $monto + $comision + $comisionPago + $cena;
        $usuario->estado = 1;
        $usuario->id_entidad = 1;

        // $informacion = $usuario->nombre . ' ' . $usuario->apellido . ' ' . $usuario->cedula;
        $informacion = $usuario->cedula;
        $correo = $usuario->correo;
        $this->GenerarQR($informacion);

        $carpeta = "public/temp/";
        $nombreCod = $usuario->cedula .".png";
        // $temp = "public/temp/";
        // $src = $carpeta.$nombreCod;
        // move_uploaded_file($_FILES['foto']['tmp_name'], $src);
        $imagen = $carpeta.$nombreCod;

        $usuario->gafete = $imagen;

        //$usuario->gafete = 'public/temp/test.png';

        if ($tipo == "Estudiante UTP" || $tipo == "Estudiante nacional" || $tipo == "Estudiante internacional") {
            if ($usuario->tipo_usuario == "Estudiante UTP") {
                $usuario->id_entidad = 1;
            }
            $this->resp = $this->modelUsuario1->Registro($usuario);

            /* if ($this->resp == 0) {
                $this->EnviarEmail($correo);
            }
            else {
                header('Location: ?op=crear&msg=Error de registro&t=text-danger');

            } */
        } elseif ($tipo == "Autor") {
            $usuario->monto = 325;
            $usuario->comision_pago = 16.25;
            $usuario->comision = 0.50;
            $usuario->monto_total = 341.75 + $cena;
            $this->resp = $this->modelUsuario1->RegistrarAutor($usuario);
        } elseif ($tipo == "Funcionario UTP" || $tipo == "Profesional nacional" || $tipo == "Profesional internacional") {
            if ($tipo == "Funcionario UTP") {
                $usuario->id_entidad = 1;
            }
            $this->resp = $this->modelUsuario1->RegistrarProfesional($usuario);
        }

        $this->EnviarEmail($correo);
       // header('Location: ?op=crear&msg=' . $this->resp);
    }

    public function GenerarQR($informacion)
    {
        //Agregamos la libreria para genera códigos QR
        include('public/phpqrcode/qrlib.php');

        //Declaramos una carpeta temporal para guardar la imagenes generadas
        $dir = 'public/temp/';

        //Si no existe la carpeta la creamos
        if (!file_exists($dir))
            mkdir($dir);

        //Declaramos la ruta y nombre del archivo a generar
        $filename = $dir . $informacion .'.png';

        //Parametros de Condiguración

        $tamaño = 7; //Tamaño de Pixel
        $level = 'H'; //Precisión Alta
        $framSize = 3; //Tamaño en blanco
        $contenido = $informacion; // contenido del codigo qr

        //Enviamos los parametros a la Función para generar código QR 
        QRcode::png($contenido, $filename, $level, $tamaño, $framSize);


        // echo '<meta http-equiv="refresh" content="0;url=?op=crear&msg=Se ha enviado un correo electrónico para confrimar su inscripción&t=text-success">';
    }

    public function EnviarEmail($correo)
    {

        $consultarEmail = new Usuario();

        $restablecer = new Usuario();
        echo $restablecer->email = $correo;

        //Enviar email
        $mail = new PHPMailer(true);
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = constant('CORREO_REMITENTE');                     //SMTP username
        $mail->Password   = constant('CORREO_PASS');                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;

        //Recipients
        $mail->setFrom(constant('CORREO_REMITENTE'), 'CONGRESO UTP');
        $mail->addAddress($restablecer->email);
        //plantilla HTML

        $mensajeHTML = '
                <p align="center"> 
                <img src="https://utp.ac.pa/documentos/2015/imagen/logo_utp_1_72.png" width="100px" height="100px" >
                </p>
                <p align="center">Felicidades su inscripción ha sido procesada con éxito.</p>
                <p align="left"><b>Puede utilizar la contrase&ntilde;a y correo que ingresó en el formulario para acceder a nuestra app móvil. </p>

                <p align="left"><b>El código QR adjunto será utilizado para validar su ingreso al congreso y a las diferentes presentaciones.: </b></p>
                <p align="left">
                </p>';


        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Registro exitoso';
        $mail->addAttachment('public/temp/test.png', 'test.png');
        $mail->Body    = $mensajeHTML;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo '<meta http-equiv="refresh" content="0;url=?op=crear&msg=Revise la bandeja de entrada de su correo&t=text-success">';
        //header('Location:?op=crear&msg=Se ha enviado un correo electrónico de confirmación&t=text-success');


    }


    public function Login()
    {
        require("view/signin.php");
    }

    public function Ingresar()
    {
        $ingresarUsuario = new usuario();

        $ingresarUsuario->correo = $_REQUEST['correo'];
        $ingresarUsuario->contrasena = md5($_REQUEST['contrasena']);

        //Verificamos si existe en la base de datos
        if ($resultado = $this->modelUsuario3->ObtenerTodosLosAdmin($ingresarUsuario)) {
            $_SESSION["acceso"] = true;
            $_SESSION["id"] = $resultado->id_administrador;
            //$_SESSION["nivel"] = $resultado->nivel;
            $_SESSION["user"] = $resultado->nombre . " " . $resultado->apellido;

            echo '<meta http-equiv="refresh" content="0;url=?op=permitido">';
            //header('Location:https://fisc-ds7.000webhostapp.com/?op=permitido');

        } else {
            header('Location: ?op=login&msg=Su contrasena o usuario está incorrecto');
        }
    }

    public function Recover()
    {
        require("view/recover.php");
    }

    public function Panel()
    {

        $listaUsuario = new Usuarios();
        $listaUsuario = $this->modelUsuario2->CantidadAdmin();

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
        $ponencia = new Eventos();

        $ponencia->ponente = $_REQUEST['ponente'];
        $ponencia->titulo = $_REQUEST['titulo'];
        $ponencia->fecha_inicio = $_REQUEST['fecha_inicio'];
        $ponencia->fecha_fin = $_REQUEST['fecha_fin'];
        $ponencia->id_evento = $_REQUEST['id_evento'];

        $this->resp = $this->modelEvento->CrearPonencia($ponencia);

        header('Location: ?op=evento&msg=' . $this->resp);
    }

    public function CrearEvento()
    {
        $listaEvento = new Eventos();
        $listaEvento = $this->modelEvento->ObtenerTodasLosEventos();

        $listaPonencias = new Eventos();
        $listaPonencias = $this->modelEvento->ObtenerTodasLasPonencias();
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

        $listaProfesionales = new Usuarios();
        $listaProfesionales = $this->modelUsuario2->ObtenerCertificadoProfesional();

        $listaProfesionalesEv = new Usuarios();
        $listaProfesionalesEv = $this->modelUsuario2->ObtenerCertificadoProfesionalEvento();

        $listaEstudiantes = new Usuarios();
        $listaEstudiantes = $this->modelUsuario2->ObtenerCertificadoEstudiante();

        $listaEstudianteEv = new Usuarios();
        $listaEstudianteEv = $this->modelUsuario2->ObtenerCertificadoEstudianteEvento();

        require("view/certificados.php");
    }

    public function VerCertificados($id)
    {
        $estudianteCongreso = new Certificados();
        $estudianteCongreso = $this->modelCertificado->ObtenerCertificadoEstudianteCongreso($id);
        // $this->resp = $this->modelUsuario2->verCertificado($id);
        // header('Location: ?op=certificados&msg=' . $this->resp);
        // $listaEstudiantesEve = new Usuarios();
        // $listaEstudiantesEve = $this->modelUsuario2->ObetenerCertificadosEstudianteEve();
        require("view/generar_certificado.php");
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
        $admin->contrasena = md5($_REQUEST['contrasena']);
        $admin->id_pais = $_REQUEST['pais'];
        $admin->ciudad = $_REQUEST['ciudad'];
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
        $conferencista->contrasena = md5($_REQUEST['contrasena']);
        $conferencista->id_pais = $_REQUEST['pais'];
        $conferencista->ciudad = $_REQUEST['ciudad'];
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
        //$conferencista = new Usuario();



        //  $this->resp = $this->modelUsuario2->ObtenerGafete($conferencista);

        header('Location: ?op=invitados&msg=' . $this->resp);
    }

    public function VerMensajes()
    {
        require("view/mensajes.php");
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

    public function verGafeteEstudiante($id)
    {
        $usuario = new Usuarios();
        $usuario = $this->resp = $this->modelUsuario2->ObtenerGafeteEstudiante('8-972-1812');

        header('Location: ?op=certificados&msg=' . $this->resp);
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

        // $this->resp = $this->modelUsuario2->ObtenerGafeteEstudiante();

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
        $sala = new Salas();
        $sala = $this->modelSala1->ObtenerTodasLasSalas();

        $congreso = new Congreso();
        $congreso = $this->modelCongreso->ObtenerTodosLosCongresos();

        require("view/agregar-evento.php");
    }

    public function RegistrarEvento()
    {
        $evento = new Eventos();

        $evento->titulo = $_REQUEST['titulo'];
        $evento->horas = $_REQUEST['horas'];
        $evento->cantidad_ponencias = $_REQUEST['cantidad'];
        $evento->fecha_inicio = $_REQUEST['fecha_inicio'];
        $evento->fecha_fin = $_REQUEST['fecha_fin'];
        $evento->id_sala = $_REQUEST['sala'];
        $evento->id_congreso = $_REQUEST['congreso'];

        $this->resp = $this->modelEvento->CrearConferencia($evento);

        header('Location: ?op=evento&msg=' . $this->resp);
    }

    public function nuevaPonencia()
    {
        $listaPonente = new Conferencias();
        $listaPonente = $this->modelEvento->ObtenerTodosLosAutores();

        $listaEvento = new Conferencias();
        $listaEvento = $this->modelEvento->ObtenerTodasLosEventos();
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
