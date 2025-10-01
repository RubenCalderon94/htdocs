<?php
/*
Introducir un numero al azar del 1 al 7 y que me diga el dia de la semana que es,
y luego del 1 al 12 y que me diga el dia del mes
*/

$diaSemana=rand(1,7);

switch ($ndiaSemanaum1) {
    case 1:
        echo "$diaSemana; El dia de la semana es Lunes";
        break;

    case 2:
        echo "$diaSemana; El dia de la semana es Martes";
        break;

    case 3:
        echo "$diaSemana; El dia de la semana es Miercoles";
        break;

    case 4:
        echo "$diaSemana; El dia de la semana es Jueves";
        break;

    case 5:
        echo "$diaSemana; El dia de la semana es Viernes";
        break;

    case 6:
        echo "$diaSemana; El dia de la semana es Sabado";
        break;

    case 7:
        echo "$diaSemana;El dia de la semana es Domingo";
        break;

    default:
        echo "Error en la entrada de datos";
        break;
        
}

// Dia del mes igual pero 12 case


?>
