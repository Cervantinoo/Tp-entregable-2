<?php

//Creamos la clase viaje
class Viaje
{
    //inicializamos atributos
    private $codigo;
    private $destino;
    private $canMaxPasajeros;
    private $pasajeros = []; //Un arreglo de objetos de la clase Pasajero.php    
    private $responsableV; //Objeto, Clase ResponsableV.php
    private $elementoPasajero; //Objeto de la clase pasajero



    //Metodos

    //Declaracion Metodo contructor
    /**
     * @param int $cod
     * @param string $dest
     * @param int $canMaxP
     * @param object $elementoPasajero
     * @param object $responsableV 
     */
    public function __construct($cod, $dest, $canMaxP, $elementoPasajero, $responsableV)
    {
        $this->codigo = $cod;
        $this->destino = $dest;
        $this->canMaxPasajeros = $canMaxP;
        $this->pasajeros[] = $elementoPasajero;
        $this->responsableV = $responsableV;
    }


    //Inicio Declaracion Metodos obtener
    /**
     * @return int $codigo
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * @return string $destino
     */
    public function getDestino()
    {
        return $this->destino;
    }

    /**
     * @return int $canMaxPasajeros
     */
    public function getCanMaxPasajeros()
    {
        return $this->canMaxPasajeros;
    }

    /**
     * @return array $pasajeros
     */
    public function getPasajeros()
    {
        return $this->pasajeros;
    }

    /**
     * @return object $responsableV;
     */
    public function getResponsableV()
    {
        return $this->responsableV;
    }

    //Fin Declaracion Metodos obtener

    //Incio declaracion Metodos set
    /**
     * @param int $cod
     */
    public function setCodigo($cod)
    {
        $this->codigo = $cod;
    }

    /**
     * @param string $dest
     */
    public function setDestino($dest)
    {
        $this->destino = $dest;
    }

    /**
     * @param int $canMaxP
     */
    public function setCanMaxPasajeros($canMaxP)
    {
        $this->canMaxPasajeros = $canMaxP;
    }
    /**
     * 
     * @param object $pasajero
     */
    public function setPasajeros($pasajero)
    {
        $this->pasajeros[] = $pasajero;
    }
    /**
     * 
     * @param object $responsableV
     */
    public function setResponsableV($responsableV)
    {
        $this->responsableV = $responsableV;
    }
    //Fin declaracion Metodos set


    /**
     * @return string $salida
     */
    public function __toString()
    {
        $salida = "";
        $salida = $salida . "Codigo: " . $this->getCodigo() . "\n" . "Destino: " . $this->getDestino() . "\n" . "Cantidad maxima de pasajeros: " . $this->getCanMaxPasajeros() . "\n" . "Responsable: " . $this->getResponsableV() . " \n Listado de pasajeros: \n" . mostrarArreglo($this->getPasajeros());
        return  $salida;
    }
}
//Funcion que retorna una concatenacion de listado de pasajeros, con sus datos correspondientes 
/**
 * @param array $arrPasajeros
 * @return string $listaPasajeros
 */
function mostrarArreglo($arrPasajeros)
{

    $listaPasajeros = "";
    $long = count($arrPasajeros);
    for ($i = 0; $i < $long; $i++) {
        $listaPasajeros = $listaPasajeros . "Pasajero " . $i + 1 . ": " . $arrPasajeros[$i] . " \n";
    }
    return $listaPasajeros;
}
