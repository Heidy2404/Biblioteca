<?php

if (!empty($_GET["idA"])) {
    $idA = $_GET["idA"];

    // Assuming $conexion is your database connection object
    $sql = $conexion->prepare("DELETE FROM autores WHERE id = ?");
    $sql->bind_param("i", $idA);
    $sql->execute();

    if ($sql->affected_rows > 0) {
        echo "<div class='alert alert-success'>SE HA ELIMINADO CORRECTAMENTE</div>";
    } else {
        echo "<div class='alert alert-warning'>NO SE HA MODIFICADO</div>";
    }

    $sql->close();
}

?>
