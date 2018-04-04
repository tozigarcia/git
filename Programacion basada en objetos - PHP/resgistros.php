<?php
include "librerias/conexion.php";
include "librerias/cabecera.php";

$conexion= new mysqli($servidor, $usuario, $contrasenya, $basedatos);
?>

<form action="" method="post">
Usuario: <input type="text" name="usuario"><br>
Constraseña <input type="password" name="contrasenya"><br>
Repetir contraseña <input type="password" name="repetir"><br>
<input type="submit" value="Enviar">
</form>

<?php 
if($_POST){
    
    //comprobamos si las contraseñas coinciden
    if ($_POST["contrasenya"]!= $_POST["repetir"])
        echo "Las contraseñas no coinciden";
        //si coincien debemos comprobar en la bd si ya existe un usuario
        //con el nombre indicado
        else{
            $resultado= $conexion->query("SELECT nombre FROM usuario WHERE
nombre= '$_POST[usuario]'");
            //con los metodos de fetch obtenemos la siguiente fila a consultar del
            //conjunto de filas que hemos obtenido como resultado de la ejecucion
            //de la select
            //comprobamos el numero de filas de $resultado a traves de su atributo
            //num_rows;
           if ($resultado-> num_rows !=0)
           echo "Ya existe un usuario con ese nombre";
           else {
               $consulta = "INSERT INTO usuario (nombre, contrasenya) VALUES ('$_POST[usuario]', '$_POST[contrasenya]')";
               //echo $consulta, "<br>";
               $resultado= $conexion->query($consulta); 
               
               if ($resultado == TRUE)
                   echo "El usuario $_POST[usuario] ha sido creado correctamente";
               else
                   echo "Error: el usuario $_POST[usuario] no ha sido creado correctamente";
           }
            
        }
}
?>