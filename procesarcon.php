<?php 
include 'conexion.php';

 $id = $_POST['id'];
     $nombre = $_POST['nombre'];
     $genero = $_POST['genero'];
     $telefono = $_POST['telefono'];
     $correo = $_POST['correo'];
     $edad = $_POST['edad'];
     $comentario = $_POST['comentario'];

     $actualizar= "UPDATE contacto set nombre='$nombre',genero='$genero',telefono='$telefono',correo='$correo',edad='$edad',comentario='$comentario' where nombre='$id'";
     $ejecutarinsertar =mysqli_query($enlace,$actualizar);

    if ($ejecutarinsertar) {
    header("Location: /PROYECTO_35_37_42_46_54/e_contacto.php");
    exit(); 
} else {
    echo "<script>
        alert('No se pudo eliminar los datos');
        window.history.go(-1);
    </script>";
}
 
 mysqli_close($enlace);
?>