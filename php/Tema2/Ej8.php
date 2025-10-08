<?php

$num = rand(1, 100); // Genera un número al azar entre 1 y 100
$divisores = 0;

echo "Número generado: $num<br>";

// Contamos cuántos divisores tiene
for ($i = 1; $i <= $num; $i++) {
    if ($num % $i == 0) {
        $divisores++;
    }
}

// Si tiene exactamente 2 divisores (1 y él mismo), es primo
if ($divisores == 2) {
    echo "El número $num es primo.";
} else {
    echo "El número $num NO es primo.";
}


?>