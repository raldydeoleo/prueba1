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


$(function() {

    $("#klik").click(function{
                $.bootstrapGrowl("This is a test.");
            });
                $.bootstrapGrowl("This is a test.");
                
                setTimeout(function() {
                    $.bootstrapGrowl("This is another test.", { type: 'success' });
                }, 1000);
                
                setTimeout(function() {
                    $.bootstrapGrowl("Danger, Danger!", {
                        type: 'danger',
                        align: 'center',
                        width: 'auto',
                        allow_dismiss: false
                    });
                }, 2000);
                
                setTimeout(function() {
                    $.bootstrapGrowl("Danger, Danger!", {
                        type: 'info',
                        align: 'left',
                        stackup_spacing: 30
                    });
                }, 3000);

               
            });

           

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
        
        <button id="klik">Click here</button>
        
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

<div id="mostrardatos"></div>


</div>
</div>





                            
</body>
</html>