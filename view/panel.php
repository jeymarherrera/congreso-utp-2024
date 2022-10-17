<?php
require "signin.php";
@session_start();
if($_SESSION["acceso"]!= true)
{
  header('Location: ?op=error');
}
echo "Bienvenido:  ". $_SESSION["user"];

if(isset($_POST["logout"])){unset($_SESSION["user"]);}
if(!isset($_SESSION["acceso"])){
  header("Location: signin.php")
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de usuario</title>

    <link href="public/img/logo-utp-white.png" rel="icon">
    <link href="public/img/logo-utp-white.png" rel="icon">
  
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">
  
    <!-- Bootstrap -->
    <link href="public/css/bootstrap/bootstrap.css" rel="stylesheet">
    <link href="public/css/bootstrap/bootstrap.min.css" rel="stylesheet">
  
    <!-- Librarias CSS -->
    <script src="https://kit.fontawesome.com/3f6fcc0d63.js" crossorigin="anonymous"></script>
    <link href="public/css/font-awesome/font-awesome.css" rel="stylesheet">
    <link href="public/css/font-awesome/font-awesome.min.css" rel="stylesheet">
    <link href="public/css/animate/animate.min.css" rel="stylesheet">
    <link href="public/css/venobox/venobox.css" rel="stylesheet">
    <link href="public/css/owlcarousel/owl.carousel.min.css" rel="stylesheet">
  
    <!-- CSS -->
    <link href="public/css/style.css" rel="stylesheet">
</head>

<body>
<form id="pagusuario" method="post" onclick="if(confirm('desea salir de su cuenta')){this.submit();}">
        <input type="hidden" name="logout" value="1">

        <div class="txt">
          <div id="pagusuario"><?=$_SESSION["admin"]["user_name"]?></div>
          <div id="pagcuenta">cuenta - retirarse</div>
        </div>
      </form>

      <main>
        <section>
          <div>        
            <img src="#" alt="">
            <p class="evento/congresos"></p>
          </div>
          <div>
          <img src="#" alt="" srcset="">
          <p class="asistencia"></p>
          </div>
          <div>
          <img src="#" alt="">
          <p class="certificados"></p>
          </div>
        </section>
        <section>
          <div>
          <img src="#" alt="">
          <p class="inscripciones"></p>
          </div>
          <div>
          <img src="#" alt="">
          <p class="gafetes"></p>
          </div>
        </section>
      </main>

</body>
</html>