<?php
if (isset($_COOKIE["NAMEUSER"])) {
    header("Location: ./dashboard.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGV - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body class="form-signin w-100 m-auto">
    <main class="form-signin w-100 m-auto">
        <form action="./validate.php" method="post">
            <div class="text-center">
                <a href="./" class="text-decoration-none m-auto">
                    <img src="./img/logo.png" alt="" class="wp-100">
                </a>
                <h2 class="h3 mb-3 fw-normal text-center">Ingresar al sistema</h2>
            </div>

            <div class="form-floating">
                <input type="text" name="username" class="form-control" id="floatingInput" placeholder="Usuario">
                <label for="floatingInput">Usuario</label>
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Contraseña">
                <label for="floatingPassword">Contraseña</label>
            </div>

            <button class="btn btn-primary w-100 py-2" type="submit">Ingresar</button>
            <p class="mt-2 mb-3 text-body-secondary text-center">Pepito Pérez © <?php echo date("Y"); ?></p>
        </form>
    </main>
</body>

</html>