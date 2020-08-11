<?php 
$nombre = $_POST['nombre'];   //por aqui recibe por post lo que viene de registro.php
$contras= $_POST['contraseña']; 
$correo = $_POST['correo'];   
$direccion = $_POST['direccion'];   

require_once "conexion.php"; //here put the conexion
			$c= new conectar(); //now assig la variable a la clase conectar
			$conexion=$c->conexion(); //call al metodo conexion
$sql = "INSERT INTO cliente (nombre, contrasenia, correo, direccion) VALUES ('$nombre', '$contras', '$correo', '$direccion')"; //this is a query to save all datos in the db
if (mysqli_query($conexion, $sql)) { //mandamos la conexion y el query
      echo "Agregado"; //imprimimos in to the screan con echo
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexion); //aqui fallamos la conexion
}
//mysqli_close($conexion);
header("location:index.php");//regresamos to the firt page
?>  
<?php  
//estas parte hice to show the information of db
/*<table>
	<tr>
		<td>Nombre</td>
		<td>Contraseña</td>
		<td>Correo</td>
		<td>Direccion</td>

	</tr>
<?php 
while($mostrar=mysqli_fetch_array($result)){
		 ?>

	<tr>
		<td><?php echo $mostrar[1] ?></td>
		<td><?php echo $mostrar[2] ?></td>
		<td><?php echo $mostrar[3] ?></td>
		<td><?php echo $mostrar[4] ?></td>

	</tr>
	<?php 
	}
	 ?>
</table>*/
?>