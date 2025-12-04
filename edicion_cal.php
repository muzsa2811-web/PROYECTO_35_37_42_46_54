<?php
include 'conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Cálculos</title>
    <link rel="stylesheet" href="CSS/mostrarT_cal.css">
</head>
<body>

<div class="contenedor">
    <div class="titulo titulo-opc">Reporte de Cálculos</div>

    <div class="encabezado">ID Ticket:</div>
    <div class="encabezado">Nombre:</div>
    <div class="encabezado">Cantidad (kg):</div>
    <div class="encabezado">Descuento:</div>
    <div class="encabezado">Total:</div>
<div class="encabezado">operacion:</div>
<?php
$consulta = "SELECT * FROM calculos";
$resultado = mysqli_query($enlace, $consulta);

if(!$resultado){
    echo "Error al intentar consulta";
    exit();
}

while($mostrar = mysqli_fetch_array($resultado)){
?>

<div class="filas"><?php echo $mostrar['id_ticket']; ?></div>
<div class="filas"><?php echo $mostrar['nombre']; ?></div>
<div class="filas"><?php echo $mostrar['cantidad']; ?></div>
<div class="filas"><?php echo $mostrar['descuento']; ?></div>
<div class="filas"><?php echo $mostrar['total']; ?></div>
<div class="filas">
        <a href="actualizacal.php?id=<?php echo $mostrar['id_ticket']?>">Actualizar</a>||
        <a href="eliminacal.php?id=<?php echo $mostrar['id_ticket']?>" class="borrar" >Eliminar</a>
    </div>
<?php
}
?>
</div>

<?php
mysqli_free_result($resultado);
mysqli_close($enlace);
?>
<script type="text/javascript" src="confirmarbcontacto.js"></script>
</body>
</html>
