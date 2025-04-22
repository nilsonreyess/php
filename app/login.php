<?php
    if (isset($_COOKIE['USERNAME'])) {
        header("Location: ./dashboard.php");
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de mi app</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <main class="form-signin w-25 mt-5 m-auto">
        <section>
            <form action="./validate_user.php" method="post">
                <?php if ($_GET) { ?>
                    <div class="alert alert-danger" role="alert">Error: Datos inválidos.</div>
                <?php } ?>
                <div class="text-center">
                    <a href="./" title="Regresar a la página principal">
                        <img class="mb-4" src="./img/logo.avif" alt="" width="72" height="57">
                    </a>
                    <h1 class="h3 mb-3 fw-normal">Ingresar a mi App</h1>
                </div>

                <div class="form-floating">
                <input type="text" name="username" class="form-control" id="floatingInput" placeholder="Usuario">
                <label for="floatingInput">Usuario</label>
                </div>
                <div class="form-floating">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Contraseña">
                <label for="floatingPassword">Contraseña</label>
                </div>

                <div class="form-check text-start my-3">
                <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Remember me
                </label>
                </div>
                <button class="btn btn-primary w-100 py-2" type="submit">Ingresar</button>
                <hr>
                <p class="mt-2 mb-3 text-body-secondary text-center">Pepito Pérez© 2017–2024</p>
            </form>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>