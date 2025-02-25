<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de mi app</title>
</head>
<body>
    <main>
        <section>
            <h2>Ingresar a mi app</h2>
            <form action="validate_user.php" method="post">
                <div>
                    <label for="username">Usuario</label>
                    <input type="text" name="username" id="username">
                </div>
                <div>
                    <label for="password">Contraseña</label>
                    <input type="password" name="password" id="password">
                </div>
                <input type="submit" value="Ingresar">
                <a href="./">Cancelar</a>
            </form>
        </section>
    </main>
</body>
</html>