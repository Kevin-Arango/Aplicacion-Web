<?php
$conexion= new mysqli("localhost","root","","sopa1");
$query = $conexion -> query ("SELECT * FROM nivel_estudios");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>INGRESAR empleado</title>
</head>
<body>

    
    <form class="form" action="RegistraPersona.php" id="tabla" method="post">
      
        <h2>Registrar Personal</h2> 
        <!-- CAMPOS A RELLENAR -->
     
        <strong><label> RFC:</label>
        <input type="text" name="RFC" placeholder="Ingresar RFC" required />
        </br> <br>
        <label class="sopa">Nivel de estudios: </label>
        <select name ="nivel">
            <?php
        
              while ($valores = mysqli_fetch_array($query))
               {
                ?>
                <option value="<?php echo $valores['id_nivelEstudios']?>"> <?php echo $valores['nivel']?> </option>
                <?php
              }
              ?>
         </select>
        </br> 
       
            <label>area:</label> 
            <input type="text" name="area" placeholder="Area de servicio" required />    
        </br> <br>
        <label>nombre Empleado:</label> 
            <input type="text" name="nombreEmpleado" placeholder="Nombre" required />    
        </br> <br>
        <label>Apellido Paterno:</label> 
            <input type="text" name="apellidoPaterno" placeholder="Apellido Paterno" required />    
        </br> <br>
        <label>Apellido Materno:</label> 
            <input type="text" name="apellidoMaterno" placeholder="Apellido Materno" required />    
        </br> <br>
 
        <label>Telefono:</label> 
            <input type="text" name="telefono" placeholder="Telefono" required />    
        </br> <br>
        <label>Correo:</label> 
            <input type="text" name="correo" placeholder="Correo" required />    
        </br> <br>
        <label>tipoSangre:</label> 
            <input type="text" name="tipoSangre" placeholder="Tipo Sangre" required />    
        </br> <br>
        <label>Fecha de ingreso:</label> 
            <input type="date" value="2022-11-27" min="2022-01-01" max="2023-05-05" name="fecha"required />    
        </br> <br>
        <label>estatus:</label> 
            <input type="text" name="estatus" placeholder="Estado del empleado" required />    
        </br> <br>
        <button type="submit" > INGRESAR </button>
        </strong></form></br>
    </form>


</body>
</html>