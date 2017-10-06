<?php
$R = 10;
$r = 3;
$area_cubrir_azucar_dona = pow(M_PI,2)*($R-$r)*($R+$r);
echo "<h2>El area que requerimos para cubrir de azucar para una dona es: ".number_format($area_cubrir_azucar_dona,0,",",".")."cm"."</h2>";
?>