<?php
//5.- Introducir 3 números a la azar y presentarlos de forma ordenada

//Generamos los 3 numero al azar
$num1=rand(1,10);
$num2=rand(1,10);
$num3=rand(1,10);


// Los guardamos en un array
$numeros = array($num1, $num2, $num3);

echo "Números generados: $num1, $num2, $num3<br>";

// Ordenamos el array de menor a mayor
sort($numeros);

echo "Números ordenados: ";
foreach ($numeros as $n) {
    echo $n . " ";
}


?>