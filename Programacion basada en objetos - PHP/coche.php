<?php
/* Definiciíon de clase coche*/
class coche{
    
    
//propiedades o atributos de la clase cocheextends 
protected $modelo;
protected $velocidad;
protected $arrancado;

//Metodos de la clase coche
public function setModelo($m) {
    $this -> $modelo = $m;    
}

public function getModelo() {
    return $this-> modelo;       
}

public function setArrancado() {
    if ($a ==TRUE)
        $this->arrancado=TRUE;
    else if($a == fale)
        $this->arrancado = FALSE;
}

public function getArrancado() {
    if ($this->arrancado ==TRUE)
         return "marcha";
    else 
         return "paro";
}




}
?>