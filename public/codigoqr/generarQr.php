<?php
	//Agregamos la libreria para genera códigos QR
    include('public/phpqrcode/qrlib.php'); 
	
	//Declaramos una carpeta temporal para guardar la imagenes generadas
	$dir = 'public/temp/';
	
	//Si no existe la carpeta la creamos
	if (!file_exists($dir))
        mkdir($dir);
	
        //Declaramos la ruta y nombre del archivo a generar
	$filename = $dir.'test.png';

        //Parametros de Condiguración
	
	$tamaño = 7; //Tamaño de Pixel
	$level = 'H'; //Precisión Alta
	$framSize = 3; //Tamaño en blanco
	$contenido = $nombre; //"http://codigosdeprogramacion.com"; //Texto
	
        //Enviamos los parametros a la Función para generar código QR 
	QRcode::png($contenido, $filename, $level, $tamaño, $framSize); 
	
        //Mostramos la imagen generada
	echo '<img src="'.$dir.basename($filename).'" /><hr/>';
	header('Location: ?op=mail&msg=Correo enviado');
	//echo '<meta http-equiv="refresh" content="0;url=?op=email &msg=Se ha enviado un correo electrónico para restablecer la contraseña&t=text-success">';

?>