<?php
class silla{
    
    
    protected $setTipo;
    
    protected $setPatas;
    
    protected $setRespaldo;
    
    protected $setCojin;
    
    protected $setPeso;
    
    
    public function setTipo($nomtipo)
    {
        $this->nombre = $nomtipo;
    }
    
    public function setTipo()
    {
        return $this->nombre;
    }
    
    public function setPatas($patas)
    {
        $this->patas = $patas;
    }
    
    public function setPatas()
    {
        return $this->patas;
    }
    
    public function setRespaldo($respaldo)
    {
        if ($respaldo == TRUE)
        $this->respaldo = TRUE;
        else if ($respaldo == FALSE)
            $this->respaldo = FALSE;
    }
    
    public function setRespaldo()
    {
        if ($this->conrespaldo == TRUE)
            return "Respaldo";
            else
                return "SinRespaldo";
    }
    
    public function setCogin($cojin)
    {
        if ($cojin == TRUE)
            $this->cojin = TRUE;
            else if ($cojin == FALSE)
                $this->cojin = FALSE;
    }
    
    public function getCojin()
    {
        if ($this->conCojin == TRUE)
            return "Cojin";
            else
                return "SinCojin";
    }
    public function getPeso($peso)
    {
        
        if ($peso >= 0) {
            $this->peso = $peso;
            return true;
        } else
            return false;
    }
    public function getPeso()
    {
        return $this->peso;
    }
}
?>