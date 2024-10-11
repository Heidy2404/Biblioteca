<!-- <?php
include "modelo/connection.php";
$id= $_GET["idM"];
$sql=$conexion->query("select * from autores where id=$id ")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Edicion de autores</title>

</head>
<body>
    
<div class="container-fluid row">
<form class = "col-4 p-3 m-auto" method="POST">
<h2 class = "text-center text-secondary">Edicion de autor</h2>
      <input type="hidden" name="id" value="<?=$_GET["idM"]?>" >

      <?php 
      include "controladores/registroEditado.php";
        while ($datos=  $sql->fetch_object()) {?>
        

   
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">nombre del autor</label>
    <input type="text" class="form-control" name = "nombreau" value = "<?=$datos-> nombre?>">
  </div>
 
  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">fecha de nacimiento</label>
    <input type="date" class="form-control" name="fecha_nacimiento" value = "<?=$datos->fecha_nacimiento?>">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">nacionalidad</label>
    <input type="text" class="form-control" name= "nacionalidad"  value = "<?=$datos->nacionalidad ?>">
  </div>

  <button type="submit" class="btn btn-primary" name = "registro" value= "ok">Registrar</button>
</form>

<?php
        }

    ?>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html> -->