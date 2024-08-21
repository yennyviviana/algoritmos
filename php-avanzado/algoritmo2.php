<?php
// Este script calcula los años y días de vida de una persona basada en su fecha de nacimiento

// Definir la fecha de nacimiento de la persona en formato "YYYY-MM-DD"
$birthday = "2006-09-14";


// Obtener la fecha actual en formato "YYYY-MM-DD"
$Date = date("Y-m-d");

// Convertir la fecha de nacimiento de cadena de texto a timestamp
$birthdaytimestamp = strtotime($birthday);

// Convertir la fecha actual de cadena de texto a timestamp
$Datetimestamp = strtotime($Date);

// Calcular la diferencia en segundos entre la fecha actual y la fecha de nacimiento
$segundos_diferencia = $Datetimestamp - $birthdaytimestamp;

// Calcular la edad en años dividiendo los segundos por el número de segundos en un año
// 60 segundos * 60 minutos * 24 horas * 365 días
$edadAños = floor($segundos_diferencia / (60 * 60 * 24 * 365));

// Calcular la edad en días dividiendo los segundos por el número de segundos en un día
// 60 segundos * 60 minutos * 24 horas
$dias = $segundos_diferencia / (60 * 60 * 24);





// Mostrar la edad en años en la pantalla
echo "Tu edad: " . $edadAños;

echo "<br>";

// Mostrar la edad en días en la pantalla, redondeando hacia abajo al número entero más cercano
echo "Tienes " . floor($dias) . " días de nacidos";




?>