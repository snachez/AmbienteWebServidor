<?php

require "listaPersonas.php";
require "persona.php";
$lista=new listaPersonas();
$lista->insertar(new persona(42,"francisco","sanchez"));
$lista->mostrar();

?>