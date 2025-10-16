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
    if ($arrayLetras[$i]) {//Al ser recorrido por el for, cuando pasa por este if, añade la posicion sucesivamente, por ejemplo
        //viene del for, añade la primera posicion de la (i) en $arrayNum y despues igual pero en el $arrayLetras 
        array_push($array,$arrayLetras[$i]);
    }
}

print_r($array);









?>