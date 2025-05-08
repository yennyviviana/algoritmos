<?php

     //Escribir un algoritmo que calcule el promedio de 3 números......
   


$num1 = (float) readline("Ingrese el numero 1:");
$num2 = (float) readline("Ingrese el numero 2:");
$num3= (float) readline("Ingrese el numero 3:");


$promedio = ($num1 + $num2 + $num3) / 3;




if ($promedio > 0){
     echo "El  promedio calculado es: ". number_format ($promedio,2);
 
 } else{
     echo "El salario prormedio  es incorrecto";
 }
 ?>


