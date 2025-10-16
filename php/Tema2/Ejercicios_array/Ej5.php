<?php
//UTILIZANDO METODOS/FUNCIONES PARA LOS ARRAYS
/*Genera un array aleatorio de 33 elementos con números comprendidos entre el 0 y 100 y calcula:
El mayor
El menor
La media*/




$array=array();


for ($i=1; $i <=33 ; $i++) { 
    $num=rand(0,100);
    array_push($array,$num);
}

foreach ($array as $numeros) {
    echo"Numeros: ".$numeros. "<br/>";
}

$maximo=max($array);
$minimo=min($array);
// Calcular media
$suma = array_sum($array);
$cantidad = count($array);
$media = $suma / $cantidad;

echo"media".$media. "<br/>". "maximo".$maximo."<br/>"."minimo".$minimo;





/*
$mayor=0;
$menor=100;
$media;
$sumador=0;
$array = array();

for ($i=1; $i <=33 ; $i++) { //Generamos 33 numeros aletorios
    $num=rand(0,100);//Con el rand nos escoge 33 numeros aletorios entre el 0 y el 100
    array_push($array,$num);//Vamos añadiendo cada numero al array
}

foreach ($array as $numeros) {
    echo " ". $numeros.  "<br/>";
    if ($numeros>$mayor) {
        $mayor=$numeros;
    } if($numeros< $menor) {
        $menor=$numeros;
    } $sumador+= $numeros;
    $media= $sumador/count($array);
}

echo"El numero mayor es:".$mayor .  "<br/>";
echo"El numero menor es:".$menor .  "<br/>";
echo"La media es:". $media;
*/




?>

