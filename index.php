
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/094deb4aca.js" crossorigin="anonymous"></script>

    <title>Libreria</title>
    <style>

      body
      {
        background-image: url('imagenes/mejorado1.jpg');
            background-size: 130%;
           
            background-position: center;
            padding-top: 0px;
      }

      .form-container {
            background-color: #fff;
            padding: 10px;
            border-radius: 10px;
        }
      .navbar {
        font-size: 25px;
    }

    .navbar-brand img {
        width: 200px;
        height: 120px;
    }

    .navbar-nav .nav-link .foge {
        font-size: 22px;
    }
    .javo
    {
     background-color: rgba(0, 255, 0, 0.5)
    }
    .javo1
    {
      margin-top: 2%;
      background-color: rgba(0, 255, 0, 0.5);
      
    }
.fondo
{
  position: absolute;
}

  </style>
</head>
<body>




<?php
include "modelo/connection.php";
include "controladores/registroEliminado.php";
?>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
  <a class="navbar-brand" href="#"><img src="imagenes/LOGO.png" alt="logo" width="150px" height="120px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Autores</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Libros.php">Libros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contacto.php">Contactos</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    


<div class="container-fluid row">
<form class = "col-4 p-3 " method="POST">
    <h2 class = "text-center text-dark javo1">Agregar autor</h2>
    <br>
    <br>

<?php
include "modelo/connection.php";
include "controladores/registroP.php";
?>

  <!-- <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">id</label>
    <input type="number" class="form-control" name= "id">
  </div> -->
   
 
  <div class="mb-3  ">
    <label for="exampleInputEmail1" class="form-label ">nombre del autor</label>
    <input type="text" class="form-control" name = "nombre">
  </div>
  
  <div class="mb-3 ">
    <label for="exampleInputEmail1" class="form-label ">fecha de nacimiento</label>
    <input type="date" class="form-control" name="fecha_nacimiento">
  </div>

  <div class="mb-3 ">
    <label for="exampleInputEmail1" class="form-label ">nacionalidad</label>
    <input type="text" class="form-control" name= "nacionalidad">
  </div>
  

  <button type="submit" class="btn btn-primary" name = "registro" value= "ok">Registrar</button>
</form>


<div class = "col-8 p-4">
    <h2 class = "text-center javo">Autores de Libros</h2>
<table class="table table-info table-striped">
<thead class = "bg-info">
    <tr>
       <th scope="col">id</th> 
      <th scope="col">Nombre</th>
     
      <th scope="col">Fecha de nacimiento</th>
      <th scope="col">nacionalidad</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php
      include "modelo/connection.php";
      $sql=$conexion->query("select * from autores");
      while ($datos = $sql->fetch_object()) {
        ?>
        <tr>
            <td><?= $datos->id ?></td>
            <td><?= $datos->nombre?></td>
            <td><?= $datos->fecha_nacimiento ?></td>
            <td><?= $datos->nacionalidad ?></td>
            <td>
               
               <a href="index.php?idA=<?= $datos->id ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-delete-left"></i></a>
               

            </td>
        </tr>
        <?php
    }
    ?>
    
  </tbody>
</table>
</div>
<script>
function confirmarEliminarAutor(id) {
    if (confirm('¿Estás seguro de que deseas eliminar este autor?')) {
        // Lógica para eliminar el autor (puedes redirigir a una página PHP que maneje la eliminación)
        window.location.href = 'registroEliminado.php?id=' + id;
    }
}
</script>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>