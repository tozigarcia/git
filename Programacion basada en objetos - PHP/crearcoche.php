<?php
include ("./coche.php");

$micarro = new coche();

$micarro->setModelo("Porsche Panamera");


echo "Mi carro se llama:", $micarro->getModelo(),"me lo robaron";

$micarro->setArrancado(1);
echo"Mi carro está en ",$micarro->getArrancado
?>