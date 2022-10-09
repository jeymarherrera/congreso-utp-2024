<?php

//Incluyo los archivos necesarios
require("./controller/Controller.php");

//Instancio el controlador
$controller = new Controller;

  //Llamo al método por defecto del controlador
  $controller->Index();