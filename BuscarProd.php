

<?php 
session_start();
$busca = $_POST['busca'];


//echo $variable;
	require_once "conexion.php";
	$c= new conectar();
	$conexion=$c->conexion();

	?>
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
</style>
	</head>
	<header>
	<?php

require_once( "Header.php" );

//echo $_SESSION['persona'];
?>
                
<!-- /TOP HEADER -->
	</header>
	<body background="./img/fondo2.jpg" >
	<body>

	<table class=" table-hover " style="text-align: center; border: none; solid #000000; font-family: fantasy; font-size:25; " WIDTH="100%"  >
		
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
				$sql = "SELECT * FROM producto WHERE tipo LIKE '$busca%'";
		$result=mysqli_query($conexion,$sql);
		while($mostrar=mysqli_fetch_array($result)){
			?>
			<tr>
			<td><img src="vista.php?id= <?php echo $mostrar[0] ?>" width="250" height="300" /></td>
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
<a href="index.php"><i class="fa fa-map-marker"></i> Pagina Principal</a></li>
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




