<?php include 'multiplicacionNumero.php'; ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de multiplicar</title>
    <link rel="stylesheet" type="text/css" href="contenido/style/style.css">
    <script src="https://kit.fontawesome.com/e8d51cac66.js" crossorigin="anonymous"></script>
</head>
<!--ELIAS ARMAS!-->

<body>
    <div class="form-container">
        <h1>Ingrese su numero para multiplicar</h1>
        <form action="#" method="post">
            <div class="input-group">
                <label for="precio1">Introduzca su numero</label>
                <input type="number" id="numero" name="numero" min="1" max="1000" required>
            </div>
            <button type="submit">Mostrar tabla</button>
        </form>
        <div id="resultado" class="resultado"> <?php isset($result) ? print($result) : ' ' ?> </div>
    </div>
</body>


</html>