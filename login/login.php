<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Mi página web</title>
</head>
<body>
    <h1>Ingresar a la aplicación</h1>
    <form action="./dashboard.php" method="post">
        <label for="user">Usuario</label>
        <input type="text" name="user" id="user">
        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password">
        <input type="submit" value="Ingresar">
    </form>
</body>
</html>