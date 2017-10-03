<?php  /* index.php */

echo "<h1>Lista de elementos</h1>";

$db=new mysqli("localhost","usuario","1234","citas medicas");

$sql="select * from citas"; // where FILTRO
$consulta=$db->query($sql);
if ($consulta===FALSE) {
	echo "<h2>Error. ".$db->error."</h2>";
}

//recorremos el conjunto de filas
while($fila=$consulta->fetch_assoc()) 
{
	$link="index.php?paciente=".$fila['paciente'];
	echo "Paciente: ".$fila['paciente'].", Medico: ".$fila['medico'].", fecha de la cita: ".$fila['fechacita'].", costo: ".$fila['costo'].", sucursal: ".$fila['sucursal']."<br>"; 
	
}
echo "<hr><a href='crear.php'>Crear</a>"; 
echo "<hr><a href='detalles.php'>Buscador</a>"; 

$db->close();
?>
