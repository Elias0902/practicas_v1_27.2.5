<?php
/* Escribe un programa que convierta las horas a minutos y los minutos a segundos
*/

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    function calcularTiempo($hora)
    {
        // Validar que los valores sean positivos
        if ($hora < 0) {
            return "Valores inválidos";
        }

        // Convertir horas a minutos y minutos a segundos
        $horaEnMinutos = $hora * 60;
        $minutosEnSegundos = $horaEnMinutos * 60;

        return "Horas en minutos: $horaEnMinutos min. <br> Minutos en segundos: $minutosEnSegundos seg.";
    }

    // Obtener valores del formulario antes de llamar la función
    $hora = isset($_POST["hora"]) ? floatval($_POST["hora"]) : 0;
}
if (isset($_POST['limpiar'])) {
    $hora = 0; // Restablecer el valor de la hora a 0
    $result = ""; // Restablecer el resultado a vacío
} else {
    $result = "";
}

// Llamar a la función y almacenar el resultado

$result = calcularTiempo($hora);
