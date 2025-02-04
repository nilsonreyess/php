<?php
// Capturar los datos enviados
$usuario = $_POST["user"];
$password = $_POST["password"];

// Requerir archivos
require "./validar.php";

$acceso = validar($usuario, $password);

if ($acceso) {
?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard - Mi página web</title>
    </head>
    <body>
        <h1>Bienvenido(a) al escritorio de mi página web</h1>
        <a href="./registrar.php">Registrar</a>
        <a href="./index.php">Salir</a>
    </body>
    </html>
<?php
} else {
    echo "Acceso NO autorizado.";
}
?>