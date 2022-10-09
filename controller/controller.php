<?php
session_start();// Comienzo de la sesión
class Controller
{
    public function Index(){
        //Le paso los datos a la vista
        require("view/home.php");
    }
}
