<?php 
include 'conexion.php';

if(isset($_POST["ENVIAR"])){
    $nombre= $_POST['username'];
    $clave_u  = $_POST['clave'];
    $correo   = $_POST['correo'];

    //verificar si existen los datos
    $validar = "SELECT * FROM user_35_37_42_46_54 WHERE user_name= '$nombre' OR clave= '$clave_u' 
    OR correo = '$correo'";
    $resultado = mysqli_query($enlace, $validar);
    if(mysqli_num_rows($resultado) > 0){
        echo "<script>
                alert('El nombre, la clave o el correo ya existen. Intenta con otros datos.');
                history.go(-1); ;
              </script>";
        exit();
    }
    //ingresar
    $insertarDatos = "INSERT INTO user_35_37_42_46_54 VALUES ('','$nombre', '$clave_u', '$correo')";

    $ejecutarInsertar = mysqli_query($enlace,$insertarDatos);

    if ($ejecutarInsertar) {
        echo "<script>
                alert('Registro exitoso');
                window.location.href = 'INDEX_35_37_42_46_54.html';
              </script>";
        exit();
    }
}
?>
