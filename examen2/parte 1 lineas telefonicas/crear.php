<?php
$db=new mysqli("localhost","user","1234","lineas telefonicas");

if (isset($_POST['num'])) {
	$num = $_POST['num'];
	$ope = $_POST['ope'];
	$pla = $_POST['pla'];
	$mar = $_POST['mar'];
	$mod = $_POST['mod'];
	$fec = $_POST['fec'];
	$pla = $_POST['pla'];

	/* inser into TABLA(COLUMNAS) values(DATOS)*/
	$consulta = $db->prepare
	("insert into lineas(numero, operador, plan, marcacelular, modelocelular, fechafirmacontrato, plazomeses) values (?,?,?,?,?,?,?)");

	$consulta->bind_param("isssssi", $num, $ope, $pla, $mar, $mod, $fec, $pla);


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


<h2>Lineas telefonicas<h2>
<form method="post" action="crear.php">
Numero: <input type="text" name="num"><br>	
Operador: <input type="text" name="ope"><br>
Plan: <input type="text" name="pla"><br>	
Marca de celular: <input type="text" name="mar"><br>	
Modelo de celular: <input type="text" name="mod"><br>		
Fecha de firma de contrato (AAAA-MM-DD H:M:S): <input type="text" name="fec"><br>	
Plazo en meses: <input type="text" name="pla"><br>	
<button type="submit">Crear</button>
</form>