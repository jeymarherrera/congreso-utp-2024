<?php
session_start();// Comienzo de la sesión

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
require_once 'model/Panel/Membresias.php';
class Controller
{
    private $modelUsuario1;
    private $modelUsuario2;
    private $modelCongreso;
    private $modelConferencia1;
    private $modelConferencia2;
    private $modelArea1;
    private $modelSala1;
    private $modelArticulo;
    private $modelMembresia1;
    private $modelMembresia2;
    
    public function __CONSTRUCT(){
        $this->modelUsuario1 = new Usuario();
        $this->modelUsuario2 = new Usuarios();
        $this->modelCongreso = new Congreso();
        $this->modelConferencia1 = new Conferencias();
        $this->modelConferencia2 = new Conferencias();
        $this->modelArea1 = new Areas();
        $this->modelSala1 = new Salas();
        $this->modelArticulo = new Articulos();
        $this->modelMembresia1 = new Membresias();
        $this->modelMembresia2 = new Membresias();
    }

    public function Index(){
        //Le paso los datos a la vista
        require("view/home.php");
    }

    public function Conferencista(){
        require("view/speakers.php");
    }

    public function Itinerario(){
        require("view/schedule.php");
    }

    public function ECA(){
        require("view/eca.php");
    }

    public function CrearCuenta(){
        require("view/registro.php");
    }

    public function Pagar()
    {
        require_once("view/pagoRegistro.php");
    }

    public function RegistrarUsuario()
    {
        # code...
    }

    public function Login(){
        require("view/signin.php");
    }

    public function Recover(){
        require("view/recover.php");
    }

    public function Panel(){

        $listaUsuario = new Usuarios();
        $listaRegistros = new Usuarios();
        // $listaUsuario = $this->modelUsuario2->ObtenerTodosLosUsuarios(); 
        $listaRegistros = $this->modelUsuario2->ObtenerTodosLosRegistros();
        
        require("view/dashboard.php");
    }
    public function CrearCongreso(){
        $listaCongresos = new Congreso();
        $listaCongresos = $this->modelCongreso->ObtenerTodosLosCongresos();
        require("view/congreso.php");
    } 

    public function CrearConferencia(){
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
        $conferencia->cantidad = $_REQUEST['cantidad'];
        $conferencia->horas = $_REQUEST['horas'];  
        $conferencia->fechaIni = $_REQUEST['fechaIni'];
        $conferencia->fechaFin = $_REQUEST['fechaFin'];    
        $conferencia->fechaIni = $_REQUEST['sala'];
        $conferencia->fechaFin = $_REQUEST['congreso'];   
      
        $this->resp= $this->modelConferencia1->CrearConferencia($conferencia);

        header('Location: ?op=conferencias&msg='.$this->resp);
    }
    
    public function RegistrarPonencia()
    {
        $ponencia = new Conferencias();

        $ponencia->ponente = $_REQUEST['ponente'];  
        $ponencia->titulo = $_REQUEST['titulo'];
        $ponencia->fechaIni = $_REQUEST['fechaIni'];
        $ponencia->fechaFin = $_REQUEST['fechaFin'];  
        $ponencia->cantidad = $_REQUEST['conferencia'];  
      
        $this->resp= $this->modelConferencia2->CrearPonencia($ponencia);

        header('Location: ?op=conferencias&msg='.$this->resp);
    }

    public function CrearEvento(){
        require("view/evento.php");
    } 
    
    public function AgregarArea(){
        $listaAreas = new Areas();
        $listaAreas = $this->modelArea1->ObtenerTodasLasAreas(); 
        require("view/areas.php");
    } 

    public function EliminarArea()
    {
        $area = new Areas();
 
        $area->nombre = $_REQUEST['id'];
      
        $this->resp= $this->modelArea1->EliminarArea($area);

        header('Location: ?op=areas&msg='.$this->resp);
    }

    public function RegistrarArea()
    {
        $area = new Areas();
 
        $area->nombre = $_POST['titulo'];
      
        $this->resp= $this->modelArea1->crearArea($area);

        header('Location: ?op=areas&msg='.$this->resp);
    }

    public function AgregarSala(){
        $listaSalas = new Salas();
        $listaSalas = $this->modelSala1->ObtenerTodasLasSalas();
        require("view/salas.php");
    } 

    public function nuevaSala(){
        require("view/agregar-sala.php");
    }

    public function RegistrarSala()
    {
        $sala = new Salas();
 
        $sala->numero = $_REQUEST['numero'];
        $sala->cantidad = $_REQUEST['cantidad'];
      
        $this->resp= $this->modelSala1->RegistrarSala($sala);

        header('Location: ?op=salas&msg='.$this->resp);
    }

    public function GenerarReportes(){
        require("view/reportes.php");
    } 

    public function GenerarCertificados(){
        $listaCertificados = new Usuarios();
        $listaCertificados = $this->modelUsuario2->ObtenerUsuariosCertificado();
        require("view/certificados.php");
    } 

    public function AgregarAdmin(){
        $listaAdmin = new Usuarios();
        $listaAdmin = $this->modelUsuario2->ObtenerTodosLosAdmin();
        require("view/administradores.php");
    } 

    public function nuevoAdministrador(){
        require("view/agregar-admin.php");
    } 

    public function RegistrarAdmin()
    {
        $admin = new Usuario();

        $admin->cedula = $_REQUEST['cedula'];  
        $admin->nombre = $_REQUEST['nombre'];
        $admin->apellido = $_REQUEST['apellido'];
        $admin->telefono = $_REQUEST['telefono'];  
        $admin->cantidad = $_REQUEST['sexo']; 
        $admin->correo = $_REQUEST['correo'];  
        $admin->contrasena = $_REQUEST['contrasena'];
        $admin->pais = $_REQUEST['pais'];
        $admin->ciudad = $_REQUEST['ciudad'];  
        $admin->provincia = $_REQUEST['provincia'];
        $admin->ocupacion = $_REQUEST['ocupacion']; 
        $admin->entidad = $_REQUEST['entidad'];  
        $admin->member = $_REQUEST['member'];
        $admin->member2 = $_REQUEST['member2'];

        $this->resp= $this->modelUsuario2->RegistrarAdmin($admin);

        header('Location: ?op=admin&msg='.$this->resp);
    }

    public function EliminarAdmin()
    {
        $admin = new Usuario();

        $admin->id_administrador = $_REQUEST['cedula'];

        $this->resp= $this->modelUsuario2->EliminarAdmin($admin);

        header('Location: ?op=admin&msg='.$this->resp);
    }

    public function AgregarInvitado(){
        $listaConferencista = new Usuarios();
        $listaConferencista = $this->modelUsuario2->ObtenerTodosLosConferencistas();
        $listaAutores = new Usuarios();
        $listaAutores = $this->modelUsuario2->ObtenerTodosLosAutores();
        $listaProfesionales = new Usuarios();
        $listaProfesionales = $this->modelUsuario2->ObtenerTodosLosProfesionales();
        $listaEstudiantes = new Usuarios();
        $listaEstudiantes = $this->modelUsuario2->ObtenerTodosLosProfesionales();
        require("view/usuarios.php");
    } 
    
    public function RegistrarConferencista()
    {
        $conferencista = new Conferencias();

        //$admin->cedula = $_REQUEST['cedula'];  
        $conferencista->nombre = $_REQUEST['nombre'];
        $conferencista->apellido = $_REQUEST['apellido'];
        $conferencista->telefono = $_REQUEST['telefono'];  
        $conferencista->cantidad = $_REQUEST['sexo']; 
        $conferencista->correo = $_REQUEST['correo'];  
        $conferencista->contrasena = $_REQUEST['contrasena'];
        $conferencista->pais = $_REQUEST['pais'];
        $conferencista->ciudad = $_REQUEST['ciudad'];  
        $conferencista->provincia = $_REQUEST['provincia'];
        $conferencista->ocupacion = $_REQUEST['ocupacion']; 
        $conferencista->entidad = $_REQUEST['entidad'];  
        $conferencista->member = $_REQUEST['member'];
        $conferencista->member2 = $_REQUEST['member2'];

        $this->resp= $this->modelUsuario2->RegistrarConferencista($conferencista);

        header('Location: ?op=invitados&msg='.$this->resp);
    }

    public function EliminarConferencista()
    {
        $conferencista = new Usuario();

        $conferencista->id_administrador = $_REQUEST['cedula'];

        $this->resp= $this->modelUsuario2->EliminarConferencista($conferencista);

        header('Location: ?op=invitados&msg='.$this->resp);
    }

    public function verGafete()
    {
        $conferencista = new Usuario();

        $conferencista->id_administrador = $_REQUEST['cedula'];

        $this->resp= $this->modelUsuario2->ObtenerGafete($conferencista);

        header('Location: ?op=invitados&msg='.$this->resp);
    }

    public function EliminarAutor()
    {
        $autor = new Usuario();

        $autor->id_autor = $_REQUEST['cedula'];

        $this->resp= $this->modelUsuario2->EliminarAutor($autor);

        header('Location: ?op=invitados&msg='.$this->resp);
    }

    public function verGafeteAutor()
    {
        $autor = new Usuario();

        $autor->id_autor = $_REQUEST['cedula'];

        $this->resp= $this->modelUsuario2->ObtenerGafeteAutor($autor);

        header('Location: ?op=invitados&msg='.$this->resp);
    }

    public function EliminarProfesional()
    {
        $profesional = new Usuario();

        $profesional->id_profesional = $_REQUEST['cedula'];

        $this->resp= $this->modelUsuario2->EliminarProfesional($profesional);

        header('Location: ?op=invitados&msg='.$this->resp);
    }

    public function verGafeteProfesional()
    {
        $profesional = new Usuario();

        $profesional->id_profesional = $_REQUEST['cedula'];

        $this->resp= $this->modelUsuario2->ObtenerGafeteProfesional($profesional);

        header('Location: ?op=invitados&msg='.$this->resp);
    }

    public function verCertificadoProfesional()
    {
        $profesional = new Usuario();

        $profesional->id_profesional = $_REQUEST['cedula'];

        $this->resp= $this->modelUsuario2->ObtenerCertificadoProfesional($profesional);

        header('Location: ?op=invitados&msg='.$this->resp);
    }

    public function EliminarEstudiante()
    {
        $estudiante = new Usuario();

        $estudiante->id_estudiante = $_REQUEST['cedula'];

        $this->resp= $this->modelUsuario2->EliminarEstudiante($estudiante);

        header('Location: ?op=invitados&msg='.$this->resp);
    }

    public function verGafeteEstudiante()
    {
        $estudiante = new Usuario();

        $estudiante->id_estudiante = $_REQUEST['cedula'];

        $this->resp= $this->modelUsuario2->ObtenerGafeteEstudiante($estudiante);

        header('Location: ?op=invitados&msg='.$this->resp);
    }

    public function verCertificadoEstudiante()
    {
        $estudiante = new Usuario();

        $estudiante->id_estudiante = $_REQUEST['cedula'];

        $this->resp= $this->modelUsuario2->ObtenerCertificadoEstudiante($estudiante);

        header('Location: ?op=invitados&msg='.$this->resp);
    }

    public function AgregarArticulo(){
        $listaArticulos = new Articulos();
        $listaArticulos = $this->modelArticulo->ObtenerTodosLosArticulos();
        require("view/articulos.php");
    } 

    public function AgregarMembresia(){
        $listaIee = new Membresias();
        $listaIee = $this->modelMembresia1->ObtenerTodasLasMembresiasIEEE();
        $listaWpa = new Membresias();
        $listaWpa = $this->modelMembresia2->ObtenerTodasLasMembresiasWPA();
        require("view/membresias.php");
    } 

    
    public function nuevoInvitado(){
        require("view/agregar-usuario.php");
    }

    public function nuevoCongreso(){
        require("view/agregar-congreso.php");
    }

    public function RegistrarCongreso(){
        $congreso = new Congreso();
        
        $congreso->titulo = $_REQUEST['titulo'];
        $congreso->cantidad_boletos = $_REQUEST['cantidad'];
        $congreso->horas_minimas = $_REQUEST['horas'];  
        $congreso->fecha_inicio = $_REQUEST['fechaIni'] = date("y-m-d");
        $congreso->fecha_fin = $_REQUEST['fechaFin'] = date("y-m-d");
      
        $this->resp= $this->modelCongreso->CrearCongreso($congreso);

        header('Location: ?op=congresos&msg='.$this->resp);
    }

    public function nuevaConferencia(){
        require("view/agregar-conferencia.php");
    }

    public function nuevoEvento(){
        require("view/agregar-evento.php");
    }

    public function nuevaPonencia(){
        require("view/agregar-ponencias.php");
    }

    public function nuevaArea(){
        require("view/agregar-area.php");
    }
    
    public function nuevaMembresia(){
        require("view/agregar-membresia.php");
    }
    
}
