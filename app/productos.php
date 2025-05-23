<?php
    if (!isset($_COOKIE['USERNAME'])) {
        header("Location: ./login.php");
    }

    require_once "conectar.php";
    $querySQL = "SELECT * FROM products";
    $queryDB = mysqli_query($connection, $querySQL);
    $response = mysqli_fetch_all($queryDB);
    mysqli_free_result($queryDB);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de administración</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <main>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Eighth navbar example">
                <div class="container">
                <a class="navbar-brand" href="./dashboard.php">
                    <img src="./img/gato.gif" alt="" width="50px">
                </a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse collapse" id="navbarsExample07" style="">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="./dashboard.php">Inicio</a>
                    </li>
                    <?php if ($_COOKIE['ROLE'] == "Admin") { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="./usuarios.php">Usuarios</a>
                        </li>
                    <?php } ?>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Productos</a>
                    </li>
                    </ul>
                    <a href="./logout.php" class="btn btn-success">Cerrar sesión</a>
                </div>
                </div>
            </nav>
        </header>

        <section class="container">
            <div class="d-flex justify-content-between my-2">
                <h2>Listado de productos</h2>
                <a href="./product_new.php" class="btn btn-primary">Nuevo</a>
            </div>

            <hr>
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">It</th>
                    <th scope="col">Código</th>
                    <th scope="col">Producto</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $item = 1; 
                        foreach ($response as $product) { 
                    ?>
                    <tr>
                        <th scope="row"><?php echo $item++; ?></th>
                        <td><?php echo $product[1]; ?></td>
                        <td><?php echo $product[2]; ?></td>
                        <td><?php echo $product[3]; ?></td>
                        <td>
                            <a href="./product_edit.php?id=<?php echo $product[0]; ?>" class="btn btn-warning btn-sm">Editar</a> 
                            <?php if ($_COOKIE['ROLE'] == "Admin") { ?>
                                |
                                <a href="./borrar_producto.php?id=<?php echo $product[0]; ?>" class="btn btn-danger btn-sm">Borrar</a>
                            <?php } ?>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </section>

        <hr>

        <footer class="container">
            <p class="float-end"><a href="#">Back to top</a></p>
            <p>© 2017–2024 Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
        </footer>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>