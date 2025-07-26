<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First App</title>
</head>
<body>
    <!-- Calculadora -->
     <h1>Calculadora</h1>
    <form action="" method="get">
        <label for="num1">Numero 1:</label>
        <input type="number" name="num1" id="num1">
        <br>
        <label for="num2">Numero 2:</label>
        <input type="number" name="num2" id="num2">
        <br>
        <input type="submit" value="Sumar">
    </form>

    <?php
        if ($_GET) {
            $num1 = $_GET["num1"];
            $num2 = $_GET["num2"];
            echo "La suma es: " . ($num1 + $num2);
        }
    ?>
</body>
</html>