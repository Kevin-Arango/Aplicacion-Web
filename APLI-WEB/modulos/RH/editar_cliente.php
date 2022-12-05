<?php

  require_once "Conexion/cn.php";

if(!empty($_POST)) {
    $alert='';
if(empty($_POST['nombreCliente']) ||empty($_POST['apellidoPaterno']) ||empty($_POST['direccion']) ||empty($_POST['telefonoCliente'])
||empty($_POST['correo']))
{
    $alert='los campos son obligatorios';

}else{

    $nombreCliente=$_POST['nombreCliente'];
    $apellidoPaterno=$_POST['apellidoPaterno'];
    $direccion=$_POST['direccion'];
    $telefono=$_POST['telefonoCliente'];
    $correo=$_POST['correo'];


    require_once "Conexion/cn.php";
    
    $query=mysqli_query($conection, "SELECT*FROM cliente ");
    $result=mysqli_num_rows($query);
    if($result > 0){
        $alert='<p class="msg_error"> el cliente ya existe </p>';
    }else{
        $query_insert = mysqli_query($conexion, "INSERT INTO cliente(nombreCliente, apellidoPaterno,apellidoMaterno, direccion,telefonoCliente,correo) 
        values ('$nombreCliente','$apellidoPaterno','$apellidoMaterno','$direccion','$telefonoCliente','$correo')");
        if($query_insert){
            $alert='<p class="msg_save"> cliente creado correctamente</p>';
        }else{
            $alert='<p class="msg_error"> Erroro al crear el cliente </p>';

        }
    }
}
}

//mostrar datos

if(emty($GET['id']))
{
    header('location:lista_cliente.php');
}

$id_clien= $_GET['id'];

$sql= mysqli_query($conexion, "SELECT c.nombre, c.apellidoPaterno, c.apellidoMaterno, c.direccion, c.telefono,
 c.correo, ("c.id_cliente") as id_cliente 
 FROM usuario u  
 WHERE id_usuario=2 ") ;

 
?>

<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>actualizar cliente</title>
</head>

<body>
    
    <form action="RegistrarCliente.php" id="tabla" method="post" >
        <link rel="stylesheet" href="css/style.css">
        
        <h2>actualizar Cliente</h2> 

    </select>
        <br>
        <strong><label>Nombre:</label>
            <input type="text" name="nombreCliente" placeholder="Nombre(s)" required />
        </br> <br>
            <label>Apellido Paterno:</label> 
            <input type="text" name="apellidoPaterno" placeholder="Primer Apellido" required />
        </br> <br>
            <label>Apellido Materno:</label> 
            <input type="text" name="apellidoMaterno" placeholder="Segundo Apellido" required />    
        </br> <br>
            <label>Direccion:</label>
            <input type="text" name="direccion" placeholder="Calle, numero" required />  
        </br> <br>    
            <label>Telefono:</label>
            <input type="text" name="telefonoCliente" placeholder="Fijo, Celular" required />
    
        </br> <br>
            <label>Correo:</label></strong>
            <input type="text" name="correo" placeholder="Correo Electronico" required />
        </br><br>

        <button> actualizar Usuario </button>

    </form>

</body>

</html>