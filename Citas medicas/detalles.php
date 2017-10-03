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
	echo "<h2>".$miFila['medico']."</h2>";
	echo "Fecha de la cita: ".$miFila['fechacita'];
	echo "<hr><a href='index.php'>Regresar</a>";

}else echo "<a href='index.php'>Regresar</a>";

$db->close();
?>

<form action="detalles.php" method="get">
	<input type="text" name="paciente">
	<input type="submit" name="buscador" value="Buscar">
</form>