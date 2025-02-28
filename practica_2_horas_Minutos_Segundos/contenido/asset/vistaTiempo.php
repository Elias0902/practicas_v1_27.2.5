<?php include 'convertidorTiempo.php'; ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertidor de horas</title>
    <link rel="stylesheet" type="text/css" href="contenido/style/style.css">
    <script src="https://kit.fontawesome.com/e8d51cac66.js" crossorigin="anonymous"></script>
</head>
<!--ELIAS ARMAS!-->

<body>
    <div class="form-container">
        <h1>Ingrese su hora</h1>
        <form action="#" method="post">
            <div class="input-group">
                <label for="hora">Introduzca hora</label>
                <input type="number" id="hora" name="hora" min="1" max="1000">
            </div>
            <button type="submit" class="convertir">Convertir hora</button>
            <button type="submit" name="limpiar" class="limpiar">Limpiar</button>
        </form>
        <div id="resultado" class="resultado"><?php isset($result) ? print($result) : ' ' ?> </div>
    </div>

</body>


</html>