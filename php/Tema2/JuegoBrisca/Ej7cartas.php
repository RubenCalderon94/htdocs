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

$puntos = array(
    1=>11,
    2=>0,
    3=>10,
    4=>0,
    5=>0,
    6=>0,
    7=>0,
    10=>2,
    11=>3,
    12=>4,

);

$palos = array("oro","copas","espada","bastos");
$cartas=[];

echo "<h1>Juego de la brisca<h1/>";

echo '
<div style="display: flex; justify-content: center; align-items: center; width: 100%; height: 100%; padding: 0; background-color: #f0f0f0; border-radius: 0; box-shadow: none; overflow: hidden;">
  <img src="img/Baraja_española_completa.png" alt="Baraja Española Completa" style="width: 100%; height: 100%; object-fit: contain;">
</div>';


while (count($cartas) <= 10) {

    $carta=array_rand($puntos).$palos[array_rand($palos)];

    if(!in_array($carta,$cartas)){
        $cartas[]=$carta;
    }
}

echo '<div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 20px; padding: 20px;">';

foreach ($cartas as $cartafor) {
    echo '<div style="display: flex; flex-direction: column; align-items: center;">';
    echo '<img src="img/' . $cartafor . '.png" alt="Baraja Española Completa" style="width: 100px; height: 150px; object-fit: contain;">';
    echo "<p>$cartafor</p>"; // Nombre de la carta debajo de la imagen
    echo '</div>';
}

echo '</div>';



















?>