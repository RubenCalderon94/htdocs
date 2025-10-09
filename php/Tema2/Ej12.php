<?php

// genera 20 numeros aleatorios entre 1 y 100 y meterlos en un array, y los pares en las primeras posiciones y los impares al final

 $arrayName = array();
 $arrayPares = array();
 $arrayImpares = array();

for ($i=1; $i <=20; $i++) { 
    $num = rand(1,100);
    array_push($arrayName,$num);//Sintaxis para añadir cada numero al array
}


for ($i=1; $i < count($arrayName); $i++) { //Recorremos hasta el final del array, sin saber tamaño
    if ( $arrayName[$i] %2==0) {
        array_push($arrayPares,$arrayName[$i]);
         
    }else {
        array_push($arrayImpares,$arrayName[$i]);
       
    }
}


for ($i=1; $i <count($arrayPares) ; $i++) { 
    echo "Los numeros PARES son  $arrayPares[$i] <br/>";
}

for ($i=1; $i <count($arrayImpares) ; $i++) { 
    echo "Los numeros IMPARES son $arrayImpares[$i] <br/>";
}

?>