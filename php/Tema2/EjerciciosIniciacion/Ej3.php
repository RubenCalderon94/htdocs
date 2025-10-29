<?php
/*3.- Introducir 10 números al azar decir cuales son pares y cuales son impares. Presentar además, la suma de todos los pares y la suma de todos los impares. Sumar los números positivos y sumar los números negativos
*/

$sumapares=0;
$sumaimpares=0;
$sumapositivos = 0;
$sumanegativos = 0;

//Generamos 10 numeros
for ($i=1; $i <=10 ; $i++) { 
    $num=rand(1,100);//Entre el 1 y el 100 aleatorio

    if ($num % 2==0) {
        echo"El $num es par <br/>";
        $sumapares +=  $num;
    } else {
        echo"El $num es impar <br/>";
         $sumaimpares +=  $num;
    }

     // Positivo o negativo
    if ($num > 0) {
        $sumapositivos += $num;
    } elseif ($num < 0) {
        $sumanegativos += $num;
    }




}

echo"La suma de los todos los numeros pares es: $sumapares  <br/>";
echo"La suma de los todos los numeros impares es: $sumaimpares  <br/>";
echo "La suma de los números positivos es: $sumapositivos <br/>";
echo "La suma de los números negativos es: $sumanegativos <br/>";



?>

