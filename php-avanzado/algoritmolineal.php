<?php

// Listas de palabras positivas y negativas
$palabrasPositivas = ["bueno", "genial", "excelente", "maravilloso", "feliz"];
$palabrasNegativas = ["malo", "terrible", "horrible", "triste", "deprimente"];


function analizarSentimiento($texto) {
    global $palabrasPositivas, $palabrasNegativas;
    $positivos = 0;
    $negativos = 0;


    // Convertimos el texto a minúsculas y lo dividimos en palabras
    $palabras = explode(" ", strtolower($texto));

    // Contamos las palabras positivas y negativas
    foreach ($palabras as $palabra) {
        if (in_array($palabra, $palabrasPositivas)) {
            $positivos++;
        } elseif (in_array($palabra, $palabrasNegativas)) {
            $negativos++;
        }
    }

    // Determinamos el sentimiento general
    if ($positivos > $negativos) {
        return "Positivo";
    } elseif ($negativos > $positivos) {
        return "Negativo";
    } else {
        return "Neutral";
    }
}


// Ejemplo de uso
$texto = "El día es genial, me siento feliz y maravilloso.";
echo "El sentimiento del texto es: " . analizarSentimiento($texto);



?>