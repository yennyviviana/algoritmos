<?php

/*Calcule el área de un rectángulo. Eleve el resultado a la potencia de 2. Muestre
ambos resultados............
*/

 //variables
$largo = 12;
$ancho =  17;


//formula del area del  rectangulo...........
$area =  $largo  *  $ancho;


//elevar cuadrado.......
$potencia_elevada = pow($area,2);


//mostrar e imprimir los resultados...........................
echo  "el area del rectangulo es: ". $area;
echo  "el resultado de elevar el area es: ". $potencia_elevada;







?>