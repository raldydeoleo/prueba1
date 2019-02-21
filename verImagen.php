

<?php  
// require_once 'verImagen.php'; 
?> 
<!--img src="verImagen.php?id=1" alt="Img" / --> 
<?php

$link = mysql_connect("localhost", "root", "") or die ("ERROR AL CONECTAR"); 
mysql_select_db("db_uasd");
$sql= "SELECT imagen, tipo_imagen FROM imagenes";
$result= mysql_query($sql, $link);
$row= mysql_fetch_array($result);
 
 
  //ahora colocamos la cabeceras correcta segun el tipo de imagen
  header("Content-type: ".$row['tipo_imagen']."");
 
  echo ($row['imagen']);
?>