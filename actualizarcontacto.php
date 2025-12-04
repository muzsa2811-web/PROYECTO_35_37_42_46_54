<?php 
include 'conexion.php';
$id = $_GET['id'];
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TABLA_CONTACTO</title>
	<link rel="stylesheet" href="CSS/tabla_compra.css">
</head>
<link rel="stylesheet" type="text/css" href="CSS/t_contacto.css">
<body>
<form class="contenedor contenedorcon" action="procesarcon.php" method="post">
	<div class="titulo titulocon">COONTACTO  </div>
			<div  class="encabezado">nombre:</div>
			<div  class="encabezado">genero:</div>
			<div class="encabezado">telefono:</div>
			<div class="encabezado">correo:</div>
			<div  class="encabezado">edad:</div>
			<div  class="encabezado">comentario:</div>
		    <div  class="encabezado">operaciones:</div>

		<?php
		$consulta = "SELECT * FROM contacto where nombre = '$id'";
		//ejecutar la consulta
		$resultado = mysqli_query($enlace,$consulta);
		//validar que la consulta este correcta
		if(!$resultado) 
		{
			echo "error al intentar la consulta";
			exit;
		}
		//recorrer mediante un ciclo todos los registros de la tabla
		while ($mostrar =mysqli_fetch_array($resultado)) {
			//la llave del ciclo esta abierta porque se insetara codigo de html,pero se debe de cerrar php
?>        

            <input type="hidden"  class="filas_2" value="<?php echo $mostrar['nombre'];?>" name="id">
			<input type="text" class="filas_2" value="<?php echo $mostrar['nombre'];?>" name="nombre">
			<input type="text" class="filas_2" value="<?php echo $mostrar['genero'];?>" name="genero">
			<input type="text" class="filas_2" value="<?php echo $mostrar['telefono'];?>" name="telefono">
			<input type="text" class="filas_2" value="<?php echo $mostrar['correo'];?>" name="correo">
			<input type="text" class="filas_2" value="<?php echo $mostrar['edad'];?>" name="edad">
			<input type="text" class="filas_2" value="<?php echo $mostrar['comentario'];?>" name="comentario">
			<input type="submit" value="actualizar" class="actualizar">




			
			

<?php 
		} //aqui se cierra la llave del while
 ?>

		
</form>
	<?php //se recomieda liberra la memoria al recorrer la tabla 
	mysqli_free_result($resultado);
	mysqli_close($enlace);


	?>


</body>
</html> 