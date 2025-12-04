<?php 
include 'conexion.php';
 if (isset($_POST['enviar'])) {
     $nombre = $_POST['nombre'];
     $genero = $_POST['genero'];
     $telefono = $_POST['telefono'];
     $correo = $_POST['correo'];
     $edad = $_POST['edad'];
     $comentario = $_POST['comentario'];

     $insertarDatos = "INSERT INTO contacto (nombre,genero,telefono,correo,edad,comentario) VALUES ('$nombre','$genero','$telefono','$correo','$edad','$comentario')";

     $ejejcutarinsertar = mysqli_query($enlace,$insertarDatos);

     if (!$ejejcutarinsertar) {
     	echo "error al intentar ingresar el registro";
     	exit();
     }
     else{
     	echo "registro insertado correctamente";
     }
  }
  mysqli_close($enlace);
 ?>