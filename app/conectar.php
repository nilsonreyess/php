<?php
    $hostDB = "localhost";
    $userDB = "root";
    $passDB = "";
    $nameDB = "app";

    try {
        $connection = mysqli_connect($hostDB, $userDB, $passDB, $nameDB);
    } catch (\Throwable $th) {
        echo "Error: No se pudo conectar a la base de datos.";
        exit(0);
    }
?>