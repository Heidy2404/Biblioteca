<?php


if (!empty($_POST["registro"])) {
    if (($_POST["nombre"]) && !empty($_POST["fecha_nacimiento"]) && !empty($_POST["nacionalidad"])) {
        // $id = $_POST["idA"];
        $nombre = $_POST["nombre"];
        $fecha = $_POST["fecha_nacimiento"];
        $nacionalidad = $_POST["nacionalidad"];

        $sql = $conexion->query("INSERT INTO autores (nombre, fecha_nacimiento, nacionalidad) VALUES ( '$nombre', '$fecha', '$nacionalidad')");
        
        if ($sql == 1) {
            echo '<div class="alert alert-success">Autor registrado correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">Error al registrar autor</div>';
        }
    } else {
        echo "Todos los campos deben ser llenados!!!!!";
    }
}
?>
