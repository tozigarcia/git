<?php
$persona = array(

    ["nombre" => "Paquita",
    "apellidos" => "Salas",
    "nacimiento" => "1981-10-05"],
    
    ["nombre" => "Fernando",
        "apellidos" => "Séptimo",
        "nacimiento" => "1994-12-01"],
    
    ["nombre" => "Carlinhos",
        "apellidos" => "Brown",
        "nacimiento" => "1998-11-02"],
    

);
foreach ($persona as $valor) {
    echo "Nombre: ", $valor["nombre"], "<br>";
    echo "Apellidos: ", $valor["apellidos"], "<br>";
    echo "Fecha nacimiento: ", $valor["nacimiento"], "<br>";
}

?>