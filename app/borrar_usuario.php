<?php
require_once "conectar.php";

$id = $_GET['id'];

$querySQL = "DELETE FROM users WHERE id = {$id}";
$queryDB = mysqli_query($connection, $querySQL);

if ($queryDB) {
    header("Location: ./usuarios.php");
} else {
    header("Location: ./usuarios.php?error");
}

?>