<?php
require_once( "conexion.php" );


?> 

<?php  
session_start();
$idm=$_GET['id'];
$idcl=$_SESSION['identificador'];
echo $idm;
echo $idcl;
        require_once "conexion.php";
$c= new conectar(); //now assig la variable a la clase conectar
			$conexion=$c->conexion(); //call al metodo conexion
            $sql = "INSERT INTO cliente_producto(idcliente, idproducto) VALUES ('$idcl', '$idm')";
            echo $sql;
			if (mysqli_query($conexion, $sql)) { //mandamos la conexion y el query
      echo "Modificado"; //imprimimos in to the screan con echo
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexion); //aqui fallamos la conexion
}

header("location:VMostrarProductos.php");
?>
