<?php



if (!empty($_POST["guardar"])) {
    if ( ($_POST["nombre"]) and !empty($_POST["correo"]) and !empty($_POST["asunto"]) and !empty($_POST["comentario"])) {
       
        // $fecha = $_POST["fecha"];
        $nombre = $_POST["nombre"];
        $correo = $_POST["correo"];
        $asunto = $_POST["asunto"];
        $comentario = $_POST["comentario"];

        $sql =$conexion->query("insert into contacto(nombre,correo,asunto,comentario) values('$nombre', '$correo', '$asunto', '$comentario') ");

            if ($sql==1) {
                echo '<div class = "alert alert-success">autor registrado correctamente</div>';
              }
              else{
                  echo '<div class = "alert alert-danger">Error al registrar autor</div>';
              }


    } else {
        echo "Todos los campos deben de ser llenados!!!!!";
    }
    
}

?>