<?php
require_once "conexion.php";
	$c= new conectar();
	$conn=$c->conexion();
$sql = "SELECT idproducto, imagen, nombre, descripcion FROM producto where tipo='Laptop'";

$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
//echo $resultset;
$image_count = 0;
$button_html = '';
$slider_html = '';
$thumb_html = '';
while( $rows = mysqli_fetch_assoc($resultset)|| $mostrar=mysqli_fetch_array($resultset)){
$active_class = "";
if(!$image_count) {
$active_class = 'active';
$image_count = 1;
}
$image_count++;

$thumb_image = "";
// slider image html
$slider_html.= "<div class='item ".$active_class."' width='200' height: '200'>";
$slider_html.="<img src='vista.php?id= ".$rows['idproducto']."' width='200' height: '200'  >";
//$slider_html.= "<img src='images/".$rows['image']."' alt='1.jpg' class='img-responsive'>";
$slider_html.= "<div class='carousel-caption' width='200' height: '200'></div></div>";
// Thumbnail html
//$thumb_html.= "<li>$thumb_image</li>";
// Button html
$button_html.= "<li data-target='#carousel-example-generic' data-slide-to='".$image_count."' class='".$active_class."'></li>";
}