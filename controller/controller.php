<?php
session_start();// Comienzo de la sesión

require_once 'model/Panel/Usuarios.php';
require_once 'model/Panel/Salas.php';
require_once 'model/Panel/Panel_H.php';
require_once 'model/Panel/Eventos.php';
require_once 'model/Panel/Congreso.php';
require_once 'model/Panel/Conferencias.php';
require_once 'model/Panel/Certificados.php';
require_once 'model/Panel/Areas.php';
require_once 'model/Inicio/Itinerario.php';
require_once 'model/Inicio/Registro.php';
class Controller
{
    private $model_usuario1;
    
    public function __CONSTRUCT(){
        $this->model_usuario1 = new Usuarios();

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

    public function Login(){
        require("view/signin.php");
    }

    public function Recover(){
        require("view/recover.php");
    }

    public function Panel(){

        $listaUsuario = new Usuarios();
        $listaUsuario = $this->model_usuario1->ObtenerTodosLosUsuarios();
        require("view/dashboard.php");
    }
    public function CrearCongreso(){
        require("view/congreso.php");
    } 

    public function CrearConferencia(){
        require("view/conferencia.php");
    } 

    public function CrearEvento(){
        require("view/evento.php");
    } 
    
    public function AgregarArea(){
        require("view/areas.php");
    } 

    public function AgregarSala(){
        require("view/salas.php");
    } 

    public function GenerarReportes(){
        require("view/reportes.php");
    } 

    public function GenerarCertificados(){
        require("view/certificados.php");
    } 

    public function AgregarAdmin(){
        require("view/administradores.php");
    } 

    public function AgregarInvitado(){
        require("view/usuarios.php");
    } 

    public function AgregarArticulo(){
        require("view/articulos.php");
    } 

    public function AgregarMembresia(){
        require("view/membresias.php");
    } 


    public function nuevoAdministrador(){
        require("view/agregar-admin.php");
    } 

    public function nuevoInvitado(){
        require("view/agregar-usuario.php");
    }

    public function nuevaSala(){
        require("view/agregar-sala.php");
    }

    public function nuevoCongreso(){
        require("view/agregar-congreso.php");
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
