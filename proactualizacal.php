<?php
include 'conexion.php';


$id = isset($_POST['idt']) ? $_POST['idt'] : "";
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";
$cantidad = isset($_POST['cantidad']) ? $_POST['cantidad'] : "";
$descuento = isset($_POST['descuento']) ? $_POST['descuento'] : "";
$total = isset($_POST['total']) ? $_POST['total'] : "";


$consulta = "UPDATE calculos SET 
nombre='$nombre',
cantidad='$cantidad',
descuento='$descuento',
total='$total'
WHERE id_ticket='$id'";

$actualiza = mysqli_query($enlace,$consulta);


if(!$actualiza){
    echo "<script>alert('Error al intentar actualizar el registro, verifica');window.history.go(-1);</script>";
} else {
    echo "<script>alert('Actualización exitosa'); window.location='mostrarT_calculo.php';</script>";
}

mysqli_close($enlace);
?>
