<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP y HTML</title>
</head>
<body>
    <form action="04_phphtml.php" method="post">
        <label for="edad">Digite su edad: </label>
        <input type="number" name="edad" id="edad">
        <br>
        <br>
        <input type="submit" value="Enviar">
    </form>

    <?php
        if ($_POST) {
            $edad = $_POST["edad"];
            echo "<br><br>..:: HOLA ::..<br>";
            echo "Tienes " . $edad . " años";
        }
    ?>
</body>
</html>