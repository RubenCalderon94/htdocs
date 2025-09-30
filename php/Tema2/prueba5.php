<?php
//Introducir tres numeros aleatorios y presentarlos de forma ordenada


$num1=rand(1,10);
$num2=rand(1,10);
$num3=rand(1,10);
$maximo=0;
$medio=0;
$minimo=0;


//MAXIMO
if ($num1>$num2 && $num1>$num3) {
    $maximo=$num1;
} elseif ($num2>$num1 && $num2>$num3) {
    $maximo=$num2;
} else {
    $maximo=$num3;
}

//MINIMO
if ($num1<$num2 && $num1<$num3) {
    $minimo=$num1;
} elseif ($num2<$num1 && $num2<$num3) {
    $minimo=$num2;
} else{
    $minimo=$num3;
}

//MEDIO
if ($num1>$num2 && $num1<$num3) {
    $medio=$num1;
} elseif ($num2>$num1 && $num2<$num3) {
    $medio=$num2;
} else{
    $medio=$num3;
}

 
echo "Los numeros al azar son: $num1 $num2 $num3 <br/>";
echo "Presentamos los numeros de forma ordenada: $maximo  $medio  $minimo";

?>
 