<?php
// Tipo de contenido
header('Content-Type: image/png');

// Crear la imagen usando la imagen base
$image = imagecreatefrompng('public/img/imagen.png');

// Asignar el color para el texto
$color = imagecolorallocate($image, 0,0, 0);

// Asignar la ruta de la fuente
$font_path = __DIR__;

$name = "Jeymar Herrera"; // Texto 1
$date = "20/10/2024"; // Texto 2

/// imagettftext ( resource $image , float $size , float $angle , int $x , int $y , int $color , string $fontfile , string $text )
imagettftext($image, 80, 0, 200, 770, $color, $font_path, $name); // Colocar el texto 1 en la imagen
imagettftext($image, 40, 0, 460, 1310, $color, $font_path, $date); // Colocar el texto 2
header('Content-Type: image/png');
// $salida = "certificado_congreso.pdf";
// header('Content-Disposition: attachment; filename="' .$salida. '"');
imagepng($image); // Enviar el contenido al navegador
imagedestroy($image); // Limpiar la memoria

?> 