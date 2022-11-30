<?php
// Tipo de contenido
header('Content-type: image/png');

// Crear la imagen usando la imagen base
$image = imagecreatefrompng('public/imagen.png');
ob_start();
// Asignar el color para el texto
$color = imagecolorallocate($image, 0,0, 0);

// Asignar la ruta de la fuente
$font_path = __DIR__.'\arial.ttf';

$name = "Jeymar Herrera"; // Texto 1
$date = "20/10/2024"; // Texto 2

/// imagettftext ( resource $image , float $size , float $angle , int $x , int $y , int $color , string $fontfile , string $text )
imagettftext($image, 80, 0, 200, 770, $color, $font_path, $name); // Colocar el texto 1 en la imagen
imagettftext($image, 40, 0, 460, 1310, $color, $font_path, $date); // Colocar el texto 2
$salida = "certificado_congreso.png";
header('Content-Disposition: attachment; filename="' .$salida. '"');

imagepng($image); // Enviar el contenido al navegador
$ong = ob_get_contents();
$imgContent = addslashes(file_get_contents($image));


$dbHost     = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName     = 'img';

$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if($db->connect_error){
    die("Connection failed: " . $db->connect_error);
} 

//Insert image content into database
$insert = $db->query("INSERT into images (image, created) VALUES ('$imgContent')");
if($insert){
    echo "File uploaded successfully.";
}else{
    echo "File upload failed, please try again.";
} 
ob_end_clean();
$png = str_replace('##','##',mysql_escape_string($jpg));
$result = $db->query("INSERT into images (image) SET Imagen='$png'");
imagedestroy($image); // Limpiar la memoria

?> 
