<?php
include 'conexion.php';

if(isset($_POST["ENVIAR"])){
    $nombre = $_POST['nombre'];
    $kilos  = $_POST['kilos'];
    $cliente = $_POST['cliente']; 
    $precio = 45;
    if($cliente == "si"){
        $descuento = $kilos * $precio * 0.10;  
    } else {
        $descuento = 0;
    }

    $total = ($kilos * $precio) - $descuento;

    $insertarDatos = "INSERT INTO calculos (nombre, cantidad, descuento, total)
                      VALUES ('$nombre', '$kilos', '$descuento', '$total')";

    $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);

     if(!$ejecutarInsertar){
        echo "error al intentar ingresar registro";
        exit();
    }
    {
        echo "registro correcto";
    }
}
mysqli_close($enlace);


?>
