<?php

//10.decir si un año es bisiesto

$anio = rand(1900, 2100); // genera un año aleatorio entre 1900 y 2100

echo "Año generado: $anio<br>";

// Un año es bisiesto si:
// - Es divisible entre 4
// - Pero NO es divisible entre 100, excepto si también es divisible entre 400
if (($anio % 4 == 0 && $anio % 100 != 0) || ($anio % 400 == 0)) {
    echo "El año $anio es bisiesto.";
} else {
    echo "El año $anio NO es bisiesto.";
}


?>