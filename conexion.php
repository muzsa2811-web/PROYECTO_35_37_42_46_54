<?php
// Obtener credenciales de Railway
$servidor = getenv('MYSQLHOST') ?: 'localhost';
$usuario = getenv('MYSQLUSER') ?: 'root';
$clave = getenv('MYSQL_ROOT_PASSWORD') ?: '';
$base = getenv('MYSQLDATABASE') ?: 'proyecto_35_37_42_46_54';
$puerto = getenv('MYSQLPORT') ?: 3306;

// Crear conexión (agregamos el puerto)
$enlace = mysqli_connect($servidor, $usuario, $clave, $base, $puerto);

// Verificar conexión
if (!$enlace) {
    die("❌ Error de conexión: " . mysqli_connect_error());
}

// Configurar charset UTF-8
mysqli_set_charset($enlace, "utf8mb4");

// ✅ Conexión exitosa
?>

