<?php

/*Solicite nombre, apellidos y cedula a un usuario y escriba en una sola línea
todos los datos así: Su nombre es Pedro Pérez y su cedula es
12.098.567.
*/


$nombre = readline("Ingrese su nombre: ");
$apellidos = readline("Ingrese sus apellidos: ");
$cedula = readline("Ingrese su número de cédula: "); // Mantener como cadena de texto

// Mostrar los datos en una sola línea
echo "Su nombre es $nombre $apellidos y su cédula es $cedula.\n";

?>
