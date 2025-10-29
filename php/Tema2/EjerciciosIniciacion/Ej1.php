<?php
// 1.- Introducir 10 números al azar decir cuales son pares y cuales son impares

//Generamos 10 numeros 
for ($i=1; $i <=10 ; $i++) { 
    $num=rand(1,100); //Entre el 1 y el 100 aleatorio

    if ($num % 2==0) {
    echo"El numero $num es par <br/>";
}else {
    echo"El numero $num no es par <br/>";
}

}


?>
