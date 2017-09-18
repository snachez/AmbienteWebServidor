<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$salario_por_hora=$_REQUEST['pago'];
$horas_semana=($salario_por_hora*40);
$semana_mes=($horas_semana*4);
$salario_bruto=$semana_mes;
$ccss=(9*$salario_bruto)/100;
$salario_neto=$salario_bruto-$ccss;

echo "<p>Su salario bruto es: ".number_format($salario_bruto,2,",",".")."</p>"."<p> La deduccion de la CCSS(%9): ".number_format($ccss,2,",",".")."</p>"."<p>Su salario neto seria: ".number_format($salario_neto,2,",",".")."</p>";
?>
</body>
</html>