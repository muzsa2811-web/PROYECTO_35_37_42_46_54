<?php 
include 'conexion.php';
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
<div class="contenedor">
	<div class="titulo">CONTACTO <a href="e_contacto.php" class="op_editar">Edicion</a> </div>
			<div  class="encabezado">nombre:</div>
			<div  class="encabezado">genero:</div>
			<div class="encabezado">telefono:</div>
			<div class="encabezado">correo:</div>
			<div  class="encabezado">edad:</div>
			<div  class="encabezado">comentario:</div>


		<?php
		$consulta = "SELECT * FROM contacto ";
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

			<div class="filas"><?php echo $mostrar['nombre'];?></div>
			<div class="filas"><?php echo $mostrar['genero'];?></div>
			<div class="filas"><?php echo $mostrar['telefono'];?></div>
			<div class="filas"><?php echo $mostrar['correo'];?></div>
			<div class="filas"><?php echo $mostrar['edad'];?></div>
			<div class="filas"><?php echo $mostrar['comentario'];?></div>



			
			

<?php 
		} //aqui se cierra la llave del while
 ?>

		
</div>
	<?php //se recomieda liberra la memoria al recorrer la tabla 
	mysqli_free_result($resultado);
	mysqli_close($enlace);


	?>


</body>
</html> 