<?php 
/*$nombre = $_POST['nombre'];   //por aqui recibe por post lo que viene de registro.php
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
*/
?>
<?php  
$idm=$_POST['idm'];
$nombre = $_POST['nombre'];
$des = $_POST['descripcion'];
$tipo = $_POST['tipo'];
$precio = $_POST['precio'];
$stock = $_POST['stock'];

        require_once "conexion.php";
$c= new conectar(); //now assig la variable a la clase conectar
			$conexion=$c->conexion(); //call al metodo conexion
			$sql = "UPDATE producto SET nombre='$nombre',descripcion='$des',tipo='$tipo',precio='$precio',stock='$stock' WHERE idproducto = '$idm'";
			if (mysqli_query($conexion, $sql)) { //mandamos la conexion y el query
      echo "Modificado"; //imprimimos in to the screan con echo
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexion); //aqui fallamos la conexion
}

header("location:VMostrarProductos.php");
?>