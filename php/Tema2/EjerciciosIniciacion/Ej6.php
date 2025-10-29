<?php
/*
6.Dia de la semana
*/

$diaSemana=rand(1,7);

switch ($diaSemana) {
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
