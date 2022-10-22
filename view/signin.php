<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

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
<?php

if (count($_POST)!=0) {
  $_ADM->verify($_POST["email"], $_POST["password"]);
}
?>
<body>
    <section>
        <h2>Bienvenido</h2>
        <form action="" method="post">
        <div>
     <?php
    if ($_ADM->error!="") { echo "<div class='error'>".$_ADM->error."</div>"; }
    ?>
            <label for="email">correo electrónico</label>
            <input type="email" name="" id="" placeholder="usuario@ejemplo.com">           
        </div>
        <div>
            <label for="contraseña">contraseña</label> 
            <input type="password" name="" id="" placeholder="contraseña">    
    </div>

        <button type="submit" value="Acceder"></button>
        <ul>
            <a href="#">Olvidaste tu contraseña?</a>
            <h3> - </h3>
            <a href="#">Registrate aqui!</a>
        </ul>                    
        </form>
    </section>
</body>
</html>