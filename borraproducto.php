<?php
  
  require_once "conexion.php";
  $c= new conectar(); //now assig la variable a la clase conectar
              $conexion=$c->conexion(); //call al metodo conexion
            $id = $_GET['id'];
            $sql = "DELETE from producto where idproducto = '$id'";
            echo $id;
            echo $sql;
            if (mysqli_query($conexion, $sql)) { //mandamos la conexion y el query
               // echo "Agregado"; //imprimimos in to the screan con echo
            }
            else
            {
                echo "No sirve"; 

            }
            header("Location: VMostrarProductos.php");
?>
