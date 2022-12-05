
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>recursos humanos</title>
    <link rel="stylesheet" href="css/style.css">

    <script src="js/funciones.js"></script>    
</head>
<body>
    <header id="cabecera">
        <div id="logoTecnm">
            <img src="img/LOGO_ITVO.png" alt="Logo TecNM";>
                    </div>
        <div id="nombreEmpresa">
            <h3>RECURSOS HUMANOS     </h3>
            
        </div>
        <!--<div id="logoITVO">
           <img src="img/LOGO_ITVO.png" alt="Logo ITVO" >-->
          
           <div id="fecha">
                    <strong> 
                    <span > <img class="photouser" src="img/user.png" alt="Usuario"></span>    
                        <?php 
                        
                    echo '<br>';
                    setlocale(LC_TIME,"es_MX");
                    date_default_timezone_set("America/Mexico_City");
                    echo strftime("%A %d de %B %Y");
                    echo date(' h:i A');
                    ?></strong>
       
                    </div>  
        </div>
    </header>   

    <nav id="menu">        
        <ul class="menu-horizontal">
            <li><a id="a"href="#" onclick="fnAjax('hom.html');" >Inicio</a></li>

            <li><a id="a" href="#";>personal</a>
                <ul class="menu-vertical">
                    <li><a href="#"  onclick="fnAjax('InterPersonal.php');">Agregar</a></li>
                    <li><a href="#" onclick="fnAjax('personal/lista_personal.php');">lista</a></li>
                </ul>
            </li>

            <li><a id="a" href="#" >clientes</a>
                <ul class="menu-vertical">
                    <li><a href="#" onclick="fnAjax('InterCliente.html');">Agregar</a></li>
                    <li><a href="#" onclick="fnAjax('lista_cliente.php');">lista</a></li>
                </ul> 
            </li>

            
            <li> <a id="close" href="salir.php"><img class="close" src="img/salir.png" alt="Salir del sistema"  width="15px" height="15px"
            title="Salir" ;
></a></li>
        </ul>
        </nav>
     <main id="contenedorPrincipal">
        <section id="ladoIzquierdo">
        <img id="home" src="img/recurosH.jpg" alt="" width="600px" height="400px" > 

        </section>

</body>
</html>
