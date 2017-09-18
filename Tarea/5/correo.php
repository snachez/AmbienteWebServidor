<?php 
 correo($_REQUEST['correo']);

 function correo($numberString){
 	if (strstr($numberString, '@')) {
 		if (strstr($numberString, '.')) {
 			if (strpos($numberString, 'com')) {
 				echo "Esta correctamente formateada";
 			}elseif (strpos($numberString, 'net')) {
 				echo "Esta correctamente formateada";
 			}elseif (strstr($numberString, 'es')){
 				echo "Esta correctamente formateada";
 			}else{
 				echo "No es un correo vuelva a poner otro";
 				echo "<p><a href='correo_electronico_formateado.html'>Regresar</a><p>";
 			}
 		}else{
 			echo "No es un correo vuelva a poner otro";
 			echo "<p><a href='correo_electronico_formateado.html'>Regresar</a><p>";
 		}
 	}else{
 		echo "No es un correo vuelva a poner otro";
 		echo "<p><a href='correo_electronico_formateado.html'>Regresar</a><p>";
 	}
 }
?>