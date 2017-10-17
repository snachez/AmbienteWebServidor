<?php
/**
* 
*/

class persona
{  
	public $nombre;
	public $cedula;
	public $apellido;
	function __construct($cedula,$nombre,$apellido){
		/*usamos $this para referirnos a la instancia*/
		/*vean que el $ va en this, no en el atributo*/
		$this->cedula=$cedula;
		$this->nombre=$nombre;
		$this->apellido=$apellido;//un arreglo o lista vacia	
	}
}

?>