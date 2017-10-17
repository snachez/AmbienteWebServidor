<?php

require "Conexion.php";

/**
* 
*/
class listaPersonas extends Conexion
{
	
	public function listaPersonas()
	{
		parent::__construct();
	}
	public function mostrar(){

		$resultados=$this->conexion_db->query('SELECT * FROM persona');

		$personas=$resultados->fetch_all(MYSQLI_ASSOC);

		echo "<table bordercolor='#748C89' border='4' cellpadding='1' cellspacing='1'>";
	echo "<tr bgcolor='#038D7B'><td>Cedula</td><td>Nombre</td><td>Apellido</td></tr>";

		foreach($personas as $elemento) { 		
	echo "<tr bgcolor='#038D7B'><td>";
	echo $elemento['cedula']."</td><td>";
	echo $elemento['nombre']."</td><td>";
	echo $elemento['apellido']."</td></tr>";

}echo "</table>";

	}

	public function insertar($lista){
		$consulta=$this->conexion_db->prepare
		("insert into persona(cedula, nombre, apellido) values ('$lista->cedula','$lista->nombre','$lista->apellido')");
	$consulta->execute();

	if ($consulta->affected_rows>0) {
		echo "<h2>Insercion exitosa</h2>";
	}else{
		echo "<h2>Fallo al insertar</h2>";
		echo "<h3>".$this->conexion_db->error."</h3>";
	}	
	}
}

?>