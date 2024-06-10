<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Por favor debes inicar sesión");
                window.location = "index.php";
            </script>
        ';
        session_destroy();
        die();
    }   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido usuario</title>
</head>
<body>
    <h1>Bienvenido Usuario</h1>
    <a href="php/cerrar_sesion.php">Cerrar sesion</a>
</body>
</html>