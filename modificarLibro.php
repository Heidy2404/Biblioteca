<!-- <?php
include "modelo/connection.php";
$id=$_GET["idM"];
$sql=$conexion->query("select * from libros where id=$id ")
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>editar Libros</title>
</head>

<body> 
<div class="container-fluid row">
<form class = "col-4 p-3 m-auto" method="POST">
    <h2 class = "text-center text-secondary">Editar un libro</h2>
      <input type="hidden" name="id" value="<?=$_GET["idM"]?>" >
    <?php 

    include "controladores/LibroEditado.php";
        while ($datos=  $sql->fetch_object()) {?>

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Libro</label>
      <input type="text" class="form-control" name = "titulo" value = "<?=$datos->titulo ?>">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">autor_id</label>
      <input type="number" class="form-control" name= "autor_id" value = "<?=$datos->autor_id ?>">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">codigo unico</label>
      <input type="number" class="form-control" name= "ISBN" value = "<?=$datos->ISBN ?>">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">cantidad</label>
      <input type="text" class="form-control" name= "cantidad" value = "<?=$datos->cantidad ?>">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">año_publicacion</label>
      <input type="number" class="form-control" name = "año_publicacion" value = "<?=$datos->año_publicacion ?>">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">nombre_autor</label>
      <input type="text" class="form-control" name = "año_publicacion" value = "<?=$datos->nombre_autor ?>">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">descripcion</label>
      <input type="text" class="form-control" name = "descripcion" value = "<?=$datos->descripcion ?>">
    </div>

  <button type="submit" class="btn btn-primary" name = "registroLibro" value= "ok">Editar</button>
</form>

     <?php   
     }

    ?>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html> -->