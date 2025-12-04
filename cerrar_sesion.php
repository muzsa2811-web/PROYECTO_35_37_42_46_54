<?php
session_start();

// Si NO existe la sesión, redirige al login sin mostrar mensajes
if (!isset($_SESSION['user_35_37_42_46_54'])) {
    header("Location: iniciosesion.php");
    exit();
}

// Si la sesión existe, se destruye
session_destroy();

// Redirige al login
header("Location:iniciosesion.php");
exit();
?>