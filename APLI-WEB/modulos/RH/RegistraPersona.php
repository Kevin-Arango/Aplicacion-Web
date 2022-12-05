<?php

    include("conexion/cn.php");

$RFC=$_POST["RFC"];
$id_nivelEstudios=$_POST["nivel"];
$area=$_POST["area"];
$nombreEmpleado=$_POST["nombreEmpleado"];
$apellidoPaterno=$_POST["apellidoPaterno"];
$apellidoMaterno=$_POST["apellidoMaterno"];
$telefono=$_POST["telefono"];
$correo=$_POST["correo"];
$tipoSangre=$_POST["tipoSangre"];
$fechaIngreso=$_POST["fecha"];
$estatusPersonal=$_POST["estatus"];




$Insertar= "INSERT INTO personal(RFC,id_nivelEstudios,area, nombreEmpleado,apellidoPaterno,apellidoMaterno,telefono,correo,tipoSangre,fechaIngreso,estatusPersonal) 
                    values ('$RFC','$id_nivelEstudios','$area','$nombreEmpleado','$apellidoPaterno','$apellidoMaterno','$telefono','$correo','$tipoSangre','$fechaIngreso','$estatusPersonal'
)";
$resultado=mysqli_query($conexion,$Insertar);
if($resultado){
 
    echo'<script>
        alert("Registro Exitoso");
        window.history.go(-1);
        </script>';
}


mysqli_close($conexion);

?>

