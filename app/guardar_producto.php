<?php
require_once "conectar.php";

$codigo = $_POST["codigo"];
$producto = $_POST["producto"];
$stock = $_POST["stock"];

$querySQL = "INSERT INTO products (codigo, producto, stock) VALUES ('{$codigo}', '{$producto}', '{$stock}')";
$queryDB = mysqli_query($connection, $querySQL);

if ($queryDB) {
    header("Location: ./productos.php");
} else {
    header("Location: ./product_new.php?error");
}

?>