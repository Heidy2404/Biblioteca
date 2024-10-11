<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/094deb4aca.js" crossorigin="anonymous"></script>

    <title>Contacto</title>
</head>
<body>
  <style>
 body
      {
        background-image: url('imagenes/iceland.jpg');
            background-size: 130%;
           
            background-position: center;
            padding-top: 0px;
      }

      .navbar {
        font-size: 25px; /* Tamaño de la fuente de la barra de navegación */
    }

    

    .navbar-nav .nav-link .foge {
        font-size: 22px; 
    }
    .javis
    {
      background-color: rgba(0, 255, 0,0.5);
    }
    .agenda
    {
      width: 150px;
      height: 100px;
      margin-left: 25%;
     
    }
  </style>

<?php
include "modelo/connection.php";
include "controladores/contactoEliminado.php";
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
          <a class="nav-link foge " aria-current="page" href="index.php">Autores</a>
        </li>
        <li class="nav-item">
          <a class="nav-link foge" href="Libros.php">Libros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active foge " href="contacto.php">Contactos</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<?php
include "modelo/connection.php";
include "controladores/contactoP.php"
?>



<div class="container-fluid row">
<form class = "col-4 p-3" method="POST">
<img class="agenda" src="imagenes/agenda.png" alt="agenda">
 
  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label text-white">Nombre</label>
    <input type="text" class="form-control text-white" name = "nombre">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label text-white">correo</label>
    <input type="text" class="form-control text-white" name= "correo">
  </div>


  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label text-white">Asunto</label>
    <input type="text" class="form-control text-white" name= "asunto">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label text-white">Comentario</label>
    <input type="text" class="form-control text-white" name= "comentario">
  </div>
  <button type="submit" class="btn btn-primary" name = "guardar" value= "ok">Guardar</button>
</form>

<div class = "col-8 p-4">
    <h2 class = "text-center javis">Agenda contactos</h2>
<table class="table table-success table-striped">
<thead class = "bg-info">
<thead>
    <tr>
      <th scope="col">id</th>
     
      <th scope="col">nombre</th>
      <th scope="col">correo</th>
      <th scope="col">asunto</th>
      <th scope="col">comentarios</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    
    <?php
    include "modelo/connection.php";
    $sql=$conexion->query("select * from contacto");

    while ($datos=$sql->fetch_object()) {?>
       <tr>
        
        <td><?= $datos-> id?></td>
       
        <td><?= $datos-> nombre?></td>
        <td><?= $datos-> correo?></td>
        <td><?= $datos-> asunto?></td>
        <td><?= $datos-> comentario ?> </td>
        <td><a href="contacto.php ?idM=<?= $datos ->id?>" class= "btn btn-small btn-danger"><i class="fa-solid fa-delete-left"></i></a>
</td>
</tr>
  
      <?php }
    ?>
    
  </tbody>
</table>
</div>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>