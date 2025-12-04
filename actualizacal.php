<?php
include 'conexion.php';
$id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACTUALIZAR</title>
    <link rel=" stylesheet" href="CSS/mostrarT_cal.css">
</head>
<body>

<form class="contenedor contenedor-opc" action="proactualizacal.php" method="post">
    <div class="titulo titulo-opc">Actualizar Registro</div>

    <div class="encabezado">ID Ticket:</div>
    <div class="encabezado">Nombre:</div>
    <div class="encabezado">Cantidad (kg):</div>
    <div class="encabezado">Descuento:</div>
    <div class="encabezado">Total:</div>
    <div class="encabezado">Operacion:</div>
    

<?php
$consulta = "SELECT * FROM calculos WHERE id_ticket='$id'";
$resultado = mysqli_query($enlace, $consulta);

if(!$resultado){
    echo "error al intentar consulta";
    exit();
}

while($mostrar = mysqli_fetch_array($resultado)){
?>

    <input type="text" class="lista" name="idt" value="<?php echo $mostrar['id_ticket']; ?>" readonly>
    <input type="text" class="lista" name="nombre" value="<?php echo $mostrar['nombre']; ?>">
    <input type="text" class="lista" name="cantidad" value="<?php echo $mostrar['cantidad']; ?>">
    <input type="text" class="lista" name="descuento" value="<?php echo $mostrar['descuento']; ?>">
    <input type="text" class="lista" name="total" value="<?php echo $mostrar['total']; ?>">
    <input type="submit" class="lista" value="Actualizar">
<?php
}
?>
</form>

<?php
mysqli_free_result($resultado);
mysqli_close($enlace);
?>
</body>
</html>
