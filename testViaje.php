<?php

include 'viajes.php';
$obj = new Viaje(333, "Buenos Aires", 30, 4);

function seleccionarOpcion() {
    //int $opciones
    echo "\n";
    echo "              --MENU DE OPCIONES-- \n";
    echo "\n (1) Cargar información de viaje.";
    echo "\n (2) Mostrar datos del viaje.";
    echo "\n (3) Modificar datos.";
    echo "\n (4) Salir. \n";
    echo "su eleccion es: ";
    $opcion = trim(fgets(STDIN));
    echo "\n";    
    return $opcion;
}  


do {
    $opciones=seleccionarOpcion();
    if($opciones==1){

    }elseif($opciones==2){
        
    }elseif($opciones==3){
        
    }elseif($opciones==4){
        echo "FIN . \n";
    }else{
        echo "OPCION INVALIDA! Debe ingresar valor entre 1 y 4 . \n";
    }
} while ($opciones != 4);


?>