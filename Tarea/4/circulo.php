<?php
$diametro=$_REQUEST['circulo'];
$area_del_circulo=(M_PI/4)*pow($diametro,2);
$circunferencia_del_circulo=pi()*$diametro;
echo "<p>El area del circulo es: ".number_format($area_del_circulo,2,",",".")."</p>"."<p>La circunferencia del circulo es: ".number_format($circunferencia_del_circulo,2,",",".")."</p>";
?>