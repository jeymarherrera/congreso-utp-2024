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
  elseif ($opcion== "congresos") {
    $controller->CrearCongreso();
  }
  elseif ($opcion== "conferencias") {
    $controller->CrearConferencia();
  }
  elseif ($opcion== "eventos") {
    $controller->CrearEvento();
  }
  elseif ($opcion== "areas") {
    $controller->AgregarArea();
  }
  elseif ($opcion== "salas") {
    $controller->AgregarSala();
  }
  elseif ($opcion== "reportes") {
    $controller->GenerarReportes();
  }
  elseif ($opcion== "certificados") {
    $controller->GenerarCertificados();
  }
  elseif ($opcion== "admin") {
    $controller->AgregarAdmin();
  }
  elseif ($opcion== "invitados") {
    $controller->AgregarInvitado();
  }
  elseif ($opcion== "articulos") {
    $controller->AgregarArticulo();
  }
  elseif ($opcion== "membresias") {
    $controller->AgregarMembresia();
  }
  elseif ($opcion== "newAdmin") {
    $controller->nuevoAdministrador();
  }
  elseif ($opcion== "newInvitado") {
    $controller->nuevoInvitado();
  }
  elseif ($opcion== "newSala") {
    $controller->nuevaSala();
  }
  elseif ($opcion== "newCongreso") {
    $controller->nuevoCongreso();
  }
  elseif ($opcion== "newConferencia") {
    $controller->nuevaConferencia();
  }
  elseif ($opcion== "newEvento") {
    $controller->nuevoEvento();
  }
  elseif ($opcion== "newPonencia") {
    $controller->nuevaPonencia();
  }
  elseif ($opcion== "newArea") {
    $controller->nuevaArea();
  }
  elseif ($opcion== "newMembresia") {
    $controller->nuevaMembresia();
  }
  
} 
else {
  $controller->Index();
}

?>
