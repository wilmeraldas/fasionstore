<?php 
//echo $variable;
	require_once "conexion.php";
	$c= new conectar();
    $conexion=$c->conexion();

	?>
<script src="js/jquery.js"></script>

<script>
$(document).ready(function() {
    $('#login-content').hide();
    $('#login').click(function() {
        $('#login-content').slideToggle();
    })
})
</script>
<script>
$(document).ready(function() {
    $('#carrito-content').hide();
    $('#carrito').click(function() {
        $('#carrito-content').slideToggle();
    })
})
</script>
<!-- TOP HEADER -->
<div id="top-header">
    <div class="container">
        <ul class="header-links pull-left">
        <?php if(isset($_SESSION['correo'])&&$_SESSION['correo']=='admin@hotmail.com'){?>
            <li><a href="VN_Producto.php"><i class="fa fa-upload"></i> Ingreso de Productos</a></li>
            <li><a href="ventas.php"><i class="fa fa-star"></i> Reservas</a></li>
            <?php }?>
            <li><a href="VMostrarProductos.php"><i class="fa fa-eye"></i>Ver Productos</a></li>
            <li><a href=""><i class="fa fa-map-marker"></i> AMBATO-ECUADOR</a></li>
        </ul>

        <ul class="header-links pull-right">
            <!--<li><a href="#"><i class="fa fa-dollar"></i> USD</a></li>
						<li><a href="#"><i class="fa fa-user-o"></i> My Account</a>-->

            <div class="slide-text">
                <?php if(isset($_SESSION['correo'])){?>
                <label class="fa fa-user" style="color: lime"></label><label class="lbl">&nbsp &nbsp Bienvenido 
                            <?php echo $_SESSION['correo']?></label>
                                <?php }else{?>
                                <a href="#" class='btnlog' id='login' style="color:white">INICIAR SESION</a>
                                <!--this is a form to user and password, this part was made whit jquery o Jquery como quieras-->
                                <div id="login-content">
                                    <form method="POST" action="login.php">
                                        <!--Aqui pasamos por post a login.php, this is not create, esta de crear -->

                                        <input type="text" id="user" name="correo"style=" -webkit-border-radius:25px;" placeholder="Correo">
                                        <input type="password" id="pass" name="password"style=" -webkit-border-radius:25px;" placeholder="Contraseña">
                                        <input type="submit" id="sublogin"style=" -webkit-border-radius:25px;" value="Ingresar">
                                    </form>
                                </div>
            </div>
            <?php }?>
            <?php
                            
                             if(isset($_SESSION['correo']))
                            {
                            	echo ("<li><a href='CerrarSesion.php' class='dropdown'>CERRAR</a></li>");
                            
                            }
                            else 
                            {
                                //echo ("<li><u><a href='perfil.php' class='dropdown'>Perfil</a></u></li>");
                                echo ("<li><a href='registro.php' class='dropdown'>REGISTRESE</a></li>");
                            }
                            ?>
            </li>
        </ul>
    </div>
</div>
<!-- /TOP HEADER -->

<!-- MAIN HEADER -->
<div id="header">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- LOGO -->
            <div class="col-md-3">
                <div class="header-logo">
                    <a href="index.php" class="logo">
                        <img src="./img/logo.png" width="100" alt="">
                    </a>
                </div>
            </div>
            <!-- /LOGO -->

            <!-- SEARCH BAR -->
            <div class="col-md-6">
                <div class="header-search">
                    <form ACTION="BuscarProd.php" method="post" enctype="multipart/form-data">

                        <input class="input" name="busca" placeholder="Buscar Producto" type="text" class="input">
                        <button class="search-btn">Buscar</button>
                    </form>
                </div>
            </div>
            <!-- /SEARCH BAR -->

            <!-- ACCOUNT -->
            <div class="col-md-3 clearfix">
                <div class="header-ctn">
                    <!-- Wishlist -->

                    <!-- /Wishlist -->
					<?php if(isset($_SESSION['correo'])){?>
                    <!-- Cart -->
                    <div class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" id='carrito'>
                            <i class="fa fa-shopping-cart"></i>
                            <span>Carrito</span>

                           
                            <?php 
										$c1= new conectar();
										$conexion1=$c1->conexion();
			$idcli1=$_SESSION['identificador'];
			//$sql="SELECT a.id_actividad,a.nombre,a.descripcion,a.fecha_inicio,a.fecha_fin,ev.nombre as n_evidencia
			//FROM actividad a INNER JOIN evidencia ev ON a.id_evidencia=ev.id_evidencia";
		$sql1="SELECT COUNT(idproducto) from cliente_producto WHERE idcliente='$idcli1'";
		$result1=mysqli_query($conexion1,$sql1);
		while($mostrar1=mysqli_fetch_array($result1)){
			?>

                            <div class="qty"><?php echo $mostrar1[0] ?></div>
                        </a>
                        <?php 
		}
		?>
		
                        <div class="slide-text">
                            <div id="carrito-content">
                                <table>
                                    <tr>
                                        <td style="color: red;"></td>
                                        <td style="color: red;"></td><td style="color: red;"></td>

                                    </tr>



                                    <?php 
			$idcli=$_SESSION['identificador'];
			//$sql="SELECT a.id_actividad,a.nombre,a.descripcion,a.fecha_inicio,a.fecha_fin,ev.nombre as n_evidencia
			//FROM actividad a INNER JOIN evidencia ev ON a.id_evidencia=ev.id_evidencia";
		$sql="SELECT p.nombre,p.precio,cl.idproducto from producto p INNER JOIN cliente_producto cl ON p.idproducto=cl.idproducto WHERE cl.idcliente='$idcli'";
		$result=mysqli_query($conexion,$sql);
		while($mostrar=mysqli_fetch_array($result)){
			?>
                                    <tr style="color:#00FF00">

                                        <td style="color:#00FF00;font-size:10pt;" ><?php echo $mostrar[0] ?></td>
                                        <td style="color:#FF0000;font-size:10pt;">$<?php echo $mostrar[1] ?></td>
                                        <td >
			<a href="QuitaProd.php?id= <?php echo $mostrar[2] ?>" class="btn btn-danger btn-xs" style="font-size: 8pt; height:5%;whidth:5%;">
			<span class="fa fa-trash" ></span>
		</a>
		</td>
                                        <?php 
		}
		?>


                                </table>

                              
                            </div>
							
                        </div>
						
                    </div>
					<?php }?>
                    <!-- /Cart -->

                    <!-- Menu Toogle -->
                    <!--<div class="menu-toggle">-->
                    <!--<a href="#">-->
                    <!--	<i class="fa fa-bars"></i>-->
                    <!--	<span>Menu</span>-->
                    <!--</a>-->
                    <!--</div>-->
                    <!-- /Menu Toogle -->
                    <!--</div> -->
                </div>
                <!-- /ACCOUNT -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
	<!-- /MAIN HEADER -->


	<div class="modal">
	<div class="bodyModal"> 
		<form action="" method="post"name="form_add_product" id="form_add_product" onsubmit="event.preventDefault(); sendDataProduct();">
		<a href="#" class="closeModal" onclick="closeModal();"><i class="fa fa-close"></i></a>	
		<h1> 
				<i class="fa fa-cubes" style="font-size:45pt;"></i><br>
				Modificar Producto
			</h1>
			<h2 class="nameProducto">
                
						</h2>	
<!--<input type="number" name="cantidad" id="txtCantidad" placeholder="Cantidad" required>-->
<br>
<!--<input type="text" name="precio" id="txtPrecio" placeholder="Precio" required>-->
<input type="hidden" name="producto_id" id="producto_id" required>
<label >Nombre</label>
<br>
<input type="text" name="nombreproducto" id="nombreproducto" required>
<br>
<label >Tipo</label>
<br>
<input type="text" name="tipoproducto" id="tipoproducto" required>
<br>
<label >Precio</label>
<br>
<input type="float" name="precioproducto" id="precioproducto" required>
<br>
<label >Stock</label>
<br>
<input type="number" name="stockproducto" id="stockproducto" required>
<br>
<label >Descripcion</label>
<br>
<input type="text" name="descripcionproducto" id="descripcionproducto" required>
<input type="hidden" name="action" value="addProduct" placeholder="Precio" required>
<div class="alert alertAddProduct"></div>
<button type="submit" class="btn_new" onclick="closeModal();">Aceptar</button>

		</form>
    </div>
        
    </div>
