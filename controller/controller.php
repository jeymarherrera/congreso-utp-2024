<?php
session_start();// Comienzo de la sesión
class Controller
{
    public function Index(){
        //Le paso los datos a la vista
        require("view/home.php");
    }

    public function Conferencista(){
        require("view/speakers.php");
    }

    public function Itinerario(){
        require("view/itinerario.php");
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
        require("view/invitados.php");
    } 

    public function nuevoAdministrador(){
        require("view/agregar-admin.php");
    } 

    public function nuevoInvitado(){
        require("view/agregar-invitados.php");
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
    
}
