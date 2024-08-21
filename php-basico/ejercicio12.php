<?php


/*Solicitar un número al usuario y escribir los cinco números siguientes al
número ingresado por el usuario
*/


$numero = 3;


// Convertir la entrada a un número entero...........
$numero = intval($numero);



// Calcular y mostrar los cinco números siguientes..........
for($i = 1; $i <= 5;  $i++) {
   $siguienteNumero =  $numero +  $i;
   echo   "numero siguiente   ".  $i  . " :  ". $siguienteNumero .  "  \n";
}



// Finalizar el programa
?>

