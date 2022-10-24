<?php

//Incluyo los archivos necesarios
require("./controller/Controller.php");

//Instancio el controlador
$controller = new Controller;

if (isset($_GET['op'])) {
  $opcion = $_GET['op'];

  if ($opcion == "home") {
      $controller->Index();
  } 
  elseif ($opcion== "conferencista"){        
    $controller->Conferencista();
  }
  elseif ($opcion== "itinerario"){        
    $controller->Itinerario();
  }
  elseif ($opcion== "eca") {
    $controller->ECA();
  }
   elseif ($opcion== "crear") {
      $controller->CrearCuenta();
  }
  elseif ($opcion== "login") {
    $controller->Login();
  }
  elseif ($opcion== "recuperar") {
    $controller->Recover();
  }
  elseif ($opcion== "panel") {
    $controller->Panel();
  }
  elseif ($opcion== "evento") {
    $controller->CrearEvento();
  }
} 
else {
  $controller->Index();
}

?>
