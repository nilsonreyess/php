<?php
require_once "conectar.php";

$id = $_POST["id"];
$codigo = $_POST["codigo"];
$producto = $_POST["producto"];
$stock = $_POST["stock"];

$querySQL = "UPDATE products SET codigo = '{$codigo}', producto = '{$producto}', stock = '{$stock}' WHERE id = {$id}";
$queryDB = mysqli_query($connection, $querySQL);

if ($queryDB) {
    header("Location: ./productos.php");
} else {
    header("Location: ./update_product.php?error");
}

?>