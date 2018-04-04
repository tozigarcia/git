<?php
include "patata.php";

$mimovil = new Movil();

$mimovil->setModelo("Samsung Galaxy");

echo "Mi Movil ", $mimovil->getModelo(), " funciona de maravilla.<br>";

$mimovil->setUbicacion(1);

echo "Mi movil está en ", $mimovil->getUbicacion(), "<br>";

$mimovil->setEncendido(1);

echo "Mi movil está ", $mimovil->getEncendido();

$mimovil ->cargarmovil();

?>