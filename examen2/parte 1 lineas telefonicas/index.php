<?php
echo "<h1>Index</h1>";

$db=new mysqli("localhost","user","1234","lineas telefonicas");
$result="SELECT numero, operador, plan, marcacelular, modelocelular, fechafirmacontrato, plazomeses FROM lineas";
$consulta=$db->query($result);

if ($consulta===FALSE) {
	echo "<h2>Error. ".$db->error."</h2>";
}

while ($fila=$consulta->fetch_assoc()) {
	$link="detalles.php?numero=".$fila['numero'];	
	echo "<table border='1'>";
	echo "<tr><td>Numero</td><td>Operador</td><td>Plan</td><td>Marca celular</td><td>Modelo de celular</td><td>Fecha de Contrato</td><td>Plazo en meses</td></tr>\n";
		echo "<tr><td>".$fila['numero']."</td><td>".$fila['operador']."</td><td>".$fila['plan']."</td><td>".$fila['marcacelular']."</td><td>".$fila['modelocelular']."</td><td>".$fila['fechafirmacontrato']."</td><td>".$fila['plazomeses']."</td></tr>";
		echo "</table>\n<br>";
	}

echo "<a href='crear.php'>Crear</a><br><br>";
echo "<a href='detalles.php'>Ver detalles de elementos</a><br>";
$db->close();
?>