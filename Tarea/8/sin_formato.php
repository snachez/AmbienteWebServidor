<?php 
numero_formato1($_REQUEST['numero_formato']);

 function numero_formato1($cep){
 	return number_format(substr($cep, 1, 3),0,"","").''.number_format(substr($cep, 5, 10),0,"","");
 }
 echo "la parte entera del numero es: ".numero_formato1($_REQUEST['numero_formato']);
?>