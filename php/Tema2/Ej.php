<?php

// 3 numeros al azar y que me diga cual de los 3 es mayor

$mayor=0;

for ($i=1; $i <=3; $i++) { 
    $num= rand(1,50);
     echo "Número $i: $num <br/>";

    if ($num > $mayor ) {
        $mayor = $num; 
    }    
}
echo "EL numero mayor es: $mayor <br/>";

?>