<?php
// Conexión a un sistema de almacenamiento de datos - Persistencia
include "./db.php";

// Recibir los datos enviados por el formulario
$username = $_POST["username"];
$password = $_POST["password"];

if (validate_user($username, $password, $data_users)) {
    header("Location: ./dashboard.php");
} else {
    header("Location: ./login.php");
}

?>
