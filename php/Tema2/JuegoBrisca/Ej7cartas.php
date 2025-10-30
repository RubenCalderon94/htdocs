<?php
/*
Realiza un progrma que escoja al azar 10 cartas de la baraja española y que diga cuantos puntos suman segun el juego de 
la brisca.Emplea un array asociativo para obtener los puntos a partir del nombre de la carta.
PUNTOS
as=11
tres=10
rey=4
caballo=3
sota=2
cartas del 2 al 7=0;
*/

$puntos = array(//array de puntos, que es asociativo, CLAVE/VALOR
    1=>11,
    2=>0,
    3=>10,
    4=>0,
    5=>0,
    6=>0,
    7=>0,
    10=>2,
    11=>3,
    12=>4,);

$palos = array("oro","copas","espada","bastos"); //Array de palos

$baraja=array();//Array donde guardaremos la baraja completa, de aqui sacaremos 10 al azar

$total=0;//Contador para sumar los puntos.

echo "<h1>Juego de la brisca<h1/>";
echo'<div style="display: flex; justify-content: center; align-items: center; width: 100%; height: 100%; padding: 0; background-color: #f0f0f0; border-radius: 0; box-shadow: none; overflow: hidden;">
  <img src="img/Baraja_española_completa.png" alt="Baraja Española Completa" style="width: 100%; height: 100%; object-fit: contain;">
</div>';


foreach ($palos as $palo) {//Recorremos el primer array y nos vamos guardando cada valor(en este caso cada palo, le llamamos palo a esa variable)
    foreach ($puntos as $numero => $valor) {//Aqui hacemos lo mismo, pero al ser array asociativo, la sintaxis varia un pelin
        $baraja[] = array(//Aquí estás creando una carta como un array asociativo con tres datos
        // Aqui ya vamos añadiendo, al nuevo array $baraja con [] hace lo mismo que array_push
            "numero" => $numero,
            "palo" => $palo,
            "puntos" => $valor
        );
    }
}

shuffle($baraja); // mezcla las cartas, ya tengo todas generadas las 40 cartas
//nuevo array con las 10 cartas ya al azar
$mano = array_slice($baraja, 0, 10); // toma las 10 primeras  array_slice($array, $inicio, $longitud)

//FOREACH PARA LUEGO YA IMPRIMIR
foreach ($mano as $carta) { //En tu caso, $mano es un array de arrays, cada carta tiene estas claves: numero, palo, puntos.
    // Nombre de la carta según tu imagen
    $nombreCarta = $carta['numero']  . $carta['palo'];// Ej: 1oro
    $puntosCarta = $carta['puntos'];

    $total+=$puntosCarta;
    
  // Mostrar la carta
    echo '<div style="
        display: inline-block; 
        text-align: center; 
        margin: 25px; 
        width: 50%; 
        max-width: 100px;
    ">';
    echo '<img src="img/' . $nombreCarta . '.png" style="width: 100%; height: auto; display:block; margin: 0 auto;">';
    echo '<div style="font-size: 12px; margin-top: 3px;">' . $nombreCarta . '</div>';
    echo '<div style="font-size: 12px; color: #555;">' .$puntosCarta . ' puntos</div>';
    echo '</div>';
}

// Mostrar total con estilo
echo '<div style="clear: both; margin-top: 20px; font-size: 30px; font-weight: bold;">';
echo "Total de puntos: $total";
echo '</div>';





?>