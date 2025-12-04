<?php
include 'conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMPRIMIR CON ESTILO CSS</title>
    <link rel=" stylesheet" href="CSS/mostrarT_cal.css">
</head>
<body>
<div class="contenedor">
        <div class="titulo">Reporte de calculos</div>
        <a href="edicion_cal.php" class="op_editar"> Edicion</a>
        <div class="encabezado">ID Ticket:</div>
    <div class="encabezado">Nombre:</div>
    <div class="encabezado">Cantidad (kg):</div>
    <div class="encabezado">Descuento:</div>
    <div class="encabezado">Total:</div>
 
<?php
$consulta = " SELECT * FROM calculos";

$resultado = mysqli_query($enlace,$consulta);

if(!$resultado)
    {
    echo "error al intentar consulta";
    exit();
}


while($mostrar=mysqli_fetch_array($resultado))
{


?>
<div class="filas"><?php echo $mostrar['id_ticket']; ?></div>
<div class="filas"><?php echo $mostrar['nombre']; ?></div>
    <div class="filas"><?php echo $mostrar['cantidad']; ?></div>
    <div class="filas"><?php echo $mostrar['descuento']; ?></div>
    <div class="filas"><?php echo $mostrar['total']; ?></div>

<?php
}
?>
</div>
<?php
mysqli_free_result($resultado);
mysqli_close($enlace)
?>
</body>
</html>
