<?php
$db=new mysqli("localhost","usuario","1234","citas medicas");

if (isset($_POST['pac'])) {
	$pac = $_POST['pac'];
	$med = $_POST['med'];
	$fec = $_POST['fec'];
	$cos = $_POST['cos'];
	$suc = $_POST['suc'];

	/* inser into TABLA(COLUMNAS) values(DATOS)*/
	$consulta = $db->prepare
	("insert into citas(paciente, medico, fechacita, costo, sucursal) values (?,?,?,?,?)");

	$consulta->bind_param("sssis", $pac, $med, $fec, $cos, $suc);


	$consulta->execute();

	if ($consulta->affected_rows>0) {
		echo "<h2>Insercion exitosa</h2>";
		echo "<a href='crear.php'>Regresar</a>";
	}else{
		echo "<h2>Fallo al insertar</h2>";
		echo "<h3>".$db->error."</h3>";
		echo "<a href='crear.php'>Regresar</a>";
	}

}else echo "<a href='index.php'>Ir a lista</a>";

$db->close();
?>


<h2>Citas médicas<h2>
<form method="post" action="crear.php">
Paciente: <input type="text" name="pac"><br>	
Medico: <input type="text" name="med"><br>	
Fecha de cita (AAAA-MM-DD H:M:S): <input type="text" name="fec"><br>	
Costo: <input type="text" name="cos"><br>	
Sucursal: <input type="text" name="suc"><br>	
<button type="submit">Crear</button>
</form>