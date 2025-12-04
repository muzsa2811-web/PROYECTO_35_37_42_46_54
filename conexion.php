<?php
// Habilitar errores para debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Obtener credenciales de Railway
$servidor = getenv('MYSQLHOST') ?: 'mysql.railway.internal';
$usuario = getenv('MYSQLUSER') ?: 'root';
$clave = getenv('MYSQLPASSWORD') ?: 'AbSvHhhAvjjRlNSsmqWtBuiMcoYOYQxfQ';
$base = getenv('MYSQLDATABASE') ?: 'railway';
$puerto = getenv('MYSQLPORT') ?: 3306;

// Crear conexión (agregamos el puerto)
$enlace = mysqli_connect($servidor, $usuario, $clave, $base, $puerto);

// Verificar conexión
if (!$enlace) {
    die("❌ Error de conexión: " . mysqli_connect_error());
}

// Configurar charset UTF-8
mysqli_set_charset($enlace, "utf8mb4");

// Conexión exitosa (comenta esta línea en producción)
// echo "✅ Conexión exitosa a la base de datos!<br>";
?>

