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
        require("view/panel/dashboard.php");
    }

    public function CrearEvento(){
        require("view/crear-evento.php");
    } 
    
}
