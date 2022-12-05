
<?php
include "conexion/cn.php";
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>lista de cliente</title>
    <link rel="stylesheet" href="css/styleu.css">

</head>
<body>
	<section id="container">

		<h1>lista de clientes</h1>

		<table>
			<tr>	
				<th>nombre</th>
				<th>apellido</th>
                <th>direccion</th>
				<th>telefono</th>
				<th>correo</th>
						</tr>			
			<?php

				$query = mysqli_query($conexion,"SELECT * FROM cliente");

				$result = mysqli_num_rows($query);

				if($result >0){
					while($data=mysqli_fetch_array($query)) {

				?>	
				<tr>
¡				<td><?php echo $data["nombreCliente"];?></td>
				<td><?php echo $data["apellidoPaterno"];?></td>
				<td><?php echo $data['direccion'];?></td>
				<td><?php echo $data['telefonoCliente'];?></td>
				<td><?php echo $data['correo'];?></td>

			</tr>

        <?php
					
				}
			}
		
		?>
			

		</table>
	</section>
</body>
</html>