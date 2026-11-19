<?php
$usuario = null;

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(!empty($_POST["nombre"])){
        setcookie(
        name: "nombre",
        value: $_POST["nombre"],
        expires_or_options: time() + 5 * 60,
        path:"/ejercicios",
        domain:"",
        secure:true,
        httponly: true
    );
    $nombre = $_POST["nombre"];
    }
} else if($_SERVER["REQUEST_METHOD"] == "GET") {
    $nombre = $_COOKIE["nombre"] ?? null;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COOKIES</title>
</head>
<body>
    <?php
    if(!empty($nombre)){
        echo "<h1>Hola, $nombre</h1>";
    }else{
        echo"<form action='' method='POST'>";
        echo"<label for='nombre'>Nombre: </label>";
        echo"<input type='text' name='nombre' value='$nombre'>";
        echo" <input type='submit' name='enviar' value='Enviar'>";
        echo "</form>";
    }
    ?>

</body>
</html>