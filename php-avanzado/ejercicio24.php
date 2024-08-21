<?php

/*Solicitar nombre y fecha de nacimiento de una persona y devolver la edad.
*/



if($_SERVER["REQUEST_METHOD"]  ==  "POST") {
              $nombre = $_POST["nombre"];
              $fechaNacimiento = $_POST["fechaNacimiento"];



//validar la fecha de nacimiento...........
     if(strotime($fechaNacimiento) === false) {
        echo "La fecha de nacimiento ingresada no es válida.";

     
     }else{
         $fechaNacimiento = new  Datetime($fechaNacimiento);
         $hoy = new Datetime();
         $edad = $hoy->diff($fechaNacimiento)->y;


         echo   "Hola, $nombre.Tienes $edad  años.";

     }
    }

   var_dump($_POST);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Calcular Edad</title>
</head>
<body>
    <h3>Calcular Edad</h3>
    <form action="" method="POST">

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br>
        <label for="fechaNacimiento">Fecha de Nacimiento:</label>
        <input type="date" name="fechaNacimiento" required><br>
        <input type="submit" value="Calcular Edad">
    </form>
</body>
</html>
















