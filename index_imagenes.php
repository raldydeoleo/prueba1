<!DOCTYPE html>
<html lang="en">
<html>
<head>
  <meta charset='utf-8'>
  <title>Prueba</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>

<script type="text/javascript" src="js/Push.min.js">

<script>jQuery.noConflict();</script>
<script type="text/javascript">

</script>
</head>
<body>

<h1>Bienvenidos</h1>

<div class="col-md-12">
    <p></p>
</div>
<div class="col-md-8">
    <div class="panel panel-primary">
 
       
        <h5 class="panel-title"> Registro de usuarios </h1>
    

        <div class="panel-body" >


    <form action="almacenar.php" method="POST" enctype="multipart/form-data">
    <label for="imagen">Imagen:</label>
    <input type="file" name="imagen" id="imagen" />
    <input type="submit" name="subir" value="Subir Imagen"/>
</form>

<?php
//require("verImagen.php");

$link = mysql_connect("localhost", "root", "") or die ("ERROR AL CONECTAR"); 
mysql_select_db("db_uasd");
$result = mysql_query("SELECT imagen FROM imagenes WHERE imagen_id=1");
$result_array = mysql_fetch_array($result);
header("Content-Type: image/jpg");
echo $result_array[0];


?>


</div>

</div>
</div>




                            
</body>
</html>