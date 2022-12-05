<?php

  require_once "Conexion/conexion.php";

if(!empty($_POST))
{
if(empty($_POST['usuario']||empty($_POST['contraseña'])))
{
    $alert='Ingrese su usuario y contrseña';

}else{
    require_once "Conexion/conexion.php";
    $user=mysqli_real_escape_string ($conection,$_POST['usuario']);
    $pass=md5(mysqli_real_escape_string ($conection,$_POST['contraseña']));

    
    $query=mysqli_query($conection, "SELECT*FROM usuarios WHERE id_usuario= '$user' AND contraseña='$pass'");
    $result=mysqli_num_rows($query);
    if($result > 0)
    {
        $data=mysqli_fetch_array($query);
        $_SESSION['active']==true;
        $_SESSION['id_usuario']=$data['id_usuario'];
        $_SESSION['RFC']=$data['RFC'];
        $_SESSION['id_tipoUsuario']=$data[2];
      switch( $_SESSION['id_tipoUsuario']){
        case 1:
            header('location: modulos/RH/AmenuPrincipal.php');
            break;
     
      }
       

    }else{
        $alert='El usuario o la clave son incorrectas';
    }
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
          <!-- Tabs Titles -->
          <h2 class="active" href="#"> Ingresar </h2>
          <a class="underlineHover" href="#">INVITADO</a>

      
          <!-- Icon -->
          <div class="fadeIn first">
            <img src="img/LOGO_ITVO.png"  alt="User Icon" class="imagen"/>
          </div>
      
          <!-- Login Form -->
          <form acction="" method="post">
            <input type="text" id="login" class="fadeIn second" name="usuario" placeholder="Usuario">
            <input type="password" id="password" class="fadeIn third" name="contraseña" placeholder="contraseña"><br>
            <input  type="submit" class="fadeIn fourth" value="Iniciar Sesion">
          </form>
      
          <!-- Remind Passowrd -->
          <div id="formFooter">
            <a class="underlineHover" href="#">Olvidaste tu contraseña?</a>
          </div>
      
        </div>
      </div>
    
</body>
</html>