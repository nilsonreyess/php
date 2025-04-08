<?php
require_once "conectar.php";

$id = $_GET['id'];

$querySQL = "DELETE FROM products WHERE id = {$id}";
$queryDB = mysqli_query($connection, $querySQL);

if ($queryDB) {
    header("Location: ./productos.php");
} else {
    header("Location: ./productos.php?error");
}

?>