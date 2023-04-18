<?php

class ResponsableV
{
    //Declaramos atributos
    private $numEmpleado;
    private $numLicencia;
    private $nombre;
    private $apellido;


    //Construimos le objeto
    public function __construct($numEmpleado, $numLicencia, $nombre, $apellido)
    {
        $this->numEmpleado = $numEmpleado;
        $this->numLicencia = $numLicencia;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    //Inicio seto de atributos
    /**
     * @param string $numEmpleado
     * @var string $numEmpleado
     */
    public function setNumEmpleado($numEmpleado)
    {
        $this->numEmpleado = $numEmpleado;
    }

    /**
     * @param string $numLicencia
     * @var string $numLicencia
     */
    public function setNumLicencia($numLicencia)
    {
        $this->numLicencia = $numLicencia;
    }
    /**
     * @param string $nombre
     * @var string $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    /**
     * @param string $apellido
     * @var string $apellido
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }
    //Fin seteo de atributos

    //Inicio de Obtencion de los atributos
    /**
     * @return string $numEmpleado
     */
    public function getNumEmpleado()
    {
        return $this->numEmpleado;
    }

     /**
     * @return string $numLicencia
     */
    public function getNumLicencia()
    {
        return $this->numLicencia;
    }

     /**
     * @return string $nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

     /**
     * @return string $apellido
     */
    public function getApellido()
    {
        return $this->apellido;
    }
    //fin obtencion de atributos
    
    //Metodo __toString
    /**
     * retornamos un string con los datos de los atributos concatenados
     */
    public function __toString()
    {
        return "Numero de Empleado: " . $this->getNumEmpleado() .
            " Numero de licencia: " . $this->getNumLicencia() .
            " Nombre: " . $this->getNombre() .
            " Apellido: " . $this->getApellido();
    }
}
