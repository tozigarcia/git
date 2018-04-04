<html>
<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" >
<title> Formulario </title>

<style>

input [type=text]{
    background-color:#BDBDBD;
}

input[type=text]:focus {
    border: 4px solid #555;
    background-color:lightblue;
    
}
input[type=submit] {
    background-color:lightblue;
    border:3px solid black;
    cursor:pointer;
}

</style>
</head>

<body>

<?php

$delegado = array(
    1 =>"David Pociño" ,
    2 => "Paula",
    3 => "Dani",
    4 => "Alejandro Flores",
    5 => "Alex",
    6 => "David Carrion",
    7 => "Luis",
    8 => "Pablo",
    9 => "Adrian",
    10 => "Guille",
    11 => "Alvaro",
    
);

if (isset($_POST["boton"])) {
    
    $nombres_aleatorios = array_rand($delegado, 3);
    echo $delegado[$nombres_aleatorios[0]], "<br>";
    echo $delegado[$nombres_aleatorios[1]], "<br>";
    echo $delegado[$nombres_aleatorios[2]], "<br>";
}


?>

<form action="" method="post">
<fieldset>

<legend>Random delegado</legend>


    <input type="submit" name="boton" value="Enviar">
    
   </fieldset>
   
</form><br>


</body>
</html>