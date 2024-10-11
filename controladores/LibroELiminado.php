<?php


if (!empty($_GET["idM"])) {
    $id=$_GET["idM"];
    $sql=$conexion->query("delete from libros where id=$id");
    if ($sql==1) {
        echo "<div class= 'alert alert-success'> SE HA ELIMINADO CORRECTAMENTE</div>";;
    } else {
        echo "<div class= 'alert alert-warning'> NO SE HA MODIFICADO</div>";
    }
    
}

?>