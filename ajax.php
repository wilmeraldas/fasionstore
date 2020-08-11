
<?php
//print_r($_POST);//exit;
require_once "conexion.php";
$c= new conectar(); //now assig la variable a la clase conectar
            $conexion=$c->conexion(); //call al metodo conexion
         //print_r($_POST['action']);   
if(!empty($_POST))
{
    if($_POST['action']=='addProduct'){

        if(!empty($_POST['producto_id'])||!empty($_POST['nombreproducto'])||!empty($_POST['precioproducto'])||!empty($_POST['stockproducto'])||!empty($_POST['tipoproducto'])||!empty($_POST['descripcionproducto']))
        {
            $idp=$_POST['producto_id'];
            $nombrep=$_POST['nombreproducto'];
            $preciop=$_POST['precioproducto'];
            $tipop=$_POST['tipoproducto'];
            $stockp=$_POST['stockproducto'];
            $descripcionp=$_POST['descripcionproducto'];
            $sql = "UPDATE producto SET nombre='$nombrep',descripcion='$descripcionp',tipo='$tipop',precio='$preciop',stock='$stockp' WHERE idproducto = '$idp'";
			if (mysqli_query($conexion, $sql))  //mandamos la conexion y el query
          {
            
              print_r('funciona');

              echo ' <script type="text/javascript"> 
              alertify.notify("success","success",10, null);
          </script>';
         
          }
          else{

            print_r('No vale');
          }

        }
    }

    if($_POST['action']='infoProducto'){
            $producto_id=$_POST['producto'];
             //$query=mysqli_query($conexion,"");
            $sql="Select idproducto, nombre, descripcion, precio, stock,tipo from producto where idproducto='$producto_id'";
            $query=mysqli_query($conexion,$sql);
            mysqli_close($conexion);
            $result=mysqli_num_rows($query);
            if($result>0)
            {

                $data=mysqli_fetch_assoc($query);
                echo json_encode($data,JSON_UNESCAPED_UNICODE);
                exit;

            }
            echo 'error';
            exit;
    }
        
   

}
exit;

?>
