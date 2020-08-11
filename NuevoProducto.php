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
$nombre = $_POST['nombre'];
$des = $_POST['descripcion'];
$tipo = $_POST['tipo'];
$precio = $_POST['precio'];
$stock = $_POST['stock'];

if(isset($_POST["submit"])){
    $revisar = getimagesize($_FILES["image"]["tmp_name"]);
    if($revisar !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContenido = addslashes(file_get_contents($image));

        require_once "conexion.php";
$c= new conectar(); //now assig la variable a la clase conectar
			$conexion=$c->conexion(); //call al metodo conexion
			$sql = "INSERT into producto (nombre,descripcion,tipo,precio,stock,imagen) VALUES ('$nombre','$des','$tipo','$precio','$stock','$imgContenido')";
			if (mysqli_query($conexion, $sql)) { //mandamos la conexion y el query
      echo "Agregado"; //imprimimos in to the screan con echo
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexion); //aqui fallamos la conexion
}
}else{
        echo "Por favor seleccione imagen a subir.";
    }
}
header("location:VMostrarProductos.php");
?>


<?php
/*
if(isset($_POST["submit"])){
    $revisar = getimagesize($_FILES["image"]["tmp_name"]);
    if($revisar !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContenido = addslashes(file_get_contents($image));
        
        //Credenciales Mysql
        $Host = 'localhost';
        $Username = 'root';
        $Password = '';
        $dbName = 'fashionstore';
        
        //Crear conexion con la abse de datos
        $db = new mysqli($Host, $Username, $Password, $dbName);
        
        // Cerciorar la conexion
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        //Insertar imagen en la base de datos
        $insertar = $db->query("INSERT into producto (imagen) VALUES ('$imgContenido')");
        // COndicional para verificar la subida del fichero
        if($insertar){
            echo "Archivo Subido Correctamente.";
        }else{
            echo "Ha fallado la subida, reintente nuevamente.";
        } 
        // Sie el usuario no selecciona ninguna imagen
    }else{
        echo "Por favor seleccione imagen a subir.";
    }
}*/
?>