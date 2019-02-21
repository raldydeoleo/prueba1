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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.bootstrap-growl.min">
<link rel="stylesheet" type="text/css" href="css/notifIt.css">

<script>jQuery.noConflict();</script>
<script type="text/javascript">
</script>
<script> 
 $(document).ready(function(){
          enviarDatos();
         // leer();
      });

function enviarDatos(){
       
       // alert('click en el boton ok!');

         $("#frm").on('submit', function(e){
          e.preventDefault();
                   
           var url = "prueba.php";
           var frm = $(this).serializeArray();
           console.log(frm);
           $.ajax({
                type:'post',
                url:url,
                data: frm,
                dataType: 'text',
                success:function(datos){
                  $("#mostrardatos").html(datos);
                }
           }).done(function(info){
             //respuestas del servidor
             console.log('success');

           }).fail(function(){
            console.log('Error');

           }).always(function(){
             console.log('complete');
           });
           
         });

      }

  function leer(){

    $("#enviar").click(function(){
        alert('click en el boton ok!');
          var nombre_usuario = $("#nombre").val();
          var apellido_usuario = $("#apellido").val();
          var email_usuario = $("#email").val();

          $.get("prueba.php",{nombre:nombre_usuario, 
                              apellido:apellido_usuario, 
                              email:email_usuario},
                              function(datos){
                                $("#resultado").html(datos);
                              });
      });       
  }

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


        <div class="container">
       
        
        </div>

    <form method="post" id="frm" action="prueba.php">

        <div class="form-group">

           
        <div class="col-md-3">
            <label> Nombre </label>
            <input type="text" name="nombre" class="form-control" id="nombre"  required="required" value="" />
        </div>

        <div class="col-md-3">
            <label> Apellido </label>
            <input type="text" name="apellido" id="apellido" class="form-control"  required="required" value="" />
        </div>

            <div class="col-md-6">
                <label> Email </label>
                <input type="text" name="email" id="email" class="form-control" required="required" value="" />
            </div>

            <div class="col-md-2">
            <input type="submit" id="enviar"  name="enviar" class="btn btn-primary form-control">
            </div>
            
        </div>

     

      </form>
</div>

<div id="resultado"></div>


</div>
</div>





                            
</body>
</html>