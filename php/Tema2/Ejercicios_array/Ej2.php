<?php
/*
Teniendo el siguiente array: $array=[1,2,4,6,7,8,9];

-Agrega el numero 10 al final del array y muestra el resultado.
-Agrega el numero 0 al principio del array y muestra el resultado.
-Agrega el numero 11 en la posicion 3 del array y muestra el resultado.
-Reemplaza el numero en la posicion 5 por el numero 50 y muestra el resultado.
*/

///////////////////////////////////////////////////////////////////////////////////////////
//1-Agrega el numero 10 al final del array y muestra el resultado.
$array=[1,2,4,6,7,8,9];
$num10=10;

for ($i=1; $i <count($array) ; $i++) { 
   
}
array_push($array,$num10);
print_r($array);
echo "<br>"; // Salto de línea en HTML

///////////////////////////////////////////////////////////////////////////////////////////
//2-Agrega el numero 0 al principio del array y muestra el resultado.
$num0=0;

array_unshift($array, $num0);// Agrega el número 0 al principio del array

print_r($array);
echo "<br>"; // Salto de línea en HTML

///////////////////////////////////////////////////////////////////////////////////////////
//3-Agrega el numero 11 en la posicion 3 del array y muestra el resultado.
$num11=11;
array_splice($array, 2, 0, $num11);// Insertar el número 11 en la posición 3 (índice 3) y el 0 no borra elementos

// Mostrar el resultado
print_r($array);
echo "<br>"; // Salto de línea en HTML

///////////////////////////////////////////////////////////////////////////////////////////
//4-Reemplaza el numero en la posicion 5 por el numero 50 y muestra el resultado.
$num50=50;

// Reemplazar el valor en la posición 5 (índice 5)
$array[4] = $num50;

// Mostrar el resultado
print_r($array);





?>