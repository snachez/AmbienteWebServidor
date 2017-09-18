<?php /* imc.php */
$altura = $_REQUEST['altura'];
$peso = $_REQUEST['peso'];
/*metodo pow ($base , $exp)*/
$IMC = $peso/pow($altura, 2);/*IMC= peso / altura al cuadrado*/
echo "Su IMC es: ".number_format($IMC,2,",",".")."<br/><br/>";
if ($IMC>=40.00) {
	echo "Tiene Obesidad morbida";
}elseif (($IMC>=35.00)and($IMC<=39.99)) {
	echo "Tiene Obesidad media";
}elseif (($IMC>=30.00)and($IMC<=34.99)) {
	echo "Tiene Obesidad leve";
}elseif (($IMC>=25.00)and($IMC<=29.99)) {
	echo "Tiene Sobrepeso";
}elseif (($IMC>=18.50)and($IMC<=24.99)) {
	echo "Tiene peso normal";
}elseif (($IMC>=17.00)and($IMC<=18.49)) {
	echo "Tiene delgadez leve";
}elseif (($IMC>=16.00)and($IMC<=16.99)) {
	echo "Tiene delgadez moderada";
}else{
	echo "Tiene delgadez severa";
}
?>