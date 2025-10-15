<?php
/*
Rellena un array con 50 números aleatorios comprendidos entre el 0 y el 99,
 y luego muéstralo en una lista desordenada. Para crear un número aleatorio, utiliza la función rand(inicio, fin)
*/
$array = array();

for ($i=1; $i <=50 ; $i++) { //Generamos 50 numeros aletorios
    $num=rand(0,99);//Con el rand nos escoge 50 numeros aletorios entre el 0 y el 99
    array_push($array,$num);//Vamos añadiendo cada numero al array
}

echo "<ul>";//Para mostrar una lista desordenada
foreach ($array as $num) {
    echo "<li>$num</li>";// li cada item
}
echo "</ul>";


?>