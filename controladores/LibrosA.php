<?php

if (!empty($_POST["registroLibro"])) {
    if (($_POST["titulo"]) and !empty($_POST["autor_id"]) and !empty($_POST["descripcion"]) and !empty($_POST["ISBN"]) and !empty($_POST["cantidad"]) and !empty($_POST["año_publicacion"])and !empty($_POST["nombre_autor"])) {
        
       // $id = $_POST["id"];
        $titulo= $_POST["titulo"];
        $autor_id = $_POST["autor_id"];
        $descripcion= $_POST["descripcion"];
        $ISBN = $_POST["ISBN"];
        $cantidad = $_POST["cantidad"];
        $año_publicacion  = $_POST["año_publicacion"];
        $nombre_autor  = $_POST["nombre_autor"];


        $sql = $conexion->query("INSERT INTO libros ( titulo, autor_id, descripcion, ISBN, cantidad, año_publicacion,nombre_autor) VALUES ('$titulo', '$autor_id', '$descripcion', '$ISBN', '$cantidad','$año_publicacion','$nombre_autor')");

        if ($sql) {
            echo '<div class="alert alert-success">Libro registrado correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">Error al registrar el libro: ' . $conexion->error . '</div>';
        }

    } else {
        echo "Todos los campos deben ser llenados!!!!!";
    }
}

if (!empty($_FILES['foto_path']['name'])) {
    // Ruta donde se guardarán las imágenes
    $carpetaDestino = 'D:\photooshopp';

    // Generar un nombre único para el archivo
    $nombreArchivo = uniqid('img_', true) . '.' . pathinfo($_FILES['foto_path']['name'], PATHINFO_EXTENSION);

    // Ruta completa del archivo
    $rutaArchivo = $carpetaDestino . $nombreArchivo;

    // Mover el archivo al destino
    move_uploaded_file($_FILES['foto_path']['tmp_name'], $rutaArchivo);

    // Guardar la ruta en la base de datos
    $foto_path = $rutaArchivo;
} else {
    // Si no se cargó una imagen, puedes asignar un valor predeterminado o NULL según tu lógica
    $foto_path = 'D:\photooshopp';
}

?>
