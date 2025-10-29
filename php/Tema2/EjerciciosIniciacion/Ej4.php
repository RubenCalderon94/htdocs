<?php
//4.- Factorial de un numero introducido al azar

$factorial=1;//Hay que inicializar en 1, porque en 0, una multiplicacion 0x0 es 0.

$num=rand(1,10);

for ($i=1; $i <=$num; $i++) { 
    $factorial *= $i;
}
  echo"El factorial del numero $num es: $factorial";


?>