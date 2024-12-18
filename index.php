<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD con php y mysql</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <div class="container-fluid row">
        <form class="col-4 p-3" method="POST">
            <h3 class="text-center text-secondary">Registro de Personas</h3>
            <?php
                include "modelo/conexion.php";
                include "controlador/registro_personas.php";
            ?>
            <div class="mb-3">
                <label for="nombrePersona" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombrePersona" name="nombre">
                <div id="nombrelHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="apellidoPersona" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="apellidoPersona" name="apellido">
                <div id="apellidoHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="fechaPersona" class="form-label">Fecha de nacimiento</label>
                <input type="date" class="form-control" id="fechaPersona" name="fecha">
                <div id="fechaHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="correo">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <button type="submit" class="btn btn-primary" name="btnRegistar" value="OK">Registar</button>
        </form>
        <div class="col-8 p-4">
            <h3 class="text-center text-secondary">Personas Registradas</h3>
            <table class="table">
                <thead class="bg-info">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NOMBRES</th>
                        <th scope="col">APELLIDOS</th>
                        <th scope="col">FECHA DE NACIMINETO</th>
                        <th scope="col">CORREO</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>                    
                    <?php
                        include "modelo/conexion.php";
                        $sql = $conexion->query(" select * from usuarios ");
                        while($datos = $sql->fetch_object())
                        {                            
                    ?>
                        <tr>
                        <td><?= $datos->id_persona ?></td>
                        <td><?= $datos->nombre_s ?></td>
                        <td><?= $datos->apellidos ?></td>
                        <td><?= $datos->fecha_nac ?></td>
                        <td><?= $datos->correo ?></td>                        
                        <td>
                            <a href="modificar_personas.php?id=<?= $datos->id_persona ?>" class="material-icons btn btn-small btn-warning" title="Editar">edit</a>
                            <span class="material-icons btn btn-small btn-danger" title="Eliminar">delete</span>
                        </td>
                        </tr>
                    <?php
                        }
                    ?>                    
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>