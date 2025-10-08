<?php
//11.- Calcular el término decimo de la serie fibonacci


$a = 0; // primer número
$b = 1; // segundo número

echo "Serie Fibonacci:<br>";

// Mostramos los primeros 10 términos
for ($i = 1; $i <= 10; $i++) {
    echo $a . " ";
    $siguiente = $a + $b; // sumamos los dos anteriores
    $a = $b;              // movemos el segundo al primero
    $b = $siguiente;      // el siguiente pasa a ser el segundo
}

echo "<br>El décimo término es: " . ($a);



?>