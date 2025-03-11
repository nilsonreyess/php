<?php
    if (!isset($_COOKIE['USERNAME'])) {
        header("Location: ./login.php");
    }

    include "./db.php";
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
                    <li class="nav-item">
                        <a class="nav-link" href="#">Usuarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="./productos.php">Productos</a>
                    </li>
                    </ul>
                    <a href="./logout.php" class="btn btn-success">Cerrar sesión</a>
                </div>
                </div>
            </nav>
        </header>

        <section class="container">
            <h2 class="my-2">Editar producto</h2>
            <hr>
            <div class="w-50">
                <form action="">
                    <div class="form-floating mb-3">
                        <input type="text" name="codigo" class="form-control" id="floatCodigo" placeholder="Código">
                        <label for="floatCodigo">Código</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="producto" class="form-control" id="floatProducto" placeholder="Producto">
                        <label for="floatProducto">Producto</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" name="stock" class="form-control" id="floatStock" placeholder="Stock">
                        <label for="floatStock">Stock</label>
                    </div>
                    <div class="d-flex justify-content-around">
                        <a href="./productos.php" class="btn btn-danger">Cancelar</a>
                        <input type="submit" value="Guardar" class="btn btn-success">
                    </div>
                </form>
            </div>
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