<?php


if (!empty($_GET["idM"])) {
    $id = $_GET["idM"];
    
    // Asegúrate de que la variable $conexion esté disponible
    if (isset($conexion)) {
        $sql = $conexion->query("DELETE FROM contacto WHERE id = $id");

        if ($sql == 1) {
            echo "<div class='alert alert-success'>SE HA ELIMINADO CORRECTAMENTE</div>";
        } else {
            echo "<div class='alert alert-warning'>NO SE HA MODIFICADO</div>";
        }
    } else {
        echo "<div class='alert alert-danger'>Error: No se pudo establecer conexión a la base de datos</div>";
    }
}
?>
