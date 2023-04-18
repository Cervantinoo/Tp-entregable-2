<?php

 class Pasajero{
    //Declaramos atributos
    private $nombre;
    private $apellido;   
    private $telefono;
    private $numDocumento;

    /**
     * Declaramos funcion contructora
     * @param string $nombre 
     * @param string $apellido 
     * @param string $tipoDoc
     * @param string $numDocumento
     */

     //Construimos le objeto
    public function __construct($nom, $apellido, $telefono, $numDocumento){
        $this->nombre = $nom;
        $this->apellido = $apellido; 
        $this->telefono = $telefono;       
        $this->numDocumento = $numDocumento;        
    }
    
    //Declaramos los metodos obtener para cada atributo

    /**
     * @return string $nombre
     */
    public function getNombre(){
       return $this->nombre; 
    }

    /**
     * @return string $apellido
     */
    public function getApellido(){
        return $this->apellido; 
     }

     /**
     * @return string $telefono
     */
     public function getTelefono(){
        return $this->telefono; 
     }

    /**
     * @return string $numDocumento
     */
     public function getNumDocumento(){
        return $this->numDocumento; 
     }
     //Fin obtencion de atributos

     //Inicio seteo de atributos
     
    /**
     * @param string $nombre
     * @var string $nombre
     */
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    /**
     * @param string $apellido
     * @var string $apellido
     */
    public function setApellido($apellido){
        $this->apellido = $apellido;
    }

    /**
     * @param string $telefono
     * @var string $telefono
     */
    public function setTelefono($telefono){
        $this->telefono = $telefono;
    }

    /**
     * @param string $numDocumento
     * @var string $numDocumento
     */
    public function setNumDocumento($numDocumento){
        $this->numDocumento = $numDocumento;
    }

    //Fin seteo de atributos

    //Metodo __toString
    /**
     * retorna un string con los datos de los atributos concatenados
     */
    
     public function __toString()
     {
         return "Nombre: " . $this->getNombre() . " " . "Apellido: " . $this->getApellido() . " " . "Telefono: " . $this->getTelefono() . " "  . "Numero de documento: "  . $this->getNumDocumento() . " " ;
         
     }
} 

?>