<?php
require_once "conectar.php";

$id = $_POST["id"];
$fullname = $_POST["fullname"];
$username = $_POST["username"];
$password = $_POST["password"];
$role = $_POST["role"];

$querySQL = "UPDATE users SET fullname = '{$fullname}', username = '{$username}', password = '{$password}', role = '{$role}' WHERE id = {$id}";
$queryDB = mysqli_query($connection, $querySQL);

if ($queryDB) {
    header("Location: ./usuarios.php");
} else {
    header("Location: ./update_usuario.php?error");
}

?>