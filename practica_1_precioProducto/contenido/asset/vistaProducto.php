<?php include 'precioProducto.php'; ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Precios</title>
    <link rel="stylesheet" type="text/css" href="contenido/style/style.css">
    <script src="https://kit.fontawesome.com/e8d51cac66.js" crossorigin="anonymous"></script>
</head>
<!--ELIAS ARMAS!-->

<body>
    <div class="form-container">
        <h1>Ingrese su Precio</h1>
        <form action="#" method="post">
            <div class="input-group">
                <label for="precio1">Introduzca el precio $</label>
                <input type="number" id="precio1" name="precio1" min="1" max="100" required>
                <i class="fas fa-dollar-sign"></i>
            </div>
            <div class="input-group">
                <label for="precio2">Introduzca el descuento</label>
                <input type="number" id="precio2" name="precio2" min="2" max="100" required>
                <i class="fas fa-percentage"></i>
            </div>
            <button type="submit">Calcular Precio del producto</button>
        </form>
        <div id="resultado" class="resultado">Su precio es: <?php isset($result) ? print($result) : ' ' ?> $</div>
    </div>
</body>


</html>