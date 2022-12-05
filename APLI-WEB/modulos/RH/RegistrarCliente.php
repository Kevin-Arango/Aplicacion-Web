<?php
include("conexion/cn.php");

$nombreCliente=$_POST["nombreCliente"];
$apellidoPaterno=$_POST["apellidoPaterno"];
$apellidoMaterno=$_POST["apellidoMaterno"];
$direccion=$_POST["direccion"];
$telefonoCliente=$_POST["telefonoCliente"];
$correo=$_POST["correo"];




$Insertar= "INSERT INTO cliente(nombreCliente, apellidoPaterno,apellidoMaterno, direccion,telefonoCliente,correo) 
                    values ('$nombreCliente','$apellidoPaterno','$apellidoMaterno','$direccion','$telefonoCliente','$correo')";
$resultado=mysqli_query($conexion,$Insertar);
if($resultado){
    echo'<script>
        alert("Registro Exitoso");
        window.history.go(-1);
        </script>';
    exit;
}


mysqli_close($conexion);

?>
