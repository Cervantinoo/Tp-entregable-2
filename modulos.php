<?php

/**
 * Funcion que muestra un menu de opciones.
 * @var string $opcion
 * @return string $opcion
 */
function menu()
{
    echo "Opcion 1: Ver informacion del viaje: \n";
    echo "Opcion 2: cargar informacion del viaje: \n";
    echo "Opcion 3: Modificar datos del viaje: \n";
    echo "Opcion 0: Para finalizar el programa. \n";
    $opcion = trim(fgets(STDIN));
    return $opcion;
}

/**
 * Funcion que mostrara un mensaje con opciones para poder modificar datos de un viaje
 * @var string $opcionesModificar
 * @return string $opcionesModificar
 */
function MenumodificarInformacion()
{
    echo "¿Que datos desea modificar?: \n";
    echo "Opcion 1: Codigo de viaje: \n";
    echo "Opcion 2: Destino del viaje: \n";
    echo "Opcion 3: Cantidad Maxima de pasajeros: \n";
    echo "opcion 4: Datos del pasajero: \n";
    echo "Opcion 5: Datos del responsable \n";
    $opcionModificar = trim(fgets(STDIN));
    return $opcionModificar;
}

/**
 * Funcion que permite modificar los datos de un viaje, Por ejemplo, el codigo de viaje o algun dato en particular de un pasajero
 * @param object $objViaje
 * @param object $objPasajero
 * @param object $objResponsable
 * @var int $codigo
 * @var string $destino
 * @var int $cantPasajeros
 */
function ModificarInformacion($objViaje, $objPasajero, $objResponsable)
{
    $opcionModificar = MenuModificarInformacion();
    switch ($opcionModificar) {
        case 1; //Modifacar codigo de viaje
            echo "Ingrese el nuevo codigo de viaje: \n";
            $codigo = trim(fgets(STDIN));
            $objViaje->setCodigo($codigo);
            break;
        case 2; //Modificar Destino de viaje
            echo "Ingrese el nuevo destino de viaje: \n";
            $destino = trim(fgets(STDIN));
            $objViaje->setDestino($destino);
            break;
        case 3; //Modificar cantidad maxima de pasajeros
            echo "Ingrese la nueva cantidad máxima de pasajeros: \n";
            $cantPasajeros = trim(fgets(STDIN));
            $objViaje->setCanMaxPasajeros($cantPasajeros);
            break;
        case 4; //Modificar datos del pasajero
            modificarDatosPasajeros($objPasajero, $objViaje);
            break;
        case 5; //Modifacar datos del responsable
            modificarDatosResponsable($objResponsable);
            break;
        default;
            echo "Ingreso una opcion incorrecta, por favor ingrese la opcion correcta :) \n";
            break;
    }
}


//Funcion que permite cargar los datos un viaje.
/**
 * @param object $objViaje
 * @param object $objPasajero
 * @param object $objResponsable
 * @var string $codigo
 * @var string $destino
 * @var int $cantPasajeros
 */

function cargarInformacion($objViaje, $objPasajero, $objResponsable)
{
    echo "Ingrese codigo de viaje: ";
    $codigo = trim(fgets(STDIN));
    $objViaje->setCodigo($codigo);

    echo "Ingrese destino del viaje: ";
    $destino = trim(fgets(STDIN));
    $objViaje->setDestino($destino);

    echo "ingrese cantidad máxima de pasajeros: ";
    $cantPasajeros = trim(fgets(STDIN));
    $objViaje->setCanMaxPasajeros($cantPasajeros);

    echo "Cargue los datos del responsable: ";
    cargarResponsable($objViaje);

    echo "Cargue los datos de los pasajeros: \n";
    datosPasajeros($objPasajero, $objViaje);
}


//Funcion que nos permite modificar los datos de un pasajero
/**
 * @param object @objPasajero
 * @param object @objViaje
 * @var int $numPasajero
 * @var object $pasajero
 * @var int $opcion
 * @var string $nNombre, $nApellido, $nDni, $nTelefono
 */
function modificarDatosPasajeros($objPasajero, $objViaje)
{
    echo "Listado de pasajeros: \n";
    echo mostrarArreglo($objViaje->getPasajeros());
    echo "Ingrese el número de pasajero que desea cambiar: ";
    $numPasajero = trim(fgets(STDIN));
    $numPasajero -= 1;
    $pasajero = $objViaje->getPasajeros()[$numPasajero];
    echo "¿Que datos del pasajero desea modificar? \n";
    echo "Opcion 1: Nombre \n";
    echo "Opcion 2: Apellido \n";
    echo "Opcion 3: DNI \n";
    echo "Opcion 4: Telefono \n";
    $opcion = trim(fgets(STDIN));

    switch ($opcion) {
        case 1;
            echo "Ingrese el nuevo nombre: \n";
            $nNombre = trim(fgets(STDIN));
            $pasajero->setNombre($nNombre);
            break;
        case 2;
            echo "Ingrese el nuevo Apellido: \n";
            $nApellido = trim(fgets(STDIN));
            $pasajero->setApellido($nApellido);
            break;
        case 3;
            echo "Ingrese nuevo DNI: \n";
            $nDni = trim(fgets(STDIN));
            if ($nDni == $objPasajero->getNumDocumento()) {
                echo "El pasajero ya esta cargado. \n";
            } else {
                $pasajero->setNumDocumento($nDni);
            }

            break;
        case 4;
            echo "Ingrese nuevo numero de telefono: \n";
            $nTelefono = trim(fgets(STDIN));
            $pasajero->setTelefono($nTelefono);
            break;
        default;
            echo "Ingresaste una opcion incorrecta... \n";
            break;
    }
}

//Funcion que permite cargar los datos de un pasajero
/**
 * @param object $objPasajero, $objViaje
 * @var string $bandera, $nombre, $apellido, $telefono, $dni
 */
function datosPasajeros($objPasajero, $objViaje)
{
    $bandera = "";
    while ($bandera != "S") {

        echo "Ingrese nombre del pasajero: \n";
        $nombre = trim(fgets(STDIN));

        echo "Ingrese Apellido del Pasajero: \n";
        $apellido = trim(fgets(STDIN));

        echo "Ingrese telefono del pasajero: \n";
        $telefono = trim(fgets(STDIN));

        echo "Ingrese Numero de documento del pasajero: \n";
        $dni = trim(fgets(STDIN));


        if (verificarRepetidos($dni, $objViaje) == TRUE) {
            echo "El pasajero ya esta cargado...\n";
        } else {
            $objPasajero = new Pasajero($nombre, $apellido, $telefono, $dni);
            $objViaje->setPasajeros($objPasajero);
        }
        echo "¿Ya termindo de cargar pasajeros? S/N: ";
        $bandera = trim(fgets(STDIN));
    }
}

//Funcion para verificar si un pasajero esta repetido
/**
 * @param string $dni
 * @param object $objViaje
 * @var int $long, $i
 * @var bool $var
 * @var object $pasajero
 * @return bool $var 
 */
function verificarRepetidos($dni, $objViaje)
{
    $long = count($objViaje->getPasajeros());
    $i = 0;
    $var = FALSE;
    while ($i < $long && $var == FALSE) {
        $pasajero = $objViaje->getPasajeros()[$i];
        $pasajero->getNumDocumento();
        if ($dni == $pasajero->getNumDocumento()) {
            $var = TRUE;
        } else {
            $var = FALSE;
        }
        $i++;
    }
    return $var;
}

//Funcion que permite cargar responsable
/**
 * @param object $objViaje
 * @var string $numEmpleado, $numLicencia, $nombre, $apellido 
 */
function cargarResponsable($objViaje)
{

    echo "Ingrese numero de empleado del responsable: \n";
    $numEmpleado = trim(fgets(STDIN));
    echo "Ingrese numero de licencia del responsable: \n";
    $numLicencia = trim(fgets(STDIN));
    echo "Ingrese nombre del responsable: \n";
    $nombre = trim(fgets(STDIN));
    echo "Ingrese apellido del responsable: \n";
    $apellido = trim(fgets(STDIN));

    $objResponsable = new ResponsableV($numEmpleado, $numLicencia, $nombre, $apellido);
    $objViaje->setResponsableV($objResponsable);
}

//Funcion que permite modificar un dato del responsable
/**
 * @param object $objResponsable
 * @var string $opcion, $numEmpleado, $numLicencia, $nombre, $apellido 
 */
function  modificarDatosResponsable($objResponsable)
{
    echo "¿Que datos del responsable desea cambiar? \n";
    echo "Opcion 1: Numero de empleado \n";
    echo "Opcion 2: Numero de licencia \n";
    echo "Opcion 3: Nombre \n";
    echo "Opcion 4: Apellido \n";
    $opcion = trim(fgets(STDIN));

    switch ($opcion) {
        case 1:
            echo "Ingrese nuevo numero de empleado: ";
            $numEmpleado = trim(fgets(STDIN));
            $objResponsable->setNumEmpleado($numEmpleado);
            break;
        case 2:
            echo "Ingrese nuevo numero de empleado: ";
            $numLicencia = trim(fgets(STDIN));
            $objResponsable->setNumLicencia($numLicencia);
            break;
        case 3:
            echo "Ingrese nuevo numero de empleado: ";
            $nombre = trim(fgets(STDIN));
            $objResponsable->setNombre($nombre);
            break;
        case 4:
            echo "Ingrese nuevo numero de empleado: ";
            $apellido = trim(fgets(STDIN));
            $objResponsable->setApellido($apellido);
            break;
        default:
            echo "Ingreso una opcion incorrecta: ";
            break;
    }
}
