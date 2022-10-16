<?php
@session_start();
if($_SESSION["acceso"]!= true)
{
  header('Location: ?op=error');
}
echo "Bienvenido:  ". $_SESSION["user"];
?>