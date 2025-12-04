<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO LOGIN</title>
    <link rel="stylesheet" href="CSS/iniciosesion.css">
    <script src="JS/jsindex.js"></script>
</head>
<body>
    <form action="vlogin.php" method="post" onsubmit="return validar();">
        <h1>INICIAR DE SESION</h1>
        <input type="text" name="username" id="username"
        placeholder="&#128102; usuario">
        <input type="password" name="clave" id="clave"
        placeholder="&#128274;contraseña">
        <a  href="registroindex.php">aun no estas registrado? clickea aqui</a>
        <input type="submit" value="ingresar">
        
    </form>
</body>
</html>