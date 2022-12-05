<?php
  $host='localhost';
  $user='root';
  $password='';
  $db='sopa1';

  $conection=@mysqli_connect($host,$user,$password,$db);
  if(!$conection){
    echo "Error al conectar con la base de datos";

  }else{
echo "Conexion Exitosa";
  }

  


  ?>