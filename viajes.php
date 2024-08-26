<?php 
class viajes
{
    //atributos
    private $hotel;
    private $ciudad;
    private $pais;
    private $fecha;
    private $duracion=0;
    /**
     * Get the value of hotel
     */ 
    public function getHotel()
    {
        return $this->hotel;
    }
    /**
     * Set the value of hotel
     *
     * @return  self
     */ 
    public function setHotel($hotel)
    {
        $this->hotel = $hotel; 
    }
    /**
     * Get the value of ciudad
     */ 
    public function getCiudad()
    {
        return $this->ciudad;
    }
    /**
     * Set the value of ciudad
     *
     * @return  self
     */ 
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;  
    }
    /**
     * Get the value of pais
     */ 
    public function getPais()
    {
        return $this->pais;
    }
    /**
     * Set the value of pais
     *
     * @return  self
     */ 
    public function setPais($pais)
    {
        $this->pais = $pais;  
    }
    /**
     * Get the value of fecha
     */ 
    public function getFecha()
    {
        return $this->fecha;
    }
    /**
     * Set the value of fecha
     *
     * @return  self
     */ 
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;   
    }
    /**
     * Get the value of duracion
     */ 
    public function getDuracion()
    {
        return $this->duracion;
    }
    /**
     * Set the value of duracion
     *
     * @return  self
     */ 
    public function setDuracion($duracion)
    {
        $this->duracion = $duracion;     
    }
    /**
     * funcion de espera
     */
    public function procesarDatos(){
        return  $this->hotel;
    }
    public function procesarCiudad(){
        return  $this->ciudad;
    }    
}
?>