<?php  
/*
7.Dia del mes
*/

$diaMes=rand(1,12);

switch ($diaMes) {
    case 1:
        echo "$diaMes; El dia de la semana es Enero";
        break;

    case 2:
        echo "$diaMes; El dia de la semana es Febrero";
        break;

    case 3:
        echo "$diaMes; El dia de la semana es Marzo";
        break;    

    case 4:
        echo "$diaMes; El dia de la semana es Abril";
        break;   

    case 5:
        echo "$diaMes; El dia de la semana es Mayo";
        break;

    case 6:
        echo "$diaMes; El dia de la semana es Junio";
        break;

    case 7:
        echo "$diaMes;El dia de la semana es Julio";
        break;
        
    case 8:
        echo "$diaMes;El dia de la semana es Agosto";
        break;

    case 9:
        echo "$diaMes;El dia de la semana es Septiembre";
        break;
    
    case 10:
        echo "$diaMes;El dia de la semana es Octubre";
        break;    
    
    case 11:
        echo "$diaMes;El dia de la semana es Noviembre";
        break;    

    case 12:
        echo "$diaMes;El dia de la semana es Diciembre";
        break;    

    default:
        echo "Error en la entrada de datos";
        break;
}




?>