<?php
 include 'conexion.php';

 $id = $_GET['id'];
 $eliminar = "DELETE FROM contacto WHERE nombre = '$id'";
  $ejecutarinsertar =mysqli_query($enlace,$eliminar);

if ($ejecutarinsertar) {
	header ("Location: e_contacto.php");
}
else{
 		echo "no se pudo eliminar";
 	}