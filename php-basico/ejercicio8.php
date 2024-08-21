<?php

/*Restar dos números dados por el usuario y guardar su resultado, sumar otros dos números dados
 por el usuario y guardar su resultado y finalmente devolver la multiplicación de los dos resultados*/



$numero_resta1 = 30;
$numero_resta2 = 15;


//otras variables para la suma
$numero_suma1 = 5;
$numero_suma2 =6;


//resultado resta
$resultado_resta = $numero_resta1 - $numero_resta2;


//resultado de la suma
$resultado_suma =  $numero_suma1 + $numero_suma2;


// resultado de la multiplicacion
$resultado_multiplicacion =  $resultado_resta  * $resultado_suma;



// Mostrar el resultado final
echo "El resultado de la resta es: " . $resultado_resta . "\n";
echo "El resultado de la suma es: " . $resultado_suma . "\n";
echo "El resultado de la multiplicación de los resultados es: " . $resultado_multiplicacion . "\n";




?>