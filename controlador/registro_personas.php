<?php
    if(!empty($_POST["btnRegistar"]))
    {
        if(!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["fecha"]) and !empty($_POST["correo"]) )
        {
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            $fecha = $_POST["fecha"];
            $correo = $_POST["correo"];       
            
            $sql = $conexion->query("insert into usuarios(nombre_s,apellidos,fecha_nac,correo) values('$nombre','$apellido','$fecha','$correo')");
            if ($sql == 1) 
            {
                echo '<div class="alert alert-success">Persona Registrado correctamente</div>';
            } else 
            {
                echo '<div class="alert alert-danger">Error al registrar persona</div>';
            }
            
        }else
        {
            echo '<div class="alert alert-danger">Hay campos vacios</div>';
        }
    }
?>