<?php
require_once "conectar.php";

$username = $_POST["username"];
$password = $_POST["password"];

$querySQL = "SELECT fullname, username, role FROM users WHERE username = '{$username}' AND password = '{$password}'";
$queryDB = mysqli_query($connection, $querySQL);
$response = mysqli_fetch_assoc($queryDB);
mysqli_free_result($queryDB);

if ($response == NULL) {
    header("Location: ./login.php?error=404");
    exit();
}

setcookie("USERNAME", $response["username"]);
setcookie("FULLNAME", $response["fullname"]);
setcookie("ROLE", $response["role"]);

header("Location: ./dashboard.php");


/* // Conexión a un sistema de almacenamiento de datos - Persistencia
include "./db.php";

// Recibir los datos enviados por el formulario
$username = $_POST["username"];
$password = $_POST["password"];

if (validate_user($username, $password, $data_users)) {
    header("Location: ./dashboard.php");
} else {
    header("Location: ./login.php?error=true");
} */

?>
