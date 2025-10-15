<?php
/*
Dados los siguientes arrays, combinalos en un único array plano, intercalando los elementos de ambos.
Muestra el resultado por pantalla. Si un array tiene más elementos que otro,
añade los elementos restantes al final del array resultante. (Hazlo sin utilizar ninguna función de PHP)


[1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j']
*/

$arrayNum = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$arrayLetras = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j'];

$array = array();

for ($i=0; $i <count($arrayNum) ; $i++) { //count para saber longuitud de cada array
    array_push($array,$arrayNum[$i]);//Añadimos pero hay que poner valor de la $i para que añada cada valor, no el array completo cada array
}

for ($i=0; $i <count($arrayLetras) ; $i++) { //count para saber longuitud de cada array
    array_push($array,$arrayLetras[$i]);//Añadimos pero hay que poner valor de la $i para que añada cada valor, no el array completo cada array
}


foreach ($array as $valorArray) {
    if ($valorArray == ) {
        # code...
    }
    echo "Valor del array: " . $valorArray . "<br>";
}









?>