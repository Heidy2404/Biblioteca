<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/094deb4aca.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="assets/style.css">
    <title>Libros</title>
</head>
<body>
<style>
 body
      {
        background-image: url('imagenes/mejorado1.jpg');
            background-size: 130%;
           
            background-position: center;
            
      }

      .form-container {
            background-color: #fff; 
            padding: 10px; /* Ajusta el espacio dentro del formulario */
            border-radius: 10px; /* Ajusta la esquina del formulario */
        }

    .navbar {
        font-size: 25px; /* Tamaño de la fuente de la barra de navegación */
    }

    .navbar-brand img {
        width: 150px; 
        height: 120px; 
    }

    .navbar-nav .nav-link .foge {
        font-size: 22px; 
    }

    .javon
    {
      background-color: rgba(0, 255, 0, 0.5);
    }
</style>


<?php
include "modelo/connection.php";
include "controladores/LibroEliminado.php";
?>


<nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="imagenes/LOGO.png" alt="logo" ></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link foge " aria-current="page" href="index.php">Autores</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active foge " href="Libros.php">Libros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link foge " href="contacto.php">Contactos</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


    
<div class="container-fluid row">
<form class = "col-4 p-3" method="POST">
    <h2 class = "text-center text-dark javon">Agregar un libro</h2>

<?php
include "modelo/connection.php";
include "controladores/LibrosA.php";
  ?>


<div class="mb-3">
      <label for="exampleInputEmail1" class="form-label text-dark">imagen</label>
      <input type="file" class="form-control text-dark" name = "imagen">
    </div>

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label text-dark">titulo</label>
      <input type="text" class="form-control text-dark" name = "titulo">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label text-dark">nombre del autor</label>
      <input type="text" class="form-control text-dark" name = "nombre_autor">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label text-dark">autor_id</label>
      <input type="number" class="form-control text-dark" name= "autor_id">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label text-dark">ISBN</label>
      <input type="text" class="form-control text-dark" name= "ISBN">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label text-dark">cantidad</label>
      <input type="number" class="form-control text-dark" name= "cantidad">
    </div>

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label text-dark">año_publicacion</label>
      <input type="number" class="form-control text-dark" name= "año_publicacion">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label text-dark">descripcion</label>
      <input type="text" class="form-control text-dark" name= "descripcion">
    </div>
   
    


  <button type="submit" class="btn btn-primary" name = "registroLibro" value= "ok">Agregar</button>
</form>


<div class = "col-8 p-4">
    <h2 class = "text-center javon">Libros</h2>
<table class="table table-warning table-striped">
<thead class = "bg-info">
    <tr>
    
      <th scope="col">id_libro</th>
      <th scope="col">titulo</th>
      <th scope="col">nombre autor</th>
      <th scope="col">autor_id</th>
      <th scope="col">codigo unico</th>
      <th scope="col">cantidad</th>
      <th scope="col">año_publicacion</th>
      <th scope="col">Imagen</th>
      <th scope="col">descripcion</th>

      

     
      
    </tr>
  </thead>
  <tbody>
    <?php
      include "modelo/connection.php";
      $sql=$conexion->query("select * from libros");
      while ($datos=$sql->fetch_object()) { ?>
        <tr>
        
      <td><?= $datos -> id ?></td>
      <td><?= $datos -> titulo ?></td>
      <td><?= $datos -> nombre_autor ?></td>
      <td><?= $datos -> autor_id ?></td>
      <td><?= $datos -> ISBN ?></td>
      <td><?= $datos -> cantidad ?></td>
      <td><?= $datos -> año_publicacion ?></td>
      <?php echo $datos->foto_path; ?>
      <td><img src="<?= $datos->foto_path ?>" width="120px" alt="Imagen Libro"></td>
      <td><?= $datos -> descripcion ?></td>
      <td>
       
        <a href="Libros.php ?idM=<?= $datos -> id ?>" class= "btn btn-small btn-danger"><i class="fa-solid fa-delete-left"></i></a>
      </td>
    </tr>
      
     <?php  }
    ?>
  


    




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>