<?php
    if(!empty($_POST["btnModificar"]))
    {
        if(!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["fecha"]) and !empty($_POST["correo"]) )
        {
            $id = $_POST["id"];
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            $fecha = $_POST["fecha"];
            $correo = $_POST["correo"];
            
            $sql = $conexion->query("update usuarios set nombre_s='$nombre', apellidos='$apellido', fecha_nac='$fecha', correo='$correo' where id_persona=$id");
            
            if ($sql == 1) 
            {
                header("location:index.php");
            } else 
            {
                echo '<div class="alert alert-danger">Error al actualizar datos</div>';
            }
        }else
        {
            echo '<div class="alert alert-warning">Hay campos vacios</div>';
        }
    }
?>