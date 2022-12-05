<?php

if(!empty($_POST))
{
    $id_cliente = $_POST ['id_cliente'];
    $query_delete = mysqli_query ($conexion, "DELETE FROM cliente WHERE id_cliente= $id_cliente");

    if($query_delete){
        header ("location: listaCliente.php");
    }else{
        echo "error al eliminar";
    }
}

if(empty($_REQUEST['id']))
{
    header:("location: lista_usuarios.php");
}else{
$id_cliente = $_REQUEST ['id'];


$query = mysqli($conexion, "SELECT c.id_cliente FROM cliente c
WHERE c.id_cliente = $id_cliente ;")

$result = mysqli_num_rows($query);

if($result > 0){
    while ($data = mysqli_fetch_array($query)){
    $nombre = $data['nombreCliente'];    
}
}else {
    header("location: lista_usuarios.php");
}
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="data_delete">
        <h2>¿estas seguro de eliminar el siguiente registro?</h2>
        <p>nombre: <span><php echo $nombre; ?></span></p>

        <form method="post" action="">
            <input type="hidden" name="id_cliente" value="<?php echo $id_cliente; ?>">
            <a href="lista_cliente" class="btn_cancel"> cancelar</a>
            <a type="submit" value="aceptar" class="btn_ok"> aceptar</a>


        </form>
    </div>
</body>
</html>