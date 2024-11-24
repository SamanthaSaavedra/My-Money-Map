<?php
    session_start(); 
    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Inicia Sesion");
                window.location = "registro.php"
            </script>
        ';
       /* header("location: registro.php"); */
        session_destroy(); 
        die(); 
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fsfsfs</title>
</head>
<body>
    <h1>Bienvenido</h1>
    <a href="php/cerrar_sesion.php">cerrar sesión</a>
</body>
</html>