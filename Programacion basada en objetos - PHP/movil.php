<?php

class Movil
{

    protected $modelo;

    protected $ubicacion;

    protected $encendido;

    protected $bateria;

    public function setBateria($bat)
    {
        $this->bateria = $bat;
    }

    public function getBateria()
    {
        return $this->bateria;
    }

    public function setModelo($m)
    {
        $this->modelo = $m;
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function setUbicacion($ub)
    {
        if ($ub == TRUE)
            $this->ubicacion = TRUE;
        else if ($ub == FALSE)
            $this->ubicacion = FALSE;
    }

    public function getUbicacion()
    {
        if ($this->ubicacion == TRUE)
            return "Ubicacion establecida";
        else
            return "Búsqueda de ubicacion fallida";
    }

    public function setEncendido($en)
    {
        if ($en == TRUE)
            $this->encendido = TRUE;
        else if ($en == FALSE)
            $this->encendido = FALSE;
    }

    public function getEncendido()
    {
        if ($this->encendido == TRUE)
            return "Encendido";
        else
            return "Apagado";
    }
    
    public function utilizarMovil()
    {
        if ($this->encendido == TRUE)
    }
    
        
        $this->bateria -=rand(1,5);       
        if($this->bateria<-5)
            $this->encendido = FALSE;
    }
}

    public function cargarMovil() 
    {
        if($this->bateria < 100)
            $this->bateria = 100;
    }
        else 
            return false;

}