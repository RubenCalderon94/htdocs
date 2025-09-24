<?php
// Intruducir 10 numeros enteros, entre el 1 y el 100. Y mostrar los numeros pares.

for ($i=1; $i <=100 ; $i++) {
    if ($i%2==0) {
        echo "Los numeros pares son  $i <br/>";
    }     
}




// 3 numeros al azar y que me diga cual de los 3 es mayor

for ($i=1; $i <=3; $i++) { 
    $num= rand(1,50);
    if ($num > $num ) {
        echo "EL numero mayor es: $num <br/>";
    }    
}



?>
