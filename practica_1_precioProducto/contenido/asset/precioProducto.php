<?php
/* Escribe un programa que pida el precio de un producto y el descuento. 
   Su salida será el precio con el descuento aplicado.
*/

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    function calcularPrecio()
    {
        $precioProducto = floatval($_POST["precio1"]);
        $descuentoProducto = floatval($_POST["precio2"]);

        // Validar que los valores sean positivos y el descuento esté en un rango válido
        if ($precioProducto < 0 || $descuentoProducto < 0 || $descuentoProducto > 100) {
            return "Valores inválidos";
        }

        // Calcular el precio con el descuento aplicado
        $descuento = ($precioProducto * $descuentoProducto) / 100;
        $precioFinal = $precioProducto - $descuento;

        return number_format($precioFinal, 2);
    }

    $result = calcularPrecio();
}
