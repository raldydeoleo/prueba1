<!DOCTYPE html>
<html lang="en">
<html>
<head>
  <meta charset='utf-8'>
  <title>Prueba con ajax</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<?php

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];


echo "<h2>Datos enviados del formulario </h2> <br> ";
echo "Nombre: $nombre <br>";
echo "Apellido: $apellido <br>";
echo "Email: $email <br>"; 


$mysqli =new mysqli("localhost", "root","", "db_uasd");
if ($mysqli === false){
    die("Error: No se establecio la conexion." . mysqli_connect_error());
}

$sql = "SELECT * FROM usuarios WHERE email_usuario = '$email'";

//$ejecutar = $mysqli_query($sql);

if ($result = $mysqli->query($sql)){
    if ($result->num_rows > 0){
       echo "<b>El usuario ya existe </b>";
       exit();
       
        }else {
            $sql = "INSERT INTO usuarios(nombre_usuario, clave_usuario, email_usuario) VALUES('$nombre', '$apellido', '$email')";
           
            
            //$mysqli->query($sql);
            if ($result = $mysqli->query($sql)){
                echo"<b>Registro guardado con exito</b>"; 
            }else{
                echo "Error al guardar";
            }

    } 
    //$result->close();
    
}

$mysqli->close();


?>

