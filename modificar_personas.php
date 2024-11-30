<?php
    include "modelo/conexion.php";
    $id=$_GET["id"];
    $sql = $conexion->query("select * from usuarios where id_persona = $id");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <form class="col-4 p-3 m-auto" method="POST">
        <h3 class="text-center text-secondary">Registro de Personas</h3>
        <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
        <?php
            include "controlador/modificar_personas.php";
            while($datos = $sql ->fetch_object())
            {
        ?>
            <div class="mb-3">
                <label for="nombrePersona" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombrePersona" name="nombre" value="<?= $datos->nombre_s ?>">
            </div>
            <div class="mb-3">
                <label for="apellidoPersona" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="apellidoPersona" name="apellido" value="<?= $datos->apellidos ?>">
            </div>
            <div class="mb-3">
                <label for="fechaPersona" class="form-label">Fecha de nacimiento</label>
                <input type="date" class="form-control" id="fechaPersona" name="fecha" value="<?= $datos->fecha_nac ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="correo" value="<?= $datos->correo ?>">
            </div>
        <?php
            }
        ?>
        <button type="submit" class="btn btn-primary" name="btnModificar" value="OK">Modificar producto</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>