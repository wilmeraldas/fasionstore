<?php
require_once( "conexion.php" );
session_start();
include_once("slider.php");

		//echo $_SESSION['persona'];
?>

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
    <link type="text/css" rel="stylesheet" href="css/slick.css" />
    <link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

    <!-- nouislider -->

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom stlylesheet -->

    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
    <link href="css/style.css" rel="stylesheet">

    <style>
    .lbl {
        color: #00FF00;
    }
    td{

font-size: 20pt;

    }
    </style>
    

</head>

<body>
    <!-- HEADER -->
    <header>
        <!-- TOP HEADER -->


        <?php

require_once( "Header.php" );

		//echo $_SESSION['persona'];
?>

        <!-- /TOP HEADER -->


    </header>
    <!-- /HEADER -->

    <body background="./img/fondo2.jpg" style="background-size: cover">
        <!-- NAVIGATION -->
        
        <!-- /NAVIGATION -->

        <!-- SECTION -->
        <div class="section">
        <table class=" table-hover " style="text-align: center; border: none; solid #000000; font-family: fantasy; font-size:25; " WIDTH="100%"  >
		<TR>
            <td style="color: white;">COMPUTADORAS DE ESCRITORIO</td>
        </TR>
		<tr>
		<td style="color: #860B0D;" >Imagen</td>	
			<td style="color: #860B0D; ">Nombre</td>
			<td style="color: #860B0D; ">Descripcion</td>
			<td style="color: #860B0D; ">Tipo</td>
			<td style="color: #860B0D; ">Precio</td>
			<td style="color: #860B0D; ">Stock</td>
			<?php if(isset($_SESSION['correo'])&&$_SESSION['correo']=='admin@hotmail.com'){?>	
			<td style="color: #860B0D; ">Modificar</td>
			<td style="color: #860B0D; ">Eliminar</td>
			<?php } ?>	
			<?php if(isset($_SESSION['correo'])&&$_SESSION['correo']!='admin@hotmail.com'){?>
			<td style="color: #860B0D; ">Comprar</td>	
			<?php } ?>	
		</tr>
		<?php 
				$sql="SELECT * from producto where tipo='PC'";
		$result=mysqli_query($conexion,$sql);
		while($mostrar=mysqli_fetch_array($result)){
			?>
			<tr>
			<td><img src="vista.php?id= <?php echo $mostrar[0] ?>" width="150" height="200" /></td>
				<td><?php echo $mostrar[1] ?></td>
				<td><?php echo $mostrar[2] ?></td>
				<td><?php echo $mostrar[3] ?></td>
				<td>$&nbsp <?php echo $mostrar[4] ?></td>
				<td><?php echo $mostrar[5] ?></td>
				<?php if(isset($_SESSION['correo'])&&$_SESSION['correo']=='admin@hotmail.com'){?>	
				<td >
				
				<!--<a href="VModificaProducto.php?id= <?php //echo $mostrar['idproducto'] ?>" class="btn btn-warning btn-lg"> -->
				<a class="btn btn-warning btn-lg add_product" product="<?php echo $mostrar['idproducto']; ?>"> 
				<span class="fa fa-pencil"></span>
		 </a>
		 </td>
		 	<td >
			<a href="borraproducto.php?id= <?php echo $mostrar['idproducto'] ?>" class="btn btn-danger btn-lg">
			<span class="fa fa-trash-o"></span>
		</a>
		</td>
		<?php } ?>
		<?php if(isset($_SESSION['correo'])&&$_SESSION['correo']!='admin@hotmail.com'){?>
		<td >
		<a href="compraproducto.php?id= <?php echo $mostrar['idproducto'] ?>" class="btn btn-success btn-lg">
		<span class="fa fa-check">Añadir</span>
		</a>
		</td>
		<?php 
		}
		?>
				
					<?php 
		}
		?>
		
	</table>
                   </div>
        <!-- /SECTION -->

        <!-- SECTION -->
        
        <!-- /SECTION -->
        <hR>
        <!-- HOT DEAL SECTION -->
        <div id="hot-deal" class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="hot-deal">
                            <ul class="hot-deal-countdown">
                                <li>
                                    <div>
                                        <h3>02</h3>
                                        <span>Dias</span>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <h3>10</h3>
                                        <span>Horas</span>
                                    </div>
                                </li>
                        
                                    
                            </ul>
                            <h2 class="text-uppercase">SEMANA DE DESCUENTO</h2>
                            <p>Hasta el 50% DE DESCUENTO</p>
                            <a class="primary-btn cta-btn" href="VMostrarProductos.php">Ver Productos</a>
                        </div>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /HOT DEAL SECTION -->

        <hR>

        <!-- SECTION -->
        <div class="section">
           
        <table class=" table-hover " style="text-align: center; border: none; solid #000000; font-family: fantasy; font-size:25; " WIDTH="100%"  >
		<TR>
            <td style="color: white;">LAPTOPS</td>
        </TR>
		<tr>
		<td style="color: #860B0D;" >Imagen</td>	
			<td style="color: #860B0D; ">Nombre</td>
			<td style="color: #860B0D; ">Descripcion</td>
			<td style="color: #860B0D; ">Tipo</td>
			<td style="color: #860B0D; ">Precio</td>
			<td style="color: #860B0D; ">Stock</td>
			<?php if(isset($_SESSION['correo'])&&$_SESSION['correo']=='admin@hotmail.com'){?>	
			<td style="color: #860B0D; ">Modificar</td>
			<td style="color: #860B0D; ">Eliminar</td>
			<?php } ?>	
			<?php if(isset($_SESSION['correo'])&&$_SESSION['correo']!='admin@hotmail.com'){?>
			<td style="color: #860B0D; ">Comprar</td>	
			<?php } ?>	
		</tr>
		<?php 
				$sql="SELECT * from producto where tipo='Laptop'";
		$result=mysqli_query($conexion,$sql);
		while($mostrar=mysqli_fetch_array($result)){
			?>
			<tr>
			<td><img src="vista.php?id= <?php echo $mostrar[0] ?>" width="150" height="200" /></td>
				<td><?php echo $mostrar[1] ?></td>
				<td><?php echo $mostrar[2] ?></td>
				<td><?php echo $mostrar[3] ?></td>
				<td>$&nbsp <?php echo $mostrar[4] ?></td>
				<td><?php echo $mostrar[5] ?></td>
				<?php if(isset($_SESSION['correo'])&&$_SESSION['correo']=='admin@hotmail.com'){?>	
				<td >
				
				<!--<a href="VModificaProducto.php?id= <?php //echo $mostrar['idproducto'] ?>" class="btn btn-warning btn-lg"> -->
				<a class="btn btn-warning btn-lg add_product" product="<?php echo $mostrar['idproducto']; ?>"> 
				<span class="fa fa-pencil"></span>
		 </a>
		 </td>
		 	<td >
			<a href="borraproducto.php?id= <?php echo $mostrar['idproducto'] ?>" class="btn btn-danger btn-lg">
			<span class="fa fa-trash-o"></span>
		</a>
		</td>
		<?php } ?>
		<?php if(isset($_SESSION['correo'])&&$_SESSION['correo']!='admin@hotmail.com'){?>
		<td >
		<a href="compraproducto.php?id= <?php echo $mostrar['idproducto'] ?>" class="btn btn-success btn-lg">
		<span class="fa fa-check">Añadir</span>
		</a>
		</td>
		<?php 
		}
		?>
				
					<?php 
		}
		?>
		
	</table>






        </div>
        <!-- /SECTION -->
        <hR>
         <!-- SECTION -->
         <div class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">

                    <!-- section title -->
                   
                    <!-- /section title -->

                    <!-- Products tab & slick -->
                    <div class="col-md-12" >
                        <div class="row" >
                            <div class="products-tabs" >
                                <!-- tab -->
                                <div id="tab2" class="tab-pane fade in active" >
                                    <div class="products-slick" data-nav="#slick-nav-2">
                                        <!-- product -->
                                        <div class="product">
                                            <div class="product-img">
                                                <img src="./img/product06.png" alt="">
                                                <div class="product-label">
                                                    <span class="sale">-30%</span>
                                                    <span class="new">NEW</span>
                                                </div>
                                            </div>
                                            
                                            
                                        </div>
                                        <!-- /product -->

                                        <!-- product -->
                                        <div class="product">
                                            <div class="product-img">
                                                <img src="./img/product07.png" alt="">
                                                <div class="product-label">
                                                    <span class="new">NEW</span>
                                                </div>
                                            </div>
                                           
                                        </div>
                                        <!-- /product -->

                                        <!-- product -->
                                        <div class="product">
                                            <div class="product-img">
                                                <img src="./img/product08.png" alt="">
                                                <div class="product-label">
                                                    <span class="sale">-30%</span>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <!-- /product -->

                                        <!-- product -->
                                        <div class="product">
                                            <div class="product-img">
                                                <img src="./img/product09.png" alt="">
                                            </div>
                                           
                                        </div>
                                        <!-- /product -->

                                        <!-- product -->
                                        <div class="product">
                                            <div class="product-img">
                                                <img src="./img/product08.png" alt="">
                                            </div>
                                           
                                        </div>
                                        <!-- /product -->
                                    </div>
                                    <div id="slick-nav-2" class="products-slick-nav"></div>
                                </div>
                                <!-- /tab -->
                            </div>
                        </div>
                    </div>
                    <!-- /Products tab & slick -->
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /SECTION -->


        <hR>
        <!-- SECTION -->
        <div class="section">
           
        <table class=" table-hover " style="text-align: center; border: none; solid #000000; font-family: fantasy; font-size:25; " WIDTH="100%"  >
		<TR>
            <td style="color: white;">CELULARES</td>
        </TR>
		<tr>
		<td style="color: #860B0D;" >Imagen</td>	
			<td style="color: #860B0D; ">Nombre</td>
			<td style="color: #860B0D; ">Descripcion</td>
			<td style="color: #860B0D; ">Tipo</td>
			<td style="color: #860B0D; ">Precio</td>
			<td style="color: #860B0D; ">Stock</td>
			<?php if(isset($_SESSION['correo'])&&$_SESSION['correo']=='admin@hotmail.com'){?>	
			<td style="color: #860B0D; ">Modificar</td>
			<td style="color: #860B0D; ">Eliminar</td>
			<?php } ?>	
			<?php if(isset($_SESSION['correo'])&&$_SESSION['correo']!='admin@hotmail.com'){?>
			<td style="color: #860B0D; ">Comprar</td>	
			<?php } ?>	
		</tr>
		<?php 
				$sql="SELECT * from producto where tipo='Celular'";
		$result=mysqli_query($conexion,$sql);
		while($mostrar=mysqli_fetch_array($result)){
			?>
			<tr>
			<td><img src="vista.php?id= <?php echo $mostrar[0] ?>" width="150" height="200" /></td>
				<td><?php echo $mostrar[1] ?></td>
				<td><?php echo $mostrar[2] ?></td>
				<td><?php echo $mostrar[3] ?></td>
				<td>$&nbsp <?php echo $mostrar[4] ?></td>
				<td><?php echo $mostrar[5] ?></td>
				<?php if(isset($_SESSION['correo'])&&$_SESSION['correo']=='admin@hotmail.com'){?>	
				<td >
				
				<!--<a href="VModificaProducto.php?id= <?php //echo $mostrar['idproducto'] ?>" class="btn btn-warning btn-lg"> -->
				<a class="btn btn-warning btn-lg add_product" product="<?php echo $mostrar['idproducto']; ?>"> 
				<span class="fa fa-pencil"></span>
		 </a>
		 </td>
		 	<td >
			<a href="borraproducto.php?id= <?php echo $mostrar['idproducto'] ?>" class="btn btn-danger btn-lg">
			<span class="fa fa-trash-o"></span>
		</a>
		</td>
		<?php } ?>
		<?php if(isset($_SESSION['correo'])&&$_SESSION['correo']!='admin@hotmail.com'){?>
		<td >
		<a href="compraproducto.php?id= <?php echo $mostrar['idproducto'] ?>" class="btn btn-success btn-lg">
		<span class="fa fa-check">Añadir</span>
		</a>
		</td>
		<?php 
		}
		?>
				
					<?php 
		}
		?>
		
	</table>






        </div>
        <!-- /SECTION -->

        <hR>

        <!-- SECTION -->
        <div class="section">
           
        <table class=" table-hover " style="text-align: center; border: none; solid #000000; font-family: fantasy; font-size:25; " WIDTH="100%"  >
		<TR>
            <td style="color: white;">OTROS</td>
        </TR>
		<tr>
		<td style="color: #860B0D;" >Imagen</td>	
			<td style="color: #860B0D; ">Nombre</td>
			<td style="color: #860B0D; ">Descripcion</td>
			<td style="color: #860B0D; ">Tipo</td>
			<td style="color: #860B0D; ">Precio</td>
			<td style="color: #860B0D; ">Stock</td>
			<?php if(isset($_SESSION['correo'])&&$_SESSION['correo']=='admin@hotmail.com'){?>	
			<td style="color: #860B0D; ">Modificar</td>
			<td style="color: #860B0D; ">Eliminar</td>
			<?php } ?>	
			<?php if(isset($_SESSION['correo'])&&$_SESSION['correo']!='admin@hotmail.com'){?>
			<td style="color: #860B0D; ">Comprar</td>	
			<?php } ?>	
		</tr>
		<?php 
				$sql="SELECT * from producto where tipo='Otro'";
		$result=mysqli_query($conexion,$sql);
		while($mostrar=mysqli_fetch_array($result)){
			?>
			<tr>
			<td><img src="vista.php?id= <?php echo $mostrar[0] ?>" width="150" height="200" /></td>
				<td><?php echo $mostrar[1] ?></td>
				<td><?php echo $mostrar[2] ?></td>
				<td><?php echo $mostrar[3] ?></td>
				<td>$&nbsp <?php echo $mostrar[4] ?></td>
				<td><?php echo $mostrar[5] ?></td>
				<?php if(isset($_SESSION['correo'])&&$_SESSION['correo']=='admin@hotmail.com'){?>	
				<td >
				
				<!--<a href="VModificaProducto.php?id= <?php //echo $mostrar['idproducto'] ?>" class="btn btn-warning btn-lg"> -->
				<a class="btn btn-warning btn-lg add_product" product="<?php echo $mostrar['idproducto']; ?>"> 
				<span class="fa fa-pencil"></span>
		 </a>
		 </td>
		 	<td >
			<a href="borraproducto.php?id= <?php echo $mostrar['idproducto'] ?>" class="btn btn-danger btn-lg">
			<span class="fa fa-trash-o"></span>
		</a>
		</td>
		<?php } ?>
		<?php if(isset($_SESSION['correo'])&&$_SESSION['correo']!='admin@hotmail.com'){?>
		<td >
		<a href="compraproducto.php?id= <?php echo $mostrar['idproducto'] ?>" class="btn btn-success btn-lg">
		<span class="fa fa-check">Añadir</span>
		</a>
		</td>
		<?php 
		}
		?>
				
					<?php 
		}
		?>
		
	</table>






        </div>
        <!-- /SECTION -->

        <!-- NEWSLETTER -->
        <div id="newsletter" class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="newsletter">
                            <p>Buscanos en<strong>FACEBOOK</strong></p>
                            
                            <ul class="newsletter-follow">
                                <li>
                                    <a href="https://www.facebook.com/compu.rio.7"><i class="fa fa-facebook" style="background-color:lightblue;"></i></a>
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /NEWSLETTER -->
    </body>
    <!-- FOOTER -->
    <footer id="footer">
        <!-- top footer -->
        <div class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-3 col-xs-8">
                        <div class="footer">
                            <h3 class="footer-title">Acerca de Nosotros</h3>
                            <p>Somos una empresa que se dedica a la venta de tecnologia
                            ,les ofrecemos nuestros producto de calidad y al mejor precio
                            </p>
                            <ul class="footer-links">
                                <li><a href="#"><i class="fa fa-map-marker"></i>Ambato-Ecuador</a></li>
                                <li><a href="#"><i class="fa fa-phone"></i>+593983005547</a></li>
                                <li><a href="#"><i class="fa fa-envelope-o"></i>admin@hotmail.com</a></li>
                            </ul>
                        </div>
                    </div>

          
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /top footer -->

        <!-- bottom footer -->
        <div id="bottom-footer" class="section">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-12 text-center">
                        
                        <span class="copyright">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                            </script> Todos los derechos reservados | CompuRioVentas <i class="fa fa-heart-o"
                                aria-hidden="true"></i> por <a href="https://espoch.edu.ec" target="_blank" style="color: white;">ESPOCH</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </span>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /bottom footer -->
    </footer>
    <!-- /FOOTER -->

    <!-- jQuery Plugins -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/nouislider.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/functions.js"></script>
	<script src="js/jquery.js"></script>
	<script src="js/alertify.min.js"></script>
	<script src="js/alertify.js"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>


</body>

</html>