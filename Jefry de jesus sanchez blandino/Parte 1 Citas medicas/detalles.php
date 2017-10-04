<h1>Detalles de persona</h1>
<?php
$db=new mysqli("localhost","usuario","1234","citas medicas");
if (isset($_GET['paciente'])) {
	$pac=$_GET['paciente'];
	$consulta=$db->prepare("select * from citas where paciente=?");
	$consulta->bind_param("s",$pac);
	$consulta->execute();
	$filas = $consulta->get_result();
	/* com es solamente una fila, no necesito while */

	$miFila=$filas->fetch_assoc();
	echo "<h2>"."Medico: ".$miFila['medico'].", del paciente: ".$miFila['paciente']."</h2>";
	echo "<h2>"."Fecha de la cita: ".$miFila['fechacita']."</h2>";
	echo "<h2>"."Costo de la cita: ".$miFila['costo']."</h2>";
	echo "<h2>"."Sucursal donde se va a realizar la cita: ".$miFila['sucursal']."</h2>";
	echo "<hr><a href='index.php'>Regresar</a>";

}else echo "<a href='index.php'>Regresar</a>";

$db->close();
?>

<form action="detalles.php" method="get">
	<input type="text" name="paciente">
	<input type="submit" name="buscador" value="Buscar">
</form>