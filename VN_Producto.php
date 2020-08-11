<?php include("conexion.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>CompuRio Ventas</title>
        <link rel="shortcut icon" href="img/logo.png"> 
		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

		<!-- nouislider -->
		
		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		
			<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
<link href="css/style.css" rel="stylesheet">

<style>
	.lbl{
color: #00FF00;
    }
    
   input{

       
    }
    select{
        height: 5vh;
        -webkit-border-radius:25px;
        width: 60%;

    }

    
</style>
        
    </head>
    <header>

<!-- TOP HEADER -->


<?php

require_once( "Header.php" );

//echo $_SESSION['persona'];
?>
                
<!-- /TOP HEADER -->


</header>
<body background="./img/fondo2.jpg" >
<body style="background-size: cover ; ">
    <section style="justify-content: center; display:flex; align-items: center; ">
        <div style="align-items: center; border:10px; justify-content: center;width:50%;height:50%;text-align:center; ">   
                            <h1 style="color: #720e0e;
text-transform: uppercase; ">Nuevo Producto</h1>
                            <p>Por favor ingresa el producto</p>
                                             
       <FORM ACTION="NuevoProducto.php" method="post"enctype="multipart/form-data" id="frm" style="text-align:center;justify-content: center; display:list-item;" >
           
           <br><input type="text" name="nombre" placeholder="Nombre" style=" height: 5vh;-webkit-border-radius:25px;width: 60%;" required>
           <br>
           <br>
           <input type="text" name="descripcion" placeholder="Descripcion"style=" height: 5vh;-webkit-border-radius:25px;width: 60%;" required>
           <br>
           <br>
           <select name="tipo" id="tipo" placeholder="Tipo" style=" height: 5vh;-webkit-border-radius:25px;width: 60%;" required >
  <option value="">Tipo</option>
  <option value="PC">PC</option>
  <option value="Laptop">Laptop</option>
  <option value="Impresora">Impresora</option>
  <option value="Celular">Celular</option>
  <option value="Otro">Otro</option>
</select>
<br>
<br>
           <input type="float" name="precio" placeholder="Precio" style=" height: 5vh;-webkit-border-radius:25px;width: 60%;" required>   
           <br>
           <br>
           <input type="number" name="stock" placeholder="Stock" style=" height: 5vh;-webkit-border-radius:25px;width: 60%;"required>  
           <br>
           <br>
           <input type="file" name="image" placeholder="Image" style=" height: 5vh;-webkit-border-radius:25px;width: 60%;" required > 
           <br>    
           <br>   
           <input type="submit" name="submit" value="Aceptar" class="btn btn-success btn-lg">
        
      </FORM>
    <hr>
                               <!--<a href="index.php" class="btn btn-error">REGISTRARSE</a>-->
                              
                       
        </div>
    </section>
    		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
		<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
		<script src="js/carousel-slider.js"></script>
</body>
</html>