<?php include("conexion.php"); ?>
<!DOCTYPE html>
<html lang="es">
<header>
<?php

require_once( "Header.php" );

?>
</header>
<head>
  <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title>Registro</title>
        <link rel="shortcut icon" href="img/logo.png"> 
        <!-- Google font -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

        <!-- Bootstrap -->
        <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

        <!-- Slick -->
        <link type="text/css" rel="stylesheet" href="css/slick.css"/>
        <link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

        <!-- nouislider -->
        <link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

        <!-- Font Awesome Icon -->
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <!-- Custom stlylesheet -->
        <link type="text/css" rel="stylesheet" href="css/style.css"/>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head><!--/head-->

<body background="./img/fondo2.jpg" style="background-size: cover">

     
                <div class="row">
                    <div class="col-sm-12">
                        <div class="text-center">
                           
                            <h1>REGISTRO NUEVO</h1>
                            <p>Bienvenido <br>Forma parte de nosotros</p>
                            
       <FORM ACTION="NuevoCliente.php" method="post"enctype="multipart/form-data" >
  
           <br><input type="text" name="nombre" placeholder="Ingrese sus nombres" class="input1" required>
           <br>
           <br>
           <input type="password" name="contraseña" placeholder="Ingrese su contraseña" class="input1" required>
           <br>
           <br>
           <input type="email" name="correo" placeholder="Ingrese su correo electrónico" class="input1" required>
           <br>
           <br>
           <input type="text" name="direccion" placeholder="Ingrese la dirrección de su domicilio" class="input1" required>          
           
           <br>
           <br><input type="submit" name="submit" value="Aceptar" class="btn btn-success" style="-webkit-border-radius:25px;">
  
      </FORM>
    <hr>
                               <!--<a href="index.php" class="btn btn-error">REGISTRARSE</a>-->
                              
                        </div>
                    </div>
                </div>

    
</body>
</html>