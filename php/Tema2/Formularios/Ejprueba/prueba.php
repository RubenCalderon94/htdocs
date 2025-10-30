<?php
/*
Crea un formulario que introduzca nombre y apellido
*/


$nombre = $_GET["nombre"];//Aqui se esta guardando lo que escribamos en el input, llamado name="nombre"
$apellido1 = $_GET["apellido1"];//Aqui se esta guardando lo que escribamos en el input, llamado name="apellido1"
echo "Hola $nombre $apellido1";

?>