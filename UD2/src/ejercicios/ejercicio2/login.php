<?php
require_once "funciones.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] === 'GET') {
    if (isset($_SESSION['logueado']) && $_SESSION['logueado'] === true) {
        header('Location: restringido.php');
    }
} else if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    $nic = $_POST['nic'] ?? null;
    $pass = $_POST['pass'] ?? null;
    

    if (!empty($nic) && !empty($pass)) {
        if (comprobar_usuario($nic, $pass)) {
            $_SESSION['logueado'] = true;
            $_SESSION["nic"] = $nic;
            header('Location: restringido.php');
        } else {
            $falloLoggin = true;
        }
    }
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

    <form action="" method="post">
        <fieldset>
            <label for="nic">Nombre de usuario (nic)</label><br>
            <input type="text" name="nic"><br>
            <label for="pass">Contraseña</label><br>
            <input type="password" name="pass"><br>
            <button type="submit">Acceder</button>
            <input type="checkbox" name="recuerda" id="recuerda">
            <label for="recuerda">Recuérdame</label>
        </fieldset>
    </form>
    <?php
    if (isset($falloLoggin) && $falloLoggin) {
        echo '<p> Usuario y contraseña incorrectos </p>';
    }
    ?>
    <a href="registro.php">Registrar usuario</a>
</body>

</html>