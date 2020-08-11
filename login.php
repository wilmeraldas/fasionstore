<?php 
$correo = $_POST['correo'];   
$contrasenia= $_POST['password'];  

require_once "conexion.php";
            $c= new conectar();
            $conexion=$c->conexion();
//$sql = "INSERT INTO cliente (nombre, contrasenia, correo, direccion) VALUES ('$nombre', '$contras', '$correo', '$direccion')"; 
$sql = "SELECT nombre from cliente where correo='$correo' and contrasenia='$contrasenia'";

$result = mysqli_query($conexion,$sql);
            if(mysqli_num_rows($result) > 0){
                session_start();
                $_SESSION["correo"] = "$correo";
                $d= new conectar();
                $conexion1=$d->conexion();
$sql1 = "SELECT idcliente from cliente where correo='$correo' and contrasenia='$contrasenia'";
$result1 = mysqli_query($conexion1,$sql1);
while($mostrar=mysqli_fetch_array($result1)){

$identificador=$mostrar[0];

}
$_SESSION["identificador"] = "$identificador";



            }else{
                 echo "No se encontro el usuario";
            }
//mysqli_close($conexion);
header("location:index.php");
?>
<?php  
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