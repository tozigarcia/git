<?php
$conexion = new mysqli("localhost", "root", "blockbuster");

$resultado = $conexion -> query("SELECT titulo FROM pelicula");

$totalfilas = $resultado -> num_rows;

for ($numfila = 0; $numfila < $totalfilas; $numfila ++) {
    //APUNTA A LA FILA QUE CORRESPONDE
    $resultado ->data_seek($numfila);
    //OBTENEMOS LA FILA A LA QUE ESTAMOS APUNTANDO
    $fila = $resultado->fetch_assoc();
    ECHO $FILA["titulo"], "<br>";
}
?>