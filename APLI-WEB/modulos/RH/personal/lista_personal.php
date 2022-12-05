
<?php
include "../conexion/cn.php";
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>lista de cliente</title>
    <link rel="stylesheet" href="css/styleu.css">

</head>
<body>
	<section id="container">

		<h1>lista de personal</h1>

	
		<table>
			<tr>	
				<th>RFC</th>
				<th>nombre</th>
                <th>apellido</th>
				<th>telefono</th>
                <th>correo</th>
                <th>fechaIngreso</th>
				<th>estatus</th>



						</tr>			
			<?php

				$query = mysqli_query($conexion,"SELECT * FROM personal");

				$result = mysqli_num_rows($query);

				if($result >0){
					while($data=mysqli_fetch_array($query)) {

				?>	
				<tr>
				<td> <?php echo $data["RFC"];?></td>
				<td><?php echo $data['nombreEmpleado'];?></td>
				<td><?php echo $data['apellidoPaterno'];?></td>
				<td><?php echo $data['telefono'];?></td>
				<td><?php echo $data['correo'];?></td>
				<td><?php echo $data['fechaIngreso'];?></td>
				<td><?php echo $data['estatusPersonal'];?></td>


        <?php
					
				}
			}
		
		?>
			

		</table>
	</section>
</body>
</html>