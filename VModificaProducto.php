<?php include("conexion.php"); 
          $idm = $_GET['id'];

          session_start();
         

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
    
    #frm{
width:20;
height:20;

    }
</style>
        <script src="js/jquery.js"></script>
        <script>
        	$(document).ready(function(){
$('#login-content').hide();
$('#login').click(function()
{
	$('#login-content').slideToggle();
})
        	})
         /* $(function()
          {
              $('#login').click(function()
              {
                  $(this).next('#login-content').slideToggle(); 
                  $(this).ToggleClass('active');
              });
          });*/
        </script>
        
    </head>
    <header>

<!-- TOP HEADER -->


<?php
require_once( "Header.php" );
//echo $_SESSION['persona'];
?>



                
<!-- /TOP HEADER -->


</header>
<body>
    <section id="error-page">
        <div >
            
        <div >    
                            <h1>Modificar Producto</h1>
                            <?php
 require_once "conexion.php";
 $c= new conectar();
 $conexion=$c->conexion();

 $sql="SELECT * from producto WHERE idproducto='$idm'";
 $result=mysqli_query($conexion,$sql);
 while($mostrar=mysqli_fetch_array($result)){
     ?>
                                          
                 <FORM ACTION="modificaproducto.php" method="post"enctype="multipart/form-data" id="frm1" >
                     <br><input type="hidden" name= "idm" class="input" required value="<?php echo $idm ?>">
                    <br><input type="text" name="nombre" placeholder="Nombre" class="input" required value="<?php echo $mostrar[1] ?>">
                    <input type="text" name="descripcion" placeholder="Descripcion" class="input" required value="<?php echo $mostrar[2] ?>">
                    <select name="tipo" id="tipo" placeholder="Tipo" class="input" required >
                     <option value="">Tipo</option>
                    <option value="PC">PC</option>
                    <option value="Laptop">Laptop</option>
                    <option value="Impresora">Impresora</option>
                    <option value="Celular">Celular</option>
                    <option value="Otro">Otro</option>
                    </select>
                    <input type="float" name="precio" placeholder="Precio" class="input" required value="<?php echo $mostrar[4] ?>">   
                    <input type="number" name="stock" placeholder="Stock" class="input" required value="<?php echo $mostrar[5] ?>">  
                    <input type="file" name="image" placeholder="Image" class="input" >         
                    <input type="submit" name="submit" value="Aceptar" class="btn btn-error">
        
                </FORM>
                <?php
        }
                ?>
      </div >

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