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
  elseif ($opcion == "crearCongreo") {
    $controller->RegistrarCongreso();
  }
  elseif ($opcion== "conferencias") {
    $controller->CrearConferencia();
  }
  elseif ($opcion == "CrearConferencia") {
    $controller->RegistrarConferencia();
  }
  elseif ($opcion == "CrearPonencia") {
    $controller->RegistrarPonencia();
  }
  elseif ($opcion== "eventos") {
    $controller->CrearEvento();
  }
  elseif ($opcion== "areas") {
    $controller->AgregarArea();
  }
  elseif ($opcion == "crearArea") {
    $controller->RegistrarArea();
  }
  elseif ($opcion== "salas") {
    $controller->AgregarSala();
  }
  elseif ($opcion == "registrarSala") {
    $controller->RegistrarSala();
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
  elseif ($opcion== "newAdmin") {
    $controller->nuevoAdministrador();
  }
  elseif ($opcion == "registrarAdmin") {
    $controller->RegistrarAdmin();
  }
  elseif ($opcion == "eliminarAdmin") {
    $controller->EliminarAdmin();
  }
  elseif ($opcion== "invitados") {
    $controller->AgregarInvitado();
  }
  elseif ($opcion == "RegistrarConferencista") {
    $controller->RegistrarConferencista();
  }
  elseif ($opcion == "eliminarConferencista") {
    $controller->EliminarConferencista();
  }
  elseif ($opcion == "verGafete") {
    $controller->verGafete();
  }
  elseif ($opcion == "eliminarAutor") {
    $controller->EliminarAutor();
  }
  elseif ($opcion == "verGafeteAutor") {
    $controller->verGafeteAutor();
  }
  elseif ($opcion == "eliminarProfesional") {
    $controller->EliminarProfesional();
  }
  elseif ($opcion == "verGafeteProfesional") {
    $controller->verGafeteProfesional();
  }
  elseif ($opcion == "verCertificadoProf") {
    $controller->verCertificadoProfesional();
  }
  elseif ($opcion == "eliminarEstudiante") {
    $controller->EliminarEstudiante();
  }
  elseif ($opcion == "verGafeteEstudiante") {
    $controller->verGafeteEstudiante();
  }
  elseif ($opcion == "verCertificadoEstudiante") {
    $controller->verCertificadoEstudiante();
  }
  elseif ($opcion== "articulos") {
    $controller->AgregarArticulo();
  }
  elseif ($opcion== "membresias") {
    $controller->AgregarMembresia();
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
