<?php
include 'conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO USUARIO</title>
    <link rel="stylesheet" href="CSS/estiloregistro.css">
    <script src="JS/jsindex.js"></script>
</head>
<body>
    <form action="insertaruser.php"  method="post" onsubmit="return validar();">

    <h2>Registrarse</h2>
    <label>USUARIO</label>
    <input type="text" name="username" id="username">
    <label>CONTRASEÑA</label>
    <input type="password" name="clave" id="clave">
    <label>CONFIRMAR CONTRASEÑA</label>
        <input type="password" id="clave2">
    <label>CORREO</label>
    <input type="email" name="correo" id="correo">

    <input type="submit" name="ENVIAR" value="Enviar">

</form>
</body>
</html>