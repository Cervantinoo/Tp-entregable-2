<?php

//Importamos scripts
include_once('Viaje.php');
include_once('ResponsableV.php');
include_once('Pasajero.php');
include_once('modulos.php');


//Creamos los objetos de referencia
$objPasajero = new Pasajero("Nombre", "Apellido", "telefono", "dni");
$objResponsable = new ResponsableV("1", "124", "NombreR", "ApellidoR");
$arrPasajero = [];
$objViaje = new Viaje(1, "Destino", 45, $objPasajero, $objResponsable);


//Al llamar a la funcion menu(), nos mostrara las posibles opciones
//Que desencadenaran el resto de llamadas a funciones dependiendo de lo que queramos ver, cargar o modificar. 
$bandera = TRUE;
while ($bandera == TRUE) {
    switch (menu()) {
        case 1:
            echo $objViaje;
            break;
        case 2:
            cargarInformacion($objViaje, $objPasajero, $objResponsable);
            break;
        case 3:
            ModificarInformacion($objViaje, $objPasajero, $objResponsable);
            break;
        case 0:            
            echo "Finalizo el programa.";
            $bandera = FALSE;
            break;
        default:
            echo "La opcion ingresada no es valida: Ingrese, 1,2,3 o 0. \n";
    }
            

}
