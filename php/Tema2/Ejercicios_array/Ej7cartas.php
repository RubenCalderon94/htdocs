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

$baraja = array();

$baraja = [
    // Oros
    'Oro-1' => 11, 'Oro-2' => 0, 'Oro-3' => 0, 'Oro-4' => 0, 'Oro-5' => 0, 'Oro-6' => 0, 'Oro-7' => 0, 'Oro-Sota' => 2, 'Oro-Caballo' => 3, 'Oro-Rey' => 4,
    
    // Copas
    'Copa-1' => 11, 'Copa-2' => 0, 'Copa-3' => 0, 'Copa-4' => 0, 'Copa-5' => 0, 'Copa-6' => 0, 'Copa-7' => 0, 'Copa-Sota' => 2, 'Copa-Caballo' => 3, 'Copa-Rey' => 4,

    // Espadas
    'Espada-1' => 11, 'Espada-2' => 0, 'Espada-3' => 0, 'Espada-4' => 0, 'Espada-5' => 0, 'Espada-6' => 0, 'Espada-7' => 2, 'Espada-Sota' => 3, 'Espada-Caballo' => 11, 'Espada-Rey' => 4,

    // Bastos
    'Basto-1' => 11, 'Basto-2' => 0, 'Basto-3' => 0, 'Basto-4' => 0, 'Basto-5' => 0, 'Basto-6' => 0, 'Basto-7' => 0, 'Basto-Sota' => 2, 'Basto-Caballo' => 3, 'Basto-Rey' => 4
];






?>