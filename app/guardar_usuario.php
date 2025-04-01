<?php
require_once "conectar.php";

$fullname = $_POST["fullname"];
$username = $_POST["username"];
$password = $_POST["password"];
$role = $_POST["role"];

$querySQL = "INSERT INTO users (fullname, username, password, role) VALUES ('{$fullname}', '{$username}', '{$password}', '{$role}')";
$queryDB = mysqli_query($connection, $querySQL);

if ($queryDB) {
    header("Location: ./usuarios.php");
} else {
    header("Location: ./usuario_nuevo.php?error");
}

?>