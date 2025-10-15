<?php
//Genera 10 nombres y apellidos aleatorios y genera un array con los nombres completos (nombre + apellido)

 $nombres = array("Ana", "Luis", "Carlos", "Marta", "Lucia", "Javier", "Sofia", "Miguel", "Laura", "David");
 $apellidos = array("Garcia", "Martinez", "Lopez", "Sanchez", "Gonzalez", "Perez", "Rodriguez", "Fernandez", "Gomez", "Diaz");

 $arrayNombresCompletos = array();

 for ($i=1; $i <=10 ; $i++) { 
  // array_rand devuelve un índice, por eso accedemos al valor con corchetes
    $nombreRandom = $nombres[array_rand($nombres)];
    $apellidoRandom = $apellidos[array_rand($apellidos)];
    $nombreCompleto= $nombreRandom ." ". $apellidoRandom;
    array_push( $arrayNombresCompletos,$nombreCompleto);//añade en el nuevo array cada nombreCompleto generado.

 }

foreach ($arrayNombresCompletos as $valorArray) {//recorremos el array, $nombrecompleto como si queremos poner pepito
    echo "El nombre completo es: ".$valorArray. "<br/>";
}    

?>