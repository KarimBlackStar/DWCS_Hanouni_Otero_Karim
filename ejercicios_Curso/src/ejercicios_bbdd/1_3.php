<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 1.3.1</title>
</head>
<body>
<form action="" method="POST">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" maxlength="60" required><br>

    <label for="apellido1">Primer apellido:</label>
    <input type="text" name="apellido1" id="apellido1" maxlength="100" required><br>

    <label for="apellido2">Segundo apellido:</label>
    <input type="text" name="apellido2" id="apellido2" maxlength="100"><br>

    <label for="nickname">Nickname:</label>
    <input type="text" name="nickname" id="nickname" maxlength="30" required><br>

    <label for="email">E-mail:</label>
    <input type="email" name="email" id="email" maxlength="320" required><br>

    <label for="contrasenha">Contraseña:</label>
    <input type="password" name="contrasenha" id="contrasenha" required><br>

    <button type="submit">Enviar</button>
</form>

<?php
if (isset($_POST['nombre']) && !empty($_POST['nombre'])) {
    $nombre = $_POST['nombre'];
    var_dump($_POST);

}
?>
</body>
</html>