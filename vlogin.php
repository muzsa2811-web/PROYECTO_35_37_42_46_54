<?php
include 'conexion.php';
$user=$_POST['username'];
$pass=$_POST['clave'];
//generar la consulta en sql para buscar el usuario y contraseña en la tabla
$consulta="SELECT * FROM user_35_37_42_46_54 WHERE user_name='$user' AND clave='$pass'";
//ejecutar la consulta
$ejecuta=mysqli_query($enlace,$consulta);
if(!$ejecuta){
    echo"error de consulta";
    die();
}
else{
    //usar una variable para contar cuantos registros cumplen con el where()
    $fila=mysqli_num_rows($ejecuta);
    if($fila >0){
        //si existe el usuario y contraseña
        session_start();
        //definir la variable de sesion para el usuario
        $_SESSION['user']=$user;
        //enlazar el programa o pagina de inicio de bienvenia 
        header("Location:INDEX_35_37_42_46_54.html");
        exit();

        
    }
    else{
    echo "<script>
            alert('Error en usuario o contraseña, verifica');
            window.location.href='iniciosesion.php';
          </script>";
    session_destroy();
    exit();
}

}
//liberar memoria y cerrar la base
mysqli_free_result($ejecuta);
mysqli_close($enlace);
?>