<?php
/*
Rellena un array de 100 elementos de manera aleatoria con valores de M y F. 
Una vez completado  vuelve a recorrerlo y calcula cuántos elementos hay de cada uno de los valores
almacenando el resultado en un array asociativo [ 'M' => 0, 'F' => 0 ] (no utilices variables para contar los elementos).
Al final  muestra el resultado por pantalla.
*/

$array = array();

for ($i=1; $i <=100 ; $i++) { 
    // Generar aleatoriamente entre 0 y 1, y asignar 'M' o 'F'
    $letra = rand(0, 1) == 0 ? 'M' : 'F';//Me va generando aleatoriamente entre la letras M Y F
    array_push($array, $letra);
}

// Mostrar el array resultante
echo "Array de 100 elementos rellenados al azar con las letras M y F: <br>";
foreach ($array as $letra) {//Recorremos el array
    echo $letra . "<br>";
}

// Inicializar el array asociativo para contar 'M' y 'F'
$conteo = ['M' => 0, 'F' => 0];

// Contar la cantidad de 'M' y 'F' en el array
foreach ($array as $letra) {
    $conteo[$letra]++;//cada letra que pasa la va sumando +1
}

// Mostrar los resultados
echo "<br>Conteo de letras:<br>";
echo "M: " . $conteo['M'] . "<br>";
echo "F: " . $conteo['F'] . "<br>";


?>