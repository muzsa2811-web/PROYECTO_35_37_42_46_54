<?php
include 'conexion.php';

$id = $_POST['idt'];

$consulta = "DELETE FROM calculos WHERE id_ticket='$id'";
$ejecuta = mysqli_query($enlace,$consulta);

if(!$ejecuta){
    echo "<script>alert('Error, verifica');window.history.go(-1);</script>";
} else {
    echo "<script>alert('Se ha eliminado');window.location='mostrarT_calculo.php';</script>";
}

mysqli_close($enlace);
?>
