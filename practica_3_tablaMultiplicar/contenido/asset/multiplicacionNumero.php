<?php
/* Escribe un programa que pida un numero y ese de la tabla de multiplicar hasta el 10
*/

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    function multiplicarNumero()
    {
        $numero = floatval($_POST["numero"]);

        // Validar que los valores sean positivos
        if ($numero < 0) {
            return "Valor inválido o negativo";
        }
        $resultado = "";

        for ($i = 1; $i <= 10; $i++) {
            $resultado .= "$numero X $i es igual a = " . ($numero * $i) . "<br>";
        }
        return $resultado;
    }

    $result = multiplicarNumero();
}
