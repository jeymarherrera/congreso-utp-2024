<?php

//Incluyo los archivos necesarios
require("./controller/Controller.php");

//Instancio el controlador
$controller = new Controller;

if (isset($_GET['op'])) {
  $opcion = $_GET['op'];

  if ($opcion == "home") {
    $controller->Index();
  } elseif ($opcion == "conferencista") {
    $controller->Conferencista();
  } elseif ($opcion == "itinerario") {
    $controller->Itinerario();
  } elseif ($opcion == "eca") {
    $controller->ECA();
  } elseif ($opcion == "crear") {
    $controller->CrearCuenta();
  } elseif ($opcion == "pago") {
    $controller->Pagar();
  } elseif ($opcion == "registrar") {
    $controller->RegistrarUsuario();
  } elseif ($opcion == "login") {
    $controller->Login();
  } elseif ($opcion == "acceder") {
    $controller->Ingresar();
  } elseif ($opcion == "permitido") {
    $controller->Panel();
  } elseif ($opcion == "error") {
    require("view/404.php");
  } elseif ($opcion == "salir") {
    session_destroy();
    $controller->Index();
  } elseif ($opcion == "recuperar") {
    $controller->Recover();
  } elseif ($opcion == "panel") {
    $controller->Panel();
  } elseif ($opcion == "evento") {
    $controller->CrearEvento();
  } elseif ($opcion == "congresos") {
    $controller->CrearCongreso();
  } elseif ($opcion == "crearCongreo") {
    $controller->RegistrarCongreso();
  } elseif ($opcion == "eliminarCongreso") {
    $id_congreo = $_GET['id'];
    $controller->EliminarCongreso($id_congreo);
  } elseif ($opcion == "conferencias") {
    $controller->CrearConferencia();
  } elseif ($opcion == "CrearConferencia") {
    $controller->RegistrarConferencia();
  } elseif ($opcion == "CrearPonenciaAutor") {
    $controller->RegistrarPonenciaAutor();
  } elseif ($opcion == "CrearPonenciaProf") {
    $controller->RegistrarPonenciaProfesional();
  } elseif ($opcion == "eventos") {
    $controller->CrearEvento();
  } elseif ($opcion == "areas") {
    $controller->AgregarArea();
  } elseif ($opcion == "crearArea") {
    $controller->RegistrarArea();
  } elseif ($opcion == "eliminarArea") {
    $id_area = $_GET['id'];
    $controller->EliminarArea($id_area);
  } elseif ($opcion == "salas") {
    $controller->AgregarSala();
  } elseif ($opcion == "registrarSala") {
    $controller->RegistrarSala();
  } elseif ($opcion == "reportes") {
    $controller->GenerarReportes();
  } elseif ($opcion == "certificados") {
    $controller->GenerarCertificados();
  } elseif ($opcion == "admin") {
    $controller->AgregarAdmin();
  } elseif ($opcion == "newAdmin") {
    $controller->nuevoAdministrador();
  } elseif ($opcion == "registrarAdmin") {
    $controller->RegistrarAdmin();
  } elseif ($opcion == "eliminarAdmin") {
    $id_admin = $_GET['id'];
    $controller->EliminarAdmin($id_admin);
  } elseif ($opcion == "invitados") {
    $controller->AgregarInvitado();
  } elseif ($opcion == "RegistrarConferencista") {
    $controller->RegistrarConferencista();
  } elseif ($opcion == "eliminarConferencista") {
    $id = $_GET['id'];
    $controller->EliminarConferencista($id);
  } elseif ($opcion == "verGafete") {
    $controller->verGafete();
  } elseif ($opcion == "eliminarAutor") {
    $id = $_GET['id'];
    $controller->EliminarAutor($id);
  } elseif ($opcion == "verGafeteAutor") {
    $controller->verGafeteAutor();
  } elseif ($opcion == "eliminarProfesional") {
    $id = $_GET['id'];
    $controller->EliminarProfesional($id);
  } elseif ($opcion == "verGafeteProfesional") {
    $controller->verGafeteProfesional();
  } elseif ($opcion == "verCertificadoProf") {
    $controller->verCertificadoProfesional();
  } elseif ($opcion == "eliminarEstudiante") {
    $id = $_GET['id'];
    $controller->EliminarEstudiante($id);
  } elseif ($opcion == "verGafeteEstudiante") {
    $controller->verGafeteEstudiante();
  } elseif ($opcion == "verCertificadoEstudiante") {
    $controller->verCertificadoEstudiante();
  } elseif ($opcion == "articulos") {
    $controller->AgregarArticulo();
  } elseif ($opcion == "membresias") {
    $controller->AgregarMembresia();
  } elseif ($opcion == "newInvitado") {
    $controller->nuevoInvitado();
  } elseif ($opcion == "newSala") {
    $controller->nuevaSala();
  } elseif ($opcion == "newCongreso") {
    $controller->nuevoCongreso();
  } elseif ($opcion == "newConferencia") {
    $controller->nuevaConferencia();
  } elseif ($opcion == "newEvento") {
    $controller->nuevoEvento();
  } elseif ($opcion == "newPonencia") {
    $controller->nuevaPonencia();
  } elseif ($opcion == "newPonenciaPro") {
    $controller->NuevaPonenciaPro();
  } elseif ($opcion == "newArea") {
    $controller->nuevaArea();
  } elseif ($opcion == "newMembresia") {
    $controller->nuevaMembresia();
  }
} else {
  $controller->Index();
}
