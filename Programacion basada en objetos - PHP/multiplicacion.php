<!DOCTYPE html>

<html>
<head>
   <title>multiplicaciones.</title> 
</head>
<body>
<h1>Multiplicaciones</h1>

<form action="" method="post"> 
   <label for="numero">Escribe un numero del 1 al 10:</label>
   <input type="number" name="numero"/>
   
   <input type="submit" value="Enviar"/><br>
   
</form>

<?php  
if($_POST) {
$n=$_POST['numero'];

if ($n<1 or $n>10) {
    echo "no has introducido un nùmero entre el 1 y el 10.";
    }
else {
     echo "Tabla del $n:<br>";
     $i=1;
     
     while ($i<=10) {
           echo "$n x $i = ".$n*$i."<br/>";
           $i++;
           } 
     }
}
?>
</body>
</html>